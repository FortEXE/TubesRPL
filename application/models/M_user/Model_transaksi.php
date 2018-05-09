<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Model_Transaksi extends CI_Model {
 
 	public function __construct()
	{
		parent::__construct();
		// do your magic here
	}

	public function cek_Transaksi($data) {
		$query = $this->db->get_where('transaksi_data_store', $data);
		return $query;
	}

	public function GetAllTransaksi()
    {   

        $data = $this->db->get('transaksi_data_store');
        return $data->result_array();
    }

    public function GetByIdTransaksi($xid){

    	$data = $this->db->select('*')->from('transaksi_data_store')->where('id',$xid)->get();
    	return $data->result_array();
    }
 }
 
 /* End of file Model_Transaksi.php */
 /* Location: ./application/models/M_user/Model_Transaksi.php */ 
 ?>

 