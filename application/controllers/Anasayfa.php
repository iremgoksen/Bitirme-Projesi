<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anasayfa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Anasayfa_model","anasayfa");
	}

	public function index()
	{
		$data["ayarlar"] = $this->anasayfa->site_ayarlar();
		@$data["slider"] = $this->anasayfa->slider();
		$data["sayfalar"] = $this->anasayfa->sayfalar();
		$data["hocalar"] = $this->anasayfa->hocalar();
		$data["duyurular"] = $this->anasayfa->duyurular();
		$data["istatistikler"] = $this->anasayfa->istatistikler();
		$data["bloglar"] = $this->anasayfa->bloglar();

		$this->load->view('header',$data);
		$this->load->view('anasayfa');
		$this->load->view('footer',$data);

	}

	public function error()
	{
		$data["ayarlar"] = $this->anasayfa->site_ayarlar();
		$data["sayfalar"] = $this->anasayfa->sayfalar();
		
		$this->load->view('header',$data);
		$this->load->view('404');
		$this->load->view('footer',$data);
	}
}