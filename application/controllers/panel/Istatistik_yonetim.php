<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Istatistik_yonetim extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata("kullaniciBilgiler") == NULL)
		{
			$this->session->set_flashdata('mesaj',"Lütfen Giriş Yapınız!");
			redirect(base_url()."panel");
		}
		$this->load->model("panel/istatistik_yonetim_model","istatistik");
	}
		

	public function index()
	{
		@$data["istatistikler"] = $this->istatistik->istatistik_listele();

		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/istatistik_yonetim/istatistik_listesi",$data);
		$this->load->view("panel/footer");
	}


	public function yeni_istatistik()
	{
		@$data["istatistikler"]=$this->istatistik->istatistik_listele();
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/istatistik_yonetim/istatistik_ekle",$data);
		$this->load->view("panel/footer");

	}

	public function istatistik_ekle()
	{
		$istatistik = array('istatistikAd' => $this->input->post("istatistikAd",TRUE),
					  'istatistikDeger' => $this->input->post("istatistikDeger",TRUE));

        if($this->istatistik->istatistik_ekle($istatistik)){

        	$mesaj = array('icerik' => $istatistik["istatistikAd"]." Eklendi",'tip'=>"success" );
			$this->session->set_flashdata("mesaj",$mesaj);
			redirect(base_url()."panel/istatistik_yonetim");

		}else{

        	$mesaj = array('icerik' => "istatistik Eklenemedi!",'tip'=>"danger" );
			$this->session->set_flashdata("mesaj",$mesaj);
			redirect(base_url()."panel/istatistik_yonetim");

		}
    

	}

	public function istatistik_duzenle($id)
	{
		$data["istatistik"]=$this->istatistik->istatistik_listele($id);
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/istatistik_yonetim/istatistik_duzenle",$data);
		$this->load->view("panel/footer");
	}

	public function istatistik_sil($id)
	{
		if($this->istatistik->istatistik_sil($id)){
        	$mesaj = array('icerik' => "istatistik Silindi!",'tip'=>"success" );
			$this->session->set_flashdata('mesaj',$mesaj);
			redirect(base_url()."panel/istatistik_yonetim");
		}
	}

	public function istatistik_guncelle($id)
	{
		$istatistik = array('istatistikAd' => $this->input->post("istatistikAd",TRUE),
					  'istatistikDeger' => $this->input->post("istatistikDeger",TRUE));
		

        if($this->istatistik->istatistik_duzenle($id,$istatistik)){
        	$mesaj = array('icerik' => "istatistik Düzenlendi.",'tip'=>"success" );
			$this->session->set_flashdata('mesaj',$mesaj);
			redirect(base_url()."panel/istatistik_yonetim");

		}else{

        	$mesaj = array('icerik' => "istatistik Düzenlenemedi!",'tip'=>"danger" );
			$this->session->set_flashdata('mesaj',$mesaj);
			redirect(base_url()."panel/istatistik_yonetim");

		}
        
	}

}


 ?>