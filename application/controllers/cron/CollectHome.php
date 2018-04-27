<?php defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');

Class CollectHome extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('site_model');
        $this->load->model('block_content_model');
    }
    //collect all content from another site, called from Crontab
    public function index_get(){
        echo 'do nothing';
    }
    //get data from RSS url
    public function collect_data_from_site_id_get(){
        if ($this->uri->segment(3)==null){
            echo 'empty site id';
            return;
        }
        $site_id = $this->uri->segment(3);
        //get all sites info
        $where = array('status'=> 1, '_id' => $site_id);
        $site_info = $this->site_model->get_pagination($where, 0, 1);
        if (!$site_info){
            echo 'empty site info';
            return;
        }
        $final_data = array();
        $post_len = 0;
        if ($site_info[0]->type == WORDPRESS_TYPE){
            //this is using WP API
            $post_list = $this->sendGetWithoutHeader($site_info[0]->api_uri.$site_info[0]->post_uri.'&per_page='.$site_info[0]->item_num);
            $post_len = count($post_list);
            for ($j=0; $j<$post_len; $j++){
                $final_data[$j] = $this->get_meaningful_detail($site_info[0], $post_list[$j]);
            }
        } else if ($site_info[0]->type == RSS_TYPE){
            //this is RSS site
            $rss_items = $this->parse_rss($site_info[0]->post_uri);
            $this->load->library('OpenGraph.php');
            $post_len = count($rss_items);
            for ($j=0; $j<$post_len; $j++){
                $graph = OpenGraph::fetch($rss_items[$j]['link']);
                $final_data[$j] = array(
                    'site_id'=>$site_info[0]->_id,
                    'title'=>$rss_items[$j]['title'],
                    'thumb_url'=>isset($graph->image)?$graph->image:'',
                    'slug'=>sanitize($rss_items[$j]['title']),
                    'time'=>date('Y-m-d h:m:s', strtotime($rss_items[$j]['pubDate'])),
                    'author_name'=>'',
                    'excerpt'=>$rss_items[$j]['description'],
                    'comment_num'=>0,
                    'original_post_id'=>$rss_items[$j]['guid'],
                    'original_url'=>$rss_items[$j]['link']
                );
            }
        }
        //upsert data to content
        $new_post = 0;
        for ($j=0; $j<$post_len; $j++){
            //check if the post existed in db
            $exist_cond = array(
                'site_id'=>$site_info[0]->_id,
                'original_post_id'=>$final_data[$j]['original_post_id']
            );
            if ($this->block_content_model->get_total($exist_cond) > 0){
                //update its content
                $this->block_content_model->update_by_condition($exist_cond, $final_data[$j]);
            } else {
                //insert new one
                $this->block_content_model->create($final_data[$j]);
                $new_post++;
            }
        }
        //update crawling time of site
        $this->site_model->update_crawl($site_info[0]->_id, $new_post);
//        echo 'finished';
    }
    //convert from post info of site into our own format
    private function get_meaningful_detail($site_info, $raw_detail){
        $data = array(
            'site_id' => $site_info->_id,
            'title'=>$raw_detail['title']['rendered'],
            'thumb_url'=>'',
            'slug'=>$raw_detail['slug'],
            'time'=>$raw_detail['date'],
            'author_name'=>'',
            'excerpt'=>$raw_detail['excerpt']['rendered'],
            'comment_num'=>0,
            'original_post_id'=>$raw_detail['id'],
            'original_url'=>$raw_detail['link']
        );
        //get thumbnail url
        $data['thumb_url'] = $this->get_thumbnail_url($site_info, $raw_detail);
        //get author name
        if ($raw_detail['author'] > 0){
            $user_info = $this->sendGetWithoutHeader($site_info->api_uri.'users/'.$raw_detail['author']);
            if (isset($user_info['name'])){
                $data['author_name'] = $user_info['name'];
            }
        }
        //get category name (first one)
//        if (count($raw_detail['categories']) > 0){
//            $cat_info = $this->sendGetWithoutHeader($site_info->api_uri.'categories/'.$raw_detail['categories'][0]);
//            $data['category_name'] = $cat_info['name'];
//            $data['category_slug'] = $cat_info['slug'];
//        }
        //get comment number (skip it)
//        $comment_list = $this->sendGet($site_info->api_uri.'comments?post='.$raw_detail['id']);
//        if (isset($comment_list['header']['X-WP-Total'])){
//            $data['comment_num'] = count($comment_list['header']['X-WP-Total']);
//        }
        return $data;
    }
    //get thumbnail url of a blog from WP response
    private function get_thumbnail_url($site_info, $raw_detail){
        if (isset($raw_detail['_links']['wp:featuredmedia'][0]) &&
            isset($raw_detail['_links']['wp:featuredmedia'][0]['href'])){
            //there is one attached media
            $media_info = $this->sendGetWithoutHeader($raw_detail['_links']['wp:featuredmedia'][0]['href']);
            if (isset($media_info['media_details']['sizes']['medium']['source_url'])) {
                return $media_info['media_details']['sizes']['medium']['source_url'];
            } else if (isset($media_info['media_details']['sizes']['medium_large']['source_url'])){
                return $media_info['media_details']['sizes']['medium_large']['source_url'];
            } else if (isset($media_info['media_details']['sizes']['large']['source_url'])) {
                return $media_info['media_details']['sizes']['large']['source_url'];
            } else if (isset($media_info['media_details']['sizes']['full']['source_url'])) {
                return $media_info['media_details']['sizes']['full']['source_url'];
            } else if (isset($media_info['source_url'])){
                //try to get from full source
                return $media_info['source_url'].$site_info->thumb_url_param;
            }
        } else {
            //todo: must use another way to get thumbnail image

        }
        return '';
    }
    //
    public function test_link_post()
    {
        $domain = $this->input->post('domain');
        $url = $this->input->post('url');
        $type = $this->input->post('type');
        $final_data = array();

        if ($type == 'wp'){
            //Wordpress
            $start=time();
            $post_list = $this->sendGetWithoutHeader($url);
            $post_len = count($post_list);

            $site_info =  (object) array(
                '_id'=> 1,
                'api_uri'=> $domain.'/wp-json/wp/v2/'
            );
            for ($j=0; $j<$post_len; $j++){
                $final_data[$j] = $this->get_meaningful_detail($site_info, $post_list[$j]);
            }
            echo $this->responseJsonData(array(
                'data' => $final_data
            ));
        } if ($type == 'rss') {
            //RSS feed
            $rss_items = $this->parse_rss($url);
//            var_dump($rss_items)
            $this->load->library('OpenGraph.php');
            $post_len = count($rss_items);
            for ($j=0; $j<$post_len; $j++){
                $graph = OpenGraph::fetch($rss_items[$j]['link']);
                $final_data[$j] = array(
                    'title'=>$rss_items[$j]['title'],
                    'thumb_url'=>$graph->image,
                    'slug'=>'',
                    'time'=>$rss_items[$j]['pubDate'],
                    'author_name'=>'',
                    'excerpt'=>$rss_items[$j]['description'],
                    'comment_num'=>0,
                    'original_post_id'=>$rss_items[$j]['guid'],
                    'original_url'=>$rss_items[$j]['link']
                );
            }
            echo $this->responseJsonData(array(
                'data' => $final_data
            ));
        }
    }
    //
    private function parse_rss($link_rss){
        $this->load->library('LastRSS.php');
// create lastRSS object
        $rss = new LastRSS;
// setup transparent cache
        $rss->cache_dir = './cache';
        $rss->cache_time = 3600; // one hour
// load some RSS file
        if ($rs = $rss->get($link_rss)) {
// here we can work with RSS fields
//            var_dump($rs);
            return $rs['items'];
        } else {
            echo 'error parse rss';
            return null;
        }
    }
    //
    public function show_crawl_time_get(){
        $this->load->model(array('video_model'));
        $this->data['list'] = $this->site_model->get_pagination(array('status' => 1), 0, 0);
        //get video list
        $videos = $this->video_model->custom_query('SELECT *, _id AS playlists FROM video_channel');
        for ($i=0; $i<count($videos); $i++){
            $video_sql = 'SELECT * FROM video_playlist WHERE channel_id='.$videos[$i]->_id;
            $videos[$i]->playlists = $this->video_model->custom_query($video_sql);
        }
        $this->data['videos'] = $videos;
        //get total posts
        $this->data['total_post'] = $this->block_content_model->get_total(array('status'=>1));
        //get total videos
        $this->data['total_videos'] = $this->video_model->get_total(array('status'=>1));

        $this->load->view('front/webview/admin/show_crawl_time', $this->data);
    }
    //try to parse some website content
    //https://davidwalsh.name/php-notifications
    public function test_parse_get(){
//        $url = 'https://www.gamespot.com/videos/';
//        $url = 'https://www.gamespot.com/videos/pubgs-creator-talks-mobile-mods-and-more/2300-6443375/';
        $url = 'http://www.ign.com/videos';

        $this->load->library('simple_html_dom');
        $html = file_get_html($url);
        // Find all images
        foreach($html->find('a.grid_4.alpha') as $element){
            echo $element->href.'<br/>';
        }
//        foreach($html->find('div.av-wrapper') as $element){
//            echo $element->innertext;
//            foreach($element->find('video') as $video){
//                echo $video;
//            }
//        }
//        echo ('<video id="video_js-vid-player-uvpjs725743919" style="width: 100%; visibility: visible;" src="blob:https://www.gamespot.com/01c693be-ea83-410c-bea3-46eecc5804cd"></video>');
//        $this->load->view('front/webview/video', $this->data);
    }
}