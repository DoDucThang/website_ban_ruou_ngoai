<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_detailcart extends MY_Model

{
    var $table = 'detailcart';
    var $key = 'detailid';
    public function getnamewine($soid)
    {
    	$this->db->select('*');
	    $this->db->from('detailcart d, wine w');
	    $this->db->where('d.wid = w.wid');
	    $this->db->where('d.soid', $soid);
	    $query = $this->db->get();
	    $query=$query->result_array();
	    return $query;
    }
}