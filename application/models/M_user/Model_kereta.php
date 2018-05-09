<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Model_Kereta extends CI_Model {
 
 	public function __construct()
	{
		parent::__construct();
		// do your magic here
	}

	public function cek_Kereta($data) {
		$query = $this->db->get_where('kereta_data_store', $data);
		return $query;
	}

	public function GetAllKereta()
    {   

        $data = $this->db->get('kereta_data_store');
        return $data->result_array();
    }

    public function GetByIdKereta($xid){

    	$data = $this->db->select('*')->from('kereta_data_store')->where('id',$xid)->get();
    	return $data->result_array();
    }
 }
 
 /* End of file Model_kereta.php */
 /* Location: ./application/models/M_user/Model_kereta.php */ 
 ?>

 