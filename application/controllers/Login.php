  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
		{
		parent::__construct();
		$this->load->library('form_validation');
		}

	public function index(){


		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required');

		if ($this->form_validation->run() == false) {
		$data['title'] = 'Login Page';
		$this->load->view('template/header',$data);
		$this->load->view('login/v_view');
		$this->load->view('template/footer');
		}else{
			$this->_login();
		}
	}

	private function _login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');


		$user =$this->db->get_where('user',['email' =>$email])->row_array();



		

		# user ada

		if ($user) {
			//jika usernya aktif
			if ($user['us_active'] == 1) {
				//cek password
				if (password_verify($password,$user['password'])) {
					$data =[
						'email' =>$user['email'],
						'level' =>$user['level']
					];
					$this->session->set_userdata($data);
					if ($user['level'] == 1) {
						redirect('admin');
					}if($user['level'] ==2){	 
						redirect('user');
					}if ($user['level'] ==3) {
						redirect('profile');
					}


				}else{
				$this->session->set_flashdata('message','<div claas="alert alert-success" role="alert">
				Wrong Password
				</div>');
			redirect('login');
				}


				
			}else{
				$this->session->set_flashdata('message','<div claas="alert alert-success" role="alert">
				This Email has not been activated
				</div>');
			redirect('login');
			}

		}else{
				$this->session->set_flashdata('message','<div claas="alert alert-success" role="alert">
				Email is not Registed !
				</div>');
			redirect('login');
		}


	}




	public function registration(){

		$this->form_validation->set_rules('nama','Nama','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',[
			'is_unique' => 'This Email has already registered'
		]);
		$this->form_validation->set_rules('password','Password','required|trim|min_length[3]|matches[password2]',[
			'matches' 	 => 'password dont match',
			'min_length' => 'password too short'
		]);
		$this->form_validation->set_rules('password2','Password','required|trim|min_length[3]|matches[password]');


		if ($this->form_validation->run() == false) {
		$data['title'] = 'Poliklinik User registration';
		// $this->load->model('user_model');
		$this->load->view('template/header',$data);
		$this->load->view('login/v_regis');
		$this->load->view('template/footer');
		}else{
			$data = [
				'nama' 		=> htmlspecialchars($this->input->post('nama',true)),
				'email' 	=> htmlspecialchars($this->input->post('email',true)),
				'image' 	=> 'default.jpg',
				'password' 	=> password_hash($this->input->post('password'),PASSWORD_DEFAULT),
				'level'		=>3,
				'us_active'	=>1,
				'date'		=>time()
			];
			$this->db->insert('user',$data);
			$this->session->set_flashdata('message','<div claas="alert alert-success" role="alert">
				Congratulation ,please to Login !
				</div>');
			redirect('login');
		}
		
	}
	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('level');

		$this->session->set_flashdata('message','<div claas="alert alert-success" role="alert">
				You Have Logout !!!
				</div>');
			redirect('login');
	}

	public function block(){
		$this->load->view('login/block');
	}
}
?>