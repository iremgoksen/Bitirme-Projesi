<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Blog_yonetim extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata("kullaniciBilgiler") == NULL)
		{
			$this->session->set_flashdata('mesaj',"Lütfen Giriş Yapınız!");
			redirect(base_url()."panel");
		}
		$this->load->model("panel/Blog_yonetim_model","blog");

	}
		

	public function index()
	{
		@$data["bloglar"] = $this->blog->blog_listele();

		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/blog_yonetim/blog_listesi",$data);
		$this->load->view("panel/footer");
	}


	public function yeni_blog()
	{

		@$data["bloglar"]=$this->blog->blog_listele();
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/blog_yonetim/blog_ekle",$data);
		$this->load->view("panel/footer");

	}

	public function blog_ekle()
	{
		$blog = array('blogBaslik' => $this->input->post("blogBaslik",TRUE),
					  'blogIcerik' => $this->input->post("blogIcerik",TRUE),
					  'blogDurum' => 0 );
		//Sayfa gösterimi açık
		if($this->input->post("blogDurum",TRUE)!=NULL){
			$blog['blogDurum'] = 1; 
		}

		$config['upload_path']          = 'public/admin/uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 200;
        $config['max_width']            = 1024;
        $config['max_height']           = 968;


        $this->load->library('upload', $config);
        
        if ( $this->upload->do_upload('blogResim'))
        {
            $blog["blogResim"] = $this->upload->data('file_name');
            if($this->blog->blog_ekle($blog)){

            	$mesaj = array("icerik"=>$blog["blogBaslik"]." Eklendi." ,"tip"=> "success" );
				$this->session->set_flashdata('mesaj',$mesaj);
				redirect(base_url("panel/blog_yonetim"));

			}else{

            	$mesaj = array("icerik"=>"Blog Eklenemedi!" ,"tip"=> "danger" );
				$this->session->set_flashdata("mesaj",$mesaj);
				redirect(base_url("panel/blog_yonetim"));

			}
        }
        else
        {
			$error = array('error' => $this->upload->display_errors());
            var_dump($error);
        }

	}

	public function blog_duzenle($id)
	{
		$data["blog"]=$this->blog->blog_listele($id);
		$this->load->view("panel/header");
		$this->load->view("panel/sidebar");
		$this->load->view("panel/blog_yonetim/blog_duzenle",$data);
		$this->load->view("panel/footer");
	}

	public function blog_sil($id)
	{
		if($this->blog->blog_sil($id)){
			redirect(base_url("panel/blog_yonetim"));
		}
	}

	public function blog_guncelle($id)
	{
		$blog = array('blogBaslik' => $this->input->post("blogBaslik",TRUE),
					  'blogIcerik' => $this->input->post("blogIcerik",TRUE),
					  'blogDurum' => 0 );
		
		//Sayfa gösterimi açık
		if($this->input->post("blogDurum",TRUE)!=NULL){
			$blog['blogDurum'] = 1; 
		}


		if($_FILES["blogResim"]["name"]!=""){

			$config['upload_path']          = 'public/admin/uploads/';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 200;
	        $config['max_width']            = 1024;
	        $config['max_height']           = 968;
	        $config['overwrite']			= TRUE;

	        $this->load->library('upload', $config);
	        
	        if ( $this->upload->do_upload('blogResim'))
	        {
	            $blog["blogResim"] = $this->upload->data('file_name');
	            if($this->blog->blog_duzenle($id,$blog)){

	            	$mesaj = array("icerik"=>$blog["blogBaslik"]." Düzenlendi." ,"tip"=> "success" );
					$this->session->set_flashdata('mesaj',$mesaj);
					redirect(base_url("panel/blog_yonetim"));

				}else{

	            	$mesaj = array("icerik"=>"Blog Düzenlenemedi!" ,"tip"=> "danger" );

					$this->session->set_flashdata('mesaj',$mesaj);

					redirect(base_url("panel/blog_yonetim"));

				}
	        }
	        else
	        {
				$mesaj = array("icerik"=>$this->upload->display_errors() ,"tip"=> "danger" );
				$this->session->set_flashdata('mesaj',$mesaj);
				redirect(base_url("panel/blog_yonetim"));

	        }

	    }else{

	    	if($this->blog->blog_duzenle($id,$blog)){

	        	$mesaj = array("icerik"=>$blog["blogBaslik"]." Düzenlendi." ,"tip"=> "success" );
				$this->session->set_flashdata('mesaj',$mesaj);
				redirect(base_url("panel/blog_yonetim"));

			}else{

	        	$mesaj = array("icerik"=>"Blog Düzenlenemedi!" ,"tip"=> "danger" );

				$this->session->set_flashdata('mesaj',$mesaj);

				redirect(base_url("panel/blog_yonetim"));

			}

			
		}

    }

}


 ?>