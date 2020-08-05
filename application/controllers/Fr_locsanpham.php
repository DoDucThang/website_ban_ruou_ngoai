<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fr_locsanpham extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Fr_trangchu_model');
		$this->load->model('Fr_locsanpham_model');
		$this->load->model('model_product');
	}

	public function index()
	{
		$controller=$this-> uri-> segment(2);
/*		$dl1=$this->Fr_locsanpham_model->load_cognac_model();
		$dl1= array('cognac'=>$dl1);
		$dl2=$this->Fr_locsanpham_model->load_whisky_model();
		$dl2= array('whisky'=>$dl2);
		$dl3=$this->Fr_locsanpham_model->load_singlemalt_model();
		$dl3= array('singlemalt'=>$dl3);
		$dl4=$this->Fr_locsanpham_model->load_chabot_model();
		$dl4= array('chabot'=>$dl4);
		$dl5=$this->Fr_locsanpham_model->load_bisquit_model();
		$dl5= array('bisquit'=>$dl5);
		$dl6=$this->Fr_locsanpham_model->load_hennessy_model();
		$dl6= array('hennessy'=>$dl6);
		$dl7=$this->Fr_locsanpham_model->load_remy_model();
		$dl7= array('remy'=>$dl7);
		$dl8=$this->Fr_locsanpham_model->load_chivas_model();
		$dl8= array('chivas'=>$dl8);
		$dl9=$this->Fr_locsanpham_model->load_ballantine_model();
		$dl9= array('ballantine'=>$dl9);
		$dl10=$this->Fr_locsanpham_model->load_jw_model();
		$dl10= array('jw'=>$dl10);
		$dl11=$this->Fr_locsanpham_model->load_macallan_model();
		$dl11= array('macallan'=>$dl11);
		$dl12=$this->Fr_locsanpham_model->load_glenlivet_model();
		$dl12= array('glenlivet'=>$dl12);
		$dl13=$this->Fr_locsanpham_model->load_singleton_model();
		$dl13= array('singleton'=>$dl13);
		$dl14=$this->Fr_locsanpham_model->load_brandy_model();
		$dl14= array('brandy'=>$dl14);
		$dl15=$this->Fr_locsanpham_model->load_vodka_model();
		$dl15= array('vodka'=>$dl15);
		$dl16=$this->Fr_locsanpham_model->load_quatang_model();
		$dl16= array('quatang'=>$dl16);
		$dl=$dl1+$dl2+$dl3+$dl4+$dl5+$dl6+$dl7+$dl8+$dl9+$dl10+$dl11+$dl12+$dl13+$dl14+$dl15+$dl16;
		$this->load->view('Fr_locsanpham_view',$dl);*/
	}


	public function load_cognac()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_cognac_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_cognac_asc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_cognac_asc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_cognac_desc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_cognac_desc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}


	public function load_whisky()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_whisky_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_whisky_asc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_whisky_asc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_whisky_desc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_whisky_desc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_singlemalt()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_singlemalt_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_singlemalt_asc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_singlemalt_asc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_singlemalt_desc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_singlemalt_desc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_chabot()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_chabot_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_chabot_asc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_chabot_asc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_chabot_desc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_chabot_desc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_bisquit()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_bisquit_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_bisquit_asc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_bisquit_asc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_bisquit_desc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_bisquit_desc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_hennessy()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_hennessy_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_hennessy_asc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_hennessy_asc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_hennessy_desc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_hennessy_desc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}


	public function load_remy()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_remy_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_remy_asc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_remy_asc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_remy_desc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_remy_desc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}


	public function load_chivas()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_chivas_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_chivas_asc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_chivas_asc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_chivas_desc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_chivas_desc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}


	public function load_ballantine()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_ballantine_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_ballantine_asc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_ballantine_asc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_ballantine_desc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_ballantine_desc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}


	public function load_jw()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_jw_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_jw_asc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_jw_asc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_jw_desc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_jw_desc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}


	public function load_macallan()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_macallan_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_macallan_asc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_macallan_asc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_macallan_desc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_macallan_desc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}


	public function load_glenlivet()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_glenlivet_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_glenlivet_asc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_glenlivet_asc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_glenlivet_desc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_glenlivet_desc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}



	public function load_singleton()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_singleton_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_singleton_asc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_singleton_asc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_singleton_desc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_singleton_desc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}


	public function load_brandy()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_brandy_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_brandy_asc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_brandy_asc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_brandy_desc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_brandy_desc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}


	public function load_vodka()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_vodka_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_vodka_asc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_vodka_asc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_vodka_desc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_vodka_desc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}


	public function load_quatang()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_quatang_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_quatang_asc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_quatang_asc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_quatang_desc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_quatang_desc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}


	public function load_banchay()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_banchay_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_banchay_asc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_banchay_asc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_banchay_desc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_banchay_desc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}


	public function load_hotdeal()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_hotdeal_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_hotdeal_asc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_hotdeal_asc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}

	public function load_hotdeal_desc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_hotdeal_desc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_locsanpham_view',$this->data);
	}


	public function load_sapve()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_sapve_model();
		$this->data['list']=$list;
		$this->load->view('Fr_sapve_view',$this->data);
	}

	public function load_sapve_asc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_sapve_asc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_sapve_view',$this->data);
	}

	public function load_sapve_desc()
	{
		$controller=$this-> uri-> segment(2);
		$this->data['controller']=$controller;
		$list=$this->Fr_locsanpham_model->load_sapve_desc_model();
		$this->data['list']=$list;
		$this->load->view('Fr_sapve_view',$this->data);
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

}

