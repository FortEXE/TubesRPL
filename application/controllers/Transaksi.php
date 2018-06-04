<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	// public function redirect_user()
	// {
	// 	if ($this->session->userdata('user_type') == 'admin') {
	// 		redirect('admin/transaksi');			
	// 	}else{
	// 		redirect('user/jualtransaksi','refresh');
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

		if ($this->session->userdata('isLoggedIn')) {

			$data['transaksi'] = $this->Model_transaksi->getAll();
			if ($this->isAdmin()) {
				$this->load->view('template/header');
				$this->load->view('v_admin/v_transaksi', $data);
				$this->load->view('template/footer');
			}else{
				redirect('user','refresh');
			}
		}
	}

	public function proses_tambah()
	{
		$data['ID_PEMESANAN'] = $this->input->post('id_pemesanan');
		$data['NAMA_PENUMPANG'] = $this->input->post('nama_penumpang');
		$data['KATEGORI_PENUMPANG'] = $this->input->post('kategori_penumpang');
		$data['JENIS_PEMBAYARAN'] = $this->input->post('jenis_pembayaran');
		$data['TOTAL_PEMBAYARAN_TRANSAKSI'] = $this->input->post('total_pembayaran');

		$upd['ID_PEMESANAN'] = $data['ID_PEMESANAN'];
		$upd['STATUS_PEMBAYARAN'] = "1";

		$this->Model_transaksi->insertData($data);
		$this->Model_pemesanan->updateData($upd);
		echo 'enjoy your ride!';
		redirect('welcome','refresh');
	}
}

?>