<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Tarifeler_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}
	public function tarifeler()
	{
		return $this->db->get("tarifeler")->result();
	}
		
}


 ?>