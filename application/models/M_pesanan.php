<?php
    class M_pesanan extends CI_Model{
        public function get_wait_list($table_name, $column_name, $condition){
            // select * from $table_name, where $column_name == $condition
            $this->db->where($column_name, $condition);
            return $this->db->get($table_name);
        }
    }
?>