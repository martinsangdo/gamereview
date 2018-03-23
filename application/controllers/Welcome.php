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
    public function index()
    {
        //get data of block 1
        $this->data[BLOCK_KEY_1] = $this->block_content_model->get_pagination(array('site_id' => 4), 0, 0);
        $this->data[BLOCK_KEY_2] = $this->block_content_model->get_pagination(array('site_id' => 1), 0, 0);
        $this->data[BLOCK_KEY_3] = $this->block_content_model->get_pagination(array('site_id' => 6), 0, 0);
        $this->data[BLOCK_KEY_4] = $this->block_content_model->get_pagination(array('site_id' => 7), 0, 0);
        $this->data[BLOCK_KEY_5] = $this->block_content_model->get_pagination(array('site_id' => 18), 0, 0);
        $this->data[BLOCK_KEY_6] = $this->block_content_model->get_pagination(array('site_id' => 9), 0, 0);
        $this->data[BLOCK_KEY_7] = $this->block_content_model->get_pagination(array('site_id' => 10), 0, 0);
        $this->data[BLOCK_KEY_8] = $this->block_content_model->get_pagination(array('site_id' => 11), 0, 0);
        $this->data[BLOCK_KEY_9] = $this->block_content_model->get_pagination(array('site_id' => 12), 0, 0);
        $this->data[BLOCK_KEY_10] = $this->block_content_model->get_pagination(array('site_id' => 13), 0, 0);
        $this->data[BLOCK_KEY_11] = $this->block_content_model->get_pagination(array('site_id' => 14), 0, 0);
        $this->data[BLOCK_KEY_12] = $this->block_content_model->get_pagination(array('site_id' => 15), 0, 0);
        $this->data[BLOCK_KEY_13] = $this->block_content_model->get_pagination(array('site_id' => 16), 0, 0);
        //
        $yt_videos = $this->sendGetWithoutHeader('https://www.googleapis.com/youtube/v3/playlistItems?part=contentDetails,snippet&maxResults=8&playlistId=UUXa_bzvv7Oo1glaW9FldDhQ&key=AIzaSyCbEOvBCOQrBl4xHaKoDaSguRxmC4RZUiE');
        $vid_len = count($yt_videos['items']);
        $vid_list = array();
        for ($i = 0; $i < $vid_len; $i++) {
            $vid_list[$i] = array(
                'thumb' => $yt_videos['items'][$i]['snippet']['thumbnails']['medium']['url'],
                'title' => $yt_videos['items'][$i]['snippet']['title'],
                'embed' => '<iframe width="255" height="172" src="https://www.youtube.com/embed/dAULt5cQXKU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
            );
        }
        $this->data['video_list_1'] = $vid_list;
        //
//        $this->data['rss_feed'] = $this->parse_rss();

        //https://www.googleapis.com/youtube/v3/channels?part=snippet,contentDetails&forUsername=GamingBoltLive&key=AIzaSyCbEOvBCOQrBl4xHaKoDaSguRxmC4RZUiE
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
    public function test()
    {
//        $this->load->model('site_model');
//        $this->site_model->update_by_condition(array('_id'=>1),
//            array('crawl_time'=>date('Y-m-d H:i:s')));
    }


}