<?php defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');

Class News extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
//        $this->output->enable_profiler(TRUE);

    }
    //show post detail
    public function index_get(){
        //find post detail
        $slug = $this->uri->segment(2);
        $this->load->model('site_model');
        $this->load->model('block_content_model');
        $article_detail = $this->block_content_model->read_row(array('slug'=>$slug));
        $site_detail = $this->site_model->read_row(array('_id'=>$article_detail->site_id));
        $tag_list = $this->block_content_model->get_tags($article_detail->_id);
        //
        $this->data[BLOCK_KEY_3] = $this->block_content_model->get_latest_posts(array('site_id' => 6), 0, DEFAULT_PAGE_LEN, $article_detail->_id);
        $this->data[BLOCK_KEY_14] = $this->block_content_model->get_latest_posts(array('site_id' => 20), 0, DEFAULT_PAGE_LEN);
        //
        $this->data['site_detail'] = $site_detail;
        $this->data['article_detail'] = $article_detail;
        $this->data['tag_list'] = $tag_list;
        $this->load->view('front/webview/news', $this->data);
    }

    //get related posts of this one
    public function get_related_posts_post(){
        $post_id = $this->input->post('post_id');
        //get all categories of this post
        $this->load->model('category_model');
        $category_ids = $this->category_model->custom_query('SELECT cat_id FROM category_post WHERE post_id='.$post_id);
        //
        $related_posts = array();
        if ($category_ids){
            //has some categories
            $cat_num = count($category_ids);
            if ($cat_num > RELATED_POST_NUM){
                $each_post_num = 1;     //each category get 1 post
            } else {
                $each_post_num = ceil(RELATED_POST_NUM / $cat_num);   //number of posts to get in each category
            }
            //get posts in each category
            for ($i=0; $i<$cat_num; $i++){
                $posts_in_cat = $this->category_model->custom_query('SELECT title,block_content.slug,thumb_url FROM category_post'.
                    ' LEFT JOIN block_content ON block_content._id = category_post.post_id WHERE post_id <> '.$post_id.
                    ' AND cat_id='.$category_ids[$i]->cat_id.' ORDER BY post_id DESC LIMIT '.$each_post_num);
                if ($posts_in_cat){
                    for ($j=0; $j<count($posts_in_cat);$j++){
                        $related_posts[] = $posts_in_cat[$j];
                    }
                }
            }
        }
        $this->response(RestSuccess($related_posts), SUCCESS_CODE);
    }
}