<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Sorucevap_yonetim_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function sorucevap_listele($id)
	{
		if(isset($id)){
			$this->db->where('sorucevapId',$id);
			return $this->db->get("sorucevap")->row();
		}else{
			return $this->db->get("sorucevap")->result();
		}
	}


	public function sorucevap_ekle($sorucevap)
	{
		return $this->db->insert("sorucevap",$sorucevap);
	}

	public function sorucevap_duzenle($id,$sorucevap)
	{
		$this->db->where("sorucevapId",$id);
		return $this->db->update("sorucevap",$sorucevap);
	}

	public function sorucevap_sil($id)
	{
		$this->db->where("sorucevapId",$id);
		return $this->db->delete("sorucevap");
	}
}


 ?>