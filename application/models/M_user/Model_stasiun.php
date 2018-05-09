<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Model_Stasiun extends CI_Model {
 
 	public function __construct()
	{
		parent::__construct();
		// do your magic here
	}

	public function cek_Stasiun($data) {
		$query = $this->db->get_where('stasiun_data_store', $data);
		return $query;
	}

	public function GetAllStasiun()
    {   

        $data = $this->db->get('stasiun_data_store');
        return $data->result_array();
    }

    public function GetByIdStasiun($xid){

    	$data = $this->db->select('*')->from('stasiun_data_store')->where('id',$xid)->get();
    	return $data->result_array();
    }
 }
 
 /* End of file Model_Stasiun.php */
 /* Location: ./application/models/M_user/Model_Stasiun.php */ 
 ?>

 