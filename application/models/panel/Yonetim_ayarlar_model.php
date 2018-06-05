<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Yonetim_ayarlar_model extends CI_Model{
	/*
	
	if ( ! $this->db->simple_query('SELECT `example_field` FROM `example_table`'))
	{
	        $error = $this->db->error(); // Has keys 'code' and 'message'
	}

	*/
	public function __construct()
	{
        // Call the CI_Model constructor
        parent::__construct();
	}

	public function yonetici_listesi()
	{
		return $this->db->get("kullanicilar")->result();
	}

	public function yonetici_ekle($kullanicilar)
	{
		$this->db->set($kullanicilar);
		return $this->db->insert("kullanicilar");
	}

	public function yonetici_duzenle($id)
	{
		$this->db->where('id',$id);
		return $this->db->get("kullanicilar")->row();
	}

	public function yonetici_guncelle($id,$kullanicilar)
	{
		$this->db->where('id',$id);
		return $this->db->update("kullanicilar",$kullanicilar);
	}

	public function yonetici_sil($id)
	{
		$this->db->where("id",$id);
		return $this->db->delete("kullanicilar");

	}



}


 ?>