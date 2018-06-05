<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Duyurular_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function site_ayarlar()
	{
		
		return $this->db->get("siteayarlar")->row();
		
	}

	public function duyurular($limit)
	{
		if(isset($limit)){
			return $this->db->get("duyurular",6,$limit)->result();
		}else{
			return $this->db->get("duyurular")->result();
		}
	}

	public function duyuru($id)
	{
		$this->db->where("duyuruId",$id);
		return $this->db->get("duyurular")->row();
	}

}


 ?>