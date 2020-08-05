<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ad_wine_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}	
	public function load_category_model()
	{
		$this->db->select('*');
		$ketqua=$this->db->get('category');// echo '<pre>';// var_dump($ketqua);// echo '</pre>';					
		$ketqua=$ketqua->result_array();
		return $ketqua;
		
	}
	public function load_wine_model()
	{
		$this->db->select('*');
		$ketqua=$this->db->get('wine');
		$ketqua=$ketqua->result_array();
		return $ketqua;
	}


	public function insert_category_model($ten)
	{
		$dl=array('cname'=>$ten);
		$this->db->insert('category', $dl);
		return $this->db->insert_id();
	}

	public function insert_wine_model($ten,$gia,$ggia,$cid,$ttin,$img)
	{
		$dl=array('wname'=>$ten,'price'=>$gia, 'discount'=>$ggia,'cid'=>$cid,'info'=>$ttin,'img'=>$img);
		$this->db->insert('wine', $dl);
		return $this->db->insert_id();
	}

	public function delete_category_model($id)
	{
		$this->db->where('cid', $id);
		return $this->db->delete('category');
	}

	public function delete_wine_model($id)
	{
		$this->db->where('wid', $id);
		return $this->db->delete('wine');
	}

	public function get_categorybyID_model($id)
	{
		$this->db->select('*');
		$this->db->where('cid', $id);
		$ketqua=$this->db->get('category');
		$ketqua=$ketqua->result_array();
		return $ketqua;
	}
	public function update_category_model($id,$ten)
	{
		$dl=['cid'=>$id,'cname'=>$ten];
		$this->db->where('cid', $id);
		return $this->db->update('category', $dl);
		
	}

	public function get_winebyID_model($id)
	{
		$this->db->select('*');
		$this->db->where('wid', $id);
		$ketqua=$this->db->get('wine');
		$ketqua=$ketqua->result_array();
		return $ketqua;
	}
	public function update_wine_model($id,$ten,$gia,$ggia,$cid,$ttin,$img,$trend,$avail)
	{
		$dl=['wid'=>$id,'wname'=>$ten,'price'=>$gia, 'discount'=>$ggia,'cid'=>$cid,'info'=>$ttin,'img'=>$img, 'trend'=>$trend, 'avail'=>$avail];
		$this->db->where('wid', $id);
		return $this->db->update('wine', $dl);
		
	}


}

/* End of file wine_model.php */
/* Location: ./application/models/wine_model.php */