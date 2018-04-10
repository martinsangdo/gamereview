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
        $cat_slug = $this->uri->segment(2); //many slugs of categories
        $cat_ids = $this->uri->segment(3);  //many category ids
        $cat_id_list = explode('-', $cat_ids);
        $offset = is_numeric($this->uri->segment(4)) && intval($this->uri->segment(4)) > 0?$this->uri->segment(4):0;
        //get all posts belong to this category id
        $posts_in_cat = $this->category_model->custom_query('SELECT DISTINCT block_content.* FROM category_post'.
            ' LEFT JOIN block_content ON block_content._id = category_post.post_id '.
            ' WHERE cat_id IN ('.implode(',',$cat_id_list).') AND block_content.status=1 ORDER BY block_content._id DESC LIMIT '.
            CAT_POST_NUM.' OFFSET '.$offset);
        $this->data['posts'] = $posts_in_cat;
        //get total posts in category
        $total_post = $this->category_model->custom_query('SELECT SUM(post_num) AS total_post FROM category WHERE _id IN ('.implode(',',$cat_id_list).')');
        //create paging
        $base_url = '/category/'.$cat_slug.'/'.$cat_ids.'/';
        $this->data['pagination'] = $this->create_pagination($base_url, $total_post[0]->total_post, CAT_POST_NUM, 4);
        //
        $this->load->view('front/webview/category', $this->data);
    }
    //get most read categories
    public function get_top_most_post(){
        $top_data = $this->category_model->custom_query('SELECT _id,name,slug FROM category ORDER BY post_num DESC LIMIT 20');
        $this->response(RestSuccess($top_data), SUCCESS_CODE);
    }
}