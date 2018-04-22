<?php defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');

Class Video extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('video_model');
    }
    //show list of posts inside category
    public function index_get(){
        $offset = is_numeric($this->uri->segment(2)) && intval($this->uri->segment(2)) > 0?$this->uri->segment(2):0;
        //get all posts belong to this category id
        $videos = $this->video_model->custom_query('SELECT * FROM video_link WHERE status=1 ORDER BY time DESC LIMIT '.
            VIDEO_PAGE_NUM.' OFFSET '.$offset);
        $this->data['videos'] = $videos;
        //get total videos
        $total = $this->video_model->get_total(array('status'=>1));
        //create paging
        $base_url = '/video/';
        $this->data['pagination'] = $this->create_pagination($base_url, $total, VIDEO_PAGE_NUM, 2);
        //
        $this->load->view(VIEW_FOLDER.'/video', $this->data);
    }
}