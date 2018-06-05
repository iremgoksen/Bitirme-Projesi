<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Yorum_yonetim_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function yorum_listele($id)
	{
		if(isset($id)){
			$this->db->where('yorumId',$id);
			return $this->db->get("yorumlar")->row();
		}else{
			return $this->db->get("yorumlar")->result();
		}
	}


	public function yorum_ekle($yorum)
	{
		return $this->db->insert("yorumlar",$yorum);
	}

	public function yorum_duzenle($id,$yorum)
	{
		$this->db->where("yorumId",$id);
		return $this->db->update("yorumlar",$yorum);
	}

	public function yorum_sil($id)
	{
		$this->db->where("yorumId",$id);
		return $this->db->delete("yorumlar");
	}
}


 ?>