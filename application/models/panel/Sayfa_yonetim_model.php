<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
* 
*/
class Sayfa_yonetim_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function sayfa_listele($id)
	{
		if(isset($id)){
			$this->db->where('sayfaId',$id);
			return $this->db->get("sayfalar")->row();
		}else{
			return $this->db->get("sayfalar")->result();
		}
	}


	public function sayfa_ekle($sayfa)
	{
		return $this->db->insert("sayfalar",$sayfa);
	}

	public function sayfa_duzenle($id,$sayfa)
	{
		$this->db->where("sayfaId",$id);
		return $this->db->update("sayfalar",$sayfa);
	}

	public function sayfa_sil($id,$sayfa)
	{
		$this->db->where("sayfaId",$id);
		return $this->db->delete("sayfalar");
	}
}


 ?>