<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Hesap_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function giris($kullaniciTckNo,$sifre)
	{
		$this->db->where(array('kullaniciTckNo' => $kullaniciTckNo ,'kullaniciSifre'=>$sifre ));
		$this->db->or_where("email",$kullaniciTckNo);

		return $this->db->get("kullanici")->row();

	}

	public function kayit($kullanici)
	{
		$kullanici["meslekID"] = 2;
		$this->db->where("email",$kullanici["email"]);
		$kontrolMail = $this->db->get("kullanici")->row();
	
		if($kontrolMail == NULL){
			$this->db->where("kullaniciTckNo",$kullanici["kullaniciTckNo"]);
			$kontrolkullaniciTckNo = $this->db->get("kullanici")->row();
			if($kontrolkullaniciTckNo == NULL){
				if($this->db->insert("kullanici",$kullanici)){
					$this->db->where(array('kullaniciTckNo' => $kullanici["kullaniciTckNo"] ,'kullaniciSifre'=>$kullanici["sifre"] ));
					return $this->db->get("kullanici")->row();
				}else{
					return false;
				}
			}else{
				return 2;//Kullanici Adı kayıtlı
			}
		}else{
			return 1;//Mail Adresi Kayıtlı
		}
		
	}

	public function profil_guncelle($kullaniciTckNo,$kullanici)
	{
		$this->db->where("kullaniciTckNo",$kullaniciTckNo);
		return $this->db->update("kullanici",$kullanici);
	}

	public function hesap($kullaniciTckNo)
	{
		$this->db->where("kullaniciTckNo",$kullaniciTckNo);
		return $this->db->get("kullanici")->row();
	}

}


 ?>