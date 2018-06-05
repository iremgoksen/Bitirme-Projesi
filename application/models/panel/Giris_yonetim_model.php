<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Giris_yonetim_model extends CI_Model{
	
	public function __construct()
	{
        parent::__construct();
	}

	public function giris($kullaniciAdi,$sifre)
	{
		$where =  array('kullaniciAdi' => $kullaniciAdi, 'sifre' => $sifre);
		$this->db->where($where);
		return $this->db->get("kullanicilar")->row();
	}


		public function sayfaSayisi()
	{
		return $this->db->query("SELECT(  
					      SELECT COUNT(*)  
					      FROM   kullanicilar  
					      ) AS kullaniciSayisi,  
					      (SELECT COUNT(*)  
					      FROM   duyurular  
					      ) AS duyuruSayisi,
					      (SELECT COUNT(*)  
					      FROM   istatistikler  
					      ) AS istatistikSayisi,
					      (SELECT COUNT(*)  
					      FROM   mesajlar  
					      ) AS mesajSayisi,
					      (SELECT COUNT(*)  
					      FROM   bloglar  
					      ) AS blogSayisi,
					      (SELECT COUNT(*)  
					      FROM   istatistikler  
					      ) AS istatsitikSayisi,
					      (SELECT COUNT(*)  
					      FROM   sayfalar  
					      ) AS sayfaSayisi,
					      (SELECT COUNT(*)  
					      FROM   hocalar  
					      ) AS hocaSayisi,
					      (SELECT COUNT(*)  
					      FROM   kullanicilar  
					      ) AS kullaniciSayisi
					FROM DUAL")->row();
		
	}

}

 ?>