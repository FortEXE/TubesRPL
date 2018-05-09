<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Model_jadwal extends CI_Model {
 
 	public function __construct()
	{
		parent::__construct();
		// do your magic here
	}

	public function cek_Jadwal($data) {
		$query = $this->db->get_where('jadwal_data_store', $data);
		return $query;
	}

	public function GetAllJadwal()
    {   

        $data = $this->db->get('jadwal_data_store');
        return $data->result_array();
    }

    public function GetByIdJadwal($xid){

    	$data = $this->db->select('*')->from('jadwal_data_store')->where('id',$xid)->get();
    	return $data->result_array();
    }
 }
 
 /* End of file Model_Jadwal.php */
 /* Location: ./application/models/M_user/Model_Jadwal.php */ 
 ?>

 