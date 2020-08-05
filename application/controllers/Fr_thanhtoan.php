<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fr_thanhtoan extends MY_Controller {

   public function __construct()
   {
      parent::__construct();

   }

   public function index()
   {
      $this->load->view('Fr_gdtc_view',$this->data);
   }
} 
   
/* End of file Fr_thanhtoan.php */
/* Location: ./application/controllers/Fr_thanhtoan.php */