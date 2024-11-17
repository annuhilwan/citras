<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class Master extends CI_Controller {

    function __construct() {
        parent::__construct(); 
		$this->load->model('User_model');
		$this->load->model('Master_model');
		$this->load->model('registrasi/Registrasi_model');
		$this->user_id = isset($this->session->get_userdata()['user_details'][0]->id)?$this->session->get_userdata()['user_details'][0]->users_id:'1';
    }

    /**
      * This function is redirect to users profile page
      * @return Void
      */
    public function index() {
    	if(is_login()){
    		redirect( base_url().'registrasi/inputPasienBaru', 'refresh');
    	} 
    }
	
	public function save_master_pasien(){
		$this->load->model('registrasi_model');
		is_login();
		$post = $this->input->post();
		//print_r($post);die;	
		if(isset($post['save'])){
			$res = $this->Registrasi_model->save_db_master_pasien($post);
			return redirect('/registrasi/list_data_pasien');
			//die;
			
		}
		
	}
	
	public function list_master_perusahaan(){
        is_login();
       // if(CheckPermission("user", "own_read")){
            $this->load->view('include/header');
            $this->load->view('data_master_perusahaan');                
            $this->load->view('include/footer');            
       /* } else {
            $this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
            redirect( base_url().'user/profile', 'refresh');
        }
		*/
    }
	
	public function list_master_paket(){
        is_login();
		
			$data = $this->Master_model->get_data_paket();
			
            $this->load->view('include/header');
            $this->load->view('data_master_paket',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
	
	public function list_master_dokter(){
        is_login();
		
			$data = $this->Master_model->get_data_master_dokter();
			
            $this->load->view('include/header');
            $this->load->view('data_master_dokter',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
	
	public function list_data_hasil_resume(){
        is_login();
		
			$data = $this->Master_model->get_data_master_jawaban_resume();
			
            $this->load->view('include/header');
            $this->load->view('data_master_jawaban_resume',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
	
	public function list_master_pertanyaan(){
        is_login();
       // if(CheckPermission("user", "own_read")){
            $this->load->view('include/header');
            $this->load->view('data_master_pertanyaan');                
            $this->load->view('include/footer');            
       /* } else {
            $this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
            redirect( base_url().'user/profile', 'refresh');
        }
		*/
    }
	
	public function list_master_pemeriksaan(){
        is_login();
       // if(CheckPermission("user", "own_read")){
            $this->load->view('include/header');
            $this->load->view('data_master_pemeriksaan');                
            $this->load->view('include/footer');            
       /* } else {
            $this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
            redirect( base_url().'user/profile', 'refresh');
        }
		*/
    }
	
	public function list_master_satuan_hasil(){
        is_login();
       // if(CheckPermission("user", "own_read")){
            $this->load->view('include/header');
            $this->load->view('data_master_satuan_hasil');                
            $this->load->view('include/footer');            
       /* } else {
            $this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
            redirect( base_url().'user/profile', 'refresh');
        }
		*/
    }
	
	public function list_master_identitas(){
        is_login();
       // if(CheckPermission("user", "own_read")){
            $this->load->view('include/header');
            $this->load->view('data_master_identitas');                
            $this->load->view('include/footer');            
       /* } else {
            $this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
            redirect( base_url().'user/profile', 'refresh');
        }
		*/
    }
	
	public function list_master_kota(){
        is_login();
       // if(CheckPermission("user", "own_read")){
            $this->load->view('include/header');
            $this->load->view('data_master_kota');                
            $this->load->view('include/footer');            
       /* } else {
            $this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
            redirect( base_url().'user/profile', 'refresh');
        }
		*/
    }
	
	public function list_master_kecamatan(){
        is_login();
       // if(CheckPermission("user", "own_read")){
            $this->load->view('include/header');
            $this->load->view('data_master_kecamatan');                
            $this->load->view('include/footer');            
       /* } else {
            $this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
            redirect( base_url().'user/profile', 'refresh');
        }
		*/
    }
	
	public function list_master_kelurahan(){
        is_login();
       // if(CheckPermission("user", "own_read")){
            $this->load->view('include/header');
            $this->load->view('data_master_kelurahan');                
            $this->load->view('include/footer');            
       /* } else {
            $this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
            redirect( base_url().'user/profile', 'refresh');
        }
		*/
    }
	
	public function list_master_tipe_pegawai(){
        is_login();
       // if(CheckPermission("user", "own_read")){
            $this->load->view('include/header');
            $this->load->view('data_master_tipe_pegawai');                
            $this->load->view('include/footer');            
       /* } else {
            $this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
            redirect( base_url().'user/profile', 'refresh');
        }
		*/
    }
	
	public function list_master_jabatan(){
        is_login();
       // if(CheckPermission("user", "own_read")){
            $this->load->view('include/header');
            $this->load->view('data_master_jabatan');                
            $this->load->view('include/footer');            
       /* } else {
            $this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
            redirect( base_url().'user/profile', 'refresh');
        }
		*/
    }
	
	public function list_master_bagian(){
        is_login();
       // if(CheckPermission("user", "own_read")){
            $this->load->view('include/header');
            $this->load->view('data_master_bagian');                
            $this->load->view('include/footer');            
       /* } else {
            $this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
            redirect( base_url().'user/profile', 'refresh');
        }
		*/
    }
	
	public function list_master_group(){
        is_login();
       // if(CheckPermission("user", "own_read")){
            $this->load->view('include/header');
            $this->load->view('data_master_group');                
            $this->load->view('include/footer');            
       /* } else {
            $this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
            redirect( base_url().'user/profile', 'refresh');
        }
		*/
    }
	
	public function list_master_jenis_pembayaran(){
        is_login();
       // if(CheckPermission("user", "own_read")){
            $this->load->view('include/header');
            $this->load->view('data_master_jenis_pembayaran');                
            $this->load->view('include/footer');            
       /* } else {
            $this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
            redirect( base_url().'user/profile', 'refresh');
        }
		*/
    }
	
	public function list_master_asuransi(){
        is_login();
       // if(CheckPermission("user", "own_read")){
            $this->load->view('include/header');
            $this->load->view('data_master_asuransi');                
            $this->load->view('include/footer');            
       /* } else {
            $this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
            redirect( base_url().'user/profile', 'refresh');
        }
		*/
    }
	
	public function data_master_perusahaan(){
        is_login();
	    $table = 'master_perusahaan';
    	$primaryKey = 'id';
    	$columns = array(
			array( 'db' => 'id', 'dt' => 0 ),
			array( 'db' => 'nama_perusahaan', 'dt' => 1 ),
			array( 'db' => 'id', 'dt' => 2 )
		);

        $sql_details = array(
			'user' => $this->db->username,
			'pass' => $this->db->password,
			'db'   => $this->db->database,
			'host' => $this->db->hostname
		);
		$where = array("status = 'ACTIVE'");
		$output_arr = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where);
		foreach ($output_arr['data'] as $key => $value) {
			$id = $output_arr['data'][$key][count($output_arr['data'][$key])  - 1];
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] = '';
			if(CheckPermission('user', "all_update")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonPerusahaan mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
			}else if(CheckPermission('user', "own_update") && (CheckPermission('user', "all_update")!=true)){
				$user_id =getRowByTableColomId($table,$id,'id','id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonPerusahaan mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
				}
			}
			
			if(CheckPermission('user', "all_delete")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterPerusahaan('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';}
			else if(CheckPermission('user', "own_delete") && (CheckPermission('user', "all_delete")!=true)){
				$user_id =getRowByTableColomId($table,$id,'users_id','user_id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterPerusahaan('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';
				}
			}
            $output_arr['data'][$key][0] = '<input type="checkbox" name="selData" value="'.$output_arr['data'][$key][0].'">';
		}
		echo json_encode($output_arr);
    }
	
	public function data_master_pertanyaan(){
        is_login();
	    $table = 'master_pertanyaan';
    	$primaryKey = 'id';
    	$columns = array(
			array( 'db' => 'id', 'dt' => 0 ),
			array( 'db' => 'kategori_pertanyaan', 'dt' => 1 ),
			array( 'db' => 'nama_pertanyaan', 'dt' => 2 ),
			array( 'db' => 'default_jawaban', 'dt' => 3 ),
			array( 'db' => 'urutan', 'dt' => 4 ),
			array( 'db' => 'id', 'dt' => 5 )
		);

        $sql_details = array(
			'user' => $this->db->username,
			'pass' => $this->db->password,
			'db'   => $this->db->database,
			'host' => $this->db->hostname
		);
		$where = array("status = 'ACTIVE'");
		$output_arr = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where);
		foreach ($output_arr['data'] as $key => $value) {
			$id = $output_arr['data'][$key][count($output_arr['data'][$key])  - 1];
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] = '';
			if(CheckPermission('user', "all_update")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonPertanyaan mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
			}else if(CheckPermission('user', "own_update") && (CheckPermission('user', "all_update")!=true)){
				$user_id =getRowByTableColomId($table,$id,'id','id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonPertanyaan mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
				}
			}
			
			if(CheckPermission('user', "all_delete")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterPertannyaan('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';}
			else if(CheckPermission('user', "own_delete") && (CheckPermission('user', "all_delete")!=true)){
				$user_id =getRowByTableColomId($table,$id,'users_id','user_id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterPertannyaan('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';
				}
			}
            $output_arr['data'][$key][0] = '<input type="checkbox" name="selData" value="'.$output_arr['data'][$key][0].'">';
		}
		echo json_encode($output_arr);
    }
	
	public function data_master_pemeriksaan(){
        is_login();
	    $table = 'master_pemeriksaan';
    	$primaryKey = 'id';
    	$columns = array(
			array( 'db' => 'id', 'dt' => 0 ),
			array( 'db' => 'nama_pelayanan', 'dt' => 1 ),
			array( 'db' => 'nama_pemeriksaan', 'dt' => 2 ),
			array( 'db' => 'nilai_min', 'dt' => 3 ),
			array( 'db' => 'nilai_min_wanita', 'dt' => 4 ),
			array( 'db' => 'nilai_max', 'dt' => 5 ),
			array( 'db' => 'nilai_max_wanita', 'dt' => 6 ),
			array( 'db' => 'nilai_text', 'dt' => 7 ),
			array( 'db' => 'nilai_text_wanita', 'dt' => 8 ),
			array( 'db' => 'id_satuan', 'dt' => 9 ),
			array( 'db' => 'harga_pemeriksaan', 'dt' => 10 ),
			array( 'db' => 'id', 'dt' => 11 )
		);

        $sql_details = array(
			'user' => $this->db->username,
			'pass' => $this->db->password,
			'db'   => $this->db->database,
			'host' => $this->db->hostname
		);
		$where = array("status = 'ACTIVE'");
		$output_arr = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where);
		foreach ($output_arr['data'] as $key => $value) {
			$id = $output_arr['data'][$key][count($output_arr['data'][$key])  - 1];
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] = '';
			if(CheckPermission('user', "all_update")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonPemeriksaan mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
			}else if(CheckPermission('user', "own_update") && (CheckPermission('user', "all_update")!=true)){
				$user_id =getRowByTableColomId($table,$id,'id','id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonPemeriksaan mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
				}
			}
			
			if(CheckPermission('user', "all_delete")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterPemeriksaan('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';}
			else if(CheckPermission('user', "own_delete") && (CheckPermission('user', "all_delete")!=true)){
				$user_id =getRowByTableColomId($table,$id,'users_id','user_id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterPemeriksaan('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';
				}
			}
            $output_arr['data'][$key][0] = '<input type="checkbox" name="selData" value="'.$output_arr['data'][$key][0].'">';
		}
		echo json_encode($output_arr);
    }
	
	public function data_master_satuan_hasil(){
        is_login();
	    $table = 'master_satuan_hasil';
    	$primaryKey = 'id';
    	$columns = array(
			array( 'db' => 'id', 'dt' => 0 ),
			array( 'db' => 'nama_satuan_hasil', 'dt' => 1 ),
			array( 'db' => 'id', 'dt' => 2 )
		);

        $sql_details = array(
			'user' => $this->db->username,
			'pass' => $this->db->password,
			'db'   => $this->db->database,
			'host' => $this->db->hostname
		);
		$where = array("status = 'ACTIVE'");
		$output_arr = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where);
		foreach ($output_arr['data'] as $key => $value) {
			$id = $output_arr['data'][$key][count($output_arr['data'][$key])  - 1];
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] = '';
			if(CheckPermission('user', "all_update")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonSatuanHasil mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
			}else if(CheckPermission('user', "own_update") && (CheckPermission('user', "all_update")!=true)){
				$user_id =getRowByTableColomId($table,$id,'id','id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonSatuanHasil mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
				}
			}
			
			if(CheckPermission('user', "all_delete")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterSatuanHasil('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';}
			else if(CheckPermission('user', "own_delete") && (CheckPermission('user', "all_delete")!=true)){
				$user_id =getRowByTableColomId($table,$id,'users_id','user_id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterSatuanHasil('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';
				}
			}
            $output_arr['data'][$key][0] = '<input type="checkbox" name="selData" value="'.$output_arr['data'][$key][0].'">';
		}
		echo json_encode($output_arr);
    }
	
	public function data_master_identitas (){
        is_login();
	    $table = 'master_identitas';
    	$primaryKey = 'id';
    	$columns = array(
			array( 'db' => 'id', 'dt' => 0 ),
			array( 'db' => 'nama_identitas', 'dt' => 1 ),
			array( 'db' => 'id', 'dt' => 2 )
		);

        $sql_details = array(
			'user' => $this->db->username,
			'pass' => $this->db->password,
			'db'   => $this->db->database,
			'host' => $this->db->hostname
		);
		$where = array("status = 'ACTIVE'");
		$output_arr = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where);
		foreach ($output_arr['data'] as $key => $value) {
			$id = $output_arr['data'][$key][count($output_arr['data'][$key])  - 1];
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] = '';
			if(CheckPermission('user', "all_update")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonIdentitas mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
			}else if(CheckPermission('user', "own_update") && (CheckPermission('user', "all_update")!=true)){
				$user_id =getRowByTableColomId($table,$id,'id','id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonIdentitas mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
				}
			}
			
			if(CheckPermission('user', "all_delete")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterIdentitas('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';}
			else if(CheckPermission('user', "own_delete") && (CheckPermission('user', "all_delete")!=true)){
				$user_id =getRowByTableColomId($table,$id,'users_id','user_id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterIdentitas('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';
				}
			}
            $output_arr['data'][$key][0] = '<input type="checkbox" name="selData" value="'.$output_arr['data'][$key][0].'">';
		}
		echo json_encode($output_arr);
    }	
	
	public function data_master_kota (){
        is_login();
	    $table = 'master_kota';
    	$primaryKey = 'id';
    	$columns = array(
			array( 'db' => 'id', 'dt' => 0 ),
			array( 'db' => 'nama_kota', 'dt' => 1 ),
			array( 'db' => 'id', 'dt' => 2 )
		);

        $sql_details = array(
			'user' => $this->db->username,
			'pass' => $this->db->password,
			'db'   => $this->db->database,
			'host' => $this->db->hostname
		);
		$where = array("status = 'ACTIVE'");
		$output_arr = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where);
		foreach ($output_arr['data'] as $key => $value) {
			$id = $output_arr['data'][$key][count($output_arr['data'][$key])  - 1];
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] = '';
			if(CheckPermission('user', "all_update")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonKota mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
			}else if(CheckPermission('user', "own_update") && (CheckPermission('user', "all_update")!=true)){
				$user_id =getRowByTableColomId($table,$id,'id','id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonKota mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
				}
			}
			
			if(CheckPermission('user', "all_delete")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterKota('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';}
			else if(CheckPermission('user', "own_delete") && (CheckPermission('user', "all_delete")!=true)){
				$user_id =getRowByTableColomId($table,$id,'users_id','user_id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterKota('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';
				}
			}
            $output_arr['data'][$key][0] = '<input type="checkbox" name="selData" value="'.$output_arr['data'][$key][0].'">';
		}
		echo json_encode($output_arr);
    }
	
	public function data_master_kecamatan (){
        is_login();
	    $table = 'master_kecamatan';
    	$primaryKey = 'id';
    	$columns = array(
			array( 'db' => 'id', 'dt' => 0 ),
			array( 'db' => 'nama_kecamatan', 'dt' => 1 ),
			array( 'db' => 'id', 'dt' => 2 )
		);

        $sql_details = array(
			'user' => $this->db->username,
			'pass' => $this->db->password,
			'db'   => $this->db->database,
			'host' => $this->db->hostname
		);
		$where = array("status = 'ACTIVE'");
		$output_arr = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where);
		foreach ($output_arr['data'] as $key => $value) {
			$id = $output_arr['data'][$key][count($output_arr['data'][$key])  - 1];
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] = '';
			if(CheckPermission('user', "all_update")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonKecamatan mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
			}else if(CheckPermission('user', "own_update") && (CheckPermission('user', "all_update")!=true)){
				$user_id =getRowByTableColomId($table,$id,'id','id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonKecamatan mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
				}
			}
			
			if(CheckPermission('user', "all_delete")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterKecamatan('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';}
			else if(CheckPermission('user', "own_delete") && (CheckPermission('user', "all_delete")!=true)){
				$user_id =getRowByTableColomId($table,$id,'users_id','user_id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterKecamatan('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';
				}
			}
            $output_arr['data'][$key][0] = '<input type="checkbox" name="selData" value="'.$output_arr['data'][$key][0].'">';
		}
		echo json_encode($output_arr);
    }
	
	public function data_master_kelurahan (){
        is_login();
	    $table = 'master_kelurahan';
    	$primaryKey = 'id';
    	$columns = array(
			array( 'db' => 'id', 'dt' => 0 ),
			array( 'db' => 'nama_kelurahan', 'dt' => 1 ),
			array( 'db' => 'id', 'dt' => 2 )
		);

        $sql_details = array(
			'user' => $this->db->username,
			'pass' => $this->db->password,
			'db'   => $this->db->database,
			'host' => $this->db->hostname
		);
		$where = array("status = 'ACTIVE'");
		$output_arr = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where);
		foreach ($output_arr['data'] as $key => $value) {
			$id = $output_arr['data'][$key][count($output_arr['data'][$key])  - 1];
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] = '';
			if(CheckPermission('user', "all_update")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonKelurahan mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
			}else if(CheckPermission('user', "own_update") && (CheckPermission('user', "all_update")!=true)){
				$user_id =getRowByTableColomId($table,$id,'id','id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonKelurahan mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
				}
			}
			
			if(CheckPermission('user', "all_delete")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterKelurahan('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';}
			else if(CheckPermission('user', "own_delete") && (CheckPermission('user', "all_delete")!=true)){
				$user_id =getRowByTableColomId($table,$id,'users_id','user_id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterKelurahan('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';
				}
			}
            $output_arr['data'][$key][0] = '<input type="checkbox" name="selData" value="'.$output_arr['data'][$key][0].'">';
		}
		echo json_encode($output_arr);
    }
	
	public function data_master_tipe_pegawai(){
        is_login();
	    $table = 'master_tipe_pegawai';
    	$primaryKey = 'id';
    	$columns = array(
			array( 'db' => 'id', 'dt' => 0 ),
			array( 'db' => 'nama_tipe_pegawai', 'dt' => 1 ),
			array( 'db' => 'id', 'dt' => 2 )
		);

        $sql_details = array(
			'user' => $this->db->username,
			'pass' => $this->db->password,
			'db'   => $this->db->database,
			'host' => $this->db->hostname
		);
		$where = array("status = 'ACTIVE'");
		$output_arr = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where);
		foreach ($output_arr['data'] as $key => $value) {
			$id = $output_arr['data'][$key][count($output_arr['data'][$key])  - 1];
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] = '';
			if(CheckPermission('user', "all_update")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonTipePegawai mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
			}else if(CheckPermission('user', "own_update") && (CheckPermission('user', "all_update")!=true)){
				$user_id =getRowByTableColomId($table,$id,'id','id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonTipePegawai mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
				}
			}
			
			if(CheckPermission('user', "all_delete")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterTipePegawai('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';}
			else if(CheckPermission('user', "own_delete") && (CheckPermission('user', "all_delete")!=true)){
				$user_id =getRowByTableColomId($table,$id,'users_id','user_id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterTipePegawai('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';
				}
			}
            $output_arr['data'][$key][0] = '<input type="checkbox" name="selData" value="'.$output_arr['data'][$key][0].'">';
		}
		echo json_encode($output_arr);
    }
	
	public function data_master_jabatan(){
        is_login();
	    $table = 'master_jabatan';
    	$primaryKey = 'id';
    	$columns = array(
			array( 'db' => 'id', 'dt' => 0 ),
			array( 'db' => 'nama_jabatan', 'dt' => 1 ),
			array( 'db' => 'id', 'dt' => 2 )
		);

        $sql_details = array(
			'user' => $this->db->username,
			'pass' => $this->db->password,
			'db'   => $this->db->database,
			'host' => $this->db->hostname
		);
		$where = array("status = 'ACTIVE'");
		$output_arr = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where);
		foreach ($output_arr['data'] as $key => $value) {
			$id = $output_arr['data'][$key][count($output_arr['data'][$key])  - 1];
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] = '';
			if(CheckPermission('user', "all_update")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonJabatan mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
			}else if(CheckPermission('user', "own_update") && (CheckPermission('user', "all_update")!=true)){
				$user_id =getRowByTableColomId($table,$id,'id','id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonJabatan mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
				}
			}
			
			if(CheckPermission('user', "all_delete")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterJabatan('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';}
			else if(CheckPermission('user', "own_delete") && (CheckPermission('user', "all_delete")!=true)){
				$user_id =getRowByTableColomId($table,$id,'users_id','user_id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterJabatan('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';
				}
			}
            $output_arr['data'][$key][0] = '<input type="checkbox" name="selData" value="'.$output_arr['data'][$key][0].'">';
		}
		echo json_encode($output_arr);
    }
	
	public function data_master_bagian(){
        is_login();
	    $table = 'master_bagian';
    	$primaryKey = 'id';
    	$columns = array(
			array( 'db' => 'id', 'dt' => 0 ),
			array( 'db' => 'nama_bagian', 'dt' => 1 ),
			array( 'db' => 'id', 'dt' => 2 )
		);

        $sql_details = array(
			'user' => $this->db->username,
			'pass' => $this->db->password,
			'db'   => $this->db->database,
			'host' => $this->db->hostname
		);
		$where = array("status = 'ACTIVE'");
		$output_arr = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where);
		foreach ($output_arr['data'] as $key => $value) {
			$id = $output_arr['data'][$key][count($output_arr['data'][$key])  - 1];
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] = '';
			if(CheckPermission('user', "all_update")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonBagian mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
			}else if(CheckPermission('user', "own_update") && (CheckPermission('user', "all_update")!=true)){
				$user_id =getRowByTableColomId($table,$id,'id','id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonBagian mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
				}
			}
			
			if(CheckPermission('user', "all_delete")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterBagian('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';}
			else if(CheckPermission('user', "own_delete") && (CheckPermission('user', "all_delete")!=true)){
				$user_id =getRowByTableColomId($table,$id,'users_id','user_id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterBagian('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';
				}
			}
            $output_arr['data'][$key][0] = '<input type="checkbox" name="selData" value="'.$output_arr['data'][$key][0].'">';
		}
		echo json_encode($output_arr);
    }
	
	public function data_master_group(){
        is_login();
	    $table = 'master_group';
    	$primaryKey = 'id';
    	$columns = array(
			array( 'db' => 'id', 'dt' => 0 ),
			array( 'db' => 'nama_group', 'dt' => 1 ),
			array( 'db' => 'id', 'dt' => 2 )
		);

        $sql_details = array(
			'user' => $this->db->username,
			'pass' => $this->db->password,
			'db'   => $this->db->database,
			'host' => $this->db->hostname
		);
		$where = array("status = 'ACTIVE'");
		$output_arr = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where);
		foreach ($output_arr['data'] as $key => $value) {
			$id = $output_arr['data'][$key][count($output_arr['data'][$key])  - 1];
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] = '';
			if(CheckPermission('user', "all_update")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonGroup mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
			}else if(CheckPermission('user', "own_update") && (CheckPermission('user', "all_update")!=true)){
				$user_id =getRowByTableColomId($table,$id,'id','id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonGroup mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
				}
			}
			
			if(CheckPermission('user', "all_delete")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterGroup('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';}
			else if(CheckPermission('user', "own_delete") && (CheckPermission('user', "all_delete")!=true)){
				$user_id =getRowByTableColomId($table,$id,'users_id','user_id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterGroup('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';
				}
			}
            $output_arr['data'][$key][0] = '<input type="checkbox" name="selData" value="'.$output_arr['data'][$key][0].'">';
		}
		echo json_encode($output_arr);
    }
	
	public function data_master_jenis_pembayaran(){
        is_login();
	    $table = 'master_jenis_pembayaran';
    	$primaryKey = 'id';
    	$columns = array(
			array( 'db' => 'id', 'dt' => 0 ),
			array( 'db' => 'nama_jenis_pembayaran', 'dt' => 1 ),
			array( 'db' => 'id', 'dt' => 2 )
		);

        $sql_details = array(
			'user' => $this->db->username,
			'pass' => $this->db->password,
			'db'   => $this->db->database,
			'host' => $this->db->hostname
		);
		$where = array("status = 'ACTIVE'");
		$output_arr = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where);
		foreach ($output_arr['data'] as $key => $value) {
			$id = $output_arr['data'][$key][count($output_arr['data'][$key])  - 1];
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] = '';
			if(CheckPermission('user', "all_update")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonJenisPembayaran mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
			}else if(CheckPermission('user', "own_update") && (CheckPermission('user', "all_update")!=true)){
				$user_id =getRowByTableColomId($table,$id,'id','id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonJenisPembayaran mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
				}
			}
			
			if(CheckPermission('user', "all_delete")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterJenisPembayaran('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';}
			else if(CheckPermission('user', "own_delete") && (CheckPermission('user', "all_delete")!=true)){
				$user_id =getRowByTableColomId($table,$id,'users_id','user_id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterJenisPembayaran('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';
				}
			}
            $output_arr['data'][$key][0] = '<input type="checkbox" name="selData" value="'.$output_arr['data'][$key][0].'">';
		}
		echo json_encode($output_arr);
    }
	
	public function data_master_asuransi(){
        is_login();
	    $table = 'master_asuransi';
    	$primaryKey = 'id';
    	$columns = array(
			array( 'db' => 'id', 'dt' => 0 ),
			array( 'db' => 'nama_asuransi', 'dt' => 1 ),
			array( 'db' => 'id', 'dt' => 2 )
		);

        $sql_details = array(
			'user' => $this->db->username,
			'pass' => $this->db->password,
			'db'   => $this->db->database,
			'host' => $this->db->hostname
		);
		$where = array("status = 'ACTIVE'");
		$output_arr = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where);
		foreach ($output_arr['data'] as $key => $value) {
			$id = $output_arr['data'][$key][count($output_arr['data'][$key])  - 1];
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] = '';
			if(CheckPermission('user', "all_update")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonAsuransi mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
			}else if(CheckPermission('user', "own_update") && (CheckPermission('user', "all_update")!=true)){
				$user_id =getRowByTableColomId($table,$id,'id','id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonAsuransi mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
				}
			}
			
			if(CheckPermission('user', "all_delete")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterAsuransi('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';}
			else if(CheckPermission('user', "own_delete") && (CheckPermission('user', "all_delete")!=true)){
				$user_id =getRowByTableColomId($table,$id,'users_id','user_id');
				if($user_id==$this->user_id){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="delIdMasterAsuransi('.$id.', \'master\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';
				}
			}
            $output_arr['data'][$key][0] = '<input type="checkbox" name="selData" value="'.$output_arr['data'][$key][0].'">';
		}
		echo json_encode($output_arr);
    }

    /**
      * This function is used to load login view page
      * @return Void
      */
    // public function login(){
    	// if(isset($_SESSION['user_details'])){
    		// redirect( base_url().'user/profile', 'refresh');
    	// }   
    	// $this->load->view('include/script');
        // $this->load->view('login'); 
    // }

    /**
      * This function is used to logout user
      * @return Void
      */
    // public function logout(){
        // is_login();
        // $this->session->unset_userdata('user_details');               
        // redirect( base_url().'user/login', 'refresh');
    // }

    /**
     * This function is used to registr user
     * @return Void
     */
    public function registration(){
    	if(isset($_SESSION['user_details'])){
    		redirect( base_url().'user/profile', 'refresh');
    	}
        //Check if admin allow to registration for user
		if(setting_all('register_allowed')==1){
			if($this->input->post()) {
				$this->add_edit();
				$this->session->set_flashdata('messagePr', 'Successfully Registered..');
			} else {
				$this->load->view('include/script');
				$this->load->view('register');
			}
		}
		else {
			$this->session->set_flashdata('messagePr', 'Registration Not allowed..');
			redirect( base_url().'user/login', 'refresh');
		}
    }
    
    /**
     * This function is used for user authentication ( Working in login process )
     * @return Void
     */
	public function auth_user($page =''){ 
		$return = $this->User_model->auth_user();
		
		if(empty($return)) { 
			$this->session->set_flashdata('messagePr', 'Invalid details');	
            redirect( base_url().'user/login', 'refresh');  
        } else { 
			if($return == 'not_varified') {
				$this->session->set_flashdata('messagePr', 'This accout is not varified. Please contact to your admin..');
                redirect( base_url().'user/login', 'refresh');
			} else {
				$this->session->set_userdata('user_details',$return);
			}
            redirect( base_url().'user/profile', 'refresh');
        }
    }

    /**
     * This function is used send mail in forget password
     * @return Void
     */
    public function forgetpassword(){
        $page['title'] = 'Forgot Password';
        if($this->input->post()){
            $setting = settings();
            $res = $this->User_model->get_data_by('users', $this->input->post('email'), 'email',1);
            if(isset($res[0]->users_id) && $res[0]->users_id != '') { 
                $var_key = $this->getVarificationCode(); 
                $this->User_model->updateRow('users', 'users_id', $res[0]->users_id, array('var_key' => $var_key));
                $sub = "Reset password";
                $email = $this->input->post('email');      
                $data = array(
                    'user_name' => $res[0]->name,
                    'action_url' =>base_url(),
                    'sender_name' => $setting['company_name'],
                    'website_name' => $setting['website'],
                    'varification_link' => base_url().'user/mail_varify?code='.$var_key,
                    'url_link' => base_url().'user/mail_varify?code='.$var_key,
                    );
                $body = $this->User_model->get_template('forgot_password');
                $body = $body->html;
                foreach ($data as $key => $value) {
                    $body = str_replace('{var_'.$key.'}', $value, $body);
                }
                if($setting['mail_setting'] == 'php_mailer') {
                    $this->load->library("send_mail");         
                    $emm = $this->send_mail->email($sub, $body, $email, $setting);
                } else {
                    // content-type is required when sending HTML email
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= 'From: '.$setting['EMAIL'] . "\r\n";
                    $emm = mail($email,$sub,$body,$headers);
                }
                if($emm) {
                    $this->session->set_flashdata('messagePr', 'To reset your password, link has been sent to your email');
                    redirect( base_url().'user/login','refresh');
                }
            } else {    
                $this->session->set_flashdata('forgotpassword', 'This account does not exist');//die;
                redirect( base_url()."user/forgetpassword");
            }
        } else {
            $this->load->view('include/script');
            $this->load->view('forget_password');
        }
    }

    /**
      * This function is used to load view of reset password and varify user too 
      * @return : void
      */
    public function mail_varify(){
      	$return = $this->User_model->mail_varify();         
      	$this->load->view('include/script');
      	if($return){          
        	$data['email'] = $return;
        	$this->load->view('set_password', $data);        
      	} else { 
	  		$data['email'] = 'allredyUsed';
        	$this->load->view('set_password', $data);
    	} 
    }
	
    /**
      * This function is used to reset password in forget password process
      * @return : void
      */
    public function reset_password(){
        $return = $this->User_model->ResetPpassword();
        if($return){
        	$this->session->set_flashdata('messagePr', 'Password Changed Successfully..');
            redirect( base_url().'user/login', 'refresh');
        } else {
        	$this->session->set_flashdata('messagePr', 'Unable to update password');
            redirect( base_url().'user/login', 'refresh');
        }
    }

    /**
     * This function is generate hash code for random string
     * @return string
     */
    public function getVarificationCode(){        
        $pw = $this->randomString();   
        return $varificat_key = password_hash($pw, PASSWORD_DEFAULT); 
    }

    

    /**
     * This function is used for show users list
     * @return Void
     */
    public function userTable(){
        is_login();
        if(CheckPermission("user", "own_read")){
            $this->load->view('include/header');
            $this->load->view('user_table');                
            $this->load->view('include/footer');            
        } else {
            $this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
            redirect( base_url().'user/profile', 'refresh');
        }
    }

    /**
     * This function is used to create datatable in users list page
     * @return Void
     */
    public function dataTable (){
        is_login();
	    $table = 'users';
    	$primaryKey = 'users_id';
    	$columns = array(
           array( 'db' => 'users_id', 'dt' => 0 ),array( 'db' => 'status', 'dt' => 1 ),
					array( 'db' => 'name', 'dt' => 2 ),
					array( 'db' => 'email', 'dt' => 3 ),
					array( 'db' => 'users_id', 'dt' => 4 )
		);

        $sql_details = array(
			'user' => $this->db->username,
			'pass' => $this->db->password,
			'db'   => $this->db->database,
			'host' => $this->db->hostname
		);
		$where = array("user_type != 'admin'");
		$output_arr = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where);
		foreach ($output_arr['data'] as $key => $value) {
			$id = $output_arr['data'][$key][count($output_arr['data'][$key])  - 1];
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] = '';
			if(CheckPermission('user', "all_update")){
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonUser mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
			}else if(CheckPermission('user', "own_update") && (CheckPermission('user', "all_update")!=true)){
				$user_id =getRowByTableColomId($table,$id,'users_id','user_id');
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

    /**
     * This function is Showing users profile
     * @return Void
     */
    public function inputPasienBaru($id='') {   
        is_login();
        if(!isset($id) || $id == '') {
            $id = $this->session->userdata ('user_details')[0]->users_id;
        }
        $data['user_data'] = $this->User_model->get_users($id);
        $this->load->view('include/header'); 
        $this->load->view('inputPasienBaru', $data);
        $this->load->view('include/footer');
    }
	
	

    /**
     * This function is used to show popup of user to add and update
     * @return Void
     */
    public function get_modal() {
        is_login();
        if($this->input->post('id')){
            $data['userData'] = getDataByid('users',$this->input->post('id'),'users_id'); 
            echo $this->load->view('add_user', $data, true);
        } else {
            echo $this->load->view('add_user', '', true);
        }
        exit;
    }

	
    /**
     * This function is used to upload file
     * @return Void
     */
    function upload() {
        foreach($_FILES as $name => $fileInfo)
        {
            $filename=$_FILES[$name]['name'];
            $tmpname=$_FILES[$name]['tmp_name'];
            $exp=explode('.', $filename);
            $ext=end($exp);
            $newname=  $exp[0].'_'.time().".".$ext; 
            $config['upload_path'] = 'assets/images/';
            $config['upload_url'] =  base_url().'assets/images/';
            $config['allowed_types'] = "gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp";
            $config['max_size'] = '2000000'; 
            $config['file_name'] = $newname;
            $this->load->library('upload', $config);
            move_uploaded_file($tmpname,"assets/images/".$newname);
            return $newname;
        }
    }
  
    /**
     * This function is used to add and update users
     * @return Void
     */
    public function add_edit($id='') {   
        $data = $this->input->post();
        $profile_pic = 'user.png';
        if($this->input->post('users_id')) {
            $id = $this->input->post('users_id');
        }
        if(isset($this->session->userdata ('user_details')[0]->users_id)) {
            if($this->input->post('users_id') == $this->session->userdata ('user_details')[0]->users_id){
                $redirect = 'profile';
            } else {
                $redirect = 'userTable';
            }
        } else {
            $redirect = 'login';
        }
        if($this->input->post('fileOld')) {  
            $newname = $this->input->post('fileOld');
            $profile_pic =$newname;
        } else {
            $data[$name]='';
            $profile_pic ='user.png';
        }
        foreach($_FILES as $name => $fileInfo)
        { 
             if(!empty($_FILES[$name]['name'])){
                $newname=$this->upload(); 
                $data[$name]=$newname;
                $profile_pic =$newname;
             } else {  
                if($this->input->post('fileOld')) {  
                    $newname = $this->input->post('fileOld');
                    $data[$name]=$newname;
                    $profile_pic =$newname;
                } else {
                    $data[$name]='';
                    $profile_pic ='user.png';
                } 
            } 
        }
        if($id != '') {
            $data = $this->input->post();
            if($this->input->post('status') != '') {
                $data['status'] = $this->input->post('status');
            }
            if($this->input->post('users_id') == 1) { 
            $data['user_type'] = 'admin';
            }
            if($this->input->post('password') != '') {
                if($this->input->post('currentpassword') != '') {
                    $old_row = getDataByid('users', $this->input->post('users_id'), 'users_id');
                    if(password_verify($this->input->post('currentpassword'), $old_row->password)){
                        if($this->input->post('password') == $this->input->post('confirmPassword')){
                            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
                            $data['password']= $password;     
                        } else {
                            $this->session->set_flashdata('messagePr', 'Password and confirm password should be same...');
                            redirect( base_url().'user/'.$redirect, 'refresh');
                        }
                    } else {
                        $this->session->set_flashdata('messagePr', 'Enter Valid Current Password...');
                        redirect( base_url().'user/'.$redirect, 'refresh');
                    }
                } else {
                    $this->session->set_flashdata('messagePr', 'Current password is required');
                    redirect( base_url().'user/'.$redirect, 'refresh');
                }
            }
            $id = $this->input->post('users_id');
            unset($data['fileOld']);
            unset($data['currentpassword']);
            unset($data['confirmPassword']);
            unset($data['users_id']);
            unset($data['user_type']);
            if(isset($data['edit'])){
                unset($data['edit']);
            }
            if($data['password'] == ''){
                unset($data['password']);
            }
            $data['profile_pic'] = $profile_pic;
            $this->User_model->updateRow('users', 'users_id', $id, $data);
            $this->session->set_flashdata('messagePr', 'Your data updated Successfully..');
            redirect( base_url().'user/'.$redirect, 'refresh');
        } else { 
            if($this->input->post('user_type') != 'admin') {
                $data = $this->input->post();
                $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
                $checkValue = $this->User_model->check_exists('users','email',$this->input->post('email'));
                if($checkValue==false)  {  
                    $this->session->set_flashdata('messagePr', 'This Email Already Registered with us..');
                    redirect( base_url().'user/userTable', 'refresh');
                }
                $checkValue1 = $this->User_model->check_exists('users','name',$this->input->post('name'));
                if($checkValue1==false) {  
                    $this->session->set_flashdata('messagePr', 'Username Already Registered with us..');
                    redirect( base_url().'user/userTable', 'refresh');
                }
                $data['status'] = 'active';
                if(setting_all('admin_approval') == 1) {
                    $data['status'] = 'deleted';
                }
                
                if($this->input->post('status') != '') {
                    $data['status'] = $this->input->post('status');
                }
                //$data['token'] = $this->generate_token();
                $data['user_id'] = $this->user_id;
                $data['password'] = $password;
                $data['profile_pic'] = $profile_pic;
                $data['is_deleted'] = 0;
                if(isset($data['password_confirmation'])){
                    unset($data['password_confirmation']);    
                }
                if(isset($data['call_from'])){
                    unset($data['call_from']);    
                }
                unset($data['submit']);
                $this->User_model->insertRow('users', $data);
                redirect( base_url().'user/'.$redirect, 'refresh');
            } else {
                $this->session->set_flashdata('messagePr', 'You Don\'t have this autherity ' );
                redirect( base_url().'user/registration', 'refresh');
            }
        }
    
    }


    /**
     * This function is used to delete users
     * @return Void
     */
    public function delete($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $this->User_model->delete($id); 
        }
       redirect(base_url().'user/userTable', 'refresh');
    }

    /**
     * This function is used to send invitation mail to users for registration
     * @return Void
     */
    public function InvitePeople() {
        is_login();
    	if($this->input->post('emails')){
            $setting = settings();
			$var_key = $this->randomString();
    		$emailArray = explode(',', $this->input->post('emails'));
    		$emailArray = array_map('trim', $emailArray);
    		$body = $this->User_model->get_template('invitation');
            $result['existCount'] = 0;
            $result['seccessCount'] = 0;
            $result['invalidEmailCount'] = 0;
            $result['noTemplate'] = 0;
    		if(isset($body->html) && $body->html != '') {
                $body = $body->html;
	    		foreach ($emailArray as $mailKey => $mailValue) {
	    			if(filter_var($mailValue, FILTER_VALIDATE_EMAIL)) {
	    				$res = $this->User_model->get_data_by('users', $mailValue, 'email');
	    				if(is_array($res) && empty($res)) {
			    			$link = (string) '<a href="'.base_url().'user/registration?invited='.$var_key.'">Click here</a>';
			    			$data = array('var_user_email' => $mailValue, 'var_inviation_link' => $link);
    				        foreach ($data as $key => $value) {
    				          $body = str_replace('{'.$key.'}', $value, $body);
    				        }
                            if($setting['mail_setting'] == 'php_mailer') {
                                $this->load->library("send_mail");
    			    			$emm = $this->send_mail->email('Invitation for registration', $body, $mailValue, $setting);
                            } else {
                                // content-type is required when sending HTML email
                                $headers = "MIME-Version: 1.0" . "\r\n";
                                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                $headers .= 'From: '.$setting['EMAIL'] . "\r\n";
                                $emm = mail($mailValue,'Invitation for registration',$body,$headers);
                            }
			    			if($emm) {
			    				$darr = array('email' => $mailValue, 'var_key' => $var_key);
			    				$this->User_model->insertRow('users', $darr);
			    				$result['seccessCount'] += 1;;
			    			}
	    				} else {
	    					$result['existCount'] += 1;
	    				}
	    			} else {
	    				$result['invalidEmailCount'] += 1;
	    			}
	    		}
    		} else {
    			$result['noTemplate'] = 'No Email Template Availabale.';
    		}
    	}
    	echo json_encode($result);
    	exit;
    }

    /**
     * This function is used to Check invitation code for user registration
     * @return TRUE/FALSE
     */
    public function chekInvitation() {
    	if($this->input->post('code') && $this->input->post('code') != '') {
    		$res = $this->User_model->get_data_by('users', $this->input->post('code'), 'var_key');
    		$result = array();
    		if(is_array($res) && !empty($res)) {
    			$result['email'] = $res[0]->email;
    			$result['users_id'] = $res[0]->users_id;
    			$result['result'] = 'success';
    		} else {
    			$this->session->set_flashdata('messagePr', 'This code is not valid..');
    			$result['result'] = 'error';
    		}
    	}
    	echo json_encode($result);
    	exit;
    }

    /**
     * This function is used to registr invited user
     * @return Void
     */
    public function register_invited($id){
        $data = $this->input->post();
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $data['password'] = $password;
        $data['var_key'] = NULL;
        $data['is_deleted'] = 0;
        $data['status'] = 'active';
        $data['user_id'] = 1;
        if(isset($data['password_confirmation'])) {
            unset($data['password_confirmation']);
        }
        if(isset($data['call_from'])) {
            unset($data['call_from']);
        }
        if(isset($data['submit'])) {
            unset($data['submit']);
        }
        $this->User_model->updateRow('users', 'users_id', $id, $data);
        $this->session->set_flashdata('messagePr', 'Successfully Registered..');
        redirect( base_url().'user/login', 'refresh');
    }

    /**
     * This function is used to check email is alredy exist or not
     * @return TRUE/FALSE
     */
    public function checEmailExist() {
      	$result = 1;
      	$res = $this->User_model->get_data_by('users', $this->input->post('email'), 'email');
      	if(!empty($res)){
      		if($res[0]->users_id != $this->input->post('uId')){
      			$result = 0;
      		}
      	}
      	echo $result;
      	exit;
    }

    /**
     * This function is used to Generate a token for varification
     * @return String
     */
    public function generate_token(){
        $alpha = "abcdefghijklmnopqrstuvwxyz";
        $alpha_upper = strtoupper($alpha);
        $numeric = "0123456789";
        $special = ".-+=_,!@$#*%<>[]{}";
        $chars = $alpha . $alpha_upper . $numeric ;            
        $token = '';  
        $up_lp_char = $alpha . $alpha_upper .$special;
        $chars = str_shuffle($chars);
        $token = substr($chars, 10,10).strtotime("now").substr($up_lp_char, 8,8) ;
        return $token;
    }

    /**
     * This function is used to Generate a random string
     * @return String
     */
    public function randomString(){
        $alpha = "abcdefghijklmnopqrstuvwxyz";
        $alpha_upper = strtoupper($alpha);
        $numeric = "0123456789";
        $special = ".-+=_,!@$#*%<>[]{}";
        $chars = $alpha . $alpha_upper . $numeric;            
        $pw = '';    
        $chars = str_shuffle($chars);
        $pw = substr($chars, 8,8);
        return $pw;
    }
	
	public function get_modal_perusahaan() {
        is_login();
       
		if($this->input->post('id')){
           $data = $this->Master_model->get_data_master_perusahaan($this->input->post('id'));
           echo $this->load->view('edit_perusahaan',  Array('data'=>$data), true);
        } else {
            echo $this->load->view('add_perusahaan', '', true);
        }
        exit;
    }
	
	public function get_modal_pertanyaan() {
        is_login();		
		 if($this->input->post('id')){
           $data = $this->Master_model->get_data_master_pertanyaan($this->input->post('id'));
           echo $this->load->view('add_pertanyaan',  Array('data'=>$data), true);
        } else {
            echo $this->load->view('add_pertanyaan', '', true);
        }
        exit;
    }
	
	public function get_modal_pemeriksaan() {
        is_login();
		 if($this->input->post('id')){
           $data = $this->Master_model->get_data_master_pemeriksaan($this->input->post('id'));
           //$data = $this->input->post();
           echo $this->load->view('add_pemeriksaan',  Array('data'=>$data), true);
        } else {
            echo $this->load->view('add_pemeriksaan', '', true);
        }
        exit;
    }
	
	public function get_modal_pemeriksaan_medcheck_detail() {
        is_login();
		$idPaket = $this->input->post('id');
        echo $this->load->view('add_detail_paket_medcheck', Array('idPaket'=>$idPaket), true);
        exit;
    }
	
	public function get_modal_satuan_hasil() {
        is_login();
       
       if($this->input->post('id')){
           $data = $this->Master_model->get_data_master_satuan_hasil($this->input->post('id'));
           //$data = $this->input->post();
           echo $this->load->view('add_satuan_hasil',  Array('data'=>$data), true);
        } else {
            echo $this->load->view('add_satuan_hasil', '', true);
        }
        exit;
    }
	
	public function get_modal_identitas() {
        is_login();
       
		if($this->input->post('id')){
           $data = $this->Master_model->get_data_master_identitas($this->input->post('id'));
           echo $this->load->view('add_identitas',  Array('data'=>$data), true);
        } else {
            echo $this->load->view('add_identitas', '', true);
        }
        exit;
    }
	
	public function get_modal_kota() {
        is_login();
       
		if($this->input->post('id')){
           $data = $this->Master_model->get_data_master_kota($this->input->post('id'));
           echo $this->load->view('add_kota',  Array('data'=>$data), true);
        } else {
            echo $this->load->view('add_kota', '', true);
        }
        exit;
    }
	
	public function get_modal_kecamatan() {
        is_login();
        
		if($this->input->post('id')){
           $data = $this->Master_model->get_data_master_kecamatan($this->input->post('id'));
           echo $this->load->view('add_kecamatan',  Array('data'=>$data), true);
        } else {
            echo $this->load->view('add_kecamatan', '', true);
        }
        exit;
    }
	
	public function get_modal_kelurahan() {
        is_login();
       
		if($this->input->post('id')){
           $data = $this->Master_model->get_data_master_kelurahan($this->input->post('id'));
           echo $this->load->view('add_kelurahan',  Array('data'=>$data), true);
        } else {
            echo $this->load->view('add_kelurahan', '', true);
        }
        exit;
    }
	
	public function get_modal_tipe_pegawai() {
        is_login();
       
		if($this->input->post('id')){
           $data = $this->Master_model->get_data_master_tipe_pegawai($this->input->post('id'));
           echo $this->load->view('add_tipe_pegawai',  Array('data'=>$data), true);
        } else {
            echo $this->load->view('add_tipe_pegawai', '', true);
        }
        exit;
    }
	
	public function get_modal_jabatan() {
        is_login();
       
		if($this->input->post('id')){
           $data = $this->Master_model->get_data_master_jabatan($this->input->post('id'));
           echo $this->load->view('add_jabatan',  Array('data'=>$data), true);
        } else {
            echo $this->load->view('add_jabatan', '', true);
        }
        exit;
    }
	
	public function get_modal_bagian() {
        is_login();
       
		if($this->input->post('id')){
           $data = $this->Master_model->get_data_master_bagian($this->input->post('id'));
           echo $this->load->view('add_bagian',  Array('data'=>$data), true);
        } else {
            echo $this->load->view('add_bagian', '', true);
        }
        exit;
    }
	
	public function get_modal_group() {
        is_login();
        
        if($this->input->post('id')){
           $data = $this->Master_model->get_data_master_group($this->input->post('id'));
           echo $this->load->view('add_group',  Array('data'=>$data), true);
        } else {
            echo $this->load->view('add_group', '', true);
        }
		exit;
    }
	
	public function get_modal_jenis_pembayaran() {
        is_login();
      
        if($this->input->post('id')){
           $data = $this->Master_model->get_data_master_jenis_pembayaran($this->input->post('id'));
           echo $this->load->view('add_jenis_pembayaran',  Array('data'=>$data), true);
        } else {
            echo $this->load->view('add_jenis_pembayaran', '', true);
        }
		exit;
    }
	
	public function get_modal_asuransi() {
        is_login();
        
        if($this->input->post('id')){
           $data = $this->Master_model->get_data_master_asuransi($this->input->post('id'));
           echo $this->load->view('add_asuransi',  Array('data'=>$data), true);
        } else {
            echo $this->load->view('add_asuransi', '', true);
        }
		exit;
    }
	
	public function get_modal_paket_medcheck() {
        is_login();
       
		 if($this->input->post('id')){
           $data = $this->Master_model->get_data_master_paket_medcheck($this->input->post('id'));
           //$data = $this->input->post();
           echo $this->load->view('add_paket_medcheck',  Array('data'=>$data), true);
        } else {
            echo $this->load->view('add_paket_medcheck', '', true);
        }
        exit;
    }
	
	public function get_modal_master_dokter() {
        is_login();
       
		 if($this->input->post('id')){
           $data = $this->Master_model->get_data_model_master_dokter($this->input->post('id'));
           //$data = $this->input->post();
           echo $this->load->view('add_master_dokter',  Array('data'=>$data), true);
        } else {
            echo $this->load->view('add_master_dokter', '', true);
        }
        exit;
    }
	
	public function get_modal_jawaban_resume() {
        is_login();
       
		 if($this->input->post('id')){
           $data = $this->Master_model->get_data_model_master_jawaban_resume($this->input->post('id'));
           //$data = $this->input->post();
           echo $this->load->view('add_master_jawaban_resume',  Array('data'=>$data), true);
        } else {
            echo $this->load->view('add_master_jawaban_resume', '', true);
        }
        exit;
    }
	
	public function add_perusahaan() {   
				if($this->input->post('id')) {
				$id = $this->input->post('id');
				}
				if($id != '') {	
				$data['nama_perusahaan'] = $this->input->post('nama_perusahaan');
				$data['alamat_satu'] = $this->input->post('alamat_satu');
				$data['alamat_dua'] = $this->input->post('alamat_dua');
				$data['no_telp'] = $this->input->post('no_telp');
				$data['status'] = "ACTIVE";
               $this->Master_model->updateRow('master_perusahaan', 'id', $id, $data);
                redirect( base_url().'master/list_master_perusahaan', 'refresh');
				} else {
				$data['nama_perusahaan'] = $this->input->post('nama_perusahaan');
				$data['alamat_satu'] = $this->input->post('alamat_satu');
				$data['alamat_dua'] = $this->input->post('alamat_dua');
				$data['no_telp'] = $this->input->post('no_telp');
				$datauser['nama_perusahaan'] = $this->input->post('nama_perusahaan');
				$datauser['user_id_perusahaan'] = $this->input->post('user_id_perusahaan');
				$datauser['password_perusahaan'] = $this->input->post('password_perusahaan');
				$data['status'] = "ACTIVE";
                $idPerusahaan['id'] = $this->Master_model->insertRow('master_perusahaan', $data);
				//return  $idPerusahaan;
                $this->Master_model->insertUserPerusahaan($datauser, $idPerusahaan);
                redirect( base_url().'master/list_master_perusahaan', 'refresh');
				}
    }
	
	public function add_satuan_hasil() {
				if($this->input->post('id')) {
				$id = $this->input->post('id');
				}
				if($id != '') {						
				$data['nama_satuan_hasil'] = $this->input->post('nama_satuan_hasil');
				$data['status'] = "ACTIVE";
				$this->Master_model->updateRow('master_satuan_hasil', 'id', $id, $data);
				redirect( base_url().'master/list_master_satuan_hasil', 'refresh');
				} else {
				$data['nama_satuan_hasil'] = $this->input->post('nama_satuan_hasil');
				$data['status'] = "ACTIVE";
                $this->Master_model->insertRow('master_satuan_hasil', $data);
				redirect( base_url().'master/list_master_satuan_hasil', 'refresh');
				}
               
    }
	
	public function add_pertanyaan() {
				if($this->input->post('id')) {
				$id = $this->input->post('id');
				}
				if($id != '') {		
				$data['kategori_pertanyaan'] = $this->input->post('kategori_pertanyaan');
				$data['nama_pertanyaan'] = $this->input->post('nama_pertanyaan');
				$data['pertanyaan_inggris'] = $this->input->post('pertanyaan_inggris');
				$data['default_jawaban'] = $this->input->post('default_jawaban');
				$variable = $this->input->post('nama_pertanyaan');
				$data['variable_name']  = preg_replace('/\s/', '', $variable);
				$data['status'] = "ACTIVE";
				$data['urutan'] = $this->input->post('urutan');
				$this->Master_model->updateRow('master_pertanyaan', 'id', $id, $data);
                redirect( base_url().'master/list_master_pertanyaan', 'refresh');
				} else
				{
				$data['kategori_pertanyaan'] = $this->input->post('kategori_pertanyaan');
				$data['nama_pertanyaan'] = $this->input->post('nama_pertanyaan');
				$data['pertanyaan_inggris'] = $this->input->post('pertanyaan_inggris');
				$data['default_jawaban'] = $this->input->post('default_jawaban');
				$variable = $this->input->post('nama_pertanyaan');
				$data['variable_name']  = preg_replace('/\s/', '', $variable);
				$data['status'] = "ACTIVE";
				$data['urutan'] = $this->input->post('urutan');
                $this->Master_model->insertRow('master_pertanyaan', $data);
                redirect( base_url().'master/list_master_pertanyaan', 'refresh');
				}
				
    }
	
	public function add_pemeriksaan() {
				if($this->input->post('id')) {
				$id = $this->input->post('id');
				}
				if($id != '') {	
				$data['status'] = "ACTIVE";
				$data['nama_pelayanan'] = $this->input->post('nama_pelayanan');
				$data['nama_pemeriksaan'] = $this->input->post('nama_pemeriksaan');
				$data['nilai_min'] = $this->input->post('nilai_min');
				$data['nilai_min_wanita'] = $this->input->post('nilai_min_wanita');
				$data['nilai_max'] = $this->input->post('nilai_max');
				$data['nilai_max_wanita'] = $this->input->post('nilai_max_wanita');
				$data['nilai_text'] = $this->input->post('nilai_text');
				$data['nilai_text_wanita'] = $this->input->post('nilai_text_wanita');
				$data['harga_pemeriksaan'] = $this->input->post('harga_pemeriksaan');
				$data['urutan_pemeriksaan'] = $this->input->post('urutan_pemeriksaan');
				$data['id_satuan'] = $this->input->post('id_satuan');
               $this->Master_model->updateRow('master_pemeriksaan', 'id', $id, $data);
                redirect( base_url().'master/list_master_pemeriksaan', 'refresh');
				} else
				{
				$data['status'] = "ACTIVE";
				$data['nama_pelayanan'] = $this->input->post('nama_pelayanan');
				$data['nama_pemeriksaan'] = $this->input->post('nama_pemeriksaan');
				$data['nilai_min'] = $this->input->post('nilai_min');
				$data['nilai_min_wanita'] = $this->input->post('nilai_min_wanita');
				$data['nilai_max'] = $this->input->post('nilai_max');
				$data['nilai_max_wanita'] = $this->input->post('nilai_max_wanita');
				$data['nilai_text'] = $this->input->post('nilai_text');
				$data['nilai_text_wanita'] = $this->input->post('nilai_text_wanita');
				$data['harga_pemeriksaan'] = $this->input->post('harga_pemeriksaan');
				$data['urutan_pemeriksaan'] = $this->input->post('urutan_pemeriksaan');
				$data['id_satuan'] = $this->input->post('id_satuan');
                $this->Master_model->insertRow('master_pemeriksaan', $data);
                redirect( base_url().'master/list_master_pemeriksaan', 'refresh');
				}
    }
	
	public function add_identitas() {   
				if($this->input->post('id')) {
				$id = $this->input->post('id');
				}
				if($id != '') {	
				$data['nama_identitas'] = $this->input->post('nama_identitas');
				$data['status'] = "ACTIVE";
                 $this->Master_model->updateRow('master_identitas', 'id', $id, $data);
                redirect( base_url().'master/list_master_identitas', 'refresh');
				} else {
				$data['nama_identitas'] = $this->input->post('nama_identitas');
				$data['status'] = "ACTIVE";
                $this->Master_model->insertRow('master_identitas', $data);
                redirect( base_url().'master/list_master_identitas', 'refresh');
				}
    }
	
	public function add_kota() {   
				if($this->input->post('id')) {
				$id = $this->input->post('id');
				}
				if($id != '') {	
				$data['nama_kota'] = $this->input->post('nama_kota');
				$data['status'] = "ACTIVE";
               $this->Master_model->updateRow('master_kota', 'id', $id, $data);
                redirect( base_url().'master/list_master_kota', 'refresh');
				} else {
					$data['nama_kota'] = $this->input->post('nama_kota');
				$data['status'] = "ACTIVE";
                $this->Master_model->insertRow('master_kota', $data);
                redirect( base_url().'master/list_master_kota', 'refresh');
				}
    }
	
	public function add_kecamatan() {   
				if($this->input->post('id')) {
				$id = $this->input->post('id');
				}
				if($id != '') {	
				$data['nama_kecamatan'] = $this->input->post('nama_kecamatan');
				$data['status'] = "ACTIVE";
                $this->Master_model->updateRow('master_kecamatan', 'id', $id, $data);
                redirect( base_url().'master/list_master_kecamatan', 'refresh');
				} else {
					$data['nama_kecamatan'] = $this->input->post('nama_kecamatan');
				$data['status'] = "ACTIVE";
                $this->Master_model->insertRow('master_kecamatan', $data);
                redirect( base_url().'master/list_master_kecamatan', 'refresh');
				}
    }
	
	public function add_kelurahan() {   
				if($this->input->post('id')) {
				$id = $this->input->post('id');
				}
				if($id != '') {	
				$data['nama_kelurahan'] = $this->input->post('nama_kelurahan');
				$data['status'] = "ACTIVE";
               $this->Master_model->updateRow('master_kelurahan', 'id', $id, $data);
                redirect( base_url().'master/list_master_kelurahan', 'refresh');
				} else {
					$data['nama_kelurahan'] = $this->input->post('nama_kelurahan');
				$data['status'] = "ACTIVE";
                $this->Master_model->insertRow('master_kelurahan', $data);
                redirect( base_url().'master/list_master_kelurahan', 'refresh');
				}
    }
	
	public function add_tipe_pegawai() {   
				if($this->input->post('id')) {
				$id = $this->input->post('id');
				}
				if($id != '') {	
				$data['nama_tipe_pegawai'] = $this->input->post('nama_tipe_pegawai');
				$data['status'] = "ACTIVE";
               $this->Master_model->updateRow('master_tipe_pegawai', 'id', $id, $data);
                redirect( base_url().'master/list_master_tipe_pegawai', 'refresh');
				} else {
					$data['nama_tipe_pegawai'] = $this->input->post('nama_tipe_pegawai');
				$data['status'] = "ACTIVE";
                $this->Master_model->insertRow('master_tipe_pegawai', $data);
                redirect( base_url().'master/list_master_tipe_pegawai', 'refresh');
				}
    }
	
	public function add_jabatan() {   
				if($this->input->post('id')) {
				$id = $this->input->post('id');
				}
				if($id != '') {	
				$data['nama_jabatan'] = $this->input->post('nama_jabatan');
				$data['status'] = "ACTIVE";
                $this->Master_model->updateRow('master_jabatan', 'id', $id, $data);
                redirect( base_url().'master/list_master_jabatan', 'refresh');
				} else {
				$data['nama_jabatan'] = $this->input->post('nama_jabatan');
				$data['status'] = "ACTIVE";
                $this->Master_model->insertRow('master_jabatan', $data);
                redirect( base_url().'master/list_master_jabatan', 'refresh');
				}				
    }
	
	public function add_bagian() {   
				if($this->input->post('id')) {
				$id = $this->input->post('id');
				}
				if($id != '') {	
				$data['nama_bagian'] = $this->input->post('nama_bagian');
				$data['status'] = "ACTIVE";
               $this->Master_model->updateRow('master_bagian', 'id', $id, $data);
                redirect( base_url().'master/list_master_bagian', 'refresh');
				} else {
				$data['nama_bagian'] = $this->input->post('nama_bagian');
				$data['status'] = "ACTIVE";
                $this->Master_model->insertRow('master_bagian', $data);
                redirect( base_url().'master/list_master_bagian', 'refresh');
				}
    }
	
	public function add_group() {   
				if($this->input->post('id')) {
				$id = $this->input->post('id');
				}
				if($id != '') {	
				$data['nama_group'] = $this->input->post('nama_group');
				$data['status'] = "ACTIVE";
               $this->Master_model->updateRow('master_group', 'id', $id, $data);
                redirect( base_url().'master/list_master_group', 'refresh');
				} else {
				$data['nama_group'] = $this->input->post('nama_group');
				$data['status'] = "ACTIVE";
                $this->Master_model->insertRow('master_group', $data);
                redirect( base_url().'master/list_master_group', 'refresh');
				}				
    }
	
	public function add_jenis_pembayaran() {   
				if($this->input->post('id')) {
				$id = $this->input->post('id');
				}
				if($id != '') {	
				$data['nama_jenis_pembayaran'] = $this->input->post('nama_jenis_pembayaran');
				$data['status'] = "ACTIVE";
                $this->Master_model->updateRow('master_jenis_pembayaran', 'id', $id, $data);
                redirect( base_url().'master/list_master_jenis_pembayaran', 'refresh');
				} else {
					$data['nama_jenis_pembayaran'] = $this->input->post('nama_jenis_pembayaran');
				$data['status'] = "ACTIVE";
                $this->Master_model->insertRow('master_jenis_pembayaran', $data);
                redirect( base_url().'master/list_master_jenis_pembayaran', 'refresh');
				}
    }
	
	public function add_asuransi() {   
				if($this->input->post('id')) {
				$id = $this->input->post('id');
				}
				if($id != '') {	
				$data['nama_asuransi'] = $this->input->post('nama_asuransi');
				$data['status'] = "ACTIVE";
                $this->Master_model->updateRow('master_asuransi', 'id', $id, $data);
                redirect( base_url().'master/list_master_asuransi', 'refresh');
				} else {
					$data['nama_asuransi'] = $this->input->post('nama_asuransi');
				$data['status'] = "ACTIVE";
                $this->Master_model->insertRow('master_asuransi', $data);
                redirect( base_url().'master/list_master_asuransi', 'refresh');
				}
    }
	
	public function add_paket_medcheck() {   
				if($this->input->post('id')) {
				$id = $this->input->post('id');
				}
				if($id != '') {	
				$data['nama_paket'] = $this->input->post('nama_paket');
				$data['harga_paket'] = $this->input->post('harga_paket');
				$data['status'] = "ACTIVE";
               $this->Master_model->updateRow('master_paket_medcheck_header', 'id', $id, $data);
                redirect( base_url().'master/list_master_paket', 'refresh');
				} else {
					$data['nama_paket'] = $this->input->post('nama_paket');
				$data['harga_paket'] = $this->input->post('harga_paket');
				$data['status'] = "ACTIVE";
                $this->Master_model->insertRow('master_paket_medcheck_header', $data);
                redirect( base_url().'master/list_master_paket', 'refresh');
				}
    }
	
	public function add_save_master_dokter() {   
				if($this->input->post('id')) {
				$id = $this->input->post('id');
				}
				if($id != '') {	
				$data['nama_dokter'] = $this->input->post('nama_dokter');
				$data['status'] = "ACTIVE";
               $this->Master_model->updateRow('master_dokter', 'id', $id, $data);
                redirect( base_url().'master/list_master_dokter', 'refresh');
				} else {
					$data['nama_dokter'] = $this->input->post('nama_dokter');
				$data['status'] = "ACTIVE";
                $this->Master_model->insertRow('master_dokter', $data);
                redirect( base_url().'master/list_master_dokter', 'refresh');
				}
    }
	
	public function add_save_master_jawaban_resume() {   
				if($this->input->post('id')) {
				$id = $this->input->post('id');
				}
				if($id != '') {	
				$data['kelompok'] = $this->input->post('kelompok');
				$data['deskripsi'] = $this->input->post('deskripsi');
				$data['nilai'] = $this->input->post('deskripsi');
				$data['status'] = "ACTIVE";
               $this->Master_model->updateRow('master_global_condition', 'id', $id, $data);
                redirect( base_url().'master/list_data_hasil_resume', 'refresh');
				} else {
				$data['kelompok'] = $this->input->post('kelompok');
				$data['deskripsi'] = $this->input->post('deskripsi');
				$data['nilai'] = $this->input->post('deskripsi');
				$data['status'] = "ACTIVE";
                $this->Master_model->insertRow('master_global_condition', $data);
                redirect( base_url().'master/list_data_hasil_resume', 'refresh');
				}
    }
	
	public function detail_master_paket($idPaket='') {   
        is_login();
        if(!isset($id) || $id == '') {
            $id = $this->session->userdata ('user_details')[0]->users_id;
        }
		$arrPertanyaanFisikAnamsia = $this->Registrasi_model->get_pertanyaan_fisik_anamsia($id);
		$arrPertanyaanFisikMata = $this->Registrasi_model->get_pertanyaan_fisik_mata($id);
		$arrPertanyaanFisikLeher = $this->Registrasi_model->get_pertanyaan_fisik_leher($id);
		$arrPertanyaanFisikTenggorokan = $this->Registrasi_model->get_pertanyaan_fisik_tenggorokan($id);
		$arrPertanyaanFisikMulut = $this->Registrasi_model->get_pertanyaan_fisik_mulut($id);
		$arrPertanyaanFisikTelinga = $this->Registrasi_model->get_pertanyaan_fisik_telinga($id);
		$arrPertanyaanFisikKulit = $this->Registrasi_model->get_pertanyaan_fisik_kulit($id);
		$arrPertanyaanFisikHidung = $this->Registrasi_model->get_pertanyaan_fisik_hidung($id);
		$arrPertanyaanFisikThorax = $this->Registrasi_model->get_pertanyaan_fisik_thorax($id);
		$arrPertanyaanFisikCorPulmo = $this->Registrasi_model->get_pertanyaan_fisik_corpulmo($id);
		$arrPertanyaanFisikExtrimitas = $this->Registrasi_model->get_pertanyaan_fisik_extrimitas($id);
		$arrPertanyaanFisikSistemAlatGerakTangan = $this->Registrasi_model->get_pertanyaan_fisik_sistem_alat_gerak_tangan($id);
		$arrPertanyaanFisikAbdomen = $this->Registrasi_model->get_pertanyaan_fisik_abdomen($id);
		$arrPertanyaanFisikKeteranganLain = $this->Registrasi_model->get_pertanyaan_fisik_keterangan_lain($id);
		$arrPertanyaanFisikGenetalia = $this->Registrasi_model->get_pertanyaan_fisik_genetalia($id);
		$arrDataPasien = $this->Registrasi_model->get_data_pasien($id);
		$arrDataPaket = $this->Master_model->get_data_pasien($idPaket);
		$arrDataUsers = $this->Registrasi_model->get_users($id);
		$arrDataLab = $this->Registrasi_model->get_data_labs($id);
		$arrDataRadiologi = $this->Registrasi_model->get_data_radiologi($id);
		$arrDataResume = $this->Registrasi_model->get_data_resume($id);
		$arrDataPenunjang = $this->Registrasi_model->get_data_penunjang($id);
		$arrDataPemeriksaan = $this->Registrasi_model->get_data_pemeriksaan($id);
		$arrDataDiagnosa = $this->Registrasi_model->get_data_diagnosa($id);
		$arrDataTindakan = $this->Registrasi_model->get_data_tindakan($id);
		$arrDataMedcheckDetail = $this->Master_model->get_data_medcheck_detail_pemeriksaan($idPaket);
        $this->load->view('include/header'); 
        $this->load->view('detailPaketMedcheck', Array('arrPertanyaanFisikMata'=>$arrPertanyaanFisikMata,'arrPertanyaanFisikAnamsia'=>$arrPertanyaanFisikAnamsia,'arrDataPasien'=>$arrDataPasien,
														'arrPertanyaanFisikLeher'=>$arrPertanyaanFisikLeher,'arrPertanyaanFisikTenggorokan'=>$arrPertanyaanFisikTenggorokan,
														'arrPertanyaanFisikMulut'=>$arrPertanyaanFisikMulut,'arrPertanyaanFisikTelinga'=>$arrPertanyaanFisikTelinga,'arrPertanyaanFisikKulit'=>$arrPertanyaanFisikKulit,
														'arrPertanyaanFisikHidung'=>$arrPertanyaanFisikHidung,'arrPertanyaanFisikThorax'=>$arrPertanyaanFisikThorax,
														'arrPertanyaanFisikCorPulmo'=>$arrPertanyaanFisikCorPulmo,'arrPertanyaanFisikExtrimitas'=>$arrPertanyaanFisikExtrimitas,
														'arrPertanyaanFisikSistemAlatGerakTangan'=>$arrPertanyaanFisikSistemAlatGerakTangan,'arrPertanyaanFisikAbdomen'=>$arrPertanyaanFisikAbdomen,
														'arrPertanyaanFisikKeteranganLain'=>$arrPertanyaanFisikKeteranganLain,'arrPertanyaanFisikGenetalia'=>$arrPertanyaanFisikGenetalia,
														'arrDataUsers'=>$arrDataUsers,'arrDataLab'=>$arrDataLab,'arrDataRadiologi'=>$arrDataRadiologi,
														'arrDataResume'=>$arrDataResume,'arrDataPenunjang'=>$arrDataPenunjang,'arrDataPemeriksaan'=>$arrDataPemeriksaan,
														'arrDataDiagnosa'=>$arrDataDiagnosa,'arrDataTindakan'=>$arrDataTindakan,'arrDataMedcheckDetail'=>$arrDataMedcheckDetail,
														'arrDataPaket'=>$arrDataPaket));
        $this->load->view('include/footer');
    }
	
	public function get_autocomplete_pemeriksaan(){
        if (isset($_GET['term'])) {
            $result = $this->Master_model->autocomplete_pemeriksaan($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->nama_pemeriksaan,
				'nama_pemeriksaan' => $row->nama_pemeriksaan,
				'nama_pelayanan' => $row->nama_pelayanan,
				'id_pemeriksaan' => $row->id,
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	public function get_autocomplete_get_satuan_pemeriksaan(){
        if (isset($_GET['term'])) {
            $result = $this->Master_model->autocomplete_get_satuan_pemerisaan($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->nama_satuan_hasil,
				'id_satuan' => $row->nama_satuan_hasil
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	public function save_master_paket_medcheck_detail() {   
				$data['status'] = "ACTIVE";
				$idPaket = $this->input->post('id_paket');
				$data['id_header'] = $idPaket;
				$idPemeriksaan = $this->input->post('id_pemeriksaan');
				$data['id_pemeriksaan'] = $idPemeriksaan;
                $this->Master_model->insertRow('master_paket_medcheck_detail', $data);
                 redirect( base_url().'master/detail_master_paket/'.$idPaket);
    }
	
	 public function delete_master_pertanyaan($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $this->Master_model->do_delete_master_pertanyaan($id); 
        }
       redirect( base_url().'master/list_master_pertanyaan', 'refresh');
    }
	
	public function delete_master_pemeriksaan($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $this->Master_model->do_delete_master_pemeriksan($id); 
        }
       redirect( base_url().'master/list_master_pemeriksaan', 'refresh');
    }
	
	public function delete_master_satuan_hasil($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $this->Master_model->do_delete_master_satuan_hasil($id); 
        }
       redirect( base_url().'master/list_master_satuan_hasil', 'refresh');
    }
	
	public function delete_master_perusahaan($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $this->Master_model->do_delete_master_perusahaan($id); 
        }
       redirect( base_url().'master/list_master_perusahaan', 'refresh');
    }
	
	public function delete_master_identitas($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $this->Master_model->do_delete_master_identitas($id); 
        }
       redirect( base_url().'master/list_master_identitas', 'refresh');
    }
	
	public function delete_master_kota($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $this->Master_model->do_delete_master_kota($id); 
        }
       redirect( base_url().'master/list_master_kota', 'refresh');
    }
	
	public function delete_master_kecamatan($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $this->Master_model->do_delete_master_kecamatan($id); 
        }
       redirect( base_url().'master/list_master_kecamatan', 'refresh');
    }
	
	public function delete_master_kelurahan($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $this->Master_model->do_delete_master_kelurahan($id); 
        }
       redirect( base_url().'master/list_master_kelurahan', 'refresh');
    }
	
	public function delete_master_tipe_pegawai($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $this->Master_model->do_delete_master_tipe_pegawai($id); 
        }
       redirect( base_url().'master/list_master_tipe_pegawai', 'refresh');
    }
	
	public function delete_master_jabatan($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $this->Master_model->do_delete_master_jabatan($id); 
        }
       redirect( base_url().'master/list_master_jabatan', 'refresh');
    }
	
	public function delete_master_bagian($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $this->Master_model->do_delete_master_bagian($id); 
        }
       redirect( base_url().'master/list_master_bagian', 'refresh');
    }
	
	public function delete_master_group($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $this->Master_model->do_delete_master_group($id); 
        }
       redirect( base_url().'master/list_master_group', 'refresh');
    }
	
	public function delete_master_jenis_pembayaran($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $this->Master_model->do_delete_master_jenis_pembayaran($id); 
        }
       redirect( base_url().'master/list_master_jenis_pembayaran', 'refresh');
    }
	
	public function delete_master_asuransi($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $this->Master_model->do_delete_master_asuransi($id); 
        }
       redirect( base_url().'master/list_master_asuransi', 'refresh');
    }
	
	public function delete_master_paket($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $this->Master_model->do_delete_master_paket($id); 
            $this->Master_model->do_delete_master_paket_detail($id); 
        }
       redirect( base_url().'master/list_master_paket', 'refresh');
    }
	
	public function delete_master_dokter($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $this->Master_model->do_delete_master_dokter($id); ; 
        }
       redirect( base_url().'master/list_master_dokter', 'refresh');
    }
	
	public function delete_master_jawaban_resume($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $this->Master_model->do_delete_master_jawaban_resume($id); ; 
        }
       redirect( base_url().'master/list_data_hasil_resume', 'refresh');
    }
	
	public function delete_master_paket_just_detail($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $this->Master_model->delete_master_paket_just_detail($id); 
        }
       redirect( base_url().'master/list_master_paket', 'refresh');
    }
	



}