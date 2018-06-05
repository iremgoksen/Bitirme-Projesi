<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Yorum_yonetim extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata("kullaniciBilgiler") == NULL)
		{
			$this->session->set_flashdata('mesaj',"Lütfen Giriş Yapınız!");
			redirect(base_url()."panel");
		}
		$this->load->model("panel/yorum_yonetim_model","yorum");
	}
		

	public function index()
	{
		@$data["yorumlar"]=$this->yorum->yorum_listele();

		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/yorum_yonetim/yorum_listesi",$data);
		$this->load->view("panel/footer");
	}


	public function yeni_yorum()
	{
		@$data["yorumlar"]=$this->yorum->yorum_listele();
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/yorum_yonetim/yorum_ekle",$data);
		$this->load->view("panel/footer");

	}

	public function yorum_ekle()
	{
		$yorum = array('yorumAd' => $this->input->post("yorumAd",TRUE),
					   'yorumBaslik' => $this->input->post("yorumBaslik",TRUE),
					   'yorumIcerik' => $this->input->post("yorumIcerik",TRUE),
					   'yorumDurum' => 0 );

		//Sayfa gösterimi açık
		if($this->input->post("yorumDurum",TRUE)!=NULL){
			$yorum['yorumDurum'] = 1; 
		}

        if($this->yorum->yorum_ekle($yorum)){
			
			$mesaj = array('icerik' => $yorum["yorumAdi"]." Eklendi.","tipi","success" );
			$this->session->set_flashdata("mesaj",$mesaj);
			redirect(base_url()."panel/yorum_yonetim");

		}else{

			$mesaj = array('icerik' => "yorum Eklenemedi!","tipi","danger" );
			$this->session->set_flashdata("mesaj",$mesaj);
			redirect(base_url()."panel/yorum_yonetim");

		}

	}

	public function yorum_duzenle($id)
	{
		$data["yorum"]=$this->yorum->yorum_listele($id);
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/yorum_yonetim/yorum_duzenle",$data);
		$this->load->view("panel/footer");
	}

	public function yorum_sil($id)
	{
		if($this->yorum->yorum_sil($id)){

			$mesaj = array('icerik' => "yorum Silindi.","tipi","success" );
			$this->session->set_flashdata("mesaj",$mesaj);
			redirect(base_url()."panel/yorum_yonetim");

		}else{

			$mesaj = array('icerik' => "yorum Silinemedi!","tipi","danger" );
			$this->session->set_flashdata("mesaj",$mesaj);
			redirect(base_url()."panel/yorum_yonetim");

		}
	}

	public function yorum_guncelle($id)
	{
		$yorum = array('yorumAd' => $this->input->post("yorumAd",TRUE),
					   'yorumBaslik' => $this->input->post("yorumBaslik",TRUE),
					   'yorumIcerik' => $this->input->post("yorumIcerik",TRUE),
					   'yorumDurum' => 0 );
		
		//Sayfa gösterimi açık
		if($this->input->post("yorumDurum",TRUE)!=NULL){
			$yorum['yorumDurum'] = 1; 
		}

        if($this->yorum->yorum_duzenle($id,$yorum)){
			
			$mesaj = array('icerik' => $yorum["yorumBaslik"]." Duzenlendi.","tipi","success" );
			redirect(base_url()."panel/yorum_yonetim");

		}else{
			
			$mesaj = array('icerik' => $yorum["yorumIcerik"]." Duzenlenemedi!","tipi","danger" );
			$this->session->set_flashdata("mesaj",$mesaj);
			redirect(base_url()."panel/yorum_yonetim");

		}
		
	}

}


 ?>