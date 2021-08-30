<?php 

/**
 * 
 */
class Menu_model extends CI_Model
{
	public function getMenu(){

		return $this->db->get('user_menu')->result_array();
	}
    public function getSubMenu(){

        $query = "SELECT `user_sub_menu` .*, `user_menu`.`menu`
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                   ";

        return $this->db->query($query)->result_array();
    }

    public function simpanData($data){
        $this->db->insert('user_menu',$data);
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