<?php defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');

Class Banner_api extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('banner_model');
    }

    /*
     * function get banner list
     * method: post
     * params: offset, limit, last_id
     */
    function get_banner_list_post()
    {
        $language_code = !empty($this->input->request_headers()['Language']) ? $this->input->request_headers()['Language'] : LANGUAGE_DEFAULT;

        $offset = !empty($this->post('offset')) ? $this->post('offset') : 0;
        $limit = !empty($this->post('limit')) ? $this->post('limit') : LIMIT_DEFAULT;
        $last_id = !empty($this->post('last_id')) ? $this->post('last_id') : '';

        $where = [
            'banner.is_active' => true,
            'banner.is_delete' => false,
        ];
        $select = [
            'banner._id',
            'banner.name',
            'banner._description',
            'banner.img_src',
            'banner.link_url',
            'banner.create_time_mi',
        ];
        $banners = $this->banner_model->get_pagination($where, $select, $offset, $limit, $last_id);
        $res = !empty($banners) ? removeNullElementOfArray($banners) : [];

        return $this->response(RestSuccess($res), SUCCESS_CODE);
    }
}