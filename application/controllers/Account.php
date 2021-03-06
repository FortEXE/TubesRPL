<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	// public function redirect_user()
	// {
	// 	if ($this->session->userdata('user_type') == 'admin') {
	// 		redirect('admin/useraccount');			
	// 	}else{
	// 		redirect('welcome/home','refresh');
	// 	}
	// }

	public function __construct(){
		parent::__construct();
    	// $this->load->model('AccountModel');
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

	public function proses_logout(){
		$this->session->sess_destroy();
		echo 'anda telah logout, sesi dihapus';
		redirect('','refresh');
	}

	public function proses_tambah()
	{
		$data['USERNAME'] = $this->input->post('username');
		$data['NAMA_MEMBER'] = $this->input->post('nama_member');
		$data['NOTELP_MEMBER'] = $this->input->post('notelp');
		$data['JK_MEMBER'] = $this->input->post('jk');
		$data['ALAMAT_MEMBER'] = $this->input->post('alamat');
		$data['PASSWD_MEMBER'] = ($this->input->post('password'));

		$this->Model_member->insertData($data);

		redirect('welcome','refresh');
	}

	public function proses_hapus($id)
	{
		$data['id'] = $id;

		$this->model_user->deleteData($data);
		redirect('admin/userAccount','refresh');
	}

	public function proses_update()
	{
		$data['id'] = $this->input->post('id');
		$data['nama'] = $this->input->post('nama');
		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('email');
		if (!empty($this->input->post('user_type'))) {
			$data['user_type'] =  $this->input->post('user_type');
		}

		if (!empty($this->input->post('password'))) {
			$data['password'] =  md5($this->input->post('password'));
		}

		$this->model_user->updateData($data);

		redirect('admin/userAccount','refresh');
	}
}

?>