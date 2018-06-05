<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarifeler extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Tarifeler_model","tarife");
		$this->load->model("Anasayfa_model","anasayfa");

	}

	public function index()
	{
		$data["tarifeler"] = $this->tarife->tarifeler();
		$data["ayarlar"] = $this->anasayfa->site_ayarlar();
		$data["sayfalar"] = $this->anasayfa->sayfalar();

		$this->load->view('header',$data);
		$this->load->view('tarifeler',$data);
		$this->load->view('footer',$data);
	}
}