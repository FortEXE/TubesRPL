<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stasiun extends CI_Controller {

	public function redirect_user()
	{
		if ($this->session->userdata('user_type') == 'admin') {
			redirect('admin/stasiun');			
		}else{
			redirect('user/jualstasiun','refresh');
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

				$data['stasiun'] = $this->Model_stasiun->getAll();

				$this->load->view('template/header');
				$this->load->view('v_admin/v_stasiun', $data);
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
			$this->load->view('v_admin/stasiun/v_tambah');
			$this->load->view('template/footer');
		}
	}

	public function proses_tambah()
	{
		if($this->isAdmin()){

			$data['ID_STASIUN'] = $this->input->post('id_stasiun');
			$data['NAMA_STASIUN'] = $this->input->post('nama_stasiun');
			$data['ALAMAT_STASIUN'] = $this->input->post('alamat_stasiun');
			$data['NO_TELP_STASIUN'] = $this->input->post('no_telp_stasiun');

			$q = $this->Model_stasiun->insertData($data);

			if($q) {
				redirect('stasiun','refresh');
			}else{
				echo 'error while insert data';
			}
		
		}
	}

	public function edit($id)
	{
		if($this->isAdmin()){

			$data['stasiun'] = $this->Model_stasiun->getById($id);

			$this->load->view('template/header');
			$this->load->view('v_admin/stasiun/v_edit', $data);
			$this->load->view('template/footer');
		}
	}

	public function proses_edit()
	{
		if($this->isAdmin()){

			$data['ID_stasiun'] = $this->input->post('id_stasiun');
			$data['NAMA_stasiun'] = $this->input->post('nama_stasiun');
			$data['KETERANGAN_stasiun'] = $this->input->post('keterangan_stasiun');
			$data['NO_GERBONG'] = $this->input->post('no_gerbong');
			$data['NO_KURSI'] = $this->input->post('no_kursi');

			$q = $this->Model_stasiun->updateData($data);

			if($q) {
				redirect('stasiun','refresh');
			}else{
				echo 'error while edit data';
			}
		
		}
	}

	public function hapus($id)
	{
		if($this->isAdmin()){

			$data['stasiun'] = $this->Model_stasiun->getById($id);

			$this->load->view('template/header');
			$this->load->view('v_admin/stasiun/v_hapus', $data);
			$this->load->view('template/footer');
		}
	}

	public function proses_hapus()
	{
		if($this->isAdmin()){

			$data['ID_stasiun'] = $this->input->post('id_stasiun');

			$q = $this->Model_stasiun->deleteData($data);

			if($q) {
				redirect('stasiun','refresh');
			}else{
				echo 'error while delete data';
			}
		
		}
	}
}

?>