<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('app');
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
	public function index()
	{
	    $raw_data = $this->get_random_posts();
	    if (count($raw_data) > 0){
            $this->data['site1'] = $raw_data;
	        $len = count($raw_data);
	        for ($i=0; $i<$len; $i++){
	            $post_detail = $this->parse_post_detail($raw_data[$i]);
                $this->data['site1'][$i] = $post_detail;
            }
        }
//        var_dump($this->data['site1']);
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

    public function get_random_posts(){
        $result=$this->sendGet('https://www.vg247.com/wp-json/wp/v2/posts');
        return $result;
    }
    //get full detail of a blog from WP response
    public function parse_post_detail($raw_detail){
        if (isset($raw_detail['_links']['wp:featuredmedia'][0]) &&
            isset($raw_detail['_links']['wp:featuredmedia'][0]['href'])){
            //there is one attached media
            var_dump($raw_detail['_links']['wp:featuredmedia'][0]['href']);
            $media_info = $this->sendGet($raw_detail['_links']['wp:featuredmedia'][0]['href']);
            if (isset($media_info['media_details']['sizes']['medium_large']['source_url'])){
                $raw_detail['thumb_url'] = $media_info['media_details']['sizes']['medium_large']['source_url'];
            } else if (isset($media_info['media_details']['sizes']['medium']['source_url'])) {
                $raw_detail['thumb_url'] = $media_info['media_details']['sizes']['medium']['source_url'];
            } else if (isset($media_info['media_details']['sizes']['large']['source_url'])) {
                $raw_detail['thumb_url'] = $media_info['media_details']['sizes']['large']['source_url'];
            } else if (isset($media_info['media_details']['sizes']['full']['source_url'])) {
                $raw_detail['thumb_url'] = $media_info['media_details']['sizes']['full']['source_url'];
            } else {
                //
            }

        } else {
            //must use another way to get thumbnail image

        }
        return $raw_detail;
    }
}
