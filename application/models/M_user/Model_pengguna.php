<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Model_member extends CI_Model {
 
 	public function __construct()
	{
		parent::__construct();
		// do your magic here
	}

	public function cek_Member($data) {
		$query = $this->db->get_where('member', $data);
		return $query;
	}

    public function GetByIdMember($xid){

    	$data = $this->db->select('*')->from('member')->where('id',$xid)->get();
    	return $data->result_array();
    }
 }
 
 /* End of file Model_Member.php */
 /* Location: ./application/models/M_user/Model_Member.php */ 
 ?>

 