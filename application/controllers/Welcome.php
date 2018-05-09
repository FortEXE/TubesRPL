<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$meta['page_title'] = "Selamat Datang di Propertiku";

		$this->load->view('template/header', $meta);
		$this->load->view('v_guest/v_login');
		$this->load->view('template/footer');
	}

	public function login()
	{
		if (!($this->session->userdata('isLoggedIn') == true)) {
			$this->index();
		}else{
			redirect(site_url('account/index'),'refresh');
		}
	}

	public function home()
	{
		$this->index();	
	}

	public function daftar()
	{
		$meta['page_title'] = "Pendaftaran Akun";

		$this->load->view('template/header', $meta);
		$this->load->view('v_guest/v_daftar');
		$this->load->view('template/footer');
	}

	public function tentang()
	{
		$meta['page_title'] = "Tentang";

		$this->load->view('template/header', $meta);
		$this->load->view('v_tentang');
		$this->load->view('template/footer');	
	}

	public function pemesanan()
	{
		$meta['page_title'] = "Tentang";

		$this->load->view('template/header', $meta);
		$this->load->view('v_pemesanan');
		$this->load->view('template/footer');
	}

}
