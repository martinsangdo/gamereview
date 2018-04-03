<?php defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');

Class Article extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('site_model');
        $this->load->model('block_content_model');
    }
    //collect all content from another site, called from Crontab
    public function index_get(){
        $this->load->view('front/webview/article', $this->data);
    }
}