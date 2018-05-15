<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
		$this->load->view('index');
	}

	public function cek_login() {
		$data = array('USERNAME' => $this->input->post('username'),
						'PASSWD_MEMBER' => $this->input->post('password')
			);
		$this->load->model('Model_member'); // load model_user
		$hasil = $this->Model_member->cek_Member($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['isLoggedIn'] = TRUE;
				$sess_data['id'] = $sess->ID_MEMBER;
				$sess_data['username'] = $sess->USERNAME;
				$sess_data['nama'] = $sess->NAMA_MEMBER;
				$sess_data['jk'] = $sess->JK_MEMBER;
				$sess_data['email'] = $sess->EMAIL_MEMBER;
				$sess_data['notelp'] = $sess->NOTELP_MEMBER;
				$sess_data['alamat'] = $sess->ALAMAT_MEMBER;
				$sess_data['user_type'] = $sess->TIPE_MEMBER;
				$this->session->set_userdata($sess_data);
			}
			
			if ($this->session->userdata('user_type') == 'admin') {
				redirect('admin');
			}
			elseif ($this->session->userdata('user_type') == 'user') {
				redirect('user');
			}		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}



}

?>
