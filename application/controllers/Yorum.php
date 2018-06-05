<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Yorum extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("panel/Yorum_yonetim_model","yorum");

	}

	public function yorum_gonder()
	{
		$yorum = array('yorumAd' => $this->input->post("ad",TRUE),
					   'yorumBaslik' => $this->input->post("baslik",TRUE),
					   'yorumIcerik' => $this->input->post("yorum",TRUE),
					   'yorumDurum' => 0 );


        if($this->yorum->yorum_ekle($yorum)){
			
			$mesaj = array('icerik' => $yorum["yorumBaslik"]." Eklendi.","tipi"=>"success" );
			echo json_encode($mesaj);

		}else{

			$mesaj = array('icerik' => "yorum Eklenemedi!",'tipi'=>"danger" );
			echo json_encode($mesaj);


		}

	}

	

}


 ?>