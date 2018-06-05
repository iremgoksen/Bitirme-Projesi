<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hesap extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Anasayfa_model","anasayfa");
		$this->load->model("Hesap_model","hesap");

		$this->data["ayarlar"] = $this->anasayfa->site_ayarlar();
		$this->data["sayfalar"] = $this->anasayfa->sayfalar();
		
	}

	public function index()
	{	

		if ($this->session->userdata("kullanici")) {
			$this->data["kullanici"] = $this->hesap->hesap($this->session->userdata("kullanici")->kullaniciTckNo);
			
		}else{
			redirect(base_url("hesap/giris"));
			$this->session->set_flashdata('mesaj', "Lütfen giriş yapınız.");
		}

		$this->load->view('header',$this->data);
		$this->load->view('hesap',$this->data);			
		$this->load->view('footer',$this->data);
	}

	public function giris()
	{

		$this->load->view('header',$this->data);
		$this->load->view('giris',$this->data);
		$this->load->view('footer',$this->data);
	}

	public function giris_yap()
	{
		$kullaniciTckNo = $this->input->post("kullaniciTckNo",true);
		$sifre = $this->input->post("sifre",true);
		$sonuc = $this->hesap->giris($kullaniciTckNo,$sifre);

		if($sonuc != NULL && $sonuc->meslekID == 2){
			$this->session->set_userdata('kullanici', $sonuc);
		}else{
			$this->session->set_flashdata('mesaj', "Kullanıcı adı veya şifre hatalı tekrar deneyiniz.");
		}
		
		redirect(base_url("anket"));
	}

	public function kayit()
	{
		$this->load->view('header',$this->data);
		$this->load->view('kayit',$this->data);
		$this->load->view('footer',$this->data);
	}

	public function kayit_ol()
	{
		$kullanici = array(  'kullaniciTckNo' =>$this->input->post("kullaniciTckNo",true) ,
							 'kullaniciAd'=>$this->input->post("kullaniciAd",true),
							 'kullaniciSifre'=>$this->input->post("sifre",true),
							 'email'=>$this->input->post("email",true),
							 'ad'=>$this->input->post("ad",true),
							 'soyad'=>$this->input->post("soyad",true),
						);

		$sonuc = $this->hesap->kayit($kullanici);
		
		if($sonuc){

			if(is_object($sonuc)){
				$this->session->set_userdata('kullanici', $sonuc);
				redirect(base_url("hesap"));
			}else if ($sonuc == 2) {
				$this->session->set_flashdata('mesaj',"Bu kullanici Tc Kimlik No sistemimizde kayıtlı lütfen farklı bi kullanıcı adı giriniz!");
				redirect(base_url("hesap/kayit"));
			}else{
				$this->session->set_flashdata('mesaj',"Bu mail adresi sitemizde kayıtlı lütfen farkı bir mail adresi deneyiniz!");
				redirect(base_url("hesap/kayit"));
			}

		}else{
			$this->session->set_flashdata('mesaj',"Kayıt olurken bi hata oluştu lütfen daha sonra tekrar deneyiniz!");
			redirect(base_url("hesap/kayit"));
		}

		
	}

	public function profil_guncelle()
	{
		$kullanici = array(  'kullaniciTckNo' =>$this->input->post("kullaniciTckNo",true) ,
							 'kullaniciSifre'=>$this->input->post("sifre",true),
							 'email'=>$this->input->post("mail",true),
							 'ad'=>$this->input->post("ad",true),
							 'soyad'=>$this->input->post("soyad",true)
						);

		$kullaniciId = $this->session->userdata("kullanici")->kullaniciTckNo;
		
		if(!$this->hesap->profil_guncelle($kullaniciId,$kullanici))
			$this->session->set_flashdata('mesaj',"Güncelleme Yapılamadı!");

		redirect(base_url("hesap"));
	}

	public function cikis()
	{
		$this->session->unset_userdata("kullanici");
		redirect(base_url("hesap"));
	}




}