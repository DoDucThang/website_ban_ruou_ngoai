<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ad_slideshow extends MY_Controller {

	public function __construct()
				{
					parent::__construct();
					$this->load->model('Ad_slideshow_model');
				}

				public function index()
				{
					$datacontroller1=$this->Ad_slideshow_model->load_slideshow_model();
					$this->data['datacontroller1']=$datacontroller1;
					$this->load->view('admin/slideshow_view',$this->data);
				}
				public function deleteslideshow($id)
				{
					var_dump($id);
					if($this->Ad_slideshow_model->delete_slideshow_model($id))
					{
						redirect(base_url('adminpage/Ad_slideshow'));
					}
				}
				public function insertslideshow()
				{
					// _POST
					$target_dir = "Fileupload/";
						$target_file = $target_dir . basename($_FILES["imgslide"]["name"]);
						$uploadOk = 1;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
						// Check if image file is a actual image or fake image
						if(isset($_POST["submit"])) {
						    $check = getimagesize($_FILES["imgslide"]["tmp_name"]);
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
						if ($_FILES["imgslide"]["size"] > 50000000) {
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
						    if (move_uploaded_file($_FILES["imgslide"]["tmp_name"], $target_file)) {
						        echo "The file ". basename( $_FILES["imgslide"]["name"]). " has been uploaded.";
						    } else {
						        echo "Sorry, there was an error uploading your file.";
						    }
						}
					$imgslide=base_url()."Fileupload/".basename($_FILES["imgslide"]["name"]);
					if($this->Ad_slideshow_model->insert_slideshow_model($imgslide))
					{
						redirect(base_url('admin/Ad_slideshow'));
					}
					else{
						echo 'fails';
					}
				}

				public function editslideshow($id)
				{
					// echo $id;
					$slideshow=$this->Ad_slideshow_model->get_slideshowbyID_model($id);
					$this->data['slideshow']=$slideshow;
					$this->load->view('admin/edit_slideshow',$this->data);
				}

				public function updateslideshow()
				{
					$id=$this->input->post('id');					
					$ten=$this->input->post('name');
					if($this->Ad_slideshow_model->update_slideshow_model($id,$ten))
					{
						redirect(base_url('adminpage/Ad_slideshow'));
					}
				}	

}

/* End of file Ad_slideshow.php */
/* Location: ./application/controllers/Ad_slideshow.php */