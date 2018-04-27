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
        $this->data['captcha'] = $this->generateCaptchaImageTag();
        $this->load->view('front/webview/admin/login', $this->data);
    }
    //get new tag <image/> of captcha
    function read_new_captcha_post(){
        $captcha = $this->generateCaptchaImageTag();
        $this->response(RestSuccess($captcha), SUCCESS_CODE);
    }
}