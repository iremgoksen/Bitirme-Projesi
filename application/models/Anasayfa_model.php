<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Anasayfa_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function site_ayarlar()
	{
		
		return $this->db->get("siteayarlar")->row();
		
	}

	public function slider()
	{
		
		return $this->db->get("slider")->result();
		
	}

	public function duyurular()
	{
		$this->db->where("duyuruDurum",1);
		return $this->db->get("duyurular")->result();
	}

	public function istatistikler()
	{
		return $this->db->get("istatistikler")->result();
	}

	public function bloglar()
	{
		$this->db->where("blogDurum",1);
		$this->db->order_by("blogId","DESC");
		$this->db->limit(3,0);
		return $this->db->get("bloglar")->result();
	}

	public function hocalar()
	{
		return $this->db->get("hocalar")->result();
	}

	public function sayfalar()
	{
		return $this->db->get("sayfalar")->result();
	}

	public function sayfa($id)
	{
		$this->db->where("sayfaId",$id);
		return $this->db->get("sayfalar")->row();
	}
}


 ?>