<?php defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');

Class Admin extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }
    //login Admin
    public function login_get(){
        $this->load->view('front/webview/admin/login', $this->data);
    }
}