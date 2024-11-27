<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class Registrasi extends CI_Controller {

    function __construct() {
        parent::__construct(); 
		$this->load->model('User_model');
		$this->load->model('Registrasi_model');
		$this->load->model('Master/Master_model');
		$this->user_id = isset($this->session->get_userdata()['user_details'][0]->users_id)?$this->session->get_userdata()['user_details'][0]->users_id:'21';
		$this->pasien_id = isset($this->session->get_userdata()['user_details'][0]->id_pasien)?$this->session->get_userdata()['user_details'][0]->id_pasien:'222';
		$this->load->helper(array('url','html','form'));
		$this->load->library('dompdf_gen');
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
		if(isset($post['save'])){
			//print_r($post);die;
			$res = $this->Registrasi_model->save_db_master_pasien($post);
			return redirect('/registrasi/list_data_pasien_new');
			//die;
			
		}
		
	}
	
	
	
	public function save_trx_pelayanan(){
		$this->load->model('registrasi_model');
		is_login();
		$post = $this->input->post();
		//print_r($post);die;	
		if(isset($post['save'])){
			$res = $this->Registrasi_model->save_db_trx_pelayanan($post);
			return redirect('/registrasi/list_data_pelayanan');
			//die;
			
		}
		
	}
	
	public function save_trx_medcheck_perusahaan(){
		$this->load->model('registrasi_model');
		is_login();
		$post = $this->input->post();
		//print_r($post);die;	
		if(isset($post['save'])){
			$res = $this->Registrasi_model->save_db_trx_medcheck_perusahaan($post);
			return redirect('/registrasi/list_data_pelayanan_perusahaan_by_search');
			//die;
			
		}
		
	}
	
	public function list_data_pasien(){
        is_login();
       // if(CheckPermission("user", "own_read")){
            $this->load->view('include/header');
            $this->load->view('data_pasien');                
            $this->load->view('include/footer');            
       /* } else {
            $this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
            redirect( base_url().'user/profile', 'refresh');
        }
		*/
    }

    public function search_data_pasien_new(){
        is_login();
        $arrPerusahaan = $this->Master_model->data_perusahaan_order_by_name();
        $nama_pasien = $this->input->post('nama_lengkap');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $nama_pt = $this->input->post('nama_pt');
        if ($nama_pasien <> '' or $tanggal_lahir<> '' or $nama_pt <> ''){
        $data = $this->Registrasi_model->get_data_pasien_by_search($nama_pasien,$tanggal_lahir,$nama_pt);
        }
       
			//print_r($data);
			
            $this->load->view('include/header');
            $this->load->view('searchDataPasien',Array('data' => $data,'arrPerusahaan' => $arrPerusahaan));                
            $this->load->view('include/footer');            
      
    }
	
	
	
	public function list_data_pasien_new(){
        is_login();
		
			$data = $this->Registrasi_model->get_data_pasien_new();

			//print_r($data);
			
            $this->load->view('include/header');
            $this->load->view('data_pasien_new',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
	
	public function list_data_pasien_new_pie_chart($id){
        is_login();
		
			$data = $this->Registrasi_model->data_medcheck_perusahaan_per_perusahaan_graph($id);
			$diagnosa_top_ten = $this->Registrasi_model->get_data_diagnosa_top_ten_table($id);
			$penunjang = $this->Registrasi_model->get_data_penunjang_graph($id);

			//print_r($data);
			
            $this->load->view('include/header');
            $this->load->view('data_pasien_new_pie_chart',Array( 'data' => $data,'diagnosa_top_ten'=>$diagnosa_top_ten,'penunjang'=>$penunjang));                
            $this->load->view('include/footer');            
      
    }
	
	public function list_data_pasien_new_pie_chart_per_perusahaan($id){
        is_login();
		
			$data = $this->Registrasi_model->data_medcheck_perusahaan_per_perusahaan_graph($id);
			$diagnosa_top_ten = $this->Registrasi_model->get_data_diagnosa_top_ten_table($id);
			$penunjang = $this->Registrasi_model->get_data_penunjang_graph($id);
			
			$user_type = $this->session->userdata ('user_details')[0]->user_type;
            if (strtolower($user_type) == 'perusahaan' && $data['id_perusahaan'] != $this->pasien_id) {
                redirect( base_url().'registrasi/list_data_medcheck_per_perusahaan');
            }

			//print_r($data);
			
            $this->load->view('include/header');
            $this->load->view('data_pasien_new_pie_chart_per_perusahaan',Array( 'data' => $data,'diagnosa_top_ten'=>$diagnosa_top_ten,'penunjang'=>$penunjang));                
            $this->load->view('include/footer');            
      
    }
    
    public function list_data_pasien_bar_chart($id){
        is_login();
		
			$data = $this->Registrasi_model->data_medcheck_perusahaan_per_perusahaan_graph($id);
			$diagnosa_top_ten = $this->Registrasi_model->get_data_diagnosa_top_ten_table($id);
			$penunjang = $this->Registrasi_model->get_data_penunjang_graph_pertahun($id);

			//print_r($data);
			
            $this->load->view('include/header');
            $this->load->view('data_pasien_bar_chart',Array( 'data' => $data,'diagnosa_top_ten'=>$diagnosa_top_ten,'penunjang'=>$penunjang));                
            $this->load->view('include/footer');            
      
    }
    
    public function list_data_pasien_bar_chart_per_perusahaan($id){
        is_login();
		
			$data = $this->Registrasi_model->data_medcheck_perusahaan_per_perusahaan_graph($id);
			$diagnosa_top_ten = $this->Registrasi_model->get_data_diagnosa_top_ten_table($id);
			$penunjang = $this->Registrasi_model->get_data_penunjang_graph_pertahun($id);
			
			$user_type = $this->session->userdata ('user_details')[0]->user_type;
            if (strtolower($user_type) == 'perusahaan' && $data['id_perusahaan'] != $this->pasien_id) {
                redirect( base_url().'registrasi/list_data_medcheck_per_perusahaan');
            }

			//print_r($data);
			
            $this->load->view('include/header');
            $this->load->view('data_pasien_bar_chart_per_perusahaan',Array( 'data' => $data,'diagnosa_top_ten'=>$diagnosa_top_ten,'penunjang'=>$penunjang));                
            $this->load->view('include/footer');            
      
    }
	
	public function list_grafik_per_bagian($id,$encodediagnosa){
        is_login();
		$diagnosa = urldecode($encodediagnosa);
		
			

			//print_r($data);
			
            $this->load->view('include/header');
            $this->load->view('pie_chart_per_bagian',Array( 'id' => $id,'diagnosa'=>$diagnosa));                
            $this->load->view('include/footer');            
      
    }
	public function getdatacharperbagian($id,$encodediagnosa) 
        { 
			$diagnosa = urldecode($encodediagnosa);
			$data = $this->Registrasi_model->get_data_grafik_per_bagian($id,$diagnosa);
 
        //         //data to json 
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->bagian", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->jumlah, 
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
        }
		
	
	public function getdatajeniskelamin($id) 
        { 
       $data = $this->Registrasi_model->get_data_jenis_kelamin($id);
 
        //         //data to json 
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->jenis_kelamin", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->jumlah, 
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
        }
		
		public function getdatafitornot($id) 
        { 
			$data = $this->Registrasi_model->get_data_fit_or_not($id);
 
        //         //data to json 
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->hasil_resume", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->jumlah, 
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
        }
		
        public function getdatadiagnosa($id) 
        { 
            // Get the data from the model
            $data = $this->Registrasi_model->get_data_diagnosa_graph($id);
        
            // Initialize the response object
            $response = new stdClass();
        
            // Set columns for the chart
            $response->cols[] = array(
                "id" => "",
                "label" => "Diagnosa",
                "pattern" => "",
                "type" => "string"
            );
            $response->cols[] = array(
                "id" => "",
                "label" => "Total",
                "pattern" => "",
                "type" => "number"
            );
        
            // Populate rows with the data
            foreach ($data as $cd) 
            {
                // Use only the diagnosis name (hasil_resume) without jumlah
                $diagnosaLabel = $cd->hasil_resume;  // No (jumlah) here
        
                // Add diagnosis name (hasil_resume) and total count (jumlah) to the response
                $response->rows[]["c"] = array(
                    array(
                        "v" => $diagnosaLabel,  // Just the diagnosis name
                        "f" => null
                    ),
                    array(
                        "v" => (int)$cd->jumlah,  // Total count as a number
                        "f" => null
                    )
                );
            }
        
            // Send the response as a JSON object
            echo json_encode($response); 
        }
        


		public function getdatatopten($id) 
        { 
			$data = $this->Registrasi_model->get_data_diagnosa_top_ten($id);
 
        //         //data to json 
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->hasil_resume", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->jumlah, 
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
        }
		
		public function getdatafaringitis($id) 
        { 
			$data = $this->Registrasi_model->get_data_faringitis_graph($id);
 
        //         //data to json 
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->bagian", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->jumlah, 
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
        } 
        
        public function getdatapenunjang($id) 
        { 
			$data = $this->Registrasi_model->get_data_penunjang_graph($id);
 
        //         //data to json 
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->jenis_pemeriksaan", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->jumlah, 
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
        }
        
        public function getdataidmedcheckpertahun($id) 
        { 
            $dtyear = $this->Registrasi_model->get_data_id_medcheck_pertahun($id);
            $response = array();
            foreach($dtyear as $dt) {
                array_push($response, $dt->id);
            }
            echo json_encode($response); 
        }
        
        public function getdatajeniskelamincompare($id) 
        { 
            $dtyear = $this->Registrasi_model->get_data_id_medcheck_pertahun($id);
            $arryear = array('');
            $dtcat = $this->Registrasi_model->get_data_jenis_kelamin_pertahun($id);
            foreach($dtcat as $dc) {
                $arrcat[$dc->jenis_kelamin] = array($dc->jenis_kelamin);
            }
            foreach($dtyear as $dt) {
                array_push($arryear, $dt->tahun);
			    $dtfit = $this->Registrasi_model->get_data_jenis_kelamin($dt->id);
			    foreach($dtfit as $df) {
    			     $arrcats[$df->jenis_kelamin] = (int)$df->jumlah;
    			 }
			    foreach($dtcat as $dc) {
			        if ($arrcats[$dc->jenis_kelamin] !== null) {
			            array_push($arrcat[$dc->jenis_kelamin], $arrcats[$dc->jenis_kelamin]);
			        } else {
			            array_push($arrcat[$dc->jenis_kelamin], 0);
			        }
			        $arrcats[$dc->jenis_kelamin] = null;
			    }
            }
            
            $response = array($arryear);
            foreach($arrcat as $ac) {
                array_push($response, $ac);
            }
 
        echo json_encode($response); 
        }
        
        public function getdatafitornotcompare($id) 
        { 
            $dtyear = $this->Registrasi_model->get_data_id_medcheck_pertahun($id);
            $arryear = array('');
            $dtcat = $this->Registrasi_model->get_data_fit_or_not_pertahun($id);
            foreach($dtcat as $dc) {
                $arrcat[$dc->hasil_resume] = array($dc->hasil_resume);
            }
            foreach($dtyear as $dt) {
                array_push($arryear, $dt->tahun);
			    $dtfit = $this->Registrasi_model->get_data_fit_or_not($dt->id);
    			 foreach($dtfit as $df) {
    			     $arrcats[$df->hasil_resume] = (int)$df->jumlah;
    			 }
			    foreach($dtcat as $dc) {
			        if ($arrcats[$dc->hasil_resume] !== null) {
			            array_push($arrcat[$dc->hasil_resume], $arrcats[$dc->hasil_resume]);
			        } else {
			            array_push($arrcat[$dc->hasil_resume], 0);
			        }
			        $arrcats[$dc->hasil_resume] = null;
			    }
            }
            
            $response = array($arryear);
            foreach($arrcat as $ac) {
                array_push($response, $ac);
            }
 
        echo json_encode($response); 
        }
        
        public function getdatadiagnosacompare($id) 
        { 
            $dtyear = $this->Registrasi_model->get_data_id_medcheck_pertahun($id);
            $arryear = array('');
            $dtcat = $this->Registrasi_model->get_data_diagnosa_graph_pertahun($id);
            foreach($dtcat as $dc) {
                $arrcat[$dc->hasil_resume] = array($dc->hasil_resume);
            }
            foreach($dtyear as $dt) {
                array_push($arryear, $dt->tahun);
			    $dtfit = $this->Registrasi_model->get_data_diagnosa_graph($dt->id);
			    foreach($dtfit as $df) {
    			     $arrcats[$df->hasil_resume] = (int)$df->jumlah;
    			 }
			    foreach($dtcat as $dc) {
			        if ($arrcats[$dc->hasil_resume] !== null) {
			            array_push($arrcat[$dc->hasil_resume], $arrcats[$dc->hasil_resume]);
			        } else {
			            array_push($arrcat[$dc->hasil_resume], 0);
			        }
			        $arrcats[$dc->hasil_resume] = null;
			    }
            }
            
            $response = array($arryear);
            foreach($arrcat as $ac) {
                array_push($response, $ac);
            }
 
        echo json_encode($response); 
        }
        
        
        public function getdatapenunjangcompare($id) 
        { 
            $dtyear = $this->Registrasi_model->get_data_id_medcheck_pertahun($id);
            $arryear = array('');
            $dtcat = $this->Registrasi_model->get_data_penunjang_graph_pertahun($id);
            foreach($dtcat as $dc) {
                $arrcat[$dc->jenis_pemeriksaan] = array($dc->jenis_pemeriksaan);
            }
            foreach($dtyear as $dt) {
                array_push($arryear, $dt->tahun);
			    $dtfit = $this->Registrasi_model->get_data_penunjang_graph($dt->id);
    			 foreach($dtfit as $df) {
    			     $arrcats[$df->jenis_pemeriksaan] = (int)$df->jumlah;
    			 }
			    foreach($dtcat as $dc) {
			        if ($arrcats[$dc->jenis_pemeriksaan] !== null) {
			            array_push($arrcat[$dc->jenis_pemeriksaan], $arrcats[$dc->jenis_pemeriksaan]);
			        } else {
			            array_push($arrcat[$dc->jenis_pemeriksaan], 0);
			        }
			        $arrcats[$dc->jenis_pemeriksaan] = null;
			    }
            }
            
            $response = array($arryear);
            foreach($arrcat as $ac) {
                array_push($response, $ac);
            }
            
        echo json_encode($response); 
        }
        
        public function getdatapenunjangall($id) 
        { 
            $dtall = $this->Registrasi_model->get_data_penunjang_graph($id);
            
            $response = array();
            foreach($dtall as $da) {
                $responcedt = new \stdClass();
                $dttype = $this->Registrasi_model->get_data_penunjang_hasil_graph($id, $da->jenis_pemeriksaan);
                
                $responce->cols[] = array( 
                    "id" => "", 
                    "label" => "Topping", 
                    "pattern" => "", 
                    "type" => "string" 
                ); 
                $responce->cols[] = array( 
                    "id" => "", 
                    "label" => "Total", 
                    "pattern" => "", 
                    "type" => "number" 
                ); 
                foreach($dttype as $dt) { 
                    $responce->rows[]["c"] = array( 
                        array( 
                            "v" => "$dt->hasil_pemeriksaan", 
                            "f" => null 
                        ) , 
                        array( 
                            "v" => (int)$dt->jumlah, 
                            "f" => null 
                        ) 
                    ); 
                }
                $responcedt->jenis = $da->jenis_pemeriksaan;
                $responcedt->data = $responce;
                
                array_push($response, $responcedt);
                $responce = null;
                $responcedt = null;
            }
            
            echo json_encode($response); 
        }
        
        public function getdatapenunjangallcompare($id) 
        { 
            $dtyear = $this->Registrasi_model->get_data_id_medcheck_pertahun($id);
            $dtall = $this->Registrasi_model->get_data_penunjang_graph_pertahun($id);
            
            $responses = array();
            foreach($dtall as $da) {
                $responcedt = new \stdClass();
                $response = array();
                $arrcat = array();
                $arrcats = array();
                $arryear = array('');
                
                $dtcat = $this->Registrasi_model->get_data_penunjang_hasil_graph_pertahun($id, $da->jenis_pemeriksaan);
                foreach($dtcat as $dc) {
                    $arrcat[$dc->hasil_pemeriksaan] = array($dc->hasil_pemeriksaan);
                }
                foreach($dtyear as $dt) {
                    array_push($arryear, $dt->tahun);
    			    $dtfit = $this->Registrasi_model->get_data_penunjang_hasil_graph($dt->id, $da->jenis_pemeriksaan);
        			 foreach($dtfit as $df) {
        			     $arrcats[$df->hasil_pemeriksaan] = (int)$df->jumlah;
        			 }
    			    foreach($dtcat as $dc) {
    			        if ($arrcats[$dc->hasil_pemeriksaan] !== null) {
    			            array_push($arrcat[$dc->hasil_pemeriksaan], $arrcats[$dc->hasil_pemeriksaan]);
    			        } else {
    			            array_push($arrcat[$dc->hasil_pemeriksaan], 0);
    			        }
    			        $arrcats[$dc->hasil_pemeriksaan] = null;
    			    }
                }
            
                $response = array($arryear);
                foreach($arrcat as $ac) {
                    array_push($response, $ac);
                }
                
                $responcedt->jenis = $da->jenis_pemeriksaan;
                $responcedt->data = $response;
                
                array_push($responses, $responcedt);
                $responcedt = null;
            }
            
        echo json_encode($responses); 
        }
	
	public function list_data_pasien_new_per_pasien(){
        is_login();
		
		$id_pasien = $this->pasien_id;
		
			$data = $this->Registrasi_model->get_data_pasien_new_per_pasien($id_pasien);
			
            $this->load->view('include/header');
            $this->load->view('data_pasien_login_pasien',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
	
	
	
    public function list_data_pelayanan(){
        is_login();
			
			$arrPerusahaan = $this->Master_model->data_perusahaan_order_by_name();
            $nama_pasien = $this->input->post('nama_lengkap');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $nama_pt = $this->input->post('nama_pt');
            if ($nama_pasien <> '' or $tanggal_lahir<> '' or $nama_pt <> ''){
                $data = $this->Registrasi_model->get_data_pelayanan_by_search($nama_pasien,$tanggal_lahir,$nama_pt);
            }
			
            $this->load->view('include/header');
            $this->load->view('data_pelayanan',Array( 'data' => $data,'arrPerusahaan' => $arrPerusahaan));                
            $this->load->view('include/footer');
    }

    public function list_data_pelayanan_perusahaan_by_search(){
        is_login();
        $arrPerusahaan = $this->Master_model->data_perusahaan_order_by_name();
        $name_pt = $this->input->post('name_pt');
        $nama_pt = $this->input->post('nama_pt');
        $tanggal_medcheck = $this->input->post('tanggal_medcheck');
        
        if ($name_pt <> '') {
            $nama_pt = $name_pt;
        }
       
        if ($nama_pt <> '' or $tanggal_medcheck<> ''){
            $data = $this->Registrasi_model->get_data_pelayanan_perusahaan_new_by_search($nama_pt,$tanggal_medcheck);
        }
		
			
			
            $this->load->view('include/header');
            $this->load->view('data_pelayanan_perusahaan_by_search',Array( 'data' => $data,'arrPerusahaan'=>$arrPerusahaan));                
            $this->load->view('include/footer');            
      
    }
	
	public function list_data_pelayanan_perusahaan(){
        is_login();
		
			$data = $this->Registrasi_model->get_data_pelayanan_perusahaan_new();
			
            $this->load->view('include/header');
            $this->load->view('data_pelayanan_perusahaan',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
	
	
	public function list_data_medcheck_per_perusahaan(){
        is_login();
		
		$id_perusahaan = $this->pasien_id;
		
			$data = $this->Registrasi_model->get_data_pelayanan_perusahaan_new_per_perusahaan($id_perusahaan);
			
            $this->load->view('include/header');
            $this->load->view('data_pelayanan_perusahaan_per_perusahaan',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
    
    public function list_data_detail_pelayanan_perusahaan($id){
        is_login();
		
		$cekParam = $this->input->get('cek');
		$param = array("cek" => $cekParam);
		
			$data = $this->Registrasi_model->get_data_detail_pelayanan_perusahaan_param($id, $cekParam);
			$data_header = $this->Registrasi_model->get_data_header_pelayanan_perusahaan($id);
			
            $this->load->view('include/header');
            $this->load->view('data_pelayanan_detail_perusahaan',Array( 'data' => $data,'data_header'=>$data_header,'param'=>$param));                
            $this->load->view('include/footer');            
      
    }
	
	public function sendemail($id) {
		
		$data = $this->Registrasi_model->get_data_detail_pasien($id);
			$data_lahir = $this->Registrasi_model->get_data_lahir_pasien($id);
			$data_tanggal_medcheck = $this->Registrasi_model->get_data_tanggal_mulai_medcheck($id);
			$data_fisik_anamsia = $this->Registrasi_model->get_pertanyaan_fisik_anamsia($id);
			$data_fisik_mata = $this->Registrasi_model->get_pertanyaan_fisik_mata($id);
			$data_fisik_leher = $this->Registrasi_model->get_pertanyaan_fisik_leher($id);
			$data_fisik_tenggorokan = $this->Registrasi_model->get_pertanyaan_fisik_tenggorokan($id);
			$data_fisik_mulut = $this->Registrasi_model->get_pertanyaan_fisik_mulut($id);
			$data_fisik_telinga = $this->Registrasi_model->get_pertanyaan_fisik_telinga($id);
			$data_fisik_hidung = $this->Registrasi_model->get_pertanyaan_fisik_hidung($id);
			$data_fisik_thorax = $this->Registrasi_model->get_pertanyaan_fisik_thorax($id);
			$data_fisik_corpulmo = $this->Registrasi_model->get_pertanyaan_fisik_corpulmo($id);
			$data_fisik_extrimitas = $this->Registrasi_model->get_pertanyaan_fisik_extrimitas($id);
			$data_fisik_genetalia = $this->Registrasi_model->get_pertanyaan_fisik_genetalia($id);
            $data_fisik_kulit = $this->Registrasi_model->get_pertanyaan_fisik_kulit($id);
			$data_fisik_sistem_alat = $this->Registrasi_model->get_pertanyaan_fisik_sistem_alat_gerak_tangan($id);
			$data_fisik_abdomen = $this->Registrasi_model->get_pertanyaan_fisik_abdomen($id);
			$data_fisik_keterangan_lain = $this->Registrasi_model->get_pertanyaan_fisik_keterangan_lain($id);
			$data_lab_hematologi = $this->Registrasi_model->get_data_lab_hematologi($id);
			$data_lab_diffcount = $this->Registrasi_model->get_data_lab_diffcount($id);
			$data_lab_urinalisa = $this->Registrasi_model->get_data_lab_urinalisa($id);
			$data_lab_sedimenurine = $this->Registrasi_model->get_data_lab_sedimenurine($id);
			$data_lab_kimia_darah = $this->Registrasi_model->get_data_lab_kimia_darah($id);
			$data_lab_hexanedione = $this->Registrasi_model->get_data_lab_hexanedione($id);
            $data_lab_elektrolit = $this->Registrasi_model->get_data_lab_elektrolit($id);
            $data_lab_feses = $this->Registrasi_model->get_data_lab_feses($id);
            $data_lab_logam = $this->Registrasi_model->get_data_lab_logam($id);
            $data_lab_codarah = $this->Registrasi_model->get_data_lab_codarah($id);
            $data_lab_benzena = $this->Registrasi_model->get_data_lab_benzena($id);
            $data_lab_toluena = $this->Registrasi_model->get_data_lab_toluena($id);
            $data_lab_xilene = $this->Registrasi_model->get_data_lab_xilene($id);
            $data_lab_btx = $this->Registrasi_model->get_data_lab_btx($id);
            $data_lab_kulturfeses = $this->Registrasi_model->get_data_lab_kulturfeses($id);
            $data_lab_penandatumor = $this->Registrasi_model->get_data_lab_penandatumor($id);
			$data_lab_drugtest = $this->Registrasi_model->get_data_lab_drugtest($id);
			$data_lab_kehamilan = $this->Registrasi_model->get_data_lab_kehamilan($id);
			$data_lab_rectal = $this->Registrasi_model->get_data_lab_rectal($id);
			$data_lab_widal = $this->Registrasi_model->get_data_lab_widal($id);
			$data_lab_imunologi = $this->Registrasi_model->get_data_lab_imunologi($id);
			$data_radiologi_cor = $this->Registrasi_model->get_data_cor($id);
			$data_radiologi_pulmo = $this->Registrasi_model->get_data_pulmo($id);
			$data_radiologi_diafragma = $this->Registrasi_model->get_data_diafragma($id);
			$data_radiologi_kesan = $this->Registrasi_model->get_data_kesan($id);
			$data_bmi = $this->Registrasi_model->get_data_bmi($id);
			$data_pertanyaan_fisik_all_terisi = $this->Registrasi_model->get_pertanyaan_fisik_all_terisi($id);
			$data_pertanyaan_fisik_mata_visus = $this->Registrasi_model->get_pertanyaan_fisik_mata_visus($id);
			$data_laboratorium = $this->Registrasi_model->get_data_labs_with_condition($id);
			$data_laboratorium_for_resume = $this->Registrasi_model->get_data_labs_for_resume($id);
			$data_resume_kesimpulan = $this->Registrasi_model->get_data_resume_kesimpulan($id);
			$data_resume_anjuran = $this->Registrasi_model->get_data_resume_anjuran($id);
			$data_resume_diagnosa = $this->Registrasi_model->get_data_resume_diagnosa($id);
			$data_resume_kategori = $this->Registrasi_model->get_data_resume_kategori($id);
			$data_penunjang_all = $this->Registrasi_model->get_data_penunjang($id);
			$data_penunjang_audiometri = $this->Registrasi_model->get_data_penunjang_audiometri($id);
			$data_penunjang_ekg = $this->Registrasi_model->get_data_penunjang_ekg($id);
			$data_penunjang_spirometri = $this->Registrasi_model->get_data_penunjang_spirometri($id);
			$data_penunjang_pap_smear = $this->Registrasi_model->get_data_penunjang_pap_smear($id);
			$data_penunjang_fitness_test = $this->Registrasi_model->get_data_penunjang_fitness_test($id);
			$data_penunjang_usg = $this->Registrasi_model->get_data_penunjang_usg($id);
			$data_penunjang_treadmill = $this->Registrasi_model->get_data_penunjang_treadmill($id);
			
           
            $this->load->view('data_summary_medcheck_per_pasien',Array( 'data' => $data,'data_lahir'=>$data_lahir,'data_tanggal_medcheck'=>$data_tanggal_medcheck,
																		'data_fisik_anamsia'=>$data_fisik_anamsia,'data_fisik_mata'=>$data_fisik_mata,'data_fisik_leher'=>$data_fisik_leher,
																		'data_fisik_tenggorokan'=>$data_fisik_tenggorokan,'data_fisik_mulut'=>$data_fisik_mulut,
																		'data_fisik_telinga'=>$data_fisik_telinga,'data_fisik_hidung'=>$data_fisik_hidung,
																		'data_fisik_thorax'=>$data_fisik_thorax,'data_fisik_corpulmo'=>$data_fisik_corpulmo,
																		'data_fisik_extrimitas'=>$data_fisik_extrimitas,'data_fisik_genetalia'=>$data_fisik_genetalia,'data_fisik_kulit'=>$data_fisik_kulit,
																		'data_fisik_sistem_alat'=>$data_fisik_sistem_alat,
																		'data_fisik_abdomen'=>$data_fisik_abdomen,'data_fisik_keterangan_lain'=>$data_fisik_keterangan_lain,
																		'data_lab_hematologi'=>$data_lab_hematologi,'data_lab_diffcount'=>$data_lab_diffcount,
																		'data_lab_urinalisa'=>$data_lab_urinalisa,'data_lab_sedimenurine'=>$data_lab_sedimenurine,
																		'data_lab_kimia_darah'=>$data_lab_kimia_darah,'data_lab_imunologi'=>$data_lab_imunologi,
																		'data_lab_hexanedione'=>$data_lab_hexanedione,
                                                                        'data_lab_elektrolit'=>$data_lab_elektrolit,
                                                                        'data_lab_feses'=>$data_lab_feses,
                                                                        'data_lab_logam'=>$data_lab_logam,'data_lab_codarah'=>$data_lab_codarah,
                                                                        'data_lab_benzena'=>$data_lab_benzena,'data_lab_toluena'=>$data_lab_toluena,'data_lab_xilene'=>$data_lab_xilene,'data_lab_btx'=>$data_lab_btx,
                                                                        'data_lab_kulturfeses'=>$data_lab_kulturfeses,
																		'data_radiologi_cor'=>$data_radiologi_cor,'data_radiologi_pulmo'=>$data_radiologi_pulmo,
																		'data_radiologi_diafragma'=>$data_radiologi_diafragma,'data_radiologi_kesan'=>$data_radiologi_kesan,
																		'data_bmi'=>$data_bmi,'data_pertanyaan_fisik_all_terisi'=>$data_pertanyaan_fisik_all_terisi,
																		'data_laboratorium'=>$data_laboratorium,'data_resume_kesimpulan'=>$data_resume_kesimpulan,
																		'data_resume_anjuran'=>$data_resume_anjuran,'data_resume_diagnosa'=>$data_resume_diagnosa,
																		'data_resume_kategori'=>$data_resume_kategori,'data_penunjang_all'=>$data_penunjang_all,
																		'data_pertanyaan_fisik_mata_visus'=>$data_pertanyaan_fisik_mata_visus,'data_laboratorium_for_resume'=>$data_laboratorium_for_resume,
																		'data_lab_drugtest'=>$data_lab_drugtest,'data_lab_kehamilan'=>$data_lab_kehamilan,
																		'data_lab_rectal'=>$data_lab_rectal,'data_lab_widal'=>$data_lab_widal,
																		'data_penunjang_audiometri'=>$data_penunjang_audiometri,'data_penunjang_ekg'=>$data_penunjang_ekg,
																		'data_penunjang_spirometri'=>$data_penunjang_spirometri,'data_penunjang_pap_smear'=>$data_penunjang_pap_smear,
																		'data_penunjang_fitness_test'=>$data_penunjang_fitness_test,'data_penunjang_usg'=>$data_penunjang_usg,
																		'data_penunjang_treadmill'=>$data_penunjang_treadmill));                
                 
			
			$paper_size  = 'A5'; //paper size
			$orientation = 'potrait'; //tipe format kertas
			$html = $this->output->get_output();
			
			$this->dompdf->set_paper($paper_size, $orientation);
			//Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$pdf = $this->dompdf->output(); 
			
        $this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');
        $to = "rezapawanov@gmail.com";
        $subject = "Test Email";
        $message = "Message Body";

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
		$this->email->attach($pdf, 'application/pdf', "Pdf File " . date("m-d H-i-s") . ".pdf", false);
        if ($this->email->send()) {
            redirect( base_url().'registrasi/detailMedicalCheckups/'.$id);
        } else {
            show_error($this->email->print_debugger());
        }
    }
	
	public function list_data_detail_pelayanan_perusahaan_per_perusahaan($id){
        is_login();
		
			$data = $this->Registrasi_model->get_data_detail_pelayanan_perusahaan($id);
			$data_header = $this->Registrasi_model->get_data_header_pelayanan_perusahaan($id);
			
			$user_type = $this->session->userdata ('user_details')[0]->user_type;
            if (strtolower($user_type) == 'perusahaan' && $data_header['id_perusahaan'] != $this->pasien_id) {
                redirect( base_url().'registrasi/list_data_medcheck_per_perusahaan');
            }
			
            $this->load->view('include/header');
            $this->load->view('data_pelayanan_detail_perusahaan_per_perusahaan',Array( 'data' => $data,'data_header'=>$data_header));                
            $this->load->view('include/footer');            
      
    }
	
	public function list_data_detail_chart_kategori_medcheck($id){
        is_login();
		
			$data = $this->Registrasi_model->get_data_detail_kategori_medcheck($id);
			
            $this->load->view('include/header');
            $this->load->view('data_detail_kategori_medcheck',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
	public function list_data_detail_chart_kategori_medcheck_klik($id,$hasilresume){
        is_login();
		
		$hasilresumedecode = urldecode($hasilresume);
		
			$data = $this->Registrasi_model->get_data_detail_kategori_medcheck_klik($id, $hasilresumedecode);
			
            $this->load->view('include/header');
            $this->load->view('data_detail_kategori_medcheck_klik',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
    public function list_data_detail_chart_kategori_medcheck_pertahun($id){
        is_login();
		
			$data = $this->Registrasi_model->get_data_detail_kategori_medcheck_pertahun($id);
			
            $this->load->view('include/header');
            $this->load->view('data_detail_kategori_medcheck',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
	
	public function list_data_detail_chart_diagnosa_perbagian($id){
        is_login();
		
			$data = $this->Registrasi_model->get_data_detail_diagnosa_per_bagian($id);
			
            $this->load->view('include/header');
            $this->load->view('data_detail_diagnosa_per_bagian',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }

    public function list_data_detail_chart_diagnosa_perbagian_klik($id, $hasilresume){
        is_login();
    $hasilresumedecode = urldecode($hasilresume);
    $data = $this->Registrasi_model->get_data_detail_diagnosa_per_bagian_klik($id, $hasilresumedecode);
    $this->load->view('include/header');
    $this->load->view('data_detail_diagnosa_per_bagian_klik',Array( 'data' => $data));                
    $this->load->view('include/footer');            
      
    }
    
    public function list_data_detail_chart_diagnosa_perbagian_pertahun($id){
        is_login();
		
			$data = $this->Registrasi_model->get_data_detail_diagnosa_per_bagian_pertahun($id);
			
            $this->load->view('include/header');
            $this->load->view('data_detail_diagnosa_per_bagian',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
	
	public function list_data_detail_chart_faringitis($id){
        is_login();
		
			$data = $this->Registrasi_model->get_data_detail_temuan_faringitis($id);
			
            $this->load->view('include/header');
            $this->load->view('data_detail_temuan_faringitis',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
	
	public function list_data_detail_chart_jenis_kelamin($id){
        is_login();
		
			$data = $this->Registrasi_model->get_data_detail_jenis_kelamin($id);
			
            $this->load->view('include/header');
            $this->load->view('data_detail_jenis_kelamin_medcheck',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
	
	public function list_data_detail_chart_jenis_kelamin_klik($id, $jeniskelamin){
        is_login();
		
			$data = $this->Registrasi_model->get_data_detail_jenis_kelamin_klik($id, $jeniskelamin);
			
            $this->load->view('include/header');
            $this->load->view('data_detail_jenis_kelamin_medcheck_klik',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
    
    public function list_data_detail_chart_jenis_kelamin_pertahun($id){
        is_login();
		
			$data = $this->Registrasi_model->get_data_detail_jenis_kelamin_pertahun($id);
			
            $this->load->view('include/header');
            $this->load->view('data_detail_jenis_kelamin_medcheck',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
    
    public function list_data_detail_penunjang_medcheck($id){
        is_login();
		
			$data = $this->Registrasi_model->get_data_detail_penunjang_medcheck($id);
			
            $this->load->view('include/header');
            $this->load->view('data_detail_penunjang_medcheck',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
    
    public function list_data_detail_penunjang_medcheck_klik($id,$jenispemeriksaan){
        is_login();
		
		$jenisdecode = urldecode($jenispemeriksaan);
		
			$data = $this->Registrasi_model->get_data_detail_penunjang_medcheck_klik($id, $jenisdecode);
			
            $this->load->view('include/header');
            $this->load->view('data_detail_penunjang_medcheck_klik',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
    
    public function list_data_detail_penunjang_medcheck_pertahun($id){
        is_login();
		
			$data = $this->Registrasi_model->get_data_detail_penunjang_medcheck_pertahun($id);
			
            $this->load->view('include/header');
            $this->load->view('data_detail_penunjang_medcheck',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
    
    public function list_data_detail_penunjang_all_medcheck_klik($id,$jenis,$hasil){
        is_login();
		
		$jenisdecode = urldecode($jenis);
		$hasildecode = urldecode($hasil);
		
			$data = $this->Registrasi_model->get_data_detail_penunjang_all_medcheck_klik($id, $jenisdecode, $hasildecode);
			
            $this->load->view('include/header');
            $this->load->view('data_detail_penunjang_medcheck_klik',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
    
    public function list_data_detail_penunjang_medcheck_klik_pertahun($id,$jenispemeriksaan){
        is_login();
		
		$jenisdecode = urldecode($jenispemeriksaan);
		
			$data = $this->Registrasi_model->get_data_detail_penunjang_medcheck_klik_pertahun($id, $jenisdecode);
			
            $this->load->view('include/header');
            $this->load->view('data_detail_penunjang_medcheck_klik',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
	
	public function print_label($id){
        is_login();
		
			$data = $this->Registrasi_model->get_data_pasien_based_id_pelayanan($id);
			$data_lahir = $this->Registrasi_model->get_data_lahir_pasien($id);
			$data_lahir_tahun = $this->Registrasi_model->get_data_lahir_pasien_hanya_tahun($id);
			$data_paket = $this->Master_model->get_data_paket_pasien($data['nama_paket']);
			$arrid_tipe = [0];
            if ($data_paket['tipe_pemeriksaan'] != null && !empty($data_paket['tipe_pemeriksaan'])) {
                $arrid_tipe = explode(',', $data_paket['tipe_pemeriksaan']);
            }
            $data_tipe_periksa = $this->Master_model->get_data_tipe_pemeriksaan_pasien($arrid_tipe);
			
            
            $this->load->view('print_label_barcode',Array( 'data' => $data,'data_lahir'=>$data_lahir,'data_lahir_tahun'=>$data_lahir_tahun,'data_tipe_periksa'=>$data_tipe_periksa));          
			
			$paper_size  = 'A4'; //paper size
			$orientation = 'potrait'; //tipe format kertas
			$html = $this->output->get_output();
			
			$this->dompdf->set_paper($paper_size, $orientation);
			//Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("Work_Order.pdf", array('Attachment'=>0));         
      
    }
	
	public function print_summary_invoice_medical_perusahaan($id){
        is_login();
		
			$data = $this->Registrasi_model->get_data_detail_invoice_pasien_per_perusahaan_new($id);
			$data_perusahaan = $this->Registrasi_model->get_data_summary_invoice_perusahaan($id);
			$total_tagihan = $this->Registrasi_model->get_data_total_tagihan($id);
			
           
            $this->load->view('data_invoice_summary_pasien_per_perusahaan',Array( 'data' => $data,'data_perusahaan'=>$data_perusahaan,'total_tagihan'=>$total_tagihan));                
                 
			
			$paper_size  = 'A4'; //paper size
			$orientation = 'potrait'; //tipe format kertas
			$html = $this->output->get_output();
			
			$this->dompdf->set_paper($paper_size, $orientation);
			//Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("Work_Order.pdf", array('Attachment'=>0));         
      
    }
	
	public function print_summary_medcheck_perorangan($id){
        is_login();
		
			$data = $this->Registrasi_model->get_data_detail_pasien($id);
			$data_lahir = $this->Registrasi_model->get_data_lahir_pasien($id);
			$data_tanggal_medcheck = $this->Registrasi_model->get_data_tanggal_mulai_medcheck($id);
			$data_fisik_anamsia = $this->Registrasi_model->get_pertanyaan_fisik_anamsia($id);
			$data_fisik_mata = $this->Registrasi_model->get_pertanyaan_fisik_mata($id);
			$data_fisik_leher = $this->Registrasi_model->get_pertanyaan_fisik_leher($id);
			$data_fisik_tenggorokan = $this->Registrasi_model->get_pertanyaan_fisik_tenggorokan($id);
			$data_fisik_mulut = $this->Registrasi_model->get_pertanyaan_fisik_mulut($id);
			$data_fisik_telinga = $this->Registrasi_model->get_pertanyaan_fisik_telinga($id);
			$data_fisik_hidung = $this->Registrasi_model->get_pertanyaan_fisik_hidung($id);
			$data_fisik_thorax = $this->Registrasi_model->get_pertanyaan_fisik_thorax($id);
			$data_fisik_corpulmo = $this->Registrasi_model->get_pertanyaan_fisik_corpulmo($id);
			$data_fisik_extrimitas = $this->Registrasi_model->get_pertanyaan_fisik_extrimitas($id);
			$data_fisik_genetalia = $this->Registrasi_model->get_pertanyaan_fisik_genetalia($id);
			$data_fisik_neuromuscular = $this->Registrasi_model->get_pertanyaan_fisik_neuromuscular($id);
            $data_fisik_kulit = $this->Registrasi_model->get_pertanyaan_fisik_kulit($id);
            $data_fisik_perut = $this->Registrasi_model->get_pertanyaan_fisik_perut($id);
			$data_fisik_sistem_alat = $this->Registrasi_model->get_pertanyaan_fisik_sistem_alat_gerak_tangan($id);
			$data_fisik_abdomen = $this->Registrasi_model->get_pertanyaan_fisik_abdomen($id);
			$data_fisik_keterangan_lain = $this->Registrasi_model->get_pertanyaan_fisik_keterangan_lain($id);
			$data_lab_hematologi = $this->Registrasi_model->get_data_lab_hematologi($id);
			$data_lab_diffcount = $this->Registrasi_model->get_data_lab_diffcount($id);
			$data_lab_urinalisa = $this->Registrasi_model->get_data_lab_urinalisa($id);
			$data_lab_sedimenurine = $this->Registrasi_model->get_data_lab_sedimenurine($id);
			$data_lab_kimia_darah = $this->Registrasi_model->get_data_lab_kimia_darah($id);
			$data_lab_hexanedione = $this->Registrasi_model->get_data_lab_hexanedione($id);
            $data_lab_elektrolit = $this->Registrasi_model->get_data_lab_elektrolit($id);
            $data_lab_feses = $this->Registrasi_model->get_data_lab_feses($id);
            $data_lab_logam = $this->Registrasi_model->get_data_lab_logam($id);
            $data_lab_codarah = $this->Registrasi_model->get_data_lab_codarah($id);
            $data_lab_benzena = $this->Registrasi_model->get_data_lab_benzena($id);
            $data_lab_toluena = $this->Registrasi_model->get_data_lab_toluena($id);
            $data_lab_xilene = $this->Registrasi_model->get_data_lab_xilene($id);
            $data_lab_btx = $this->Registrasi_model->get_data_lab_btx($id);
            $data_lab_kulturfeses = $this->Registrasi_model->get_data_lab_kulturfeses($id);
			$data_lab_drugtest = $this->Registrasi_model->get_data_lab_drugtest($id);
			$data_lab_kehamilan = $this->Registrasi_model->get_data_lab_kehamilan($id);
			$data_lab_rectal = $this->Registrasi_model->get_data_lab_rectal($id);
			$data_lab_widal = $this->Registrasi_model->get_data_lab_widal($id);
			$data_lab_imunologi = $this->Registrasi_model->get_data_lab_imunologi($id);
			$data_lab_golongandarah = $this->Registrasi_model->get_data_lab_golongandarah($id);
            $data_lab_penandatumor = $this->Registrasi_model->get_data_lab_penandatumor($id);
            $data_lab_imunoserologi = $this->Registrasi_model->get_data_lab_imunoserologi($id);
			$data_radiologi_cor = $this->Registrasi_model->get_data_cor($id);
			$data_radiologi_pulmo = $this->Registrasi_model->get_data_pulmo($id);
			$data_radiologi_diafragma = $this->Registrasi_model->get_data_diafragma($id);
			$data_radiologi_kesan = $this->Registrasi_model->get_data_kesan($id);
			$data_bmi = $this->Registrasi_model->get_data_bmi($id);
			$data_pertanyaan_fisik_all_terisi = $this->Registrasi_model->get_pertanyaan_fisik_all_terisi($id);
			$data_pertanyaan_fisik_mata_visus = $this->Registrasi_model->get_pertanyaan_fisik_mata_visus($id);
			$data_laboratorium = $this->Registrasi_model->get_data_labs_with_condition($id);
			$data_laboratorium_for_resume = $this->Registrasi_model->get_data_labs_for_resume($id);
			$data_resume_kesimpulan = $this->Registrasi_model->get_data_resume_kesimpulan($id);
			$data_resume_anjuran = $this->Registrasi_model->get_data_resume_anjuran($id);
			$data_resume_diagnosa = $this->Registrasi_model->get_data_resume_diagnosa($id);
			$data_resume_kategori = $this->Registrasi_model->get_data_resume_kategori($id);
			$data_penunjang_all = $this->Registrasi_model->get_data_penunjang($id);
			$data_penunjang_audiometri = $this->Registrasi_model->get_data_penunjang_audiometri($id);
			$data_penunjang_ekg = $this->Registrasi_model->get_data_penunjang_ekg($id);
			$data_penunjang_spirometri = $this->Registrasi_model->get_data_penunjang_spirometri($id);
			$data_penunjang_pap_smear = $this->Registrasi_model->get_data_penunjang_pap_smear($id);
			$data_penunjang_fitness_test = $this->Registrasi_model->get_data_penunjang_fitness_test($id);
			$data_penunjang_treadmill = $this->Registrasi_model->get_data_penunjang_treadmill($id);
			$data_penunjang_usg_mammae = $this->Registrasi_model->get_data_penunjang_usg_mammae($id);
			$data_penunjang_usg_abdomen = $this->Registrasi_model->get_data_penunjang_usg_abdomen($id);
			$data_penunjang_ilo = $this->Registrasi_model->get_data_penunjang_ilo($id);
			$data_penunjang_iva = $this->Registrasi_model->get_data_penunjang_iva($id);
			$data_penunjang_alcohol = $this->Registrasi_model->get_data_penunjang_alcohol($id);
			$data_penunjang_romberg = $this->Registrasi_model->get_data_penunjang_romberg($id);
			
           
            $this->load->view('data_summary_medcheck_per_pasien',Array( 'data' => $data,'data_lahir'=>$data_lahir,'data_tanggal_medcheck'=>$data_tanggal_medcheck,
																		'data_fisik_anamsia'=>$data_fisik_anamsia,'data_fisik_mata'=>$data_fisik_mata,'data_fisik_leher'=>$data_fisik_leher,
																		'data_fisik_tenggorokan'=>$data_fisik_tenggorokan,'data_fisik_mulut'=>$data_fisik_mulut,
																		'data_fisik_telinga'=>$data_fisik_telinga,'data_fisik_hidung'=>$data_fisik_hidung,
																		'data_fisik_thorax'=>$data_fisik_thorax,'data_fisik_corpulmo'=>$data_fisik_corpulmo,
																		'data_fisik_extrimitas'=>$data_fisik_extrimitas,'data_fisik_genetalia'=>$data_fisik_genetalia,'data_fisik_kulit'=>$data_fisik_kulit,
																		'data_fisik_perut'=>$data_fisik_perut,'data_fisik_sistem_alat'=>$data_fisik_sistem_alat,
																		'data_fisik_abdomen'=>$data_fisik_abdomen,'data_fisik_keterangan_lain'=>$data_fisik_keterangan_lain,
																		'data_lab_hematologi'=>$data_lab_hematologi,'data_lab_diffcount'=>$data_lab_diffcount,
																		'data_lab_urinalisa'=>$data_lab_urinalisa,'data_lab_sedimenurine'=>$data_lab_sedimenurine,
																		'data_lab_kimia_darah'=>$data_lab_kimia_darah,'data_lab_imunologi'=>$data_lab_imunologi,
																		'data_lab_hexanedione'=>$data_lab_hexanedione,'data_fisik_neuromuscular'=>$data_fisik_neuromuscular,
                                                                        'data_lab_elektrolit'=>$data_lab_elektrolit,
                                                                        'data_lab_feses'=>$data_lab_feses,
                                                                        'data_lab_logam'=>$data_lab_logam,'data_lab_codarah'=>$data_lab_codarah,
                                                                        'data_lab_benzena'=>$data_lab_benzena,'data_lab_toluena'=>$data_lab_toluena,'data_lab_xilene'=>$data_lab_xilene,
                                                                        'data_lab_btx'=>$data_lab_btx,
                                                                        'data_lab_kulturfeses'=>$data_lab_kulturfeses,
																		'data_lab_golongandarah'=>$data_lab_golongandarah,
                                                                        'data_lab_penandatumor'=>$data_lab_penandatumor,
                                                                        'data_lab_imunoserologi'=>$data_lab_imunoserologi,
																		'data_radiologi_cor'=>$data_radiologi_cor,'data_radiologi_pulmo'=>$data_radiologi_pulmo,
																		'data_radiologi_diafragma'=>$data_radiologi_diafragma,'data_radiologi_kesan'=>$data_radiologi_kesan,
																		'data_bmi'=>$data_bmi,'data_pertanyaan_fisik_all_terisi'=>$data_pertanyaan_fisik_all_terisi,
																		'data_laboratorium'=>$data_laboratorium,'data_resume_kesimpulan'=>$data_resume_kesimpulan,
																		'data_resume_anjuran'=>$data_resume_anjuran,'data_resume_diagnosa'=>$data_resume_diagnosa,
																		'data_resume_kategori'=>$data_resume_kategori,'data_penunjang_all'=>$data_penunjang_all,
																		'data_pertanyaan_fisik_mata_visus'=>$data_pertanyaan_fisik_mata_visus,'data_laboratorium_for_resume'=>$data_laboratorium_for_resume,
																		'data_lab_drugtest'=>$data_lab_drugtest,'data_lab_kehamilan'=>$data_lab_kehamilan,
																		'data_lab_rectal'=>$data_lab_rectal,'data_lab_widal'=>$data_lab_widal,
																		'data_penunjang_audiometri'=>$data_penunjang_audiometri,'data_penunjang_ekg'=>$data_penunjang_ekg,
																		'data_penunjang_spirometri'=>$data_penunjang_spirometri,'data_penunjang_pap_smear'=>$data_penunjang_pap_smear,
																		'data_penunjang_usg_mammae'=>$data_penunjang_usg_mammae,'data_penunjang_usg_abdomen'=>$data_penunjang_usg_abdomen,
																		'data_penunjang_ilo'=>$data_penunjang_ilo,'data_penunjang_iva'=>$data_penunjang_iva,
																		'data_penunjang_alcohol'=>$data_penunjang_alcohol,'data_penunjang_romberg'=>$data_penunjang_romberg,
																		'data_penunjang_fitness_test'=>$data_penunjang_fitness_test,'data_penunjang_treadmill'=>$data_penunjang_treadmill));                
                 
			
			$paper_size  = 'A5'; //paper size
			$orientation = 'potrait'; //tipe format kertas
			$html = $this->output->get_output();
			
			$this->dompdf->set_paper($paper_size, $orientation);
			//Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("Work_Order.pdf", array('Attachment'=>0));         
      
    }
	
	
	public function print_summary_invoice_tambahan($id){
        is_login();
		
			$data = $this->Registrasi_model->get_data_detail_invoice_pasien_per_perusahaan_tambahan($id);
			$data_perusahaan = $this->Registrasi_model->get_data_summary_invoice_perusahaan($id);
			$total_tagihan = $this->Registrasi_model->get_data_total_tagihan_tambahan($id);
			
           
            $this->load->view('data_invoice_summary_pasien_tambahan',Array( 'data' => $data,'data_perusahaan'=>$data_perusahaan,'total_tagihan'=>$total_tagihan));                
                 
			
			$paper_size  = 'A4'; //paper size
			$orientation = 'potrait'; //tipe format kertas
			$html = $this->output->get_output();
			
			$this->dompdf->set_paper($paper_size, $orientation);
			//Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("Work_Order.pdf", array('Attachment'=>0));         
      
    }
	
	public function list_data_pelayanan_rawat_jalan(){
        is_login();
		
			$data = $this->Registrasi_model->get_data_pelayanan_rawat_jalan();
			
            $this->load->view('include/header');
            $this->load->view('data_pelayanan_rawat_jalan',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
	
	public function data_pasien (){
        is_login();
	    $table = 'master_pasien';
    	$primaryKey = 'id';
    	$columns = array(
			array( 'db' => 'id', 'dt' => 0 ),
			array( 'db' => 'nama_depan', 'dt' => 1 ),
			array( 'db' => 'nama_lengkap', 'dt' => 2 ),
			array( 'db' => 'nama_pt', 'dt' => 3 ),
			array( 'db' => 'jenis_kelamin', 'dt' => 4 ),
			array( 'db' => 'tempat_lahir', 'dt' => 5 ),
			array( 'db' => 'alamat_lengkap', 'dt' => 6 ),
			array( 'db' => 'telepon', 'dt' => 7 ),
			array( 'db' => 'handphone', 'dt' => 8 ),
			array( 'db' => 'email', 'dt' => 9 ),
			array( 'db' => 'tipe_pegawai', 'dt' => 10 ),
			array( 'db' => 'jabatan', 'dt' => 11 ),
			array( 'db' => 'jenis_pembayaran', 'dt' => 12 ),
			array( 'db' => 'nama_asuransi', 'dt' => 13 ),
			array( 'db' => 'id', 'dt' => 14)
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
	
	
	
	
	public function data_pelayanan (){
        is_login();
		
	$table = 
	('SELECT a.id,b.nama_lengkap, a.jenis_pelayanan, a.status  FROM trx_pelayanan a LEFT JOIN master_pasien b on  (a.id_pasien = b.id)' );
			

    	$primaryKey = 'id';
    	$columns = array(
			array( 'db' => 'id', 'dt' => 0 ),
			array( 'db' => 'nama_lengkap', 'dt' => 1 ),
			array( 'db' => 'jenis_pelayanan', 'dt' => 2 ),
			array( 'db' => 'status', 'dt' => 3 )
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
		$arrPerusahaan = $this->Master_model->data_perusahaan();
		$arrIdentitas = $this->Master_model->data_identitas();
		$arrKota = $this->Master_model->data_kota();
		$arrKecamatan = $this->Master_model->data_kecamatan();
		$arrKelurahan = $this->Master_model->data_kelurahan();
		$arrTipePegawai = $this->Master_model->data_tipe_pegawai();
		$arrJabatan = $this->Master_model->data_jabatan();
		$arrBagian = $this->Master_model->data_bagian();
		$arrGroup = $this->Master_model->data_group();
		$arrJenisPembayaran = $this->Master_model->data_jenis_pembayaran();
		$arrAsuransi = $this->Master_model->data_asuransi();
        $this->load->view('include/header'); 
        $this->load->view('inputPasienBaru', Array('arrPerusahaan'=>$arrPerusahaan,'arrIdentitas'=>$arrIdentitas,'arrKota' => $arrKota,
												   'arrKecamatan'=>$arrKecamatan,'arrKelurahan'=>$arrKelurahan,'arrTipePegawai'=>$arrTipePegawai,
												   'arrJabatan'=>$arrJabatan,'arrBagian'=>$arrBagian,'arrGroup'=>$arrGroup,
												   'arrJenisPembayaran'=>$arrJenisPembayaran,'arrAsuransi'=>$arrAsuransi));
        $this->load->view('include/footer');
    }
    
    public function webcam_pelayanan($id='') {
        is_login();
        if(!isset($id) || $id == '') {
            $id = $this->session->userdata ('user_details')[0]->users_id;
        }
        
        $arrDataPasien = $this->Registrasi_model->get_data_pasien($id);
		$arrDataDetailPasien = $this->Registrasi_model->get_data_detail_pasien($id);
		$this->load->view('webcamPelayanan', Array('arrDataPasien'=>$arrDataPasien, 'arrDataDetailPasien'=>$arrDataDetailPasien));
    }
	
    public function detailMedicalCheckups($id = '') {
        // Ensure the user is logged in
        is_login();
    
        // If no ID is passed, use the ID from the session
        if (!isset($id) || $id == '') {
            $id = $this->session->userdata('user_details')[0]->users_id;
        }
    
        // Fetching patient-related data
        $data_bmi = $this->Registrasi_model->get_data_bmi($id);
        $data_tanggal_lahir = $this->Registrasi_model->get_data_lahir_pasien($id);
        $arrPertanyaanFisikAnamsia = $this->Registrasi_model->get_pertanyaan_fisik_anamsia($id);
        $arrPertanyaanFisikMata = $this->Registrasi_model->get_pertanyaan_fisik_mata($id);
        $arrPertanyaanFisikPerut = $this->Registrasi_model->get_pertanyaan_fisik_perut($id);
        $arrPertanyaanFisikLeher = $this->Registrasi_model->get_pertanyaan_fisik_leher($id);
        $arrPertanyaanFisikTenggorokan = $this->Registrasi_model->get_pertanyaan_fisik_tenggorokan($id);
        $arrPertanyaanFisikMulut = $this->Registrasi_model->get_pertanyaan_fisik_mulut($id);
        $arrPertanyaanFisikTelinga = $this->Registrasi_model->get_pertanyaan_fisik_telinga($id);
        $arrPertanyaanFisikHidung = $this->Registrasi_model->get_pertanyaan_fisik_hidung($id);
        $arrPertanyaanFisikThorax = $this->Registrasi_model->get_pertanyaan_fisik_thorax($id);
        $arrPertanyaanFisikCorPulmo = $this->Registrasi_model->get_pertanyaan_fisik_corpulmo($id);
        $arrPertanyaanFisikExtrimitas = $this->Registrasi_model->get_pertanyaan_fisik_extrimitas($id);
        $arrPertanyaanFisikNeuromuscular = $this->Registrasi_model->get_pertanyaan_fisik_neuromuscular($id);
        $arrPertanyaanFisikKulit = $this->Registrasi_model->get_pertanyaan_fisik_kulit($id);
        $arrPertanyaanFisikSistemAlatGerakTangan = $this->Registrasi_model->get_pertanyaan_fisik_sistem_alat_gerak_tangan($id);
        $arrPertanyaanFisikAbdomen = $this->Registrasi_model->get_pertanyaan_fisik_abdomen($id);
        $arrPertanyaanFisikKeteranganLain = $this->Registrasi_model->get_pertanyaan_fisik_keterangan_lain($id);
        $arrPertanyaanFisikGenetalia = $this->Registrasi_model->get_pertanyaan_fisik_genetalia($id);
        $arrDataPasien = $this->Registrasi_model->get_data_pasien($id);
        $arrDataDetailPasien = $this->Registrasi_model->get_data_detail_pasien($id);
        $arrDataDetailPerusahaanPasien = $this->Registrasi_model->get_data_header_pelayanan_perusahaan_medcheck($id);
        $arrDataUsers = $this->Registrasi_model->get_users($id);
        $arrDataLab = $this->Registrasi_model->get_data_labs($id);
        $arrDataRadiologi = $this->Registrasi_model->get_data_radiologi($id);
        $arrDataResume = $this->Registrasi_model->get_data_resume($id);
        $arrDataResumes = $this->Registrasi_model->get_data_resume($id);
        $arrDataPenunjang = $this->Registrasi_model->get_data_penunjang($id);
    
        // Fetch selected years from GET request
        $year1 = $this->input->get('year1');
        $year2 = $this->input->get('year2');

          // Dynamically build the URL with query parameters
        $url = site_url('registration/detailMedicalCheckups/'.$id.'?year1='.$year1.'&year2='.$year2);

    
         // Fetch data for the selected years if available
         if ($year1 && $year2) {
            // Call the model to fetch resume data for the selected years
            $arrDataResumeYear1 = $this->Registrasi_model->get_data_resume_by_year($id, $year1);
            $arrDataResumeYear2 = $this->Registrasi_model->get_data_resume_by_year($id, $year2);
        } else {
            // If no years are selected, fetch all resume data
            $arrDataResume = $this->Registrasi_model->get_data_resume($id);
            $arrDataResumes = $this->Registrasi_model->get_data_resume($id);
            $arrDataResumeYear1 = $arrDataResumes;
            $arrDataResumeYear2 = $arrDataResumes;
        }
    
        // Load the view with all the required data
        $this->load->view('include/header');
        $this->load->view('detailMedicalCheckup', Array(
            'arrPertanyaanFisikMata' => $arrPertanyaanFisikMata,
            'arrPertanyaanFisikAnamsia' => $arrPertanyaanFisikAnamsia,
            'arrDataPasien' => $arrDataPasien,
            'arrPertanyaanFisikLeher' => $arrPertanyaanFisikLeher,
            'arrPertanyaanFisikTenggorokan' => $arrPertanyaanFisikTenggorokan,
            'arrPertanyaanFisikMulut' => $arrPertanyaanFisikMulut,
            'arrPertanyaanFisikTelinga' => $arrPertanyaanFisikTelinga,
            'arrPertanyaanFisikHidung' => $arrPertanyaanFisikHidung,
            'arrPertanyaanFisikThorax' => $arrPertanyaanFisikThorax,
            'arrPertanyaanFisikCorPulmo' => $arrPertanyaanFisikCorPulmo,
            'arrPertanyaanFisikExtrimitas' => $arrPertanyaanFisikExtrimitas,
            'arrPertanyaanFisikPerut' => $arrPertanyaanFisikPerut,
            'arrPertanyaanFisikKulit' => $arrPertanyaanFisikKulit,
            'arrPertanyaanFisikSistemAlatGerakTangan' => $arrPertanyaanFisikSistemAlatGerakTangan,
            'arrPertanyaanFisikAbdomen' => $arrPertanyaanFisikAbdomen,
            'arrPertanyaanFisikNeuromuscular' => $arrPertanyaanFisikNeuromuscular,
            'arrPertanyaanFisikKeteranganLain' => $arrPertanyaanFisikKeteranganLain,
            'arrPertanyaanFisikGenetalia' => $arrPertanyaanFisikGenetalia,
            'arrDataUsers' => $arrDataUsers,
            'arrDataLab' => $arrDataLab,
            'arrDataRadiologi' => $arrDataRadiologi,
            'arrDataPenunjang' => $arrDataPenunjang,
            'arrDataResume' => $arrDataResume,
            'arrDataResumes' => $arrDataResumes,
            'arrDataResumeYear1' => $arrDataResumeYear1,
            'arrDataResumeYear2' => $arrDataResumeYear2,
            'year1' => $year1,
            'year2' => $year2,
            'data_year1' => $data_year1,
            'data_year2' => $data_year2,
            'url' => $url, // Pass the dynamically created URL to the view
            'data_bmi' => $data_bmi,
            'data_tanggal_lahir' => $data_tanggal_lahir,
            'arrDataDetailPasien' => $arrDataDetailPasien,
            'arrDataDetailPerusahaanPasien' => $arrDataDetailPerusahaanPasien
        ));
        $this->load->view('include/footer');
    }
    
    public function forms_submit() {
        // Check if the form is submitted
        $year1 = $this->input->get('year1');
        $year2 = $this->input->get('year2');
        $id = $this->input->get('id_pelayanan');
    
        // For testing purposes, output the parameters
        echo "Year 1: " . $year1 . "<br>";
        echo "Year 2: " . $year2 . "<br>";
        echo "ID: " . $id . "<br>";
    }
    
    
	
	public function detailMedicalCheckupsPerPasien($id='') {   
        is_login();
        if(!isset($id) || $id == '') {
            $id = $this->session->userdata ('user_details')[0]->users_id;
        }
		$data_bmi = $this->Registrasi_model->get_data_bmi($id);
		$data_tanggal_lahir = $this->Registrasi_model->get_data_lahir_pasien($id);
		$arrPertanyaanFisikAnamsia = $this->Registrasi_model->get_pertanyaan_fisik_anamsia($id);
		$arrPertanyaanFisikMata = $this->Registrasi_model->get_pertanyaan_fisik_mata($id);
		$arrPertanyaanFisikPerut = $this->Registrasi_model->get_pertanyaan_fisik_perut($id);
		$arrPertanyaanFisikLeher = $this->Registrasi_model->get_pertanyaan_fisik_leher($id);
		$arrPertanyaanFisikTenggorokan = $this->Registrasi_model->get_pertanyaan_fisik_tenggorokan($id);
		$arrPertanyaanFisikMulut = $this->Registrasi_model->get_pertanyaan_fisik_mulut($id);
		$arrPertanyaanFisikTelinga = $this->Registrasi_model->get_pertanyaan_fisik_telinga($id);
		$arrPertanyaanFisikHidung = $this->Registrasi_model->get_pertanyaan_fisik_hidung($id);
		$arrPertanyaanFisikThorax = $this->Registrasi_model->get_pertanyaan_fisik_thorax($id);
		$arrPertanyaanFisikCorPulmo = $this->Registrasi_model->get_pertanyaan_fisik_corpulmo($id);
		$arrPertanyaanFisikExtrimitas = $this->Registrasi_model->get_pertanyaan_fisik_extrimitas($id);
		$arrPertanyaanFisikNeuromuscular = $this->Registrasi_model->get_pertanyaan_fisik_neuromuscular($id);
        $arrPertanyaanFisikKulit = $this->Registrasi_model->get_pertanyaan_fisik_kulit($id);
		$arrPertanyaanFisikSistemAlatGerakTangan = $this->Registrasi_model->get_pertanyaan_fisik_sistem_alat_gerak_tangan($id);
		$arrPertanyaanFisikAbdomen = $this->Registrasi_model->get_pertanyaan_fisik_abdomen($id);
		$arrPertanyaanFisikKeteranganLain = $this->Registrasi_model->get_pertanyaan_fisik_keterangan_lain($id);
		$arrPertanyaanFisikGenetalia = $this->Registrasi_model->get_pertanyaan_fisik_genetalia($id);
		$arrDataPasien = $this->Registrasi_model->get_data_pasien($id);
		$arrDataDetailPasien = $this->Registrasi_model->get_data_detail_pasien($id);
		$arrDataDetailPerusahaanPasien = $this->Registrasi_model->get_data_header_pelayanan_perusahaan_medcheck($id);
		$arrDataUsers = $this->Registrasi_model->get_users($id);
		$arrDataLab = $this->Registrasi_model->get_data_labs($id);
		$arrDataRadiologi = $this->Registrasi_model->get_data_radiologi($id);
        $arrDataResume = $this->Registrasi_model->get_data_resume($id);
        $arrDataResumes = $this->Registrasi_model->get_data_resume($id);
		$arrDataPenunjang = $this->Registrasi_model->get_data_penunjang($id);

         // Fetch selected years from GET request
         $year1 = $this->input->get('year1');
         $year2 = $this->input->get('year2');
 
           // Dynamically build the URL with query parameters
         $url = site_url('registration/detailMedicalCheckupsPerPasien/'.$id.'?year1='.$year1.'&year2='.$year2);
 
     
          // Fetch data for the selected years if available
          if ($year1 && $year2) {
             // Call the model to fetch resume data for the selected years
             $arrDataResumeYear1 = $this->Registrasi_model->get_data_resume_by_year($id, $year1);
             $arrDataResumeYear2 = $this->Registrasi_model->get_data_resume_by_year($id, $year2);
         } else {
             // If no years are selected, fetch all resume data
             $arrDataResume = $this->Registrasi_model->get_data_resume($id);
             $arrDataResumes = $this->Registrasi_model->get_data_resume($id);
             $arrDataResumeYear1 = $arrDataResumes;
             $arrDataResumeYear2 = $arrDataResumes;
         }
     
		
		$user_type = $this->session->userdata ('user_details')[0]->user_type;
        if (strtolower($user_type) == 'pasien' && $arrDataDetailPasien['id_pasien'] != $this->pasien_id) {
            redirect( base_url().'registrasi/list_data_pasien_new_per_pasien');
        } else if (strtolower($user_type) == 'perusahaan' && $arrDataDetailPerusahaanPasien['id_perusahaan'] != $this->pasien_id) {
            redirect( base_url().'registrasi/list_data_medcheck_per_perusahaan');
        }
		
        $this->load->view('include/header'); 
        $this->load->view('detailMedicalCheckupPerPasien', Array('arrPertanyaanFisikMata'=>$arrPertanyaanFisikMata,'arrPertanyaanFisikAnamsia'=>$arrPertanyaanFisikAnamsia,'arrDataPasien'=>$arrDataPasien,
														'arrPertanyaanFisikLeher'=>$arrPertanyaanFisikLeher,'arrPertanyaanFisikTenggorokan'=>$arrPertanyaanFisikTenggorokan,
														'arrPertanyaanFisikMulut'=>$arrPertanyaanFisikMulut,'arrPertanyaanFisikTelinga'=>$arrPertanyaanFisikTelinga,
														'arrPertanyaanFisikHidung'=>$arrPertanyaanFisikHidung,'arrPertanyaanFisikThorax'=>$arrPertanyaanFisikThorax,
														'arrPertanyaanFisikCorPulmo'=>$arrPertanyaanFisikCorPulmo,'arrPertanyaanFisikExtrimitas'=>$arrPertanyaanFisikExtrimitas,
														'arrPertanyaanFisikPerut'=>$arrPertanyaanFisikPerut,'arrPertanyaanFisikKulit'=>$arrPertanyaanFisikKulit,
														'arrPertanyaanFisikSistemAlatGerakTangan'=>$arrPertanyaanFisikSistemAlatGerakTangan,
														'arrPertanyaanFisikAbdomen'=>$arrPertanyaanFisikAbdomen,'arrPertanyaanFisikNeuromuscular'=>$arrPertanyaanFisikNeuromuscular,
														'arrPertanyaanFisikKeteranganLain'=>$arrPertanyaanFisikKeteranganLain,'arrPertanyaanFisikGenetalia'=>$arrPertanyaanFisikGenetalia,
														'arrDataUsers'=>$arrDataUsers,'arrDataLab'=>$arrDataLab,'arrDataRadiologi'=>$arrDataRadiologi,
														'arrDataPenunjang'=>$arrDataPenunjang,'arrDataResume' => $arrDataResume,
            'arrDataResumes' => $arrDataResumes,
            'arrDataResumeYear1' => $arrDataResumeYear1,
            'arrDataResumeYear2' => $arrDataResumeYear2,
            'year1' => $year1,
            'year2' => $year2,
            'data_year1' => $data_year1,
            'data_year2' => $data_year2,
            'url' => $url, // Pass the dynamically created URL to the view'data_bmi'=>$data_bmi,
														'data_tanggal_lahir'=>$data_tanggal_lahir,'arrDataDetailPasien'=>$arrDataDetailPasien,
														'arrDataDetailPerusahaanPasien'=>$arrDataDetailPerusahaanPasien));
        $this->load->view('include/footer');
    }
	
	public function detailDataPasien($id='') {   
        is_login();
		$arrDataPasien = $this->Registrasi_model->get_data_pasien_detail_new($id);
		$data = $this->Registrasi_model->get_data_detail_medcheck_per_pasien($id);
		$dataRawat = $this->Registrasi_model->get_data_detail_rawat_jalan_per_pasien($id);
        $this->load->view('include/header'); 
        $this->load->view('detailDataDiriPasien', Array('arrDataPasien'=>$arrDataPasien,'data'=>$data,'dataRawat'=>$dataRawat));
        $this->load->view('include/footer');
    }
	
	public function detailDataPasienPerPasien($id='') {   
        is_login();
        $user_type = $this->session->userdata ('user_details')[0]->user_type;
        if (strtolower($user_type) == 'pasien' && $id != $this->pasien_id) {
            redirect( base_url().'registrasi/list_data_pasien_new_per_pasien');
        }
		$arrDataPasien = $this->Registrasi_model->get_data_pasien_detail_new($id);
		$data = $this->Registrasi_model->get_data_detail_medcheck_per_pasien($id);
		$dataRawat = $this->Registrasi_model->get_data_detail_rawat_jalan_per_pasien($id);
        $this->load->view('include/header'); 
        $this->load->view('detailDataDiriPasienPerPasien', Array('arrDataPasien'=>$arrDataPasien,'data'=>$data,'dataRawat'=>$dataRawat));
        $this->load->view('include/footer');
    }
	
	public function detailRawatJalan($id='') {   
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
		$arrPertanyaanFisikHidung = $this->Registrasi_model->get_pertanyaan_fisik_hidung($id);
		$arrPertanyaanFisikThorax = $this->Registrasi_model->get_pertanyaan_fisik_thorax($id);
		$arrPertanyaanFisikCorPulmo = $this->Registrasi_model->get_pertanyaan_fisik_corpulmo($id);
		$arrPertanyaanFisikExtrimitas = $this->Registrasi_model->get_pertanyaan_fisik_extrimitas($id);
        $arrPertanyaanFisikKulit = $this->Registrasi_model->get_pertanyaan_fisik_kulit($id);
		$arrPertanyaanFisikSistemAlatGerakTangan = $this->Registrasi_model->get_pertanyaan_fisik_sistem_alat_gerak_tangan($id);
		$arrPertanyaanFisikAbdomen = $this->Registrasi_model->get_pertanyaan_fisik_abdomen($id);
		$arrPertanyaanFisikKeteranganLain = $this->Registrasi_model->get_pertanyaan_fisik_keterangan_lain($id);
		$arrPertanyaanFisikGenetalia = $this->Registrasi_model->get_pertanyaan_fisik_genetalia($id);
		$arrDataPasien = $this->Registrasi_model->get_data_pasien($id);
		$arrDataUsers = $this->Registrasi_model->get_users($id);
		$arrDataLab = $this->Registrasi_model->get_data_labs($id);
		$arrDataRadiologi = $this->Registrasi_model->get_data_radiologi($id);
		$arrDataResume = $this->Registrasi_model->get_data_resume($id);
		$arrDataPenunjang = $this->Registrasi_model->get_data_penunjang($id);
		$arrDataPemeriksaan = $this->Registrasi_model->get_data_pemeriksaan($id);
		$arrDataDiagnosa = $this->Registrasi_model->get_data_diagnosa($id);
		$arrDataTindakan = $this->Registrasi_model->get_data_tindakan($id);
		$arrDataObat = $this->Registrasi_model->get_data_obat($id);
        $this->load->view('include/header'); 
        $this->load->view('detailRawatJalans', Array('arrPertanyaanFisikMata'=>$arrPertanyaanFisikMata,'arrPertanyaanFisikAnamsia'=>$arrPertanyaanFisikAnamsia,'arrDataPasien'=>$arrDataPasien,
														'arrPertanyaanFisikLeher'=>$arrPertanyaanFisikLeher,'arrPertanyaanFisikTenggorokan'=>$arrPertanyaanFisikTenggorokan,
														'arrPertanyaanFisikMulut'=>$arrPertanyaanFisikMulut,'arrPertanyaanFisikTelinga'=>$arrPertanyaanFisikTelinga,
														'arrPertanyaanFisikHidung'=>$arrPertanyaanFisikHidung,'arrPertanyaanFisikThorax'=>$arrPertanyaanFisikThorax,
														'arrPertanyaanFisikCorPulmo'=>$arrPertanyaanFisikCorPulmo,'arrPertanyaanFisikExtrimitas'=>$arrPertanyaanFisikExtrimitas,'arrPertanyaanFisikKulit'=>$arrPertanyaanFisikKulit,
														'arrPertanyaanFisikSistemAlatGerakTangan'=>$arrPertanyaanFisikSistemAlatGerakTangan,'arrPertanyaanFisikAbdomen'=>$arrPertanyaanFisikAbdomen,
														'arrPertanyaanFisikKeteranganLain'=>$arrPertanyaanFisikKeteranganLain,'arrPertanyaanFisikGenetalia'=>$arrPertanyaanFisikGenetalia,
														'arrDataUsers'=>$arrDataUsers,'arrDataLab'=>$arrDataLab,'arrDataRadiologi'=>$arrDataRadiologi,
														'arrDataResume'=>$arrDataResume,'arrDataPenunjang'=>$arrDataPenunjang,'arrDataPemeriksaan'=>$arrDataPemeriksaan,
														'arrDataDiagnosa'=>$arrDataDiagnosa,'arrDataTindakan'=>$arrDataTindakan,'arrDataObat'=>$arrDataObat));
        $this->load->view('include/footer');
    }
	
	public function updateuser(){
     // POST values
     $id = $this->input->post('id');
     $field = $this->input->post('field');
     $value = $this->input->post('value');
	 $user = $this->user_id;
     // Update records
     $this->Registrasi_model->updateUserAjax($id,$field,$value, $user);

     echo 1;
     exit;
   }
	
	public function save_data_medcheck() {   
		error_log(print_r("INSERT DATA", TRUE)); 
		$post = $this->input->post();
		$id_transaksi = $post['id_transaksi'];
		
		$arrDataPasien = $this->Registrasi_model->get_data_pasien($id_transaksi);
		if ($arrDataPasien['version'] != null && $arrDataPasien['version'] != $post['version']) {
		    redirect( base_url().'registrasi/detailMedicalCheckups/'.$id_transaksi.'?message=data tidak terupdate');
		}
		$version = $post['version'] != null ? $post['version'] : 0;
		
		//print_r($id_transaksi);die;
		//$arrPertanyaanFisikAnamsia = $this->Registrasi_model->get_pertanyaan_fisik_anamsia($id_transaksi);
		$arrPertanyaanFisikAll = $this->Registrasi_model->get_pertanyaan_fisik_all($id_transaksi);
        $this->Registrasi_model->delete_auto_generate_resume($id_transaksi);
        $dokter_resume = $this->Registrasi_model->get_data_dokter_default_pemeriksaan($id_transaksi);
		
		foreach( $arrPertanyaanFisikAll AS $key => $val) {
			
			$save = array();
			
			$save['modified_date'] = date('Y-m-d H:i:s');
			$save['modified_by'] =  1;
			$save['status'] = 'Active';
			$save['id_transaksi'] = $post['id_transaksi'];
			$save['id_pertanyaan'] = $val['id'];
			$save['hasil'] = $post[$val['variable_name']];
			$save['status_periksa'] = $post[$val['variable_name'].$val['id']];
			$save['created_by'] = $this->user_id;
			$save['modified_by'] = $this->user_id;
           
			$res = $this->Registrasi_model->save_detail_medcheck($save);

//enhancement phase1 req 4.1 
            if ($post[$val['variable_name'].$val['id']] == "YA") {
               
                    $dataresume = array();
                    $dataresume['status'] = "ACTIVE";
                    $dataresume['flag_generate'] = "YES";
				    $dataresume['id_pelayanan'] = $post['id_transaksi'];
				    $dataresume['nama_dokter'] = $dokter_resume['nama_dokter_resume'];
				    $dataresume['jenis_resume'] = "KESIMPULAN";
				    $dataresume['hasil_resume'] = $val['nama_pertanyaan'].' : '.$post[$val['variable_name']];	
				    $dataresume['created_by'] = $this->user_id;
				    $data['modified_by'] = $this->user_id;

                    if ($val['kategori_pertanyaan'] == "FISIK - ANAMNESA") {
                        if ($val['nama_pertanyaan'] == "KELUHAN" || $val['nama_pertanyaan'] == "KELUHAN SAAT BEKERJA") {
                                $this->Master_model->insertRow('trx_resume', $dataresume);
                        } 
                    } else {
                        $this->Master_model->insertRow('trx_resume', $dataresume);
                    }
                    unset($dataresume);
               
            }
			unset($save);
			
		}
		 
		  $m = $_FILES['profile_pic']['name'];      
		$n = $_FILES['txt_rontgen']['name'];  
        
		if ($m !== ""){		 
				
					$filename=$_FILES['profile_pic']['name'];
					$tmpname=$_FILES['profile_pic']['tmp_name'];
					$exp=explode('.', $filename);
					$ext=end($exp);
					$newname=  $exp[0].'_'.time().".".$ext; 
					$config['upload_path'] = 'assets/rontgen/';
					$config['upload_url'] =  base_url().'assets/rontgen/';
					//$config['allowed_types'] = "gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp";
					$config['allowed_types'] = "jpg|jpeg|png";
					$config['max_size'] = '2000000'; 
					$config['file_name'] = $newname;
					$this->load->library('upload', $config);
					move_uploaded_file($tmpname,"assets/rontgen/".$newname); 
						$data[$name]=$newname;
						$profile_pic =$newname;
					
        }else {  
						if($post['fileOld'] == 'rontgen.png') {  				
							$profile_pic ='rontgen.png';
						} else {
							$profile_pic =$post['fileOld'];
						} 
            } 
		
		if ($n !== ""){		 
				
					$filename=$_FILES['txt_rontgen']['name'];
					$tmpname=$_FILES['txt_rontgen']['tmp_name'];
					$exp=explode('.', $filename);
					$ext=end($exp);
					$newname=  $exp[0].'_'.time().".".$ext; 
					$config['upload_path'] = 'assets/rontgenfile/';
					$config['upload_url'] =  base_url().'assets/rontgenfile/';
					//$config['allowed_types'] = "gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp";
					$config['allowed_types'] = "jpg|jpeg|png";
					$config['max_size'] = '2000000'; 
					$config['file_name'] = $newname;
					$this->load->library('upload', $config);
					move_uploaded_file($tmpname,"assets/rontgenfile/".$newname); 
						$data[$name]=$newname;
						$filetxt =$newname;
					
        }else {  
						if($post['fileTxt'] == 'Belum Ada File') {  				
							$filetxt ='Belum Ada File';
						} else {
							$filetxt =$post['fileTxt'];
						} 
            }
		
		$data = array(
               'dokter_pemeriksa' => $post['dokter_pemeriksa'],
               'tanggal_pemeriksaan' => date("Y-m-d", strtotime($post['tanggal_pemeriksaan'])),
               'berat_badan' => $post['berat_badan'],
               'tinggi_badan' => $post['tinggi_badan'],
               'tekanan_darah' => $post['tekanan_darah'],
               'denyut_nadi' => $post['denyut_nadi'],
               'nilai_respirasi' => $post['nilai_respirasi'],
               'suhu_badan' => $post['suhu_badan'],
               'cek_fisik' => $post['cek_fisik'],
               'isi_cek_fisik' => $post['isi_cek_fisik'],
               'cek_lab' => $post['cek_lab'],
               'isi_cek_lab' => $post['isi_cek_lab'],
               'cek_radiologi' => $post['cek_radiologi'],
               'isi_cek_radiologi' => $post['isi_cek_radiologi'],
               'cek_penunjang' => $post['cek_penunjang'],
               'isi_cek_penunjang' => $post['isi_cek_penunjang'],
			   'created_by' => $this->user_id,
			   'modified_by' => $this->user_id
            );
			
			 $data['digital_xray'] = $profile_pic;
			 $data['file_text_xray'] = $filetxt;
			 $data['version'] = $version+1;

		$this->Registrasi_model->updateRow('trx_pelayanan', 'id', $post['id_transaksi'], $data);
		
		//$res = $this->Registrasi_model->update_trx_pelayanan($post);

		
		 redirect( base_url().'registrasi/detailMedicalCheckups/'.$id_transaksi);
    }
    
    public function save_picture_medcheck() {
        $post = $this->input->post();
        $id_trans = $post['id_trans'];
        $m = $_FILES['patient_pic']['name'];
        if ($m !== "") {
			$filename=$_FILES['patient_pic']['name'];
			$tmpname=$_FILES['patient_pic']['tmp_name'];
			$exp=explode('.', $filename);
			$ext=end($exp);
			$newname=  $exp[0].'_'.time().".".$ext; 
			$config['upload_path'] = 'assets/pasien/';
			$config['upload_url'] =  base_url().'assets/pasien/';
			//$config['allowed_types'] = "gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp";
			$config['allowed_types'] = "jpg|jpeg|png";
			$config['max_size'] = '2000000'; 
			$config['file_name'] = $newname;
			$this->load->library('upload', $config);
			move_uploaded_file($tmpname,"assets/pasien/".$newname); 
				$data[$name]=$newname;
				$profile_pic =$newname;
        } else {  
			if($post['filePatientOld'] == 'pasien.png') {  				
				$profile_pic ='pasien.png';
			} else {
				$profile_pic =$post['filePatientOld'];
			} 
        }

        $data = array( 'picture' => $profile_pic);
        $saves = $this->Registrasi_model->updatebyId('master_pasien', $post['id_patient'], $data);
        
        redirect( base_url().'registrasi/detailMedicalCheckups/'.$id_trans);
    }
    
    public function save_picture_medcheck_webcam() {
        $post = $this->input->post();
        $id_trans = $post['id_trans'];
        $id_pasien = $post['id_patient'];
        $img = $post['patient_pic'];
        
        $filename = $id_pasien.$id_trans.'_'.time().".jpeg";
        $save_file_path = $_SERVER['DOCUMENT_ROOT']."/assets/pasien/";
        $save_file_path .= $filename;
        $image_file = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img));
    
        if (file_exists($save_file_path)) { unlink($save_file_path); }
        file_put_contents($save_file_path, $image_file);
        if (file_exists($save_file_path)) {
            $profile_pic = $filename;
        } else {  
			$profile_pic = $post['filePatientOld'];
		}
        
        $data = array( 'picture' => $profile_pic);
        $saves = $this->Registrasi_model->updatebyId('master_pasien', $post['id_patient'], $data);
        redirect( base_url().'registrasi/detailMedicalCheckups/'.$id_trans);
    }
	
	public function inputTransaksiBaru($id='') {   
        is_login();
        if(!isset($id) || $id == '') {
            $id = $this->session->userdata ('user_details')[0]->users_id;
        }
		$arrPerusahaan = $this->Master_model->data_perusahaan();
		$arrIdentitas = $this->Master_model->data_identitas();
		$arrKota = $this->Master_model->data_kota();
		$arrKecamatan = $this->Master_model->data_kecamatan();
		$arrKelurahan = $this->Master_model->data_kelurahan();
		$arrTipePegawai = $this->Master_model->data_tipe_pegawai();
		$arrJabatan = $this->Master_model->data_jabatan();
		$arrBagian = $this->Master_model->data_bagian();
		$arrGroup = $this->Master_model->data_group();
		$arrJenisPembayaran = $this->Master_model->data_jenis_pembayaran();
		$arrAsuransi = $this->Master_model->data_asuransi();
        $this->load->view('include/header'); 
        $this->load->view('inputTransaksiBaru', Array('arrPerusahaan'=>$arrPerusahaan,'arrIdentitas'=>$arrIdentitas,'arrKota' => $arrKota,
												   'arrKecamatan'=>$arrKecamatan,'arrKelurahan'=>$arrKelurahan,'arrTipePegawai'=>$arrTipePegawai,
												   'arrJabatan'=>$arrJabatan,'arrBagian'=>$arrBagian,'arrGroup'=>$arrGroup,
												   'arrJenisPembayaran'=>$arrJenisPembayaran,'arrAsuransi'=>$arrAsuransi));
        $this->load->view('include/footer');
    }
	
	public function inputMedcheckPerusahaan($id='') {   
        is_login();
        if(!isset($id) || $id == '') {
            $id = $this->session->userdata ('user_details')[0]->users_id;
        }
		$arrPerusahaan = $this->Master_model->data_perusahaan();
		$arrIdentitas = $this->Master_model->data_identitas();
		$arrKota = $this->Master_model->data_kota();
		$arrKecamatan = $this->Master_model->data_kecamatan();
		$arrKelurahan = $this->Master_model->data_kelurahan();
		$arrTipePegawai = $this->Master_model->data_tipe_pegawai();
		$arrJabatan = $this->Master_model->data_jabatan();
		$arrBagian = $this->Master_model->data_bagian();
		$arrGroup = $this->Master_model->data_group();
		$arrJenisPembayaran = $this->Master_model->data_jenis_pembayaran();
		$arrAsuransi = $this->Master_model->data_asuransi();
        $this->load->view('include/header'); 
        $this->load->view('inputMedcheckPerusahaan', Array('arrPerusahaan'=>$arrPerusahaan,'arrIdentitas'=>$arrIdentitas,'arrKota' => $arrKota,
												   'arrKecamatan'=>$arrKecamatan,'arrKelurahan'=>$arrKelurahan,'arrTipePegawai'=>$arrTipePegawai,
												   'arrJabatan'=>$arrJabatan,'arrBagian'=>$arrBagian,'arrGroup'=>$arrGroup,
												   'arrJenisPembayaran'=>$arrJenisPembayaran,'arrAsuransi'=>$arrAsuransi));
        $this->load->view('include/footer');
    }
	
	public function uploadDataPasienMedCheck($id='') {   
        is_login();
		
		$arrPerusahaan = $this->Registrasi_model->data_medcheck_perusahaan_per_perusahaan($id);
        $this->load->view('include/header'); 
        $this->load->view('uploadPasienMedCheck', Array('arrPerusahaan'=>$arrPerusahaan));
        $this->load->view('include/footer');
    }
    
    public function get_modal_pertanyaan_check() {
        is_login();
        $id_fisik = $this->input->post('fisik_id');
		$arrPertanyaanFisik = $this->Registrasi_model->get_pertanyaan_fisik();
        echo $this->load->view('modal_medcheck_pertanyaan',  Array('arrPertanyaanFisik'=>$arrPertanyaanFisik, 'arrPertanyaanFisikCheck'=>array(), 'id_fisik'=>$id_fisik), true);
        exit;
    }
    
    public function get_modal_pertanyaan_check_add() {
        is_login();
        $id_pelayanan = $this->input->post('id_pelayanan');
        $id_fisik = $this->input->post('fisik_id');
		$arrPertanyaanFisik = $this->Registrasi_model->get_pertanyaan_fisik();
		$arrPertanyaanFisikCheck = $this->Registrasi_model->get_pertanyaan_fisik_check($id_pelayanan);
        echo $this->load->view('modal_medcheck_pertanyaan',  Array('arrPertanyaanFisik'=>$arrPertanyaanFisik, 'arrPertanyaanFisikCheck'=>$arrPertanyaanFisikCheck, 'id_fisik'=>$id_fisik), true);
        exit;
    }
    
    public function save_pertanyaan_check_add() {
        is_login();
        $id_pelayanan = $this->input->post('id_pelayanan');
        $id_fisik = $this->input->post('fisik_id');
        $res = $this->Registrasi_model->save_pertanyaan_check_add($id_pelayanan, $id_fisik);
		echo 1;
		exit;
    }
    
    public function remove_lab_pemeriksaan() {
        is_login();
        $id = $this->input->post('id');
        $id_layanan = $this->input->post('id_layanan');
        $nama_periksa = $this->input->post('nama_periksa');
        $nama_layanan = $this->input->post('nama_layanan');
        $this->Registrasi_model->remove_lab_pemeriksaan($id, $id_layanan, $nama_periksa, $nama_layanan);
        echo 1;
		exit;
    }
	
	public function generatePemeriksaan($id='') {   


		$arrAsuransi = $this->Registrasi_model->save_db_trx_pemeriksaan($id);
		 redirect( base_url().'registrasi/detailMedicalCheckups/'.$id);
    }
	
	public function save_trx_lab_based_on_paket() {   
		$data = $this->input->post();

		 $this->Registrasi_model->save_db_trx_lab_based_on_paket($data);
		 redirect( base_url().'registrasi/detailMedicalCheckups/'.$id);
    }
	
	public function save_trx_lab_add_pemeriksaan() {   
		$data = $this->input->post();

		 $this->Registrasi_model->save_db_trx_lab_add_pemeriksaan($data);
		 redirect( base_url().'registrasi/detailMedicalCheckups/'.$id);
    }
	
	public function get_autocomplete_nama(){
        if (isset($_GET['term'])) {
            $result = $this->Registrasi_model->autocomplete_nama($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->nama_lengkap,
				'nama_lengkap' => $row->nama_lengkap,
				'alamat_lengkap' => $row->alamat_lengkap,
				'handphone' => $row->handphone,
				'jenis_pembayaran' => $row->jenis_pembayaran,
				'nama_asuransi' => $row->nama_asuransi,
				'id_pasien' => $row->id,
				'tanggal_lahir' => date("d-m-Y",strtotime($row->tanggal_lahir)),
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	public function get_autocomplete_perusahaan(){
        if (isset($_GET['term'])) {
            $result = $this->Registrasi_model->autocomplete_perusahaan($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->nama_perusahaan,
				'nama_perusahaan' => $row->nama_perusahaan,
				'id_perusahaan' => $row->id,
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	public function get_autocomplete_paket_medcheck(){
        if (isset($_GET['term'])) {
            $result = $this->Registrasi_model->autocomplete_paket_medcheck($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->nama_paket,
				'nama_paket' => $row->nama_paket,
				'harga_paket' => $row->harga_paket,
				'id_paket' => $row->id,
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	public function get_autocomplete_tambah_pemeriksaan(){
        if (isset($_GET['term'])) {
            $result = $this->Registrasi_model->autocomplete_pemeriksaan_satuan($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->nama_pemeriksaan,
				'nama_pemeriksaan' => $row->nama_pemeriksaan,
				'nama_pelayanan' => $row->nama_pelayanan,
				'harga_pemeriksaan' => $row->harga_pemeriksaan,
				'id_pemeriksaan' => $row->id,
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	public function get_autocomplete_add_model_anjuran(){
        if (isset($_GET['term'])) {
            $result = $this->Registrasi_model->autocomplete_modal_add_anjuran($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->deskripsi,
				'hasil_resume' => $row->deskripsi
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	public function get_autocomplete_add_model_diagnosa(){
        if (isset($_GET['term'])) {
            $result = $this->Registrasi_model->autocomplete_modal_add_diagnosa($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->deskripsi,
				'hasil_resume' => $row->deskripsi
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	public function get_autocomplete_add_model_usg(){
        if (isset($_GET['term'])) {
            $result = $this->Registrasi_model->autocomplete_modal_add_usg($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->deskripsi,
				'hasil_resume' => $row->deskripsi
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	public function get_autocomplete_add_model_treadmill(){
        if (isset($_GET['term'])) {
            $result = $this->Registrasi_model->autocomplete_modal_add_treadmill($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->deskripsi,
				'hasil_resume' => $row->deskripsi
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	public function get_autocomplete_add_model_pap_smear(){
        if (isset($_GET['term'])) {
            $result = $this->Registrasi_model->autocomplete_modal_add_pap_smear($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->deskripsi,
				'hasil_resume' => $row->deskripsi
				);
				
                echo json_encode($arr_result);
            }
        }
    }
    
    public function get_autocomplete_add_model_rontgen(){
        if (isset($_GET['term'])) {
            $result = $this->Registrasi_model->autocomplete_modal_add_rontgen($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->deskripsi,
				'hasil_resume' => $row->deskripsi
				);
				
                echo json_encode($arr_result);
            }
        }
    }
    
    public function get_autocomplete_add_model_iva(){
        if (isset($_GET['term'])) {
            $result = $this->Registrasi_model->autocomplete_modal_add_iva($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->deskripsi,
				'hasil_resume' => $row->deskripsi
				);
				
                echo json_encode($arr_result);
            }
        }
    }
    
    public function get_autocomplete_add_model_alcohol(){
        if (isset($_GET['term'])) {
            $result = $this->Registrasi_model->autocomplete_modal_add_alcohol($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->deskripsi,
				'hasil_resume' => $row->deskripsi
				);
				
                echo json_encode($arr_result);
            }
        }
    }
    
        public function get_autocomplete_add_model_romberg(){
        if (isset($_GET['term'])) {
            $result = $this->Registrasi_model->autocomplete_modal_add_romberg($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->deskripsi,
				'hasil_resume' => $row->deskripsi
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	public function get_autocomplete_add_model_kesimpulan(){
        if (isset($_GET['term'])) {
            $result = $this->Registrasi_model->autocomplete_modal_add_kesimpulan($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->deskripsi,
				'hasil_resume' => $row->deskripsi
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	public function get_autocomplete_get_nama_dokter(){
        if (isset($_GET['term'])) {
            $result = $this->Registrasi_model->autocomplete_get_dokter($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->nama_dokter,
				'nama_dokter' => $row->nama_dokter
				);
				
                echo json_encode($arr_result);
            }
        }
    }
	
	public function get_autocomplete_get_nama_dokter_pemeriksa(){
        if (isset($_GET['term'])) {
            $result = $this->Registrasi_model->autocomplete_get_dokter($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
				'label' => $row->nama_dokter,
				'dokter_pemeriksa' => $row->nama_dokter
				);
				
                echo json_encode($arr_result);
            }
        }
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
	
	public function get_modal_radiologi() {
        is_login();
		$idPasien = $this->input->post('id');
		$data = $this->Registrasi_model->get_data_dokter_default_pemeriksaan($idPasien);		
        echo $this->load->view('add_radiologi_cor', Array('idPasien'=>$idPasien,'data'=>$data), true);
        exit;
    }
	
	public function get_modal_radiologi_pulmo() {
        is_login();
		$idPasien = $this->input->post('id');
		$data = $this->Registrasi_model->get_data_dokter_default_pemeriksaan($idPasien);		
        echo $this->load->view('add_radiologi_pulmo', Array('idPasien'=>$idPasien,'data'=>$data), true);
        exit;
    }
	
	public function get_modal_radiologi_diafragma() {
        is_login();
		$idPasien = $this->input->post('id');
		$data = $this->Registrasi_model->get_data_dokter_default_pemeriksaan($idPasien);		
        echo $this->load->view('add_radiologi_diafragma', Array('idPasien'=>$idPasien,'data'=>$data), true);
        exit;
    }
	
	public function get_modal_radiologi_kesan() {
        is_login();
		$idPasien = $this->input->post('id');
		$data = $this->Registrasi_model->get_data_dokter_default_pemeriksaan($idPasien);		
        echo $this->load->view('add_radiologi_kesan', Array('idPasien'=>$idPasien,'data'=>$data), true);
        exit;
    }
	
	public function get_modal_transaksi_paket_medcheck() {
        is_login();
		$idPasien = $this->input->post('id');
        echo $this->load->view('add_transaksi_paket_medcheck', Array('idPasien'=>$idPasien), true);
        exit;
    }
	
	public function get_modal_transaksi_tambah_pemeriksaan() {
        is_login();
		$idPasien = $this->input->post('id');
        echo $this->load->view('add_transaksi_tambah_pemeriksaan', Array('idPasien'=>$idPasien), true);
        exit;
    }
	
	public function get_modal_pemeriksaan_rawat_jalan() {
        is_login();
		$idPasien = $this->input->post('id');
        echo $this->load->view('add_pemeriksaan_rawat_jalan', Array('idPasien'=>$idPasien), true);
        exit;
    }
	
	public function get_modal_diagnosa() {
        is_login();
		$idPasien = $this->input->post('id');
        echo $this->load->view('add_diagnosa', Array('idPasien'=>$idPasien), true);
        exit;
    }
	
	public function get_modal_tindakan() {
        is_login();
		$idPasien = $this->input->post('id');
        echo $this->load->view('add_tindakan', Array('idPasien'=>$idPasien), true);
        exit;
    }
	
	public function get_modal_resume() {
        is_login();
		$idPasien = $this->input->post('id');
        echo $this->load->view('add_resume', Array('idPasien'=>$idPasien), true);
        exit;
    }

    public function get_modal_compare() {
        is_login();
		$idPasien = $this->input->post('id');
        $year1 = $this->input->get('year1');
        $year2 = $this->input->get('year2');
        $data = array(
            'idPasien' => $idPasien,
            'year1' => $year1,
            'year2' => $year2
        );
        echo $this->load->view('modal_compare', $data, true);
        exit;
    }

    public function get_modal_compare_pasien() {
        is_login();
		$idPasien = $this->input->post('id');
        $year1 = $this->input->get('year1');
        $year2 = $this->input->get('year2');
        $data = array(
            'idPasien' => $idPasien,
            'year1' => $year1,
            'year2' => $year2
        );
        echo $this->load->view('modal_compare_pasien', $data, true);
        exit;
    }
	
   

	public function get_modal_add_anjuran() {
        is_login();
		$idPasien = $this->input->post('id');
		$data = $this->Registrasi_model->get_data_dokter_default_pemeriksaan($idPasien);		
        echo $this->load->view('modal_add_anjuran', Array('idPasien'=>$idPasien,'data'=>$data), true);
        exit;
    }
	
	public function get_modal_add_diagnosa() {
        is_login();
		$idPasien = $this->input->post('id');
		$data = $this->Registrasi_model->get_data_dokter_default_pemeriksaan($idPasien);	
        echo $this->load->view('modal_add_diagnosa', Array('idPasien'=>$idPasien,'data'=>$data), true);
        exit;
    }
	
	public function get_modal_add_usg() {
        is_login();
		$idPasien = $this->input->post('id');
		$data = $this->Registrasi_model->get_data_dokter_default_pemeriksaan($idPasien);	
        echo $this->load->view('modal_add_usg', Array('idPasien'=>$idPasien,'data'=>$data), true);
        exit;
    }
	
	public function get_modal_add_treadmill() {
        is_login();
		$idPasien = $this->input->post('id');
		$data = $this->Registrasi_model->get_data_dokter_default_pemeriksaan($idPasien);	
        echo $this->load->view('modal_add_treadmill', Array('idPasien'=>$idPasien,'data'=>$data), true);
        exit;
    }
	
	public function get_modal_add_pap_smear() {
        is_login();
		$idPasien = $this->input->post('id');
		$data = $this->Registrasi_model->get_data_dokter_default_pemeriksaan($idPasien);	
        echo $this->load->view('modal_add_pap_smear', Array('idPasien'=>$idPasien,'data'=>$data), true);
        exit;
    }
	
	public function get_modal_add_fitness() {
        is_login();
		$idPasien = $this->input->post('id');
		$userid = $this->user_id;
		$data = $this->Registrasi_model->get_data_dokter_default_pemeriksaan($idPasien);	
        echo $this->load->view('modal_add_fitness', Array('idPasien'=>$idPasien,'data'=>$data,'userid'=>$userid), true);
        exit;
    }
    
    public function get_modal_add_rontgen() {
        is_login();
		$idPasien = $this->input->post('id');
		$data = $this->Registrasi_model->get_data_dokter_default_pemeriksaan($idPasien);	
        echo $this->load->view('modal_add_rontgen', Array('idPasien'=>$idPasien,'data'=>$data), true);
        exit;
    }
    
    public function get_modal_add_iva() {
        is_login();
		$idPasien = $this->input->post('id');
		$data = $this->Registrasi_model->get_data_dokter_default_pemeriksaan($idPasien);	
        echo $this->load->view('modal_add_iva', Array('idPasien'=>$idPasien,'data'=>$data), true);
        exit;
    }
    
    public function get_modal_add_alcohol() {
        is_login();
		$idPasien = $this->input->post('id');
		$data = $this->Registrasi_model->get_data_dokter_default_pemeriksaan($idPasien);	
        echo $this->load->view('modal_add_alcohol', Array('idPasien'=>$idPasien,'data'=>$data), true);
        exit;
    }
    
        public function get_modal_add_romberg() {
        is_login();
		$idPasien = $this->input->post('id');
		$data = $this->Registrasi_model->get_data_dokter_default_pemeriksaan($idPasien);	
        echo $this->load->view('modal_add_romberg', Array('idPasien'=>$idPasien,'data'=>$data), true);
        exit;
    }
	
	public function get_modal_add_kesimpulan() {
        is_login();
		$idPasien = $this->input->post('id');
		$data = $this->Registrasi_model->get_data_dokter_default_pemeriksaan($idPasien);	
        echo $this->load->view('modal_add_kesimpulan', Array('idPasien'=>$idPasien,'data'=>$data), true);
        exit;
    }
	
	public function get_modal_add_kategori() {
        is_login();
		$idPasien = $this->input->post('id');
		$data = $this->Registrasi_model->get_data_dokter_default_pemeriksaan($idPasien);	
        echo $this->load->view('modal_add_kategori', Array('idPasien'=>$idPasien,'data'=>$data), true);
        exit;
    }
    
    public function get_modal_add_kategori_khusus() {
        is_login();
		$idPasien = $this->input->post('id');
		$data = $this->Registrasi_model->get_data_dokter_default_pemeriksaan($idPasien);	
        echo $this->load->view('modal_add_kategori_khusus', Array('idPasien'=>$idPasien,'data'=>$data), true);
        exit;
    }
	
	public function get_modal_penunjang() {
        is_login();
		$idPasien = $this->input->post('id');
		$data = $this->Registrasi_model->get_data_dokter_default_pemeriksaan($idPasien);
        echo $this->load->view('add_penunjang', Array('idPasien'=>$idPasien,'data'=>$data,'data'=>$data), true);
        exit;
    }
	
	public function get_modal_penunjang_audiometri() {
        is_login();
		$idPasien = $this->input->post('id');
		$data = $this->Registrasi_model->get_data_dokter_default_pemeriksaan($idPasien);
        echo $this->load->view('add_penunjang_audiometri', Array('idPasien'=>$idPasien,'data'=>$data,'data'=>$data), true);
        exit;
    }
	
	public function get_modal_penunjang_spirometri() {
        is_login();
		$idPasien = $this->input->post('id');
		$data = $this->Registrasi_model->get_data_dokter_default_pemeriksaan($idPasien);
        echo $this->load->view('add_penunjang_spirometri', Array('idPasien'=>$idPasien,'data'=>$data,'data'=>$data), true);
        exit;
    }
	
	public function save_trx_radiologi() {   
				$data['status'] = "ACTIVE";
				$idPelayanan = $this->input->post('id_pelayanan');
				$data['id_pelayanan'] = $idPelayanan;
				$data['status_pemeriksaan'] = $this->input->post('status_pemeriksaan');
				$data['nama_pemeriksaan'] = $this->input->post('nama_pemeriksaan');
				$data['hasil_pemeriksaan'] = $this->input->post('hasil_pemeriksaan');
				$data['catatan'] = $this->input->post('catatan');
				$data['nama_dokter'] = $this->input->post('nama_dokter');
				$data['created_by'] = $this->user_id;
				$data['modified_by'] = $this->user_id;
				
                $this->Master_model->insertRow('trx_radiologi', $data);
                 redirect( base_url().'registrasi/detailMedicalCheckups/'.$idPelayanan);
    }
	
	public function save_trx_pemeriksaan_rawat_jalan() {   
				$data['status'] = "ACTIVE";
				$idPelayanan = $this->input->post('id_pelayanan');
				$data['id_pelayanan'] = $idPelayanan;
				$data['nama_dokter'] = $this->input->post('dokter_pemeriksa');
				$data['jenis_pemeriksaan'] = $this->input->post('jenis_pemeriksaan');
				$data['hasil_pemeriksaan'] = $this->input->post('hasil_pemeriksaan');
                $this->Master_model->insertRow('trx_pemeriksaan', $data);
                 redirect( base_url().'registrasi/detailRawatJalan/'.$idPelayanan);
    }
	
	public function save_trx_diagnosa() {   
				$data['status'] = "ACTIVE";
				$idPelayanan = $this->input->post('id_pelayanan');
				$data['id_pelayanan'] = $idPelayanan;
				$data['nama_dokter'] = $this->input->post('dokter_pemeriksa');
				$data['jenis_diagnosa'] = $this->input->post('jenis_diagnosa');
				$data['hasil_diagnosa'] = $this->input->post('hasil_diagnosa');
                $this->Master_model->insertRow('trx_diagnosa', $data);
                 redirect( base_url().'registrasi/detailRawatJalan/'.$idPelayanan);
    }
	
	public function save_trx_tindakan() {   
				$data['status'] = "ACTIVE";
				$idPelayanan = $this->input->post('id_pelayanan');
				$data['id_pelayanan'] = $idPelayanan;
				$data['nama_dokter'] = $this->input->post('dokter_pemeriksa');
				$data['jenis_tindakan'] = $this->input->post('jenis_tindakan');
				$data['hasil_tindakan'] = $this->input->post('hasil_tindakan');
                $this->Master_model->insertRow('trx_tindakan', $data);
                 redirect( base_url().'registrasi/detailRawatJalan/'.$idPelayanan);
    }
	
	public function save_trx_resume() {   
				$data['status'] = "ACTIVE";
				$idPelayanan = $this->input->post('id_pelayanan');
				$data['id_pelayanan'] = $idPelayanan;
				$data['nama_dokter'] = $this->input->post('dokter_pemeriksa');
				$data['jenis_resume'] = $this->input->post('jenis_resume');
				$data['hasil_resume'] = $this->input->post('hasil_resume');			
                $this->Master_model->insertRow('trx_resume', $data);
                 redirect( base_url().'registrasi/detailMedicalCheckups/'.$idPelayanan);
    }

    public function save_compare_resume() {  
        $data['status'] = "ACTIVE";
		$idPelayanan = $this->input->post('id_pelayanan'); 
        $year1 = $this->input->post('year1');
        $year2 = $this->input->post('year2');
        $data['year1'] = $this->input->post('year1');
        $data['year2'] = $this->input->post('year2');
     
         redirect( base_url().'registrasi/detailMedicalCheckups/'.$idPelayanan.'?year1='.$year1.'&year2='.$year2);
}

public function get_years() {
    // Example data (in a real application, this data would likely come from a database)
    $years = [
        ["year" => "2020"],
        ["year" => "2021"],
        ["year" => "2022"],
        ["year" => "2023"],
        ["year" => "2024"],
        ["year" => "2025"],
        ["year" => "2026"],
        ["year" => "2027"],
        ["year" => "2028"],
        ["year" => "2029"],
        ["year" => "2030"],
        ["year" => "2031"]
    ];

    // Return the data as a JSON response
    echo json_encode($years);
}




	
	public function save_trx_resume_anjuran() {   
				$data['status'] = "ACTIVE";
				$idPelayanan = $this->input->post('id_pelayanan');
				$data['id_pelayanan'] = $idPelayanan;
				$data['nama_dokter'] = $this->input->post('nama_dokter');
				$data['jenis_resume'] = $this->input->post('jenis_resume');
				$data['hasil_resume'] = $this->input->post('hasil_resume');	
				$data['created_by'] = $this->user_id;
				$data['modified_by'] = $this->user_id;				
                $this->Master_model->insertRow('trx_resume', $data);
                 redirect( base_url().'registrasi/detailMedicalCheckups/'.$idPelayanan);
    }
	
	public function save_trx_penunjang() {
		
		foreach($_FILES as $name => $fileInfo)
        { 
             if(!empty($_FILES[$name]['name'])){
				
				$filename=$_FILES[$name]['name'];
				$tmpname=$_FILES[$name]['tmp_name'];
					$exp=explode('.', $filename);
					$ext=end($exp);
					$newname=  $exp[0].'_'.time().".".$ext; 
					$config['upload_path'] = 'assets/penunjang/';
					$config['upload_url'] =  base_url().'assets/penunjang/';
					//$config['allowed_types'] = "gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp";
					$config['allowed_types'] = "jpg|jpeg|png|pdf";
					$config['max_size'] = '2000000'; 
					$config['file_name'] = $newname;
					$this->load->library('upload', $config);
					move_uploaded_file($tmpname,"assets/penunjang/".$newname); 
								
               
                $profile_pic =$newname;
             } else {  
                
                    $profile_pic ='penunjang.png';
                
            } 
        }

		
			
				$data['status'] = "ACTIVE";
				$idPelayanan = $this->input->post('id_pelayanan');
				$data['id_pelayanan'] = $idPelayanan;
				$data['nama_dokter'] = $this->input->post('nama_dokter');
				$data['jenis_pemeriksaan'] = $this->input->post('jenis_pemeriksaan');
				$data['hasil_pemeriksaan'] = $this->input->post('hasil_pemeriksaan');			
				$data['gambar_pemeriksaan'] = $profile_pic;			
				$data['created_by'] = $this->user_id;			
				$data['modified_by'] = $this->user_id;			
                $this->Master_model->insertRow('trx_penunjang', $data);
                 redirect( base_url().'registrasi/detailMedicalCheckups/'.$idPelayanan);
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
            $config['upload_path'] = 'assets/rontgen/';
            $config['upload_url'] =  base_url().'assets/rontgen/';
            //$config['allowed_types'] = "gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp";
            $config['allowed_types'] = "jpg|jpeg|png";
            $config['max_size'] = '2000000'; 
            $config['file_name'] = $newname;
            $this->load->library('upload', $config);
            move_uploaded_file($tmpname,"assets/rontgen/".$newname);
            return $newname;
        }
    }
	
	function upload_txt() {
        foreach($_FILES as $name => $fileInfo)
        {
            $filename=$_FILES[$name]['name'];
            $tmpname=$_FILES[$name]['tmp_name'];
            $exp=explode('.', $filename);
            $ext=end($exp);
            $newname=  $exp[0].'_'.time().".".$ext; 
            $config['upload_path'] = 'assets/rontgenfile/';
            $config['upload_url'] =  base_url().'assets/rontgenfile/';
            $config['allowed_types'] = "txt";
            $config['max_size'] = '2000000'; 
            $config['file_name'] = $newname;
            $this->load->library('upload', $config);
            move_uploaded_file($tmpname,"assets/rontgenfile/".$newname);
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
    
    
    public function remove_rontgen_image() {
        is_login();
        $img = $this->input->post('image');
        if (!empty($img) && $img != 'rontgen.png') {
            $path_to_file = $_SERVER['DOCUMENT_ROOT']."/assets/rontgen/".$img;
            unlink($path_to_file);
        }
        echo 1;
        exit;
    }
    
    public function remove_penunjang_image() {
        is_login();
        $img = $this->input->post('image');
        if (!empty($img) && $img != 'penunjang.png') {
            $path_to_file = $_SERVER['DOCUMENT_ROOT']."/assets/penunjang/".$img;
            unlink($path_to_file);
        }
        echo 1;
        exit;
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
	
	public function submitUploadDataPasienMedCheck(){
  
				$post = $this->input->post();
                 
                $path = APPPATH . "uploads/";
                require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
				
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('data_upload')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                    $flag = true;
                    $i=0;
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                      $inserdata[$i]['created_date'] = date('Y-m-d H:i:s');
                      $inserdata[$i]['created_by'] = 1;
					  $inserdata[$i]['modified_date'] = date('Y-m-d H:i:s');
                      $inserdata[$i]['modified_by'] = 1;
                      $inserdata[$i]['status'] = 'Active';
                      $inserdata[$i]['id_pasien'] = null;
                      $inserdata[$i]['nik'] = $value['A'];
                      $inserdata[$i]['nama_lengkap'] = $value['B'];
                      $inserdata[$i]['tanggal_lahir'] = $value['C'];
                      $inserdata[$i]['jenis_kelamin'] = $value['D'];
                      $inserdata[$i]['bagian'] = $value['F'];
                      $inserdata[$i]['grup'] = $value['G'];
                      $inserdata[$i]['email'] = $value['J'];
                      $inserdata[$i]['nama_paket'] = $value['H'];
                      $inserdata[$i]['nama_perusahaan'] = $post['nama_pt'];
                      $inserdata[$i]['jenis_pelayanan'] = $post['jenis_pelayanan'];
                      $inserdata[$i]['id_medcheck_perusahaan'] = $post['id_medcheck_perusahaan'];
                      $inserdata[$i]['id_pertanyaan'] = $post['pertanyaan_fisik'];
                      $i++;
                    }               
                    $result = $this->Registrasi_model->importData($inserdata);   
                    if($result){
                      echo "Imported successfully";
                    }else{
                      echo "ERROR !";
                    }             
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                }
				
				redirect( base_url().'registrasi/list_data_pelayanan_perusahaan_by_search', 'refresh');
                 
                 
        
      
    }
	
	public function delete_data_transaksi_radiologi($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $id_pelayanan = $this->Registrasi_model->get_all_data_radiologi($id); 
            $this->Registrasi_model->do_delete_data_transaksi_radiologi($id); 
        }
       redirect( base_url().'registrasi/detailMedicalCheckups/'.$id_pelayanan['id_pelayanan'], 'refresh');
    }
	
	public function delete_data_transaksi_penunjang($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
            $id_pelayanan = $this->Registrasi_model->get_all_data_penunjang($id); 
            $this->Registrasi_model->do_delete_data_transaksi_penunjang($id); 
        }
       redirect( base_url().'registrasi/detailMedicalCheckups/'.$id_pelayanan['id_pelayanan'], 'refresh');
    }
	
	public function delete_data_transaksi_resume($id){
        is_login(); 
        $ids = explode('-', $id);
        $userid = $this->user_id;
        foreach ($ids as $id) {
            $id_pelayanan = $this->Registrasi_model->get_all_data_resume($id); 
            $this->Registrasi_model->do_delete_data_transaksi_resume_with_id($id, $userid); 
        }
       redirect( base_url().'registrasi/detailMedicalCheckups/'.$id_pelayanan['id_pelayanan'], 'refresh');
    }
	
	public function generate_nomer_antrian_medcheck($id){
        is_login(); 
        $ids = explode('-', $id);
        foreach ($ids as $id) {
			 $id_pelayanan = $this->Registrasi_model->get_data_pasien($id); 
             $this->Registrasi_model->gen_no_antrian_medcheck($id); 
            
        }
       redirect( base_url().'registrasi/list_data_detail_pelayanan_perusahaan/'.$id_pelayanan['id_medcheck_perusahaan'], 'refresh');
    }
	
	public function get_modal_setting_dokter() {
        is_login();
		 if($this->input->post('id')){
           $data = $this->Registrasi_model->get_data_dokter_pemeriksaan($this->input->post('id'));
           //$data = $this->input->post();
           echo $this->load->view('add_setting_dokter',  Array('data'=>$data), true);
        } else {
            echo $this->load->view('add_setting_dokter', '', true);
        }
        exit;
    }
	
	public function update_setting_dokter_perusahaan() {   
				if($this->input->post('id')) {
				$id = $this->input->post('id');
				}
				if($id != '') {	
				$data['nama_dokter_penanggung_jawab'] = $this->input->post('nama_dokter_penanggung_jawab');
				$data['nama_dokter_ekg'] = $this->input->post('nama_dokter_ekg');
				$data['nama_dokter_rontgen'] = $this->input->post('nama_dokter_rontgen');
				$data['nama_dokter_audiometri'] = $this->input->post('nama_dokter_audiometri');
				$data['nama_dokter_spirometri'] = $this->input->post('nama_dokter_spirometri');
				$data['nama_dokter_penunjang'] = $this->input->post('nama_dokter_penunjang');
				$data['nama_dokter_resume'] = $this->input->post('nama_dokter_resume');
				$data['no_invoice'] = $this->input->post('no_invoice');
                 $this->Master_model->updateRow('trx_medcheck_perusahaan', 'id', $id, $data);
                redirect( base_url().'registrasi/list_data_pelayanan_perusahaan_by_search', 'refresh');
				}
    }


}