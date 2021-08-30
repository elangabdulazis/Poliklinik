<?php

/**
 * 
 */
class Labor extends CI_Controller
{
	
	public function index(){

		$data = [
			'lab' => $this->labor_model->getData()
		];
		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('labor/v_views',$data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('labor/v_add');
		$this->load->view('templates/footer');
	}

	public function simpanData(){

		$tindakan    = $this->input->post('tindakan');
		$feedokter   = $this->input->post('feedokter');
		$feekaryawan = $this->input->post('feekaryawan');
		$harga 		 = $this->input->post('harga');
		$deskripsi   = $this->input->post('deskripsi');

		$data = array(
			'tindakan' 	   => $tindakan,
			'fee_dokter'   => $feedokter,
			'fee_karyawan' => $feekaryawan,
			'harga' 	   => $harga,
			'deskripsi'    => $deskripsi
		);

		$this->labor_model->simpanData($data,'laboratorium');
		$this->session->set_flashdata('flash','di tambahkan');
		redirect('labor/index');
	}

	public function hapusData($no){
		$where = array( 'no' => $no);
		$this->labor_model->hapusData($where,'laboratorium');
		$this->session->set_flashdata('flash','di hapus');
		redirect('labor/index');
	}

	public function edit(){
		$no    = $this->input->post('no');
		$where = array( 'no' => $no);
		$data  = $this->labor_model->editData($where,'laboratorium')->result();

		echo json_encode($data);
	}

	public function update(){
		$no			 = $this->input->post('no');
		$tindakan    = $this->input->post('tindakan');
		$feedokter   = $this->input->post('feedokter');
		$feekaryawan = $this->input->post('feekaryawan');
		$harga 		 = $this->input->post('harga');
		$deskripsi   = $this->input->post('deskripsi');

		$where = array( 'no' => $no);
		$data  = array(
			'tindakan' 	   => $tindakan,
			'fee_dokter'   => $feedokter,
			'fee_karyawan' => $feekaryawan,
			'harga' 	   => $harga,
			'deskripsi'    => $deskripsi
		);

		$this->labor_model->updateData($where,$data,'laboratorium');
		$this->session->set_flashdata('flash','di update');
		redirect('labor/index');
	}
}