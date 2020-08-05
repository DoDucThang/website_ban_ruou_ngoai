<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fr_user extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_user');
        $this->load->model('model_saleorder');
        $this->load->model('model_detailcart');
	}

	public function index()
	{
		if(!$this->session->userdata('user_id_login'))
		{
			redirect(site_url('Fr_trangchu'));
		}
		$user_id=$this->session->userdata('user_id_login');
		$user=$this->model_user->get_info($user_id);
        $saleorder=$this->model_saleorder->load_infoso_model($user_id);
		if(!$user)
		{
			redirect(site_url('Fr_trangchu'));
		}
		$this->data['user']=$user;
        $this->data['saleorder']=$saleorder;
/*        var_dump($user_id);
        var_dump($user);
       var_dump($saleorder);*/
       $this->load->view('Fr_infouser_view',  $this->data);
	}

	public function register()
	{
		//nếu tvien đăng nhập rồi thì redirect lại trang infouser
		if($this->session->userdata('user_id_login'))
		{
			redirect(site_url('Fr_user'));
		}
		$this->load->library('form_validation');
 		$this->load->helper('form');
 		if($this->input->post())
 		{
 			$this->form_validation->set_rules('username', 'Tên tài khoản','required|min_length[5]|callback_check_username');
 			$this->form_validation->set_rules('pass', 'Mật khẩu', 'required|min_length[6]');
 			$this->form_validation->set_rules('re_pass', 'Nhập lại mật khẩu', 'matches[pass]');
 			$this->form_validation->set_rules('cusname', 'Họ và tên', 'required');
 			$this->form_validation->set_rules('mail', 'Mail', 'required|valid_email');
 			$this->form_validation->set_rules('phone', 'Số điện thoại', 'required|min_length[10]');
 			
 			
 			if($this->form_validation->run())
 			{
 				$username = $this->input->post('username');
 				$pass = $this->input->post('pass');
 				$pass=md5($pass);
 				$cusname = $this->input->post('cusname');
 				$mail = $this->input->post('mail');
 				$phone = $this->input->post('phone');
 				$date = getdate();
 				$data = array(
 				    'username' => $username,
 				    'pass' => $pass,
 				    'cusname' => $cusname,
 				    'mail' => $mail,
 				    'phone' => $phone,
 				    'created' => $date['year']."-"."0".$date['mon']."-".$date['mday']
 				);
 				if($this->model_user->create($data))
 				{
 				$this->session->set_flashdata('message', 'Đăng ký thành công');	
 				}
 				else
 				{
 				$this->session->set_flashdata('message', 'Không đăng ký được');
 				}
 				redirect(site_url('Fr_user/login'));
 			}
 		}
    	$this->load->view('Fr_dangky_view',  $this->data);
	}

 	public function check_username()
    {
        $username = $this->input->post('username');
        $where = array('username' => $username);
        
        if($this->model_user->check_exists($where))
        {
            $this->form_validation->set_message(__FUNCTION__, 'Tài khoản đã tồn tại');
            return false;
        }
        return true;
    }
 	
    public function login()
    {
    	//nếu tvien đăng nhập rồi thì redirect lại trang infouser
    	if($this->session->userdata('user_id_login'))
		{
			redirect(site_url('Fr_user'));
		}
    	$this->load->library('form_validation');
 		$this->load->helper('form');
 		if($this->input->post())
 		{
 			$this->form_validation->set_rules('username', 'Tên tài khoản','required');
 			$this->form_validation->set_rules('pass', 'Mật khẩu', 'required|min_length[6]');
 			$this->form_validation->set_rules('login', 'login', 'callback_check_login');
 			
 		
 			if($this->form_validation->run())
 			{
 				$user=$this->_get_user_info();
 				$this->session->set_userdata('user_id_login', $user-> userid);
 				$this->session->set_flashdata('message', 'Đăng nhập thành công');
 				redirect(site_url('Fr_trangchu'));
 			}
 		}
    	$this->load->view('Fr_dangnhap_view', $this->data);
    }

    public function check_login()
    {

    	$user=$this->_get_user_info();
        if($user)
        {
            return true;
        }else {
        	 $this->form_validation->set_message(__FUNCTION__, 'Đăng nhập thất bại');
       		 return false;
        }
    }

    private function _get_user_info()
    {
    	$username = $this->input->post('username');
        $pass = $this->input->post('pass');
        $pass=md5($pass);

        $where = array('username'=>$username,'pass'=>$pass);
        $user=$this->model_user->get_info_rule($where);
        return $user;
    }

    public function logout()
    {
    	if($this->session->userdata('user_id_login'))
    	{
    		$this->session->unset_userdata('user_id_login');
    	}
    	$this->session->set_flashdata('message', 'Đăng xuất thành công');
    	redirect(site_url('Fr_trangchu'));

    }

 	public function edit()
 	{
 		if(!$this->session->userdata('user_id_login'))
		{
			redirect(site_url('Fr_user/login'));
		}
		// lấy thông tin tvien
		$user_id=$this->session->userdata('user_id_login');
		$user=$this->model_user->get_info($user_id);
		if(!$user)
		{
			redirect(site_url('Fr_trangchu'));
		}
		$this->data['user']=$user;

		$this->load->library('form_validation');
 		$this->load->helper('form');
 		if($this->input->post())
 		{
 			$pass = $this->input->post('pass');
 			if($pass)
 			{
  			$this->form_validation->set_rules('pass', 'Mật khẩu', 'required|min_length[6]');
 			$this->form_validation->set_rules('re_pass', 'Nhập lại mật khẩu', 'matches[pass]');				
 			}

 			$this->form_validation->set_rules('cusname', 'Họ và tên', 'required');
 			$this->form_validation->set_rules('mail', 'Mail', 'required|valid_email');
 			$this->form_validation->set_rules('phone', 'Số điện thoại', 'required|min_length[10]');
 			
 			
 			if($this->form_validation->run())
 			{
 				$cusname = $this->input->post('cusname');
 				$mail = $this->input->post('mail');
 				$phone = $this->input->post('phone');
 				$data = array(
 				    'cusname' => $cusname,
 				    'mail' => $mail,
 				    'phone' => $phone
 				);
 				if($pass)
 				{
 					$data['pass']=md5($pass);
 				}

 				if($this->model_user->update($user_id,$data))
 				{
 				$this->session->set_flashdata('message', 'Chỉnh sửa thông tin tài khoản thành công');	
 				}
 				else
 				{
 				$this->session->set_flashdata('message', 'Không chỉnh sửa được');
 				}
 				redirect(site_url('Fr_user'));
 			}
 		}
/*		$this->data['temp']='Fr_edituser_view';*/
		$this->load->view('Fr_edituser_view',  $this->data);
 		
 	}
    public function delete_order()
    {

        $soid=$this->input->post('soid');
        var_dump($soid);
        if($this->model_saleorder->del_so_model($soid))
        {
            redirect(base_url('Fr_user'));
        }
/*        $this->data['sale_order']=$sale_order;

        $dl=['imgslideid'=>$id,'imgslide'=>$ten];
        $this->db->where('imgslideid', $id);
        return $this->db->update('slideshow', $dl);*/
    }

    public function detail_order($soid)
    {
        $soid=$this->uri->segment(3);
        $dt=$this->model_detailcart->getnamewine($soid);
        $this->data['dt']=$dt;
/*var_dump($dt);*/
        $this->load->view('Fr_detail_view', $this->data);
    }





    /*	function index()
 	{
 		
 		
        
        $input = array();
      
        $list=$this->admin_model->get_list($input);
        $this->data['list']=$list;

        

 		$message=$this->session->flashdata('message');
 		$this->data['message']=$message;
 		$this->data['temp']='admin/admin/index';
    	$this->load->view('admin/main',  $this->data);
 	}*/
}



/* End of file Fr_user.php */
/* Location: ./application/controllers/Fr_user.php */