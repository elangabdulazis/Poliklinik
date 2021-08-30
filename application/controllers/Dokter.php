
 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {



	public function index()
	{
		$query = "
		SELECT tbl_spesialis.nama AS 'namaspesialis',tbl_dokter.nama AS 'namadokter',noizin,nohp,tarif,kd_dokter
		FROM tbl_dokter,tbl_spesialis
		WHERE tbl_spesialis.kd_spesialis=tbl_dokter.spesialis
		";

		$data =[
			'dokter' 	=> $this->dokter_model->getDetail($query),
			'spesialis' => $this->spesialis_model->get_data()
		]; 
		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();

		

		

		$this->load->model('dokter_model');
		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('dokter/v_view',$data);
		$this->load->view('templates/footer');

	}

	

	public function tambah(){

		$data =[ 
			'spesialis' => $this->spesialis_model->get_data(),
			'dokter'	=> '',
		];
		
		$data1['user'] = $this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();
		

		$this->load->model('dokter_model');
		$this->load->view('templates/header',$data1);
		$this->load->view('templates/sidebar');
		$this->load->view('dokter/v_add',$data);
		$this->load->view('templates/footer');
	}

	public function add_data(){
		$kode_dokter 	= $this->input->post('kode_dokter');
		$namadokter 	= $this->input->post('namadokter');	
		$jeniskelamin	= $this->input->post('jeniskelamin');
		$nohp 			= $this->input->post('nohp');
		$noizin			= $this->input->post('noizin');
		$alamat 		= $this->input->post('alamat');
		$provinsi		= $this->input->post('provinsi');
		$kota 			= $this->input->post('kota');
		$kecamatan 		= $this->input->post('kecamatan');
		$kelurahan		= $this->input->post('kelurahan');
		$kotalahir		= $this->input->post('kotalahir');
		$tanggal_lahir 	= $this->input->post('tgllahir');
		$spesialis 		= $this->input->post('spesialis');
		$email 			= $this->input->post('email');
		$password 		= $this->input->post('password');
		$foto 			=$_FILES['foto']['name'];
   
		if($foto==''){}else{
		$config['upload_path']   = './assets/foto/';
		$config['allowed_types'] = 'jpg|png|gif';

		$this->load->library('upload',$config);	
		if(!$this->upload->do_upload('foto')){
			echo "Upload Gagal";
		} else {
			$poto = $this->upload->data('file_name');
		}
		}

		
		$data = array(
			'kd_dokter'		=> $kode_dokter,
			'nama'			=> $namadokter,
			'jenis_kelamin'	=> $jeniskelamin,
			'nohp'			=> $nohp,
			'noizin'		=> $noizin,
			'alamat'		=> $alamat,
			'provinsi'		=> $provinsi,
			'kota'			=> $kota,
			'kecamatan'		=> $kecamatan,
			'kelurahan'		=> $kelurahan,
			'tampat_lahir'	=> $kotalahir,
			'tanggal_lahir' => $tanggal_lahir,
			'spesialis'		=> $spesialis,
			'email'			=> $email,
			'password'  	=> $password,
			'photo'			=> $foto
		);

		$this->dokter_model->input_data($data,'tbl_dokter');
		$this->session->set_flashdata('flash','Di tambahkan');
		redirect('dokter/index');
	}

	public function hapus($kd_dokter){
		$where = array('kd_dokter' => $kd_dokter);
		$this->dokter_model->hapus_data($where,'tbl_dokter');
		$this->session->set_flashdata('flash','Di hapus');
		redirect('dokter/index');

	}

	public function edit(){
		
		$kd_dokter = $this->input->post('kd_dokter');
		$where = array('kd_dokter' => $kd_dokter);
		$data  = $this->dokter_model->edit_data($where,'tbl_dokter')->result();
		echo json_encode($data);
		
	}

	public function update(){
		$kode_dokter 	= $this->input->post('kode_dokter');
		$namadokter 	= $this->input->post('namadokter');	
		$jeniskelamin	= $this->input->post('jeniskelamin');
		$nohp 			= $this->input->post('nohp');
		$noizin			= $this->input->post('noizin');
		$alamat 		= $this->input->post('alamat');
		$provinsi		= $this->input->post('provinsi');
		$kota 			= $this->input->post('kota');
		$kecamatan 		= $this->input->post('kecamatan');
		$kelurahan		= $this->input->post('kelurahan');
		$kotalahir		= $this->input->post('kotalahir');
		$tanggal_lahir 	= $this->input->post('tgllahir');
		$spesialis 		= $this->input->post('spesialis');
		$email 			= $this->input->post('email');
		$password 		= $this->input->post('password');
		$foto			=$_FILES['foto']['name'];
	
		if($foto==''){}else{
		$config['upload_path']   = './assets/foto/';
		$config['allowed_types'] = 'jpg|png|gif';

		$this->load->library('upload',$config);	
		if(!$this->upload->do_upload('foto')){
			echo "Upload Gagal";
		} else {
			$foto = $this->upload->data('file_name');
		}
		}
		$data = array(
			'nama'			=> $namadokter,
			'jenis_kelamin'	=> $jeniskelamin,
			'nohp'			=> $nohp,
			'noizin'		=> $noizin,
			'alamat'		=> $alamat,
			'provinsi'		=> $provinsi,
			'kota'			=> $kota,
			'kecamatan'		=> $kecamatan,
			'kelurahan'		=> $kelurahan,
			'tampat_lahir'	=> $kotalahir,
			'tanggal_lahir' => $tanggal_lahir,
			'spesialis'		=> $spesialis,
			'email'			=> $email,
			'password'  	=> $password,
			'photo'			=> $foto
		);

		$where = array(
			'kd_dokter'		=> $kode_dokter
		);

		$this->dokter_model->update_data($where,$data,'tbl_dokter');
		$this->session->set_flashdata('flash','Diubah');
		redirect('dokter/index');

	}

	public function get_tarif(){
		$kd_spesialis = $this->input->post('kd_spesialis');
		$where = array('kd_spesialis' => $kd_spesialis);
		$data  = $this->spesialis_model->edit_data($where,'tbl_spesialis')->result();

		echo json_encode($data);
	}
}
