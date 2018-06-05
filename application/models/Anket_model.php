<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Anket_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function sorular()
	{
		return $this->db->get("anket")->result();
	}

	//Uygunluk Anketi

	public function muhendislik()
	{
		$this->db->where("kategoriID",1);
		return $this->db->get("anket")->result();
	}

	public function bilgisayar()
	{
		$this->db->where("kategoriID",2);
		return $this->db->get("anket")->result();
	}

	public function elektronik()
	{
		$this->db->where("kategoriID",3);
		return $this->db->get("anket")->result();
	}

	public function uygunluk_secenekler()
	{
		$this->db->where("olcekTipiID",1);
		return $this->db->get("olcek")->result();
	}

	public function uygunluk_kaydet($sonuclar)
	{
		return $this->db->insert_batch("anketcevap",$sonuclar);
	}

	//Üni Şehir Anketi

	public function uni()
	{
		$this->db->where("kategoriUniSehirID",1);
		return $this->db->get("anketunisehir")->result();
	}

	public function sehir()
	{
		$this->db->where("kategoriUniSehirID",2);
		return $this->db->get("anketunisehir")->result();
	}

	public function uni_sehir_secenekler()
	{
		$this->db->where("olcekTipiID",2);
		return $this->db->get("olcek")->result();
	}


	public function uni_sehir_kaydet($sonuc)
	{
		return $this->db->insert_batch("anketunisehircevap",$sonuc);
	}

	public function uni_sehir_vektor()
	{
		return $this->db->get("unisehirfuturevektor")->result();
	}
	
	public function psikometrik()
	{
		return $this->db->get("psikometrik")->result();
	}

	public function psikometrik_cevaplar()
	{
		$this->db->select("psikometrik.soruID,psikometrik.soruCevap,psikometrik.psikoKategoriID,psikokategori.*");
		$this->db->from("psikometrik");
		$this->db->join("psikokategori","psikometrik.psikoKategoriID = psikokategori.psikoKategoriID");
		return $this->db->get()->result();
	}

	public function psikometrik_kaydet($sonuc)
	{
		return $this->db->insert_batch("psikocevap",$sonuc);
	}

	public function universite_bilgiler($uniId)
	{
		$this->db->select("universite.*,bolum.*");
		$this->db->from("universite");
		$this->db->join("bolum","universite.bolumID = bolum.bolumID");
		$this->db->where("universite.uniID",$uniId);
		return $this->db->get()->row();
	}


}


 ?>