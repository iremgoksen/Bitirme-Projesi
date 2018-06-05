<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Sorucevap_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}
	public function sorucevaplar()
	{
		return $this->db->get("sorucevap")->result();
	}
		
}


 ?>