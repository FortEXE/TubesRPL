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

	    	$data = $this->db->select('*')->from('kereta_data_store')->where('ID_KERETA',$xid)->get();
	    	
	    	if($data){
		    	return $data->result_array();
	    	}else{
	    		return false;
	    	}
	    }

	    public function insertData($data){

	    	if($q = $this->db->insert('kereta_data_store', $data)){
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }

	    public function deleteData($data){

	    	$q = $this->db->where('ID_KERETA', $data['ID_KERETA']);
	    	$q = $this->db->delete('kereta_data_store');

	    	if($q){
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }

	    public function updateData($data){

	    	$q = $this->db->where('ID_KERETA', $data['ID_KERETA']);
	    	$q = $this->db->update('kereta_data_store', $data);

	    	if($q){
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }

	}
	
	/* End of file Model_kereta.php */
	/* Location: ./application/models/Model_kereta.php */
 ?>