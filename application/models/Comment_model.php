<?php
/**
 * author: Martin
 */
Class Comment_model extends MY_Model
{
    var $table_name = 'comment';

    function get_list_paging($where, $offset, $limit){
        $this->db->from($this->table_name);
        $this->db->where($where);
        if ($limit > 0){
            $this->db->limit($limit, $offset);
        }
        $this->db->order_by('time', 'desc');
        $query = $this->db->get();

        if($query->result()){
            return $query->result();

        }else{
            return false;
        }
    }
}