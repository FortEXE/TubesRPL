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

			$this->load->view('template/header_admin', $meta);
			$this->load->view('v_admin/v_home');
			$this->load->view('template/footer');
		}
		
	}

	public function home()
	{

		if ($this->isAdmin()) {
			
			$meta['page_title'] = "Halaman Utama";
			$data['data'] = $this->model_user->getAll();

			$this->load->view('template/header_admin', $meta);
			$this->load->view('v_admin/v_home', $data);
			$this->load->view('template/footer');
		}

	}

	public function userAccount()
	{

		if ($this->isAdmin()) {
			
			$meta['page_title'] = "User Account";
			$data['data'] = $this->model_user->getAll();

			$this->load->view('template/header_admin', $meta);
			$this->load->view('v_admin/v_userAccount', $data);
			$this->load->view('template/footer');
		}

	}

	public function properti()
	{
		if ($this->isAdmin()) {
			$meta['page_title'] = "Properti";
			$data['data'] = $this->model_properti->getAll();

			$this->load->view('template/header_admin', $meta);
			$this->load->view('v_admin/v_Properti', $data);
			$this->load->view('template/footer');
		}
	}

	public function logTransaksi()
	{
		if ($this->isAdmin()) {
			$meta['page_title'] = "Log Transaksi";
			$data['data'] = $this->model_log->getAll();

			$this->load->view('template/header_admin', $meta);
			$this->load->view('v_admin/v_logTransaksi', $data);
			$this->load->view('template/footer');
		}
	}

	public function tentang()
	{
		if ($this->isAdmin()) {
			$meta['page_title'] = "Tentang";

			$this->load->view('template/header_admin', $meta);
			$this->load->view('v_tentang');
			$this->load->view('template/footer');	
		}
	}


	// pengaturan model untuk user account
	public function tambah()
	{
		if ($this->isAdmin()) {
			$meta['page_title'] = "Tambah Akun";

			$this->load->view('template/header_admin', $meta);
			$this->load->view('v_admin/v_crud/v_userAccount/v_tambah');
			$this->load->view('template/footer');
		}

	}

	public function hapus($id)
	{
		if ($this->isAdmin()) {
			$meta['page_title'] = "Hapus Akun";
			$data['data'] = $this->model_user->GetByID($id);

			$this->load->view('template/header_admin', $meta);
			$this->load->view('v_admin/v_crud/v_userAccount/v_hapus', $data);
			$this->load->view('template/footer');
		}
	}

	public function edit($id)
	{
		if ($this->isAdmin()) {
			$meta['page_title'] = "edit Akun";
			$data['data'] = $this->model_user->GetByID($id);

			$this->load->view('template/header_admin', $meta);
			$this->load->view('v_admin/v_crud/v_userAccount/v_edit', $data);
			$this->load->view('template/footer');
		}
	}


	// pengaturan model untuk properti
	public function tambah2()
	{
		if ($this->isAdmin()) {
			$meta['page_title'] = "Tambah properti";

			$this->load->view('template/header_admin', $meta);
			$this->load->view('v_admin/v_crud/v_properti/v_tambah');
			$this->load->view('template/footer');
		}

	}

	public function hapus2($id)
	{
		if ($this->isAdmin()) {
			$meta['page_title'] = "Hapus Akun";
			$data['data'] = $this->model_properti->GetByID($id);

			$this->load->view('template/header_admin', $meta);
			$this->load->view('v_admin/v_crud/v_properti/v_hapus', $data);
			$this->load->view('template/footer');
		}
	}

	public function edit2($id)
	{
		if ($this->isAdmin()) {
			$meta['page_title'] = "edit Akun";
			$data['data'] = $this->model_properti->GetByID($id);
			$data['data2'] = $this->model_user->GetAll($id);

			$this->load->view('template/header_admin', $meta);
			$this->load->view('v_admin/v_crud/v_properti/v_edit', $data);
			$this->load->view('template/footer');
		}
	}

	public function hapusLog($id)
	{
		if ($this->isAdmin()) {
			$meta['page_title'] = "Hapus log";
			$data['data'] = $this->model_log->GetByID($id);

			$this->load->view('template/header_admin', $meta);
			$this->load->view('v_admin/v_crud/v_logTransaksi/v_hapus', $data);
			$this->load->view('template/footer');
		}
	}

}
