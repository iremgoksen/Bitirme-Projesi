<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Slider_yonetim_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function slider_listele($id)
	{
		if(isset($id)){
			$this->db->where('sliderId',$id);
			return $this->db->get("slider")->row();
		}else{
			return $this->db->get("slider")->result();
		}
	}


	public function slider_ekle($slider)
	{
		return $this->db->insert("slider",$slider);
	}

	public function slider_duzenle($id,$slider)
	{
		$this->db->where("sliderId",$id);
		return $this->db->update("slider",$slider);
	}

	public function slider_sil($id)
	{
		$this->db->where("sliderId",$id);
		return $this->db->delete("slider");
	}
}


 ?>