<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class Kasir extends CI_Controller {
	
	function __construct() {
        parent::__construct(); 

		$this->load->model('Kasir_model');
		$this->load->model('registrasi/Registrasi_model');

		$this->user_id = isset($this->session->get_userdata()['user_details'][0]->id)?$this->session->get_userdata()['user_details'][0]->users_id:'1';
		$this->load->helper(array('url','html','form'));
		$this->load->library('dompdf_gen');
    }
	
	public function list_data_pembayaran(){
        is_login();
		
			$data = $this->Kasir_model->get_data_pembayaran();
			
            $this->load->view('include/header');
            $this->load->view('data_pembayaran',Array( 'data' => $data));                
            $this->load->view('include/footer');            
      
    }
	
	public function detailPembayaranKasir($id='') {   
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
		$arrDataPaketLab = $this->Kasir_model->get_data_paket_lab($id);
		$arrDataTambahanPemeriksaan = $this->Kasir_model->get_data_tambahan_pemeriksaan($id);
		$data_total_tagihan = $this->Kasir_model->get_data_total_tagihan($id);
        $this->load->view('include/header'); 
        $this->load->view('detailPembayaran', Array('arrPertanyaanFisikMata'=>$arrPertanyaanFisikMata,'arrPertanyaanFisikAnamsia'=>$arrPertanyaanFisikAnamsia,'arrDataPasien'=>$arrDataPasien,
														'arrPertanyaanFisikLeher'=>$arrPertanyaanFisikLeher,'arrPertanyaanFisikTenggorokan'=>$arrPertanyaanFisikTenggorokan,
														'arrPertanyaanFisikMulut'=>$arrPertanyaanFisikMulut,'arrPertanyaanFisikTelinga'=>$arrPertanyaanFisikTelinga,
														'arrPertanyaanFisikHidung'=>$arrPertanyaanFisikHidung,'arrPertanyaanFisikThorax'=>$arrPertanyaanFisikThorax,
														'arrPertanyaanFisikCorPulmo'=>$arrPertanyaanFisikCorPulmo,'arrPertanyaanFisikExtrimitas'=>$arrPertanyaanFisikExtrimitas,
														'arrPertanyaanFisikSistemAlatGerakTangan'=>$arrPertanyaanFisikSistemAlatGerakTangan,'arrPertanyaanFisikAbdomen'=>$arrPertanyaanFisikAbdomen,
														'arrPertanyaanFisikKeteranganLain'=>$arrPertanyaanFisikKeteranganLain,'arrPertanyaanFisikGenetalia'=>$arrPertanyaanFisikGenetalia,
														'arrDataUsers'=>$arrDataUsers,'arrDataLab'=>$arrDataLab,'arrDataRadiologi'=>$arrDataRadiologi,
														'arrDataResume'=>$arrDataResume,'arrDataPenunjang'=>$arrDataPenunjang,'arrDataPemeriksaan'=>$arrDataPemeriksaan,
														'arrDataDiagnosa'=>$arrDataDiagnosa,'arrDataTindakan'=>$arrDataTindakan,'arrDataObat'=>$arrDataObat,
														'arrDataPaketLab'=>$arrDataPaketLab,'arrDataTambahanPemeriksaan'=>$arrDataTambahanPemeriksaan,'data_total_tagihan'=>$data_total_tagihan));
        $this->load->view('include/footer');
    }
	
	public function printDetailPembayaranKasir($id){
        is_login();
		
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
		$arrDataPaketLab = $this->Kasir_model->get_data_paket_lab($id);
		$arrDataTambahanPemeriksaan = $this->Kasir_model->get_data_tambahan_pemeriksaan($id);
		$data_total_tagihan = $this->Kasir_model->get_data_total_tagihan($id);
        
        $this->load->view('printDetailPembayaran', Array('arrPertanyaanFisikMata'=>$arrPertanyaanFisikMata,'arrPertanyaanFisikAnamsia'=>$arrPertanyaanFisikAnamsia,'arrDataPasien'=>$arrDataPasien,
														'arrPertanyaanFisikLeher'=>$arrPertanyaanFisikLeher,'arrPertanyaanFisikTenggorokan'=>$arrPertanyaanFisikTenggorokan,
														'arrPertanyaanFisikMulut'=>$arrPertanyaanFisikMulut,'arrPertanyaanFisikTelinga'=>$arrPertanyaanFisikTelinga,
														'arrPertanyaanFisikHidung'=>$arrPertanyaanFisikHidung,'arrPertanyaanFisikThorax'=>$arrPertanyaanFisikThorax,
														'arrPertanyaanFisikCorPulmo'=>$arrPertanyaanFisikCorPulmo,'arrPertanyaanFisikExtrimitas'=>$arrPertanyaanFisikExtrimitas,
														'arrPertanyaanFisikSistemAlatGerakTangan'=>$arrPertanyaanFisikSistemAlatGerakTangan,'arrPertanyaanFisikAbdomen'=>$arrPertanyaanFisikAbdomen,
														'arrPertanyaanFisikKeteranganLain'=>$arrPertanyaanFisikKeteranganLain,'arrPertanyaanFisikGenetalia'=>$arrPertanyaanFisikGenetalia,
														'arrDataUsers'=>$arrDataUsers,'arrDataLab'=>$arrDataLab,'arrDataRadiologi'=>$arrDataRadiologi,
														'arrDataResume'=>$arrDataResume,'arrDataPenunjang'=>$arrDataPenunjang,'arrDataPemeriksaan'=>$arrDataPemeriksaan,
														'arrDataDiagnosa'=>$arrDataDiagnosa,'arrDataTindakan'=>$arrDataTindakan,'arrDataObat'=>$arrDataObat,
														'arrDataPaketLab'=>$arrDataPaketLab,'arrDataTambahanPemeriksaan'=>$arrDataTambahanPemeriksaan,'data_total_tagihan'=>$data_total_tagihan));
                      
                 
			
			$paper_size  = 'A4'; //paper size
			$orientation = 'potrait'; //tipe format kertas
			$html = $this->output->get_output();
			
			$this->dompdf->set_paper($paper_size, $orientation);
			//Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("Work_Order.pdf", array('Attachment'=>0));         
      
    }


}