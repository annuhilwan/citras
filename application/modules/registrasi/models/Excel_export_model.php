<?php

class Excel_export_model extends CI_Model{
	
function __construct(){            
	  	parent::__construct();
		$this->user_id =isset($this->session->get_userdata()['user_details'][0]->id)?$this->session->get_userdata()['user_details'][0]->users_id:'1';
	}
	
function fetch_data(){

	//$query = $this->db->query("select * from master_pasien order by id desc;");
	$res = $this->db->query("select * from master_pasien order by id desc;")->result();
	//print_r($res);die;
	return $res;


	//return $query->result_array();

}

public function insertRow($table, $data){
	print_r("insert");
	  	$this->db->insert($table, $data);
	  	return  $this->db->insert_id();
	}


function delete_report_before($id){
	
	$res = $this->db->query("delete FROM  report_excel where id_transaksi = ".$id."");

}

function delete_report_before_perusahaan($id){
	
	$res = $this->db->query("delete FROM  report_excel where id_transaksi_perusahaan = ".$id."");

}

function data_report_detail($id){
	
	$res = $this->db->query("SELECT *
							FROM  report_excel 
							where id_transaksi = ".$id." order by id asc")->result();
	return $res;

}

function data_report_detail_perusahaan($id){
	
	$res = $this->db->query("SELECT *
							FROM  report_excel 
							where id_transaksi_perusahaan = ".$id." order by id asc")->result();
	return $res;

}

function get_data_pasien_per_perusahaan($id){
		
		$res = $this->db->query("SELECT id FROM trx_pelayanan 
									where id_medcheck_perusahaan = ".$id." order by no_medcheck asc;")->result_array();
		return $res;
	}
	
	function get_data_lahir_pasien($id){
		
		$res = $this->db->query("select tanggal_lahir,concat (TIMESTAMPDIFF( YEAR, tanggal_lahir, now() ) , ' Tahun ',
									TIMESTAMPDIFF( MONTH, tanggal_lahir, now() ) % 12 , ' Bulan ',
										FLOOR( TIMESTAMPDIFF( DAY, tanggal_lahir, now() ) % 30.4375 ) , ' Hari') as jumlah_hari_lahir from trx_pelayanan
											WHERE id = ".$id.";")->result_array();
		return $res;
	}
	
	function get_data_bmi($id){
		
		$res = $this->db->query("select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.01 THEN 'Obese'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 27.00 THEN 'Overweight'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.51 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 25.00 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 17.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 18.50 THEN 'Underweight'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 17 THEN 'Very Underweight'
									ELSE 'Incomplete Data' 
									END as kategori_bmi
									from trx_pelayanan
									where id = ".$id."")->result_array();
		return $res;
	}


function get_data_pasien_new($id){
		
		$res = $this->db->query("SELECT a.id,b.nama_lengkap, c.tanggal_mulai,a.no_medcheck,b.no_identitas, b.jenis_kelamin,b.bagian,b.grup, a.berat_badan, a.tinggi_badan, a.tekanan_darah, a.denyut_nadi,a.suhu_badan, a.nama_paket,a.tanggal_pemeriksaan
									FROM  trx_pelayanan a 
										left join master_pasien b on (a.id_pasien = b.id) 
											left join trx_medcheck_perusahaan c on (a.id_medcheck_perusahaan = c.id )
												where a.id = ".$id.";")->result_array();
		return $res;
		
		
	}
	
	function get_data_tanggal_mulai_medcheck($id){
		
		$res = $this->db->query("select tanggal_mulai, nama_dokter_rontgen,nama_dokter_penanggung_jawab from trx_medcheck_perusahaan where id in 
								(SELECT id_medcheck_perusahaan FROM trx_pelayanan where id = ".$id.")")->result_array();
		return $res;
	}
	
	function get_data_detail_anamnesa($id){	
		$res = $this->db->query("select a.id_transaksi, concat(nama_pertanyaan ,' : ', hasil) anamsia from trx_medcheck_detail a 
						     			left join master_pertanyaan b 
						     			on (a.id_pertanyaan = b.id)
						     			where  b.kategori_pertanyaan = 'FISIK - ANAMNESA' and trim(a.hasil) <> '' and id_transaksi = ".$id.";")->result_array();
		return $res;
	}
	
	function get_data_detail_mata($id){	
		$res = $this->db->query("select a.id_transaksi, concat(nama_pertanyaan ,' : ', hasil) mata from trx_medcheck_detail a 
						     			left join master_pertanyaan b 
						     			on (a.id_pertanyaan = b.id)
						     			where  b.kategori_pertanyaan = 'FISIK - MATA' and 
                                        nama_pertanyaan not in ('VISUS MATA OD', 'VISUS MATA OD (Silinder)','VISUS MATA OS','VISUS MATA OS (Silinder)')and trim(a.hasil) <> '' and id_transaksi = ".$id.";")->result_array();
		return $res;
	}
	
	function get_data_detail_hidung($id){	
		$res = $this->db->query("select a.id_transaksi, concat(nama_pertanyaan ,' : ', hasil) hidung from trx_medcheck_detail a 
						     			left join master_pertanyaan b 
						     			on (a.id_pertanyaan = b.id)
						     			where  b.kategori_pertanyaan = 'FISIK - HIDUNG' and trim(a.hasil) <> '' and id_transaksi = ".$id.";")->result_array();
		return $res;
	}
	
	function get_data_detail_mulut($id){	
		$res = $this->db->query("select a.id_transaksi, concat(nama_pertanyaan ,' : ', hasil) mulut from trx_medcheck_detail a 
						     			left join master_pertanyaan b 
						     			on (a.id_pertanyaan = b.id)
						     			where  b.kategori_pertanyaan = 'FISIK - MULUT' and trim(a.hasil) <> '' and id_transaksi = ".$id.";")->result_array();
		return $res;
	}
	
	function get_data_detail_tenggorokan($id){	
		$res = $this->db->query("select a.id_transaksi, concat(nama_pertanyaan ,' : ', hasil) tenggorokan from trx_medcheck_detail a 
						     			left join master_pertanyaan b 
						     			on (a.id_pertanyaan = b.id)
						     			where  b.kategori_pertanyaan = 'FISIK - TENGGOROKAN' and trim(a.hasil) <> '' and id_transaksi = ".$id.";")->result_array();
		return $res;
	}
	
	function get_data_detail_leher($id){	
		$res = $this->db->query("select a.id_transaksi, concat(nama_pertanyaan ,' : ', hasil) leher from trx_medcheck_detail a 
						     			left join master_pertanyaan b 
						     			on (a.id_pertanyaan = b.id)
						     			where  b.kategori_pertanyaan = 'FISIK - LEHER' and trim(a.hasil) <> '' and id_transaksi = ".$id.";")->result_array();
		return $res;
	}
	
	function get_data_detail_telinga($id){	
		$res = $this->db->query("select a.id_transaksi, concat(nama_pertanyaan ,' : ', hasil) telinga from trx_medcheck_detail a 
						     			left join master_pertanyaan b 
						     			on (a.id_pertanyaan = b.id)
						     			where  b.kategori_pertanyaan = 'FISIK - TELINGA' and trim(a.hasil) <> '' and id_transaksi = ".$id.";")->result_array();
		return $res;
	}
	
	function get_data_detail_perut($id){	
		$res = $this->db->query("select a.id_transaksi, concat(nama_pertanyaan ,' : ', hasil) perut from trx_medcheck_detail a 
						     			left join master_pertanyaan b 
						     			on (a.id_pertanyaan = b.id)
						     			where  b.kategori_pertanyaan = 'FISIK - PERUT' and trim(a.hasil) <> '' and id_transaksi = ".$id.";")->result_array();
		return $res;
	}

	function get_data_detail_kulit($id){	
		$res = $this->db->query("select a.id_transaksi, concat(nama_pertanyaan ,' : ', hasil) kulit from trx_medcheck_detail a 
						     			left join master_pertanyaan b 
						     			on (a.id_pertanyaan = b.id)
						     			where  b.kategori_pertanyaan = 'FISIK - KULIT' and trim(a.hasil) <> '' and id_transaksi = ".$id.";")->result_array();
		return $res;
	}
	
	function get_data_detail_thorax($id){	
		$res = $this->db->query("select a.id_transaksi, concat(nama_pertanyaan ,' : ', hasil) thorax from trx_medcheck_detail a 
						     			left join master_pertanyaan b 
						     			on (a.id_pertanyaan = b.id)
						     			where  b.kategori_pertanyaan = 'FISIK - THORAX' and trim(a.hasil) <> '' and id_transaksi = ".$id.";")->result_array();
		return $res;
	}
	
	function get_data_detail_abdomen($id){	
		$res = $this->db->query("select a.id_transaksi, concat(nama_pertanyaan ,' : ', hasil) abdomen from trx_medcheck_detail a 
						     			left join master_pertanyaan b 
						     			on (a.id_pertanyaan = b.id)
						     			where  b.kategori_pertanyaan = 'FISIK - ABDOMEN' and trim(a.hasil) <> '' and id_transaksi = ".$id.";")->result_array();
		return $res;
	}
	
	function get_data_detail_exremitas($id){	
		$res = $this->db->query("select a.id_transaksi, concat(nama_pertanyaan ,' : ', hasil) extremitas from trx_medcheck_detail a 
						     			left join master_pertanyaan b 
						     			on (a.id_pertanyaan = b.id)
						     			where  b.kategori_pertanyaan = 	'FISIK - EXTRIMITAS' and trim(a.hasil) <> '' and id_transaksi = ".$id.";")->result_array();
		return $res;
	}
	
		function get_data_detail_genetalia($id){	
		$res = $this->db->query("select a.id_transaksi, concat(nama_pertanyaan ,' : ', hasil) genetalia from trx_medcheck_detail a 
						     			left join master_pertanyaan b 
						     			on (a.id_pertanyaan = b.id)
						     			where  b.kategori_pertanyaan = 	'FISIK - GENITALIA' and trim(a.hasil) <> '' and id_transaksi = ".$id.";")->result_array();
		return $res;
	}
	
	function get_data_detail_neuromuscular($id){	
		$res = $this->db->query("select a.id_transaksi, concat(nama_pertanyaan ,' : ', hasil) neuromuscular from trx_medcheck_detail a 
						     			left join master_pertanyaan b 
						     			on (a.id_pertanyaan = b.id)
						     			where  b.kategori_pertanyaan = 	'FISIK - NEUROMUSCULAR' and trim(a.hasil) <> '' and id_transaksi = ".$id.";")->result_array();
		return $res;
	}
	
	function get_data_detail_keterangan_lain($id){	
		$res = $this->db->query("select a.id_transaksi, concat(nama_pertanyaan ,' : ', hasil) keterangan_lain from trx_medcheck_detail a 
						     			left join master_pertanyaan b 
						     			on (a.id_pertanyaan = b.id)
						     			where  b.kategori_pertanyaan = 'FISIK - KETERANGAN LAIN' and trim(a.hasil) <> '' and id_transaksi = ".$id.";")->result_array();
		return $res;
	}
	
	function get_data_detail_buta_warna($id){	
		$res = $this->db->query("select a.id_transaksi, concat(nama_pertanyaan ,' : ', hasil) buta_warna from trx_medcheck_detail a 
						     			left join master_pertanyaan b 
						     			on (a.id_pertanyaan = b.id)
						     			where  b.kategori_pertanyaan = 'FISIK - MATA' and nama_pertanyaan = 'BUTA WARNA' and trim(a.hasil) <> '' and id_transaksi = ".$id.";")->result_array();
		return $res;
	}
	
	function get_data_detail_visus_mata_od($id){	
		$res = $this->db->query("select a.id_transaksi, concat(nama_pertanyaan ,' : ', hasil) visus_mata_od from trx_medcheck_detail a 
						     			left join master_pertanyaan b 
						     			on (a.id_pertanyaan = b.id)
						     			where  b.kategori_pertanyaan = 'FISIK - MATA' and nama_pertanyaan in ('VISUS MATA OD','VISUS MATA OD (Silinder)') and trim(a.hasil) <> '' and id_transaksi = ".$id."
										order by b.urutan asc;")->result_array();
		return $res;
	}
	
	function get_data_detail_visus_mata_os($id){	
		$res = $this->db->query("select a.id_transaksi, concat(nama_pertanyaan ,' : ', hasil) visus_mata_os from trx_medcheck_detail a 
						     			left join master_pertanyaan b 
						     			on (a.id_pertanyaan = b.id)
						     			where  b.kategori_pertanyaan = 'FISIK - MATA' and nama_pertanyaan in ('VISUS MATA OS','VISUS MATA OS (Silinder)') and trim(a.hasil) <> '' and id_transaksi = ".$id."
										order by b.urutan asc;")->result_array();
		return $res;
	}
	
	function get_data_detail_hematologi($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'HEMATOLOGI' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_detail_diff_count($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'DIFFCOUNT' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_detail_urinalisa($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'URINALISA' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_detail_sedimen_urine($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'SEDIMENURINE' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_detail_kimia_darah($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'KIMIADARAH' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}

	function get_data_detail_logam($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'LOGAM' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
		function get_data_detail_codarah($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'CO DARAH' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_detail_hexanedione($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = '2,5-HEXANEDIONE' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}

	function get_data_detail_benzena($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'BENZENA' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}

	function get_data_detail_toluena($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'TOLUENA' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}

	function get_data_detail_xilene($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'XILENE' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}

	function get_data_detail_golongan_darah($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'GOLONGAN DARAH' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}

	function get_data_detail_tubex($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'Tubex' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}

	function get_data_detail_penanda_tumor($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'PENANDA TUMOR' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}

	function get_data_detail_feses($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'FESES' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}

	function get_data_detail_btx($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'BTX' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}

	function get_data_detail_kultur_feses($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'KULTUR FESES' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_detail_drug_test($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'DRUGTEST' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_detail_imunologi($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'IMUNOLOGI' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}

	function get_data_detail_imunoserologi($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'IMUNOSEROLOGI' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_detail_kehamilan($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'KEHAMILAN' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_detail_rectal($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'RECTAL' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_detail_widal($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat(nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil,nilai_text FROM trx_laboratorium
									where id_pelayanan = ".$id."
										and nama_pelayanan = 'WIDAL' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_detail_radiologi($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat (nama_pemeriksaan, ' : ',hasil_pemeriksaan) hasil FROM trx_radiologi
									where id_pelayanan = ".$id.";")->result_array();
		return $res;
	}
	
	function get_data_detail_audiometri($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat (jenis_pemeriksaan, ' : ',hasil_pemeriksaan) hasil FROM trx_penunjang
									where id_pelayanan = ".$id." and jenis_pemeriksaan ='AUDIOMETRI';")->result_array();
		return $res;
	}
	
	function get_data_detail_usg($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat (jenis_pemeriksaan, ' : ',hasil_pemeriksaan) hasil FROM trx_penunjang
									where id_pelayanan = ".$id." and jenis_pemeriksaan ='USG';")->result_array();
		return $res;
	}
	
	function get_data_detail_usg_mammae($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat (jenis_pemeriksaan, ' : ',hasil_pemeriksaan) hasil FROM trx_penunjang
									where id_pelayanan = ".$id." and jenis_pemeriksaan ='USG MAMMAE';")->result_array();
		return $res;
	}
	
	function get_data_detail_usg_abdomen($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat (jenis_pemeriksaan, ' : ',hasil_pemeriksaan) hasil FROM trx_penunjang
									where id_pelayanan = ".$id." and jenis_pemeriksaan ='USG ABDOMEN';")->result_array();
		return $res;
	}
	
	function get_data_detail_treadmill($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat (jenis_pemeriksaan, ' : ',hasil_pemeriksaan) hasil FROM trx_penunjang
									where id_pelayanan = ".$id." and jenis_pemeriksaan ='TREADMILL';")->result_array();
		return $res;
	}
	
	function get_data_detail_pap_smear($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat (jenis_pemeriksaan, ' : ',hasil_pemeriksaan) hasil FROM trx_penunjang
									where id_pelayanan = ".$id." and jenis_pemeriksaan ='PAP SMEAR';")->result_array();
		return $res;
	}
	
	function get_data_detail_fitness($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat (jenis_pemeriksaan, ' : ',hasil_pemeriksaan) hasil FROM trx_penunjang
									where id_pelayanan = ".$id." and jenis_pemeriksaan ='FITNESS TEST';")->result_array();
		return $res;
	}
	
	function get_data_detail_spirometri($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat (jenis_pemeriksaan, ' : ',hasil_pemeriksaan) hasil FROM trx_penunjang
									where id_pelayanan = ".$id." and jenis_pemeriksaan ='SPIROMETRI';")->result_array();
		return $res;
	}
	
	function get_data_detail_ekg($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat (jenis_pemeriksaan, ' : ',hasil_pemeriksaan) hasil FROM trx_penunjang
									where id_pelayanan = ".$id." and jenis_pemeriksaan ='EKG';")->result_array();
		return $res;
	}
	
	function get_data_detail_ilo($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat (jenis_pemeriksaan, ' : ',hasil_pemeriksaan) hasil FROM trx_penunjang
									where id_pelayanan = ".$id." and jenis_pemeriksaan ='RONTGEN ILO';")->result_array();
		return $res;
	}

	function get_data_detail_iva($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat (jenis_pemeriksaan, ' : ',hasil_pemeriksaan) hasil FROM trx_penunjang
									where id_pelayanan = ".$id." and jenis_pemeriksaan ='IVA TEST';")->result_array();
		return $res;
	}
	
	function get_data_detail_alcohol_breath($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat (jenis_pemeriksaan, ' : ',hasil_pemeriksaan) hasil FROM trx_penunjang
									where id_pelayanan = ".$id." and jenis_pemeriksaan ='ALCOHOL BREATH TEST';")->result_array();
		return $res;
	}
	
	function get_data_detail_romberg($id){	
		$res = $this->db->query("SELECT id_pelayanan, concat (jenis_pemeriksaan, ' : ',hasil_pemeriksaan) hasil FROM trx_penunjang
									where id_pelayanan = ".$id." and jenis_pemeriksaan ='ROMBERG TEST';")->result_array();
		return $res;
	}
	
	function get_data_detail_anjuran($id){	
		$res = $this->db->query("SELECT id_pelayanan, hasil_resume as hasil FROM trx_resume
									where id_pelayanan = ".$id." and jenis_resume = 'Anjuran';")->result_array();
		return $res;
	}
	
	function get_data_detail_kesimpulan($id){	
		$res = $this->db->query("SELECT id_pelayanan, hasil_resume as hasil FROM trx_resume
									where id_pelayanan = ".$id." and jenis_resume = 'Kesimpulan';")->result_array();
		return $res;
	}
	
	function get_data_detail_diagnosa($id){	
		$res = $this->db->query("SELECT id_pelayanan, hasil_resume as hasil FROM trx_resume
									where id_pelayanan = ".$id." and jenis_resume = 'Diagnosa';")->result_array();
		return $res;
	}
	
	function get_data_detail_kategori($id){	
		$res = $this->db->query("SELECT id_pelayanan, hasil_resume as hasil FROM trx_resume
									where id_pelayanan = ".$id." and jenis_resume = 'KATEGORI';")->result_array();
		return $res;
	}
	
	function data_patient_all($id_trans){
		$res = $this->db->query("SELECT a.id, a.no_medcheck, a.tanggal_pemeriksaan, b.nama_lengkap, b.no_identitas, b.jenis_kelamin, b.bagian, b.grup, a.berat_badan, a.tinggi_badan, a.tekanan_darah, 
		                        a.denyut_nadi, a.suhu_badan, a.nama_paket, a.tanggal_lahir, c.tanggal_mulai, 
		                        CONCAT (TIMESTAMPDIFF( YEAR, a.tanggal_lahir, now() ), ' Tahun ', 
		                        TIMESTAMPDIFF( MONTH, a.tanggal_lahir, now() ) % 12, ' Bulan ', 
		                        FLOOR( TIMESTAMPDIFF( DAY, a.tanggal_lahir, now() ) % 30.4375 ), ' Hari') AS usia, 
		                        ROUND(a.berat_badan / ((a.tinggi_badan / 100) * (a.tinggi_badan / 100)),2) AS nilai_bmi, 
		                        CASE 
									WHEN ROUND(a.berat_badan / ((a.tinggi_badan / 100) * (a.tinggi_badan / 100)),2) >= 27.01 THEN 'Obese'
									WHEN ROUND(a.berat_badan / ((a.tinggi_badan / 100) * (a.tinggi_badan / 100)),2) >= 25.01 
									    AND ROUND(a.berat_badan / ((a.tinggi_badan / 100) * (a.tinggi_badan / 100)),2) <= 27.00 THEN 'Overweight' 
									WHEN ROUND(a.berat_badan / ((a.tinggi_badan / 100) * (a.tinggi_badan / 100)),2) >= 18.51 
									    AND ROUND(a.berat_badan / ((a.tinggi_badan / 100) * (a.tinggi_badan / 100)),2) <= 25.00 THEN 'Normal' 
									WHEN ROUND(a.berat_badan / ((a.tinggi_badan / 100) * (a.tinggi_badan / 100)),2) >= 17.01 
									    AND ROUND(a.berat_badan / ((a.tinggi_badan / 100) * (a.tinggi_badan / 100)),2) <= 18.50 THEN 'Underweight' 
									WHEN ROUND(a.berat_badan / ((a.tinggi_badan / 100) * (a.tinggi_badan / 100)),2) < 17 THEN 'Very Underweight' 
								ELSE 'Incomplete Data' END AS kategori_bmi 
		                        FROM trx_pelayanan a LEFT JOIN master_pasien b ON (a.id_pasien = b.id) 
		                        LEFT JOIN trx_medcheck_perusahaan c ON (a.id_medcheck_perusahaan = c.id) 
								WHERE a.id IN (".$id_trans.") ORDER BY a.no_medcheck ASC")->result_array();
		return $res;
	}
	
	function quest_physic_all($id_trans){
		$res = $this->db->query("SELECT a.id, a.kategori_pertanyaan, a.nama_pertanyaan FROM master_pertanyaan a LEFT JOIN trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' AND a.kategori_pertanyaan LIKE 'FISIK - %' AND b.id_transaksi IN (".$id_trans.") 
								GROUP BY a.kategori_pertanyaan, nama_pertanyaan ORDER BY a.kategori_pertanyaan ASC, a.nama_pertanyaan ASC")->result_array();
		return $res;
	}
	
	function data_result_physic($id_trans){	
		$res = $this->db->query("SELECT a.id_transaksi, b.id, a.hasil FROM trx_medcheck_detail a 
		                        LEFT JOIN master_pertanyaan b ON (a.id_pertanyaan = b.id) 
						     	WHERE b.status = 'ACTIVE' AND b.kategori_pertanyaan LIKE 'FISIK - %' AND a.id_transaksi IN (".$id_trans.") 
						     	ORDER BY a.id_transaksi ASC, b.kategori_pertanyaan ASC, b.nama_pertanyaan ASC")->result_array();
		return $res;
	}
	
	function quest_labs_all($id_trans){
		$res = $this->db->query("SELECT id, nama_pelayanan, nama_pemeriksaan, REGEXP_REPLACE(LOWER(CONCAT(nama_pelayanan, '_', nama_pemeriksaan)), '[^0-9a-zA-Z]', '_') AS initial_name 
		                        FROM trx_laboratorium WHERE id_pelayanan IN (".$id_trans.") AND trim(nama_pelayanan) <> '' 
		                        GROUP BY nama_pelayanan, nama_pemeriksaan ORDER BY nama_pelayanan ASC, nama_pemeriksaan ASC")->result_array();
		return $res;
	}
	
	function data_result_labs($id_trans){	
		$res = $this->db->query("SELECT id_pelayanan, id, hasil_pemeriksaan, nilai_text, REGEXP_REPLACE(LOWER(CONCAT(nama_pelayanan, '_', nama_pemeriksaan)), '[^0-9a-zA-Z]', '_') AS initial_name 
		                        FROM trx_laboratorium WHERE id_pelayanan IN (".$id_trans.") AND trim(nama_pelayanan) <> '' 
						     	ORDER BY id_pelayanan ASC, nama_pelayanan ASC, nama_pemeriksaan ASC")->result_array();
		return $res;
	}
	
	function quest_radiologi_all($id_trans){	
		$res = $this->db->query("SELECT id, nama_pemeriksaan, REGEXP_REPLACE(LOWER(nama_pemeriksaan), '[^0-9a-zA-Z]', '_') AS initial_name 
		                        FROM trx_radiologi WHERE id_pelayanan IN (".$id_trans.") 
								GROUP BY nama_pemeriksaan ORDER BY nama_pemeriksaan ASC")->result_array();
		return $res;
	}
	
	function data_result_radiologi($id_trans){	
		$res = $this->db->query("SELECT id_pelayanan, id, hasil_pemeriksaan, REGEXP_REPLACE(LOWER(nama_pemeriksaan), '[^0-9a-zA-Z]', '_') AS initial_name 
		                        FROM trx_radiologi WHERE id_pelayanan IN (".$id_trans.") 
								ORDER BY id_pelayanan ASC, nama_pemeriksaan ASC")->result_array();
		return $res;
	}
	
	function quest_penunjang_all($id_trans){	
		$res = $this->db->query("SELECT id, jenis_pemeriksaan, REGEXP_REPLACE(LOWER(jenis_pemeriksaan), '[^0-9a-zA-Z]', '_') AS initial_name 
		                        FROM trx_penunjang WHERE id_pelayanan IN (".$id_trans.") 
								GROUP BY jenis_pemeriksaan ORDER BY jenis_pemeriksaan ASC")->result_array();
		return $res;
	}
	
	function data_result_penunjang($id_trans){	
		$res = $this->db->query("SELECT id_pelayanan, id, hasil_pemeriksaan, REGEXP_REPLACE(LOWER(jenis_pemeriksaan), '[^0-9a-zA-Z]', '_') AS initial_name 
		                        FROM trx_penunjang WHERE id_pelayanan IN (".$id_trans.") 
								ORDER BY id_pelayanan ASC, jenis_pemeriksaan ASC")->result_array();
		return $res;
	}
	
	function quest_kesimpulan_all($id_trans){	
		$res = $this->db->query("SELECT id, jenis_resume, REGEXP_REPLACE(LOWER(jenis_resume), '[^0-9a-zA-Z]', '_') AS initial_name 
		                        FROM trx_resume WHERE id_pelayanan IN (".$id_trans.") 
								GROUP BY jenis_resume ORDER BY jenis_resume ASC")->result_array();
		return $res;
	}
	
	function data_result_kesimpulan($id_trans){	
		$res = $this->db->query("SELECT id_pelayanan, id, hasil_resume, REGEXP_REPLACE(LOWER(jenis_resume), '[^0-9a-zA-Z]', '_') AS initial_name 
		                        FROM trx_resume WHERE id_pelayanan IN (".$id_trans.") 
								ORDER BY id_pelayanan ASC, jenis_resume ASC")->result_array();
		return $res;
	}
	
	function insert_report_excel($post){
				
				$save = array();
				$save['created_date'] = date('Y-m-d H:i:s');
				$save['created_by'] =  1;
				$save['modified_date'] = date('Y-m-d H:i:s');
				$save['modified_by'] =  1;
				$save['status'] = 'Active';
				$save['id_transaksi_perusahaan'] = $post['id_transaksi_perusahaan'];
				$save['id_transaksi'] = $post['id_transaksi'];
				$save['no_medcheck'] = $post['no_medcheck'];
				$save['nama_lengkap'] = $post['nama_lengkap'];
				$save['tanggal_pemeriksaan'] = $post['tanggal_mulai'];
				$save['NIK'] = $post['no_identitas'];
				$save['jenis_kelamin'] = $post['jenis_kelamin'];
				$save['umur'] = $post['umur'];
				$save['bagian'] = $post['bagian'];
				$save['grup'] = $post['grup'];
				$save['berat_badan'] = $post['berat_badan'];
				$save['tinggi_badan'] = $post['tinggi_badan'];
				$save['tekanan_darah'] = $post['tekanan_darah'];
				$save['tekanan_nadi'] = $post['tekanan_nadi'];
				$save['suhu_tubuh'] = $post['suhu_tubuh'];
				$save['nilai_bmi'] = $post['nilai_bmi'];
				$save['kategori_bmi'] = $post['kategori_bmi'];
				$save['anamnesis'] = $post['anamnesis'];
				$save['mata'] = $post['mata'];
				$save['hidung'] = $post['hidung'];
				$save['mulut'] = $post['mulut'];
				$save['tenggorokan'] = $post['tenggorokan'];				
				$save['leher'] = $post['leher'];				
				$save['telinga'] = $post['telinga'];
				$save['perut'] = $post['perut'];
				$save['thorax'] = $post['thorax'];				
				$save['abdomen'] = $post['abdomen'];				
				$save['extremitas'] = $post['extremitas'];
				$save['genetalia'] = $post['genetalia'];
				$save['neuromuscular'] = $post['neuromuscular'];
				$save['kulit'] = $post['kulit'];			
				$save['keterangan_lain'] = $post['keterangan_lain'];				
				$save['buta_warna'] = $post['buta_warna'];				
				$save['visus_mata_od'] = $post['visus_mata_od'];				
				$save['visus_mata_os'] = $post['visus_mata_os'];			
				$save['hematologi'] = $post['hematologi'];			
				$save['hematologi_std'] = $post['hematologi_std'];			
				$save['diff_count'] = $post['diff_count'];			
				$save['diff_count_std'] = $post['diff_count_std'];			
				$save['urinalisa'] = $post['urinalisa'];			
				$save['urinalisa_std'] = $post['urinalisa_std'];			
				$save['sedimen_urine'] = $post['sedimen_urine'];			
				$save['sedimen_urine_std'] = $post['sedimen_urine_std'];			
				$save['kimia_darah'] = $post['kimia_darah'];			
				$save['kimia_darah_std'] = $post['kimia_darah_std'];
				$save['logam'] = $post['logam'];			
				$save['logam_std'] = $post['logam_std'];
				$save['codarah'] = $post['codarah'];			
				$save['codarah_std'] = $post['codarah_std'];
				$save['hexanedione'] = $post['hexanedione'];			
				$save['hexanedione_std'] = $post['hexanedione_std'];
				$save['benzena'] = $post['benzena'];			
				$save['benzena_std'] = $post['benzena_std'];
				$save['toluena'] = $post['toluena'];			
				$save['toluena_std'] = $post['toluena_std'];
				$save['xilene'] = $post['xilene'];			
				$save['xilene_std'] = $post['xilene_std'];
				$save['golongan_darah'] = $post['golongan_darah'];	
				$save['penanda_tumor'] = $post['penanda_tumor'];			
				$save['penanda_tumor_std'] = $post['penanda_tumor_std'];	
				$save['feses'] = $post['feses'];			
				$save['feses_std'] = $post['feses_std'];	
				$save['btx'] = $post['btx'];			
				$save['btx_std'] = $post['btx_std'];
				$save['kultur_feses'] = $post['kultur_feses'];			
				$save['kultur_feses_std'] = $post['kultur_feses_std'];
				$save['rontgen'] = $post['rontgen'];	
				$save['drug_test'] = $post['drug_test'];	
				$save['drug_test_std'] = $post['drug_test_std'];	
				$save['imunologi'] = $post['imunologi'];	
				$save['imunologi_std'] = $post['imunologi_std'];
				$save['imunoserologi'] = $post['imunoserologi'];	
				$save['imunoserologi_std'] = $post['imunoserologi_std'];	
				$save['kehamilan'] = $post['kehamilan'];	
				$save['kehamilan_std'] = $post['kehamilan_std'];	
				$save['rectal_swab'] = $post['rectal'];	
				$save['rectal_swab_std'] = $post['rectal_std'];	
				$save['widal'] = $post['widal'];	
				$save['widal_std'] = $post['widal_std'];	
				$save['audiometri'] = $post['audiometri'];			
				$save['spirometri'] = $post['spirometri'];			
				$save['ekg'] = $post['ekg'];
				$save['ilo'] = $post['ilo'];
				$save['iva'] = $post['iva'];			
				$save['alcohol_breath'] = $post['alcohol_breath'];
				$save['romberg'] = $post['romberg'];
				$save['usg_mammae'] = $post['usg_mammae'];
				$save['usg_abdomen'] = $post['usg_abdomen'];
				$save['treadmill'] = $post['treadmill'];			
				$save['pap_smear'] = $post['pap_smear'];			
				$save['fitness_test'] = $post['fitness'];			
				$save['paket'] = $post['paket'];			
				$save['kesimpulan'] = $post['kesimpulan'];			
				$save['anjuran'] = $post['anjuran'];			
				$save['diagnosa'] = $post['diagnosa'];			
				$save['kategori'] = $post['kategori'];			
		$res = $this->db->insert('report_excel', $save);
	}
}