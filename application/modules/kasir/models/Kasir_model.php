<?php
class Kasir_model extends CI_Model {       
	function __construct(){            
	  	parent::__construct();
		$this->user_id =isset($this->session->get_userdata()['user_details'][0]->id)?$this->session->get_userdata()['user_details'][0]->users_id:'1';
	}
	
	function get_data_pembayaran(){
		
		
		
		$res = $this->db->query("select a.id, a.nama_lengkap, a.status, a.jenis_pelayanan , a.created_date, a.nama_perusahaan
								 from trx_pelayanan a 
								 left join master_pasien b on (a.id_pasien = b.id) order by a.id desc")->result_array();
		return $res;
	}
	
	function get_data_paket_lab($id){
		
		
		$res = $this->db->query("SELECT a.id, b.nama_paket,a.jumlah_nilai,a.nilai_tagihan 
									FROM trx_tagihan a left join  master_paket_medcheck_header b on (a.id_paket_lab = b.id) 
										where a.id_pelayanan=".$id." and a.jenis_tagihan ='PAKET LAB';")->result_array();
		return $res;
	}
	
	function get_data_tambahan_pemeriksaan($id){
		
		
		$res = $this->db->query("SELECT a.id, b.nama_pemeriksaan,a.jumlah_nilai,a.nilai_tagihan 
									FROM trx_tagihan a left join  master_pemeriksaan b on (a.id_lab = b.id) 
										where a.id_pelayanan=".$id." and a.jenis_tagihan ='TAMBAHAN PEMERIKSAAN';")->result_array();
		return $res;
	}
	
	function get_data_total_tagihan($id){
		
		$res = $this->db->query("SELECT sum(nilai_tagihan) as total_tagihan FROM trx_tagihan where id_pelayanan  = ".$id." ")->row_array();
		return $res;
	}
	
}
?>