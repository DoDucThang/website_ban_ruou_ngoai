<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->library('form_validation');
    $this->load->helper('form');
    if($this->input->post())
    {
      $this->form_validation->set_rules('login', 'login', 'callback_check_login');        
      if($this->form_validation->run())
        {
          $this->session->set_userdata('login', true);
            redirect(site_url('adminpage/Ad_dashboard'));
        }
    }

    $this->load->view('admin/login_view');
  }

  public function check_login()
  {
      $adname = $this->input->post('adname');
      $password = $this->input->post('password');
      $data = array(
        'adname' => $adname,
        'password' => $password
      );
      $this->load->model('model_admin');
     if( $this->model_admin->check_exists($data))
        {
            return true;
        }else
          {
            $this->form_validation->set_message(__FUNCTION__, 'Đăng nhập thất bại');
            return false;
          }
  }

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */