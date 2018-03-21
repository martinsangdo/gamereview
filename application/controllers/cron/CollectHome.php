<?php defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');

Class CollectHome extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('site_model');
    }
    //collect all content from another site
    public function index_get(){
        //get all sites info
        $where = 'status=1';
        $site_info = $this->site_model->get_pagination($where, 0, 0);

        if (!$site_info){
            return;
        }
        $site_num = count($site_info);
        for ($i=0; $i<$site_num; $i++){
            //get latest posts of the site
            $post_list = $this->sendGet($site_info[$i]->url.'wp-json/wp/v2/posts?per_page='.$site_info[$i]->item_num);
            //collect info of each post
            $post_len = count($post_list);
            for ($j=0; $j<$post_len; $j++){
                $this->get_meaningful_detail($post_list[$j]);
            }
        }
    }
    //convert from post info of site into our own format
    function get_meaningful_detail($post_detail){
        $data = array(
          'title'=>$post_detail['title']['rendered'],
          'thumb_url'=>'',
          'slug'=>$post_detail['slug'],
          'time'=>$post_detail['date'],
          'author_name'=>'',
          'excerpt'=>$post_detail['excerpt']['rendered'],
          'category_name'=>'',      //should be first category
          'comment_num'=>0,
          'youtube_url'=>'',
        );
        //get thumbnail url

        //get author name

        //get category name

        //get comment number

        //get youtube_url

    }

    //get full detail of a blog from WP response
    function parse_post_detail($raw_detail){
        if (isset($raw_detail['_links']['wp:featuredmedia'][0]) &&
            isset($raw_detail['_links']['wp:featuredmedia'][0]['href'])){
            //there is one attached media
            $media_info = $this->sendGet($raw_detail['_links']['wp:featuredmedia'][0]['href']);
            if (isset($media_info['media_details']['sizes']['medium_large']['source_url'])){
                $raw_detail['thumb_url'] = $media_info['media_details']['sizes']['medium_large']['source_url'];
            } else if (isset($media_info['media_details']['sizes']['medium']['source_url'])) {
                $raw_detail['thumb_url'] = $media_info['media_details']['sizes']['medium']['source_url'];
            } else if (isset($media_info['media_details']['sizes']['large']['source_url'])) {
                $raw_detail['thumb_url'] = $media_info['media_details']['sizes']['large']['source_url'];
            } else if (isset($media_info['media_details']['sizes']['full']['source_url'])) {
                $raw_detail['thumb_url'] = $media_info['media_details']['sizes']['full']['source_url'];
            } else {
                //
            }

        } else {
            //must use another way to get thumbnail image

        }
        return $raw_detail;
    }
}