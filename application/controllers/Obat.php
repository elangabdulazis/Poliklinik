<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	public function index()
	{
		$data['obat'] = $this->obat_model->get_data();
		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();
		

		$this->load->model('obat_model');
		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('obat/v_view',$data);
		$this->load->view('templates/footer');
	}

	public function getData(){

		$data = $this->obat_model->get_data();
		echo json_encode($data);
	}

	public function tambah(){
		$data['obat'] = $this->obat_model->get_data();
		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();
		

		$this->load->model('obat_model');
		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('obat/v_add',$data);
		$this->load->view('templates/footer');

		
	}

	public function add_data(){
		$namaobat 	 = $this->input->post('namaobat');
		$miligram 	 = $this->input->post('miligram');
		$jenisobat	 = $this->input->post('jenisobat');
		$unit 	     = $this->input->post('unit');
		$jumlahunit  = $this->input->post('jumlahunit');
		$obatperunit = $this->input->post('obatperunit');
		$totalobat 	 = $this->input->post('totalobat');
		$hargabeli 	 = $this->input->post('hargabeli');
		$hargamodal  = $this->input->post('hargamodal');
		$hargajual 	 = $this->input->post('hargajual');
		$tglmasuk	 = $this->input->post('tgl_masuk');
		$expired	 = $this->input->post('expired');
	
		
		
		$data = array(
			'nama_obat'		  => $namaobat,
			'miligram'		  => $miligram,
			'jenis_obat'	  => $jenisobat,
			'unit'		      => $unit,
			'jumlah_unit'	  => $jumlahunit,
			'jumla_obat_unit' => $obatperunit,
			'total_obat'	  => $totalobat,
			'harga_beli'	  => $hargabeli,
			'harga_modal'	  => $hargamodal,
			'harga_jual'	  => $hargajual,
			'tgl_masuk'		  => $tglmasuk,
			'expired'		  => $expired,
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

	public function edit(){
		
		$kd_obat = $this->input->post('kd_obat');
		$where = array('kd_obat' => $kd_obat);
		$data  = $this->obat_model->edit_data($where,'tbl_obat')->result();
		echo json_encode($data);
		
	}

	public function update(){
		$kode_obat 	 = $this->input->post('kode_obat');
		$namaobat 	 = $this->input->post('namaobat');
		$miligram 	 = $this->input->post('miligram');
		$jenisobat	 = $this->input->post('jenisobat');
		$unit 	     = $this->input->post('unit');
		$jumlahunit  = $this->input->post('jumlahunit');
		$obatperunit = $this->input->post('obatperunit');
		$totalobat 	 = $this->input->post('totalobat');
		$hargabeli 	 = $this->input->post('hargabeli');
		$hargamodal  = $this->input->post('hargamodal');
		$hargajual 	 = $this->input->post('hargajual');
		$tglmasuk	 = $this->input->post('tgl_masuk');
		$expired	 = $this->input->post('expired');

		$data = array(
			'nama_obat'		  => $namaobat,
			'miligram'		  => $miligram,
			'jenis_obat'	  => $jenisobat,
			'unit'		      => $unit,
			'jumlah_unit'	  => $jumlahunit,
			'jumla_obat_unit' => $obatperunit,
			'total_obat'	  => $totalobat,
			'harga_beli'	  => $hargabeli,
			'harga_modal'	  => $hargamodal,
			'harga_jual'	  => $hargajual,
			'tgl_masuk'		  => $tglmasuk,
			'expired'		  => $expired,
		);

		$where = array(
			'kd_obat' => $kode_obat
			);

		$this->obat_model->update_data($where,$data,'tbl_obat');
		$this->session->set_flashdata('flash','Diupdate');
		redirect('obat/index');

	}
		public function pdf(){
		$this->load->library('dompdf_gen');
		$data = [
			'obat' => $this->obat_model->get_data()
		];

		$this->load->view('obat/laporan_pdf',$data);
		$paper_size ='A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size,$orientation);


		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_pasien.pdf",array('Attachment'=>0));
	}
}
