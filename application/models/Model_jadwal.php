<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Model_jadwal extends CI_Model {
	
		public function __construct()
		{
			parent::__construct();
			// $this->load->model('jadwal_data_store');
			// do your magic here
		}

		public function cek_jadwal($data) {
			$query = $this->db->get_where('jadwal_data_store', $data);
			return $query;
		}

		public function GetAll()
	    {
	        $data = $this->db->get('jadwal_data_store');
	        return $data->result_array();
	    }

	    public function GetById($xid){

	    	$data = $this->db->select('*')->from('jadwal_data_store')->where('ID_JADWAL',$xid)->get();
	    	return $data->result_array();
	    }

	    public function insertData($data){

	    	$q = $this->db->insert('jadwal_data_store', $data);
	    	
	    	if($q){
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }

	    public function deleteData($data){

	    	$q = $this->db->where('ID_JADWAL', $data['ID_JADWAL']);
	    	$q = $this->db->delete('jadwal_data_store');

	    	if($q){
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }

	    public function updateData($data){

	    	$q = $this->db->where('ID_JADWAL', $data['ID_JADWAL']);
	    	$q = $this->db->update('jadwal_data_store', $data);
	    
	    	if($q){
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }

	}
	
	/* End of file Model_jadwal.php */
	/* Location: ./application/models/Model_jadwal.php */
 ?>