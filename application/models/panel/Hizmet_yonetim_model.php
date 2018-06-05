<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Hizmet_yonetim_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function hizmet_listele($id)
	{
		if(isset($id)){
			$this->db->where('hizmetId',$id);
			return $this->db->get("hizmetler")->row();
		}else{
			return $this->db->get("hizmetler")->result();
		}
	}

	public function hizmet_ekle($hizmet)
	{
		return $this->db->insert("hizmetler",$hizmet);
	}

	public function hizmet_duzenle($id,$hizmet)
	{
		$this->db->where("hizmetId",$id);
		return $this->db->update("hizmetler",$hizmet);
	}

	public function hizmet_sil($id,$hizmet)
	{
		$this->db->where("hizmetId",$id);
		return $this->db->delete("hizmetler");
	}
}


 ?>