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
        $this->data[BLOCK_KEY_2] = $this->block_content_model->get_latest_posts(array('site_id' => 16), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_3] = $this->block_content_model->get_latest_posts(array('site_id' => 6), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_4] = $this->block_content_model->get_latest_posts(array('site_id' => 7), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_5] = $this->block_content_model->get_latest_posts(array('site_id' => 18), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_6] = $this->block_content_model->get_latest_posts(array('site_id' => 9), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_7] = $this->block_content_model->get_latest_posts(array('site_id' => 10), 0, 7);  //Top Authors
        $this->data[BLOCK_KEY_8] = $this->block_content_model->get_latest_posts(array('site_id' => 21), 0, 8);  //footer News
        $this->data[BLOCK_KEY_9] = $this->block_content_model->get_latest_posts(array('site_id' => 12), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_10] = $this->block_content_model->get_latest_posts(array('site_id' => 13), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_12] = $this->block_content_model->get_latest_posts(array('site_id' => 15), 0, 6); //footer Magazines
        $this->data[BLOCK_KEY_13] = $this->block_content_model->get_latest_posts(array('site_id' => 1), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_14] = $this->block_content_model->get_latest_posts(array('site_id' => 23), 0, DEFAULT_PAGE_LEN/2);    //News Feed
        //get videos
        $this->load->model('video_model');
        $this->data['videos'] = $this->video_model->get_latest_posts(array('status' => 1), 0, DEFAULT_PAGE_LEN);
        //to show Advertisements
        $this->data['ad_keywords'] = $this->get_random_keywords();

        $this->load->view(VIEW_FOLDER.'/home', $this->data);
    }

    public function privacy(){
        $this->load->view(VIEW_FOLDER.'/privacy', $this->data);
    }

    public function terms(){
        $this->load->view(VIEW_FOLDER.'/terms', $this->data);
    }

    //return keywords for Adsense randomly
    private function get_random_keywords(){
        $primary_keys = array(
            'video','pc', 'ps4', 'xbox', 'switch',
            'playstation', 'wii', '3ds', 'android', 'nintendo'
        );
        $secondary_keys = array(
            'games'
        );
        $primary_keys_max_index = count($primary_keys) - 1;
        $secondary_keys_max_index = count($secondary_keys) - 1;
        //
        $ad_key_1 = $primary_keys[floor(rand(0,$primary_keys_max_index))].' '.$secondary_keys[floor(rand(0,$secondary_keys_max_index))];
        $ad_key_2 = $primary_keys[floor(rand(0,$primary_keys_max_index))].' '.$secondary_keys[floor(rand(0,$secondary_keys_max_index))];
        return array($ad_key_1, $ad_key_2);
    }

}