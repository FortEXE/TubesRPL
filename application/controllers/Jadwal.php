<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	// public function redirect_user()
	// {
	// 	if ($this->session->userdata('user_type') == 'admin') {
	// 		redirect('admin/jadwal');			
	// 	}else{
	// 		redirect('user/jadwal','refresh');
	// 	}
	// }

	public function __construct(){
		parent::__construct();
    	// $this->load->model('AccountModel');
	}

	public function isAdmin()
	{	
		if ($this->session->userdata('user_type') == 'admin') {
			return true;
		}else{
			return false;
		}
	}

	public function isUser()
	{
		if ($this->session->userdata('user_type') == 'user') {
			return true;
		}else{
			return false;
		}
	}

	public function index(){

		if ($this->session->userdata('isLoggedIn')) {
			if ($this->isAdmin()) {

				$data['kereta'] = $this->Model_kereta->getAll();
				$data['stasiun'] = $this->Model_stasiun->getAll();
				$data['jadwal'] = $this->Model_jadwal->getAll();

				$this->load->view('template/header');
				$this->load->view('v_admin/v_jadwal', $data);
				$this->load->view('template/footer');

			}else{
				redirect('user','refresh');
			}
		}
	}
}

?>