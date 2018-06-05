<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Hizmetler_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function kategoriler()
	{
		$this->db->where("kategoriTipi",0);
		return $this->db->get("kategoriler")->result();
		
	}

	public function hizmetler()
	{
		return $this->db->get("hizmetler")->result();
	}

}


 ?>