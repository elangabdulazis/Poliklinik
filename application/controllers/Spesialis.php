<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spesialis extends CI_Controller {

	public function index()
	{
		$data['spesialis'] = $this->spesialis_model->get_data();
		$this->load->model('spesialis_model');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('spesialis/v_view',$data);
		$this->load->view('templates/footer');

	}

	function getdata(){
		$data = $this->spesialis_model->get_data();
		echo json_encode($data);
	}

	public function add_data(){
		$kode_spesialis = $this->input->post('kd_spesialis');
		$nama 			= $this->input->post('namaspesialis');	
		$tarif			= $this->input->post('tarif');
		$keterangan		= $this->input->post('keterangan');
		
		$result['pesan']='';
		
		$data = array(
			'kd_spesialis'		=> $kode_spesialis,
			'nama'				=> $nama,
			'tarif'				=> $tarif,
			'keterangan'		=> $keterangan
		);

		$this->spesialis_model->input_data($data,'tbl_spesialis');
		echo json_encode($result);
	}

	public function hapus(){
		$kd_spesialis = $this->input->post('kd_spesialis');
		$where = array('kd_spesialis' => $kd_spesialis);
		$this->spesialis_model->hapus_data($where,'tbl_spesialis');
		

	}

	public function edit(){
		$kd_spesialis = $this->input->post('kd_spesialis');
		$where = array('kd_spesialis' => $kd_spesialis);
		$data  = $this->spesialis_model->edit_data($where,'tbl_spesialis')->result();

		echo json_encode($data);
		
		
	}

	public function update(){
		$kode_spesialis = $this->input->post('kd_spesialis');
		$nama 			= $this->input->post('namaspesialis');	
		$tarif			= $this->input->post('tarif');
		$keterangan		= $this->input->post('keterangan');
		
		$result['pesan']='';

		$data = array(
			
			'nama'				=> $nama,
			'tarif'				=> $tarif,
			'keterangan'		=> $keterangan
		);

		$where = array(
			'kd_spesialis'	=> $kode_spesialis
			);

		$this->spesialis_model->update_data($where,$data,'tbl_spesialis');
		echo json_encode($result);

	}
}
