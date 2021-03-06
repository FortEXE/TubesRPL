<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Model_transaksi extends CI_Model {
	
		public function __construct()
		{
			parent::__construct();
			// do your magic here
		}

		public function cek_transaksi($data) {
			$query = $this->db->get_where('transaksi_data_store', $data);
			return $query;
		}

		public function GetAll()
	    {
	        $data = $this->db->get('transaksi_data_store');
	        return $data->result_array();
	    }

	    public function GetById($xid){

	    	$data = $this->db->select('*')->from('transaksi_data_store')->where('ID_TRANSAKSI',$xid)->get();
	    	return $data->result_array();
	    }

	    public function insertData($data){

	    	$q = $this->db->insert('transaksi_data_store', $data);
	    }

	    public function deleteData($data){

	    	$q = $this->db->where('id', $data['id']);
	    	$q = $this->db->delete('transaksi_data_store');
	    }

	    public function updateData($data){

	    	$q = $this->db->where('id', $data['id']);
	    	$q = $this->db->update('transaksi_data_store');
	    }

	}
	
	/* End of file Model_transaksi.php */
	/* Location: ./application/models/Model_transaksi.php */
 ?>