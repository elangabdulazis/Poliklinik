<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	public function index()
	{
		$data['obat'] = $this->obat_model->get_data();
		$this->load->model('obat_model');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('obat/v_view',$data);
		$this->load->view('templates/footer');
	}

	public function add_data(){
		$kode_obat 	= $this->input->post('kode_obat');
		$namaobat 	= $this->input->post('namaobat');	
		$jenisobat	= $this->input->post('jenisobat');
		$tglmasuk	= $this->input->post('tgl_masuk');
		$expired	= $this->input->post('expired');
		$keterangan = $this->input->post('keterangan');
		$harga		= $this->input->post('harga');
		
		
		$data = array(
			'kd_obat'		=> $kode_obat,
			'nama_obat'		=> $namaobat,
			'jenis_obat'	=> $jenisobat,
			'tgl_masuk'		=> $tglmasuk,
			'expired'		=> $expired,
			'keterangan'	=> $keterangan,
			'harga'			=> $harga
		);

		$this->obat_model->input_data($data,'tbl_obat');
		$this->session->set_flashdata('flash','Ditambahkan');
		redirect('obat/index');
	}

	public function hapus($kd_obat){
		$where = array('kd_obat' => $kd_obat);
		$this->obat_model->hapus_data($where,'tbl_obat');
		$this->session->set_flashdata('flash','Dihapus');
		redirect('obat/index');

	}

	public function edit($kd_obat){
		$where = array('kd_obat' => $kd_obat);
		$data['obat'] = $this->obat_model->edit_data($where,'tbl_obat')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('obat/v_edit',$data);
		$this->load->view('templates/footer');
		
	}

	public function update(){
		$kode_obat 	= $this->input->post('kode_obat');
		$namaobat 	= $this->input->post('namaobat');	
		$jenisobat	= $this->input->post('jenisobat');
		$tglmasuk	= $this->input->post('tglmasuk');
		$expired	= $this->input->post('expired');
		$keterangan = $this->input->post('keterangan');
		$harga		= $this->input->post('harga');

		$data = array( 
			'nama_obat'		=> $namaobat,
			'jenis_obat'	=> $jenisobat,
			'tgl_masuk'		=> $tglmasuk,
			'expired'		=> $expired,
			'keterangan'	=> $keterangan,
			'harga'			=> $harga
			);

		$where = array(
			'kd_obat' => $kode_obat
			);

		$this->obat_model->update_data($where,$data,'tbl_obat');
		redirect('obat/index');

	}
}
