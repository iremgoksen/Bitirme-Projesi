<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurumsal extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Anasayfa_model","anasayfa");

	}

	public function index($id)
	{
		$data["ayarlar"] = $this->anasayfa->site_ayarlar();
		$data["sayfalar"] = $this->anasayfa->sayfalar();
		$data["sayfa"] = $this->anasayfa->sayfa($id);
		
		if(empty($data["sayfa"])){
			redirect(base_url().'sayfa-bulunamadi');
		}

		$this->load->view('header',$data);
		$this->load->view('kurumsal',$data);
		$this->load->view('footer',$data);
	}
}