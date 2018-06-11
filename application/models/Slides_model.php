<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slides_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function layDulieuSlide()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'slides_topbanner');
		$dl = $this->db->get('homepageAttr'); // lấy hàng mà chứa gía trị của cột tenthuocttinh là slide_topbanner trong bảng homepageAttr
		$dl = $dl->result_array();
		foreach ($dl as $value) {
			$tg = $value['giatrithuoctinh'];
		}
		return $tg;
	}
	public function updateDulieuSlide($dulieucanupdate)
	{
		$chuanbidulieu = array(
			'tenthuoctinh'=> 'slides_topbanner',
			'giatrithuoctinh'=> $dulieucanupdate
			);
		$this->db->where('tenthuoctinh', 'slides_topbanner');
		if($this->db->update('homepageAttr', $chuanbidulieu)){
			$this->load->view('thanhcong');
		}
	}
	public function booking($tenkh,$email,$sdt,$ngaydatban,$giodatban,$songuoi)
	{
		$khachhang = array(
			'tenkh' => $tenkh,
			'email' => $email,
			'sdt' => $sdt,
			'ngaydatban' => $ngaydatban,
			'giodatban' => $giodatban,
			'songuoi' => $songuoi
			);
		return $this->db->insert('dat_ban', $khachhang);
	}

}

/* End of file slide_model.php */
/* Location: ./application/models/slide_model.php */