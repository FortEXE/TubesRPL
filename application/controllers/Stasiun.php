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

	public function index(){

		if ($this->session->userdata('isLoggedIn')) {
			if ($this->session->userdata('user_type') == 'admin') {
				redirect('admin','refresh');
			}else{
				redirect('user','refresh');
			}
		}
	}

	public function proses_tambah()
	{
		$data['id_pemilik'] = $this->session->userdata('id');
		$data['nama_transaksi'] = $this->input->post('nama_transaksi');
		$data['harga'] = $this->input->post('harga');

		$this->model_transaksi->insertData($data);

		// $this->redirect_user();

		redirect('user/transaksi','refresh');
	}

	public function proses_hapus($id)
	{
		$data['id'] = $id;

		$this->model_transaksi->deleteData($data);
		$this->redirect_user();
	}

	public function proses_update()
	{
		$data['id'] = $this->input->post('id');
		$data['id_pemilik'] = $this->input->post('id_pemilik');
		$data['nama_transaksi'] = $this->input->post('nama_transaksi');
		$data['harga'] = $this->input->post('harga');

		$this->model_transaksi->updateData($data);

		$this->redirect_user();
		
	}
}

?>