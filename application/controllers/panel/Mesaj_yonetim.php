<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Mesaj_yonetim extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata("kullaniciBilgiler") == NULL)
		{
			$this->session->set_flashdata('mesaj',"Lütfen Giriş Yapınız!");
			redirect(base_url()."panel");
		}
		$this->load->model("panel/Mesaj_yonetim_model","mesaj");
	}
		

	public function index()
	{
		@$data["mesajlar"]=$this->mesaj->mesaj_listele();

		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/mesaj_yonetim/mesaj_listesi",$data);
		$this->load->view("panel/footer");
	}


	public function yeni_mesaj()
	{
		@$data["mesajlar"]=$this->mesaj->mesaj_listele();
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/mesaj_yonetim/mesaj_ekle",$data);
		$this->load->view("panel/footer");

	}

	public function mesaj_listele($id)
	{
		
		echo json_encode($this->mesaj->mesaj_listele($id));

	}

	public function mesaj_sil($id)
	{
		if($this->mesaj->mesaj_sil($id)){

			$mesaj = array('icerik' => "Mesaj Eklendi.","tipi","success" );
			redirect(base_url()."panel/mesaj_yonetim");

		}else{

			$mesaj = array('icerik' => "Mesaj Eklenemedi!","tipi","danger" );
			redirect(base_url()."panel/mesaj_yonetim");

		}
	}

	public function mesaj_guncelle($id)
	{

		if($this->mesaj->mesaj_duzenle($id,$mesaj)){

			$mesaj = array('icerik' => "Mesaj Düzenlendi.","tipi","success" );
			redirect(base_url()."panel/mesaj_yonetim");
		
		}else{
		
			$mesaj = array('icerik' => "Mesaj Düzenlenemedi!","tipi","danger" );
			redirect(base_url()."panel/mesaj_yonetim");
		
		}
		
	}

}


 ?>