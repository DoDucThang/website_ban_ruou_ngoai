<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_saleorder extends MY_Model

{
    var $table = 'saleorder';
    var $key = 'soid';
		
	public function load_infoso_model($user_id)
	{
		$this->db->select('*');
		$this->db->where('userid', $user_id);
		$ketqua=$this->db->get('saleorder');
		$ketqua=$ketqua->result_array();
		return $ketqua;
	}

	public function del_so_model($soid)
	{
		$dl=['status'=>3];
		$this->db->where('soid', $soid);
		return $this->db->update('saleorder', $dl);
	}

}

