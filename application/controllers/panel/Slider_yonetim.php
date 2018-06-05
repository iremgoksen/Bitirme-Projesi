<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Slider_yonetim extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata("kullaniciBilgiler") == NULL)
		{
			$this->session->set_flashdata('mesaj',"Lütfen Giriş Yapınız!");
			redirect(base_url()."panel");
		}
		$this->load->model("panel/slider_yonetim_model","slider");
	}
		

	public function index()
	{
		@$data["sliderler"] = $this->slider->slider_listele();

		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/slider_yonetim/slider_listesi",$data);
		$this->load->view("panel/footer");
	}


	public function yeni_slider()
	{
		@$data["sliderler"]=$this->slider->slider_listele();
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/slider_yonetim/slider_ekle",$data);
		$this->load->view("panel/footer");

	}

	public function slider_ekle()
	{

		$slider = array('sliderBaslik' => $this->input->post("sliderBaslik",TRUE),
						'sliderAciklama' => $this->input->post("sliderAciklama",TRUE));

		$config['upload_path']          = 'public/admin/uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 705;
        $config['max_width']            = 2048;
        $config['max_height']           = 968;


        $this->load->library('upload', $config);
        
        if ( $this->upload->do_upload('sliderResim'))
        {
            $slider["sliderResim"] = $this->upload->data('file_name');
            if($this->slider->slider_ekle($slider)){

            	$mesaj = array("icerik"=>$slider["sliderAciklama"]." Eklendi." ,"tip"=> "success" );
				$this->session->set_flashdata('mesaj',$mesaj);
				redirect(base_url("panel/slider_yonetim"));

			}else{

            	$mesaj = array("icerik"=>"slider Eklenemedi!" ,"tip"=> "danger" );
				$this->session->set_flashdata("mesaj",$mesaj);
				redirect(base_url("panel/slider_yonetim"));

			}
        }
        else
        {
			$error = array('error' => $this->upload->display_errors());
            var_dump($error);
        }

	}

	public function slider_duzenle($id)
	{
		$data["slider"]=$this->slider->slider_listele($id);
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/slider_yonetim/slider_duzenle",$data);
		$this->load->view("panel/footer");
	}

	public function slider_sil($id)
	{
		if($this->slider->slider_sil($id)){
			redirect(base_url()."panel/slider_yonetim");
		}
	}

	public function slider_guncelle($id)
	{
		$slider = array('sliderBaslik' => $this->input->post("sliderBaslik",TRUE),
						'sliderAciklama' => $this->input->post("sliderAciklama",TRUE));
		
		if($_FILES["sliderResim"]["name"]!=""){

			$config['upload_path']          = 'public/admin/uploads/';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 705;
	        $config['max_width']            = 2048;
	        $config['max_height']           = 968;
	        $config['overwrite']			= TRUE;

	        $this->load->library('upload', $config);
	        
	        if ( $this->upload->do_upload('sliderResim'))
	        {
	            $slider["sliderResim"] = $this->upload->data('file_name');
	            if($this->slider->slider_duzenle($id,$slider)){

	            	$mesaj = array("icerik"=>$slider["sliderAciklama"]." Düzenlendi." ,"tip"=> "success" );
					$this->session->set_flashdata('mesaj',$mesaj);
					redirect(base_url()."panel/slider_yonetim");

				}else{

	            	$mesaj = array("icerik"=>"slider Düzenlenemedi!" ,"tip"=> "danger" );
					$this->session->set_flashdata('mesaj',$mesaj);

					redirect(base_url()."panel/slider_yonetim");

				}
	        }
	        else
	        {
				$error = array('error' => $this->upload->display_errors());
	            var_dump($error);
	        }
	    }else{
	    	
            if($this->slider->slider_duzenle($id,$slider)){

            	$mesaj = array("icerik"=>$slider["sliderAciklama"]." Düzenlendi." ,"tip"=> "success" );
				$this->session->set_flashdata('mesaj',$mesaj);
				redirect(base_url("panel/slider_yonetim"));

			}else{

            	$mesaj = array("icerik"=>"slider Düzenlenemedi!" ,"tip"=> "danger" );
				$this->session->set_flashdata('mesaj',$mesaj);

				redirect(base_url("panel/slider_yonetim"));

			}
	    }
		
	}

}


 ?>