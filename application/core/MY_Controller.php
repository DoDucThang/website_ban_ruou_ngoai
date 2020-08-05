<?php 
/**
 * summary
 */
class MY_Controller extends CI_Controller
{
    /**
     kế thừa từ CI_Controller
     */
    //biến gửi dữ liệu sang bên view
    public $data =array();

    public function __construct()
    {
        parent::__construct();
        $controller=$this-> uri-> segment(1);
    	switch ($controller) {
    		case 'adminpage':
    			{
    				//xư lí dữ liệu khi truy cập admin
                    /*$this->load->helper('admin');*/
    				$this-> _check_login();
				    break;
				}				
    		
    		default:
    			{    
                    $this->load->library('session');
                    //kiểm tra xem user đã đăng nhập hay chưa
                    $user_id_login=$this->session->userdata('user_id_login');
                    $this->data['user_id_login']=$user_id_login;
                    //nếu đã đăng nhập thì lấy thông tin của user
                    if($user_id_login)
                    {
                        $this->load->model('model_user');
                        $user_info=$this->model_user->get_info($user_id_login);
                        $this->data['user_info']=$user_info;
                    }
    				//xư lí dữ liệu khi ở trang ngoài  
                    $this->load->library('cart');
                    $total_items=$this-> cart->total_items();
                    $this->data['total_items']=$total_items;
                     			 
				}				
    		

    	}

    }
    //kiểm tra đăng nhập
    private function _check_login(){
        $controller=$this->uri->segment(2);
        $controller=strtolower($controller);

        $login=$this->session->userdata('login');
/*        $this->data['login']=$login;
        if($login)
        {
            $this->load->model('model_admin');
            $ad_info=$this->model_admin->get_info($login);
            $this->data['ad_info']=$ad_info;
        }*/
/*        if(!$login && $controller != 'login')
        {
           redirect(site_url('adminpage/login'));
        }
        if(!$login && $controller == 'login')
        {
            redirect(site_url('adminpage/Ad_saleorder'));
        }*/
/*             echo "<pre>";
        print_r($controller);
        echo "<pre>";
                     echo "<pre>";
        print_r($login);
        echo "<pre>";*/
    }

}
 ?>