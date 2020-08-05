<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ad_user extends MY_Controller {

				public function __construct()
				{
					parent::__construct();
					$this->load->model('Ad_account_model');
				}

				public function index()
				{
					$datacontroller1=$this->Ad_account_model->load_acc_model();
					$this->data['datacontroller1']=$datacontroller1;
					$this->load->view('admin/user_view',$this->data);
				}

				public function deleteacc($userid)
				{
					if($this->Ad_account_model->delete_acc_model($userid))
					{
						redirect(base_url('adminpage/Ad_user'));
					}
				}
/*				public function insertacc()
				{
					$acc=$this->input->post('acc');
					$passw=$this->input->post('pass');
					$cusname=$this->input->post('cusname');
					$acccate=$this->input->post('acccat');
					$this->Ad_account_model->insert_acc_model($acc,$passw,$cusname,$acccate);
					$this->load->view('done_ad_acc');
				}
*/
/*				public function editacc($acc)
				{
					// echo $id;
					$dl=$this->Ad_account_model->get_acc_model($acc);
					$dl=['acc'=>$dl];
					$this->load->view('edit_account', $dl, FALSE);
				}
*/
/*				public function updateacc()
				{
					$account=$this->input->post('account');
					$pass=$this->input->post('pass');
					$cusname=$this->input->post('cusname');
					$acccat=$this->input->post('acccat');
					var_dump($account);
					var_dump($pass);					
					var_dump($cusname);
					var_dump($acccat);
					//$a= $this->Ad_account_model->update_acc_model($account,$pass,$cusname,$acccat);
					
					if($this->Ad_account_model->update_acc_model($account,$pass,$cusname,$acccat))
					{
						$this->load->view('done_ad_acc');
					}
				}*/

}

/* End of file Ad_user.php */
/* Location: ./application/controllers/Ad_user.php */