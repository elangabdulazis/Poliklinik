<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa_model extends MY_Model {
    public function __construct(){
        $table = 'tbl_diagnosa';
        $detail = 'detail_diagnosa';
        parent::__construct($table,$detail);
    }

    public function getDiagnosa(){

        return $this->db->get('tbl_diagnosa')->result_array();
    }

    public function simpanData($data){
        $this->db->insert('tbl_diagnosa',$data);
    }

    public function hapusData($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function editData($where,$table){
        return $data = $this->db->get_where($table,$where)->result_array();
    }

    public function updateData($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}




