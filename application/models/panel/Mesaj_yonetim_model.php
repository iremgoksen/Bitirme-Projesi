<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
* 
*/
class Mesaj_yonetim_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function mesaj_listele($id)
	{
		if(isset($id)){
			if($this->mesaj_okundu($id))
			{
				$this->db->where('mesajId',$id);
				return $this->db->get("mesajlar")->row();
			}
		}else{
		
			$this->db->order_by("mesajId","DESC");
			return $this->db->get("mesajlar")->result();
		}
	}

	public function mesaj_okundu($id)
	{
		$this->db->where('mesajId',$id);
		$this->db->set('durum',1);
		return $this->db->update("mesajlar");
	}


	public function mesaj_gonder($mesaj)
	{
		
	 	return $this->db->insert("mesajlar",$mesaj);
		
	}

	public function mesaj_duzenle($id,$mesaj)
	{
		$this->db->where("mesajId",$id);
		return $this->db->update("mesajlar",$mesaj);
	}

	public function mesaj_sil($id)
	{
		$this->db->where("mesajId",$id);
	 	return $this->db->delete("mesajlar");
		
	}
}


 ?>