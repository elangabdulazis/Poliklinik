<?php
/**
 * 
 */
class Karyawan extends CI_Controller
{
	
	public function index(){

		$data['karyawan'] = $this->karyawan_model->getData()->result();
		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();
		

		$this->load->model('karyawan_model');
		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('karyawan/v_view',$data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();
		

		$this->load->model('karyawan_model');
		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('karyawan/v_add');
		$this->load->view('templates/footer');
	}

	public function simpanData(){
		$nama  = $this->input->post('nama');
		$jk    = $this->input->post('jeniskelamin');
		$tgl   = $this->input->post('tgl');
		$no_hp = $this->input->post('nohp');
		$alamat = $this->input->post('alamat');

		$data = array(
			"nama" 			=> $nama,
			"jenis_kelamin" => $jk,
			"tanggal_lahir" => $tgl,
			"no_hp" 		=> $no_hp,
			"alamat"		=> $alamat,
		);

		$this->karyawan_model->tambahData($data,"tbl_karyawan");
		$this->session->set_flashdata("flash","di tambah");
		redirect('karyawan/index');
	}

	public function hapusData($no){
		$where = array( "no" => $no);
		$this->karyawan_model->hapusData($where,"tbl_karyawan");
		$this->session->set_flashdata("flash","di hapus");
		redirect('karyawan/index');
	}

	public function editData(){
		$no 	= $this->input->post('no');
		$where  = array( "no" => $no);
		$data   = $this->karyawan_model->editData($where,"tbl_karyawan")->result();
		echo json_encode($data);
	}

	public function updateData(){
		$no     = $this->input->post('no');
		$nama   = $this->input->post('nama');
		$jk     = $this->input->post('jeniskelamin');
		$tgl    = $this->input->post('tgl');
		$no_hp  = $this->input->post('nohp');
		$alamat = $this->input->post('alamat');

		$data = array(
			"nama" 			=> $nama,
			"jenis_kelamin" => $jk,
			"tanggal_lahir" => $tgl,
			"no_hp" 		=> $no_hp,
			"alamat"		=> $alamat,
		);

		$where = array( "no" => $no );

		$this->karyawan_model->updateData($where,$data,"tbl_karyawan");
		$this->session->set_flashdata("flash","di update");
		redirect('karyawan/index');

	}
}