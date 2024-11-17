<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class Excel_export extends CI_Controller {
	  
	  function __construct() {
        parent::__construct(); 
		$this->load->model('Excel_export_model');
		 $this->load->library("excel");
    }

    function index(){

      $this->load->model("excel_export_model");

      $data["employee_data"] = $this->excel_export_model->fetch_data();

      $this->load->view("excel_export_view", $data);

    }

    function action(){

      $this->load->model("excel_export_model");

      $this->load->library("excel");

      $object = new PHPExcel();

      $object->setActiveSheetIndex(0);

      $table_columns = array("Nama Depan", "Nama Lengkap", "Nama Perusahaan", "Jenis Kelamin", "Tempat Lahir", "Tanggal Lahir", 
        "Jenis Identitas", "No Identitas", "Alamat Lengkap", "RT", "RW", "Kota", "Kecamatan", "kelurahan", "Kode Pos", "Telepon", "Handphone", "Email", "Tipe Pegawai");

      $column = 0;

      foreach($table_columns as $field){

        $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

        $column++;

      }

      $employee_data = $this->excel_export_model->fetch_data();

      $excel_row = 2;

      foreach($employee_data as $row ){


        $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->nama_depan);

        $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->nama_lengkap);

        $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->nama_pt);

        $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->jenis_kelamin);

        $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->tempat_lahir);

        $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->tanggal_lahir);

        $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->jenis_identitas);

        $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->no_identitas);

        $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->alamat_lengkap);   

        $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->rt);        

        $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->rw);

        $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->kota);

        $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->kecamatan);

        $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->kelurahan);        
        
        $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->kode_pos);        
        
        $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->telepon);        
        
        $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->handphone);     

        $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->email);

        $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->tipe_pegawai);        

        $excel_row++;
      }



      $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

      header('Content-Type: application/vnd.ms-excel');

      header('Content-Disposition: attachment;filename="Data Pasien.xls"');

      $object_writer->save('php://output');

    }
	
	
	function report_excel_per_pasien_medcheck(){

      $this->load->model("excel_export_model");
      $this->load->library("excel");
      $object = new PHPExcel();
      $object->setActiveSheetIndex(0);
      $table_columns = array("Nama Lengkap", "NIK", "Jenis Kelamin","Bagian","Grup", "Berat Badan", "Tinggi Badan", "Tekanan Darah", 
        "Denyut Nadi", "Anamsia","Mata");
      $column = 0;
      foreach($table_columns as $field){
        $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
        $column++;
      }
      $employee_data = $this->excel_export_model->data_report_detail();
      $excel_row = 2;
      foreach($employee_data as $row ){
        $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->nama_lengkap);
        $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->no_identitas);
        $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->jenis_kelamin);
        $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->bagian);
		$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->grup);
        $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->berat_badan);
        $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->tinggi_badan);
        $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->tekanan_darah);
        $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->denyut_nadi);
        $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->anamsia); 
        $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->mata); 	
        $excel_row++;
      }
      $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="DataReportDetail.xls"');
      $object_writer->save('php://output');
    }
	
	
	public function generate_report_excel($id){
      
				$this->Excel_export_model->delete_report_before($id);
				$data = $this->Excel_export_model->get_data_pasien_new($id);
				$data_bmi = $this->Excel_export_model->get_data_bmi($id);
				$umur = $this->Excel_export_model->get_data_lahir_pasien($id);
				$data_anamnesia = $this->Excel_export_model->get_data_detail_anamnesa($id);
				$data_mata= $this->Excel_export_model->get_data_detail_mata($id);
				$data_hidung= $this->Excel_export_model->get_data_detail_hidung($id);			
				$data_mulut= $this->Excel_export_model->get_data_detail_mulut($id);	
				$data_tenggorokan= $this->Excel_export_model->get_data_detail_tenggorokan($id);	
				$data_leher= $this->Excel_export_model->get_data_detail_leher($id);	
				$data_telinga= $this->Excel_export_model->get_data_detail_telinga($id);	
				$data_perut= $this->Excel_export_model->get_data_detail_perut($id);	
				$data_thorax= $this->Excel_export_model->get_data_detail_thorax($id);	
				$data_abdomen= $this->Excel_export_model->get_data_detail_abdomen($id);	
				$data_extremitas= $this->Excel_export_model->get_data_detail_exremitas($id);
				$data_genetalia= $this->Excel_export_model->get_data_detail_genetalia($id);
				$data_neuromuscular= $this->Excel_export_model->get_data_detail_neuromuscular($id);
				$data_kulit= $this->Excel_export_model->get_data_detail_kulit($id);	
				$data_keterangan_lain= $this->Excel_export_model->get_data_detail_keterangan_lain($id);	
				$data_buta_warna= $this->Excel_export_model->get_data_detail_buta_warna($id);	
				$data_visus_mata_od= $this->Excel_export_model->get_data_detail_visus_mata_od($id);	
				$data_visus_mata_os= $this->Excel_export_model->get_data_detail_visus_mata_os($id);	
				$data_hematologi= $this->Excel_export_model->get_data_detail_hematologi($id);	
				$data_diff_count= $this->Excel_export_model->get_data_detail_diff_count($id);	
				$data_urinalisa= $this->Excel_export_model->get_data_detail_urinalisa($id);	
				$data_sedimen_urine= $this->Excel_export_model->get_data_detail_sedimen_urine($id);	
				$data_kimia_darah= $this->Excel_export_model->get_data_detail_kimia_darah($id);	
				$data_logam= $this->Excel_export_model->get_data_detail_logam($id);
				$data_hexanedione= $this->Excel_export_model->get_data_detail_hexanedione($id);
				$data_benzena= $this->Excel_export_model->get_data_detail_benzena($id);
				$data_toluena= $this->Excel_export_model->get_data_detail_toluena($id);
				$data_xilene= $this->Excel_export_model->get_data_detail_xilene($id);
				$data_codarah= $this->Excel_export_model->get_data_detail_codarah($id);
				$data_golongan_darah= $this->Excel_export_model->get_data_detail_golongan_darah($id);
				$data_penanda_tumor= $this->Excel_export_model->get_data_detail_penanda_tumor($id);
				$data_penanda_tumor= $this->Excel_export_model->get_data_detail_penanda_tumor($id);
				$data_feses= $this->Excel_export_model->get_data_detail_feses($id);
				$data_btx= $this->Excel_export_model->get_data_detail_btx($id);
				$data_kultur_feses= $this->Excel_export_model->get_data_detail_kultur_feses($id);
				$data_radiologi= $this->Excel_export_model->get_data_detail_radiologi($id);	
				$data_audiometri= $this->Excel_export_model->get_data_detail_audiometri($id);	
				$data_spirometri= $this->Excel_export_model->get_data_detail_spirometri($id);	
				$data_ekg= $this->Excel_export_model->get_data_detail_ekg($id);	
				$data_ilo= $this->Excel_export_model->get_data_detail_ilo($id);
				$data_iva= $this->Excel_export_model->get_data_detail_iva($id);	
				$data_kesimpulan= $this->Excel_export_model->get_data_detail_kesimpulan($id);	
				$data_anjuran= $this->Excel_export_model->get_data_detail_anjuran($id);	
				$data_diagnosa= $this->Excel_export_model->get_data_detail_diagnosa($id);	
				
				
				$data_max = max($data,$data_anamnesia,$data_mata,$data_hidung,$data_mulut,$data_tenggorokan,$data_leher,$data_telinga,$data_perut,$data_thorax,$data_abdomen,$data_extremitas,$data_neuromuscular,$data_kulit,
								$data_keterangan_lain,$data_buta_warna,$data_visus_mata_od,$data_visus_mata_os,$data_hematologi,$data_diff_count,$data_urinalisa,
								$data_sedimen_urine,$data_kimia_darah,$data_logam,$data_hexanedione,$data_benzena,$data_toluena,$data_xilene,
								$data_codarah,$data_penanda_tumor,$data_feses,$data_radiologi,$data_audiometri,$data_spirometri,$data_ekg,$data_ilo,$data_iva,$data_kesimpulan,$data_anjuran,
								$data_diagnosa,$data_btx,$data_kultur_feses);
				$id_transaksi = $data[0]['id'];
				$x = 0;
				while($x < count($data_max)) {								
				$save = array();
				$save['created_date'] = date('Y-m-d H:i:s');
				$save['created_by'] =  1;
				$save['modified_date'] = date('Y-m-d H:i:s');
				$save['modified_by'] =  1;
				$save['status'] = 'Active';
				$save['id_transaksi_perusahaan'] = null;
				$save['id_transaksi'] = $id_transaksi;
				$save['nama_lengkap'] = $data[$x]['nama_lengkap'];
				$save['no_identitas'] = $data[$x]['no_identitas'];
				$save['jenis_kelamin'] = $data[$x]['jenis_kelamin'];
				$save['umur'] = $umur[$x]['jumlah_hari_lahir'];
				$save['bagian'] = $data[$x]['bagian'];
				$save['grup'] = $data[$x]['grup'];
				$save['berat_badan'] = $data[$x]['berat_badan'];
				$save['tinggi_badan'] = $data[$x]['tinggi_badan'];
				$save['tekanan_darah'] = $data[$x]['tekanan_darah'];
				$save['tekanan_nadi'] = $data[$x]['denyut_nadi'];
				$save['suhu_tubuh'] = $data[$x]['suhu_badan'];
				$save['nilai_bmi'] = $data_bmi[$x]['nilai_bmi'];
				$save['kategori_bmi'] = $data_bmi[$x]['kategori_bmi'];
				$save['anamnesis'] = $data_anamnesia[$x]['anamsia'];				
				$save['mata'] = $data_mata[$x]['mata'];				
				$save['hidung'] = $data_hidung[$x]['hidung'];				
				$save['mulut'] = $data_mulut[$x]['mulut'];				
				$save['tenggorokan'] = $data_tenggorokan[$x]['tenggorokan'];				
				$save['leher'] = $data_leher[$x]['leher'];				
				$save['telinga'] = $data_telinga[$x]['telinga'];	
				$save['perut'] = $data_perut[$x]['perut'];
				$save['thorax'] = $data_thorax[$x]['thorax'];				
				$save['abdomen'] = $data_abdomen[$x]['abdomen'];				
				$save['extremitas'] = $data_extremitas[$x]['extremitas'];
				$save['genetalia'] = $data_genetalia[$x]['genetalia'];
				$save['neuromuscular'] = $data_neuromuscular[$x]['neuromuscular'];
				$save['kulit'] = $data_kulit[$x]['kulit'];				
				$save['keterangan_lain'] = $data_keterangan_lain[$x]['keterangan_lain'];				
				$save['buta_warna'] = $data_buta_warna[$x]['buta_warna'];				
				$save['visus_mata_od'] = $data_visus_mata_od[$x]['visus_mata_od'];				
				$save['visus_mata_os'] = $data_visus_mata_os[$x]['visus_mata_os'];				
				$save['hematologi'] = $data_hematologi[$x]['hasil'];				
				$save['diff_count'] = $data_diff_count[$x]['hasil'];				
				$save['urinalisa'] = $data_urinalisa[$x]['hasil'];				
				$save['sedimen_urine'] = $data_sedimen_urine[$x]['hasil'];				
				$save['kimia_darah'] = $data_kimia_darah[$x]['hasil'];	
				$save['logam'] = $data_logam[$x]['hasil'];	
				$save['hexanedione'] = $data_hexanedione[$x]['hasil'];
				$save['benzena'] = $data_benzena[$x]['hasil'];
				$save['toluena'] = $data_toluena[$x]['hasil'];
				$save['xilene'] = $data_xilene[$x]['hasil'];
				$save['codarah'] = $data_codarah[$x]['hasil'];
				$save['penanda_tumor'] = $data_penanda_tumor[$x]['hasil'];
				$save['feses'] = $data_feses[$x]['hasil'];
				$save['btx'] = $data_btx[$x]['hasil'];
				$save['kultur_feses'] = $data_kultur_feses[$x]['hasil'];
				$save['golongan_darah'] = $data_golongan_darah[$x]['hasil'];		
				$save['rontgen'] = $data_radiologi[$x]['hasil'];				
				$save['audiometri'] = $data_audiometri[$x]['hasil'];				
				$save['spirometri'] = $data_spirometri[$x]['hasil'];				
				$save['ekg'] = $data_ekg[$x]['hasil'];
				$save['ilo'] = $data_ilo[$x]['hasil'];
				$save['iva'] = $data_iva[$x]['hasil'];				
				$save['paket'] = $data[$x]['nama_paket'];			
				$save['kesimpulan'] = $data_kesimpulan[$x]['hasil'];			
				$save['anjuran'] = $data_anjuran[$x]['hasil'];			
				$save['diagnosa'] = $data_diagnosa[$x]['hasil'];			
                //$this->Excel_export_model->insertRow('report_excel', $save);				
				$this->Excel_export_model->insert_report_excel($save);
				$x++;
				}
				
				 $this->load->model("excel_export_model");
  				 $this->load->library("excel");
  				 $object = new PHPExcel();
  				 $object->setActiveSheetIndex(0);
  				 $table_columns = array("Nama Lengkap", "NIK", "Jenis Kelamin","Umur","Bagian","Grup", "Berat Badan", "Tinggi Badan", "Tekanan Darah", 
											"Denyut Nadi", "Suhu Tubuh","Anamsia","Mata","Hidung","Tenggorokan","Leher","Telinga","Lingkar Perut","Thorax","Abdomen",
												"Extremitas","Neuromuscular","Kulit","Genitalia","Keterangan Lain","Buta Warna","Visus Mata OD","Visus Mata OS","Hematologi","Diff Count",
													"Urinalisa","Sedimen Urine","Kimia Darah","Logam","2,5-Hexanedione","Benzena","Toluena","Xilene",
													"codarah","Golongan Darah","Penanda Tumor","Feses","BTX (Benzene, Toluene, Xylene)","Kultur Feses",
													"Rontgen","Audiometri","Spirometri","EKG","Rontgen ILO","IVA Test","Paket",
													"Kesimpulan","Anjuran","Diagnosa","Kategori");
				$column = 0;
      foreach($table_columns as $field){
        $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
        $column++;
      }
      $employee_data = $this->excel_export_model->data_report_detail($id);
      $excel_row = 2;
      foreach($employee_data as $row ){
        $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->nama_lengkap);
        $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->nik);
        $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->jenis_kelamin);
        $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->umur);
        $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->bagian);
		$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->grup);
        $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->berat_badan);
        $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->tinggi_badan);
        $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->tekanan_darah);
        $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->tekanan_nadi);
        $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->suhu_tubuh); 
        $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->anamnesis); 
        $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->mata); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->hidung); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->tenggorokan); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->leher); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->telinga); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->perut);	
        $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->thorax); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row->abdomen); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(20, $excel_row, $row->extremitas); 
		$object->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, $row->neuromuscular); 
		$object->getActiveSheet()->setCellValueByColumnAndRow(22, $excel_row, $row->kulit);	
		$object->getActiveSheet()->setCellValueByColumnAndRow(23, $excel_row, $row->genetalia);	
        $object->getActiveSheet()->setCellValueByColumnAndRow(24, $excel_row, $row->keterangan_lain); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(25, $excel_row, $row->buta_warna); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(26, $excel_row, $row->visus_mata_od); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(27, $excel_row, $row->visus_mata_os); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(28, $excel_row, $row->hematologi); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(29, $excel_row, $row->diff_count); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(30, $excel_row, $row->urinalisa); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(31, $excel_row, $row->sedimen_urine); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(32, $excel_row, $row->kimia_darah); 	
		$object->getActiveSheet()->setCellValueByColumnAndRow(33, $excel_row, $row->logam); 
		$object->getActiveSheet()->setCellValueByColumnAndRow(34, $excel_row, $row->hexanedione);
		$object->getActiveSheet()->setCellValueByColumnAndRow(35, $excel_row, $row->benzena);
		$object->getActiveSheet()->setCellValueByColumnAndRow(36, $excel_row, $row->toluena);
		$object->getActiveSheet()->setCellValueByColumnAndRow(37, $excel_row, $row->xilene);
		$object->getActiveSheet()->setCellValueByColumnAndRow(38, $excel_row, $row->codarah); 
		$object->getActiveSheet()->setCellValueByColumnAndRow(39, $excel_row, $row->golongan_darah);
		$object->getActiveSheet()->setCellValueByColumnAndRow(40, $excel_row, $row->penanda_tumor);
		$object->getActiveSheet()->setCellValueByColumnAndRow(41, $excel_row, $row->feses);
		$object->getActiveSheet()->setCellValueByColumnAndRow(42, $excel_row, $row->btx);
		$object->getActiveSheet()->setCellValueByColumnAndRow(43, $excel_row, $row->kultur_feses);
        $object->getActiveSheet()->setCellValueByColumnAndRow(44, $excel_row, $row->rontgen); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(45, $excel_row, $row->audiometri); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(46, $excel_row, $row->spirometri); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(47, $excel_row, $row->ekg); 
        $object->getActiveSheet()->setCellValueByColumnAndRow(48, $excel_row, $row->ilo);
		$object->getActiveSheet()->setCellValueByColumnAndRow(49, $excel_row, $row->iva);	
        $object->getActiveSheet()->setCellValueByColumnAndRow(50, $excel_row, $row->paket); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(51, $excel_row, $row->kesimpulan); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(52, $excel_row, $row->anjuran); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(53, $excel_row, $row->diagnosa); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(54, $excel_row, $row->kategori);	
        $excel_row++;
      }
      $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="DataReportDetail.xls"');
      $object_writer->save('php://output');
		
                  
      
    }
	
	public function generate_report_excel_perusahaanv1($id_perusahaan){
				
				$data_perusahaan = $this->Excel_export_model->get_data_pasien_per_perusahaan($id_perusahaan);
				$this->Excel_export_model->delete_report_before_perusahaan($id_perusahaan);
				$y = 0;
				while($y < count($data_perusahaan)) {	
				$id = $data_perusahaan[$y]['id'];
				
				$data = $this->Excel_export_model->get_data_pasien_new($id);
				$data_detail_perusahaan = $this->Excel_export_model->get_data_tanggal_mulai_medcheck($id);
				$data_bmi = $this->Excel_export_model->get_data_bmi($id);
				$umur = $this->Excel_export_model->get_data_lahir_pasien($id);
				$data_anamnesia = $this->Excel_export_model->get_data_detail_anamnesa($id);
				$data_mata= $this->Excel_export_model->get_data_detail_mata($id);
				$data_hidung= $this->Excel_export_model->get_data_detail_hidung($id);			
				$data_mulut= $this->Excel_export_model->get_data_detail_mulut($id);	
				$data_tenggorokan= $this->Excel_export_model->get_data_detail_tenggorokan($id);	
				$data_leher= $this->Excel_export_model->get_data_detail_leher($id);	
				$data_telinga= $this->Excel_export_model->get_data_detail_telinga($id);	
				$data_perut= $this->Excel_export_model->get_data_detail_perut($id);
				$data_thorax= $this->Excel_export_model->get_data_detail_thorax($id);	
				$data_abdomen= $this->Excel_export_model->get_data_detail_abdomen($id);	
				$data_extremitas= $this->Excel_export_model->get_data_detail_exremitas($id);
				$data_genetalia= $this->Excel_export_model->get_data_detail_genetalia($id);
				$data_neuromuscular= $this->Excel_export_model->get_data_detail_neuromuscular($id);
				$data_kulit= $this->Excel_export_model->get_data_detail_kulit($id);
				$data_keterangan_lain= $this->Excel_export_model->get_data_detail_keterangan_lain($id);	
				$data_buta_warna= $this->Excel_export_model->get_data_detail_buta_warna($id);	
				$data_visus_mata_od= $this->Excel_export_model->get_data_detail_visus_mata_od($id);	
				$data_visus_mata_os= $this->Excel_export_model->get_data_detail_visus_mata_os($id);	
				$data_hematologi= $this->Excel_export_model->get_data_detail_hematologi($id);	
				$data_diff_count= $this->Excel_export_model->get_data_detail_diff_count($id);	
				$data_urinalisa= $this->Excel_export_model->get_data_detail_urinalisa($id);	
				$data_sedimen_urine= $this->Excel_export_model->get_data_detail_sedimen_urine($id);	
				$data_kimia_darah= $this->Excel_export_model->get_data_detail_kimia_darah($id);	
				$data_logam= $this->Excel_export_model->get_data_detail_logam($id);	
				$data_hexanedione= $this->Excel_export_model->get_data_detail_hexanedione($id);	
				$data_benzena= $this->Excel_export_model->get_data_detail_benzena($id);	
				$data_toluena= $this->Excel_export_model->get_data_detail_toluena($id);	
				$data_xilene= $this->Excel_export_model->get_data_detail_xilene($id);
				$data_codarah= $this->Excel_export_model->get_data_detail_codarah($id);
				$data_penanda_tumor= $this->Excel_export_model->get_data_detail_penanda_tumor($id);	
				$data_feses= $this->Excel_export_model->get_data_detail_feses($id);
				$data_btx= $this->Excel_export_model->get_data_detail_btx($id);
			    $data_kultur_feses= $this->Excel_export_model->get_data_detail_kultur_feses($id);
				$data_golongan_darah= $this->Excel_export_model->get_data_detail_golongan_darah($id);	
				$data_radiologi= $this->Excel_export_model->get_data_detail_radiologi($id);	
				$data_drug_test= $this->Excel_export_model->get_data_detail_drug_test($id);	
				$data_imunologi= $this->Excel_export_model->get_data_detail_imunologi($id);	
				$data_imunoserologi= $this->Excel_export_model->get_data_detail_imunoserologi($id);
				$data_kehamilan= $this->Excel_export_model->get_data_detail_kehamilan($id);	
				$data_rectal= $this->Excel_export_model->get_data_detail_rectal($id);	
				$data_widal= $this->Excel_export_model->get_data_detail_widal($id);	
				$data_usg_mammae= $this->Excel_export_model->get_data_detail_usg_mammae($id);
				$data_usg_abdomen= $this->Excel_export_model->get_data_detail_usg_abdomen($id);
				$data_treadmill= $this->Excel_export_model->get_data_detail_treadmill($id);	
				$data_pap_smear= $this->Excel_export_model->get_data_detail_pap_smear($id);	
				$data_fitness= $this->Excel_export_model->get_data_detail_fitness($id);	
				$data_audiometri= $this->Excel_export_model->get_data_detail_audiometri($id);	
				$data_spirometri= $this->Excel_export_model->get_data_detail_spirometri($id);	
				$data_ekg= $this->Excel_export_model->get_data_detail_ekg($id);	
				$data_ilo= $this->Excel_export_model->get_data_detail_ilo($id);
				$data_iva= $this->Excel_export_model->get_data_detail_iva($id);	
				$data_alcohol_breath= $this->Excel_export_model->get_data_detail_alcohol_breath($id);
				$data_romberg= $this->Excel_export_model->get_data_detail_romberg($id);
				$data_kesimpulan= $this->Excel_export_model->get_data_detail_kesimpulan($id);	
				$data_anjuran= $this->Excel_export_model->get_data_detail_anjuran($id);	
				$data_diagnosa= $this->Excel_export_model->get_data_detail_diagnosa($id);	
				$data_kategori= $this->Excel_export_model->get_data_detail_kategori($id);	
				
				
				$data_max = max($data,$data_anamnesia,$data_mata,$data_hidung,$data_mulut,$data_tenggorokan,$data_leher,$data_telinga,$data_perut,
								$data_thorax,$data_abdomen,$data_extremitas,$data_genetalia,$data_neuromuscular,$data_kulit,$data_keterangan_lain,$data_buta_warna,$data_visus_mata_od,
								$data_visus_mata_os,$data_hematologi,$data_diff_count,$data_urinalisa,$data_sedimen_urine,$data_kimia_darah,$data_logam,$data_hexanedione,$data_benzena,$data_toluena,$data_xilene,
								$data_codarah,$data_golongan_darah,
								$data_radiologi,$data_drug_test,$data_imunologi,$data_imunoserologi,$data_kehamilan,$data_rectal,$data_widal,$data_usg_mammae,$data_usg_abdomen,$data_treadmill,$data_penanda_tumor,$data_feses,
								$data_pap_smear,$data_fitness,$data_audiometri,$data_spirometri,$data_ekg,$data_ilo,$data_iva,$data_alcohol_breath,$data_romberg,$data_kesimpulan,$data_anjuran,
								$data_diagnosa,$data_kategori,$data_btx,$data_kultur_feses);
				$id_transaksi = $data[0]['id'];
				$x = 0;
				while($x < count($data_max)) {								
				$save = array();
				$save['created_date'] = date('Y-m-d H:i:s');
				$save['created_by'] =  1;
				$save['modified_date'] = date('Y-m-d H:i:s');
				$save['modified_by'] =  1;
				$save['status'] = 'Active';
				$save['id_transaksi_perusahaan'] = $id_perusahaan;
				$save['id_transaksi'] = $id_transaksi;
				$save['no_medcheck'] = $data[$x]['no_medcheck'];
				$save['nama_lengkap'] = $data[$x]['nama_lengkap'];
				$save['tanggal_mulai'] = $data[$x]['tanggal_pemeriksaan'];
				$save['no_identitas'] = $data[$x]['no_identitas'];
				$save['jenis_kelamin'] = $data[$x]['jenis_kelamin'];
				$save['umur'] = $umur[$x]['jumlah_hari_lahir'];
				$save['bagian'] = $data[$x]['bagian'];
				$save['grup'] = $data[$x]['grup'];
				$save['berat_badan'] = $data[$x]['berat_badan'];
				$save['tinggi_badan'] = $data[$x]['tinggi_badan'];
				$save['tekanan_darah'] = $data[$x]['tekanan_darah'];
				$save['tekanan_nadi'] = $data[$x]['denyut_nadi'];
				$save['suhu_tubuh'] = $data[$x]['suhu_badan'];
				$save['nilai_bmi'] = $data_bmi[$x]['nilai_bmi'];
				$save['kategori_bmi'] = $data_bmi[$x]['kategori_bmi'];
				$save['anamnesis'] = $data_anamnesia[$x]['anamsia'];				
				$save['mata'] = $data_mata[$x]['mata'];				
				$save['hidung'] = $data_hidung[$x]['hidung'];				
				$save['mulut'] = $data_mulut[$x]['mulut'];				
				$save['tenggorokan'] = $data_tenggorokan[$x]['tenggorokan'];				
				$save['leher'] = $data_leher[$x]['leher'];				
				$save['telinga'] = $data_telinga[$x]['telinga'];
				$save['perut'] = $data_perut[$x]['perut'];
				$save['thorax'] = $data_thorax[$x]['thorax'];				
				$save['abdomen'] = $data_abdomen[$x]['abdomen'];				
				$save['extremitas'] = $data_extremitas[$x]['extremitas'];
				$save['genetalia'] = $data_genetalia[$x]['genetalia'];
				$save['neuromuscular'] = $data_neuromuscular[$x]['neuromuscular'];
				$save['kulit'] = $data_kulit[$x]['kulit'];				
				$save['keterangan_lain'] = $data_keterangan_lain[$x]['keterangan_lain'];				
				$save['buta_warna'] = $data_buta_warna[$x]['buta_warna'];				
				$save['visus_mata_od'] = $data_visus_mata_od[$x]['visus_mata_od'];				
				$save['visus_mata_os'] = $data_visus_mata_os[$x]['visus_mata_os'];				
				$save['hematologi'] = $data_hematologi[$x]['hasil'];				
				$save['hematologi_std'] = $data_hematologi[$x]['nilai_text'];				
				$save['diff_count'] = $data_diff_count[$x]['hasil'];				
				$save['diff_count_std'] = $data_diff_count[$x]['nilai_text'];				
				$save['urinalisa'] = $data_urinalisa[$x]['hasil'];				
				$save['urinalisa_std'] = $data_urinalisa[$x]['nilai_text'];				
				$save['sedimen_urine'] = $data_sedimen_urine[$x]['hasil'];				
				$save['sedimen_urine_std'] = $data_sedimen_urine[$x]['nilai_text'];				
				$save['kimia_darah'] = $data_kimia_darah[$x]['hasil'];				
				$save['kimia_darah_std'] = $data_kimia_darah[$x]['nilai_text'];	
				$save['logam'] = $data_logam[$x]['hasil'];				
				$save['logam_std'] = $data_logam[$x]['nilai_text'];
				$save['hexanedione'] = $data_hexanedione[$x]['hasil'];				
				$save['hexanedione_std'] = $data_hexanedione[$x]['nilai_text'];	
				$save['benzena'] = $data_benzena[$x]['hasil'];				
				$save['benzena_std'] = $data_benzena[$x]['nilai_text'];	
				$save['toluena'] = $data_toluena[$x]['hasil'];				
				$save['toluena_std'] = $data_toluena[$x]['nilai_text'];	
				$save['xilene'] = $data_xilene[$x]['hasil'];				
				$save['xilene_std'] = $data_xilene[$x]['nilai_text'];
				$save['codarah'] = $data_codarah[$x]['hasil'];				
				$save['codarah_std'] = $data_codarah[$x]['nilai_text'];	
				$save['golongan_darah'] = $data_golongan_darah[$x]['hasil'];
				$save['penanda_tumor'] = $data_penanda_tumor[$x]['hasil'];				
				$save['penanda_tumor_std'] = $data_penanda_tumor[$x]['nilai_text'];		
				$save['feses'] = $data_feses[$x]['hasil'];				
				$save['feses_std'] = $data_feses[$x]['nilai_text'];	
				$save['btx'] = $data_btx[$x]['hasil'];				
				$save['btx_std'] = $data_btx[$x]['nilai_text'];		
				$save['kultur_feses'] = $data_kultur_feses[$x]['hasil'];				
				$save['kultur_feses_std'] = $data_kultur_feses[$x]['nilai_text'];				
				$save['rontgen'] = $data_radiologi[$x]['hasil'];				
				$save['drug_test'] = $data_drug_test[$x]['hasil'];				
				$save['drug_test_std'] = $data_drug_test[$x]['nilai_text'];				
				$save['imunologi'] = $data_imunologi[$x]['hasil'];				
				$save['imunologi_std'] = $data_imunologi[$x]['nilai_text'];	
				$save['imunoserologi'] = $data_imunoserologi[$x]['hasil'];				
				$save['imunoserologi_std'] = $data_imunoserologi[$x]['nilai_text'];			
				$save['kehamilan'] = $data_kehamilan[$x]['hasil'];				
				$save['kehamilan_std'] = $data_kehamilan[$x]['nilai_text'];				
				$save['rectal'] = $data_rectal[$x]['hasil'];				
				$save['rectal_std'] = $data_rectal[$x]['nilai_text'];				
				$save['widal'] = $data_widal[$x]['hasil'];				
				$save['widal_std'] = $data_widal[$x]['nilai_text'];				
				$save['audiometri'] = $data_audiometri[$x]['hasil'];				
				$save['spirometri'] = $data_spirometri[$x]['hasil'];				
				$save['ekg'] = $data_ekg[$x]['hasil'];	
				$save['ilo'] = $data_ilo[$x]['hasil'];
				$save['iva'] = $data_iva[$x]['hasil'];		
				$save['alcohol_breath'] = $data_alcohol_breath[$x]['hasil'];
				$save['romberg'] = $data_romberg[$x]['hasil'];
				$save['usg_mammae'] = $data_usg_mammae[$x]['hasil'];
				$save['usg_abdomen'] = $data_usg_abdomen[$x]['hasil'];			
				$save['treadmill'] = $data_treadmill[$x]['hasil'];				
				$save['pap_smear'] = $data_pap_smear[$x]['hasil'];				
				$save['fitness'] = $data_fitness[$x]['hasil'];				
				$save['paket'] = $data[$x]['nama_paket'];			
				$save['kesimpulan'] = $data_kesimpulan[$x]['hasil'];			
				$save['anjuran'] = $data_anjuran[$x]['hasil'];			
				$save['diagnosa'] = $data_diagnosa[$x]['hasil'];			
				$save['kategori'] = $data_kategori[$x]['hasil'];			
                //$this->Excel_export_model->insertRow('report_excel', $save);				
				$this->Excel_export_model->insert_report_excel($save);
				$x++;
				}
				
				$y++;
				}
				
				
				
				 $this->load->model("excel_export_model");
  				 $this->load->library("excel");
  				 $object = new PHPExcel();
  				 $object->setActiveSheetIndex(0);
  				 $table_columns = array("No MCU", "Tanggal","Nama Lengkap", "NIK", "JK","Umur","Bagian","Grup", "BB (Kg)", "TB (Cm)", "TD (mmHg)", 
										"Nadi", "Suhu","Perhitungan BMI","Kategori BMI","Anamnesis","Mata","Hidung","Mulut","Tenggorokan","Leher","Telinga","Lingkar Perut","Thorax","Abdomen",
										"Extremitas","Neuromuscular","Kulit","Genitalia","Keterangan Lain","Buta Warna","Visus Mata OD","Visus Mata OS","Hematologi","Nilai Normal Hematologi",
										"Diff Count","Nilai Normal Diff Count","Urinalisa","Nilai Normal Urinalisa","Sedimen Urine",
										"Nilai Normal Sedimen Urine","Kimia Darah","Nilai Normal Kimia Darah","Logam","Nilai Normal Logam","2,5-Hexanedione","Nilai Normal 2,5-Hexanedione","Benzena","Nilai Normal Benzena","Toluena",
										"Nilai Normal Toluena","Xilene","Nilai Normal Xilene",
										"CO Darah","Nilai Normal CO Darah","Golongan Darah","Penanda Tumor","Nilai Normal Penanda Tumor",
										"Feses","Nilai Normal Feses","BTX (Benzene, Toluene, Xylene)","Nilai Normal BTX (Benzene, Toluene, Xylene)","Kultur Feses","Nilai Normal Kultur Feses","Rontgen","Drug Test","Nilai Normal Drug Test","Imunologi / Serologi","Nilai Normal Imunologi / Serologi","Imunoserologi","Nilai Normal Imunoserologi",
										"Tes Kehamilan", "Nilai Normal Tes Kehamilan","Rectal Swab","Nilai Normal Rectal Swab","Widal Test","Nilai Normal Widal Test","USG Mammae","USG Abdomen", "Tread Mill", 
										"Pap Smear", "Fitness Test","Audiometri","Spirometri","EKG","Rontgen ILO","IVA Test","Alcohol Breath Test","Romberg Test","Paket","Kesimpulan","Anjuran","Diagnosa","Kategori");
				$column = 0;
      foreach($table_columns as $field){
        $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
        $column++;
      }
      $employee_data = $this->excel_export_model->data_report_detail_perusahaan($id_perusahaan);
      $excel_row = 2;
      foreach($employee_data as $row ){
        $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->no_medcheck);
        $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->tanggal_pemeriksaan);
        $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->nama_lengkap);
        $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->NIK);
        $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->jenis_kelamin);
        $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->umur);
        $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->bagian);
		$object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->grup);
        $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->berat_badan);
        $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->tinggi_badan);
        $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->tekanan_darah);
        $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->tekanan_nadi);
        $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->suhu_tubuh); 
        $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->nilai_bmi); 
        $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, $row->kategori_bmi); 
        $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, $row->anamnesis); 
        $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->mata); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(17, $excel_row, $row->hidung); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(18, $excel_row, $row->mulut); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(19, $excel_row, $row->tenggorokan); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(20, $excel_row, $row->leher); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(21, $excel_row, $row->telinga); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(22, $excel_row, $row->perut);
        $object->getActiveSheet()->setCellValueByColumnAndRow(23, $excel_row, $row->thorax); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(24, $excel_row, $row->abdomen); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(25, $excel_row, $row->extremitas);
        $object->getActiveSheet()->setCellValueByColumnAndRow(26, $excel_row, $row->neuromuscular);
        $object->getActiveSheet()->setCellValueByColumnAndRow(27, $excel_row, $row->kulit);
        $object->getActiveSheet()->setCellValueByColumnAndRow(28, $excel_row, $row->genetalia);
        $object->getActiveSheet()->setCellValueByColumnAndRow(29, $excel_row, $row->keterangan_lain); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(30, $excel_row, $row->buta_warna); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(31, $excel_row, $row->visus_mata_od); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(32, $excel_row, $row->visus_mata_os); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(33, $excel_row, $row->hematologi); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(34, $excel_row, $row->hematologi_std); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(35, $excel_row, $row->diff_count); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(36, $excel_row, $row->diff_count_std); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(37, $excel_row, $row->urinalisa); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(38, $excel_row, $row->urinalisa_std); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(39, $excel_row, $row->sedimen_urine); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(40, $excel_row, $row->sedimen_urine_std); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(41, $excel_row, $row->kimia_darah); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(42, $excel_row, $row->kimia_darah_std); 	
		$object->getActiveSheet()->setCellValueByColumnAndRow(43, $excel_row, $row->logam); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(44, $excel_row, $row->logam_std); 
        $object->getActiveSheet()->setCellValueByColumnAndRow(45, $excel_row, $row->hexanedione); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(46, $excel_row, $row->hexanedione_std); 
		$object->getActiveSheet()->setCellValueByColumnAndRow(47, $excel_row, $row->benzena); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(48, $excel_row, $row->benzena_std); 
		$object->getActiveSheet()->setCellValueByColumnAndRow(49, $excel_row, $row->toluena); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(50, $excel_row, $row->toluena_std); 
		$object->getActiveSheet()->setCellValueByColumnAndRow(51, $excel_row, $row->xilene); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(52, $excel_row, $row->xilene_std); 
        $object->getActiveSheet()->setCellValueByColumnAndRow(53, $excel_row, $row->codarah); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(54, $excel_row, $row->codarah_std); 
		$object->getActiveSheet()->setCellValueByColumnAndRow(55, $excel_row, $row->golongan_darah); 	
		$object->getActiveSheet()->setCellValueByColumnAndRow(56, $excel_row, $row->penanda_tumor); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(57, $excel_row, $row->penanda_tumor_std); 
		$object->getActiveSheet()->setCellValueByColumnAndRow(58, $excel_row, $row->feses); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(59, $excel_row, $row->feses_std);
		$object->getActiveSheet()->setCellValueByColumnAndRow(60, $excel_row, $row->btx); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(61, $excel_row, $row->btx_std);
		$object->getActiveSheet()->setCellValueByColumnAndRow(62, $excel_row, $row->kultur_feses); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(63, $excel_row, $row->kultur_feses_std);
        $object->getActiveSheet()->setCellValueByColumnAndRow(64, $excel_row, $row->rontgen); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(65, $excel_row, $row->drug_test); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(66, $excel_row, $row->drug_test_std); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(67, $excel_row, $row->imunologi); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(68, $excel_row, $row->imunologi_std); 
		$object->getActiveSheet()->setCellValueByColumnAndRow(69, $excel_row, $row->imunoserologi); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(70, $excel_row, $row->imunoserologi_std); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(71, $excel_row, $row->kehamilan); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(72, $excel_row, $row->kehamilan_std); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(73, $excel_row, $row->rectal_swab); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(74, $excel_row, $row->rectal_swab_std); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(75, $excel_row, $row->widal); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(76, $excel_row, $row->widal_std); 
        $object->getActiveSheet()->setCellValueByColumnAndRow(77, $excel_row, $row->usg_mammae); 
        $object->getActiveSheet()->setCellValueByColumnAndRow(78, $excel_row, $row->usg_abdomen); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(79, $excel_row, $row->treadmill); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(80, $excel_row, $row->pap_smear); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(81, $excel_row, $row->fitness_test); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(82, $excel_row, $row->audiometri); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(83, $excel_row, $row->spirometri); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(84, $excel_row, $row->ekg);
        $object->getActiveSheet()->setCellValueByColumnAndRow(85, $excel_row, $row->ilo);
		$object->getActiveSheet()->setCellValueByColumnAndRow(86, $excel_row, $row->iva); 	
		$object->getActiveSheet()->setCellValueByColumnAndRow(87, $excel_row, $row->alcohol_breath);
		$object->getActiveSheet()->setCellValueByColumnAndRow(88, $excel_row, $row->romberg);
        $object->getActiveSheet()->setCellValueByColumnAndRow(89, $excel_row, $row->paket); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(90, $excel_row, $row->kesimpulan); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(91, $excel_row, $row->anjuran); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(92, $excel_row, $row->diagnosa); 	
        $object->getActiveSheet()->setCellValueByColumnAndRow(93, $excel_row, $row->kategori);
        $excel_row++;
      }
      $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="DataReportDetail.xls"');
      $object_writer->save('php://output');
    }
    
    public function generate_report_excel_perusahaan($id_perusahaan){
		$data_perusahaan = $this->Excel_export_model->get_data_pasien_per_perusahaan($id_perusahaan);
				
		$this->load->library("excel");
		$object = new PHPExcel();
  		$object->setActiveSheetIndex(0);
		$sheet = $object->getActiveSheet();
				
        $arr_id = array();
        foreach ($data_perusahaan as $val) {
            $arr_id[] = $val['id'];
        }
        
        if (count($arr_id) > 0) {
            $separatedId = implode(',', $arr_id);
            $header_name = array();
            
            // pasien
            $header_name['mcu'] = array(1, "No MCU");
            $header_name['tanggal'] = array(1, "Tanggal");
            $header_name['nama'] = array(1, "Nama Lengkap");
            $header_name['nik'] = array(1, "NIK");
            $header_name['jk'] = array(1, "JK");
            $header_name['umur'] = array(1, "Umur");
            $header_name['bagian'] = array(1, "Bagian");
            $header_name['grup'] = array(1, "Grup");
            $header_name['bb'] = array(1, "BB (Kg)");
            $header_name['tb'] = array(1, "TB (Cm)");
            $header_name['td'] = array(1, "TD (mmHg)");
            $header_name['nadi'] = array(1, "Nadi");
            $header_name['suhu'] = array(1, "Suhu");
            $header_name['nilai_bmi'] = array(1, "Perhitungan BMI");
            $header_name['kategori_bmi'] = array(1, "Kategori BMI");
            $header_name['paket'] = array(1, "Paket");
            
            // fisik
            $questPhysic = $this->Excel_export_model->quest_physic_all($separatedId);
            foreach ($questPhysic as $val) {
                $header_name['psc'.$val['id']] = array(2, $val['kategori_pertanyaan'], $val['nama_pertanyaan']);
            }
            
            // laboratorium
            $questLab = $this->Excel_export_model->quest_labs_all($separatedId);
            foreach ($questLab as $val) {
                $header_name['lab'.$val['initial_name']] = array(3, $val['nama_pelayanan'], $val['nama_pemeriksaan']);
            }
            
            // radiologi
            $questRadiologi = $this->Excel_export_model->quest_radiologi_all($separatedId);
            foreach ($questRadiologi as $val) {
                $header_name['rdg'.$val['initial_name']] = array(4, 'Radiologi', $val['nama_pemeriksaan']);
            }
            
            // penunjang
            $questPenunjang = $this->Excel_export_model->quest_penunjang_all($separatedId);
            foreach ($questPenunjang as $val) {
                $header_name['pjg'.$val['initial_name']] = array(5, 'Penunjang', $val['jenis_pemeriksaan']);
            }
            
            // kesimpulan
            $questKesimpulan = $this->Excel_export_model->quest_kesimpulan_all($separatedId);
            foreach ($questKesimpulan as $val) {
                $header_name['rsm'.$val['initial_name']] = array(6, 'Resume', $val['jenis_resume']);
            }
            
            $quest_cat = '';
            $quest_cat_col = array('physic' => array(), 'lab' => array(), 'radiologi' => array(), 'penunjang' => array(), 'resume' => array());
            $quest_idx_psc = -1;
            $quest_idx_lab = -1;
            $quest_idx_rdg = -1;
            $quest_idx_pjg = -1;
            $quest_idx_rsm = -1;
            $arr_col = array();
    		$column = 0;
            foreach($header_name as $key => $val) {
                if ($val[0] == 1) {
                    $sheet->getStyleByColumnAndRow($column, 1)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                    $sheet->setCellValueByColumnAndRow($column, 1, $val[1]);
                    $sheet->mergeCellsByColumnAndRow($column, 1, $column, 3);
                } else if ($val[0] == 2) {
                    if ($quest_cat != $val[1]) {
                        $quest_idx_psc++; // +1 index category
                        $quest_cat = $val[1]; // category name
                        $quest_cat_col['physic'][$quest_idx_psc] = array($column, $column, str_replace('FISIK - ', '', $val[1]), 1); // set column range
                    } else {
                        $quest_cat_col['physic'][$quest_idx_psc][1] = $column; // set column range
                    }
                    
                    if ($val[1] == 'FISIK - HIDUNG' || $val[1] == 'FISIK - PERUT' || $val[1] == 'FISIK - SISTEM ALAT GERAK TANGAN') {
                        $quest_cat_col['physic'][$quest_idx_psc][2] = $val[2]; // set column name
                        $quest_cat_col['physic'][$quest_idx_psc][3] = 0; // set column status
                    }
                    $sheet->getStyleByColumnAndRow($column, 3)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                    $sheet->setCellValueByColumnAndRow($column, 3, $val[2]);
                } else if ($val[0] == 3) {
                    if ($quest_cat != $val[1]) {
                        $quest_idx_lab++; // +1 index category
                        $quest_cat = $val[1]; // category name
                        $quest_cat_col['lab'][$quest_idx_lab] = array($column, $column, $val[1], 1); // set column range
                    } else {
                        $quest_cat_col['lab'][$quest_idx_lab][1] = $column; // set column range
                    }
                    $sheet->getStyleByColumnAndRow($column, 3)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                    $sheet->setCellValueByColumnAndRow($column, 3, $val[2]);
                } else if ($val[0] == 4) {
                    if ($quest_cat != $val[1]) {
                        $quest_idx_rdg++; // +1 index category
                        $quest_cat = $val[1]; // category name
                        $quest_cat_col['radiologi'][$quest_idx_rdg] = array($column, $column, $val[1], 1); // set column range
                    } else {
                        $quest_cat_col['radiologi'][$quest_idx_rdg][1] = $column; // set column range
                    }
                    $sheet->getStyleByColumnAndRow($column, 3)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                    $sheet->setCellValueByColumnAndRow($column, 3, $val[2]);
                } else if ($val[0] == 5) {
                    if ($quest_cat != $val[1]) {
                        $quest_idx_pjg++; // +1 index category
                        $quest_cat = $val[1]; // category name
                        $quest_cat_col['penunjang'][$quest_idx_pjg] = array($column, $column, $val[1], 1); // set column range
                    } else {
                        $quest_cat_col['penunjang'][$quest_idx_pjg][1] = $column; // set column range
                    }
                    $sheet->getStyleByColumnAndRow($column, 3)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                    $sheet->setCellValueByColumnAndRow($column, 3, $val[2]);
                } else if ($val[0] == 6) {
                    if ($quest_cat != $val[1]) {
                        $quest_idx_rsm++; // +1 index category
                        $quest_cat = $val[1]; // category name
                        $quest_cat_col['resume'][$quest_idx_rsm] = array($column, $column, $val[1], 1); // set column range
                    } else {
                        $quest_cat_col['resume'][$quest_idx_rsm][1] = $column; // set column range
                    }
                    $sheet->getStyleByColumnAndRow($column, 3)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                    $sheet->setCellValueByColumnAndRow($column, 3, $val[2]);
                }
                $arr_col[$column] = $key;
                $column++;
                
                if ($val[0] == 3) {
                    $quest_cat_col['lab'][$quest_idx_lab][1] = $column;
                    $sheet->getStyleByColumnAndRow($column, 3)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                    $sheet->setCellValueByColumnAndRow($column, 3, 'NILAI NORMAL '.$val[2]);
                    $arr_col[$column] = 'n'.$key;
                    $column++;
                }
            }
            
            foreach($quest_cat_col['physic'] as $key => $val) {
                if ($key == 0) {
                    $sheet->getStyleByColumnAndRow($val[0], 1)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                    $sheet->setCellValueByColumnAndRow($val[0], 1, "PEMERIKSAAN FISIK");
                    $sheet->mergeCellsByColumnAndRow($val[0], 1, $val[0]+count($questPhysic)-1, 1);
                }
                $sheet->getStyleByColumnAndRow($val[0], 2)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $sheet->setCellValueByColumnAndRow($val[0], 2, $val[2]);
                if ($val[3] == 1) {
                    $sheet->mergeCellsByColumnAndRow($val[0], 2, $val[1], 2);
                } else {
                    $sheet->mergeCellsByColumnAndRow($val[0], 2, $val[1], 3);
                }
            }
            
            foreach($quest_cat_col['lab'] as $key => $val) {
                if ($key == 0) {
                    $sheet->getStyleByColumnAndRow($val[0], 1)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                    $sheet->setCellValueByColumnAndRow($val[0], 1, "PEMERIKSAAN LABORATORIUM");
                    $sheet->mergeCellsByColumnAndRow($val[0], 1, $val[0]+(count($questLab)*2)-1, 1);
                }
                $sheet->getStyleByColumnAndRow($val[0], 2)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $sheet->setCellValueByColumnAndRow($val[0], 2, $val[2]);
                $sheet->mergeCellsByColumnAndRow($val[0], 2, $val[1], 2);
            }
            
            foreach($quest_cat_col['radiologi'] as $key => $val) {
                if ($key == 0) {
                    $sheet->getStyleByColumnAndRow($val[0], 1)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                    $sheet->setCellValueByColumnAndRow($val[0], 1, "RADIOLOGI");
                    $sheet->mergeCellsByColumnAndRow($val[0], 1, $val[0]+count($questRadiologi)-1, 2);
                }
            }
            
            foreach($quest_cat_col['penunjang'] as $key => $val) {
                if ($key == 0) {
                    $sheet->getStyleByColumnAndRow($val[0], 1)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                    $sheet->setCellValueByColumnAndRow($val[0], 1, "PENUNJANG");
                    $sheet->mergeCellsByColumnAndRow($val[0], 1, $val[0]+count($questPenunjang)-1, 2);
                }
            }
            
            foreach($quest_cat_col['resume'] as $key => $val) {
                if ($key == 0) {
                    $sheet->getStyleByColumnAndRow($val[0], 1)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                    $sheet->setCellValueByColumnAndRow($val[0], 1, "RESUME");
                    $sheet->mergeCellsByColumnAndRow($val[0], 1, $val[0]+count($questKesimpulan)-1, 2);
                }
            }
            
            $data_row = array();
            
            // pasien
            $dataPatient = $this->Excel_export_model->data_patient_all($separatedId);
            foreach ($dataPatient as $val) {
                $dateMcu = new DateTime($val['tanggal_mulai']);
                $dateBirth = new DateTime($val['tanggal_lahir']);
                $interval = $dateMcu->diff($dateBirth);
                $years_born = $interval->y;
                $months_born = $interval->m;
                $days_born = $interval->d;
                
                $data_col = array();
                $data_col['mcu'] = $val['no_medcheck'];
                $data_col['tanggal'] = $val['tanggal_pemeriksaan'];
                $data_col['nama'] = $val['nama_lengkap'];
                $data_col['nik'] = $val['no_identitas'];
                $data_col['jk'] = $val['jenis_kelamin'];
                $data_col['umur'] = $years_born.' Tahun '.$months_born.' Bulan '.$days_born.' Hari';
                $data_col['bagian'] = $val['bagian'];
                $data_col['grup'] = $val['grup'];
                $data_col['bb'] = $val['berat_badan'];
                $data_col['tb'] = $val['tinggi_badan'];
                $data_col['td'] = $val['tekanan_darah'];
                $data_col['nadi'] = $val['denyut_nadi'];
                $data_col['suhu'] = $val['suhu_badan'];
                $data_col['nilai_bmi'] = $val['nilai_bmi'];
                $data_col['kategori_bmi'] = $val['kategori_bmi'];
                $data_col['paket'] = $val['nama_paket'];
                $data_row[(string) $val['id']] = $data_col;
            }
            
            // fisik
            $dataPhysic = $this->Excel_export_model->data_result_physic($separatedId);
            foreach ($dataPhysic as $val) {
                $data_col = $data_row[(string) $val['id_transaksi']];
                $data_col['psc'.$val['id']] = $val['hasil'];
                $data_row[(string) $val['id_transaksi']] = $data_col;
            }
            
            // lab
            $dataLab = $this->Excel_export_model->data_result_labs($separatedId);
            foreach ($dataLab as $val) {
                $data_col = $data_row[(string) $val['id_pelayanan']];
                $data_col['lab'.$val['initial_name']] = $val['hasil_pemeriksaan'];
                $data_col['nlab'.$val['initial_name']] = $val['nilai_text'];
                $data_row[(string) $val['id_pelayanan']] = $data_col;
            }
            
            // radiologi
            $dataRadiologi = $this->Excel_export_model->data_result_radiologi($separatedId);
            foreach ($dataRadiologi as $val) {
                $data_col = $data_row[(string) $val['id_pelayanan']];
                $data_col['rdg'.$val['initial_name']] = $val['hasil_pemeriksaan'];
                $data_row[(string) $val['id_pelayanan']] = $data_col;
            }
            
            // penunjang
            $penunjangid = '';
            $penunjang_id = '';
            $penunjang_jenis = '';
            $penunjang_hasil = '';
            $dataPenunjang = $this->Excel_export_model->data_result_penunjang($separatedId);
            foreach ($dataPenunjang as $val) {
                $penunjangid = (string) $val['id_pelayanan'];
                $data_col = $data_row[$penunjangid];
                if ($penunjang_id != $penunjangid) {
                    $penunjang_id = $penunjangid;
                    $penunjang_hasil = '';
                }
                if ($penunjang_jenis != $val['initial_name']) {
                    $penunjang_jenis = $val['initial_name'];
                    $penunjang_hasil = $val['hasil_pemeriksaan'];
                } else {
                    $penunjang_hasil = $penunjang_hasil."\n".$val['hasil_pemeriksaan'];
                }
                $data_col['pjg'.$val['initial_name']] = $penunjang_hasil;
                $data_row[$penunjangid] = $data_col;
            }
            
            // kesimpulan
            $resumeid = '';
            $resume_id = '';
            $resume_jenis = '';
            $resume_hasil = '';
            $dataKesimpulan = $this->Excel_export_model->data_result_kesimpulan($separatedId);
            foreach ($dataKesimpulan as $val) {
                $resumeid = (string) $val['id_pelayanan'];
                $data_col = $data_row[$resumeid];
                if ($resume_id != $resumeid) {
                    $resume_id = $resumeid;
                    $resume_hasil = '';
                }
                if ($resume_jenis != $val['initial_name']) {
                    $resume_jenis = $val['initial_name'];
                    $resume_hasil = $val['hasil_resume'];
                } else {
                    $resume_hasil = $resume_hasil."\n".$val['hasil_resume'];
                }
                $data_col['rsm'.$val['initial_name']] = $resume_hasil;
                $data_row[$resumeid] = $data_col;
            }
            
            $rows = 4;
            foreach ($data_row as $key => $val) {
                foreach ($arr_col as $icol => $col) {
                    $sheet->setCellValueByColumnAndRow($icol, $rows, $val[$col]);
                }
                $rows++;
            }
        }
        
      $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="DataReportDetail.xls"');
      $object_writer->save('php://output');
    }
  }