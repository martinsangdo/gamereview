<?php
/**
 * author: Martin
 */
Class Tmp_model extends MY_Model
{
    var $table_name = 'tmp';

    function get_pagination($where, $offset, $limit, $last_id = ''){
        $this->db->from($this->table_name);
        $this->db->where($where);
        if(!empty($last_id)) {
            $this->db->where('block_content._id <', $last_id);
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

    function get_pagination_rand($where, $offset, $limit){
        $this->db->from($this->table_name);
        $this->db->where($where);
        if ($limit > 0){
            $this->db->limit($limit, $offset);
        }
        $query = $this->db->order_by('rand()');
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
}