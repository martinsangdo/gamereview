<?php defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');

Class Category extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
    }
    //show list of posts inside category (get related too)
    public function index_get(){
        $cat_slug = $this->uri->segment(2); //many slugs of categories
        $cat_ids = $this->uri->segment(3);  //many category ids
        $cat_id_list = explode('-', $cat_ids);
        if (count($cat_id_list) == 1){
            //this link is popular tag or related tag, get more tags inside group
            //find category group id of this category (tag)
            $cat_group_id = $this->category_model->read_row(array('_id'=>$cat_id_list[0]));
            $cat_id_in_group = $this->category_model->custom_query('SELECT _id FROM category WHERE cat_group_id = '.$cat_group_id->cat_group_id);
            $cat_id_list = array();
            for ($i=0; $i<count($cat_id_in_group); $i++){
                $cat_id_list[$i] = $cat_id_in_group[$i]->_id;
            }
        }
        $offset = is_numeric($this->uri->segment(4)) && intval($this->uri->segment(4)) > 0?$this->uri->segment(4):0;
        //get all posts belong to this category id
        $posts_in_cat = $this->category_model->custom_query('SELECT DISTINCT block_content.* FROM category_post'.
            ' LEFT JOIN block_content ON block_content._id = category_post.post_id '.
            ' WHERE cat_id IN ('.implode(',',$cat_id_list).') AND block_content.status=1 ORDER BY block_content.update_time DESC LIMIT '.
            CAT_POST_NUM.' OFFSET '.$offset);
        $this->data['posts'] = $posts_in_cat;
        //get total posts in category
        $total_post = $this->category_model->custom_query('SELECT SUM(post_num) AS total_post FROM category WHERE _id IN ('.implode(',',$cat_id_list).')');
        //create paging
        $base_url = '/category/'.$cat_slug.'/'.$cat_ids.'/';
        $this->data['pagination'] = $this->create_pagination($base_url, $total_post[0]->total_post, CAT_POST_NUM, 4);
        //
        $this->load->view(VIEW_FOLDER.'/category', $this->data);
    }
    //show list of posts inside group (get related if too short)
    public function group_get(){
        $group_id = $this->uri->segment(3);  //category group id
        //get list of category ids in this group
        $cat_id_in_group = $this->category_model->custom_query('SELECT _id FROM category WHERE cat_group_id = '.$group_id);
        $cat_id_list = array();
        for ($i=0; $i<count($cat_id_in_group); $i++){
            $cat_id_list[$i] = $cat_id_in_group[$i]->_id;
        }
        $offset = is_numeric($this->uri->segment(4)) && intval($this->uri->segment(4)) > 0?$this->uri->segment(4):0;
        //get all posts belong to those categories
        $posts_in_cat = $this->category_model->custom_query('SELECT DISTINCT block_content.* FROM category_post'.
            ' LEFT JOIN block_content ON block_content._id = category_post.post_id '.
            ' WHERE cat_id IN ('.implode(',',$cat_id_list).') AND block_content.status=1 ORDER BY block_content.update_time DESC LIMIT '.
            CAT_POST_NUM.' OFFSET '.$offset);
        $this->data['posts'] = $posts_in_cat;
        //get total posts in category
        $total_post = $this->category_model->custom_query('SELECT SUM(post_num) AS total_post FROM category WHERE _id IN ('.implode(',',$cat_id_list).')');
        //create paging
        $base_url = '/category/group/'.$group_id.'/';
        $this->data['pagination'] = $this->create_pagination($base_url, $total_post[0]->total_post, CAT_POST_NUM, 4);
        //
        $this->load->view(VIEW_FOLDER.'/category', $this->data);
    }
    //get most read categories
    public function get_top_most_post(){
        $top_data = $this->category_model->custom_query('SELECT _id,name,slug FROM category ORDER BY post_num DESC LIMIT 20');
        $this->response(RestSuccess($top_data), SUCCESS_CODE);
    }
    //search in title & excerpt
    public function search_get(){
        $keyword = urldecode($this->uri->segment(3));
        $offset = is_numeric($this->uri->segment(4)) && intval($this->uri->segment(4)) > 0?$this->uri->segment(4):0;
        if (!isset($keyword) || strlen($keyword) < 3){
            //there is no valid keyword
            $this->data['posts'] = false;
            $this->data['pagination'] = '';
        } else {
            $this->load->model('block_content_model');
            $posts = $this->block_content_model->custom_query('SELECT * FROM block_content'.
                ' WHERE status=1 AND (title LIKE "%'.$keyword.'%" OR excerpt LIKE "%'.$keyword.'%") ORDER BY update_time DESC LIMIT '.
                DEFAULT_PAGE_LEN.' OFFSET '.$offset);
            $this->data['posts'] = $posts;
            if ($posts){
                //found some posts
                //get total posts in category
                $total_post = $this->block_content_model->get_total(array('status'=>1));
                //create paging
                $base_url = '/category/search/'.$keyword.'/';
                $this->data['pagination'] = $this->create_pagination($base_url, $total_post, DEFAULT_PAGE_LEN, 4);
            } else {
                $this->data['pagination'] = '';
            }
        }
        $this->data['keyword'] = $keyword;
        $this->load->view(VIEW_FOLDER.'/search', $this->data);
    }
}