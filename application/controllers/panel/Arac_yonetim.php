<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Arac_yonetim extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata("kullaniciBilgiler") == NULL)
		{
			$this->session->set_flashdata('mesaj',"Lütfen Giriş Yapınız!");
			redirect(base_url()."panel");
		}
		$this->load->model("panel/Arac_yonetim_model","arac");
	}
		

	public function index()
	{
		@$data["araclar"] = $this->arac->arac_listele();
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/arac_yonetim/arac_listesi",$data);
		$this->load->view("panel/footer");
	}


	public function yeni_arac()
	{
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/arac_yonetim/arac_ekle");
		$this->load->view("panel/footer");

	}

	public function arac_ekle()
	{
		
		$arac = array('galeriAd' =>	$this->input->post("aracAdi",TRUE),
					  'galeriIcerik' =>	$this->input->post("aracIcerik",TRUE));

		$config['upload_path']          = 'public/admin/uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 200;
        $config['max_width']            = 1280;
        $config['max_height']           = 805;
        $this->load->library('upload', $config);

        $resimler = array();
		$aracSayisi = count($_FILES['aracResimler']['name']);
        for($i = 0; $i < $aracSayisi; $i++){
            $_FILES['aracResim']['name'] = $_FILES['aracResimler']['name'][$i];
            $_FILES['aracResim']['type'] = $_FILES['aracResimler']['type'][$i];
            $_FILES['aracResim']['tmp_name'] = $_FILES['aracResimler']['tmp_name'][$i];
            $_FILES['aracResim']['error'] = $_FILES['aracResimler']['error'][$i];
            $_FILES['aracResim']['size'] = $_FILES['aracResimler']['size'][$i];

            if($this->upload->do_upload('aracResim')){
            	array_push($resimler, $this->upload->data('file_name'));
            }

	        else
	        {
				$error = array('error' => $this->upload->display_errors());
	        }
        }

		if(!isset($error)){
			if($this->arac->arac_ekle($arac,$resimler)){

	    	$mesaj = array("icerik"=>$arac["galeriAd"]." Eklendi." ,"tip"=> "success" );
			$this->session->set_flashdata('mesaj',$mesaj);
			redirect(base_url()."panel/arac_yonetim");

			}else{

	        	$mesaj = array("icerik"=>"arac Eklenemedi!" ,"tip"=> "danger" );
				$this->session->set_flashdata("mesaj",$mesaj);
				redirect(base_url()."panel/arac_yonetim");

			}
		} 
		else
	    {
			var_dump($error);
	    }
	}

	public function arac_duzenle($id)
	{
		$data["arac"]=$this->arac->arac_listele($id);
		$data["resimler"]=$this->arac->resim_listele($id);

		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/arac_yonetim/arac_duzenle",$data);
		$this->load->view("panel/footer");
	}

	public function arac_sil($id)
	{
		if($this->arac->arac_sil($id)){
			redirect(base_url()."panel/arac_yonetim");
		}
	}

	public function resim_sil()
	{
		$id = $_REQUEST["key"];
		echo $this->arac->resim_sil($id);
	}

	public function arac_guncelle($id)
	{
		$arac = array('galeriAd' =>	$this->input->post("aracAdi",TRUE),
					  'galeriIcerik' =>	$this->input->post("aracIcerik",TRUE));
	    $resimler = array();
		
		if(!empty($_FILES["aracResimler"]["name"][0])){
			$config['upload_path']          = 'public/admin/uploads/';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 200;
	        $config['max_width']            = 1024;
	        $config['max_height']           = 768;
	        $this->load->library('upload', $config);

			$aracSayisi = count($_FILES['aracResimler']['name']);
	        for($i = 0; $i < $aracSayisi; $i++){
	        	
	            $_FILES['aracResim']['name'] = $_FILES['aracResimler']['name'][$i];
	            $_FILES['aracResim']['type'] = $_FILES['aracResimler']['type'][$i];
	            $_FILES['aracResim']['tmp_name'] = $_FILES['aracResimler']['tmp_name'][$i];
	            $_FILES['aracResim']['error'] = $_FILES['aracResimler']['error'][$i];
	            $_FILES['aracResim']['size'] = $_FILES['aracResimler']['size'][$i];

	            if($this->upload->do_upload('aracResim')){
	            	array_push($resimler, $this->upload->data('file_name'));
	            }

		        else
		        {
					$error = array('error' => $this->upload->display_errors());
		        }
	        }

			if(!isset($error)){
				if($this->arac->arac_duzenle($id,$arac,$resimler)){

			    	$mesaj = array("icerik"=>$arac["galeriAd"]." Eklendi." ,"tip"=> "success" );
					$this->session->set_flashdata('mesaj',$mesaj);
					redirect(base_url()."panel/arac_yonetim");

				}else{

		        	$mesaj = array("icerik"=>"arac Eklenemedi!" ,"tip"=> "danger" );
					$this->session->set_flashdata("mesaj",$mesaj);
					redirect(base_url()."panel/arac_yonetim");

				}
			} 
			else
		    {
				var_dump($error);
		    }
		}else{
			if($this->arac->arac_duzenle($id,$arac,$resimler)){

		    	$mesaj = array("icerik"=>$arac["galeriAd"]." Düzenlendi." ,"tip"=> "success" );
				$this->session->set_flashdata('mesaj',$mesaj);
				redirect(base_url()."panel/arac_yonetim");

			}else{

	        	$mesaj = array("icerik"=>"arac Eklenemedi!" ,"tip"=> "danger" );
				$this->session->set_flashdata("mesaj",$mesaj);
				redirect(base_url()."panel/arac_yonetim");

			}
		}

		
	}

}


 ?>