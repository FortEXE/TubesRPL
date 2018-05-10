<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Model_kereta extends CI_Model {
	
		public function __construct()
		{
			parent::__construct();
			// do your magic here
		}

		public function cek_kereta($data) {
			$query = $this->db->get_where('kereta_data_store', $data);
			return $query;
		}

		public function GetAll()
	    {
	        $data = $this->db->get('kereta_data_store');
	        return $data->result_array();
	    }

	    public function GetById($xid){

	    	$data = $this->db->select('*')->from('kereta_data_store')->where('id',$xid)->get();
	    	return $data->result_array();
	    }

	    public function insertData($data){

	    	$q = $this->db->insert('kereta_data_store', $data);
	    }

	    public function deleteData($data){

	    	$q = $this->db->where('id', $data['id']);
	    	$q = $this->db->delete('kereta_data_store');
	    }

	    public function updateData($data){

	    	$q = $this->db->where('id', $data['id']);
	    	$q = $this->db->update('kereta_data_store');
	    }

	}
	
	/* End of file Model_kereta.php */
	/* Location: ./application/models/Model_kereta.php */
 ?>