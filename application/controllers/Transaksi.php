<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function redirect_user()
	{
		if ($this->session->userdata('user_type') == 'admin') {
			redirect('admin/transaksi');			
		}else{
			redirect('user/jualtransaksi','refresh');
		}
	}

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
				$this->load->view('template/header');
				$this->load->view('v_admin/v_transaksi', $data);
				$this->load->view('template/footer');
			}else{
				redirect('user','refresh');
			}
		}
	}
}

?>