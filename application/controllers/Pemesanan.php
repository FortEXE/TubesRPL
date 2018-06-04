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

	public function proses_tambah()
	{
		$data['ID_MEMBER'] = $this->input->post('id_member');
		$data['ID_JADWAL'] = $this->input->post('id_jadwal');
		$data['TGL_PESAN'] = date("Y-m-d H:i:s");
		$data['JUMLAH_TIKET'] = $this->input->post('jumlah_tiket');
		$data['total_pembayaran'] = (int)$this->input->post('harga_bayar') * $this->input->post('jumlah_tiket');


		$q = $this->Model_pemesanan->insertData($data);

		if($q){
			redirect('pemesanan/pembayaran/'. $data["ID_JADWAL"],'refresh');
		}
	}

	public function pembelian($xid_jadwal)
	{
		
		if($this->isUser() || $this->isAdmin()){
			$data['jadwal'] = $this->Model_jadwal->getByID($xid_jadwal);
			$data['pembeli'] = $this->Model_member->getByID($this->session->userdata('id_member'));
			$data['kereta'] = $this->Model_kereta->getAll();
			$data['stasiun'] = $this->Model_stasiun->getAll();
			$this->load->view('template/header');
			$this->load->view('v_beli', $data);
			$this->load->view('template/footer');
		}
	}

	public function proses_pemesanan()
	{

		$data['ID_MEMBER'] = $this->input->post('id_member');
		$data['ID_JADWAL'] = $this->input->post('id_jadwal');
		$data['TGL_PESAN'] = date("Y-m-d H:i:s");
		$data['JUMLAH_TIKET'] = $this->input->post('jumlah_tiket');
		$data['TOTAL_PEMBAYARAN'] = (int)$this->input->post('harga_tiket') * (int)$this->input->post('jumlah_tiket');

		$q = $this->Model_pemesanan->insertData($data);
		if($q === true){
			echo 'pemesanan berhasil';
		}else{
			echo 'pemesanan gagal';
		}

		redirect('welcome','refresh');
	}

	public function pembayaran()
	{

		$data['jadwal'] = $this->Model_jadwal->getAll();
		$data['kereta'] = $this->Model_kereta->getAll();
		$data['stasiun'] = $this->Model_stasiun->getAll();
		$data['pembayaran'] = $this->Model_pemesanan->getByIdMember($this->session->userdata('id_member'));

		$this->load->view('template/header');
		$this->load->view('v_bayar', $data);
		$this->load->view('template/footer');
	}

	public function detailpembayaran($id_pembayaran)
	{

		$data['detailpembayaran'] = $this->Model_pemesanan->getById($id_pembayaran);

		$this->load->view('template/header');
		$this->load->view('v_transaksi', $data);
		$this->load->view('template/footer');
	}

}

?>