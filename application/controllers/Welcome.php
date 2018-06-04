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

		$meta['page_title'] = "Selamat Datang di Situs Booking Tiket PegiLagi";
		$data['session'] = $this->session->userdata();
		$this->load->view('template/header', $meta);
		$this->load->view('v_beranda', $data);
		$this->load->view('template/footer');
	}

	public function home()
	{
		$this->index();	
	}

	public function cariTiket()
	{
		$meta['page_title'] = "Cari Tiket";

		$data['kereta'] = $this->Model_kereta->getAll();
		$data['stasiun'] = $this->Model_stasiun->getAll();
		$data['jadwal'] = $this->Model_jadwal->getAll();

		$this->load->view('template/header', $meta);
		$this->load->view('v_tiket', $data);
		$this->load->view('template/footer');
	}

	public function bayarTiket()
	{
		$meta['page_title'] = "Bayar Tiket";

		$this->load->view('template/header', $meta);
		$this->load->view('v_bayar');
		$this->load->view('template/footer');

	}

	public function beliTiket()
	{
		$meta['page_title'] = "Beli Tiket";

		$this->load->view('template/header', $meta);
		$this->load->view('v_beli');
		$this->load->view('template/footer');
	}
	

	public function login()
	{
		$meta['page_title'] = "Login";

		$this->load->view('template/header',$meta);
		$this->load->view('v_login');
		$this->load->view('template/footer');
	}

	public function register()
	{
		$meta['page_title'] = "register";
		$this->load->view('template/header', $meta);
		$this->load->view('v_register');
		$this->load->view('template/footer');

	}


	public function pemesanan()
	{
		$meta['page_title'] = "Pemesanan Tiket";

		$this->load->view('template/header', $meta);
		$this->load->view('v_pemesanan');
		$this->load->view('template/footer');
	}

}
