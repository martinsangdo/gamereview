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
        //get all sites info
        $where = array('status'=> 1);
        $site_info = $this->site_model->get_pagination($where, 0, 0);

        if (!$site_info){
            return;
        }
        $site_num = count($site_info);
        /*
        for ($i=0; $i<$site_num; $i++){
            //get latest posts of the site
            $post_list = $this->sendGet($site_info[$i]->url.'wp-json/wp/v2/posts?per_page='.$site_info[$i]->item_num);
            //collect info of each post
            $post_len = count($post_list['data']);
            for ($j=0; $j<$post_len; $j++){
                $this->get_meaningful_detail($site_info[$i]->id, $site_info[$i]->url, $post_list['data'][$j]);
            }
        }
        */
    }
    //convert from post info of site into our own format
    function get_meaningful_detail($site_id, $site_url, $raw_detail){
        $data = array(
          '_key' => BLOCK_KEY_1,
          'site_id' => $site_id,
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
          'original_post_id'=>$raw_detail['id']
        );
        //get thumbnail url
        $data['thumb_url'] = $this->get_thumbnail_url($raw_detail);
        //get author name
        if ($raw_detail['author'] > 0){
            $user_info = $this->sendGetWithoutHeader($site_url.'wp-json/wp/v2/users/'.$raw_detail['author']);
            $data['author_name'] = $user_info['name'];
        }
        //get category name (first one)
        if (count($raw_detail['categories']) > 0){
            $cat_info = $this->sendGetWithoutHeader($site_url.'wp-json/wp/v2/categories/'.$raw_detail['categories'][0]);
            $data['category_name'] = $cat_info['name'];
            $data['category_slug'] = $cat_info['slug'];
        }
        //get comment number
        $comment_list = $this->sendGet($site_url.'wp-json/wp/v2/comments?post='.$raw_detail['id']);
        if (isset($comment_list['header']['X-WP-Total'])){
            $data['comment_num'] = count($comment_list['header']['X-WP-Total']);
        }
        //get youtube_url

        //upsert data into database
//        var_dump($data);
        $this->block_content_model->create($data);
    }

    //get thumbnail url of a blog from WP response
    function get_thumbnail_url($raw_detail){
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
            } else {
                //
            }
        } else {
            //must use another way to get thumbnail image

        }
        return '';
    }
}