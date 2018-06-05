<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sorucevap extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Sorucevap_model","sorucevap");
		$this->load->model("Anasayfa_model","anasayfa");

	}

	public function index()
	{
		$data["sorucevaplar"] = $this->sorucevap->sorucevaplar();
		$data["ayarlar"] = $this->anasayfa->site_ayarlar();
		$data["sayfalar"] = $this->anasayfa->sayfalar();

		$this->load->view('header',$data);
		$this->load->view('sorucevap',$data);
		$this->load->view('footer',$data);
	}
}