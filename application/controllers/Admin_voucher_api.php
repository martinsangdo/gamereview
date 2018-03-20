<?php defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');

Class Admin_voucher_api extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('voucher_model');
    }

    /*
     * function index
     * method:
     * params:
     */
    public function index_get()
    {
        $res = RestSuccess('admin/voucher_api');
        $this->response($res, SUCCESS_CODE);
    }

    /*
    * function get user list
    * method: post
    * params: offset, limit
    */
    function get_voucher_list_post(){
        $keyword = !empty($this->post('search')['value']) ? $this->post('search')['value'] : '';
        $offset = !empty($this->post('start')) ? $this->post('start') : 0;
        $limit = !empty($this->post('length')) ? $this->post('length') : LIMIT_DEFAULT;
        $where = array(
            'voucher.is_delete' => false,
            'voucher.plain_name like' => '%'. skipVN($keyword, true) .'%',
        );

        $voucher = $this->voucher_model->get_pagination($where, $offset, $limit);
        $total_records = $this->voucher_model->count_total($where);
        $rs = [
            'status' => SUCCESS_CODE,
            'message' => OK_MSG,
            'recordsTotal' => $total_records,
            'recordsFiltered' => $total_records,
            'data' => !empty($voucher) ? $voucher : [],
        ];
        $this->response($rs, SUCCESS_CODE);
    }

    /*
     * function add user
     * method: post
     * params: username, password, email, ...
     */
    function add_new_voucher_post()
    {
        //Voucher info
        $code = generateReferenceCode(0,5);
        $name = $this->post('name');
        $description = $this->post('_description');
        $value = str_replace(',', '', $this->post('_value'));
        $time_start = date('Y-m-d', strtotime($this->post('time_start')));
        $time_end = date('Y-m-d', strtotime($this->post('time_end')));
        $is_active = !empty($this->post('is_active')) ? 1 : 0 ;

        $check_verify_params = checkVerifyParams(array(
            $name,
            $value
        ));
        if(!empty($check_verify_params)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
        }

        //upload img_src
        $img_path = $_FILES['img_src']['name'];
        $img_path_ext = pathinfo($img_path, PATHINFO_EXTENSION);
        $config['upload_path'] = './public/upload/img/voucher';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = strtotime('now') .'.'. $img_path_ext;

        //Load upload library and initialize configuration
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('img_src')) {

            //insert account tb
            $this->voucher_model->create(array(
                'code' => $code,
                'name' => $name,
                'plain_name' => skipVN($name, true),
                '_description' => $description,
                'img_src' => 'public/upload/img/voucher/'. $config['file_name'],
                '_value' => $value,
                'time_start' => $time_start,
                'time_end' => $time_end,
                'is_active' => $is_active,
                'create_time' => CURRENT_TIME,
                'update_time' => CURRENT_TIME,
                'create_time_mi' => CURRENT_MILLISECONDS
            ));
            $this->response(RestSuccess(), SUCCESS_CODE);
        }
        else{
            $this->response(RestServerError(), SERVER_ERROR_CODE);
        }dump($time_start);
    }

    function update_voucher_post()
    {
        //Voucher info
        $voucher_id = $this->post('voucher_id');
        $name = $this->post('name');
        $description = $this->post('_description');
        $value = str_replace(',', '', $this->post('_value'));
        $time_start = date('Y-m-d', strtotime($this->post('time_start')));
        $time_end = date('Y-m-d', strtotime($this->post('time_end')));
        $is_active = !empty($this->post('is_active')) ? 1 : 0 ;

        $check_verify_params = checkVerifyParams(array(
            $voucher_id,
            $name
        ));

        if(!empty($check_verify_params)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
        }

        $where = array (
            '_id' => $voucher_id,
            'is_delete' => false,
        );

        $voucher = $this->voucher_model->findOne($where, '*');
        if(empty($voucher)){
            $this->response(RestNotFound(), NOT_FOUND_CODE);
        }

        $data_upload = array(
            'name' => $name,
            'plain_name' => skipVN($name, true),
            '_description' => $description,
            '_value' => $value,
            'time_start' => $time_start,
            'time_end' => $time_end,
            'is_active' => $is_active,
            'update_time' => CURRENT_TIME,
            'create_time_mi' => CURRENT_MILLISECONDS
        );

        //upload img_src
        if(!empty($_FILES['img_src']['name']))
        {
            $img_path = $_FILES['img_src']['name'];
            $img_path_ext = pathinfo($img_path, PATHINFO_EXTENSION);
            $config['upload_path'] = './public/upload/img/voucher';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name'] = strtotime('now') .'.'. $img_path_ext;

            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            //delete old file
            if(file_exists(UPLOAD_PATH. $voucher->img_src)) {
                unlink(UPLOAD_PATH . $voucher->img_src);
            }

            if ($this->upload->do_upload('img_src')) {
                $data_upload['img_src'] = 'public/upload/img/voucher/'. $config['file_name'];
            }
            else{
                $this->response(RestServerError(), SERVER_ERROR_CODE);
            }
        }


        //update voucher tb
        $this->voucher_model->update_by_condition(array(
                '_id' => $voucher_id
            )
            ,$data_upload);

        $this->response(RestSuccess(), SUCCESS_CODE);
    }

    function delete_voucher_put()
    {
        $last = $this->uri->total_segments();
        $voucher_id = $this->uri->segment($last);
        $is_delete = !empty($this->put('is_delete')) ? 1 : 0;

        $check_verify_params = checkVerifyParams(array(
            $voucher_id,
        ));
        if(!empty($check_verify_params)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
        }

        $this->voucher_model->update_by_condition(array(
            '_id' => $voucher_id
        ), array(
            'is_delete' => $is_delete
        ));

        $where = array(
            '_id' => $voucher_id
        );
        $select = array(
            'is_delete'
        );

        $voucher = $this->voucher_model->findOne($where, $select);

        $this->response(RestSuccess($voucher), SUCCESS_CODE);
    }

    function voucher_toggle_is_active_put(){
        $last = $this->uri->total_segments();
        $voucher_id = $this->uri->segment($last);
        $is_active = !empty($this->put('is_active')) ? 1 : 0;

        $check_verify_params = checkVerifyParams(array(
            $voucher_id,
        ));
        if(!empty($check_verify_params)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
        }

        $this->voucher_model->update_by_condition(array(
            '_id' => $voucher_id
        ), array(
            'is_active' => $is_active
        ));

        $where = array(
            'voucher._id' => $voucher_id
        );
        $select = array(
            'voucher.is_active'
        );

        $voucher = $this->voucher_model->findOne($where, $select);

        $this->response(RestSuccess($voucher), SUCCESS_CODE);
    }
}