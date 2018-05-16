<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	// public function redirect_user()
	// {
	// 	if ($this->session->userdata('user_type') == 'admin') {
	// 		redirect('admin/pemesanan');			
	// 	}else{
	// 		redirect('user/jualpemesanan','refresh');
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

		if ($this->isAdmin()) {
			
			$data['pemesanan'] = $this->Model_pemesanan->getAll();
			$this->load->view('template/header');
			$this->load->view('v_admin/v_pemesanan', $data);
			$this->load->view('template/footer');

		}
	}

	public function proses_pemesanan()
	{
		$data['nama'] = $this->input->post('nama');
		$data['alamat'] = $this->input->post('alamat');
		$data['telp'] = $this->input->post('telp');
		$data['email'] = $this->input->post('email');
	}
}

?>