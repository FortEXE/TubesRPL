<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
		$this->load->view('index');
	}

	public function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('model_user'); // load model_user
		$hasil = $this->model_user->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['isLoggedIn'] = TRUE;
				$sess_data['id'] = $sess->id;
				$sess_data['username'] = $sess->username;
				$sess_data['email'] = $sess->email;
				$sess_data['user_type'] = $sess->user_type;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('user_type')=='admin') {
				redirect('admin');
			}
			elseif ($this->session->userdata('user_type')=='user') {
				redirect('user');
			}		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}



}

?>
