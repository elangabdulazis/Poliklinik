<?php 

/**
 * 
 */
class Diagnosa extends CI_Controller{


	// public function __construct(){
	// 	parent::__construct();
	// 	is_logged_in();
	

	public function index(){

		$data['diagnosa'] = $this->diagnosa_model->getDiagnosa();
		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();
		
		$this->load->model('diagnosa_model');
		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('diagnosa/v_view',$data);
		$this->load->view('templates/footer');

	}

	public function tambah(){

		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();

		$this->load->model('diagnosa_model');
		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('diagnosa/v_add');
		$this->load->view('templates/footer');

	}

	public function simpanData(){

		$diagnosa  = $this->input->post('diagnosa');
		$deskripsi = $this->input->post('deskripsi');

		$data = array(
				'nama_diagnosa' => $diagnosa,
				'deskripsi' 	=> $deskripsi
		);

		$this->diagnosa_model->simpanData($data,'tbl_diagnosa');
		$this->session->set_flashdata('flash','ditambahkan');
		redirect('diagnosa/index');

	}

	public function hapus($no){

		$where = array( 'no' => $no );
		$this->diagnosa_model->hapusData($where,'tbl_diagnosa');
		$this->session->set_flashdata('flash','dihapus');
		redirect('diagnosa/index');

	}

	public function edit(){

		$no    = $this->input->post('no');
		$where = array( 'no' => $no);
		$data  = $this->diagnosa_model->editData($where,'tbl_diagnosa');

		echo json_encode($data);
	}

	public function update(){
		$no 	   = $this->input->post('no');
		$diagnosa  = $this->input->post('diagnosa');
		$deskripsi = $this->input->post('deskripsi');

		$data = array(
				'nama_diagnosa' => $diagnosa,
				'deskripsi'		=> $deskripsi
		);

		$where = array( 'no' => $no );

		$this->diagnosa_model->updateData($where,$data,'tbl_diagnosa');
		$this->session->set_flashdata('flash','di update');

		redirect('diagnosa/index');
	}



}




 ?>