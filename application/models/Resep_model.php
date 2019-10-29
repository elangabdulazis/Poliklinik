<?php

class Resep_model extends CI_Model{

    public function get_data(){
        return $this->db->get('tbl_resep')->result_array();
    }
}