<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Hizmet_yonetim extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata("kullaniciBilgiler") == NULL)
		{
			$this->session->set_flashdata('mesaj',"Lütfen Giriş Yapınız!");
			redirect(base_url()."panel");
		}
		$this->load->model("panel/Hizmet_yonetim_model","hizmet");
		$this->load->model("panel/Kategori_yonetim_model","kategori");

	}
		

	public function index()
	{
		@$data["hizmetler"]=$this->hizmet->hizmet_listele();

		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/hizmet_yonetim/hizmet_listesi",$data);
		$this->load->view("panel/footer");
	}


	public function yeni_hizmet()
	{
		@$data["hizmetler"]=$this->hizmet->hizmet_listele();
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/hizmet_yonetim/hizmet_ekle",$data);
		$this->load->view("panel/footer");

	}

	public function hizmet_ekle()
	{
		$hizmet = array('hizmetBaslik' => $this->input->post("hizmetBaslik",TRUE),
					   'hizmetIcerik' => $this->input->post("hizmetIcerik",TRUE),
					   'hizmetDurum' => 0 );

		//hizmet gösterimi açık
		if($this->input->post("hizmetDurum",TRUE)!=NULL){
			$hizmet['hizmetDurum'] = 1; 
		}

		if($this->hizmet->hizmet_ekle($hizmet)){
			$mesaj = array('icerik' => $hizmet["hizmetBaslik"]." Hizmet Eklendi.","tipi","success" );
			$this->session->set_flashdata("mesaj",$mesaj);
			redirect(base_url()."panel/hizmet_yonetim");
		}else{
			$mesaj = array('icerik' => $hizmet["hizmetBaslik"]." Hizmet Eklenemedi!","tipi","danger" );
			$this->session->set_flashdata("mesaj",$mesaj);
			redirect(base_url()."panel/hizmet_yonetim");

		}

	}

	public function hizmet_duzenle($id)
	{
		$data["hizmet"]=$this->hizmet->hizmet_listele($id);
		
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/hizmet_yonetim/hizmet_duzenle",$data);
		$this->load->view("panel/footer");
	}

	public function hizmet_sil($id)
	{
		if($this->hizmet->hizmet_sil($id)){

			$mesaj = array('icerik' => "Hizmet Silindi.","tipi","success" );
			$this->session->set_flashdata("mesaj",$mesaj);
			redirect(base_url()."panel/hizmet_yonetim");
		
		}else{

			$mesaj = array('icerik' => "Hizmet Silinemedi!","tipi","success" );
			$this->session->set_flashdata("mesaj",$mesaj);
			redirect(base_url()."panel/hizmet_yonetim");
		
		}
	}

	public function hizmet_guncelle($id)
	{
		$hizmet = array('hizmetBaslik' => $this->input->post("hizmetBaslik",TRUE),
					   'hizmetIcerik' => $this->input->post("hizmetIcerik",TRUE),
					   'hizmetDurum' => 0 );

		//Hizmet gösterimi açık
		if($this->input->post("hizmetDurum",TRUE)!=NULL){
			$hizmet['hizmetDurum'] = 1; 
		}

		
        if($this->hizmet->hizmet_duzenle($id,$hizmet)){

			$mesaj = array('icerik' => $hizmet["hizmetBaslik"]." Düzenlendi","tipi","success" );
			$this->session->set_flashdata("mesaj",$mesaj);
			redirect(base_url()."panel/hizmet_yonetim");

		}else{

			$mesaj = array('icerik' => "Hizmet Düzenlenemedi!","tipi","danger" );
			$this->session->set_flashdata("mesaj",$mesaj);
			redirect(base_url()."panel/hizmet_yonetim");

		}
       
		
	}

}


 ?>