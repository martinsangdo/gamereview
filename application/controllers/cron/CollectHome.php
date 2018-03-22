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
    //collect all content from another site
    public function index_get(){
        if ($this->uri->segment(2)==null){
            return;
        }
        $site_id = $this->uri->segment(2);
        //get all sites info
        $where = array('status'=> 1, '_id' => $site_id, 'type'=> 'wp');
        $site_info = $this->site_model->get_pagination($where, 0, 1);
        if (!$site_info){
            return;
        }
        $post_list = $this->sendGetWithoutHeader($site_info[0]->api_uri.$site_info[0]->post_uri.'&per_page='.$site_info[0]->item_num);
//        var_dump($site_info[0]->api_uri.$site_info[0]->post_uri.'&per_page='.$site_info[0]->item_num);
//        var_dump($post_list);
        //collect info of each post & upsert into DB
        $post_len = count($post_list);
        $final_data = array();
        for ($j=0; $j<$post_len; $j++){
            $final_data[$j] = $this->get_meaningful_detail($site_info[0], $post_list[$j]);
        }
//        $this->block_content_model->delete_by_condition(array('site_id'=>$site_id));     //clear all to update latest info
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
            }
        }
        echo 'finished';
    }
    //convert from post info of site into our own format
    function get_meaningful_detail($site_info, $raw_detail){
        $data = array(
          'site_id' => $site_info->_id,
          'title'=>$raw_detail['title']['rendered'],
          'thumb_url'=>'',
          'slug'=>$raw_detail['slug'],
          'time'=>$raw_detail['date'],
          'author_name'=>'',
          'excerpt'=>$raw_detail['excerpt']['rendered'],
          'category_name'=>'',      //should be first category
          'category_slug'=>'',
          'comment_num'=>0,
          'youtube_url'=>'',
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
        if (count($raw_detail['categories']) > 0){
            $cat_info = $this->sendGetWithoutHeader($site_info->api_uri.'categories/'.$raw_detail['categories'][0]);
            $data['category_name'] = $cat_info['name'];
            $data['category_slug'] = $cat_info['slug'];
        }
        //get comment number
        $comment_list = $this->sendGet($site_info->api_uri.'comments?post='.$raw_detail['id']);
        if (isset($comment_list['header']['X-WP-Total'])){
            $data['comment_num'] = count($comment_list['header']['X-WP-Total']);
        }
        return $data;
    }

    //get thumbnail url of a blog from WP response
    function get_thumbnail_url($site_info, $raw_detail){
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
            //must use another way to get thumbnail image

        }
        return '';
    }
    //
    public function test_link_post()
    {
        $domain = $this->input->post('domain');
        $url = $this->input->post('url');
        $type = $this->input->post('type');
        if ($type == 'wp'){
            //Wordpress
            $start=time();
            $post_list = $this->sendGetWithoutHeader($url);
            $post_len = count($post_list);
            $final_data = array();
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
        }

    }
}