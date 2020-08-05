<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ad_dashboard extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$input=array();
    	$this->load->model('model_user');
    	$amount_user=$this->model_user->get_total($input);
    	$this->data['amount_user']=$amount_user;

    	$stt0=$this->model_user->load_status0_model();
    	$t0= $stt0[0]["n"];
    	$this->data['stt0']=$t0;

    	$stt1=$this->model_user->load_status1_model();
    	$t1= $stt1[0]["n"];
    	$this->data['stt1']=$t1;

    	$stt2=$this->model_user->load_status2_model();
    	$t2= $stt2[0]["n"];
    	$this->data['stt2']=$t2;

    	$stt3=$this->model_user->load_status3_model();
    	$t3= $stt3[0]["n"];
    	$this->data['stt3']=$t3;


    	$thongke=$this->model_user->thongke_slruouban_model();
    	$this->data['thongke']=$thongke;

    	$tongruou=$this->model_user->thongke_tongslruouban_model();
    	$tongruou= $tongruou[0]["tong"];
    	$this->data['tongruou']=$tongruou;

    	$dtkh=$this->model_user->thongke_doanhthukhachhang_model();
    	$this->data['dtkh']=$dtkh;

    	$nhaphang=$this->model_user->load_nhaphang_model();
    	$this->data['nhaphang']=$nhaphang;
/*    	echo "<pre>";
        print_r($dtkh);
        echo "<pre>";*/


 		$field='amount';
        $input=array();
        $where=array('status'=>2);
        $this->load->model('model_saleorder');
        $sum1=$this->model_saleorder->get_sum($field,$where);
        if(empty($sum1))
        {
            $sum1=0;
            $this->data['sum']=$sum1;
        }
        else 
        {
            $this->data['sum']=$sum1;
        }
       
       

        
        // lấy ds theo ngày 
        $date = getdate();
        $input=array();
        $where=array('status'=>2,'MONTH(created)='=>$date['mon'],'DAY(created)='=>$date['mday'],'YEAR(created)='=>$date['year']);
        $this->load->model('model_saleorder');
        $sum2=$this->model_saleorder->get_sum($field,$where);
          if(empty($sum2))
        {
            $sum2=0;
            $this->data['ngay']=$sum2;
        }
        else 
        {
            $this->data['ngay']=$sum2;
        }
        // lấy doanh số theo tháng
        for ($i = 1; $i <= 12; $i++)
        {
        $input=array();
        $this->load->model('model_saleorder');
        $where=array('status'=>2,'MONTH (created)='=>$date['mon']);
        $sum3=$this->model_saleorder->get_sum($field,$where);
          if(empty($sum3))
        {
            $sum3=0;
            $this->data['thang']=$sum3;
        }
        else 
        {
           $this->data['thang']=$sum3;
        }
        
        }  


        for ($i = 1; $i <= 12; $i++)
        {
        $input=array();
        $this->load->model('model_saleorder');
        $where=array('status'=>2,'MONTH (created)='=>$i);
        $sum4=$this->model_saleorder->get_sum($field,$where);
          if(empty($sum4))
        {
            $sum4=0;
            $this->data['thang'.$i]=$sum4;
        }
        else 
        {
           $this->data['thang'.$i]=$sum4;
        }
        
        }




		$this->load->view('admin/dashboard_view', $this->data);
	}

}

/* End of file Ad_dashboard.php */
/* Location: ./application/controllers/Ad_dashboard.php */