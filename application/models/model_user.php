<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_user extends MY_Model

{
    var $table = 'user';
    var $key = 'userid';

    public function load_status0_model()
	{
		$this->db->select('count(*) as n');
		$this->db->where('status', 0);
		$ketqua=$this->db->get('saleorder');
		$ketqua=$ketqua->result_array();
		return $ketqua;
	}

	public function load_status1_model()
	{
		$this->db->select('count(*) as n');
		$this->db->where('status', 1);
		$ketqua=$this->db->get('saleorder');
		$ketqua=$ketqua->result_array();
		return $ketqua;
	}

	public function load_status2_model()
	{
		$this->db->select('count(*) as n');
		$this->db->where('status', 2);
		$ketqua=$this->db->get('saleorder');
		$ketqua=$ketqua->result_array();
		return $ketqua;
	}

	public function load_status3_model()
	{
		$this->db->select('count(*) as n');
		$this->db->where('status', 3);
		$ketqua=$this->db->get('saleorder');
		$ketqua=$ketqua->result_array();
		return $ketqua;
	}

	public function load_so2_model()
	{
		$this->db->select('*');
		$this->db->where('status', 2);
		$ketqua=$this->db->get('saleorder');
		$ketqua=$ketqua->result_array();
		return $ketqua;
	}

	public function thongke_slruouban_model()
	{
		$this->db->select ( 'cname,wine.cid, sum(qty) as sl' ); 
		$this->db->from ( 'detailcart' );
		$this->db->join ( 'wine', 'wine.wid = detailcart.wid' , 'left' );
		$this->db->join ( 'saleorder', 'saleorder.soid = detailcart.soid' );
		$this->db->join ( 'category', 'category.cid = wine.cid' );
		$this->db->group_by('wine.cid'); 
		$this->db->order_by('sl', 'desc');
		$this->db->where('status',2);
		$query = $this->db->get();
		$query=$query->result_array();
		return $query;
	}

		public function thongke_tongslruouban_model()
	{
		$this->db->select ( 'sum(qty) as tong' ); 
		$this->db->from ( 'detailcart' );
		$this->db->join ( 'wine', 'wine.wid = detailcart.wid' , 'left' );
		$this->db->join ( 'saleorder', 'saleorder.soid = detailcart.soid' );
		$this->db->join ( 'category', 'category.cid = wine.cid' );
		$this->db->where('status',2);
		$query = $this->db->get();
		$query=$query->result_array();
		return $query;
	}

	public function thongke_doanhthukhachhang_model()
	{
		$this->db->select ( 'cusname, sum(amount) as tongtien' ); 
		$this->db->from ( 'saleorder' );
		$this->db->group_by('cusname'); 
		$this->db->order_by('tongtien', 'desc');
		$this->db->where('status',2);
		$query = $this->db->get();
		$query=$query->result_array();
		return $query;
	}

		public function load_nhaphang_model()
	{
		$this->db->select ('*'); 
		$this->db->from ('wine');
		$this->db->where('avail',0);
		$query = $this->db->get();
		$query=$query->result_array();
		return $query;
	}

}


/* End of file model_user.php */
/* Location: ./application/models/model_user.php */