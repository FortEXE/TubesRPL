<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	// public function redirect_user()
	// {
	// 	if ($this->session->userdata('user_type') == 'admin') {
	// 		redirect('admin/jadwal');			
	// 	}else{
	// 		redirect('user/jadwal','refresh');
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
			if ($this->isAdmin()) {

				$data['kereta'] = $this->Model_kereta->getAll();
				$data['stasiun'] = $this->Model_stasiun->getAll();
				$data['jadwal'] = $this->Model_jadwal->getAll();

				$this->load->view('template/header');
				$this->load->view('v_admin/v_jadwal', $data);
				$this->load->view('template/footer');

			}else{
				redirect('user','refresh');
			}
		}
	}

	public function tambah()
	{
		if($this->isAdmin()){
			$this->load->view('template/header');
			$this->load->view('v_admin/jadwal/v_tambah');
			$this->load->view('template/footer');
		}
	}

	public function proses_tambah()
	{
		if($this->isAdmin()){

			$data['ID_KERETA'] = $this->input->post('id_kereta');
			$data['ID_STASIUN_AWAL'] = $this->input->post('id_stasiun_awal');
			$data['ID_STASIUN_TUJUAN'] = $this->input->post('id_stasiun_tujuan');
			$data['JAM_BERANGKAT'] = $this->input->post('jam_berangkat');
			$data['JAM_DATANG'] = $this->input->post('jam_datang');
			$data['KETERANGAN_JADWAL'] = $this->input->post('keterangan_jadwal');

			$q = $this->Model_jadwal->insertData($data);

			if($q) {
				redirect('jadwal','refresh');
			}else{
				echo 'error while insert data';
			}
		
		}
	}

	public function edit($id)
	{
		if($this->isAdmin()){

			$data['jadwal'] = $this->Model_jadwal->getById($id);

			$this->load->view('template/header');
			$this->load->view('v_admin/jadwal/v_edit', $data);
			$this->load->view('template/footer');
		}
	}

	public function proses_edit()
	{
		if($this->isAdmin()){

			$data['ID_JADWAL'] = $this->input->post('id_jadwal');
			$data['ID_KERETA'] = $this->input->post('id_kereta');
			$data['ID_STASIUN_AWAL'] = $this->input->post('id_stasiun_awal');
			$data['ID_STASIUN_TUJUAN'] = $this->input->post('id_stasiun_tujuan');
			$data['JAM_BERANGKAT'] = $this->input->post('jam_berangkat');
			$data['JAM_DATANG'] = $this->input->post('jam_datang');
			$data['KETERANGAN_JADWAL'] = $this->input->post('keterangan_jadwal');

			$q = $this->Model_jadwal->updateData($data);

			if($q) {
				// redirect('jadwal','refresh');
			}else{
				echo 'error while edit data';
			}
		
		}
	}

	public function hapus($id)
	{
		if($this->isAdmin()){

			$data['jadwal'] = $this->Model_jadwal->getById($id);

			$this->load->view('template/header');
			$this->load->view('v_admin/jadwal/v_hapus', $data);
			$this->load->view('template/footer');
		}
	}

	public function proses_hapus()
	{
		if($this->isAdmin()){

			$data['ID_JADWAL'] = $this->input->post('id_jadwal');

			$q = $this->Model_jadwal->deleteData($data);

			if($q) {
				redirect('jadwal','refresh');
			}else{
				echo 'error while delete data';
			}
		
		}
	}
}

?>