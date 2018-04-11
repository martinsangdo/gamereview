<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends MY_Controller
{

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
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index(){
        //get data of blocks
        $this->data[BLOCK_KEY_1] = $this->block_content_model->get_latest_posts(array('site_id' => 4), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_2] = $this->block_content_model->get_latest_posts(array('site_id' => 1), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_3] = $this->block_content_model->get_latest_posts(array('site_id' => 6), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_4] = $this->block_content_model->get_latest_posts(array('site_id' => 7), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_5] = $this->block_content_model->get_latest_posts(array('site_id' => 18), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_6] = $this->block_content_model->get_latest_posts(array('site_id' => 9), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_7] = $this->block_content_model->get_latest_posts(array('site_id' => 10), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_8] = $this->block_content_model->get_latest_posts(array('site_id' => 11), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_9] = $this->block_content_model->get_latest_posts(array('site_id' => 12), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_10] = $this->block_content_model->get_latest_posts(array('site_id' => 13), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_12] = $this->block_content_model->get_latest_posts(array('site_id' => 15), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_13] = $this->block_content_model->get_latest_posts(array('site_id' => 16), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_14] = $this->block_content_model->get_latest_posts(array('site_id' => 20), 0, DEFAULT_PAGE_LEN);
        //get videos
        $this->load->model('video_model');
        $this->data['video_block_1'] = $this->video_model->get_latest_posts(array('playlist_id' => 1), 0, DEFAULT_PAGE_LEN);
        //https://www.googleapis.com/youtube/v3/playlistItems?part=contentDetails,snippet&maxResults=8&playlistId=UUXa_bzvv7Oo1glaW9FldDhQ&key=AIzaSyCbEOvBCOQrBl4xHaKoDaSguRxmC4RZUiE
        //https://www.googleapis.com/youtube/v3/channels?part=snippet,contentDetails&forUsername=GamingBoltLive&key=AIzaSyCbEOvBCOQrBl4xHaKoDaSguRxmC4RZUiE
        $this->data['video_block_2'] = $this->video_model->get_pagination_rand(array('playlist_id' => 1), 0, DEFAULT_PAGE_LEN);

        $this->load->view('front/webview/home', $this->data);
    }
    //test data to get from link
    public function test_link()
    {
        $this->load->view('front/block/header_webview', $this->data);
        $this->load->view('front/webview/test_link', $this->data);
        $this->load->view('front/block/footer_webview', $this->data);
    }

    //test data to get from link
    public function test_cron()
    {
//        $this->load->model('tmp_model');
//        $this->tmp_model->create(array(
//            'value'=>'aa'.$this->uri->segment(3)
//        ));
    }

    public function privacy(){
        $this->load->view('front/webview/privacy', $this->data);
    }

}