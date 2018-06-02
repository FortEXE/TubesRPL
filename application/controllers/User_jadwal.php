<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_jadwal extends CI_Controller {

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
			if ($this->isUser()) {

				$data['jadwal'] = $this->Model_jadwal->get_jadwal();

				//$this->load->view('template/header');
				$this->load->view('v_user/v_jadwal', $data);
				//$this->load->view('template/footer');

			}else{
				redirect('user','refresh');
			}
		}
	}

	public function detail(){

		if ($this->session->userdata('isLoggedIn')) {
			if ($this->isUser()) {

				$data['jadwal'] = $this->Model_jadwal->get_jadwal();

				//$this->load->view('template/header');
				$this->load->view('v_user/v_detailJadwal', $data);
				//$this->load->view('template/footer');

			}else{
				redirect('user','refresh');
			}
		}
	}
}

?>