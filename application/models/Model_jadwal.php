<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Model_jadwal extends CI_Model {
	
		public function __construct()
		{
			parent::__construct();
			// $this->load->model('jadwal_data_store');
			// do your magic here
		}

		public function get_jadwal(){
			$result = NULL;
    		$query=$this->db->query('SELECT a.id_jadwal ID, d.nama_kereta namaKereta, b.nama_stasiun Sawal, c.nama_stasiun Stujuan, a.jam_berangkat, a.jam_datang, a.keterangan_jadwal FROM jadwal_data_store a JOIN stasiun_data_store b ON a.id_stasiun_awal=b.id_stasiun JOIN stasiun_data_store c ON a.id_stasiun_tujuan=c.id_stasiun JOIN kereta_data_store d ON a.id_kereta=d.id_kereta');
     		
     		if($query->num_rows()>0){
        		$result = $query->result_array();
      		}
    		
    		return $result;
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