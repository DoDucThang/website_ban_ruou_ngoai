<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ad_wine extends MY_Controller {

	public function __construct()
				{
					parent::__construct();
					$this->load->model('Ad_wine_model');
				}
			
				public function index()
				{
					$datacontroller=$this->Ad_wine_model->load_category_model();
					$this->data['datacontroller']=$datacontroller;
					$datacontroller1=$this->Ad_wine_model->load_wine_model();
					$this->data['datacontroller1']=$datacontroller1;
					$this->load->view('admin/wine_view', $this->data);
				
				}

				public function deletecategory($id)
				{
					var_dump($id);
					if($this->Ad_wine_model->delete_category_model($id))
					{
						redirect(base_url('adminpage/Ad_wine'));
					}
				}
				public function insertcategory()
				{
					// _POST
					$ten=$this->input->post('cname');
					echo $ten;

					if($this->Ad_wine_model->insert_category_model($ten))
					{
						redirect(base_url('adminpage/Ad_wine'));
					}
					else{
						echo 'fails';
					}
				}

				public function editcategory($id)
				{
					// echo $id;
					$category=$this->Ad_wine_model->get_categorybyID_model($id);
					$this->data['category']=$category;
					$this->load->view('admin/edit_category', $this->data);
				}

				public function updatecategory()
				{
					$id=$this->input->post('id');					
					$ten=$this->input->post('name');
					if($this->Ad_wine_model->update_category_model($id,$ten))
					{
						redirect(base_url('adminpage/Ad_wine'));
/*						$this->load->view('admin/done_ad_wine');*/
					}
				}
/*				public function showcategory()
				{
					
					$dl=$this->Ad_wine_model->load_category();
					$dl= array('datacontroller'=>$dl);
					$dl1=$this->Ad_wine_model->load_wine();
					$dl1= array('datacontroller1'=>$dl1);
					$dl2=$dl+$dl1;
					$this->load->view('trangchu_view', $dl2);

				}*/

				public function deletewine($id)
				{
					if($this->Ad_wine_model->delete_wine_model($id))
					{
						redirect(base_url('adminpage/Ad_wine'));
					}
				}
				public function insertwine()
				{
					$ten=$this->input->post('wname');
					$gia=$this->input->post('price');
					$ggia=$this->input->post('discount');
					$cid=$this->input->post('cid');
					$ttin=$this->input->post('info');
					$target_dir = "Fileupload/";
						$target_file = $target_dir . basename($_FILES["img"]["name"]);
						$uploadOk = 1;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
						// Check if image file is a actual image or fake image
						if(isset($_POST["submit"])) {
						    $check = getimagesize($_FILES["img"]["tmp_name"]);
						    if($check !== false) {
						        echo "File is an image - " . $check["mime"] . ".";
						        $uploadOk = 1;
						    } else {
						        echo "File is not an image.";
						        $uploadOk = 0;
						    }
						}
						// Check if file already exists
						/*if (file_exists($target_file)) {
						    echo "Sorry, file already exists.";
						    $uploadOk = 0;
						}*/
						// Check file size
						if ($_FILES["img"]["size"] > 50000000) {
						    echo "Sorry, your file is too large.";
						    $uploadOk = 0;
						}
						// Allow certain file formats
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
						&& $imageFileType != "gif" ) {
						    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
						    $uploadOk = 0;
						}
						// Check if $uploadOk is set to 0 by an error
						if ($uploadOk == 0) {
						    echo "Sorry, your file was not uploaded.";
						// if everything is ok, try to upload file
						} else {
						    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
						        echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
						    } else {
						        echo "Sorry, there was an error uploading your file.";
						    }
						}
					$img=base_url()."Fileupload/".basename($_FILES["img"]["name"]);
					if($this->Ad_wine_model->insert_wine_model($ten,$gia,$ggia,$cid,$ttin,$img))
					{
						redirect(base_url('adminpage/Ad_wine'));
					}
					else{
						echo 'fails';
					}
				}

				public function editwine($id)
				{
					// echo $id;
					$wine=$this->Ad_wine_model->get_winebyID_model($id);
					$this->data['wine']=$wine;
					$this->load->view('admin/edit_wine', $this->data);
				}

				public function updatewine()
				{
					$id=$this->input->post('wid');
					$ten=$this->input->post('wname');
					$gia=$this->input->post('price');
					$ggia=$this->input->post('discount');
					$cid=$this->input->post('cid');
					$ttin=$this->input->post('info');
					$trend=$this->input->post('trend');
					$avail=$this->input->post('avail');
					$target_dir = "Fileupload/";
						$target_file = $target_dir . basename($_FILES["img"]["name"]);
						$uploadOk = 1;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
						// Check if image file is a actual image or fake image
						if(isset($_POST["submit"])) {
						    $check = getimagesize($_FILES["img"]["tmp_name"]);
						    if($check !== false) {
						        echo "File is an image - " . $check["mime"] . ".";
						        $uploadOk = 1;
						    } else {
						        echo "File is not an image.";
						        $uploadOk = 0;
						    }
						}
						// Check if file already exists
						/*if (file_exists($target_file)) {
						    echo "Sorry, file already exists.";
						    $uploadOk = 0;
						}*/
						// Check file size
						if ($_FILES["img"]["size"] > 50000000) {
						    echo "Sorry, your file is too large.";
						    $uploadOk = 0;
						}
						// Allow certain file formats
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
						&& $imageFileType != "gif" ) {
						    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
						    $uploadOk = 0;
						}
						// Check if $uploadOk is set to 0 by an error
						if ($uploadOk == 0) {	
						    echo "Sorry, your file was not uploaded.";
						// if everything is ok, try to upload file
						} else {
						    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
						        echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
						    } else {
						        echo "Sorry, there was an error uploading your file.";
						    }
						}
					$img=basename($_FILES["img"]["name"]);
					if($img)
					{
						$img=base_url()."Fileupload/".basename($_FILES["img"]["name"]);
					}
					else
					{
						$img=$this->input->post('img2');
					}

					if($this->Ad_wine_model->update_wine_model($id,$ten,$gia,$ggia,$cid,$ttin,$img,$trend,$avail))
					{
						redirect(base_url('adminpage/Ad_wine'));
					}
				}
				/*public function showwine()
				{
					$dl=$this->Ad_wine_model->load_wine();
					$dl=['wine'=>$dl];
					$this->load->view('trangchu_view', $dl);
				}*/
			
			
			}

/* End of file Ad_wine.php */
/* Location: ./application/controllers/Ad_wine.php */