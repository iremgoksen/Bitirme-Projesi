<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hocalar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Hocalar_model","hoca");
		$this->load->model("Anasayfa_model","anasayfa");

	}

	public function index()
	{
		$data["hocalar"] = $this->hoca->hocalar();
		$data["ayarlar"] = $this->anasayfa->site_ayarlar();
		$data["sayfalar"] = $this->anasayfa->sayfalar();

		$this->load->view('header',$data);
		$this->load->view('hocalar',$data);
		$this->load->view('footer',$data);
	}
}