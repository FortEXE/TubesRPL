<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * kelas kontroller untuk admin
	 */

	public function isAdmin()
	{
		if (isset($_SESSION['user_type']) && $this->session->userdata('user_type') == 'admin') {
			return true;
		}else{
			echo 'FORBIDDEN ACCESS, ANDA BUKAN ADMIN!';
		}
	}


	public function index()
	{
		if ($this->isAdmin()) {
			
			$meta['page_title'] = "Selamat datang, ". $this->session->userdata('username');
			$data['session'] = $this->session->userdata();

			$this->load->view('template/header', $meta);
			$this->load->view('v_beranda', $data);
			$this->load->view('template/footer');
		}else{
			redirect('','refresh');
		}
		
	}

}
