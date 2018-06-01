<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Model_pemesanan extends CI_Model {
	
		public function __construct()
		{
			parent::__construct();
			// do your magic here
		}

		public function cek_pemesanan($data) {
			$query = $this->db->get_where('pemesanan_data_store', $data);
			return $query;
		}

		public function getAll()
	    {
	        $data = $this->db->get('pemesanan_data_store');
	        return $data->result_array();
	    }

	    public function getById($xid){

	    	$data = $this->db->select('*')->from('pemesanan_data_store')->where('ID_PEMESANAN',$xid)->get();
	    	return $data->result_array();
	    }

	    public function insertData($data){

	    	$q = $this->db->insert('pemesanan_data_store', $data);

	    	if ($q) {
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }

	    public function deleteData($data){

	    	$q = $this->db->where('id', $data['id']);
	    	$q = $this->db->delete('pemesanan_data_store');
	    }

	    public function updateData($data){

	    	$q = $this->db->where('id', $data['id']);
	    	$q = $this->db->update('pemesanan_data_store');
	    }
	}

	/* End of file Model_pemesanan.php */
	/* Location: ./application/models/Model_pemesanan.php */
 ?>