<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Kategori_yonetim_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function kategori_listele($kategoriTipi)
	{
		$this->db->where('kategoriTipi',$kategoriTipi);
		return $this->db->get("kategoriler")->result();
	}

	public function kategori_listele_id($id)
	{
		$this->db->where('kategoriId',$id);
		return $this->db->get("kategoriler")->row();
	}

	public function kategori_ekle($kategori,$kategoriTipi)
	{
		return $this->db->insert("kategoriler",$kategori);
	}

	public function kategori_duzenle($id,$kategori)
	{
		$this->db->where('kategoriId',$id);
		return $this->db->update("kategoriler",$kategori);
	}

	public function kategori_sil($id)
	{
		$this->db->where('kategoriId',$id);
		return $this->db->delete("kategoriler");
	}

}

 ?>