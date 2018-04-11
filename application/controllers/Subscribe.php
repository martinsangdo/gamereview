<?php defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');

Class Subscribe extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('subscribe_model');

    }
    //add new email
    public function save_email_post(){
        $email = $this->input->post('email');
        $new_record = array(
            'email' => $email,
            'time' => date('Y-m-d H:i:s')
        );
        //check if email existed
        $total = $this->subscribe_model->get_total(array('email'=> $email));
        if ($total == 0){
            //not existed yet
            $result = $this->subscribe_model->create($new_record);
        } else {
            $result = true;     //existed in db
        }
        $this->response(RestSuccess(array('result'=>$result)), SUCCESS_CODE);
    }
}