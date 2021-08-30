<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {


	public function __construct(){
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['menu'] = $this->menu_model->getMenu();
		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();
		
		
		$this->load->model('menu_model');
		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('menu/v_view',$data);
		$this->load->view('templates/footer');

	}

	public function tambah(){
		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();
		

		$this->load->model('menu_model');
		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('menu/v_add');
		$this->load->view('templates/footer');
	}

	public function simpanData(){

		$menu    	 = $this->input->post('menu');
	

		$data = array(
			'menu' 	   	   => $menu
		);

		$this->menu_model->simpanData($data,'user_menu');
		$this->session->set_flashdata('flash','di tambahkan');
		redirect('menu/index');
	}


	public function hapusMenu($id){
		$where = array( 'id' => $id );
		$this->menu_model->hapusData($where,'user_menu');
		$this->session->set_flashdata('flash','dihapus');
		redirect('menu/index');
	}
	public function edit($id){
		$where = array('id' => $id);
		$data['menu'] = $this->menu_model->getMenu();
		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();
		

		$this->load->model('menu_model');
		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('menu/v_view',$data);
		$this->load->view('templates/footer');
		
	}

	public function update(){
		$id 		 = $this->input->post('id');
		$menu    	 = $this->input->post('menu');
	

		$data = array(
			'menu' 	   	   => $menu
		);

		$where = array(
			'id'		=> $id
			);

		$this->menu_model->updateData($where,$data,'user_menu');
		redirect('menu/index');

	}














	public function submenu(){
		$data['submenu'] = $this->menu_model->getSubMenu();
		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();

		$data['menu'] = $this->db->get('user_menu')->result_array();

		
		$this->load->model('menu_model');
		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('menu/v_submenu',$data);
		$this->load->view('templates/footer');
	}
	public function tambahsubmenu(){
		$data['submenu'] = $this->menu_model->getSubMenu();
		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();

		$data['menu'] = $this->db->get('user_menu')->result_array();

		
		$this->load->model('menu_model');
		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('menu/v_addsubmenu',$data);
		$this->load->view('templates/footer');
	}
		public function simpansubmenu(){

		$menu_id    	 = $this->input->post('menu_id');
		$judul    	 	 = $this->input->post('judul');
		$url    	 	 = $this->input->post('url');
		$icon    	 	 = $this->input->post('icon');
		$is_active    	 = $this->input->post('is_active');
	

		$data = array(
			'menu_id' 	   	=> $menu_id,
			'judul' 	   	=> $judul,
			'url' 	   	    => $url,
			'icon'			=> $icon,
			'is_active' 	=> $is_active
		);

		$this->db->insert('user_sub_menu',$data);
		redirect('menu/submenu');
	}


		public function hapusSubmenu($id){

		$where = array( 'id' => $id );
		$this->menu_model->hapusData($where,'user_sub_menu');
		$this->session->set_flashdata('flash','dihapus');
		redirect('menu/submenu');

	}

	public function editSubmenu(){

		$id    = $this->input->post('id');
		$where = array( 'id' => $id);
		$data  = $this->menu_model->editData($where,'user_sub_menu');

		echo json_encode($data);
	}

	public function updateSubmenu(){
		$menu_id    	 = $this->input->post('menu_id');
		$judul    	 	 = $this->input->post('judul');
		$url    	 	 = $this->input->post('url');
		$icon    	 	 = $this->input->post('icon');
		$is_active    	 = $this->input->post('is_active');
	

		$data = array(
			'menu_id' 	   	=> $menu_id,
			'judul' 	   	=> $judul,
			'url' 	   	    => $url,
			'icon'			=> $icon,
			'is_active' 	=> $is_active
		);

		$this->db->insert('user_sub_menu',$data);
		redirect('menu/submenu');
	}
	
}