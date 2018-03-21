<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

    function __construct()
    {
        parent::__construct();
//        $this->load->helper('app');
//        $this->output->enable_profiler(TRUE);
        $this->load->model('block_content_model');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
	    //get data of block 1
        $where = array('site_id' => 4);
        $this->data[BLOCK_KEY_1] = $this->block_content_model->get_pagination($where, 0, 0);
//        var_dump(($this->data[BLOCK_KEY_1]));
        //
        $this->load->view('front/webview/home', $this->data);
	}

    /*
     * function test
     * method:
     * params:
     */
    public function test()
    {
        pre(123);
        $this->response([], SUCCESS_CODE);
    }

}
