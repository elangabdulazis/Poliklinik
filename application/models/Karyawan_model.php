<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_model extends MY_Model {
    public function __construct(){
        $table = 'tbl_karyawan';
        $detail = '';
        parent::__construct($table,$detail);
    }
    public function getData(){
		return $this->db->get("tbl_Karyawan");
	}

	public function tambahData($data){
		return $this->db->insert('tbl_Karyawan',$data);
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
