<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Duyuru_yonetim extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata("kullaniciBilgiler") == NULL)
		{
			$this->session->set_flashdata('mesaj',"Lütfen Giriş Yapınız!");
			redirect(base_url("panel"));
		}
		$this->load->model("panel/duyuru_yonetim_model","duyuru");
	}
		

	public function index()
	{
		@$data["duyurular"] = $this->duyuru->duyuru_listele();

		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/duyuru_yonetim/duyuru_listesi",$data);
		$this->load->view("panel/footer");
	}


	public function yeni_duyuru()
	{
		@$data["duyurular"]=$this->duyuru->duyuru_listele();
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/duyuru_yonetim/duyuru_ekle",$data);
		$this->load->view("panel/footer");

	}

	public function duyuru_ekle()
	{
		$duyuru = array('duyuruBaslik' => $this->input->post("duyuruBaslik",TRUE),
					   'duyuruIcerik' => $this->input->post("duyuruIcerik",TRUE),
					   'duyuruDurum' => 0 );

		//Sayfa gösterimi açık
		if($this->input->post("duyuruDurum",TRUE)!=NULL){
			$duyuru['duyuruDurum'] = 1; 
		}

		$config['upload_path']          = 'public/admin/uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 200;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;


        $this->load->library('upload', $config);
        
        if ( $this->upload->do_upload('duyuruResim'))
        {
            $duyuru["duyuruResim"] = $this->upload->data('file_name');
            
            if($this->duyuru->duyuru_ekle($duyuru)){
			
				$mesaj = array('icerik' => $duyuru["duyuruAdi"]." Eklendi.","tipi","success" );
				$this->session->set_flashdata("mesaj",$mesaj);
				redirect(base_url("panel/duyuru_yonetim"));

			}else{

				$mesaj = array('icerik' => "duyuru Eklenemedi!","tipi","danger" );
				$this->session->set_flashdata("mesaj",$mesaj);
				redirect(base_url("panel/duyuru_yonetim"));

			}
        }
        else
        {
			$error = array('error' => $this->upload->display_errors());
            var_dump($error);
        }


        if($this->duyuru->duyuru_ekle($duyuru)){
			
			$mesaj = array('icerik' => $duyuru["duyuruAdi"]." Eklendi.","tipi","success" );
			$this->session->set_flashdata("mesaj",$mesaj);
			redirect(base_url()."panel/duyuru_yonetim");

		}else{

			$mesaj = array('icerik' => "duyuru Eklenemedi!","tipi","danger" );
			$this->session->set_flashdata("mesaj",$mesaj);
			redirect(base_url()."panel/duyuru_yonetim");

		}

	}

	public function duyuru_duzenle($id)
	{
		$data["duyuru"]=$this->duyuru->duyuru_listele($id);
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/duyuru_yonetim/duyuru_duzenle",$data);
		$this->load->view("panel/footer");
	}

	public function duyuru_sil($id)
	{
		if($this->duyuru->duyuru_sil($id)){

			$mesaj = array('icerik' => "duyuru Silindi.","tipi","success" );
			$this->session->set_flashdata("mesaj",$mesaj);
			redirect(base_url()."panel/duyuru_yonetim");

		}else{

			$mesaj = array('icerik' => "duyuru Silinemedi!","tipi","danger" );
			$this->session->set_flashdata("mesaj",$mesaj);
			redirect(base_url()."panel/duyuru_yonetim");

		}
	}

	public function duyuru_guncelle($id)
	{
		$duyuru = array('duyuruBaslik' => $this->input->post("duyuruBaslik",TRUE),
					   'duyuruIcerik' => $this->input->post("duyuruIcerik",TRUE),
					   'duyuruDurum' => 0 );
		
		//Sayfa gösterimi açık
		if($this->input->post("duyuruDurum",TRUE)!=NULL){
			$duyuru['duyuruDurum'] = 1; 
		}


		if($_FILES["duyuruResim"]["name"]!=""){
			$config['upload_path']          = 'public/admin/uploads/';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 200;
	        $config['max_width']            = 1024;
	        $config['max_height']           = 968;
	        $config['overwrite']			= TRUE;

	        $this->load->library('upload', $config);
	        
	        if ( $this->upload->do_upload('duyuruResim'))
	        {

	            $duyuru["duyuruResim"] = $this->upload->data('file_name');

	            if($this->duyuru->duyuru_duzenle($id,$duyuru)){
			
					$mesaj = array('icerik' => $duyuru["duyuruBaslik"]." Duzenlendi.","tipi","success" );
					redirect(base_url("panel/duyuru_yonetim"));

				}else{
					
					$mesaj = array('icerik' => $duyuru["duyuruIcerik"]." Duzenlenemedi!","tipi","danger" );
					$this->session->set_flashdata("mesaj",$mesaj);
					redirect(base_url("panel/duyuru_yonetim"));

				}
	        }
	        else
	        {
				$mesaj = array("icerik"=>$this->upload->display_errors() ,"tip"=> "danger" );
				$this->session->set_flashdata('mesaj',$mesaj);
				redirect(base_url("panel/duyuru_yonetim"));

	        }

	    }else{

	    	if($this->duyuru->duyuru_duzenle($id,$duyuru)){
			
					$mesaj = array('icerik' => $duyuru["duyuruBaslik"]." Duzenlendi.","tipi","success" );
					redirect(base_url("panel/duyuru_yonetim"));

				}else{
					
					$mesaj = array('icerik' => $duyuru["duyuruIcerik"]." Duzenlenemedi!","tipi","danger" );
					$this->session->set_flashdata("mesaj",$mesaj);
					redirect(base_url("panel/duyuru_yonetim"));

				}
			}

			
		}


}


 ?>