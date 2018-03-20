<?php defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');

Class Admin_category_api extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
    }

    /*
     * function index
     * method:
     * params:
     */
    public function index_get()
    {
        $res = RestSuccess('admin/category_api');
        $this->response($res, SUCCESS_CODE);
    }


    /*
    * function get user list
    * method: post
    * params: offset, limit
    */
    function get_category_list_post(){
        $keyword = !empty($this->post('search')['value']) ? $this->post('search')['value'] : '';
        $offset = !empty($this->post('start')) ? $this->post('start') : 0;
        $limit = !empty($this->post('length')) ? $this->post('length') : LIMIT_DEFAULT;
        $where = array(
            'category.is_delete' => false,
            'category.plain_name like' => '%'. skipVN($keyword, true) .'%',
        );
        $select = array(
            'category.*',
            'category.name'
        );
        $category = $this->category_model->get_pagination($where, $select, $offset, $limit);
        $total_records = $this->category_model->count_total($where);
        $rs = [
            'status' => SUCCESS_CODE,
            'message' => OK_MSG,
            'recordsTotal' => $total_records,
            'recordsFiltered' => $total_records,
            'data' => !empty($category) ? $category : [],
        ];
        $this->response($rs, SUCCESS_CODE);
    }

    /*
     * function add category
     * method: post
     * params: name, ordinal
     */
    function add_new_category_post()
    {

        //Category info
        $name = $this->post('name');
        $ordinal = $this->post('ordinal');
        $is_active = !empty($this->post('is_active')) ? 1 : 0 ;

        $check_verify_params = checkVerifyParams(array(
            $name
        ));
        if(!empty($check_verify_params)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
        }

        //insert category tb
        $this->category_model->create(array(
            'name' => $name,
            'plain_name' => skipVN($name, true),
            '_key' => generateKeyTranslation(),
            'ordinal' => $ordinal,
            'is_active' => $is_active,
            'create_time' => CURRENT_TIME,
            'update_time' => CURRENT_TIME,
            'create_time_mi' => CURRENT_MILLISECONDS
        ));
        $this->response(RestSuccess(), SUCCESS_CODE);
    }


    /*
     * function edit category
     * method: post
     * params: _id, name, ordinal
     */
    function edit_category_post()
    {

        //Category info
        $category_id = $this->post('category_id');
        $name = $this->post('name');
        $ordinal = $this->post('ordinal');
        $is_active = !empty($this->post('is_active')) ? 1 : 0 ;

        $check_verify_params = checkVerifyParams(array(
            $name
        ));
        if(!empty($check_verify_params)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
        }

        //insert category tb
        $this->category_model->update_by_condition(array(
           '_id' => $category_id
        ), array(
            'name' => $name,
            'plain_name' => skipVN($name, true),
            'ordinal' => $ordinal,
            'is_active' => $is_active,
        ));
        $this->response(RestSuccess(), SUCCESS_CODE);
    }


    /*
     * function delete category
     * method: put
     * params: _id, is_active
     */
    function delete_category_put()
    {
        $last = $this->uri->total_segments();
        $category_id = $this->uri->segment($last);
        $is_delete = !empty($this->put('is_delete')) ? 1 : 0;

        $check_verify_params = checkVerifyParams(array(
            $category_id,
        ));
        if(!empty($check_verify_params)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
        }

        $this->category_model->update_by_condition(array(
            '_id' => $category_id
        ), array(
            'is_delete' => $is_delete
        ));

        $where = array(
            'category._id' => $category_id
        );
        $select = array(
            'category.is_delete'
        );

        $record = $this->category_model->findOne($where, $select);

        $this->response(RestSuccess($record), SUCCESS_CODE);
    }

    function category_toggle_is_active_put(){
        $last = $this->uri->total_segments();
        $category_id = $this->uri->segment($last);
        $is_active = !empty($this->put('is_active')) ? 1 : 0;

        $check_verify_params = checkVerifyParams(array(
            $category_id,
        ));
        if(!empty($check_verify_params)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
        }

        $this->category_model->update_by_condition(array(
            '_id' => $category_id
        ), array(
            'is_active' => $is_active
        ));

        $where = array(
            'category._id' => $category_id
        );
        $select = array(
            'category.is_active'
        );

        $category = $this->category_model->findOne($where, $select);

        $this->response(RestSuccess($category), SUCCESS_CODE);
    }
}