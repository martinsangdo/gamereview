<?php defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');

Class News extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('site_model');
        $this->load->model('block_content_model');
    }
    //show post detail
    public function index_get(){
        //find post detail
        $slug = $this->uri->segment(2);
        $article_detail = $this->block_content_model->read_row(array('slug'=>$slug));
//        var_dump($article_detail);
        $site_detail = $this->site_model->read_row(array('_id'=>$article_detail->site_id));


        $this->data['site_detail'] = $site_detail;
        $this->data['article_detail'] = $article_detail;
        $this->load->view('front/webview/news', $this->data);
    }
}