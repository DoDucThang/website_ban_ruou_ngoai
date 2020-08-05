<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fr_trangchu_model extends MY_Model {

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

	public function load_cid_bywid_model($wid1)
	{
		$this->db->select('cid');	
		$this->db->where('wid', $wid1);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;

	}

	public function load_wine_bycid_model($cid)
	{
		$this->db->select('*');	
		$this->db->where('cid', $cid);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}



	public function load_slideshow_model()
	{
		$this->db->select('*');
		$dl=$this->db->get('slideshow',8,6);
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_wine_banchay_model()
	{
		$tmp=500000;
		$tmp1=2500000;
		$this->db->select('*');
/*		$this->db->where('price >', $tmp);
		$this->db->where('price <', $tmp1);*/
		$this->db->or_where('trend', 1); 
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_wine_hotdeal_model()
	{
		$tmp=4000000;
		$this->db->select('*');
		$this->db->where('price >', $tmp);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_wine_cognac_model()
	{
		$tmp=0;
		$tmp1=4;
		$this->db->select('*');
		$this->db->where('cid >', $tmp);
		$this->db->where('cid <', $tmp1);
		$this->db->or_where('cid', 14); 
		$dl=$this->db->get('wine',3,0);
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_wine_whisky_model()
	{
		$this->db->select('*');
		$this->db->where('cid >', 14);
		$this->db->where('cid <', 18);
		$dl=$this->db->get('wine',3,0);
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_wine_single_model()
	{
		$this->db->select('*');
		$this->db->where('cid >', 17);
		$this->db->where('cid <', 21);
		$dl=$this->db->get('wine',3,0);
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_wine_brandy_model()
	{
		$this->db->select('*');
		$this->db->where('cid', 21);
		$dl=$this->db->get('wine',3,0);
		$dl=$dl->result_array();
		return $dl;
	}

		public function load_wine_vodka_model()
	{
		$this->db->select('*');
		$this->db->where('cid', 22);
		$dl=$this->db->get('wine',3,0);
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_wine_quatang_model()
	{
		$this->db->select('*');
		$this->db->where('cid', 23);
		$dl=$this->db->get('wine',3,0);
		$dl=$dl->result_array();
		return $dl;
	}

}

/* End of file Fr_trangchu_model.php */
/* Location: ./application/models/Fr_trangchu_model.php */