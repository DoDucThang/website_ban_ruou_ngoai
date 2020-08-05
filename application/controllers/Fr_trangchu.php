<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fr_trangchu extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Fr_trangchu_model');
		$this->load->model('model_product');
	}

	public function index()
	{
		
		$datacontroller1=$this->Fr_trangchu_model->load_wine_banchay_model();
		$this->data['datacontroller1']=$datacontroller1;

		$datacontroller2=$this->Fr_trangchu_model->load_wine_hotdeal_model();
		$this->data['datacontroller2']=$datacontroller2;

		$cognac=$this->Fr_trangchu_model->load_wine_cognac_model();
		$this->data['cognac']=$cognac;

		$whisky=$this->Fr_trangchu_model->load_wine_whisky_model();
		$this->data['whisky']=$whisky;

		$single=$this->Fr_trangchu_model->load_wine_single_model();
		$this->data['single']=$single;

		$brandy=$this->Fr_trangchu_model->load_wine_brandy_model();
		$this->data['brandy']=$brandy;

		$vodka=$this->Fr_trangchu_model->load_wine_vodka_model();
		$this->data['vodka']=$vodka;

		$quatang=$this->Fr_trangchu_model->load_wine_quatang_model();
		$this->data['quatang']=$quatang;

		$slideshow=$this->Fr_trangchu_model->load_slideshow_model();
		$this->data['slideshow']=$slideshow;


		$this->load->view('Fr_trangchu_view', $this->data);
	}

	public function load($wid)
	{
		//lay schi tiết sản phẩm
		$wid=$this->uri->segment(3);
		$wine=$this->Fr_trangchu_model->load_wine_model($wid);
		$this->data['wine']=$wine;

		$wid1=$this->uri->segment(3);
		$cid=$this->Fr_trangchu_model->load_cid_bywid_model($wid1);
		$t= $cid[0]["cid"];
		$winecid=$this->Fr_trangchu_model->load_wine_bycid_model($t);
		$this->data['winecid']=$winecid;

		$this->load->view('Fr_product_view', $this->data);
		//print_r($this->data);
		
		 //lấy ra sản phẩm liên quan
/*		$cid = $product-> cid;
		$input = array();
		$input['where']=array('cid'=> $cid);
		$related_pro1 = $this->model_product->get_list($input);
		$related_pro = $related_pro1 -> result_array();
		$this->data['related_pro']=$related_pro;
		$this->load->view('Fr_product_view',$this->data);*/
	}
	//tìm kiếm theo tên sp
	public function search()
	{
		$controller=$this-> uri-> segment(1);
		$this->data['controller']=$controller;
		$this->load->model('model_product');
		if($this-> uri->rsegment(3)==1)
		{
			$key=$this->input->get('term');
		}else{
			$key=$this->input->get('keyword');
		}
		
		
		$this->data['key']=trim($key);
/*		echo $key;*/
		$input=array();
		$input['like']=array('wname',$key);
/*		echo "<pre>";
   		print_r($input);
  		echo "<pre>";	*/	

		$list=$this->model_product->get_list($input);
/*		$this->data['list']=$list;*/
/*		$this->load->view('Fr_locsanpham_view',$this->data);*/
		$list1=$list-> result_array();
		$this->data['list']=$list1;
		/*$dl=array('list'=>$list1);*/
/*		echo "<pre>";
   		print_r($list);
  		echo "<pre>";*/
/*  		var_dump($dl);*/
		if($this->uri->rsegment(3)==1)
		{
			// xử lý autocomplete
			$result=array();
			foreach ($list1 as $value) {
				$item=array();
				$item['id']= $value-> wid;
				$item['label']= $value-> wname;
				$item['value']= $value-> wname;
				$result[]=$item;
			}
			die(json_encode($result));
		}else{
			$this->load->view('Fr_loctimkiem_view', $this->data);
		}
  		
	}

	public function search_price()
	{
		$controller=$this-> uri-> segment(1);
		$this->data['controller']=$controller;
		$this->load->model('model_product');
		$price_from=intval($this->input->get('price_from'));
		$price_to=intval($this->input->get('price_to'));
		$input=array();
		$input['where']=array('price >=' =>$price_from, 'price <=' => $price_to);
		$list=$this->model_product->get_list($input);
		$list1=$list-> result_array();
		$this->data['list']=$list1;
		$this->load->view('Fr_loctimkiem_view', $this->data);
	}
}

	/*
		public function index()
		{
			
			$dl1=$this->Fr_trangchu_model->load_wine_banchay_model();
			$dl1= array('datacontroller1'=>$dl1);
			$dl2=$this->Fr_trangchu_model->load_wine_hotdeal_model();
			$dl2= array('datacontroller2'=>$dl2);
			$dl3=$this->Fr_trangchu_model->load_wine_cognac_model();
			$dl3= array('cognac'=>$dl3);
			$dl4=$this->Fr_trangchu_model->load_wine_whisky_model();
			$dl4= array('whisky'=>$dl4);
			$dl5=$this->Fr_trangchu_model->load_wine_single_model();
			$dl5= array('single'=>$dl5);
			$dl6=$this->Fr_trangchu_model->load_wine_brandy_model();
			$dl6= array('brandy'=>$dl6);
			$dl7=$this->Fr_trangchu_model->load_wine_vodka_model();
			$dl7= array('vodka'=>$dl7);
			$dl8=$this->Fr_trangchu_model->load_wine_quatang_model();
			$dl8= array('quatang'=>$dl8);
			$dl9=$this->Fr_trangchu_model->load_slideshow_model();
			$dl9= array('slideshow'=>$dl9);
			$dl=$dl1+$dl2+$dl3+$dl4+$dl5+$dl6+$dl7+$dl8+$dl9;
			$this->load->view('Fr_trangchu_view', $dl);
		}
*/
/* End of file Fr_trangchu.php */
/* Location: ./application/controllers/Fr_trangchu.php */