<?php defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');

Class Common_api extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('common_setting_model');
        $this->load->model('about_model');
    }

    /*
     * function get setting
     * method: get
     * params:
     */
    function get_setting_get(){
        $setting = $this->common_setting_model->get_first_row();
        $res = [
            'large_total_price' => $setting->large_total_price,
            'small_total_price' => $setting->small_total_price,
            'large_fee_price' => $setting->large_fee_price,
            'small_fee_price' => $setting->small_fee_price,
            'limit_time_delivery' => $setting->limit_time_delivery,
            'limit_price_use_voucher' => $setting->limit_price_use_voucher,
        ];
        $res = removeNullOfObject($res);
        $this->response(RestSuccess($res), SUCCESS_CODE);
    }

    /*
     * function get app info
     * method: get
     * params:
     */
    function get_app_info_get(){
        $about = $this->about_model->get_first_row();
        $res = [
            'hotline' => $about->hotline,
            'email' => $about->email,
            'address' => $about->address,
        ];
        $res = removeNullOfObject($res);
        $this->response(RestSuccess($res), SUCCESS_CODE);
    }
}