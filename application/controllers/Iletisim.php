<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iletisim extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Anasayfa_model","anasayfa");

	}

	public function index()
	{
		$data["ayarlar"] = $this->anasayfa->site_ayarlar();
		$data["sayfalar"] = $this->anasayfa->sayfalar();

		$this->load->view('header',$data);
		$this->load->view('iletisim',$data);
		$this->load->view('footer',$data);
	}
}