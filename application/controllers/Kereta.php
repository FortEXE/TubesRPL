<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kereta extends CI_Controller {

	public function redirect_user()
	{
		if ($this->session->userdata('user_type') == 'admin') {
			redirect('admin/kereta');			
		}else{
			redirect('user/jualkereta','refresh');
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

				$this->load->view('template/header');
				$this->load->view('v_admin/v_kereta', $data);
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
			$this->load->view('v_admin/kereta/v_tambah');
			$this->load->view('template/footer');
		}
	}

	public function proses_tambah()
	{
		if($this->isAdmin()){

			$data['ID_KERETA'] = $this->input->post('id_kereta');
			$data['NAMA_KERETA'] = $this->input->post('nama_kereta');
			$data['KETERANGAN_KERETA'] = $this->input->post('keterangan_kereta');
			$data['NO_GERBONG'] = $this->input->post('no_gerbong');
			$data['NO_KURSI'] = $this->input->post('no_kursi');

			$q = $this->Model_kereta->insertData($data);

			if($q) {
				redirect('kereta','refresh');
			}else{
				echo 'error while insert data';
			}
		
		}
	}

	public function edit($id)
	{
		if($this->isAdmin()){

			$data['kereta'] = $this->Model_kereta->getById($id);

			$this->load->view('template/header');
			$this->load->view('v_admin/kereta/v_edit', $data);
			$this->load->view('template/footer');
		}
	}

	public function proses_edit()
	{
		if($this->isAdmin()){

			$data['ID_KERETA'] = $this->input->post('id_kereta');
			$data['NAMA_KERETA'] = $this->input->post('nama_kereta');
			$data['KETERANGAN_KERETA'] = $this->input->post('keterangan_kereta');
			$data['NO_GERBONG'] = $this->input->post('no_gerbong');
			$data['NO_KURSI'] = $this->input->post('no_kursi');

			$q = $this->Model_kereta->updateData($data);

			if($q) {
				redirect('kereta','refresh');
			}else{
				echo 'error while edit data';
			}
		
		}
	}

	public function hapus($id)
	{
		if($this->isAdmin()){

			$data['kereta'] = $this->Model_kereta->getById($id);

			$this->load->view('template/header');
			$this->load->view('v_admin/kereta/v_hapus', $data);
			$this->load->view('template/footer');
		}
	}

	public function proses_hapus()
	{
		if($this->isAdmin()){

			$data['ID_KERETA'] = $this->input->post('id_kereta');

			$q = $this->Model_kereta->deleteData($data);

			if($q) {
				redirect('kereta','refresh');
			}else{
				echo 'error while delete data';
			}
		
		}
	}
}

?>