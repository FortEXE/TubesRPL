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

	public function pembayaran($xid_jadwal)
	{
		
		if($this->isUser() || $this->isAdmin()){
			$data['jadwal'] = $this->Model_jadwal->getByID($xid_jadwal);
			$data['pembeli'] = $this->Model_member->getByID($this->session->userdata('id_member'));
			$data['kereta'] = $this->Model_kereta->getAll();
			$data['stasiun'] = $this->Model_stasiun->getAll();
			$this->load->view('template/header');
			$this->load->view('v_bayar', $data);
			$this->load->view('template/footer');
		}
	}

	public function proses_pemesanan()
	{

		$data['id_member'] = $this->input->post('id_member');
		$data['id_jadwal'] =$this->input->post('id_jadwal');
		$data['jumlah_tiket'] =$this->input->post('jumlah_tiket');
		$data['total_pembayaran'] =(int)$this->input->post('harga_tiket') * (int)$this->input->post('jumlah_tiket');
		echo $this->input->post('id_member') . "<br>";
		echo $this->input->post('id_jadwal'). "<br>";
		echo $this->input->post('jumlah_tiket') . "<br>";
		echo $data['total_pembayaran'] ."<br>";
		echo date("Y-m-d H:i:s")."<br>";
	}

}

?>