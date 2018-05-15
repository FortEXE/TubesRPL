<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Model_stasiun extends CI_Model {
	
		public function __construct()
		{
			parent::__construct();
			// do your magic here
		}

		public function cek_stasiun($data) {
			$query = $this->db->get_where('stasiun_data_store', $data);
			return $query;
		}

		public function GetAll()
	    {
	        $data = $this->db->get('stasiun_data_store');
	        return $data->result_array();
	    }

	    public function GetById($xid){

	    	$data = $this->db->select('*')->from('stasiun_data_store')->where('ID_STASIUN',$xid)->get();
	    	return $data->result_array();
	    }

	    public function insertData($data){

	    	$q = $this->db->insert('stasiun_data_store', $data);

	    	if($q){
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }

	    public function deleteData($data){

	    	$q = $this->db->where('ID_STASIUN', $data['ID_STASIUN']);
	    	$q = $this->db->delete('stasiun_data_store');

	    	if($q){
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }

	    public function updateData($data){

	    	$q = $this->db->where('ID_STASIUN', $data['ID_STASIUN']);
	    	$q = $this->db->update('stasiun_data_store', $data);
	    
	    	if($q){
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }

	}
	
	/* End of file Model_stasiun.php */
	/* Location: ./application/models/Model_stasiun.php */
 ?>