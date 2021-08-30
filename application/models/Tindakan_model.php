<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tindakan_model extends MY_Model {
    public function __construct(){
        $table = 'tbl_tindakan';
        $detail = 'detail_tindakan';
        parent::__construct($table,$detail);
    }
    public function getData(){
 		return $this->db->get('tbl_tindakan')->result_array();
 	}

 	public function simpanData($data){
 		$this->db->insert('tbl_tindakan',$data);
 	}

 	public function hapusData($where,$table){
 		$this->db->where($where);
 		$this->db->delete($table);
 	}

 	public function editData($where,$table){
 		return $this->db->get_where($table,$where);
 	}

 	public function updateData($where,$data,$table){
 		$this->db->where($where);
 		$this->db->update($table,$data);
 	}
}
