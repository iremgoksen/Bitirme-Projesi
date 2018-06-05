<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
* 
*/
class Hocalar_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function site_ayarlar()
	{
		
		return $this->db->get("siteayarlar")->row();
		
	}

	public function hocalar()
	{
		return $this->db->get("hocalar")->result();
	}

}


 ?>