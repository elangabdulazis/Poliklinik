<?php

class Resep extends CI_Controller{

    public function index(){
        $data['resep'] = $this->resep_model->get_data();
		$this->load->model('resep_model');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('resep/v_view',$data);
		$this->load->view('templates/footer');
	}
	
	public function tambah(){
		$data['resep'] = $this->resep_model->get_data();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('resep/v_add');
		$this->load->view('templates/footer');

		
	}
}