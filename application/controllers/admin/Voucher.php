<?php
Class Voucher extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('voucher_model');
        $this->load->library('form_validation', 'upload');
        $this->load->helper(array("form", "url", "captcha"));
    }
    //display list of users
    function listing()
    {
        $this->data['temp'] = 'admin/page/voucher/listing' ;
        $this->load->view('admin/block/main', $this->data);
    }

    function add_voucher()
    {
        $this->data['temp'] = 'admin/page/voucher/add' ;
        $this->load->view('admin/block/main', $this->data);
    }

    function edit_voucher($voucher_id)
    {

        if(empty($voucher_id)){
            redirect(base_url('_admin/order/listing'));
        }

        $where = array(
            'voucher._id' => $voucher_id,
            'voucher.is_delete' => false
        );
        $select = array(
            'voucher.*'
        );
        $voucher = $this->voucher_model->findOne($where, $select);

        $this->data['temp'] = 'admin/page/voucher/edit' ;
        $this->data['voucher'] = $voucher;
        $this->load->view('admin/block/main', $this->data);
    }
}