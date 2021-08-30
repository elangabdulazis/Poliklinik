<?php 

/**
 * 
 */
class Submenu_model extends CI_Model
{
	public function getSubmenu(){

		return $this->db->get('user_sub_menu')->result_array();
	}

    public function simpandata($data){
        $this->db->insert('user_sub_menu',$data);
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