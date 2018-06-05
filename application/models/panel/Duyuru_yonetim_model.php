<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Duyuru_yonetim_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function duyuru_listele($id)
	{
		if(isset($id)){
			$this->db->where('duyuruId',$id);
			return $this->db->get("duyurular")->row();
		}else{
			return $this->db->get("duyurular")->result();
		}
	}


	public function duyuru_ekle($duyuru)
	{
		return $this->db->insert("duyurular",$duyuru);
	}

	public function duyuru_duzenle($id,$duyuru)
	{
		$this->db->where("duyuruId",$id);
		return $this->db->update("duyurular",$duyuru);
	}

	public function duyuru_sil($id)
	{
		$this->db->where("duyuruId",$id);
		return $this->db->delete("duyurular");
	}
}


 ?>