<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Do_edit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//lay du lieu tu bang (goi lai ham trong model)
		$this->load->model('Slides_model');
		$dl = $this->Slides_model->layDulieuSlide();
		//decode du lieu ve dang mang:
		$dl = json_decode($dl, true);
		$dl = array('mangdl' => $dl); // viết như thế này để mảng có tên và truyền dc hết nội dụng, nếu không thì sẽ chỉ truyền dc phần bên trong
		// echo '<pre>';
		// var_dump($dl);
		// echo '</pre>';
		//truyen mang nay sang view editSlide_view
		$this->load->view('editSlide_view', $dl);
	}
	public function suaSlide()
	{
		//lay du lieu tu view sau khi sua
		$title = $this->input->post('title'); // day la mot mang
		$description = $this->input->post('description');
		$button_link = $this->input->post('button_link');
		$button_text = $this->input->post('button_text');
		
		$cacanh = $_FILES['slide_image']['name'];
		$filevatly = $_FILES["slide_image"]["tmp_name"]; // file that
		$slide_image = array();
		$slide_image_old = $this->input->post('slide_image_old');

		for ($i = 0; $i < count($cacanh); $i++) {
			if(empty($cacanh[$i])){
				$slide_image[$i] = $slide_image_old[$i]; // neu khong up moi thi lay cu
			}else {
				$duongdan = 'uploads/'.$cacanh[$i];
				move_uploaded_file($filevatly[$i], $duongdan); // up file vao duong dan
				$slide_image[$i] = base_url().'uploads/'.$cacanh[$i];
			}
		} // het vong lap ta co $slide_image chua toan bo ten file minh can

		// dua thanh mang
		$tatcaslide = array();
		// dùng vong lặp để lấy các bộ phần tử ném vào mảng
		for ($i = 0; $i < count($title) ; $i++) {
			$tam = array();
			$tam['title'] = $title[$i];
			$tam['description'] = $description[$i];
			$tam['button_link'] = $button_link[$i];
			$tam['button_text'] = $button_text[$i];
			$tam['slide_image'] = $slide_image[$i];
			array_push($tatcaslide, $tam);
		}
		// echo '<pre>';
		// var_dump($tatcaslide);
		// echo '</pre>';

		//encode ve json
		$tatcaslide = json_encode($tatcaslide);

		//update vao db (goi ham trong model)
		$this->load->model('Slides_model');
		if($this->Slides_model->updateDulieuSlide($tatcaslide)){
			$this->load->view('thanhcong');
		}
	}

}

/* End of file Do_edit.php */
/* Location: ./application/controllers/Do_edit.php */