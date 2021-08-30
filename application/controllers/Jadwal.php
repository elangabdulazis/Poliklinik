 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {



	public function index()
	{
		
		$data = [
			'jadwal'  	=> $this->jadwal_model->get_data(),
			'dokter'  	=> $this->dokter_model->getAll()
		];
		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();
		

		$this->load->model('jadwal_model');
		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('jadwal/v_view',$data);
		$this->load->view('templates/footer');

	}

	

	public function tambah(){
		$data = [
			'dokter' => $this->dokter_model->getAll(),
			'spesialis' => $this->spesialis_model->get_data()
		];
		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();
		

		$this->load->model('jadwal_model');
		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('jadwal/v_add',$data);
		$this->load->view('templates/footer');

		
	}

	public function getFoto(){
		$kd_dokter = $this->input->post('kd_dokter');
		$where 	   = array('kd_dokter' => $kd_dokter);
		$data      = $this->dokter_model->edit_data($where,'tbl_dokter')->result();

		echo json_encode($data);
	}

	public function simpanJadwal(){
		$kd_dokter 	= $this->input->post('kd_dokter');
		$kd_poli	= $this->input->post('kd_poli');	
		$waktu	    = $this->input->post('waktu');
		$jadwal 	= $this->input->post('jadwal');
		$status  	= $this->input->post('status');
		$keterangan = $this->input->post('keterangan');
		$kd_jadwal 	= '';

		$data = array(
			'kd_jadwal'	 => $kd_jadwal,
			'kd_dokter'	 => $kd_dokter,
			'waktu'		 => $waktu,
			'tanggal'	 => $jadwal,
			'status'	 => $status,
			'keterangan' => $keterangan,
			'kd_poli'	 => $kd_poli
		);

		$this->jadwal_model->input_data($data,'tbl_jadwal');
		$this->session->set_flashdata('flash','Di tambahkan');
		redirect('jadwal/index');
	}

	public function hapus($kd_jadwal){
		$where = array('kd_jadwal' => $kd_jadwal);
		$this->jadwal_model->hapus_data($where,'tbl_jadwal');
		$this->session->set_flashdata('flash','Di hapus');
		redirect('jadwal/index');

	}

	public function edit(){
		
		$kd_jadwal = $this->input->post('kd_jadwal');
		$where = array('kd_jadwal' => $kd_jadwal);
		$data  = $this->jadwal_model->edit_data($where,'tbl_jadwal')->result();
		echo json_encode($data);
		
	}

	public function update(){
		$kd_dokter 	= $this->input->post('kd_dokter');
		$waktu	    = $this->input->post('waktu');
		$jadwal 	= $this->input->post('jadwal');
		$status  	= $this->input->post('status');
		$kd_jadwal 	= $this->input->post('kd_jadwal');
	
		$data = array(
			'kd_dokter'	=> $kd_dokter,
			'waktu'		=> $waktu,
			'tanggal'	=> $jadwal,
			'status'	=> $status,

		);

		$where = array(
			'kd_jadwal'	=> $kd_jadwal
		);

		$this->jadwal_model->update_data($where,$data,'tbl_jadwal');
		$this->session->set_flashdata('flash','Diubah');
		redirect('jadwal/index');

	}

	public function getDokter(){
		$kd_poli = $this->input->post('kd_poli');

		$where = array('spesialis' => $kd_poli);
		$data  = $this->dokter_model->getAllWhere($where);
	
		echo json_encode($data);
	}
}
