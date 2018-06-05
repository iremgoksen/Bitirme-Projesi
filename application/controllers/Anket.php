<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anket extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Anasayfa_model","anasayfa");
		$this->load->model("Anket_model","anket");
		if ($this->session->userdata("kullanici")==NULL) {
			redirect(base_url("hesap/giris"));
		}
		$this->data["ayarlar"] = $this->anasayfa->site_ayarlar();
		$this->data["sayfalar"] = $this->anasayfa->sayfalar();
		
	}

	public function index()
	{	
		$this->data["sorular"] = $this->anket->sorular();

		$this->load->view('header',$this->data);
		$this->load->view('anketler/anketler',$this->data);	
		$this->load->view('footer',$this->data);
	}

	public function muhendislik()
	{
		$this->data["sorular"]  = $this->anket->muhendislik(); 
		$this->data["cevaplar"] = $this->anket->uygunluk_secenekler();
		$this->load->view('header',$this->data);
		$this->load->view('anketler/muhendislik',$this->data);
		$this->load->view('footer',$this->data);
	}

	public function bilgisayar()
	{
		$this->data["sorular"] = $this->anket->bilgisayar();
		$this->data["cevaplar"] = $this->anket->uygunluk_secenekler();

		$this->load->view('header',$this->data);
		$this->load->view('anketler/bilgisayar',$this->data);
		$this->load->view('footer',$this->data);
	}

	public function elektronik()
	{
		$this->data["sorular"] = $this->anket->elektronik(); 
		$this->data["cevaplar"] = $this->anket->uygunluk_secenekler();

		$this->load->view('header',$this->data);
		$this->load->view('anketler/elektronik',$this->data);
		$this->load->view('footer',$this->data);
	}

	public function uygunluk_kaydet()
	{
		$sonuc = json_decode($this->input->post("sonuc",true));
		$this->anket->uygunluk_kaydet($sonuc);
	}

	public function muhendislik_sonuc()
	{		
		$this->load->view('header',$this->data);
		$this->load->view('anketler/muhendislik_sonuc',$this->data);
		$this->load->view('footer',$this->data);
	}

	public function uni()
	{
		$this->data["sorular"] = $this->anket->uni(); 
		$this->data["cevaplar"] = $this->anket->uni_sehir_secenekler();
		$this->data["tip"] = 0; //üni Tipi

		$this->load->view('header',$this->data);
		$this->load->view('anketler/uniSehir',$this->data);
		$this->load->view('footer',$this->data);
	}

	public function sehir()
	{
		$this->data["sorular"] = $this->anket->sehir(); 
		$this->data["cevaplar"] = $this->anket->uni_sehir_secenekler();
		$this->data["tip"] = 1; //sehir Tipi

		$this->load->view('header',$this->data);
		$this->load->view('anketler/uniSehir',$this->data);
		$this->load->view('footer',$this->data);
	}

	public function uni_sehir_kaydet()
	{
		$sonuc = json_decode($this->input->post("sonuc",true));
		$this->anket->uni_sehir_kaydet($sonuc);
	}

	public function uni_sehir_vektor()
	{
		echo json_encode($this->anket->uni_sehir_vektor(), JSON_UNESCAPED_UNICODE);
	}

	public function uni_sehir_sonuc()
	{
		$this->load->view('header',$this->data);
		$this->load->view('anketler/uniSehir_sonuc',$this->data);
		$this->load->view('footer',$this->data);
	}

	public function universite_bilgiler($uniId)
	{
		echo json_encode($this->anket->universite_bilgiler($uniId), JSON_UNESCAPED_UNICODE);
	}

	public function psikometrik()
	{
		$this->data["sorular"] = $this->anket->psikometrik(); 
		$this->data["tip"] = 0; //Psikometrik Tipi

		$this->load->view('header',$this->data);
		$this->load->view('anketler/psikometrik',$this->data);
		$this->load->view('footer',$this->data);
	}

	public function psikometrik_kaydet()
	{

		$sonuc = json_decode($this->input->post("sonuc",true));

		$psikoCevaplar = $this->anket->psikometrik_cevaplar();
		$cevaplar = array();

		$index = -1;

		foreach ($psikoCevaplar as $cevap) {
			if($cevap->soruCevap != "0"){
				$cevaplar[$cevap->psikoKategoriID] = new StdClass;
				$cevaplar[$cevap->psikoKategoriID]->kategoriAd = $cevap->psikoKategoriAd ;
				$cevaplar[$cevap->psikoKategoriID]->kategoriSoruSayisi = 0;
				$cevaplar[$cevap->psikoKategoriID]->dogruSoruSayisi = 0;
			}
			

		}

		foreach ($psikoCevaplar as $cevap) {
			if($cevap->soruCevap != "0"){
				$index++;
			}
			if($cevap->soruCevap != "0"){

				$cevaplar[$cevap->psikoKategoriID]->kategoriSoruSayisi += 1 ;

				foreach ($psikoCevaplar as $cevap) {
					if($cevap->soruID == $sonuc[$index]->soruID ){
						
						if($cevap->soruCevap == $sonuc[$index]->cevapMetni){
							$cevaplar[$cevap->psikoKategoriID]->dogruSoruSayisi += 1 ;
						}

					}
				}	
			
			}
		}

		$this->session->set_userdata("psikoSonuc",$cevaplar);

		$this->anket->psikometrik_kaydet($sonuc);
	}

	public function psikometrik_sonuc()
	{
		$this->data["sonuclar"] = $this->session->userdata("psikoSonuc");

		$this->load->view('header',$this->data);
		$this->load->view('anketler/psikometrik_sonuc',$this->data);
		$this->load->view('footer',$this->data);
	}

	public function cikis()
	{
		$this->session->unset_userdata("kullanici");
		redirect(base_url("hesap"));
	}




}