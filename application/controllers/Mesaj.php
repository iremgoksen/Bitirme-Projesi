<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Mesaj extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("panel/Mesaj_yonetim_model","mesaj");
	}
		
	public function mesaj_gonder()
	{
		
		$mesaj = array('ad'    => $this->input->post("ad",TRUE),
					   'mail'  => $this->input->post("mail",TRUE) ,
					   'konu'  => $this->input->post("konu",TRUE),
					   'mesaj' => $this->input->post("mesaj",TRUE),
					   'telNo' => $this->input->post("telNo",TRUE),	
					   'durum' => 0,
					   'ipAdres' => $_SERVER['REMOTE_ADDR'] );


		$config = Array(
		    'protocol' => 'smtp',
		    'smtp_host' => 'rapid.guzelhosting.com',
		    'smtp_port' => 587,
		    'smtp_user' => 'info@ofosoft.com.tr',
		    'smtp_pass' => 'ofosoft58?',
		    'mailtype'  => 'html',
		    'wordwrap' 	=> TRUE,
		    'charset'   => 'utf-8'
		);


		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from($this->input->post("mail",TRUE),$this->input->post("ad",TRUE) );
		$this->email->to($this->input->post("firmaMail",TRUE));
		$this->email->subject($this->input->post("konu",TRUE));
		$this->email->message($this->input->post("mesaj",TRUE));


		if($this->email->send()){

			if($this->mesaj->mesaj_gonder($mesaj)){
				redirect($_SERVER["HTTP_REFERER"]);
			}

		}else{
			echo $this->email->print_debugger();
		}

	}

}


 ?>