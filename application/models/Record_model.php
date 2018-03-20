<?php
/**
 */
Class Record_model extends MY_Model
{
    var $table_name = 'record';

    function get_pagination($where, $select = '*', $offset, $limit, $last_id = ''){
        $this->db->select($select);
        $this->db->from($this->table_name);
        $this->db->join('category_has_record', 'category_has_record.record_id = record._id');
        $this->db->join('category', 'category._id = category_has_record.category_id');
        $this->db->where($where);

        if(!empty($last_id)) {
            $this->where('record._id <', $last_id);
            $this->db->limit($limit, 0);
        }
        else{
            $this->db->limit($limit, $offset);
        }

        $this->db->order_by('record.ordinal asc, record._id desc, record.create_time desc');
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
        $this->db->join('category_has_record', 'category_has_record.record_id = record._id');
        $this->db->join('category', 'category._id = category_has_record.category_id');
        $this->db->where($where);
        $query = $this->db->get();

        if($query->result()){
            return $query->first_row();

        }else{
            return false;
        }
    }

    function find($where, $select = '*'){
        $this->db->select($select);
        $this->db->from($this->table_name);
        $this->db->where($where);
        $query = $this->db->get();

        if($query->result()){
            return $query->result();

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