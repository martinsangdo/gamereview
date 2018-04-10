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
        $this->load->view('front/webview/category', $this->data);
    }
    //get most read categories
    public function get_top_most_post(){
        $top_data = $this->category_model->custom_query('SELECT _id,name,slug FROM category ORDER BY post_num DESC LIMIT 20');
        $this->response(RestSuccess($top_data), SUCCESS_CODE);
    }
}