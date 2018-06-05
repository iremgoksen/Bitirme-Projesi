<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_ayarlar extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();

		if($this->session->userdata("kullaniciBilgiler") == NULL)
		{
			$this->session->set_flashdata('mesaj',"Lütfen Giriş Yapınız!");
			redirect(base_url()."panel");
		}

		$this->load->model("panel/Site_ayarlar_model","site");
	}

	public function index()
	{
		$data["ayarlar"] = $this->site->ayarlar();

		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/site_ayarlari",$data);
		$this->load->view("panel/footer");
			
	}

	public function site_ayarlari_kaydet()
	{
		$ayarlar = array('siteBaslik' 			 => $this->input->post("siteBaslik",TRUE),
						 'siteAnahtarKelimeler'  => $this->input->post("siteAnahtarKelimeler",TRUE),
						 'siteAciklama' 		 => $this->input->post("siteAciklama",TRUE),
						 'firmaAdi' 			 => $this->input->post("firmaAdi",TRUE),
						 'firmaTel' 		     => $this->input->post("firmaTel",TRUE),
						 'firmaMobil' 	 		 => $this->input->post("firmaMobil",TRUE),
						 'firmaFax' 			 => $this->input->post("firmaFax",TRUE),
						 'firmaMail' 			 => $this->input->post("firmaMail",TRUE),
						 'firmaAdres' 		 	 => $this->input->post("firmaAdres",TRUE),
						 'firmaGoogleMaps' 	 	 => $this->input->post("firmaGoogleMaps",TRUE),
						 'firmaGoogleAnalytics'  => $this->input->post("firmaGoogleAnalytics",TRUE),
						 'firmaFacebook' 		 => $this->input->post("firmaFacebook",TRUE),
						 'firmaTwitter' 		 => $this->input->post("firmaTwitter",TRUE),
						 'firmaGplus' 		 	 => $this->input->post("firmaGplus",TRUE),
						 'firmaInstagram' 	 	 => $this->input->post("firmaInstagram",TRUE),
						 'firmaYoutube' 		 => $this->input->post("firmaYoutube",TRUE),
						 'firmaCopyright' 	 	 => $this->input->post("firmaCopyright",TRUE));
		
		if($_FILES["firmaLogo"]["name"]!=""){

			$config['upload_path']          = 'public/admin/uploads/';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 200;
	        $config['max_width']            = 1024;
	        $config['max_height']           = 768;
	        $config['overwrite']			= TRUE;
	        $config['file_name']           	= "logo";

	        $this->load->library('upload', $config);

	        if ( ! $this->upload->do_upload('firmaLogo'))
	        {
	            $error = array('error' => $this->upload->display_errors());
	            var_dump($error);
	        }
	        else
	        {
	            $data = array('upload_data' => $this->upload->data());
	            $ayarlar["firmaLogo"] = $data["upload_data"]["file_name"];

	            if($this->site->site_ayarlari_kaydet($ayarlar)){

	            	$mesaj = array('icerik' => "Site Ayarları Kaydedildi.",'tip'=>"success");
	            	$this->session->set_flashdata("mesaj",$mesaj);
					redirect($_SERVER['HTTP_REFERER']);
					
				}else{

	            	$mesaj = array('icerik' => "Ayarlar Kaydedilemedi!",'tip'=>"danger");
	            	$this->session->set_flashdata("mesaj",$mesaj);
					redirect($_SERVER['HTTP_REFERER']);

				}
	        }

		}else{

			if($this->site->site_ayarlari_kaydet($ayarlar)){

            	$mesaj = array('icerik' => "Site Ayarları Kaydedildi.",'tip'=>"success");
            	$this->session->set_flashdata("mesaj",$mesaj);
				redirect($_SERVER['HTTP_REFERER']);
				
			}else{

            	$mesaj = array('icerik' => "Ayarlar Kaydedilemedi!",'tip'=>"danger");
            	$this->session->set_flashdata("mesaj",$mesaj);
				redirect($_SERVER['HTTP_REFERER']);

			}
		}

		

		

	}

}




 ?>