<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fr_giohang extends MY_controller {

	public function __construct()
	{//gọi thư viện cart
		parent::__construct();

	}
	///hien thi dsach san pham trong cart
	public function index()
	{
		$carts =$this-> cart ->contents();
		$total_items=$this-> cart->total_items();
		$this->data['carts']=$carts;	
		// var_dump($carts);
/*		echo "<pre>";
   		print_r($carts);
  		echo "<pre>";*/

	 	$this->load ->view('Fr_giohang_view',$this->data);
		
	 }
	 //thêm sản phẩm vô cart
	public function add(){
		//lấy ra sp thêm cart
		$this->load->model('model_product');
		$id=$this->uri->segment(3);
		$product =$this->model_product->get_info($id);
		if(!$product)
		{
			redirect();
		}
		$qty=$this->input->post('quantity');
/*		$qty =1;*/
		$price = $product -> discount;
		$data= array();
		$data['id'] = $product -> wid;
		$data['price'] =$price;
		$data['name']=url_title($product-> wname);
		$data['img'] =$product -> img;
		$data['qty']= $qty;
		$this-> cart -> insert($data);
		
		redirect(base_url('Fr_giohang'));
	}
	//update cart
	public function update()
	{
		$carts = $this -> cart->contents();
		foreach ($carts as $key => $value) {
			$total_qty=$this-> input->post('qty_'.$value['id']);
			$data=array();
			$data['rowid'] =$key;
			$data['qty']= $total_qty;
			$this->cart->update($data);		
		}
		redirect(base_url('Fr_giohang'));	
/*		$update =0;
		//lấy thông tin item
		$name =$this->input -> get('name');
		$qty = $this->input -> get('qty');
		//update item
		if (!empty($name) && !empty($qty)) {
				$data = array();
				$data['name']= $name;
				$data['qty']=$qty;
				$update=$this->cart ->update($data);				
			}	
		echo $update?'ok':'err';*/
	}

	public function del()
	{
		$id = $this->uri->segment(3);
		$id= intval($id);
		// xóa 1 sp 
		if($id>0)
			{
			$carts= $this-> cart->contents();
			foreach ($carts as $key => $value) 
			{
				if($value['id']==$id)
				{
					$data=array();
					$data['rowid'] =$key;
					$data['qty']= 0;
					$this->cart->update($data);	
				}
				
			}
			}else{
				$this-> cart->destroy();
 
		}
				redirect(base_url('Fr_giohang'));
	}

	public function thanhtoan()
	{
		$carts =$this-> cart ->contents();
		$total_items=$this-> cart->total_items();
/*		echo "<pre>";
    print_r($carts);
    echo "<pre>";*/
		if($total_items<=0)
		{
			redirect(site_url('Fr_trangchu'));
		}
		$this->data['carts']=$carts;
		$total_amount=0;
		foreach ($carts as $value) {
			$total_amount =$total_amount + $value['subtotal']; 
		}
		$this->data['total_amount']=$total_amount;

		$user_id=0;
		$user='';
		if($this->session->userdata('user_id_login'))
		{
		$user_id=$this->session->userdata('user_id_login');
		$user=$this->model_user->get_info($user_id);
		}
		$this->data['user']=$user;

		$this->load->library('form_validation');
 		$this->load->helper('form');
 		if($this->input->post())
 		{
 			$this->form_validation->set_rules('username', 'Tên tài khoản', 'required');
 			$this->form_validation->set_rules('cusname', 'Họ và tên', 'required');
 			$this->form_validation->set_rules('mail', 'Mail', 'required|valid_email');
 			$this->form_validation->set_rules('phone', 'Số điện thoại', 'required|min_length[10]');
 			$this->form_validation->set_rules('address', 'Địa chỉ', 'required');
 			$this->form_validation->set_rules('payment', 'Cổng thanh toán', 'required');
 			
 			
 			if($this->form_validation->run())
 			{
 				$payment=$this->input->post('payment');
 				$cusname = $this->input->post('cusname');
 				$mail = $this->input->post('mail');
 				$phone = $this->input->post('phone');
 				$address = $this->input->post('address');
 				$note = $this->input->post('note');
 				$date = getdate();

 				$data = array(
 					'status' =>0, // trạng thái chưa thanh toán
 					'userid' =>$user_id, // id thành viên mua hàng nếu đã đăng nhập
 				    'cusname' => $cusname,
 				    'mail' => $mail,
 				    'phone' => $phone,
 				    'address' => $address,
 				    'note' => $note,
 				    'amount' => $total_amount,
 				    'payment' => $payment,
 				    'created' => $date['year']."-"."0".$date['mon']."-".$date['mday']

 				);
 			//thêm vào saleorder	
 			$this->load->model('model_saleorder');
 			$this->model_saleorder->create($data);
 			$so_id=$this->db->insert_id();
 			//thêm vào detailcart
 			$this->load->model('model_detailcart');
 			foreach ($carts as $value) {
 				$data=array(
 					'soid'=>$so_id,
 					'wid'=>$value['id'],
 					'qty'=>$value['qty'],
 					'amount'=>$value['subtotal']
 				);
 				$this->model_detailcart->create($data);
 			}
 			$this->cart->destroy();


 				redirect(site_url('Fr_thanhtoan'));
 			}
 		}




		$this->load->view('Fr_thanhtoan_view',$this->data);		
	}


}
	/*public function __construct()
	{
		parent::__construct();
		$this->load->library('Cart');
		$this->load->model('Fr_giohang_model');
	}*/

	/*public function index()
	{
	$carts =$this-> cart ->contents();
	echo "<pre>";
    print_r($carts);
    echo "<pre>";

$this->load->view('Fr_giohang_view');
	}*/

	/*public function add()
	{
		$wid=$this->uri->segment(3);
		$dl1=$this->Fr_giohang_model->load_wine_model($wid);*/
	/*	$dl1=array('wine'=>$dl1);*/
	//du lieu luu vao gio hang
		/*if(!$dl1)
		{
			redirect();
		}
		$qty =1;
		$price=$dl1[0]["price"];
		$cart = array(
		            array ('id'    => $dl1[0]["wid"],
		                   'qty'   => $qty,
		                   'discount' => $dl1[0]["discount"],
		                   'img' => $dl1[0]["img"],
		                   'price' => $price,     
		                   'name'  => $dl1[0]["wname"]) ,                      
		);
		echo "<pre>";
    	print_r($cart);
   		echo "<pre>";
		   //goi phương thức thêm vào giỏ hàng
		$this-> cart ->insert($cart);
		$carts =$this-> cart ->contents();
		echo "<pre>";
  		print_r($carts);
 	    echo "<pre>";*/
		/*redirect(base_url(Fr_giohang));*/

/*	}
}*/

/* End of file Fr_giohang.php */
/* Location: ./application/controllers/Fr_giohang.php */