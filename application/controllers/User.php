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
			$data['session'] = $this->session->userdata();

			$this->load->view('template/header', $meta);
			$this->load->view('v_beranda', $data);
			$this->load->view('template/footer');
		}
	}

}
