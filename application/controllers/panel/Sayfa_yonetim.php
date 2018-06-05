<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Sayfa_yonetim extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata("kullaniciBilgiler") == NULL)
		{
			$this->session->set_flashdata('mesaj',"Lütfen Giriş Yapınız!");
			redirect(base_url()."panel");
		}
		$this->load->model("panel/Sayfa_yonetim_model","sayfa");
	}
		

	public function index()
	{
		@$data["sayfalar"]=$this->sayfa->sayfa_listele();

		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/sayfa_yonetim/sayfa_listesi",$data);
		$this->load->view("panel/footer");
	}


	public function yeni_sayfa()
	{
		@$data["sayfalar"]=$this->sayfa->sayfa_listele();
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/sayfa_yonetim/sayfa_ekle",$data);
		$this->load->view("panel/footer");

	}

	public function sayfa_ekle()
	{
		$sayfa = array('sayfaBaslik' =>  $this->input->post("sayfaBaslik",TRUE),
					   'sayfaIcerik' =>  $this->input->post("sayfaIcerik",TRUE),
					   'sayfaTipi' => $this->input->post("sayfaTipi",TRUE),
					   'sayfaDurum' => 0 );

		//Sayfa gösterimi açık
		if($this->input->post("sayfaDurum",TRUE)!=NULL){
			$sayfa['sayfaDurum'] = 1; 
		}


		if($this->sayfa->sayfa_ekle($sayfa)){

			$mesaj = array('icerik' => $sayfa["sayfaBaslik"]." Eklendi.","tipi","success" );
			redirect(base_url()."panel/sayfa_yonetim");

		}else{

			$mesaj = array('icerik' => "Sayfa Eklenemedi!","tipi","danger" );
			redirect(base_url()."panel/sayfa_yonetim");
			
		}

	}

	public function sayfa_duzenle($id)
	{
		$data["sayfa"]=$this->sayfa->sayfa_listele($id);
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/sayfa_yonetim/sayfa_duzenle",$data);
		$this->load->view("panel/footer");
	}

	public function sayfa_sil($id)
	{
		if($this->sayfa->sayfa_sil($id)){

			$mesaj = array('icerik' => "Sayfa Silindi.","tip"=>"success");
			redirect(base_url()."panel/sayfa_yonetim");

		}else{

			$mesaj = array('icerik' => "Sayfa Silinemedi!","tip"=>"danger");
			redirect(base_url()."panel/sayfa_yonetim");
			
		}
	}

	public function sayfa_guncelle($id)
	{
		$sayfa = array('sayfaBaslik' =>  $this->input->post("sayfaBaslik",TRUE),
					   'sayfaIcerik' =>  $this->input->post("sayfaIcerik",TRUE),
					   'sayfaTipi' => $this->input->post("sayfaTipi",TRUE),
					   'sayfaDurum' => 0 );

		//Sayfa gösterimi açık
		if( $this->input->post("sayfaDurum",TRUE)!=NULL){
			$sayfa['sayfaDurum'] = 1; 
		}

		if($this->sayfa->sayfa_duzenle($id,$sayfa)){

			$mesaj = array('icerik' => $sayfa["sayfaBaslik"]." Silindi.","tip"=>"success");
			redirect(base_url()."panel/sayfa_yonetim");
		
		}else{

			$mesaj = array('icerik' => $sayfa["sayfaBaslik"]." Silindi!","tip"=>"danger");
			redirect(base_url()."panel/sayfa_yonetim");
			
		}
		
	}

}


 ?>