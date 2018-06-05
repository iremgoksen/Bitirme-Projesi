<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Duyurular extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Duyurular_model","duyurular");
		$this->load->model("Anasayfa_model","anasayfa");
		$this->load->library('pagination');
	}

	public function sayfa()
	{
			
		$config['base_url'] = base_url("duyurular/sayfa/");
	    $config['total_rows'] = count(@$this->duyurular->duyurular());
	    $config['per_page'] = 6;
	    $config['first_link'] = '<a href="#"><i class="zmdi zmdi-chevron-right"></i></a>';
	    $config['last_link'] = '<a href="#"><i class="zmdi zmdi-chevron-left"></i></a>';
	    $config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
	    
	    $this->pagination->initialize($config);
    	$data["sayfaLinkleri"] =  explode('&nbsp;',$this->pagination->create_links() );
		
		if($this->uri->segment(3)){
			$limit = ($this->uri->segment(3)) ;
		}else{
			$limit = 0;
		}
		
		$data["duyurular"] = @$this->duyurular->duyurular();
		$data["sayfalar"]  = $this->anasayfa->sayfalar();
		$data["ayarlar"]   = $this->anasayfa->site_ayarlar();

		$this->load->view('header',$data);
		$this->load->view('duyurular',$data);
		$this->load->view('footer',$data);
	}

	public function duyuru_icerik($id)
	{
		$data["duyurular"] = $this->anasayfa->duyurular();
		$data["duyuru"] = $this->duyurular->duyuru($id);
		$data["sayfalar"] = $this->anasayfa->sayfalar();
		$data["ayarlar"] = $this->anasayfa->site_ayarlar();

		$this->load->view('header',$data);
		$this->load->view('duyuru_ayrinti',$data);
		$this->load->view('footer',$data);
	}

}