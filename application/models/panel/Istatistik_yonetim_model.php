<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Istatistik_yonetim_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function istatistik_listele($id)
	{
		if(isset($id)){
			$this->db->where('istatistikId',$id);
			return $this->db->get("istatistikler")->row();
		}else{
			return $this->db->get("istatistikler")->result();
		}
	}


	public function istatistik_ekle($istatistik)
	{
		return $this->db->insert("istatistikler",$istatistik);
	}

	public function istatistik_duzenle($id,$istatistik)
	{
		$this->db->where("istatistikId",$id);
		return $this->db->update("istatistikler",$istatistik);
	}

	public function istatistik_sil($id)
	{
		$this->db->where("istatistikId",$id);
		return $this->db->delete("istatistikler");
	}
}


 ?>