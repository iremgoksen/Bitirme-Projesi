<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Blog_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}
	public function bloglar($limit)
	{
		if(isset($limit)){
			$limit = (int)$limit;
			return $this->db->get("bloglar",6,$limit)->result();		
		}else{
			return $this->db->get("bloglar")->result();		
		}
	}

	public function blog($id)
	{
		$this->db->where("blogId",$id);
		return $this->db->get("bloglar")->row();
	}

	
}


 ?>