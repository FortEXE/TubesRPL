<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Model_member extends CI_Model {
	
		public function __construct()
		{
			parent::__construct();
			// do your magic here
		}

		public function cek_Member($data) {
			$query = $this->db->get_where('member_data_store', $data);
			return $query;
		}

		public function GetAll()
	    {
	        $data = $this->db->get('member_data_store');
	        return $data->result_array();
	    }

	    public function GetById($xid){

	    	$data = $this->db->select('*')->from('member_data_store')->where('id',$xid)->get();
	    	return $data->result_array();
	    }

	    public function insertData($data){

	    	$this->db->insert('member_data_store', $data);
	    }

	    public function deleteData($data){

	    	$q = $this->db->where('id', $data['id']);
	    	$q = $this->db->delete('member_data_store');
	    }

	    public function updateData($data){

	    	$q = $this->db->where('id', $data['id']);
	    	$q = $this->db->update('member_data_store');
	    }

	}
	
	/* End of file Model_MemberTransaksi.php */
	/* Location: ./application/models/Model_MemberTransaksi.php */
 ?>