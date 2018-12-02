<?php
    class M_admin extends CI_Model{

        public function get_admin_data($table_name, $column_name, $condition){
            // select * from $table_name, where $column_name == $condition
            $this->db->where($column_name, $condition);
            return $this->db->get($table_name);
        }
    }
?>
