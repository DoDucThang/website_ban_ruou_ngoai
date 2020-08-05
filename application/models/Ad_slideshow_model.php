<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ad_slideshow_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function load_slideshow_model()
	{
		$this->db->select('*');
		$ketqua=$this->db->get('slideshow');					
		$ketqua=$ketqua->result_array();
		return $ketqua;
	}


	public function insert_slideshow_model($ten)
	{
		$dl=array('imgslide'=>$ten);
		$this->db->insert('slideshow', $dl);
		return $this->db->insert_id();
	}

	public function delete_slideshow_model($id)
	{
		$this->db->where('imgslideid', $id);
		return $this->db->delete('slideshow');
	}

	public function get_slideshowbyID_model($id)
	{
		$this->db->select('*');
		$this->db->where('imgslideid', $id);
		$ketqua=$this->db->get('slideshow');
		$ketqua=$ketqua->result_array();
		return $ketqua;
	}
	public function update_slideshow_model($id,$ten)
	{
		$dl=['imgslideid'=>$id,'imgslide'=>$ten];
		$this->db->where('imgslideid', $id);
		return $this->db->update('slideshow', $dl);
		
	}

}

/* End of file Ad_slideshow_model.php */
/* Location: ./application/models/Ad_slideshow_model.php */