<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Blog_yonetim_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function blog_listele($id)
	{
		if(isset($id)){
			$this->db->where('blogId',$id);
			return $this->db->get("bloglar")->row();
		}else{
			return $this->db->get("bloglar")->result();
		}
	}


	public function blog_ekle($blog)
	{
		return $this->db->insert("bloglar",$blog);
	}

	public function blog_duzenle($id,$blog)
	{
		$this->db->where("blogId",$id);
		return $this->db->update("bloglar",$blog);
	}

	public function blog_sil($id)
	{
		$this->db->where("blogId",$id);
		return $this->db->delete("bloglar");
	}
}


 ?>