<?php 

/**
 * 
 */
class Jadwal_model extends CI_Model
{
	public function get_data(){

    $query = "
        SELECT tbl_dokter.nama AS 'namadokter',kd_jadwal,waktu,tanggal,status,photo,
        tbl_spesialis.nama AS 'namapoli',tbl_jadwal.keterangan
        FROM tbl_dokter,tbl_jadwal,tbl_spesialis
        WHERE tbl_dokter.kd_dokter = tbl_jadwal.kd_dokter && 
        tbl_jadwal.kd_poli=tbl_spesialis.kd_spesialis";
       
       return $this->db->query($query)->result_array();
        
	}

	public function input_data($data)
    {
        $this->db->insert('tbl_jadwal',$data);
    }

     public function hapus_data($where,$table){
    	$this->db->where($where);
    	$this->db->delete($table);
    }

    public function edit_data($where,$table){
    	return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
    	$this->db->where($where);
    	$this->db->update($table,$data);
    }

    public function getDetail($query){
        return $this->db->query($query)->result_array(); 
    }
}