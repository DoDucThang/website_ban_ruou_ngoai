<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

			class Ad_account_model extends CI_Model {

				public $variable;

				public function __construct()
				{
					parent::__construct();
					
				}	
				public function load_acc_model()
				{
					$this->db->select('*');
					$ketqua=$this->db->get('user');
					$ketqua=$ketqua->result_array();
					return $ketqua;
				}

				public function delete_acc_model($userid)
				{
					$this->db->where('userid', $userid);
					return $this->db->delete('user');
				}



			}

/* End of file acc_model.php */
/* Location: ./application/models/acc_model.php */