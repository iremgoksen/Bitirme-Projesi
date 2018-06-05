<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Yonetim_ayarlar extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata("kullaniciBilgiler") == NULL)
		{
			$this->session->set_flashdata('mesaj',"Lütfen Giriş Yapınız!");
			redirect(base_url()."panel");
		}
		$this->load->model("panel/Yonetim_ayarlar_model","yonetici");
	}
	
	public function index()
	{
		$data["yoneticiler"] = $this->yonetici->yonetici_listesi();
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/kullanici_yonetim/yonetici_listesi",$data);
		$this->load->view("panel/footer");
		
	}

	public function yonetici_sil($id)
	{		
		if($this->yonetici->yonetici_sil($id)){

			$mesaj = array('icerik' =>"Yönetici Silindi." ,'tip'=>"success");
			$this->session->set_flashdata('mesaj',$mesaj);
			redirect(base_url()."panel/yonetim_ayarlar/");

		}else{

			$mesaj = array('icerik' =>"Yönetici Silinemedi!" ,'tip'=>"danger");
			$this->session->set_flashdata('mesaj',$mesaj);
			redirect(base_url()."panel/yonetim_ayarlar/");

		}

	}

	public function yeni_yonetici()
	{
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/kullanici_yonetim/yonetici_ekle");
		$this->load->view("panel/footer");
	}

	public function yonetici_ekle()
	{
		$kullanici = array('ad' =>	$this->input->post("ad",TRUE),
					  	   'soyad' => $this->input->post("soyad",TRUE),
					  	   'kullaniciAdi' => $this->input->post("kullaniciAdi",TRUE),
					       'sifre' => $this->input->post("sifre",TRUE),
					  	   'mail' => $this->input->post("mail",TRUE),
					       'rutbe' => 1 );
		
		if($this->yonetici->yonetici_ekle($kullanici)){

			$mesaj = array('icerik' =>$kullanici["kullaniciAdi"]." Eklendi." ,"tip"=>"success");
			$this->session->set_flashdata('mesaj',$mesaj);
			redirect(base_url()."panel/yonetim_ayarlar/");

		}else{

			$mesaj = array('icerik' =>$kullanici["kullaniciAdi"]." Eklenemedi!" ,"tip"=>"danger");
			$this->session->set_flashdata('mesaj',$mesaj);
			redirect(base_url()."panel/yonetim_ayarlar/");
		}

	}

	public function yonetici_duzenle($id)
	{
		$data["yonetici"] = $this->yonetici->yonetici_duzenle($id);
		if(!empty($data["yonetici"])){
			
			$this->load->view("panel/header");
			$this->load->view("panel/sidebar");
			$this->load->view("panel/kullanici_yonetim/yonetici_duzenle",$data);
			$this->load->view("panel/footer");

		}else{

			redirect(base_url()."panel/yonetim_ayarlar/");

		}
		
	}

	public function yonetici_guncelle($id)
	{
		$kullanici = array('ad' =>	$this->input->post("ad",TRUE),
					  	   'soyad' => $this->input->post("soyad",TRUE),
					  	   'kullaniciAdi' => $this->input->post("kullaniciAdi",TRUE),
					       'sifre' => $this->input->post("sifre",TRUE),
					  	   'mail' => $this->input->post("mail",TRUE),
					       'rutbe' => 1 );
		
		if($this->yonetici->yonetici_guncelle($id,$kullanici)){

			$mesaj = array('icerik' =>$kullanici["kullaniciAdi"]." Düzenlendi." ,'tip'=>"success");
			$this->session->set_flashdata('mesaj',$mesaj);
			redirect(base_url()."panel/yonetim_ayarlar/");

		}else{

			$mesaj = array('icerik' =>$kullanici["kullaniciAdi"]." Düzenlenemedi!" ,'tip'=>"danger");
			$this->session->set_flashdata('mesaj',$mesaj);
			redirect(base_url()."panel/yonetim_ayarlar/");
		}
	}
}


 ?>