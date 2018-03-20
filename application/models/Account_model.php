<?php
/**
 */
Class Account_model extends MY_Model
{
    var $table_name = 'account';

    function findOne($where, $select = '*', $join = ''){
        $this->db->select($select);
        $this->db->from($this->table_name);
        $this->db->join('account_info', 'account_info.account_id = account._id');
        $this->db->join('user', 'user.account_id = account._id');
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

    function get_pagination($where, $select = '*', $offset, $limit, $last_id = ''){
        $this->db->select($select);
        $this->db->from($this->table_name);
        $this->db->join('user', 'user.account_id = account._id');
        $this->db->join('account_info', 'account_info.account_id = account._id');
        $this->db->where($where);

        if(!empty($last_id)) {
            $this->where('account._id <', $last_id);
            $this->db->limit($limit, 0);
        }
        else{
            $this->db->limit($limit, $offset);
        }

        $this->db->order_by('account._id desc');
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
