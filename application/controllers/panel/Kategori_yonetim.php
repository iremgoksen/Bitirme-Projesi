<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Kategori_yonetim extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata("kullaniciBilgiler") == NULL)
		{
			$this->session->set_flashdata('mesaj',"Lütfen Giriş Yapınız!");
			redirect(base_url()."panel");
		}
		$this->load->model("panel/Kategori_yonetim_model","kategori");
	}
		

	public function kategori_listele($kategoriTipi)
	{
		@$data["kategoriler"]=$this->kategori->kategori_listele($kategoriTipi);
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/kategori_yonetim/kategori_listesi",$data);
		$this->load->view("panel/footer");
		
	}


	public function yeni_kategori()
	{
		@$data["kategoriler"]=$this->kategori->kategori_listele();
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/kategori_yonetim/kategori_ekle",$data);
		$this->load->view("panel/footer");

	}

	public function kategori_ekle($kategoriTipi)
	{
		$kategori = array('kategoriAdi' => $this->input->post("kategoriAdi",TRUE),
					   	  'kategoriTipi' => $kategoriTipi );

        if($this->kategori->kategori_ekle($kategori)){

			$mesaj = array('icerik' => $kategori["kategoriBaslik"]." Eklendi.","tipi","success" );
			redirect(base_url()."panel/kategori_yonetim/kategori_listele/".$kategoriTipi);

		}else{

			$mesaj = array('icerik' => $kategori["kategoriBaslik"]." Eklenemedi!","tipi","danger" );
			redirect(base_url()."panel/kategori_yonetim/kategori_listele/".$kategoriTipi);

		}
	}

	public function kategori_duzenle($id)
	{
		$data["kategori"]=$this->kategori->kategori_listele_id($id);
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/kategori_yonetim/kategori_duzenle",$data);
		$this->load->view("panel/footer");
	}

	public function kategori_sil($id)
	{
		if($this->kategori->kategori_sil($id)){

			$mesaj = array('icerik' => "Kategori Silindi.","tipi","success" );
			redirect(base_url()."panel/kategori_yonetim");

		}else{
			$mesaj = array('icerik' => "Kategori Silinemedi.","tipi","success" );
			redirect(base_url()."panel/kategori_yonetim");

		}
	}

	public function kategori_guncelle($id,$kategoriTipi)
	{
		$kategori = array('kategoriAdi' =>  $this->input->post("kategoriAdi",TRUE));
		
		
        if($this->kategori->kategori_duzenle($id,$kategori)){
			$mesaj = array('icerik' => $kategori["kategoriAdi"]." Düzenlendi.","tipi","success" );
			redirect(base_url()."panel/kategori_yonetim/kategori_listele/".$kategoriTipi);
		}else{
			$mesaj = array('icerik' => $kategori["kategoriAdi"]." Düzenlenemedi!","tipi","danger" );
			redirect(base_url()."panel/kategori_yonetim/kategori_listele/".$kategoriTipi);

		}
        
		
	}

}


 ?>