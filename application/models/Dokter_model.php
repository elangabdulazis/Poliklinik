<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter_model extends MY_Model {
    public function __construct(){
        $table = 'tbl_dokter';
        $detail = '';
        parent::__construct($table,$detail);
    }
        public function getDetail($query){

        $this->db->select('*');
        $this->db->from('tbl_dokter');
        $this->db->join('tbl_spesialis','tbl_spesialis.kd_spesialis = tbl_dokter.spesialis');
        $this->db->get()->result_array();
        return $this->db->query($query)->result_array();
    }
}
// <?php 

// /**
//  * 
//  */
// class Dokter_model extends CI_Model
// {
// 	public function get_data(){

// 		return $this->db->get('tbl_dokter')->result_array();
// 	}
    // public function getDetail($query){

    //     // $this->db->select('*');
    //     // $this->db->from('tbl_dokter');
    //     // $this->db->join('tbl_spesialis','tbl_spesialis.kd_spesialis = tbl_dokter.spesialis');
    //     // $this->db->get()->result_array();
    //     return $this->db->query($query)->result_array();
    // }

// 	public function input_data($data)
//     {
//         $this->db->insert('tbl_dokter',$data);
//     }

//      public function hapus_data($where,$table){
//     	$this->db->where($where);
//     	$this->db->delete($table);
//     }

//     public function edit_data($where,$table){
//     	return $data = $this->db->get_where($table,$where);
//     }

//     public function update_data($where,$data,$table){
//     	$this->db->where($where);
//     	$this->db->update($table,$data);
//     }
// }