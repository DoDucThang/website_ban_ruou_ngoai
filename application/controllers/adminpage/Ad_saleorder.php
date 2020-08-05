<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ad_saleorder extends MY_Controller {

			public function __construct()
			  {
			    parent::__construct();
			    $this->load->model('Ad_order_model');
			  }

			  public function index()
			  {
			  	$datacontroller1=$this->Ad_order_model->load_order_model();
			  	$this->data['datacontroller1']=$datacontroller1;
			  	$datacontroller=$this->Ad_order_model->load_detail_model();
			  	$this->data['datacontroller']=$datacontroller;
			    $this->load->view('admin/saleorder_view',$this->data);

			  }
			  public function deleteorder($id)
				{
					if($this->Ad_order_model->delete_order_model($id))
					{
						redirect(base_url('adminpage/Ad_saleorder'));
					}
				}
/*				public function insertorder()
				{
					$acc=$this->input->post('acc');
					$date=$this->input->post('date');
					$address=$this->input->post('address');
					$phone=$this->input->post('phone');
					$subtotal=$this->input->post('subtotal');
					$couponid=$this->input->post('couponid');
					$total=$this->input->post('total');
					$this->Ad_order_model->insert_order_model($acc,$date,$address,$phone,$subtotal,$couponid,$total);
					redirect(base_url('Ad_saleorder'));
				}
*/
				public function editorder($id)
				{
					// echo $id;
					$saleorder=$this->Ad_order_model->get_orderbyID_model($id);
					$this->data['saleorder']=$saleorder;
					$this->load->view('admin/edit_order', $this->data);
				}

				public function updateorder()
				{
					$soid=$this->input->post('soid');
					$userid=$this->input->post('userid');
					$cusname=$this->input->post('cusname');
					$mail=$this->input->post('mail');
					$address=$this->input->post('address');
					$phone=$this->input->post('phone');
					$amount=$this->input->post('amount');
					$payment=$this->input->post('payment');
					$note=$this->input->post('note');
					$status=$this->input->post('status');
					$created=$this->input->post('created');

					if($this->Ad_order_model->update_order_model($soid,$userid,$cusname,$mail,$address,$phone,$amount,$payment,$note,$status,$created))
					{
						redirect(base_url('adminpage/Ad_saleorder'));
					}
				}
}

/* End of file Ad_saleorder.php */
/* Location: ./application/controllers/Ad_saleorder.php */