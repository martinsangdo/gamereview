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
        $cat_slug = $this->uri->segment(2);
        $cat_id = $this->uri->segment(3);
        $offset = is_numeric($this->uri->segment(4)) && intval($this->uri->segment(4)) > 0?$this->uri->segment(4):0;
        $this->load->model('category_model');
        //get all posts belong to this category id
        $posts_in_cat = $this->category_model->custom_query('SELECT block_content.* FROM category_post'.
            ' LEFT JOIN block_content ON block_content._id = category_post.post_id '.
            ' WHERE cat_id='.$cat_id.' AND block_content.status=1 ORDER BY block_content._id DESC LIMIT '.
            CAT_POST_NUM.' OFFSET '.$offset);
        $this->data['posts'] = $posts_in_cat;
        //get total posts in category
        $cat_detail = $this->category_model->read_row(array('_id'=>$cat_id));
        //create paging
        $base_url = '/category/'.$cat_slug.'/'.$cat_id.'/';
        $this->data['pagination'] = $this->create_pagination($base_url, $cat_detail->post_num, CAT_POST_NUM);
        $this->data['cat_detail'] = $cat_detail;
        //
        $this->load->view('front/webview/category', $this->data);
    }
    //get most read categories
    public function get_top_most_post(){
        $top_data = $this->category_model->custom_query('SELECT _id,name,slug FROM category ORDER BY post_num DESC LIMIT 20');
        $this->response(RestSuccess($top_data), SUCCESS_CODE);
    }
}