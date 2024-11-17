<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class Apotek extends CI_Controller {
	
	function __construct() {
        parent::__construct(); 

		$this->load->model('Apotek_model');

		$this->user_id = isset($this->session->get_userdata()['user_details'][0]->id)?$this->session->get_userdata()['user_details'][0]->users_id:'1';
		$this->load->helper(array('url','html','form'));
    }
	
	public function data_obat (){
        is_login();
	    $table = 'master_obat';
    	$primaryKey = 'id';
    	$columns = array(
			array( 'db' => 'id', 'dt' => 0 ),
			array( 'db' => 'kode_obat', 'dt' => 1 ),
			array( 'db' => 'nama_obat', 'dt' => 2 ),
			array( 'db' => 'lokasi', 'dt' => 3 ),
			array( 'db' => 'stok', 'dt' => 4 ),
			array( 'db' => 'harga_jual', 'dt' => 5 ),
			array( 'db' => 'id', 'dt' => 6)
		);

        $sql_details = array(
			'user' => $this->db->username,
			'pass' => $this->db->password,
			'db'   => $this->db->database,
			'host' => $this->db->hostname
		);
		$where = array("status = 'Active'");
		$output_arr = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where);
		foreach ($output_arr['data'] as $key => $value) {
			$id = $output_arr['data'][$key][count($output_arr['data'][$key])  - 1];
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] = '';
			if(CheckPermission('user', "all_update")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonUser mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
			}else if(CheckPermission('user', "own_update") && (CheckPermission('user', "all_update")!=true)){
				$user_id =getRowByTableColomId($table,$id,'id','id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonUser mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
				}
			}
			
			if(CheckPermission('user', "all_delete")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="setId('.$id.', \'user\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';}
			else if(CheckPermission('user', "own_delete") && (CheckPermission('user', "all_delete")!=true)){
				$user_id =getRowByTableColomId($table,$id,'users_id','user_id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="setId('.$id.', \'user\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';
				}
			}
            $output_arr['data'][$key][0] = '<input type="checkbox" name="selData" value="'.$output_arr['data'][$key][0].'">';
		}
		echo json_encode($output_arr);
    }

   public function list_data_obat(){
        is_login();
       // if(CheckPermission("user", "own_read")){
            $this->load->view('include/header');
            $this->load->view('data_obat');                
            $this->load->view('include/footer');            
       /* } else {
            $this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
            redirect( base_url().'user/profile', 'refresh');
        }
		*/
    }
	
	public function get_modal_obat() {
        is_login();
		$idPasien = $this->input->post('id');
        echo $this->load->view('add_obat', Array('idPasien'=>$idPasien), true);
        exit;
    }
	
	public function get_modal_obat_rawat_jalan() {
        is_login();
		$idPasien = $this->input->post('id');
        echo $this->load->view('add_obat_rawat_jalan', Array('idPasien'=>$idPasien), true);
        exit;
    }
	
	public function save_master_obat() {   
				$data['status'] = "ACTIVE";
				$data['kode_obat'] = $this->input->post('kode_obat');
				$data['nama_obat'] = $this->input->post('nama_obat');
				$data['lokasi'] = $this->input->post('lokasi_obat');
				$data['stok'] = $this->input->post('stok_obat');
				$data['harga_jual'] = $this->input->post('harga_obat');
                $this->Apotek_model->insertRow('master_obat', $data);
                 redirect( base_url().'apotek/list_data_obat/');
    }
	
	public function save_trx_obat_rawat_jalan() {   
				$data['status'] = "ACTIVE";
				$idPelayanan = $this->input->post('id_pelayanan');
				$data['id_pelayanan'] = $idPelayanan;
				$data['id_obat'] = $this->input->post('id_obat');
				$data['jenis_tagihan'] = 'OBAT';
				$jumlah_nilai = $this->input->post('jumlah_beli');
				$harga_satuan = $this->input->post('harga_jual');
				$data['jumlah_nilai'] = $jumlah_nilai;
				$data['nilai_tagihan'] = $jumlah_nilai * $harga_satuan;
                $this->Apotek_model->insertRow('trx_tagihan', $data);
				
				
				$post = $this->input->post();
			
			//print_r($post);die;
			$res = $this->Apotek_model->save_db_update_stok_obat($post);
			echo $this->db->last_query();
			//redirect( base_url().'registrasi/detailRawatJalan/'.$idPelayanan);
			
		
		
                 
    }
	
	public function get_autocomplete_obat(){
        if (isset($_GET['term'])) {
            $result = $this->Apotek_model->autocomplete_obat($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->nama_obat,
				'nama_obat' => $row->nama_obat,
				'stok' => $row->stok,
				'harga_jual' => $row->harga_jual,
				'id_obat' => $row->id,
				);
				
                echo json_encode($arr_result);
            }
        }
    }


}