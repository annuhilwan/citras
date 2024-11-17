<?php
class Master_model extends CI_Model {       
	function __construct(){            
	  	parent::__construct();
		$this->user_id =isset($this->session->get_userdata()['user_details'][0]->id)?$this->session->get_userdata()['user_details'][0]->users_id:'1';
	}
	
	function data_perusahaan(){
		$res = $this->db->get('master_perusahaan');
		return $res->result_array();
	}

	function data_perusahaan_order_by_name(){
		$res = $this->db->query("SELECT  * from  master_perusahaan order by nama_perusahaan;")->result_array();
		return $res;
	}
	
	function get_data_paket(){
		$res = $this->db->query("select * from master_paket_medcheck_header")->result_array();
		return $res;
	}
	
	function get_data_master_dokter(){
		$res = $this->db->query("select * from master_dokter")->result_array();
		return $res;
	}
	
	function get_data_master_jawaban_resume(){
		$res = $this->db->query("select * from master_global_condition")->result_array();
		return $res;
	}
	
	function get_data_pasien($idPaket){
		
		
		$res = $this->db->query("SELECT id, nama_paket,harga_paket FROM master_paket_medcheck_header where id = ".$idPaket."")->row_array();
		return $res;
	}
	
	function get_data_master_perusahaan($id){
		$res = $this->db->query("SELECT * FROM master_perusahaan where id = ".$id."")->row_array();
		return $res;
	}
	
	function get_data_master_identitas($id){
		$res = $this->db->query("SELECT * FROM master_identitas where id = ".$id."")->row_array();
		return $res;
	}
	
	function get_data_master_kota($id){
		$res = $this->db->query("SELECT * FROM master_kota where id = ".$id."")->row_array();
		return $res;
	}
	
	function get_data_master_kecamatan($id){
		$res = $this->db->query("SELECT * FROM master_kecamatan where id = ".$id."")->row_array();
		return $res;
	}
	
	function get_data_master_kelurahan($id){
		$res = $this->db->query("SELECT * FROM master_kelurahan where id = ".$id."")->row_array();
		return $res;
	}
	
	function get_data_master_tipe_pegawai($id){
		$res = $this->db->query("SELECT * FROM master_tipe_pegawai where id = ".$id."")->row_array();
		return $res;
	}
	
	function get_data_master_jabatan($id){
		$res = $this->db->query("SELECT * FROM master_jabatan where id = ".$id."")->row_array();
		return $res;
	}
	
	function get_data_master_bagian($id){
		$res = $this->db->query("SELECT * FROM master_bagian where id = ".$id."")->row_array();
		return $res;
	}
	
	function get_data_master_group($id){
		$res = $this->db->query("SELECT * FROM master_group where id = ".$id."")->row_array();
		return $res;
	}
	
	function get_data_master_jenis_pembayaran($id){
		$res = $this->db->query("SELECT * FROM master_jenis_pembayaran where id = ".$id."")->row_array();
		return $res;
	}
	
	function get_data_master_asuransi($id){
		$res = $this->db->query("SELECT * FROM master_asuransi where id = ".$id."")->row_array();
		return $res;
	}
	
	function get_data_master_paket_medcheck($id){
		$res = $this->db->query("SELECT * FROM master_paket_medcheck_header where id = ".$id."")->row_array();
		return $res;
	}
	
	function get_data_model_master_dokter($id){
		$res = $this->db->query("SELECT * FROM master_dokter where id = ".$id."")->row_array();
		return $res;
	}
	
	function get_data_model_master_jawaban_resume($id){
		$res = $this->db->query("SELECT * FROM master_global_condition where id = ".$id."")->row_array();
		return $res;
	}
	
	function get_data_master_pertanyaan($id){
		$res = $this->db->query("SELECT id, kategori_pertanyaan, nama_pertanyaan, pertanyaan_inggris, variable_name, default_jawaban,urutan FROM master_pertanyaan where id = ".$id."")->row_array();
		return $res;
	}
	
	function get_data_master_pemeriksaan($id){
		$res = $this->db->query("SELECT * FROM master_pemeriksaan where id = ".$id."")->row_array();
		return $res;
	}
	
	function get_data_master_satuan_hasil($id){
		$res = $this->db->query("SELECT * FROM master_satuan_hasil where id = ".$id."")->row_array();
		return $res;
	}
	
	function data_identitas(){
		$res = $this->db->get('master_identitas');
		return $res->result_array();
	}
	
	function data_kota(){
		$res = $this->db->get('master_kota');
		return $res->result_array();
	}
	
	function data_kecamatan(){
		$res = $this->db->get('master_kecamatan');
		return $res->result_array();
	}
	
	function data_kelurahan(){
		$res = $this->db->get('master_kelurahan');
		return $res->result_array();
	}
	
	function data_tipe_pegawai(){
		$res = $this->db->get('master_tipe_pegawai');
		return $res->result_array();
	}
	
	function data_jabatan(){
		$res = $this->db->get('master_jabatan');
		return $res->result_array();
	}
	
	function data_bagian(){
		$res = $this->db->get('master_bagian');
		return $res->result_array();
	}
	
	function data_group(){
		$res = $this->db->get('master_group');
		return $res->result_array();
	}
	
	function data_jenis_pembayaran(){
		$res = $this->db->get('master_jenis_pembayaran');
		return $res->result_array();
	}
	
	function data_asuransi(){
		$res = $this->db->get('master_asuransi');
		return $res->result_array();
	}
	
	public function insertRow($table, $data){
	  	$this->db->insert($table, $data);
	  	return  $this->db->insert_id();
	}
	
	function insertUserPerusahaan($data,$idPerusahaan) {
		$save2 = array();
		$save2['user_id'] = "1";
		$save2['status'] = "active";
		$save2['is_deleted'] = "0";
		$save2['name'] = $data['nama_perusahaan'];
		$original_string = $data['password_perusahaan'];
		//print_r($new_date1);die;
		$password = password_hash($original_string, PASSWORD_DEFAULT);
		$save2['password'] = $password;
		$save2['email'] = $data['user_id_perusahaan'];
		$save2['profile_pic'] = "user.png";
		$save2['user_type'] = "Perusahaan";
		//$save2['id_pasien'] = $idPerusahaan['id'];
		$res = $this->db->insert('users', $save2);
	}
	
	public function updateRow($table, $col, $colVal, $data) {
  		$this->db->where($col,$colVal);
		$this->db->update($table,$data);
		return true;
  	}
	
	function autocomplete_pemeriksaan($nama_pemeriksaan){
        $this->db->select("mp.id,mp.nama_pemeriksaan,mp.nama_pelayanan", FALSE);
		$this->db->where('mp.status', 'ACTIVE');
		$this->db->group_start();
		$this->db->like('mp.nama_pemeriksaan', $nama_pemeriksaan , 'both');
		$this->db->group_end();
        $this->db->order_by('mp.id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('master_pemeriksaan mp')->result();
    }
	
	function get_data_medcheck_detail_pemeriksaan($idPaket){
		
		
		$res = $this->db->query("SELECT a.id, c.nama_paket,b.nama_pemeriksaan,b.nama_pelayanan FROM master_paket_medcheck_detail a left join  master_pemeriksaan b on (a.id_pemeriksaan = b.id)  left join master_paket_medcheck_header c on (a.id_header = c.id) where c.id=".$idPaket." ;")->result_array();
		return $res;
	}
	
	function get_data_detail_paket($idPaket){
		
		
		$res = $this->db->query("SELECT a.id, c.nama_paket,b.nama_pemeriksaan, FROM master_paket_medcheck_detail a left join  master_pemeriksaan b on (a.id_pemeriksaan = b.id)  left join master_paket_medcheck_header c on (a.id_header = c.id) where c.id=".$idPaket." ;")->result_array();
		return $res;
	}
	
	function do_delete_master_pertanyaan($id='') {
		$this->db->where('id', $id);  
		$this->db->delete('master_pertanyaan'); 
	}
	
	function do_delete_master_pemeriksan($id='') {
		$this->db->where('id', $id);  
		$this->db->delete('master_pemeriksaan'); 
	}
	
	function do_delete_master_satuan_hasil($id='') {
		$this->db->where('id', $id);  
		$this->db->delete('master_satuan_hasil'); 
	}
	
	function do_delete_master_perusahaan($id='') {
		$this->db->where('id', $id);  
		$this->db->delete('master_perusahaan'); 
	}
	
	function do_delete_master_identitas($id='') {
		$this->db->where('id', $id);  
		$this->db->delete('master_identitas'); 
	}
	
	function do_delete_master_kota($id='') {
		$this->db->where('id', $id);  
		$this->db->delete('master_kota'); 
	}
	
	function do_delete_master_kecamatan($id='') {
		$this->db->where('id', $id);  
		$this->db->delete('master_kecamatan'); 
	}
	
	function do_delete_master_kelurahan($id='') {
		$this->db->where('id', $id);  
		$this->db->delete('master_kelurahan'); 
	}
	
	function do_delete_master_tipe_pegawai($id='') {
		$this->db->where('id', $id);  
		$this->db->delete('master_tipe_pegawai'); 
	}
	
	function do_delete_master_jabatan($id='') {
		$this->db->where('id', $id);  
		$this->db->delete('master_jabatan'); 
	}
	
	function do_delete_master_bagian($id='') {
		$this->db->where('id', $id);  
		$this->db->delete('master_bagian'); 
	}
	
	function do_delete_master_group($id='') {
		$this->db->where('id', $id);  
		$this->db->delete('master_group'); 
	}
	
	function do_delete_master_jenis_pembayaran($id='') {
		$this->db->where('id', $id);  
		$this->db->delete('master_jenis_pembayaran'); 
	}
	
	function do_delete_master_asuransi($id='') {
		$this->db->where('id', $id);  
		$this->db->delete('master_asuransi'); 
	}
	
	function do_delete_master_paket($id='') {
		$this->db->where('id', $id);  
		$this->db->delete('master_paket_medcheck_header'); 
	}
	
	function do_delete_master_dokter($id='') {
		$this->db->where('id', $id);  
		$this->db->delete('master_dokter'); 
	}
	
	function do_delete_master_jawaban_resume($id='') {
		$this->db->where('id', $id);  
		$this->db->delete('master_global_condition'); 
	}
	
	function delete_master_paket_just_detail($id='') {
		$this->db->where('id', $id);  
		$this->db->delete('master_paket_medcheck_detail'); 
	}
	
	function do_delete_master_paket_detail($id='') {
		$this->db->where('id_header', $id);  
		$this->db->delete('master_paket_medcheck_detail'); 
	}
	
	function autocomplete_get_satuan_pemerisaan($nama_satuan){
        $this->db->select("msh.id,msh.nama_satuan_hasil", FALSE);
		$this->db->where('msh.status', 'ACTIVE');
		$this->db->group_start();
		$this->db->like('msh.nama_satuan_hasil', $nama_satuan , 'both');
		$this->db->group_end();
        $this->db->order_by('msh.id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('master_satuan_hasil msh')->result();
    }
}
?>