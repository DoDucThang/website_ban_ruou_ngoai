<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fr_locsanpham_model extends MY_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function load_wine_model($cid)
	{
		$this->db->distinct();
		$this->db->select('cid');	
		$this->db->where('cid', $cid);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_cognac_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 1);
		$this->db->or_where('cid', 2);
		$this->db->or_where('cid', 3);
		$this->db->or_where('cid', 14);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_cognac_asc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 1);
		$this->db->or_where('cid', 2);
		$this->db->or_where('cid', 3);
		$this->db->or_where('cid', 14);
		$this->db->order_by("price", "asc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_cognac_desc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 1);
		$this->db->or_where('cid', 2);
		$this->db->or_where('cid', 3);
		$this->db->or_where('cid', 14);
		$this->db->order_by("price", "desc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}


	public function load_whisky_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 15);
		$this->db->or_where('cid', 16);
		$this->db->or_where('cid', 17);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_whisky_asc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 15);
		$this->db->or_where('cid', 16);
		$this->db->or_where('cid', 17);
		$this->db->order_by("price", "asc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_whisky_desc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 15);
		$this->db->or_where('cid', 16);
		$this->db->or_where('cid', 17);
		$this->db->order_by("price", "desc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}



	public function load_singlemalt_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 18);
		$this->db->or_where('cid', 19);
		$this->db->or_where('cid', 20);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_singlemalt_asc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 18);
		$this->db->or_where('cid', 19);
		$this->db->or_where('cid', 20);
		$this->db->order_by("price", "asc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_singlemalt_desc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 18);
		$this->db->or_where('cid', 19);
		$this->db->or_where('cid', 20);
		$this->db->order_by("price", "desc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}


	public function load_chabot_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 1);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_chabot_asc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 1);
		$this->db->order_by("price", "asc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}


	public function load_chabot_desc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 1);
		$this->db->order_by("price", "desc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}



	public function load_bisquit_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 2);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_bisquit_asc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 2);
		$this->db->order_by("price", "asc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_bisquit_desc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 2);
		$this->db->order_by("price", "desc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}


	public function load_hennessy_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 3);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_hennessy_asc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 3);
		$this->db->order_by("price", "asc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_hennessy_desc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 3);
		$this->db->order_by("price", "desc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}


	public function load_remy_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 14);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_remy_asc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 14);
		$this->db->order_by("price", "asc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_remy_desc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 14);
		$this->db->order_by("price", "desc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}


	public function load_chivas_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 15);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_chivas_asc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 15);
		$this->db->order_by("price", "asc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_chivas_desc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 15);
		$this->db->order_by("price", "desc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}


	public function load_ballantine_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 16);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_ballantine_asc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 16);
		$this->db->order_by("price", "asc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_ballantine_desc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 16);
		$this->db->order_by("price", "desc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}


	public function load_jw_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 17);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_jw_asc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 17);
		$this->db->order_by("price", "asc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}


	public function load_jw_desc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 17);
		$this->db->order_by("price", "desc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_macallan_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 18);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_macallan_asc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 18);
		$this->db->order_by("price", "asc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_macallan_desc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 18);
		$this->db->order_by("price", "desc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}


	public function load_glenlivet_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 19);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_glenlivet_asc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 19);
		$this->db->order_by("price", "asc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_glenlivet_desc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 19);
		$this->db->order_by("price", "desc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}


	public function load_singleton_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 20);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_singleton_asc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 20);
		$this->db->order_by("price", "asc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_singleton_desc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 20);
		$this->db->order_by("price", "desc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}


	public function load_brandy_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 21);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_brandy_asc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 21);
		$this->db->order_by("price", "asc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}


	public function load_brandy_desc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 21);
		$this->db->order_by("price", "desc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}



	public function load_vodka_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 22);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_vodka_asc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 22);
		$this->db->order_by("price", "asc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_vodka_desc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 22);
		$this->db->order_by("price", "desc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}


	public function load_quatang_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 23);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_quatang_asc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 23);
		$this->db->order_by("price", "asc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_quatang_desc_model()
	{
		$this->db->select('*');	
		$this->db->where('cid', 23);
		$this->db->order_by("price", "desc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_banchay_model()
	{
		$tmp=500000;
		$tmp1=2500000;
		$this->db->select('*');
/*		$this->db->where('price >', $tmp);
		$this->db->where('price <', $tmp1);*/
		$this->db->where('trend', 1);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_banchay_asc_model()
	{
		$tmp=500000;
		$tmp1=2500000;
		$this->db->select('*');
/*		$this->db->where('price >', $tmp);
		$this->db->where('price <', $tmp1);*/
		$this->db->where('trend', 1);
		$this->db->order_by("price", "asc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_banchay_desc_model()
	{
		$tmp=500000;
		$tmp1=2500000;
		$this->db->select('*');
/*		$this->db->where('price >', $tmp);
		$this->db->where('price <', $tmp1);*/
		$this->db->where('trend', 1);
		$this->db->order_by("price", "desc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}


	public function load_hotdeal_model()
	{
		$tmp=4000000;
		$this->db->select('*');
		$this->db->where('price >', $tmp);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_hotdeal_asc_model()
	{
		$tmp=4000000;
		$this->db->select('*');
		$this->db->where('price >', $tmp);
		$this->db->order_by("price", "asc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_hotdeal_desc_model()
	{
		$tmp=4000000;
		$this->db->select('*');
		$this->db->where('price >', $tmp);
		$this->db->order_by("price", "desc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_sapve_model()
	{
		$this->db->select('*');
		$this->db->where('avail', 0);
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_sapve_asc_model()
	{
		$this->db->select('*');
		$this->db->where('avail', 0);
		$this->db->order_by("price", "asc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

	public function load_sapve_desc_model()
	{
		$this->db->select('*');
		$this->db->where('avail', 0);
		$this->db->order_by("price", "desc");
		$dl=$this->db->get('wine');
		$dl=$dl->result_array();
		return $dl;
	}

}

/* End of file Fr_locsanpham_model.php */
/* Location: ./application/models/Fr_locsanpham_model.php */