<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Blog_model","blog");
		$this->load->model("Anasayfa_model","anasayfa");
		$this->load->library('pagination');
	}

	

	public function sayfa()
	{
		$config['base_url'] = base_url("blog/sayfa/");
	    $config['total_rows'] = count(@$this->blog->bloglar());
	    $config['per_page'] = 6;
	    $config['first_link'] = '';
	    $config['last_link'] = '';
	    $config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
	    $this->pagination->initialize($config);

    	$data["sayfaLinkleri"] =  explode('&nbsp;',$this->pagination->create_links() );
		if($this->uri->segment(3)){
			$limit = ($this->uri->segment(3)) ;
		}else{
			$limit = 0;
		}


		$data["bloglar"] = $this->blog->bloglar($limit);
		$data["ayarlar"] = $this->anasayfa->site_ayarlar();
		$data["sayfalar"] = $this->anasayfa->sayfalar();
		
		$this->load->view('header',$data);
		$this->load->view('blog',$data);
		$this->load->view('footer',$data);
	}


	public function blog_icerik($id)
	{
		$data["blog"] = $this->blog->blog($id);
		$data["ayarlar"] = $this->anasayfa->site_ayarlar();
		$data["sayfalar"] = $this->anasayfa->sayfalar();
		$data["bloglar"] = $this->anasayfa->bloglar();


		$this->load->view('header',$data);
		$this->load->view('blog_ayrinti',$data);
		$this->load->view('footer',$data);
	}
}