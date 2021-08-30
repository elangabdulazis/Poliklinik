<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function __construct(){
		parent::__construct();
		is_logged_in();
	}


	public function index()
	{
		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();
		

		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('admin/v_view');
		$this->load->view('templates/footer');

	}
	

	public function level()
	{
		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();
		
		$data['level']= $this->db->get('level')->result_array();

		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('admin/v_level',$data);
		$this->load->view('templates/footer');

	}

		public function access($level)
	{
		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();
		
		$data['level']= $this->db->get_where('level',['id'=>$level])->row_array();

		$this->db->where('id !=',1);
		$data['menu']=$this->db->get('user_menu')->result_array();

		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('admin/v_access',$data);
		$this->load->view('templates/footer');

	}



	public function changeaccess()
	{
		$menu_id = $this->input->post('menuId');
		$level_id = $this->input->post('levelId');

		$data = [ 
			'level_id' => $level_id,
			'menu_id'  => $menu_id
		];
		$result = $this->db->get_where('user_access_menu',$data);
		if ($result->num_rows() < 1) {
			$this->db->insert('user_access_menu',$data);
		}else{
			$this->db->delete('user_access_menu',$data);
		}

	}
	
}