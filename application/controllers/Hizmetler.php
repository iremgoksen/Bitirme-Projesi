<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hizmetler extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Hizmetler_model","hizmetler");
		$this->load->model("Anasayfa_model","anasayfa");

	}

	public function index()
	{
		$data["hizmetler"] = $this->hizmetler->hizmetler();
		$data["kategoriler"] = $this->hizmetler->kategoriler();
		$data["ayarlar"] = $this->anasayfa->site_ayarlar();
		$data["sayfalar"] = $this->anasayfa->sayfalar();

		$this->load->view('header',$data);
		$this->load->view('hizmetler',$data);
		$this->load->view('footer',$data);
	}

}