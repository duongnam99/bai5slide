<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tin_model');
	}

	public function index()
	{
		
	}
	public function danhmuctin()
	{
		
		$ketqua = $this->Tin_model->loadDanhsach();
		$ketqua = array('dulieu' => $ketqua);
		$this->load->view('Danhmuctin_view',$ketqua);
	}
	public function themdanhmuc()
	{
		$tendanhmuc = $this->input->post('tendanhmuc');
		$this->load->model('Tin_model');
		if($this->Tin_model->insertDanhmuc($tendanhmuc)){
			$this->load->view('thanhcong1');
		}else{
			$this->load->view('thatbai1');
		}
	}
	public function suadanhmuc($iddanhmuc)
	{
		$dl = $this->Tin_model->getDataById($iddanhmuc);
		$dl = array('mangdl' => $dl);
		$this->load->view('suatendanhmuc', $dl, FALSE);
	}
	public function updateDanhmuc()
	{
		$id = $this->input->post('id');
		$tendanhmuc = $this->input->post('tendanhmuc');
		
		if($this->Tin_model->updateById($id,$tendanhmuc)){
			$this->load->view('thanhcong1');
		}else{
			$this->load->view('thatbai1');
		}
	}
	public function xoadanhmuc($id)
	{
		if($this->Tin_model->deleteById($id)){
			$this->load->view('thanhcong1');
		}else{
			$this->load->view('thatbai1');
		}
	}
	public function addJquery()
	{
		$tendanhmuc = $this->input->post('tendanhmuc');
		$this->Tin_model->insertDanhmuc($tendanhmuc);
		echo json_encode($this->db->insert_id());
	}
	public function quanlitin()
	{
		$dl1 = $this->Tin_model->loadDanhsach();
		$dl2 = $this->Tin_model->loadDanhsachTin();
		$dulieu = array(
			'dulieudanhmuc' => $dl1,
			'dulieutin' => $dl2
			);
		$this->load->view('Tin_view', $dulieu);
	}
	public function themmoitin()
	{
		// xu li phan anh tin
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["anhtin"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["anhtin"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check file size
		// if ($_FILES["anhtin"]["size"] > 5000000) {
		//     echo "Sorry, your file is too large.";
		//     $uploadOk = 0;
		// }
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
		    if (move_uploaded_file($_FILES["anhtin"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["anhtin"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}

		$anhtin = base_url() . $target_file;

		$trichdan = $this->input->post('trichdan');
		$tieude = $this->input->post('tieude');
		$iddanhmuc = $this->input->post('iddanhmuc');
		$noidungtin = $this->input->post('noidungtin');
		if($this->Tin_model->insertTin($tieude,$iddanhmuc,$noidungtin,$anhtin,$trichdan)){
			$this->load->view('thanhcong2');
		}else{
			$this->load->view('thatbai2');
		}
	}
	public function suatin($id)
	{
		$ketqua = $this->Tin_model->getTinbyId($id);
		$tendanhmuc = $this->Tin_model->getTendanhmucByidTin($id);
		$dulieu = array(
			'dulieusua' => $ketqua,
			'tendanhmuc' => $tendanhmuc
			);
		$this->load->view('tin_sua', $dulieu);

	}
	public function luutindasua()
	{
		$anhtincu = $this->input->post('anhtincu');
		$anhtin = $_FILES['anhtin']['name'];
		if(empty($anhtin)){
			$anhtin = $anhtincu;
		}else{
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["anhtin"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["anhtin"]["tmp_name"]);
			    if($check !== false) {
			        echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			        echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			// Check file size
			// if ($_FILES["anhtin"]["size"] > 5000000) {
			//     echo "Sorry, your file is too large.";
			//     $uploadOk = 0;
			// }
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
			    if (move_uploaded_file($_FILES["anhtin"]["tmp_name"], $target_file)) {
			        echo "The file ". basename( $_FILES["anhtin"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}

			$anhtin = base_url() . $target_file;
		}

		$trichdan = $this->input->post('trichdan');
		$tieude = $this->input->post('tieude');
		$iddanhmuc = $this->input->post('iddanhmuc');
		$noidungtin = $this->input->post('noidungtin');
		$id = $this->input->post('id');
		if($this->Tin_model->editTinbyId($id,$tieude,$iddanhmuc,$noidungtin,$anhtin,$trichdan)){
			$this->load->view('thanhcong2');
		}else{
			$this->load->view('thatbai2');
		}
	}
	public function xoatin($id)
	{
		if($this->Tin_model->deleteTinbyId($id)){
			$this->load->view('thanhcong2');
		}else{
			$this->load->view('thatbai2');
		}
	}
}

/* End of file Tin.php */
/* Location: ./application/controllers/Tin.php */