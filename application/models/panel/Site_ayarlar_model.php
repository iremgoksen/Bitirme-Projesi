<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_ayarlar_model extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}

	public function site_ayarlari_kaydet($ayarlar)
	{
		if($this->db->count_all("siteayarlar") > 0){
			return $this->db->update("siteayarlar",$ayarlar);
		}else{
			return $this->db->insert("siteayarlar",$ayarlar);
		}

	}

	public function ayarlar()
	{
		return $this->db->get("siteayarlar")->row();
	}
	
}

?>