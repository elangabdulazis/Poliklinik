<?php 


	function is_logged_in(){

		$ci = get_instance();
		if (!$ci->session->userdata('email')) {
			redirect('login');
		}else {
			$level =$ci->session->userdata('level');
			$menu =$ci->uri->segment(1);

			$queryMenu = $ci->db->get_where('user_menu',['menu =>$menu'])->row_array();
			$menu_id =$queryMenu['id'];

			$userAccess = $ci->db->get_where('user_access_menu',[
				'level_id'=> $level,
				'menu_id' =>$menu_id

			]);

			if($userAccess->num_rows() <1 ){
				redirect('login/block');
			}
		}

	}

function check_access($level_id,$menu_id){
	$ci = get_instance();

	$ci->db->where('level_id',$level_id);
	$ci->db->where('menu_id',$menu_id);
	$result=$ci->db->get('user_access_menu');

	if ($result->num_rows()>0) {
		return "checked='checked'";
	}

}