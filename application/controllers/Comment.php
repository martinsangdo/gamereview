<?php defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');

Class Comment extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('comment_model');
//        $this->output->enable_profiler(TRUE);

    }
    //add new comment
    public function add_new_post(){
        $new_record = array(
            'post_id' => $this->input->post('post_id'),
            'username' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'content' => $this->input->post('content'),
            'ip' => get_client_ip(),
            'time' => date('Y-m-d H:i:s')
        );
        $result = $this->comment_model->create($new_record);
        //todo: increase comment_num in block_content
        $this->response(RestSuccess(array('result'=>$result)), SUCCESS_CODE);
    }
    //get list of comments
    public function get_list_paging_post(){
        $where = array(
            'post_id' => $this->input->post('post_id'),
            'is_delete' => 0
        );
        $list = $this->comment_model->get_list_paging($where, $this->input->post('offset'), $this->input->post('limit'));
        //get total
        $total = $this->comment_model->get_total($where);
        //
        $this->response(RestSuccess(array('list'=>$list, 'total' => $total)), SUCCESS_CODE);
    }
}