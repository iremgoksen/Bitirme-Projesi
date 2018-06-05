<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Giris_yonetim extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("panel/Giris_yonetim_model","giris");
		
	}

	public function index()
	{
		if($this->session->userdata("kullaniciBilgiler"))
		{
			$data["sayfaSayisi"] = $this->giris->sayfaSayisi();
			$this->load->view("panel/header");
			$this->load->view("panel/sidebar");
			$this->load->view("panel/index",$data);
			$this->load->view("panel/footer");	

		}else{

			$this->load->view("panel/header");
			$this->load->view("panel/giris");
			$this->load->view("panel/footer");
		
		}
		
	}

	public function upload($value='')
	{
		$this->load->view("panel/header");
		$this->load->view("panel/upload");
		$this->load->view("panel/footer");

	}

	public function resim_yukle()
	{
		$config['upload_path']          = 'public/admin/uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 200;
        $config['max_width']            = 2048;
        $config['max_height']           = 768;


        $this->load->library('upload', $config);
        
        if ( $this->upload->do_upload('resim'))
        {
        	$mesaj = array("icerik"=>"Eklendi." ,"tip"=> "success" );
            var_dump($mesaj);
			$this->session->set_flashdata('mesaj',$mesaj);
			redirect(base_url()."panel/giris_yonetim/upload");
        }
        else
        {
			$error = array('error' => $this->upload->display_errors());
            var_dump($error);
        }
	}

	public function giris()
	{
		$kullaniciAdi = $this->input->post("kullaniciAdi",TRUE);
		$sifre = $this->input->post("sifre",TRUE);

		$data = $this->giris->giris($kullaniciAdi,$sifre);
		

		if($data){

			$this->session->set_userdata('kullaniciBilgiler', $data);

		}else{

			$this->session->set_flashdata('mesaj', "Kullanıcı adı veya şifre hatalı tekrar deneyiniz.");

		}
		
		redirect(base_url()."panel");


	}

	public function cikis()
	{
		$this->session->unset_userdata("kullaniciBilgiler");
		redirect(base_url()."panel");
	}

}

 ?>