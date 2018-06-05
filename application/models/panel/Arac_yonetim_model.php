<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Arac_yonetim_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function arac_listele($id)
	{
		if(isset($id)){
			$this->db->where("galeriId",$id);
			return $this->db->get("galeri")->row();
		}else{
			return $this->db->get("galeri")->result();
		}
		
	}

	public function resim_listele($id)
	{
		$this->db->where("galeriId",$id);
		return $this->db->get("resimler")->result();
	}

	public function arac_ekle($arac,$resimler)
	{
		$this->db->trans_start();
		$this->db->insert("galeri",$arac);
		$galeriId = $this->db->insert_id();
		
		foreach ($resimler as $resim) {
			$resimArr = array('galeriId' => $galeriId ,'resimAd' => $resim);
			$this->db->insert("resimler",$resimArr);
		}
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE) {
		    $this->db->trans_rollback();
		    return FALSE;
		} 
		else {
			$this->db->trans_commit();
		    
		    return TRUE;
		}
	}

	public function arac_duzenle($galeriId,$arac,$resimler)
	{
		$this->db->trans_start();
		$this->db->where("galeriId",$galeriId);
		$this->db->update("galeri",$arac);
		
		if(!empty($resimler)){
			foreach ($resimler as $resim) {
				$resimArr = array('galeriId' => $galeriId ,'resimAd' => $resim);
				$this->db->insert("resimler",$resimArr);
			}
		}
		
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE) {
		    $this->db->trans_rollback();
		    return FALSE;
		} 
		else {
			$this->db->trans_commit();
		    
		    return TRUE;
		}
	}

	public function arac_sil($id)
	{
		$this->db->where("galeriId",$id);
		return $this->db->delete("galeri");
	}


	public function resim_sil($id)
	{
		$this->db->where("resimId",$id);
		return $this->db->delete("resimler");
	}
}


 ?>