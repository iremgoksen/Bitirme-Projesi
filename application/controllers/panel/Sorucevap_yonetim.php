<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Sorucevap_yonetim extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata("kullaniciBilgiler") == NULL)
		{
			$this->session->set_flashdata('mesaj',"Lütfen Giriş Yapınız!");
			redirect(base_url()."panel");
		}
		$this->load->model("panel/Sorucevap_yonetim_model","sorucevap");
	}
		

	public function index()
	{
		@$data["sorucevaplar"] = $this->sorucevap->sorucevap_listele();

		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/sorucevap_yonetim/sorucevap_listesi",$data);
		$this->load->view("panel/footer");
	}


	public function yeni_sorucevap()
	{
		@$data["sorucevaplar"]=$this->sorucevap->sorucevap_listele();
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/sorucevap_yonetim/sorucevap_ekle",$data);
		$this->load->view("panel/footer");

	}

	public function sorucevap_ekle()
	{
		$sorucevap = array('soru' => $this->input->post("soru",TRUE),
						   'cevap' => $this->input->post("cevap",TRUE));

		
        if($this->sorucevap->sorucevap_ekle($sorucevap)){
        	$mesaj = array('icerik' => $sorucevap["soru"]." Eklendi.",'tip'=>"success" );
			redirect(base_url()."panel/sorucevap_yonetim");
		}else{
        	$mesaj = array('icerik' => "Soru Eklenemedi!",'tip'=>"danger" );
			redirect(base_url()."panel/sorucevap_yonetim");
        	
		}
        

	}

	public function sorucevap_duzenle($id)
	{
		$data["sorucevap"]=$this->sorucevap->sorucevap_listele($id);
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/sorucevap_yonetim/sorucevap_duzenle",$data);
		$this->load->view("panel/footer");
	}

	public function sorucevap_sil($id)
	{
		if($this->sorucevap->sorucevap_sil($id)){

        	$mesaj = array('icerik' => "Soru Silindi.",'tip'=>"success" );
			redirect(base_url()."panel/sorucevap_yonetim");

		}else{

        	$mesaj = array('icerik' => "Soru Silinemedi!",'tip'=>"danger" );
			redirect(base_url()."panel/sorucevap_yonetim");

		}
	}

	public function sorucevap_guncelle($id)
	{
		$sorucevap = array('soru' => $this->input->post("soru",TRUE),
						   'cevap' => $this->input->post("cevap",TRUE));
		
        if($this->sorucevap->sorucevap_duzenle($id,$sorucevap)){

        	$mesaj = array('icerik' => $sourcevap["soru"]." Düzenlendi.",'tip'=>"success" );
			redirect(base_url()."panel/sorucevap_yonetim");

		}else{

        	$mesaj = array('icerik' =>"Soru Düzenlenemedi!",'tip'=>"danger" );
			redirect(base_url()."panel/sorucevap_yonetim");

		}
      
		
	}

}


 ?>