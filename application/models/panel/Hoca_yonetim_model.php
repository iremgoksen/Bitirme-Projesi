<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Hoca_yonetim_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function hoca_listele($id)
	{
		if(isset($id)){
			$this->db->where('hocaId',$id);
			return $this->db->get("hocalar")->row();
		}else{
			return $this->db->get("hocalar")->result();
		}
	}


	public function hoca_ekle($hoca)
	{
		return $this->db->insert("hocalar",$hoca);
	}

	public function hoca_duzenle($id,$hoca)
	{
		$this->db->where("hocaId",$id);
		return $this->db->update("hocalar",$hoca);
	}

	public function hoca_sil($id)
	{
		$this->db->where("hocaId",$id);
		return $this->db->delete("hocalar");
	}
}


 ?>