<?php
/**
 * author: Martin
 */
Class Site_model extends MY_Model
{
    var $table_name = 'site';

    function get_pagination($where, $offset, $limit, $last_id = ''){
        $this->db->from($this->table_name);
        $this->db->where($where);
        if(!empty($last_id)) {
            $this->db->where('site._id <', $last_id);
        }
        if ($limit > 0){
            $this->db->limit($limit, $offset);
        }

        $query = $this->db->get();

        if($query->result()){
            return $query->result();

        }else{
            return false;
        }
    }

    function findOne($where, $select = '*'){
        $this->db->select($select);
        $this->db->from($this->table_name);
        $this->db->where($where);
        $query = $this->db->get();

        if($query->result()){
            return $query->first_row();

        }else{
            return false;
        }
    }

    function count_total($where){
        $this->db->select('*');
        $this->db->from($this->table_name);
        $this->db->where($where);
        $query = $this->db->get();

        if($query->result()){
            return $query->num_rows();
        }else{
            return 0;
        }
    }
    //update after crawling
    function update_crawl($id, $new_post_num){
        $this->db->where('_id', $id);
        $this->db->set('crawl_time', date('Y-m-d H:i:s'));
        $this->db->set('post_num', 'post_num+'.$new_post_num, FALSE);
        $this->db->update('site');
    }
}