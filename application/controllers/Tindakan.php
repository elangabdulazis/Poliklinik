<?php

/**
 * 
 */
class Tindakan extends CI_Controller
{
	
	public function index(){

		$data = [
			'tindakan' => $this->tindakan_model->getData()
		];
		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('tindakan/v_view',$data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();
		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('tindakan/v_add');
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

		$this->tindakan_model->simpanData($data,'tbl_tindakan');
		$this->session->set_flashdata('flash','di tambahkan');
		redirect('tindakan/index');
	}

	public function hapusData($no){
		$where = array( 'no' => $no);
		$this->tindakan_model->hapusData($where,'tbl_tindakan');
		$this->session->set_flashdata('flash','di hapus');
		redirect('tindakan/index');
	}

	public function edit(){
		$no    = $this->input->post('no');
		$where = array( 'no' => $no);
		$data  = $this->tindakan_model->editData($where,'tbl_tindakan')->result();

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

		$this->tindakan_model->updateData($where,$data,'tbl_tindakan');
		$this->session->set_flashdata('flash','di update');
		redirect('tindakan/index');
	}
	public function pdf(){
		$this->load->library('dompdf_gen');
		$data = [
			'tindakan' => $this->tindakan_model->getData()
		];

		$this->load->view('tindakan/laporan_pdf',$data);
		$paper_size ='A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size,$orientation);


		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_tindakan.pdf",array('Attachment'=>0));
	}
}