<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tin_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertDanhmuc($tendanhmuc)
	{
		$dl = array(
			'tendanhmuc' => $tendanhmuc
			);
		return $this->db->insert('danhmuctin', $dl);
	}
	public function loadDanhsach()
	{
		$this->db->select('*');
		$dl = $this->db->get('danhmuctin');
		$dl = $dl->result_array();
		return $dl;
	}
	public function getDataById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$dl = $this->db->get('danhmuctin');
		$dl = $dl->result_array();
		return $dl;
	}
	public function updateById($id,$tendanhmuc)
	{
		$dlupdate = array(
			'id' =>$id,
			'tendanhmuc' =>$tendanhmuc
			);
		$this->db->where('id', $id);
		return $this->db->update('danhmuctin', $dlupdate);
	}
	public function deleteById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('danhmuctin');
	}
	// model cho tin tuc
	public function insertTin($tieude,$iddanhmuc,$noidungtin,$anhtin,$trichdan)
	{
		$dulieu = array(
			'tieude' => $tieude,
			'iddanhmuc' => $iddanhmuc,
			'noidungtin' => $noidungtin,
			'anhtin' => $anhtin,
			'trichdan' => $trichdan

			);
		$this->db->insert('tintuc', $dulieu);
		return  $this->db->insert_id();
	}
	public function loadDanhsachTin()
	{
		$this->db->select('*');
		$dl = $this->db->get('tintuc');
		$dl = $dl->result_array();
		return $dl;

	}
	public function editTinbyId($id,$tieude,$iddanhmuc,$noidungtin,$anhtin,$trichdan)
	{
		$dulieusua = array(
			'id' => $id,
			'tieude' => $tieude,
			'iddanhmuc' => $iddanhmuc,
			'noidungtin' => $noidungtin,
			'anhtin' => $anhtin,
			'trichdan' => $trichdan
			);
		$this->db->where('id', $id);
		return $this->db->update('tintuc', $dulieusua);
	}
	public function getTinbyId($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$ketqua = $this->db->get('tintuc');
		$ketqua = $ketqua->result_array();
		return $ketqua;
	}
	public function getTendanhmucByidTin($id)
	{
		$this->db->select('*');
		$this->db->from('danhmuctin');
		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id', 'left');
		
		$this->db->where('tintuc.id', $id);
		$ketqua = $this->db->get();
		$ketqua = $ketqua->result_array();
		$ten = $ketqua[0]['tendanhmuc'];
		return $ten;
	}
	public function deleteTinbyId($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('tintuc');
	}
	public function loadDanhsachTin2()
	{
		$this->db->select('*');

		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id', 'left');
		$ketqua = $this->db->get('danhmuctin', 2, 0);
		$ketqua = $ketqua->result_array();
		return $ketqua;
	}
	public function soTrang()
	{
		$sotintrong1trang = 2;
		$this->db->select('*');
		$ketqua2 = $this->db->get('tintuc');
		$ketqua2 = $ketqua2->result_array();
		$soluongtin = count($ketqua2);
		$sotrang = round($soluongtin/$sotintrong1trang);
		return $sotrang;
	}
	public function loadTintheoTrang($trangthumay)
	{
		$this->db->select('*');

		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id', 'left');
		$vitri = ($trangthumay-1)*2;
		$ketqua = $this->db->get('danhmuctin', 2, $vitri);
		$ketqua = $ketqua->result_array();
		return $ketqua;
	}
}

/* End of file Tin_model.php */
/* Location: ./application/models/Tin_model.php */