<?php defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');

Class Admin_record_api extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
        $this->load->model('record_model');
        $this->load->model('record_file_model');
        $this->load->model('category_has_record_model');
    }

    /*
     * function index
     * method:
     * params:
     */
    public function index_get()
    {
        $res = RestSuccess('admin/record_api');
        $this->response($res, SUCCESS_CODE);
    }

    /*
     * function get record list
     * method: post
     * params: offset, limit
     */
    function get_record_list_post(){
        $keyword = !empty($this->post('search')['value']) ? $this->post('search')['value'] : '';
        $offset = !empty($this->post('start')) ? $this->post('start') : 0;
        $limit = !empty($this->post('length')) ? $this->post('length') : LIMIT_DEFAULT;
        $where = array(
            'record.is_delete' => false,
            'record.plain_title like' => '%'. skipVN($keyword, true) .'%',
        );
        $select = array(
            'record.*',
            'category.name as category_name',
        );
        $records = $this->record_model->get_pagination($where, $select, $offset, $limit);
        $total_records = $this->record_model->count_total($where);
        $rs = [
            'status' => SUCCESS_CODE,
            'message' => OK_MSG,
            'recordsTotal' => $total_records,
            'recordsFiltered' => $total_records,
            'data' => !empty($records) ? $records : [],
        ];
        $this->response($rs, SUCCESS_CODE);
    }

    /*
     * function import excel
     * method: post
     * params:
     */
    function import_excel_post()
    {
        if(empty($_FILES['file']['name'])){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
        }
        $path = $_FILES['file']['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);

        if (!in_array($ext, getExtenstions(EXCEL_FILE_TYPE))) {
            $this->response(RestBadRequest(INVALID_EXCEL_FILE_MSG), BAD_REQUEST_CODE);
        }
        $this->load->library('excel');
        $this->load->library("upload_library");
        //save Excel input file
        $upload_path = RECORD_UPLOAD_PATH;
        if(!file_exists($upload_path)){
            mkdir($upload_path);
        }
        $upload_data = $this->upload_library->upload_excel('file', $upload_path);		//excel_file: key in upload form

        $filename = $upload_path.'/'.$upload_data['file_name'];
        $objPHPExcel = PHPExcel_IOFactory::load($filename);

        $data_arr = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
        foreach($data_arr as $key => &$row) {
            $row = array_filter($row,
                function($cell) {
                    return !is_null($cell);
                }
            );
            if (count($row) == 0) {
                unset($data_arr[$key]);
            }
        }
        unset ($row);
        $list_err = array();
        $arr_err = array();
        $ar = array();
        $last_key = key( array_slice( $data_arr, -1, 1, TRUE ) );
        //exception value import
        for ($i = 3; $i < $last_key; $i++)
        {
            array_push($ar, $data_arr[$i]);
//            var_dump($i);
            $err = '';
            $value = $data_arr[$i];
            $messerr = array();
            //check null
            if(empty($value['B']))//check code user
            {
                array_push($messerr,"Category rỗng");
            }

            if(empty($value['D']))//check code
            {
                array_push($messerr,"Product Code rỗng");
            }else{
                $code_exists = $this->record_model->findOne([
                    'code' => $value['D'],
                ]);
                if(!empty($code_exists))
                {
                    array_push($messerr,"Product Code đã tồn tại");
                }
            }

            if(empty($value['F']))//check title
            {
                array_push($messerr,"Title rỗng");
            }

            if(empty($value['H']))//check price
            {
                array_push($messerr,"Price rỗng");
            }
            else{
                if($value['H'] <= 0){
                    array_push($messerr,"Price phải > 0");
                }
            }

            if(empty($value['I']))//check sale_price
            {
                array_push($messerr,"Sale Price rỗng");
            }
            else{
                if($value['I'] <= 0 || $value['I'] < $value['H']){
                    array_push($messerr,"Sale Price phải > 0 và <= Price");
                }
            }

            if(count($messerr) > 0){
                $err['line'] = $i;
                array_push($list_err, $err);
                $mess = $comma_separated = implode(", ", $messerr);
                $arr_err[$i] = $mess;
            }
        }

        if(count($arr_err) > 0)
        {
            $this->returnErrorImport($data_arr, $arr_err, $filename,$upload_data['file_ext']);
            $this->response(RestBadRequest(UPLOAD_ERROR), BAD_REQUEST_CODE);
//            $this->exoport_file_error($list_err);
        }else{
            if($this->insertRecords($data_arr)){
                $this->response(RestSuccess(UPLOAD_SUCCESS), SUCCESS_CODE);
            }
            else{
                $this->response(RestBadRequest(UPLOAD_WARNING), BAD_REQUEST_CODE);

            }
        }



    }

    /*
     * function insert records
     */
    function insertRecords($data_arr){
        //transaction:  add new record if isn't fail
        $this->db->trans_start();
        $last_key = key( array_slice( $data_arr, -1, 1, TRUE ) );
        for ($j = 2; $j <= $last_key; $j++) //$j is row number to get data of excel file
        {
            $array = $data_arr[$j];
            //get category_id
            $category_exists = $this->category_model->findOne([
                'plain_name' => skipVN($array['B'], true),
            ]);

            if(empty($category_exists)){
                //insert new category
                $this->category_model->create([
                    'name' => $array['B'],
                    'plain_name' => skipVN($array['B'], true),
                    '_key' => generateKeyTranslation(),
                    'create_time' => CURRENT_TIME,
                    'update_time' => CURRENT_TIME,
                    'create_time_mi' => CURRENT_MILLISECONDS
                ]);

                $category_id = $this->db->insert_id();
            }
            else{
                $category_id = $category_exists->_id;
            }

            $ordinal = !empty($array['A']) ? (int) $array['A'] : 1;
            $barcode = trim($array['C']);
            $code = trim($array['D']);
            $title = $array['F'];
            $description = $array['G'];
            $price = $array['H'];
            $sale_price = $array['I'];
            $is_featured = !empty($array['I']) ? true : false;

            $this->record_model->create(array(
                'code' => $code,
                'barcode' => $barcode,
                'title' => $title,
                'plain_title' => skipVN($title, true),
                '_description' => $description,
                'plain_description' => skipVN(removeHTMLTagsAndSpecialChar($description), true),
                '_key' => generateKeyTranslation(),
                'ordinal' => $ordinal,
                'price' => $price,
                'sale_price' => $sale_price,
                'is_featured' => $is_featured,
                'create_time' => CURRENT_TIME,
                'update_time' => CURRENT_TIME,
                'create_time_mi' => CURRENT_MILLISECONDS
            ));

            $record_id = $this->db->insert_id();

            //insert category_has_record
            $this->category_has_record_model->create([
                'category_id' => $category_id,
                'record_id' => $record_id,
            ]);

            //get image list
            if(!empty($array['E'])){
                $images = explode(',', $array['E']);
                if(!empty($images) && count($images)){
                    $loop_image = 1;
                    foreach($images as $image){
                        if($loop_image > MAX_FILE_UPLOAD){
                            break;
                        }

                        $img_src = RECORD_PATH . '/' . $image;
                        if($loop_image == 1){ //insert img_src of record
                            $this->record_model->update_by_condition([
                                '_id' => $record_id
                            ], [
                                'img_src' => $img_src
                            ]);


                        }
                        else { //insert record_file
                            $this->record_file_model->create([
                                'file_src' => $img_src,
                                'record_id' => $record_id,
                                'ordinal' => $loop_image,
                                'create_time' => CURRENT_TIME,
                                'update_time' => CURRENT_TIME,
                            ]);
                        }

                        $loop_image++;
                    } //end foreach images
                }
            }

        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE)
        {
            return false;
        }else{
            return true;
        }
    }

    /*
     * function add record
     * method: post
     * params: code, barcode, title, ...
     */
    function add_new_record_post()
    {

        //Product info
        $code = $this->post('code');
        $barcode = $this->post('barcode');
        $title = $this->post('title');
//        $short_description = $this->post('short_description');
        $description = $this->post('description');
        $price = str_replace(',', '', $this->post('price'));
        $sale_price = str_replace(',', '', $this->post('sale_price'));
        $is_featured = !empty($this->post('is_featured')) ? 1 : 0 ;
        $is_active = !empty($this->post('is_active')) ? 1 : 0 ;
        $category_id = $this->post('category_id');

        $check_verify_params = checkVerifyParams(array(
            $title,
        ));
        if(!empty($check_verify_params)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
        }

        //Check sale price if larger than price
        if($sale_price > $price){
            $sale_price = $price;
        }

        //Check sale price is empty
        if(empty($sale_price)){
            $sale_price = $price;
        }

        $data_upload = array(
            'code' => $code,
            'barcode' => $barcode,
            'title' => $title,
            'plain_title' => skipVN($title, true),
            '_description' => $description,
//            'short_description' => $short_description,
            'plain_description' => skipVN(removeHTMLTagsAndSpecialChar($description), true),
            '_key' => generateKeyTranslation(),
            'price' => $price,
            'sale_price' => $sale_price,
            'is_featured' => $is_featured,
            'is_active' => $is_active,
            'create_time' => CURRENT_TIME,
            'update_time' => CURRENT_TIME,
            'create_time_mi' => CURRENT_MILLISECONDS
        );

        if(!empty($_FILES['img_src']['name'])){
            //upload img_src
            $img_path = $_FILES['img_src']['name'];
            $img_path_ext = pathinfo($img_path, PATHINFO_EXTENSION);
            $config['upload_path'] = './public/upload/img/record';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name'] = strtotime('now') .'.'. $img_path_ext;

            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('img_src')) {
                $data_insert['img_src'] = 'public/upload/img/record/'. $config['file_name'];
            }
            else{
                $this->response(RestServerError(), SERVER_ERROR_CODE);
            }
        }

        //insert account tb
        $this->record_model->create($data_upload);

        $record_id = $this->db->insert_id();
        //insert category_has_record tb
        $this->category_has_record_model->create(array(
            'category_id' => $category_id,
            'record_id' => $record_id,
        ));

        $this->response(RestSuccess(), SUCCESS_CODE);
    }

    function update_record_post()
    {

        //Product info
        $record_id = $this->post('record_id');
        $title = $this->post('title');
        $description = $this->post('description');
        $short_description = $this->post('short_description');
        $price = str_replace(',', '', $this->post('price'));
        $sale_price = str_replace(',', '', $this->post('sale_price'));
        $is_featured = !empty($this->post('is_featured')) ? 1 : 0 ;
        $is_active = !empty($this->post('is_active')) ? 1 : 0 ;
        $category_id = $this->post('category_id');

        $check_verify_params = checkVerifyParams(array(
            $record_id,
            $title,
        ));

        if(!empty($check_verify_params)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
        }

        //Check sale price if larger than price
        if($sale_price > $price){
            $sale_price = $price;
        }

        //Check sale price is empty
        if(empty($sale_price)){
            $sale_price = $price;
        }

        $where = array (
            'record._id' => $record_id,
            'record.is_delete' => false,
        );
        $record = $this->record_model->findOne($where, '*');
        if(empty($record)){
            $this->response(RestNotFound(), NOT_FOUND_CODE);
        }

        $where = array(
            'category._id' => $category_id
        );
        $select = array(
            'category.*'
        );

        $category = $this->category_model->findOne($where, $select);

        $data_upload = array(
            'title' => $title,
            'plain_title' => skipVN($title, true),
            '_description' => $description,
            'short_description' => $short_description,
            'plain_description' => skipVN(removeHTMLTagsAndSpecialChar($description), true),
            'price' => $price,
            'sale_price' => $sale_price,
            'is_featured' => $is_featured,
            'is_active' => $is_active,
            'update_time' => CURRENT_TIME,
        );

        //upload img_src
        if(!empty($_FILES['img_src']['name'])) {
            $img_path = $_FILES['img_src']['name'];
            $img_path_ext = pathinfo($img_path, PATHINFO_EXTENSION);
            $config['upload_path'] = './public/upload/img/record';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name'] = strtotime('now') . '.' . $img_path_ext;

            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            //delete old file
            if (!empty($record->img_src)){
                if (file_exists(UPLOAD_PATH . $record->img_src)) {
                    unlink(UPLOAD_PATH . $record->img_src);
                }
            }

            if ($this->upload->do_upload('img_src')) {
                $data_upload['img_src'] = 'public/upload/img/record/'. $config['file_name'];
            }
            else{
                $this->response(RestServerError(), SERVER_ERROR_CODE);
            }
        }

        //update record tb
        $this->record_model->update_by_condition(array(
            '_id' => $record_id
        ),$data_upload);

        //update category_has_record tb
        $this->category_has_record_model->update_by_condition(array(
            'record_id' => $record_id,
        ), array(
            'category_id' => $category_id,
        ));
//        dump($data_upload);

        $this->response(RestSuccess($category), SUCCESS_CODE);
    }

    function delete_record_put()
    {
        $last = $this->uri->total_segments();
        $record_id = $this->uri->segment($last);
        $is_delete = !empty($this->put('is_delete')) ? 1 : 0;

        $check_verify_params = checkVerifyParams(array(
            $record_id,
        ));
        if(!empty($check_verify_params)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
        }

        $this->record_model->update_by_condition(array(
            '_id' => $record_id
        ), array(
            'is_delete' => $is_delete
        ));

        $where = array(
            'record._id' => $record_id
        );
        $select = array(
            'record.is_delete'
        );

        $record = $this->record_model->findOne($where, $select);

        $this->response(RestSuccess($record), SUCCESS_CODE);
    }

    function record_toggle_is_active_put(){
        $last = $this->uri->total_segments();
        $record_id = $this->uri->segment($last);
        $is_active = !empty($this->put('is_active')) ? 1 : 0;

        $check_verify_params = checkVerifyParams(array(
            $record_id,
        ));
        if(!empty($check_verify_params)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
        }


        $this->record_model->update_by_condition(array(
            '_id' => $record_id
        ), array(
            'is_active' => $is_active
        ));

        $where = array(
            'record._id' => $record_id
        );
        $select = array(
            'record.is_active'
        );

        $record = $this->record_model->findOne($where, $select);

        $this->response(RestSuccess($record), SUCCESS_CODE);
    }

    function record_toggle_is_featured_put(){
        $last = $this->uri->total_segments();
        $record_id = $this->uri->segment($last);
        $is_featured = !empty($this->put('is_featured')) ? 1 : 0;

        $check_verify_params = checkVerifyParams(array(
            $record_id,
        ));
        if(!empty($check_verify_params)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
        }


        $this->record_model->update_by_condition(array(
            '_id' => $record_id
        ), array(
            'is_featured' => $is_featured
        ));

        $where = array(
            'record._id' => $record_id
        );
        $select = array(
            'record.is_featured'
        );

        $record = $this->record_model->findOne($where, $select);

        $this->response(RestSuccess($record), SUCCESS_CODE);
    }

    /*
     * function add record files
     * method: post
     * params: files
     */
    function add_record_files_post(){
        $record_id = $this->post('record_id');
        $files = $this->post('files');

        $check_verify_params = checkVerifyParams(array(
            $record_id,
            $files,
        ));
        if(!empty($check_verify_params) || !count($files)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), BAD_REQUEST_CODE);
        }

        $file_src = [];
        $thumb_file_src = [];
        foreach($files as $file){
            $this->record_file_model->create(array(
                'record_id' => $record_id,
                'file_name' => cleanFileName($file['name']),
                'file_type' => $file['type'],
                'file_size' => $file['size'],
                'file_src' => $file['url'],
                'thumb_file_src' => $file['thumbnailUrl'],
            ));
            $file_src[] = $file['url'];
            $thumb_file_src[] = $file['thumbnailUrl'];
        }

        $res = array(
            'file_src' => $file_src,
            'thumb_file_src' => $thumb_file_src
        );

        $this->response(RestSuccess($res), SUCCESS_CODE);
    }

    function update_ordinal_post(){
        $record_id = $this->post('record_id');
        $ordinal = !empty($this->post('ordinal')) ? $this->post('ordinal') : 1;

        $check_verify_params = checkVerifyParams(array(
            $record_id,
        ));
        if(!empty($check_verify_params)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), SUCCESS_CODE);
        }

        $where = array (
            'record._id' => $record_id,
            'record.is_delete' => false,
        );
        $record = $this->record_model->findOne($where, '*');
        if(empty($record)){
            $this->response(RestBadRequest(NOT_FOUND_MSG), SUCCESS_CODE);
        }

        $this->record_model->update_by_condition(array(
            'record._id' => $record_id,
        ), array(
            'record.ordinal' => $ordinal
        ));

        $this->response(RestSuccess(), SUCCESS_CODE);
    }

    /*
     * function add record files
     * method: post
     * params: files
     */
    function delete_record_file_delete()
    {
        $record_file_id = $this->delete('record_file_id');
        $check_verify_params = checkVerifyParams(array(
            $record_file_id,
        ));
        if(!empty($check_verify_params)){
            $this->response(RestBadRequest(MISMATCH_PARAMS_MSG), SUCCESS_CODE);
        }

        $where = array (
            'record_file._id' => $record_file_id,
        );
        $record_file = $this->record_file_model->findOne($where, '*');
        if(empty($record_file)){
            $this->response(RestBadRequest(NOT_FOUND_MSG), SUCCESS_CODE);
        }

        //delete file
        if(!empty($record_file->thumb_file_src)){
            $item_explode = explode('public/', $record_file->thumb_file_src);
            $file_path = 'public/'. $item_explode[1];
            if (file_exists(UPLOAD_PATH . $file_path)) {
                unlink(UPLOAD_PATH . $file_path);
            }
        }
        if(!empty($record_file->file_src)){
            $item_explode = explode('public/', $record_file->file_src);
            $file_path = 'public/'. $item_explode[1];
            if (file_exists(UPLOAD_PATH . $file_path)) {
                unlink(UPLOAD_PATH . $file_path);
            }
        }

        $this->record_file_model->delete_by_condition(array(
           '_id' => $record_file_id,
        ));


        $this->response(RestSuccess(), SUCCESS_CODE);
    }
}

