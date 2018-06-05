<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Hoca_yonetim extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata("kullaniciBilgiler") == NULL)
		{
			$this->session->set_flashdata('mesaj',"Lütfen Giriş Yapınız!");
			redirect(base_url()."panel");
		}
		$this->load->model("panel/hoca_yonetim_model","hoca");
	}
		

	public function index()
	{
		@$data["hocalar"] = $this->hoca->hoca_listele();

		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/hoca_yonetim/hoca_listesi",$data);
		$this->load->view("panel/footer");
	}


	public function yeni_hoca()
	{
		@$data["hocalar"]=$this->hoca->hoca_listele();
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/hoca_yonetim/hoca_ekle",$data);
		$this->load->view("panel/footer");

	}

	public function hoca_ekle()
	{
		$hoca = array('hocaAd' => $this->input->post("hocaAd",TRUE),
					   'hocaIcerik' => $this->input->post("hocaIcerik",TRUE));

		$config['upload_path']          = 'public/admin/uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 200;
        $config['max_width']            = 1920;
        $config['max_height']           = 1920;


        $this->load->library('upload', $config);

        if ( $this->upload->do_upload('hocaResim'))
        {
            $hoca["hocaResim"] = $this->upload->data('file_name');
            if($this->hoca->hoca_ekle($hoca)){

            	$mesaj = array("icerik"=>$hoca["hocaAd"]." Eklendi." ,"tip"=> "success" );
				$this->session->set_flashdata('mesaj',$mesaj);
				redirect(base_url()."panel/hoca_yonetim");

			}else{

            	$mesaj = array("icerik"=>"hoca Eklenemedi!" ,"tip"=> "danger" );
				$this->session->set_flashdata("mesaj",$mesaj);
				redirect(base_url()."panel/hoca_yonetim");

			}
        }
        else
        {
			$error = array('error' => $this->upload->display_errors());
            echo $error["error"];
        }

	}

	public function hoca_duzenle($id)
	{
		$data["hoca"]=$this->hoca->hoca_listele($id);
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/hoca_yonetim/hoca_duzenle",$data);
		$this->load->view("panel/footer");
	}

	public function hoca_sil($id)
	{
		if($this->hoca->hoca_sil($id)){
			redirect(base_url()."panel/hoca_yonetim");
		}
	}

	public function hoca_guncelle($id)
	{
		$hoca = array('hocaAd' => $this->input->post("hocaAd",TRUE),
					   'hocaIcerik' => $this->input->post("hocaIcerik",TRUE));
	
		$config['upload_path']          = 'public/admin/uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 200;
        $config['max_width']            = 1920;
        $config['max_height']           = 1920;
        $config['overwrite']			= TRUE;


        $this->load->library('upload', $config);
        
        if ( $this->upload->do_upload('hocaResim'))
        {
            $hoca["hocaResim"] = $this->upload->data('file_name');
            if($this->hoca->hoca_duzenle($id,$hoca)){

            	$mesaj = array("icerik"=>$hoca["hocaAd"]." Düzenlendi." ,"tip"=> "success" );
				$this->session->set_flashdata('mesaj',$mesaj);
				redirect(base_url()."panel/hoca_yonetim");

			}else{

            	$mesaj = array("icerik"=>"hoca Düzenlenemedi!" ,"tip"=> "danger" );
				$this->session->set_flashdata('mesaj',$mesaj);

				redirect(base_url()."panel/hoca_yonetim");

			}
        }
        else
        {
			$error = array('error' => $this->upload->display_errors());
			
			if(strcmp($this->upload->display_errors(), "You did not select a file to upload.")!== 0){
				
				if($this->hoca->hoca_duzenle($id,$hoca)){

	            	$mesaj = array("icerik"=>$hoca["hocaAd"]." Düzenlendi." ,"tip"=> "success" );
					$this->session->set_flashdata('mesaj',$mesaj);

					redirect(base_url()."panel/hoca_yonetim");

				}else{

	            	$mesaj = array("icerik"=>"hoca Düzenlenemedi!" ,"tip"=> "danger" );
	            	var_dump($mesaj);die();
					$this->session->set_flashdata('mesaj',$mesaj);
					redirect(base_url()."panel/hoca_yonetim");

				}
			}else{

				$mesaj = array("icerik"=>$this->upload->display_errors() ,"tip"=> "danger" );
				$this->session->set_flashdata('mesaj',$mesaj);
	            	var_dump($mesaj);die();

				redirect(base_url()."panel/hoca_yonetim");
			
			}
           
            
        }
		
	}

}


 ?>