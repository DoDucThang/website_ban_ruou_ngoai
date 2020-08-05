<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fr_giohang_model extends MY_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function load_wine_model($wid)
	{
		$this->db->select('*');	
		$this->db->where('wid', $wid);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

}

/* End of file Fr_giohang_model.php */
/* Location: ./application/models/Fr_giohang_model.php */