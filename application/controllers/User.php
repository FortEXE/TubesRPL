<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * kelas kontroller untuk user
	 */
	public function isUser()
	{
		if (isset($_SESSION['user_type'])) {
			return true;
		}else{
			echo 'FORBIDDEN ACCESS, ANDA BUKAN USER!';
		}
	}

	public function index()
	{

		if ($this->isUser()) {
			
			$meta['page_title'] = "Selamat datang, ". $this->session->userdata('username');

			$this->load->view('template/header_user', $meta);
			$this->load->view('v_user/v_home');
			$this->load->view('template/footer');
		}
	}

	public function home()
	{
		return $this->index();	
	}

	public function pemesanan()
	{
		$meta['page_title'] = "Pemesanan";
		$data['properti'] = $this->model_properti->GetAll();
		$data['user'] = $this->model_user->GetAll();

		$this->load->view('template/header_user', $meta);
		$this->load->view('v_user/v_beliProperti', $data);
		$this->load->view('template/footer');	
	}

}
