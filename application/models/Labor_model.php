<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Labor_model extends MY_Model {
    public function __construct(){
        $table     = 'laboratorium';
        $tablejoin = 'detail_lab';
        parent::__construct($table,$tablejoin);
    }
    public function getData(){
 		return $this->db->get('laboratorium')->result_array();
 	}

 	public function simpanData($data){
 		$this->db->insert('laboratorium',$data);
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

    // public function subHarga($nofaktur){
    //     $this->db->select_sum('harga');
    //     $this->db->from('laboratorium');
    //     $this->db->join('detail_lab','detail_lab.kd_labor=laboratorium.no');
    //     $this->db->where('no_faktur','191115PJ-001');
    //     return $this->db->get_compiled_select();
        
    // }
}



