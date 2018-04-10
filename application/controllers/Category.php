<?php defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');

Class Category extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
    }
    //show list of posts inside category
    public function index_get(){
        $cat_id = $this->uri->segment(3);
        $this->load->model('category_model');
        //get all posts belong to this category id
        $posts_in_cat = $this->category_model->custom_query('SELECT block_content.* FROM category_post'.
            ' LEFT JOIN block_content ON block_content._id = category_post.post_id '.
            ' WHERE cat_id='.$cat_id.' ORDER BY block_content._id DESC LIMIT '.DEFAULT_PAGE_LEN);
        $this->data['posts'] = $posts_in_cat;
        //create paging

        //
        $this->load->view('front/webview/category', $this->data);
    }
    //get most read categories
    public function get_top_most_post(){
        $top_data = $this->category_model->custom_query('SELECT _id,name,slug FROM category ORDER BY post_num DESC LIMIT 20');
        $this->response(RestSuccess($top_data), SUCCESS_CODE);
    }
}