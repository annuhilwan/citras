<?php
class Apotek_model extends CI_Model {       
	function __construct(){            
	  	parent::__construct();
		$this->user_id =isset($this->session->get_userdata()['user_details'][0]->id)?$this->session->get_userdata()['user_details'][0]->users_id:'1';
	}
	
	public function insertRow($table, $data){
	  	$this->db->insert($table, $data);
	  	return  $this->db->insert_id();
	}
	
	function autocomplete_obat($nama_obat){
        $this->db->select("mo.id,mo.nama_obat,mo.stok,mo.harga_jual", FALSE);
		$this->db->where('mo.status', 'ACTIVE');
		$this->db->group_start();
		$this->db->like('mo.nama_obat', $nama_obat , 'both');
		$this->db->group_end();
        $this->db->order_by('mo.id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('master_obat mo')->result();
    }
	
	function save_db_update_stok_obat($post){

		$res = $this->db->query("update master_obat
									set stok = stok - ".$post['jumlah_beli']."
										where 	id = ".$post['id_obat']."");
		return $res;
	}
	
	
}
?>