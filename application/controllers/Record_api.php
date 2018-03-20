<?php defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');

Class Record_api extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
        $this->load->model('record_model');
        $this->load->model('record_file_model');
    }

    /*
     * function index
     * method:
     * params:
     */
    public function index_get()
    {
        $res = RestSuccess('record_api');
        $this->response($res, SUCCESS_CODE);
    }

    /*
     * function get records per category
     * method: post
     * params: limit_record, offset, limit, last_id
     */
    function get_records_per_category_post()
    {
        $language_code = !empty($this->input->request_headers()['Language']) ? $this->input->request_headers()['Language'] : LANGUAGE_DEFAULT;

        $limit_record = !empty($this->post('limit_record')) ? $this->post('limit_record') : LIMIT_RECORD_DEFAULT;
        $offset = !empty($this->post('offset')) ? $this->post('offset') : 0;
        $limit = !empty($this->post('limit')) ? $this->post('limit') : LIMIT_DEFAULT;
        $last_id = !empty($this->post('last_id')) ? $this->post('last_id') : '';
        $is_featured = !empty($this->post('is_featured')) ? true : false;

        $where = array(
            'category.is_active' => true,
            'category.is_delete' => false,
        );

        $select = array(
            'category._id',
            'category.name'
        );
        $categories = $this->category_model->get_pagination($where, $select, $offset, $limit, $last_id);

        if(empty($categories) || !count($categories)){
            $this->response(RestSuccess([]), SUCCESS_CODE);
        }

        $res = [];
        foreach($categories as $category){
            $where = [
                'category._id' => $category->_id,
                'record.is_active' => true,
                'record.is_delete' => false,
            ];
            if(!empty($is_featured)){ //get featured records
                $where['is_featured'] = true;
            }
            $select = [
                'record._id',
                'record.code',
                'record.img_src',
                'record.title',
                'record.price',
                'record.sale_price',
            ];
            $records = $this->record_model->get_pagination($where, $select, 0, $limit_record);
            if(!empty($records) && count($records)){
                $data = [
                    '_id' => $category->_id,
                    'name' => !empty($category->_value) ? $category->_value : $category->name,
                ];

                $data['data_record'] = $records;

                $res[] = $data;
            } /* empty records */

        } /* foreach $categories */
        $this->response(RestSuccess(!empty($res) ? removeNullElementOfArray($res) : []), SUCCESS_CODE);
    }

    /*
     * function get_all_records_by_category
     * method: post
     * params: category_id, offset, limit,
     */
    function get_all_records_by_category_post()
    {
        $language_code = !empty($this->input->request_headers()['Language']) ? $this->input->request_headers()['Language'] : LANGUAGE_DEFAULT;

        $category_id = $this->post('category_id');
        $offset = !empty($this->post('offset')) ? $this->post('offset') : 0;
        $limit = !empty($this->post('limit')) ? $this->post('limit') : LIMIT_DEFAULT;
        $last_id = !empty($this->post('last_id')) ? $this->post('last_id') : '';

        $check_verify_params = checkVerifyParams([$category_id]);
        if(!empty($check_verify_params)){
            $this->response($check_verify_params, BAD_REQUEST_CODE);
        }

        $where = [
            'category._id' => $category_id,
            'category.is_active' => true,
            'category.is_delete' => false,
        ];
        $category = $this->category_model->findOne($where, '*');
        if(empty($category)){
            $this->response(RestNotFound(), NOT_FOUND_CODE);
        }

        $where = [
            'category._id' => $category_id,
            'record.is_active' => true,
            'record.is_delete' => false,
        ];
        $select = [
            'record._id',
            'record.code',
            'record.img_src',
            'record.title',
            'record.price',
            'record.sale_price',
        ];
        $records = $this->record_model->get_pagination($where, $select, $offset, $limit, $last_id);
        $res = !empty($records) ? removeNullElementOfArray($records) : [];

        return $this->response(RestSuccess($res), SUCCESS_CODE);

    }

    /*
     * function get record detail
     * method: get
     * params: record_id
     */
    public function get_record_detail_get()
    {
        $language_code = !empty($this->input->request_headers()['Language']) ? $this->input->request_headers()['Language'] : LANGUAGE_DEFAULT;

        $last = $this->uri->total_segments();
        $record_id = $this->uri->segment($last);
        $check_verify_params = checkVerifyParams([$record_id]);
        if(!empty($check_verify_params)){
            $this->response($check_verify_params, BAD_REQUEST_CODE);
        }

        $where = [
            'record._id' => $record_id,
            'record.is_active' => true,
            'record.is_delete' => false,
        ];
        $select = [
            'record._id',
            'record.code',
            'record.barcode',
            'record.img_src',
            'record.title',
            'record.price',
            'record.sale_price',
            'record._description',
        ];
        $record = $this->record_model->findOne($where, $select);
        if(empty($record)){
            $this->response(RestNotFound(), NOT_FOUND_CODE);
        }

        $where = [
            'record_file.record_id' => $record_id,
            'record_file.is_active' => true,
            'record_file.is_delete' => false,
            'record_file.is_tmp' => false,
        ];
        $select = [
            'record_file._id',
            'record_file.file_type',
            'record_file.thumb_file_src',
            'record_file.file_src',
            'record_file.file_size',
        ];
        $record_files = $this->record_file_model->find($where, $select);
        $record->data_file = !empty($record_files) ? $record_files : [];

        $res = !empty($record) ? removeNullOfObject($record) : '';

        $this->response(RestSuccess($res), SUCCESS_CODE);
    }

    /*
     * function search record
     * method: get
     * params: keyword, offset, limit, last_id
     */
    public function search_record_post()
    {
        $language_code = !empty($this->input->request_headers()['Language']) ? $this->input->request_headers()['Language'] : LANGUAGE_DEFAULT;

        $keyword = skipVN($this->post('keyword'), true);
        $offset = !empty($this->post('offset')) ? $this->post('offset') : 0;
        $limit = !empty($this->post('limit')) ? $this->post('limit') : LIMIT_DEFAULT;
        $last_id = !empty($this->post('last_id')) ? $this->post('last_id') : '';

        $check_verify_params = checkVerifyParams([$keyword]);
        if(!empty($check_verify_params)){
            $this->response($check_verify_params, BAD_REQUEST_CODE);
        }

        $where = [
            'record.title like' => '%'. $keyword .'%',
            'record.is_active' => true,
            'record.is_delete' => false,
        ];
        $select = [
            'record._id',
            'record.code',
            'record.img_src',
            'record.title',
            'record.price',
            'record.sale_price',
        ];
        $records = $this->record_model->get_pagination($where, $select, $offset, $limit, $last_id);
        $res = !empty($records) ? removeNullElementOfArray($records) : [];

        return $this->response(RestSuccess($res), SUCCESS_CODE);
    }
}