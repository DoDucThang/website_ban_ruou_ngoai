	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

			class Ad_order_model extends CI_Model {

				public $variable;

				public function __construct()
				{
					parent::__construct();
					
				}

				public function load_order_model()
				{
					$this->db->select('*');
					$ketqua=$this->db->get('saleorder');
					$ketqua=$ketqua->result_array();
					return $ketqua;
				}

/*				public function insert_order_model($soid,$userid,$cusname,$mail,$address,$phone,$amount,$payment,$note,$status,$created)
				{
					$dl=array('soid'=>$soid,'userid'=>$userid,'cusname'=>$cusname,'mail'=>$mail,'address'=>$address,'phone'=>$phone,'amount'=>$amount,'payment'=>$payment,'note'=>$note,'status'=>$status,'created'=>$created);
					$this->db->insert('saleorder', $dl);
					return $this->db->insert_id();
				}*/
				public function delete_order_model($id)
				{
					$this->db->where('soid', $id);
					return $this->db->delete('saleorder');
				}

				public function get_orderbyID_model($id)
				{
					$this->db->select('*');
					$this->db->where('soid', $id);
					$ketqua=$this->db->get('saleorder');
					$ketqua=$ketqua->result_array();
					return $ketqua;
				}
				public function update_order_model($soid,$userid,$cusname,$mail,$address,$phone,$amount,$payment,$note,$status,$created)
				{
					$dl=['soid'=>$soid,'userid'=>$userid,'cusname'=>$cusname,'mail'=>$mail,'address'=>$address,'phone'=>$phone,'amount'=>$amount,'payment'=>$payment,'note'=>$note,'status'=>$status,'created'=>$created];
					$this->db->where('soid', $soid);
					return $this->db->update('saleorder', $dl);
					
				}

				public function load_detail_model()
				{
					$this->db->select('*');
					$ketqua=$this->db->get('detailcart');
					$ketqua=$ketqua->result_array();
					return $ketqua;
				}



			}

/* End of file Ad_order_model.php */
/* Location: ./application/models/Ad_order_model.php */