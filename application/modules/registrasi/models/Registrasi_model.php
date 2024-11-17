<?php
class Registrasi_model extends CI_Model {       
	function __construct(){            
	  	parent::__construct();
		$this->user_id =isset($this->session->get_userdata()['user_details'][0]->id)?$this->session->get_userdata()['user_details'][0]->users_id:'1';
	}
	
	function add($post){
		$save = array();
		
	}
	
	function gen_no_antrian_medcheck($idPasien) {
		
		$res1 = $this->db->query("select id_medcheck_perusahaan from trx_pelayanan where id = ".$idPasien.";")->row_array();
		$res2 = $this->db->query("select max(no_medcheck) as no_medcheck from trx_pelayanan where id_medcheck_perusahaan = ".$res1['id_medcheck_perusahaan']." ;")->row_array();
		if ($res2['no_medcheck']  === NULL)
		{
			$this->db->query("update trx_pelayanan set no_medcheck = 1 where id = ".$idPasien.";");
		} else {
			$this->db->query("update trx_pelayanan set no_medcheck = ".$res2['no_medcheck']."+1 where id = ".$idPasien.";");
		}
	}
	
	 function importData($data) {
			
            //$res = $this->db->insert_batch('trx_pelayanan',$data);
			
			$i=0;
			foreach ((Array)$data as $key => $value) {
        $original_date = $data[$i]['tanggal_lahir'];
		$timestamp = strtotime($original_date);
		$new_date = date("Y-m-d", $timestamp);
		$res1 = $this->db->query("select id from master_pasien where nama_lengkap = '".str_replace("'","\'",$data[$i]['nama_lengkap'])."' and tanggal_lahir = '".$new_date."' limit 1;")->row_array();
		$res2 = $this->db->query("select count(0) + 1 as jumlah from trx_pelayanan where id_medcheck_perusahaan = ".$data[$i]['id_medcheck_perusahaan']." ;")->row_array();
		
		if ($res1['id']  === NULL)
		{
$saveMP = array();
		$saveMP['created_dt'] = date('Y-m-d H:i:s');
		$saveMP['updated_dt'] = date('Y-m-d H:i:s');
		$saveMP['nama_pt'] = $data[$i]['nama_perusahaan'];
		$saveMP['nama_lengkap'] = $data[$i]['nama_lengkap'];
		$saveMP['jenis_kelamin'] = $data[$i]['jenis_kelamin'];	
		$saveMP['tanggal_lahir'] = $new_date;
		$saveMP['jenis_identitas'] = "NIK";
		$saveMP['no_identitas'] = $data[$i]['nik'];
		$saveMP['email'] = $data[$i]['email'];	
		$saveMP['bagian'] = $data[$i]['bagian'];
		$saveMP['grup'] = $data[$i]['grup'];
		$saveMP['status'] = "ACTIVE";		
		$res = $this->db->insert('master_pasien', $saveMP);
		$last_idsaveMP = $this->db->insert_id();
		$id_pasien = $last_idsaveMP;
		
		$res4 = $this->db->query("select email from master_pasien where email = '".$data[$i]['email']."';")->row_array();
	
	if (!empty($res4['email']))
	{
		$email = $res4['email'];
	} else {
		$email = $id_pasien.''."@email.com";
	}
		$save2 = array();
		$save2['user_id'] = "1";
		$save2['status'] = "active";
		$save2['is_deleted'] = "0";
		$save2['name'] = $data[$i]['nama_lengkap'];
		$original_string = $data[$i]['tanggal_lahir'];
		$timestamp1 = strtotime($original_string);
		$new_date1 = date("dmY", $timestamp1);
		//print_r($new_date1);die;
		$password = password_hash($new_date1, PASSWORD_DEFAULT);
		$save2['password'] = $password;
		$save2['email'] = $email;
		$save2['profile_pic'] = "user.png";
		$save2['user_type'] = "Pasien";
		$save2['id_pasien'] = $id_pasien;
		$res = $this->db->insert('users', $save2);
	
		
		} else {
			$id_pasien = $res1['id'];
		}
		
		
		$save = array();
		$save['created_date'] = date('Y-m-d H:i:s');
		$save['modified_date'] = date('Y-m-d H:i:s');
		$save['created_by'] =  1;
		$save['modified_by'] =  1;
		$save['status'] = 'Active';
		//$save['no_medcheck'] = $res2['jumlah'];
		$save['no_medcheck'] = null;
		$save['id_pasien'] = $id_pasien;
		$save['nama_lengkap'] = $data[$i]['nama_lengkap'];
		$save['tanggal_lahir'] = $new_date;
		$save['nama_perusahaan'] = $data[$i]['nama_perusahaan'];
		$save['jenis_pelayanan'] = $data[$i]['jenis_pelayanan'];
		$save['nama_paket'] = $data[$i]['nama_paket'];
		$save['id_medcheck_perusahaan'] = $data[$i]['id_medcheck_perusahaan'];
		$save['digital_xray'] =  'rontgen.png';
		
		$res = $this->db->insert('trx_pelayanan', $save);
		$last_id = $this->db->insert_id();	
		
		$q_fisik = "from master_pertanyaan";
		if (!empty($data[$i]['id_pertanyaan']) && !is_null($data[$i]['id_pertanyaan'])) {
		    $q_fisik = "from master_pertanyaan where id not in (".$data[$i]['id_pertanyaan'].")";
		}
		
		$res = $this->db->query("insert into trx_medcheck_detail
								 select null,now(),1,now(),1,'ACTIVE',".$last_id.",id,default_jawaban,'TIDAK' ".$q_fisik.";");
								 
								 $res3 = $this->db->query("select id, harga_paket from master_paket_medcheck_header where nama_paket = '".$data[$i]['nama_paket']."';")->row_array();
								 if (!empty($res3['id']))
		{
								 if ($data[$i]['jenis_kelamin'] == 'PRIA')
								 {
								 $res = $this->db->query("insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',".$last_id.",null,c.nama_pelayanan,c.nama_pemeriksaan,c.nilai_min,c.nilai_max,c.nilai_text,c.id_satuan,null 
								from master_paket_medcheck_header a 
								left join master_paket_medcheck_detail b on (a.id = b.id_header)
								left join master_pemeriksaan c on (b.id_pemeriksaan = c.id)
								where a.id = ".$res3['id'].";");
								 } else 
								 {
									  $res = $this->db->query("insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',".$last_id.",null,c.nama_pelayanan,c.nama_pemeriksaan,c.nilai_min_wanita,c.nilai_max_wanita,c.nilai_text_wanita,c.id_satuan,null 
								from master_paket_medcheck_header a 
								left join master_paket_medcheck_detail b on (a.id = b.id_header)
								left join master_pemeriksaan c on (b.id_pemeriksaan = c.id)
								where a.id = ".$res3['id'].";");
								 }
								
								$save = array();
								$save['status'] = 'Active';
								$save['id_pelayanan'] = $last_id;
								$save['id_paket_lab'] = $res3['id'];
								$save['nilai_tagihan'] = $res3['harga_paket'];
								$save['jenis_tagihan'] = 'PAKET LAB';
								$res = $this->db->insert('trx_tagihan', $save);
		
		}

		$array_trxmp = $this->db->query("select * from trx_medcheck_perusahaan where id = ".$data[$i]['id_medcheck_perusahaan'].";")->row_array();
		$res = $this->db->query("insert into trx_radiologi (created_by, modified_by, status, id_pelayanan, status_pemeriksaan, nama_pemeriksaan, hasil_pemeriksaan, catatan, nama_dokter) 
		values ('".$this->user_id."','".$this->user_id."','ACTIVE',".$last_id.", 'YA', 'COR(JANTUNG)', 'CTR < 0,5', 'DBN', '".$array_trxmp['nama_dokter_rontgen']."');");				

		$res = $this->db->query("insert into trx_radiologi (created_by, modified_by, status, id_pelayanan, status_pemeriksaan, nama_pemeriksaan, hasil_pemeriksaan, catatan, nama_dokter) 
		values ('".$this->user_id."','".$this->user_id."','ACTIVE',".$last_id.", 'YA', 'PULMO(PARU)', 'Corakan Pulmo Tanpa Konsolidasi', 'DBN', '".$array_trxmp['nama_dokter_rontgen']."');");				

		$res = $this->db->query("insert into trx_radiologi (created_by, modified_by, status, id_pelayanan, status_pemeriksaan, nama_pemeriksaan, hasil_pemeriksaan, catatan, nama_dokter) 
		values ('".$this->user_id."','".$this->user_id."','ACTIVE',".$last_id.", 'YA', 'DIAFRAGMA', 'Sinus dan Diafragma Dalam Batas Normal', 'DBN', '".$array_trxmp['nama_dokter_rontgen']."');");				

		$res = $this->db->query("insert into trx_radiologi (created_by, modified_by, status, id_pelayanan, status_pemeriksaan, nama_pemeriksaan, hasil_pemeriksaan, catatan, nama_dokter) 
		values ('".$this->user_id."','".$this->user_id."','ACTIVE',".$last_id.", 'YA', 'KESAN', 'Dalam Batas Normal', 'DBN', '".$array_trxmp['nama_dokter_rontgen']."');");		
		
		$res = $this->db->query("insert into trx_resume (created_by, modified_by, status, id_pelayanan, jenis_resume, hasil_resume, flag_generate, nama_dokter) 
		values ('".$this->user_id."','".$this->user_id."','ACTIVE',".$last_id.", 'ANJURAN', 'Lakukan olahraga secara teratur', 'NO', '".$array_trxmp['nama_dokter_resume']."');");
		
		$res = $this->db->query("insert into trx_resume (created_by, modified_by, status, id_pelayanan, jenis_resume, hasil_resume, flag_generate, nama_dokter) 
		values ('".$this->user_id."','".$this->user_id."','ACTIVE',".$last_id.", 'ANJURAN', 'Istirahat yang cukup', 'NO', '".$array_trxmp['nama_dokter_resume']."');");

		$i++;		 
                }
				
				
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
      
        }
		
		function get_data_bmi($id){
		
		$res = $this->db->query("select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.01 THEN 'Obese'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 27.00 THEN 'Overweight'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.51 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 25.00 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 17.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 18.50 THEN 'Underweight'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 17 THEN ' Very Underweight'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = ".$id."")->row_array();
		return $res;
	}
	
	function get_data_pelayanan(){
		
		$res = $this->db->query("select a.id, a.nama_lengkap, a.status, a.jenis_pelayanan , a.created_date, a.nama_perusahaan
								 from trx_pelayanan a 
								 left join master_pasien b on (a.id_pasien = b.id) where a.jenis_pelayanan = 'Medical Check Up Tahunan' order by 1 desc")->result_array();
		return $res;
	}
	
	function get_data_pelayanan_by_search($nama, $tanggal_lahir,$nama_pt){
	    
	    if ($nama <> ''){
			$query_nama = "b.nama_lengkap like '%".$nama."%'";
		} 
		if ($nama_pt <> ''){
			$query_pt = "b.nama_pt = '".$nama_pt."'";
		} 
		if ($tanggal_lahir <> ''){
			$query_tanggal = "b.tanggal_lahir  ='".$tanggal_lahir."'";
		} 

		if ($nama <> '' and $nama_pt <>''){
			$query_and1 = "and";
		}

		if (($nama  <> '' or $nama_pt <> '')  and $tanggal_lahir <>''){
			$query_and2 = "and";
		}
		
		$res = $this->db->query("select a.id, a.nama_lengkap, a.status, a.jenis_pelayanan , a.created_date, a.nama_perusahaan
								 from trx_pelayanan a 
								 left join master_pasien b on (a.id_pasien = b.id) 
								 where a.jenis_pelayanan = 'Medical Check Up Tahunan' and 
								 ".$query_nama." ".$query_and1." ".$query_pt." ".$query_and2." ".$query_tanggal."
								 order by 1 desc")->result_array();
		return $res;
	}
	
	function get_data_detail_pasien($id){
		
		$res = $this->db->query("select a.id, a.nama_lengkap, a.id_pasien, a.status, a.jenis_pelayanan , a.created_date, a.nama_perusahaan, a.no_medcheck, a.tanggal_pemeriksaan, a.tanggal_lahir, 
								 b.no_identitas, b.jenis_kelamin, b.bagian, b.grup, a.berat_badan, a.tinggi_badan, a.tekanan_darah, a.denyut_nadi, a.nilai_respirasi, b.picture 
								 from trx_pelayanan a 
								 left join master_pasien b on (a.id_pasien = b.id) where a.id = ".$id."")->row_array();
		return $res;
	}
	
	function get_data_tanggal_mulai_medcheck($id){
		
		$res = $this->db->query("select tanggal_mulai, nama_dokter_rontgen,nama_dokter_penanggung_jawab from trx_medcheck_perusahaan where id in 
								(SELECT id_medcheck_perusahaan FROM trx_pelayanan where id = ".$id.")")->row_array();
		return $res;
	}
	
	function get_data_pelayanan_perusahaan(){
		
		
		
		$res = $this->db->query("select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck 
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) ")->result_array();
		return $res;
	}

	function get_data_pelayanan_perusahaan_new_by_search($nama_pt, $tanggal_medcheck){
		if ($nama_pt <> ''){
			$query_pt = "b.nama_perusahaan = '".$nama_pt."'";
		} 
		if ($tanggal_medcheck <> ''){
			$query_tanggal = "year(a.tanggal_mulai) = '".$tanggal_medcheck."'";
		} 

		if ($nama_pt <> '' and $tanggal_medcheck <>''){
			$query_and1 = "and";
		}


		
		
		$res = $this->db->query("select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
								 where ".$query_pt." ".$query_and1." ".$query_tanggal." 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck")->result_array();
		return $res;
	}
	
	function get_data_pelayanan_perusahaan_new(){
		
		
		
		$res = $this->db->query("select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck")->result_array();
		return $res;
	}
	
	function get_data_pelayanan_perusahaan_new_per_perusahaan($idPerusahaan){
		
		
		
		$res = $this->db->query("select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
									where b.id = ".$idPerusahaan."
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck")->result_array();
		return $res;
	}
	
	function get_data_detail_kategori_medcheck($id){
		
		$res = $this->db->query("SELECT  a.nama_lengkap, b.hasil_resume, c.bagian, c.no_identitas, c.jenis_identitas from trx_pelayanan a
									left join master_pasien c on (a.id_pasien = c.id)
									left join trx_resume b on (a.id = b.id_pelayanan)
										where a.id_medcheck_perusahaan = ".$id."
											and b.jenis_resume = 'KATEGORI';")->result_array(); 
										
		return $res;
	}
	function get_data_detail_kategori_medcheck_klik($id, $hasilresume){
		
		$res = $this->db->query("SELECT  a.nama_lengkap, b.hasil_resume, c.bagian, c.no_identitas, c.jenis_identitas from trx_pelayanan a
		                            left join master_pasien c on (a.id_pasien = c.id)
									left join trx_resume b on (a.id = b.id_pelayanan)
										where a.id_medcheck_perusahaan = ".$id."
											and b.jenis_resume = 'KATEGORI' and b.hasil_resume = '".$hasilresume."';")->result_array(); 
										
		return $res;
	}
	function get_data_detail_kategori_medcheck_pertahun($id){
		
		$res = $this->db->query("SELECT  a.nama_lengkap, b.hasil_resume, c.bagian, c.no_identitas, c.jenis_identitas from trx_pelayanan a
									left join master_pasien c on (a.id_pasien = c.id)
									left join trx_resume b on (a.id = b.id_pelayanan)
										where a.id_medcheck_perusahaan IN 
										(SELECT id FROM trx_medcheck_perusahaan WHERE id_perusahaan = 
		                                (SELECT id_perusahaan FROM trx_medcheck_perusahaan WHERE id = ".$id."))
											and b.jenis_resume = 'KATEGORI';")->result_array(); 
										
		return $res;
	}
	
	function get_data_detail_diagnosa_per_bagian($id){
		
		$res = $this->db->query("SELECT  c.bagian , b.hasil_resume, count(0) as total
									from trx_pelayanan a
										left join master_pasien c on (a.id_pasien = c.id)
											left join trx_resume b on (a.id = b.id_pelayanan)
												where a.id_medcheck_perusahaan = ".$id."
													and b.jenis_resume = 'DIAGNOSA'
														group by c.bagian , b.hasil_resume
															order by total desc;")->result_array(); 
										
		return $res;
	}
	function get_data_detail_diagnosa_per_bagian_klik($id, $hasilresume){
		
		$res = $this->db->query("SELECT  a.nama_lengkap , b.hasil_resume, c.bagian, c.no_identitas, c.jenis_identitas
									from trx_pelayanan a
										left join master_pasien c on (a.id_pasien = c.id)
											left join trx_resume b on (a.id = b.id_pelayanan)
												where a.id_medcheck_perusahaan = ".$id."
													and b.jenis_resume = 'DIAGNOSA' and b.hasil_resume = '".$hasilresume."';")->result_array(); 
										
		return $res;
	}
	function get_data_detail_diagnosa_per_bagian_pertahun($id){
		
		$res = $this->db->query("SELECT  c.bagian , b.hasil_resume, count(0) as total
									from trx_pelayanan a
										left join master_pasien c on (a.id_pasien = c.id)
											left join trx_resume b on (a.id = b.id_pelayanan)
												where a.id_medcheck_perusahaan IN 
												(SELECT id FROM trx_medcheck_perusahaan WHERE id_perusahaan = 
		                                        (SELECT id_perusahaan FROM trx_medcheck_perusahaan WHERE id = ".$id."))
													and b.jenis_resume = 'DIAGNOSA'
														group by c.bagian , b.hasil_resume
															order by total desc;")->result_array(); 
										
		return $res;
	}
	
	function get_data_detail_temuan_faringitis($id){
		
		$res = $this->db->query("SELECT  a.nama_lengkap, c.bagian
									from trx_pelayanan a
										left join master_pasien c on (a.id_pasien = c.id)
											left join trx_resume b on (a.id = b.id_pelayanan)
												where a.id_medcheck_perusahaan = ".$id."
													and b.jenis_resume = 'DIAGNOSA' and b.hasil_resume = 'Faringitis'
															order by c.bagian asc;")->result_array(); 
										
		return $res;
	}
	
	function get_data_detail_jenis_kelamin($id){
		
		$res = $this->db->query("SELECT  a.nama_lengkap, c.jenis_kelamin, c.bagian, c.no_identitas, c.jenis_identitas
									from trx_pelayanan a
										left join master_pasien c on (a.id_pasien = c.id)
												where a.id_medcheck_perusahaan = ".$id."
															order by c.jenis_kelamin asc;")->result_array(); 
										
		return $res;
	}
	
	function get_data_detail_jenis_kelamin_klik($id, $jeniskelamin){
		
		$res = $this->db->query("SELECT  a.nama_lengkap, c.jenis_kelamin, c.bagian, c.no_identitas, c.jenis_identitas
									from trx_pelayanan a
										left join master_pasien c on (a.id_pasien = c.id)
												where a.id_medcheck_perusahaan = ".$id." and c.jenis_kelamin = '".$jeniskelamin."' order by c.jenis_kelamin asc;")->result_array(); 
										
		return $res;
	}
	
	function get_data_detail_jenis_kelamin_pertahun($id){
		
		$res = $this->db->query("SELECT  a.nama_lengkap, c.jenis_kelamin, c.no_identitas, c.jenis_identitas
									from trx_pelayanan a
										left join master_pasien c on (a.id_pasien = c.id)
												where a.id_medcheck_perusahaan IN 
												(SELECT id FROM trx_medcheck_perusahaan WHERE id_perusahaan = 
		                                        (SELECT id_perusahaan FROM trx_medcheck_perusahaan WHERE id = ".$id."))
															order by c.jenis_kelamin asc;")->result_array(); 
										
		return $res;
	}
	
	function get_data_detail_penunjang_medcheck($id){
		
		$res = $this->db->query("SELECT a.nama_lengkap, b.jenis_pemeriksaan from trx_pelayanan a
									inner join trx_penunjang b on (a.id = b.id_pelayanan)
										where a.id_medcheck_perusahaan = ".$id.";")->result_array(); 
										
		return $res;
	}
	function get_data_detail_penunjang_medcheck_klik($id, $jenispemeriksaan){
		
		$res = $this->db->query("SELECT a.nama_lengkap, b.jenis_pemeriksaan, b.hasil_pemeriksaan, c.bagian, c.no_identitas, c.jenis_identitas from trx_pelayanan a
									inner join trx_penunjang b on (a.id = b.id_pelayanan)
									left join master_pasien c on (a.id_pasien = c.id)
										where a.id_medcheck_perusahaan = ".$id." 
											and b.jenis_pemeriksaan = '".$jenispemeriksaan."';")->result_array(); 
										
		return $res;
	}
	function get_data_detail_penunjang_medcheck_pertahun($id){
		
		$res = $this->db->query("SELECT a.nama_lengkap, b.jenis_pemeriksaan from trx_pelayanan a
									inner join trx_penunjang b on (a.id = b.id_pelayanan)
										where a.id_medcheck_perusahaan IN 
										(SELECT id FROM trx_medcheck_perusahaan WHERE id_perusahaan = 
		                                (SELECT id_perusahaan FROM trx_medcheck_perusahaan WHERE id = ".$id."));")->result_array(); 
										
		return $res;
	}
	function get_data_detail_penunjang_all_medcheck_klik($id, $jenis, $hasil){
		
		$res = $this->db->query("SELECT a.nama_lengkap, b.jenis_pemeriksaan, b.hasil_pemeriksaan, c.bagian, c.no_identitas, c.jenis_identitas from trx_pelayanan a
									inner join trx_penunjang b on (a.id = b.id_pelayanan)
									left join master_pasien c on (a.id_pasien = c.id)
										where a.id_medcheck_perusahaan = ".$id." 
											and b.jenis_pemeriksaan = '".$jenis."' 
											and b.hasil_pemeriksaan = '".$hasil."';")->result_array(); 
										
		return $res;
	}
	function get_data_detail_penunjang_medcheck_klik_pertahun($id, $jenispemeriksaan){
		
		$res = $this->db->query("SELECT a.nama_lengkap, b.jenis_pemeriksaan, b.hasil_pemeriksaan, c.bagian, c.no_identitas, c.jenis_identitas from trx_pelayanan a
									inner join trx_penunjang b on (a.id = b.id_pelayanan)
									left join master_pasien c on (a.id_pasien = c.id)
										where a.id_medcheck_perusahaan IN  
										(SELECT id FROM trx_medcheck_perusahaan WHERE id_perusahaan = 
		                                (SELECT id_perusahaan FROM trx_medcheck_perusahaan WHERE id = ".$id.")) 
											and b.jenis_pemeriksaan = '".$jenispemeriksaan."';")->result_array(); 
										
		return $res;
	}
	
	function get_data_detail_pelayanan_perusahaan($id){
		
		$res = $this->db->query("select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = ".$id."
								 order by -c.no_medcheck desc")->result_array();
		return $res;
	}
	
	function get_data_detail_pelayanan_perusahaan_param($id, $param){
	    $option = "";
	    if (!empty($param)) { $option = " and c.".$param." != 1 "; }
		$res = $this->db->query("select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = ".$id.$option."
								 order by -c.no_medcheck desc")->result_array();
		return $res;
	}
	
	function get_data_header_pelayanan_perusahaan($id){
		
		$res = $this->db->query("select b.nama_perusahaan, a.id, a.jenis_medcheck, a.id_perusahaan 
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 where  a.id = ".$id."")->row_array();
		return $res;
	}
	
	function get_data_header_pelayanan_perusahaan_medcheck($id){
		
		$res = $this->db->query("select a.id, a.id_perusahaan, a.tanggal_mulai 
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 where  c.id = ".$id."")->row_array();
		return $res;
	}
	
	function get_data_detail_invoice_pasien_per_perusahaan($id){
		
		$res = $this->db->query("select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang, c.nama_paket, d.nilai_tagihan
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join trx_tagihan d on (c.id = d.id_pelayanan)
								 where  c.id_medcheck_perusahaan = ".$id." and d.jenis_tagihan = 'PAKET LAB'")->result_array();
		return $res;
	}
	
	function get_data_detail_invoice_pasien_per_perusahaan_new($id){
		
		$res = $this->db->query("select c.nama_paket,d.nilai_tagihan, concat(c.nama_paket,'          ' ,concat(count(0),' Peserta')) as keterangan ,concat(count(0),' Peserta') as jumlah_peserta , sum(d.nilai_tagihan) as total_tagihan
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join trx_tagihan d on (c.id = d.id_pelayanan)
								 where  c.id_medcheck_perusahaan = ".$id." and d.jenis_tagihan = 'PAKET LAB'
                                 group by nama_paket, nilai_tagihan")->result_array();
		return $res;
	}
	
	function get_data_detail_invoice_pasien_per_perusahaan_tambahan($id){
		
		$res = $this->db->query("select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang, c.nama_paket, d.nilai_tagihan, e.nama_pemeriksaan, e.nama_pelayanan
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join trx_tagihan d on (c.id = d.id_pelayanan)
								 left join master_pemeriksaan e on (d.id_lab = e.id)
								 where  c.id_medcheck_perusahaan = ".$id." and d.jenis_tagihan = 'TAMBAHAN PEMERIKSAAN'")->result_array();
		return $res;
	}
	
	function get_data_detail_medcheck_per_pasien($id){
		
		$res = $this->db->query("select a.id, a.nama_perusahaan, a.created_date, a.jenis_pelayanan, a.nama_lengkap, a.status
								 from trx_pelayanan a
								 where  a.id_pasien = ".$id." and a.jenis_pelayanan like '%Medical%'")->result_array();
		return $res;
	}
	
	function get_data_detail_rawat_jalan_per_pasien($id){
		
		$res = $this->db->query("select a.id, a.nama_perusahaan, a.created_date, a.jenis_pelayanan, a.nama_lengkap, a.status
								 from trx_pelayanan a
								 where  a.id_pasien = ".$id." and a.jenis_pelayanan like '%Rawat%'")->result_array();
		return $res;
	}
	
	function data_medcheck_perusahaan_per_perusahaan($id){
		
		
		
		$res = $this->db->query("select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck 
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) where a.id = ".$id." limit 1 ")->row_array();
		return $res;
	}
	function data_medcheck_perusahaan_per_perusahaan_graph($id){
		
		
		
		$res = $this->db->query("select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, a.id_perusahaan 
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) where a.id = ".$id." limit 1 ")->row_array();
		return $res;
	}
	
	function get_data_summary_invoice_perusahaan($id){
		
		
		
		$res = $this->db->query("select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck , b.alamat_satu, b.alamat_dua, b.no_telp, a.no_invoice
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) where a.id = ".$id." limit 1 ")->row_array();
		return $res;
	}
	
	function get_data_total_tagihan($id){
		
		
		
		$res = $this->db->query("SELECT sum(c.nilai_tagihan) as total_tagihan FROM trx_medcheck_perusahaan a
									left join trx_pelayanan b on (a.id = b.id_medcheck_perusahaan)
										left join trx_tagihan c on (b.id = c.id_pelayanan)
											where c.jenis_tagihan = 'PAKET LAB' and a.id = ".$id." limit 1 ")->row_array();
		return $res;
	}
	
	function get_data_total_tagihan_tambahan($id){
		
		
		
		$res = $this->db->query("SELECT sum(c.nilai_tagihan) as total_tagihan FROM trx_medcheck_perusahaan a
									left join trx_pelayanan b on (a.id = b.id_medcheck_perusahaan)
										left join trx_tagihan c on (b.id = c.id_pelayanan)
											where c.jenis_tagihan = 'TAMBAHAN PEMERIKSAAN' and a.id = ".$id." limit 1 ")->row_array();
		return $res;
	}
	
	
	
	function get_data_pelayanan_rawat_jalan(){
		
		
		
		$res = $this->db->query("select a.id, a.nama_lengkap, a.status, a.jenis_pelayanan , a.created_date, a.nama_perusahaan
								 from trx_pelayanan a 
								 left join master_pasien b on (a.id_pasien = b.id) where a.jenis_pelayanan = 'Rawat Jalan'")->result_array();
		return $res;
	}
	
	function get_data_pasien_new(){
		
		$res = $this->db->query("select * from master_pasien order by id desc;")->result_array();
		return $res;
	}

	function get_data_pasien_by_search($nama, $tanggal_lahir,$nama_pt){
		if ($nama <> ''){
			$query_nama = "nama_lengkap like '%".$nama."%'";
		} 
		if ($nama_pt <> ''){
			$query_pt = "nama_pt = '".$nama_pt."'";
		} 
		if ($tanggal_lahir <> ''){
			$query_tanggal = "tanggal_lahir  ='".$tanggal_lahir."'";
		} 

		if ($nama <> '' and $nama_pt <>''){
			$query_and1 = "and";
		}

		if (($nama  <> '' or $nama_pt <> '')  and $tanggal_lahir <>''){
			$query_and2 = "and";
		}


		$res = $this->db->query("select * from master_pasien where ".$query_nama." ".$query_and1." ".$query_pt." ".$query_and2." ".$query_tanggal.";")->result_array();
		return $res;
		
	}
	
	function get_data_jenis_kelamin($id){
		
		$res = $this->db->query("select b.jenis_kelamin, count(0) jumlah from trx_pelayanan a 
									left join master_pasien b on (a.id_pasien = b.id) 
										where a.id_medcheck_perusahaan = ".$id." group by b.jenis_kelamin;")->result(); 
		return $res;
	}
	
	function get_data_fit_or_not($id){
		
		$res = $this->db->query("SELECT hasil_resume, count(0) as jumlah FROM trx_resume
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = ".$id.")
											and jenis_resume = 'KATEGORI'	group by hasil_resume;")->result(); 
		return $res;
	}
	
	function get_data_diagnosa_graph($id){
		
		$res = $this->db->query("SELECT hasil_resume, count(0) as jumlah FROM trx_resume
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = ".$id.")
											and jenis_resume = 'DIAGNOSA'	group by hasil_resume;")->result(); 
		return $res;
	}
	
	function get_data_diagnosa_top_ten($id){
		
		$res = $this->db->query("SELECT hasil_resume, count(0) as jumlah FROM trx_resume
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = ".$id.")
											and jenis_resume = 'DIAGNOSA' group by hasil_resume
												order by jumlah desc limit 10;")->result(); 
		return $res;
	}
	
	function get_data_diagnosa_top_ten_table($id){
		
		$res = $this->db->query("SELECT hasil_resume, count(0) as jumlah FROM trx_resume
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = ".$id.")
											and jenis_resume = 'DIAGNOSA' group by hasil_resume
												order by jumlah desc limit 10;")->result_array(); 
		return $res;
	}
	
	function get_data_faringitis_graph($id){
		
		$res = $this->db->query("select b.bagian, count(0) jumlah from trx_pelayanan a 
									left join master_pasien b on (a.id_pasien = b.id)
										left join trx_resume c on (a.id = c.id_pelayanan)
											where a.id_medcheck_perusahaan = ".$id." and c.jenis_resume = 'Diagnosa' and hasil_resume = 'Faringitis'
												group by b.bagian;")->result(); 
		return $res;
	}
	
	function get_data_penunjang_graph($id){
		
		$res = $this->db->query("SELECT jenis_pemeriksaan, count(0) as jumlah FROM trx_penunjang
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = ".$id.")
											group by jenis_pemeriksaan;")->result(); 
		return $res;
	}
	
	function get_data_penunjang_hasil_graph($id, $jenis){
		
		$res = $this->db->query("SELECT hasil_pemeriksaan, count(0) as jumlah FROM trx_penunjang
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = ".$id.") 
										and jenis_pemeriksaan = '".$jenis."' group by hasil_pemeriksaan;")->result(); 
		return $res;
	}
	
	function get_data_id_medcheck_pertahun($id){
		
		$res = $this->db->query("SELECT id, YEAR(tanggal_mulai) as tahun FROM trx_medcheck_perusahaan  
									WHERE id_perusahaan = (SELECT id_perusahaan FROM trx_medcheck_perusahaan 
										WHERE id = ".$id.") ORDER BY tahun, id;")->result(); 
		return $res;
	}
	
	function get_data_jenis_kelamin_pertahun($id){
		
		$res = $this->db->query("SELECT b.jenis_kelamin FROM trx_pelayanan a 
								LEFT JOIN master_pasien b ON (a.id_pasien = b.id) 
								WHERE a.id_medcheck_perusahaan IN 
								(SELECT id FROM trx_medcheck_perusahaan WHERE id_perusahaan = 
		                        (SELECT id_perusahaan FROM trx_medcheck_perusahaan WHERE id = ".$id.")) 
		                        group by b.jenis_kelamin order by b.jenis_kelamin;")->result(); 
		return $res;
	}
	
	function get_data_fit_or_not_pertahun($id){
		
		$res = $this->db->query("SELECT hasil_resume FROM trx_resume WHERE id_pelayanan IN 
		                        (SELECT id FROM trx_pelayanan WHERE id_medcheck_perusahaan IN 
		                        (SELECT id FROM trx_medcheck_perusahaan WHERE id_perusahaan = 
		                        (SELECT id_perusahaan FROM trx_medcheck_perusahaan WHERE id = ".$id."))) 
		                        and jenis_resume = 'KATEGORI' group by hasil_resume order by hasil_resume;")->result(); 
		return $res;
	}
	
	function get_data_diagnosa_graph_pertahun($id){
	    
		$res = $this->db->query("SELECT hasil_resume FROM trx_resume WHERE id_pelayanan IN 
		                        (SELECT id FROM trx_pelayanan WHERE id_medcheck_perusahaan IN 
		                        (SELECT id FROM trx_medcheck_perusahaan WHERE id_perusahaan = 
		                        (SELECT id_perusahaan FROM trx_medcheck_perusahaan WHERE id = ".$id."))) 
		                        and jenis_resume = 'DIAGNOSA' group by hasil_resume order by hasil_resume;")->result(); 									
		return $res;
	}
	
	function get_data_penunjang_graph_pertahun($id){
		
		$res = $this->db->query("SELECT jenis_pemeriksaan FROM trx_penunjang WHERE id_pelayanan IN 
									(SELECT id FROM trx_pelayanan WHERE id_medcheck_perusahaan IN 
    		                        (SELECT id FROM trx_medcheck_perusahaan WHERE id_perusahaan = 
    		                        (SELECT id_perusahaan FROM trx_medcheck_perusahaan WHERE id = ".$id."))) 
									group by jenis_pemeriksaan order by jenis_pemeriksaan;")->result(); 
		return $res;
	}
	
	function get_data_penunjang_hasil_graph_pertahun($id, $jenis){
		
		$res = $this->db->query("SELECT hasil_pemeriksaan, length(hasil_pemeriksaan) as len FROM trx_penunjang WHERE id_pelayanan IN 
									(SELECT id FROM trx_pelayanan WHERE id_medcheck_perusahaan IN 
    		                        (SELECT id FROM trx_medcheck_perusahaan WHERE id_perusahaan = 
    		                        (SELECT id_perusahaan FROM trx_medcheck_perusahaan WHERE id = ".$id."))) 
									and jenis_pemeriksaan = '".$jenis."' group by hasil_pemeriksaan, len order by hasil_pemeriksaan;")->result(); 
		return $res;
	}
	
	function get_data_grafik_per_bagian($id,$diagnosa){
		
		$res = $this->db->query("select b.bagian, count(0) jumlah from trx_pelayanan a 
									left join master_pasien b on (a.id_pasien = b.id)
										left join trx_resume c on (a.id = c.id_pelayanan)
											where a.id_medcheck_perusahaan = ".$id." and c.jenis_resume = 'Diagnosa' and hasil_resume = '".$diagnosa."'
												group by b.bagian;")->result(); 
		return $res;
	}
	
	function get_data_pasien_new_per_pasien($id){
		
		$res = $this->db->query("select * from master_pasien where id = ".$id.";")->result_array();
		return $res;
	}
	
	function get_data_pasien_detail_new($id){
		
		$res = $this->db->query("select * from master_pasien where id = ".$id.";")->row_array();
		return $res;
	}
	
	function get_data_pasien_based_id_pelayanan($id){
		
		$res = $this->db->query("SELECT * FROM trx_pelayanan a 
									left join master_pasien b on (a.id_pasien = b.id)
                                    left join trx_medcheck_perusahaan c on (a.id_medcheck_perusahaan = c.id)
										where a.id  = ".$id.";")->row_array();
		return $res;
	}
	
	function get_data_lahir_pasien($id){
		
		$res = $this->db->query("select tanggal_lahir,concat (TIMESTAMPDIFF( YEAR, tanggal_lahir, now() ) , ' Tahun ',
									TIMESTAMPDIFF( MONTH, tanggal_lahir, now() ) % 12 , ' Bulan ',
										FLOOR( TIMESTAMPDIFF( DAY, tanggal_lahir, now() ) % 30.4375 ) , ' Hari') as jumlah_hari_lahir from trx_pelayanan
											WHERE id = ".$id.";")->row_array();
		return $res;
	}
	
	function get_data_lahir_pasien_hanya_tahun($id){
		
		$res = $this->db->query("select tanggal_lahir,concat (TIMESTAMPDIFF( YEAR, tanggal_lahir, now() ) , ' Tahun ') as jumlah_hari_lahir from trx_pelayanan
											WHERE id = ".$id.";")->row_array();
		return $res;
	}
	
	
	
	function get_users(){
		
		
		$res = $this->db->query("select * from users where email is not null")->result_array();
		return $res;
	}
	
	function get_data_labs($id){
		
		
		$res = $this->db->query("SELECT id,nama_pelayanan,nama_pemeriksaan,hasil_pemeriksaan,nilai_min,nilai_max, nilai_text,nilai_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir , b.name   
							    FROM trx_laboratorium a 
									left join users b on (a.created_by = b.users_id) where id_pelayanan=".$id.";")->result_array();
		return $res;
	}
	
	function get_data_labs_with_condition($id){
		
		
		$res = $this->db->query("SELECT id,nama_pelayanan,nama_pemeriksaan,hasil_pemeriksaan,nilai_min,nilai_max, nilai_text,nilai_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(cast(hasil_pemeriksaan as unsigned) > cast(nilai_min as unsigned) and cast(hasil_pemeriksaan as unsigned) < cast(nilai_max as unsigned),'OK','ERROR')) as hasil_akhir  
							    FROM trx_laboratorium where id_pelayanan=".$id.";")->result_array();
		return $res;
	}
	
	function get_data_labs_for_resume($id){
		
		
		$res = $this->db->query("select * from (SELECT id,nama_pelayanan,nama_pemeriksaan,hasil_pemeriksaan,nilai_min,nilai_max, nilai_text,nilai_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0 and hasil_pemeriksaan+0  < nilai_max+0,'OK','ERROR')) as hasil_akhir  
							    FROM trx_laboratorium where id_pelayanan=".$id.") as hasil_pemeriksaan where hasil_akhir = 'ERROR';")->result_array();
		return $res;
	}
	
	function get_data_radiologi($id){
		
		
		$res = $this->db->query("SELECT a.*, b.name FROM trx_radiologi a 
									left join users b on (a.created_by = b.users_id) 
										where id_pelayanan=".$id.";")->result_array();
		return $res;
	}
	
	function get_data_resume($id){
		
		
		$res = $this->db->query("SELECT a.*, b.name FROM trx_resume a 
									left join users b on (a.created_by = b.users_id) 
										where id_pelayanan=".$id." order  by CASE  WHEN jenis_resume = 'KESIMPULAN' THEN 1  WHEN jenis_resume = 'DIAGNOSA' THEN 2  WHEN jenis_resume = 'ANJURAN' THEN 3  WHEN jenis_resume = 'KATEGORI' THEN 4 WHEN jenis_resume = 'KATEGORI KHUSUS' THEN 5  END ASC;")->result_array();
		return $res;
	}

	function get_data_resume_by_year($id, $year) {
		return $this->db->query("SELECT a.*, b.name FROM trx_resume a 
								 LEFT JOIN users b ON (a.created_by = b.users_id) 
								 WHERE a.id_pelayanan = $id AND YEAR(a.created_date) = $year
								 ORDER BY CASE WHEN jenis_resume = 'KESIMPULAN' THEN 1 
											   WHEN jenis_resume = 'DIAGNOSA' THEN 2 
											   WHEN jenis_resume = 'ANJURAN' THEN 3 
											   WHEN jenis_resume = 'KATEGORI' THEN 4 
											   WHEN jenis_resume = 'KATEGORI KHUSUS' THEN 5 END ASC;")
						->result_array();
	}
	
	

	
	
	function get_data_resume_kesimpulan($id){

		$res = $this->db->query("SELECT * FROM trx_resume where id_pelayanan=".$id." and jenis_resume = 'KESIMPULAN';")->result_array();
		return $res;
	}
	
	function get_data_resume_anjuran($id){

		$res = $this->db->query("SELECT * FROM trx_resume where id_pelayanan=".$id." and jenis_resume = 'ANJURAN';")->result_array();
		return $res;
	}
	
	function get_data_resume_diagnosa($id){

		$res = $this->db->query("SELECT * FROM trx_resume where id_pelayanan=".$id." and jenis_resume = 'DIAGNOSA';")->result_array();
		return $res;
	}
	
	function get_data_resume_kategori($id){

		$res = $this->db->query("SELECT * FROM trx_resume where id_pelayanan=".$id." and jenis_resume = 'KATEGORI';")->result_array();
		return $res;
	}
	
	function get_data_penunjang($id){
		
		
		$res = $this->db->query("SELECT a.*, b.name FROM trx_penunjang a
									left join users b on (a.created_by = b.users_id)  
										where a.id_pelayanan = ".$id.";")->result_array();
		return $res;
	}
	
	function get_data_penunjang_audiometri($id){
		
		
		$res = $this->db->query("SELECT * FROM trx_penunjang where id_pelayanan=".$id." and jenis_pemeriksaan = 'AUDIOMETRI' ;")->result_array();
		return $res;
	}
	
	function get_data_penunjang_ekg($id){
		
		
		$res = $this->db->query("SELECT * FROM trx_penunjang where id_pelayanan=".$id." and jenis_pemeriksaan = 'EKG' ;")->result_array();
		return $res;
	}
	
	function get_data_penunjang_spirometri($id){
		
		
		$res = $this->db->query("SELECT * FROM trx_penunjang where id_pelayanan=".$id." and jenis_pemeriksaan = 'SPIROMETRI' ;")->result_array();
		return $res;
	}
	
	function get_data_penunjang_pap_smear($id){
		
		
		$res = $this->db->query("SELECT * FROM trx_penunjang where id_pelayanan=".$id." and jenis_pemeriksaan = 'PAP SMEAR' ;")->result_array();
		return $res;
	}
	
	function get_data_penunjang_fitness_test($id){
		
		
		$res = $this->db->query("SELECT * FROM trx_penunjang where id_pelayanan=".$id." and jenis_pemeriksaan = 'FITNESS TEST' ;")->result_array();
		return $res;
	}
	
	function get_data_penunjang_usg($id){
		
		
		$res = $this->db->query("SELECT * FROM trx_penunjang where id_pelayanan=".$id." and jenis_pemeriksaan = 'USG' ;")->result_array();
		return $res;
	}
	
	function get_data_penunjang_usg_mammae($id){
		$res = $this->db->query("SELECT * FROM trx_penunjang where id_pelayanan=".$id." and jenis_pemeriksaan = 'USG MAMMAE' ;")->result_array();
		return $res;
	}
	
	function get_data_penunjang_usg_abdomen($id){
		$res = $this->db->query("SELECT * FROM trx_penunjang where id_pelayanan=".$id." and jenis_pemeriksaan = 'USG ABDOMEN' ;")->result_array();
		return $res;
	}
	
	function get_data_penunjang_ilo($id){
		$res = $this->db->query("SELECT * FROM trx_penunjang where id_pelayanan=".$id." and jenis_pemeriksaan = 'RONTGEN ILO' ;")->result_array();
		return $res;
	}
	
	function get_data_penunjang_iva($id){
		$res = $this->db->query("SELECT * FROM trx_penunjang where id_pelayanan=".$id." and jenis_pemeriksaan = 'IVA TEST' ;")->result_array();
		return $res;
	}
	
	function get_data_penunjang_alcohol($id){
		$res = $this->db->query("SELECT * FROM trx_penunjang where id_pelayanan=".$id." and jenis_pemeriksaan = 'ALCOHOL BREATH TEST' ;")->result_array();
		return $res;
	}
	
		function get_data_penunjang_romberg($id){
		$res = $this->db->query("SELECT * FROM trx_penunjang where id_pelayanan=".$id." and jenis_pemeriksaan = 'ROMBERG TEST' ;")->result_array();
		return $res;
	}
	
	function get_data_penunjang_treadmill($id){
		
		
		$res = $this->db->query("SELECT * FROM trx_penunjang where id_pelayanan=".$id." and jenis_pemeriksaan = 'TREADMILL' ;")->result_array();
		return $res;
	}
	
	
	function get_data_pemeriksaan($id){
		
		
		$res = $this->db->query("SELECT * FROM trx_pemeriksaan where id_pelayanan=".$id.";")->result_array();
		return $res;
	}
	
	function get_data_diagnosa($id){
		
		
		$res = $this->db->query("SELECT * FROM trx_diagnosa where id_pelayanan=".$id.";")->result_array();
		return $res;
	}
	
	function get_data_tindakan($id){
		
		
		$res = $this->db->query("SELECT * FROM trx_tindakan where id_pelayanan=".$id.";")->result_array();
		return $res;
	}
	
	function get_data_obat($id){
		
		
		$res = $this->db->query("SELECT a.id, b.nama_obat,a.jumlah_nilai,a.nilai_tagihan FROM trx_tagihan a left join  master_obat b on (a.id_obat = b.id) where a.id_pelayanan=".$id." and a.jenis_tagihan ='OBAT';")->result_array();
		return $res;
	}
	
	function updateUserAjax($id, $field, $value, $user) {
		// Log the function execution to check if it's called more than once
		log_message('debug', 'updateUserAjax called for id: ' . $id . ' with value: ' . $value);
	
		// Step 1: Retrieve the current record's nilai_min and nilai_max
		$query = $this->db->query("SELECT nilai_min, nilai_max, nama_pemeriksaan, id_pelayanan 
								   FROM trx_laboratorium 
								   WHERE id = ".$id.";");
	
		$row = $query->row_array();
	
		// Check if the query returned a row (i.e., the record exists)
		if ($row) {
			// Log the retrieved row for debugging
			log_message('debug', 'Retrieved row for id ' . $id . ': ' . print_r($row, true));
	
			// Step 2: Update the field in trx_laboratorium table
			$data = array(
				$field => $value,
				'created_by' => $user,
				'modified_by' => $user
			);
			$this->db->where('id', $id);
			$this->db->update('trx_laboratorium', $data);
	
			// Step 3: Check if the updated value is out of range (nilai_min and nilai_max)
			if ($value < $row['nilai_min'] || $value > $row['nilai_max']) {
				// Log the condition for inserting into trx_resume
				log_message('debug', 'Value ' . $value . ' is out of range. Inserting into trx_resume.');
	
				// Step 4: Check if there is already a record in trx_resume for the same id_pelayanan
				$resume_query = $this->db->query("SELECT * FROM trx_resume 
												  WHERE id_pelayanan = ".$row['id_pelayanan']." 
												  AND jenis_resume = 'KESIMPULAN' 
												  AND hasil_resume LIKE '%".$value."%'");
	
				// If no such record exists, insert it
				if ($resume_query->num_rows() == 0) {
					// Insert into trx_resume if no record exists
					$this->db->query("
						INSERT INTO trx_resume 
						(created_date, created_by, modified_date, modified_by, status, id_pelayanan, 
						 nama_dokter, jenis_resume, hasil_resume, flag_generate)
						VALUES 
						(NOW(), ".$user.", NOW(), ".$user.", 'ACTIVE', ".$row['id_pelayanan'].", '', 'KESIMPULAN', 
						 '".$row['nama_pemeriksaan']." bernilai " . $value . "', 'NO');
					");
					log_message('debug', 'Inserted into trx_resume for id_pelayanan: ' . $row['id_pelayanan']);
				} else {
					log_message('debug', 'Record already exists in trx_resume for id_pelayanan: ' . $row['id_pelayanan']);
				}
			} else {
				// Log when the value is within range
				log_message('debug', 'Value ' . $value . ' is within range. No insert into trx_resume.');
			}
		} else {
			// Log if no row was found
			log_message('debug', 'No record found for id: ' . $id);
		}
	}
	
	
	
	
	function get_data_pasien($idPasien){
		$res = $this->db->query("SELECT a.*, b.name FROM trx_pelayanan a left join users b on (a.created_by = b.users_id) where id = ".$idPasien."")->row_array();
		return $res;
	}
	
	function get_data_cor($id_transaksi){
		$res = $this->db->query("SELECT * FROM trx_radiologi where id_pelayanan = ".$id_transaksi." and nama_pemeriksaan = 'COR(JANTUNG)' limit 1;")->row_array();
		return $res;
	}
	
	function get_data_pulmo($id_transaksi){
		$res = $this->db->query("SELECT * FROM trx_radiologi where id_pelayanan = ".$id_transaksi." and nama_pemeriksaan = 'PULMO(PARU)' limit 1;")->row_array();
		return $res;
	}
	
	function get_data_diafragma($id_transaksi){
		$res = $this->db->query("SELECT * FROM trx_radiologi where id_pelayanan = ".$id_transaksi." and nama_pemeriksaan = 'DIAFRAGMA' limit 1;")->row_array();
		return $res;
	}
	
	function get_data_kesan($id_transaksi){
		$res = $this->db->query("SELECT * FROM trx_radiologi where id_pelayanan = ".$id_transaksi." and nama_pemeriksaan = 'KESAN' limit 1;")->row_array();
		return $res;
	}

	function delete_auto_generate_resume($id_transaksi){
	 $this->db->query("DELETE FROM trx_resume	WHERE 	id_pelayanan = ".$id_transaksi."  and flag_generate = 'YES'; ");
	}
	
	function get_pertanyaan_fisik(){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, a.kategori_pertanyaan 
								 FROM  master_pertanyaan a WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' order by a.kategori_pertanyaan asc, a.nama_pertanyaan asc")->result_array();
		return $res;
	}
	
	function get_pertanyaan_fisik_check($id_transaksi){
		$res = $this->db->query("SELECT a.id FROM  master_pertanyaan a left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
		                        WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi = ".$id_transaksi)->result_array();
        $arr = array_column($res,"id");
		return $arr;
	}
	
	function get_pertanyaan_fisik_all($id_transaksi){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi = ".$id_transaksi." order by a.urutan asc")->result_array();
		return $res;
	}

	function get_pertanyaan_fisik_all_for_resume($id_transaksi){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa, a.urutan
		FROM  master_pertanyaan a 
	   left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
	   WHERE a.status = 'ACTIVE' and ((a.kategori_pertanyaan like '%FISIK%' and a.kategori_pertanyaan not in ('FISIK - ANAMNESA')) or a.nama_pertanyaan in ('KELUHAN', 'KELUHAN SAAT BEKERJA'))
	   and  id_transaksi = ".$id_transaksi." order by a.urutan asc")->result_array();
		return $res;
	}
	
	function get_pertanyaan_fisik_all_terisi($id_transaksi){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and nama_pertanyaan not like '%VISUS%' and id_transaksi = ".$id_transaksi." and b.hasil <> '' and status_periksa ='YA' order by a.urutan asc")->result_array();
		return $res;
	}
	
	function get_pertanyaan_fisik_mata_visus($id_transaksi){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan = 'FISIK - MATA' and nama_pertanyaan like '%VISUS%' and id_transaksi = ".$id_transaksi." order by a.urutan asc")->result_array();
		return $res;
	}
	
	function get_pertanyaan_fisik_anamsia($id_transaksi){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa, c.name
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								left join users c on (b.created_by =c.users_id)
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan = 'FISIK - ANAMNESA' and id_transaksi = ".$id_transaksi." order by a.urutan asc")->result_array();
		return $res;
	}

	function get_pertanyaan_fisik_mata($id_transaksi){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan = 'FISIK - MATA' and id_transaksi = ".$id_transaksi." order by a.urutan asc")->result_array();
		return $res;
	}
	
	function get_pertanyaan_fisik_perut($id_transaksi){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan = 'FISIK - PERUT' and id_transaksi = ".$id_transaksi." order by a.urutan asc")->result_array();
		return $res;
	}
	
	function get_pertanyaan_fisik_leher($id_transaksi){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan = 'FISIK - LEHER' and id_transaksi = ".$id_transaksi." order by a.urutan asc")->result_array();
		return $res;
	}
	
	function get_pertanyaan_fisik_tenggorokan($id_transaksi){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan = 'FISIK - TENGGOROKAN' and id_transaksi = ".$id_transaksi." order by a.urutan asc")->result_array();
		return $res;
	}
	
	function get_pertanyaan_fisik_mulut($id_transaksi){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan = 'FISIK - MULUT' and id_transaksi = ".$id_transaksi." order by a.urutan asc")->result_array();
		return $res;
	}
	
	function get_pertanyaan_fisik_telinga($id_transaksi){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan = 'FISIK - TELINGA' and id_transaksi = ".$id_transaksi." order by a.urutan asc")->result_array();
		return $res;
	}
	
	function get_pertanyaan_fisik_hidung($id_transaksi){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan = 'FISIK - HIDUNG' and id_transaksi = ".$id_transaksi." order by a.urutan asc")->result_array();
		return $res;
	}
	
	function get_pertanyaan_fisik_thorax($id_transaksi){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan = 'FISIK - THORAX' and id_transaksi = ".$id_transaksi." order by a.urutan asc")->result_array();
		return $res;
	}
	
	function get_pertanyaan_fisik_corpulmo($id_transaksi){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan = 'FISIK - COLPULMO' and id_transaksi = ".$id_transaksi." order by a.urutan asc")->result_array();
		return $res;
	}
	
	function get_pertanyaan_fisik_extrimitas($id_transaksi){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan = 'FISIK - EXTRIMITAS' and id_transaksi = ".$id_transaksi." order by a.urutan asc")->result_array();
		return $res;
	}
	
	function get_pertanyaan_fisik_neuromuscular($id_transaksi){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan = 'FISIK - NEUROMUSCULAR' and id_transaksi = ".$id_transaksi." order by a.urutan asc")->result_array();
		return $res;
	}

	function get_pertanyaan_fisik_kulit($id_transaksi){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan = 'FISIK - KULIT' and id_transaksi = ".$id_transaksi." order by a.urutan asc")->result_array();
		return $res;
	}
	
	function get_pertanyaan_fisik_sistem_alat_gerak_tangan($id_transaksi){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan = 'FISIK - SISTEM ALAT GERAK TANGAN' and id_transaksi = ".$id_transaksi." order by a.urutan asc")->result_array();
		return $res;
	}
	
	function get_pertanyaan_fisik_abdomen($id_transaksi){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan = 'FISIK - ABDOMEN' and id_transaksi = ".$id_transaksi." order by a.urutan asc")->result_array();
		return $res;
	}
	
	function get_pertanyaan_fisik_keterangan_lain($id_transaksi){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan = 'FISIK - KETERANGAN LAIN' and id_transaksi = ".$id_transaksi." order by a.urutan asc")->result_array();
		return $res;
	}
	
	function get_pertanyaan_fisik_genetalia($id_transaksi){
		$res = $this->db->query("SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan = 'FISIK - GENITALIA' and id_transaksi = ".$id_transaksi." order by a.urutan asc")->result_array();
		return $res;
	}
	
	function get_data_lab_hematologi($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'HEMATOLOGI' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_lab_diffcount($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'DIFFCOUNT' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_lab_drugtest($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'DRUGTEST' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_lab_kehamilan($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'KEHAMILAN' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_lab_rectal($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'RECTAL' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_lab_widal($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'WIDAL' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_lab_urinalisa($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'URINALISA' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_lab_sedimenurine($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'SEDIMENURINE' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_lab_kimia_darah($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'KIMIADARAH' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_lab_imunologi($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'IMUNOLOGI' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_lab_golongandarah($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'GOLONGAN DARAH' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}

	function get_data_lab_penandatumor($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'PENANDA TUMOR' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}

	function get_data_lab_imunoserologi
	($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'IMUNOSEROLOGI' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_lab_hexanedione
	($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = '2,5-HEXANEDIONE' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function get_data_lab_elektrolit
	($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'ELEKTROLIT' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}

	function get_data_lab_feses
	($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'FESES' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}

function get_data_lab_logam
	($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'LOGAM' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
function get_data_lab_codarah
	($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'CO DARAH' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
function get_data_lab_benzena
	($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'BENZENA' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}

function get_data_lab_toluena
	($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'TOLUENA' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}

function get_data_lab_xilene
	($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'XILENE' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}

function get_data_lab_btx
	($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'BTX' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}

	function get_data_lab_kulturfeses
	($id_transaksi){
		$res = $this->db->query("SELECT id,created_date,created_by,modified_date,modified_by,status,id_pelayanan,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,
									nilai_min,nilai_max,nilai_text,nilai_satuan,harga_satuan,
							    if (hasil_pemeriksaan = nilai_min  or hasil_pemeriksaan  = nilai_max , 'OK', 
								if(hasil_pemeriksaan+0 > nilai_min+0  and hasil_pemeriksaan+0 < nilai_max+0,'OK','ERROR')) as hasil_akhir  FROM trx_laboratorium
									where id_pelayanan = ".$id_transaksi."
										and nama_pelayanan = 'KULTUR FESES' order by nama_pemeriksaan asc;")->result_array();
		return $res;
	}
	
	function save_db_master_pasien($post){
		$this->db->trans_start();
		
		$save = array();
		$save['created_dt'] = date('Y-m-d H:i:s');
		$save['updated_dt'] = date('Y-m-d H:i:s');
		$save['nama_pt'] = $post['nama_pt'];
		$save['nama_depan'] = $post['nama_depan'];
		$save['nama_lengkap'] = $post['nama_lengkap'];
		$save['jenis_identitas'] = $post['jenis_identitas'];
		$save['no_identitas'] = $post['no_identitas'];
		$save['jenis_kelamin'] = $post['jenis_kelamin'];
		$save['tempat_lahir'] = $post['tempat_lahir'];
		$original_date = $post['tanggal_lahir'];
		$timestamp = strtotime($original_date);
		$new_date = date("Y-m-d", $timestamp);
		$save['tanggal_lahir'] = $new_date;
		//$save['tanggal_lahir'] = $post['tanggal_lahir'];
		$save['alamat_lengkap'] = $post['alamat_lengkap'];
		$save['rt'] = $post['rt'];
		$save['rw'] = $post['rw'];
		$save['kota'] = $post['kota'];
		$save['kecamatan'] = $post['kecamatan'];
		$save['kelurahan'] = $post['kelurahan'];
		$save['kode_pos'] = $post['kode_pos'];
		$save['telepon'] = $post['telepon'];
		$save['handphone'] = $post['handphone'];
		$save['email'] = $post['email'];
		$save['tipe_pegawai'] = $post['tipe_pegawai'];
		$save['jabatan'] = $post['jabatan'];
		$save['bagian'] = $post['bagian'];
		$save['grup'] = $post['grup'];
		$save['jenis_pembayaran'] = $post['jenis_pembayaran'];
		$save['nama_asuransi'] = $post['nama_asuransi'];
		$save['status'] = "ACTIVE";
		//$save['tenor'] = 261;
		//$save['status'] = 'Active';
		//$save['created'] = date('Y-m-d H:i:s');	
		//$save['created_by'] = $this->user['id'];
		//$save['modified'] = date('Y-m-d H:i:s');	
		//$save['modified_by'] = $this->user['id'];
		//$save['pool_id'] = $this->user['id_pool'];
		//$save['jumlah_oper_alih'] = 0;
		
		$res = $this->db->insert('master_pasien', $save);
		$last_id = $this->db->insert_id();	
		
		$save2 = array();
		$save2['user_id'] = "1";
		$save2['status'] = "active";
		$save2['is_deleted'] = "0";
		$save2['name'] = $post['nama_lengkap'];
		$original_string = $post['tanggal_lahir'];
		$timestamp1 = strtotime($original_string);
		$new_date1 = date("dmY", $timestamp1);
		//print_r($new_date1);die;
		$password = password_hash($new_date1, PASSWORD_DEFAULT);
		$save2['password'] = $password;
		$save2['email'] = $post['email'];
		$save2['profile_pic'] = "user.png";
		$save2['user_type'] = "Pasien";
		$save2['id_pasien'] = $last_id;
		$res = $this->db->insert('users', $save2);
		 // print_r($insert);die;
		$this->db->trans_complete(); 
		return $this->db->insert_id();
	}
	
	function save_detail_medcheck($post){
		
		
		$res = $this->db->replace('trx_medcheck_detail', $post);	
		//$res = $this->db->insert('trx_medcheck_detail', $post);
		 
		return $this->db->insert_id();
	}
	
	function update_trx_pelayanan($post){
		
		
		 
		
		$data = array(
               'dokter_pemeriksa' => $post['dokter_pemeriksa'],
               'berat_badan' => $post['berat_badan'],
               'tinggi_badan' => $post['tinggi_badan'],
               'tekanan_darah' => $post['tekanan_darah'],
               'denyut_nadi' => $post['denyut_nadi'],
               'nilai_respirasi' => $post['nilai_respirasi'],
               'suhu_badan' => $post['suhu_badan']
            );
			
			 $data['digital_xray'] = $profile_pic;

		$this->db->where('id', $post['id_transaksi']);
		$res = $this->db->update('trx_pelayanan', $data);
		 
		return $res;
	}
	
	public function updateRow($table, $col, $colVal, $data) {
  		$this->db->where($col,$colVal);
		$this->db->update($table,$data);
		return true;
  	}
  	
  	public function updatebyId($table, $id, $data) {
  	    $this->db->where('id', $id);
		$res = $this->db->update($table, $data);
		return $data;
  	}
	
	function save_db_trx_pelayanan($post){
		$this->db->trans_start();
		
		$save = array();
		$save['created_date'] = date('Y-m-d H:i:s');
		$save['modified_date'] = date('Y-m-d H:i:s');
		$save['created_by'] =  1;
		$save['modified_by'] =  1;
		$save['status'] = 'Active';
		$save['id_pasien'] = $post['id_pasien'];
		$save['nama_lengkap'] = $post['nama_lengkap'];
		$save['jenis_pelayanan'] = $post['jenis_pelayanan'];
		$save['digital_xray'] = 'rontgen.png';
		
		
		$res = $this->db->insert('trx_pelayanan', $save);
		$last_id = $this->db->insert_id();	
		
		$res = $this->db->query("insert into trx_medcheck_detail
								 select null,now(),1,now(),1,'ACTIVE',".$last_id.",id,default_jawaban,'TIDAK' from master_pertanyaan;");
		
		 // print_r($insert);die;
		$this->db->trans_complete(); 
		return $this->db->insert_id();
	}
	
	function save_db_trx_medcheck_perusahaan($post){
		$this->db->trans_start();
		//print_r($post);die;
		$save = array();
		$save['created_date'] = date('Y-m-d H:i:s');
		$save['modified_date'] = date('Y-m-d H:i:s');
		$save['created_by'] =  1;
		$save['modified_by'] =  1;
		$save['status'] = 'Active';
		$save['id_perusahaan'] = $post['id_perusahaan'];
		$original_date = $post['tanggal_mulai'];
		$timestamp = strtotime($original_date);
		$new_date = date("Y-m-d", $timestamp);
		$save['tanggal_mulai'] = $new_date;
		$save['jumlah_hari'] = $post['jumlah_hari'];
		$save['jenis_medcheck'] = $post['jenis_medcheck'];
		
		
		$res = $this->db->insert('trx_medcheck_perusahaan', $save);
		$last_id = $this->db->insert_id();	
		
		
		
		 // print_r($insert);die;
		$this->db->trans_complete(); 
		return $this->db->insert_id();
	}
	
	// function save_db_trx_pemeriksaan($id){
	// 	$this->db->trans_start();
		
	// $res = $this->db->query("delete from trx_laboratorium where id_pelayanan = ".$id.";");
		
	// 	$res2 = $this->db->query("select upper(jenis_kelamin) as jenis_kelamin from master_pasien where id in (select id_pasien from trx_pelayanan where id = ".$id.");")->row_array();
		
	// 	if ($res2['jenis_kelamin'] == 'PRIA')
	// 	{
	// 	$res = $this->db->query("insert into trx_laboratorium
	// 							 select null,now(),1,now(),1,'ACTIVE',".$id.",null,nama_pelayanan,nama_pemeriksaan,nilai_min,nilai_max,nilai_text,id_satuan,null from master_pemeriksaan;");
	// 	} else
	// 	{
	// 			$res = $this->db->query("insert into trx_laboratorium
	// 							 select null,now(),1,now(),1,'ACTIVE',".$id.",null,nama_pelayanan,nama_pemeriksaan,nilai_min_wanita,nilai_max_wanita,nilai_text_wanita,id_satuan,null from master_pemeriksaan;");
	// 	}
	// 	$this->db->trans_complete(); 
	// 	return $this->db->insert_id();
	// }
	

	function save_db_trx_pemeriksaan($id) {
		$this->db->trans_start();
	
		// Delete old trx_laboratorium records
		$res = $this->db->query("DELETE FROM trx_laboratorium WHERE id_pelayanan = ".$id.";");
	
		// Get the gender of the patient
		$res2 = $this->db->query("SELECT UPPER(jenis_kelamin) AS jenis_kelamin 
								   FROM master_pasien 
								   WHERE id IN (SELECT id_pasien FROM trx_pelayanan WHERE id = ".$id.");")
						 ->row_array();
	
		// Insert into trx_laboratorium based on gender
		if ($res2['jenis_kelamin'] == 'PRIA') {
			$res = $this->db->query("INSERT INTO trx_laboratorium
									 SELECT NULL, NOW(), 1, NOW(), 1, 'ACTIVE', ".$id.", NULL, 
											nama_pelayanan, nama_pemeriksaan, nilai_min, nilai_max, nilai_text, id_satuan, NULL 
									 FROM master_pemeriksaan;");
		} else {
			$res = $this->db->query("INSERT INTO trx_laboratorium
									 SELECT NULL, NOW(), 1, NOW(), 1, 'ACTIVE', ".$id.", NULL, 
											nama_pelayanan, nama_pemeriksaan, nilai_min_wanita, nilai_max_wanita, 
											nilai_text_wanita, id_satuan, NULL 
									 FROM master_pemeriksaan;");
		}
	
		// Check if any records were inserted and if 'nilai_text' is outside the valid range
		$query = $this->db->query("SELECT id, hasil_pemeriksaan, nilai_text, nilai_min, nilai_max, nama_pemeriksaan
								   FROM trx_laboratorium
								   WHERE id_pelayanan = ".$id.";");
	
		// Iterate over the records and check the conditions for `nilai_text`
		foreach ($query->result_array() as $row) {
			// Check if hasil_pemeriksaanss is outside the valid range
			if ($row['hasil_pemeriksaan'] < $row['nilai_min'] || $row['hasil_pemeriksaan'] > $row['nilai_max']) {
				// Insert into trx_resume if nilai_text is out of bounds
				$this->db->query("INSERT INTO trx_resume 
								  (created_date, created_by, modified_date, modified_by, status, id_pelayanan, 
								   nama_dokter, jenis_resume, hasil_resume, flag_generate)
								  VALUES 
								  (NOW(), 1, NOW(), 1, 'ACTIVE', ".$id.", 'Dokter XYZ', 'KESIMPULAN', 
								   '".$row['hasil_pemeriksaan']."', 'NO');");
			}
		}
	
		// Complete the transaction
		$this->db->trans_complete();
	
		// Return the inserted id (if needed)
		return $this->db->insert_id();
	}
	

	

	function save_db_trx_lab_based_on_paket($post){
		$this->db->trans_start();
		$idPasien = $post['id_pasien'];
		$idPaket = $post['id_paket'];
	$res = $this->db->query("delete from trx_laboratorium where id_pelayanan = ".$idPasien.";");
	$res = $this->db->query("delete from trx_tagihan where id_pelayanan = ".$idPasien.";");
		
		$res2 = $this->db->query("select upper(jenis_kelamin) as jenis_kelamin from master_pasien where id in (select id_pasien from trx_pelayanan where id = ".$idPasien.");")->row_array();
		if ($res2['jenis_kelamin'] == 'PRIA')
		{
		$res = $this->db->query("insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',".$idPasien.",null,c.nama_pelayanan,c.nama_pemeriksaan,c.nilai_min,c.nilai_max,c.nilai_text,c.id_satuan,null 
								from master_paket_medcheck_header a 
								left join master_paket_medcheck_detail b on (a.id = b.id_header)
								left join master_pemeriksaan c on (b.id_pemeriksaan = c.id)
								where a.id = ".$idPaket.";");
		} else {
			$res = $this->db->query("insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',".$idPasien.",null,c.nama_pelayanan,c.nama_pemeriksaan,c.nilai_min_wanita,c.nilai_max_wanita,c.nilai_text_wanita,c.id_satuan,null 
								from master_paket_medcheck_header a 
								left join master_paket_medcheck_detail b on (a.id = b.id_header)
								left join master_pemeriksaan c on (b.id_pemeriksaan = c.id)
								where a.id = ".$idPaket.";");
		}
								
		$save = array();
		$save['status'] = 'Active';
		$save['id_pelayanan'] = $idPasien;
		$save['id_paket_lab'] = $idPaket;
		$save['nilai_tagihan'] = $post['harga_paket'];
		$save['jenis_tagihan'] = 'PAKET LAB';
		
		
		$res = $this->db->insert('trx_tagihan', $save);
		$last_id = $this->db->insert_id();	

		$this->db->trans_complete(); 
		return $this->db->insert_id();
	}
	
	
	function save_db_trx_lab_add_pemeriksaan($post) {
		// Start a database transaction
		$this->db->trans_start();
	
		$idPasien = $post['id_pasien'];
		$id_pemeriksaan = $post['id_pemeriksaan'];
	
		// Get the gender of the patient
		$res2 = $this->db->query("SELECT UPPER(jenis_kelamin) AS jenis_kelamin 
								   FROM master_pasien 
								   WHERE id IN (SELECT id_pasien FROM trx_pelayanan WHERE id = ".$idPasien.");")
						 ->row_array();
	
		// Insert the test results based on the patient's gender
		if ($res2['jenis_kelamin'] == 'PRIA') {
			// Insert for male patient
			$res = $this->db->query("INSERT INTO trx_laboratorium
									 SELECT NULL, NOW(), 1, NOW(), 1, 'ACTIVE', ".$idPasien.", NULL, 
											c.nama_pelayanan, c.nama_pemeriksaan, c.nilai_min, c.nilai_max, c.nilai_text, c.id_satuan, c.harga_pemeriksaan 
									 FROM master_pemeriksaan c 
									 WHERE c.id = ".$id_pemeriksaan.";");
	
			// Get the inserted value for hasil_pemeriksaan
			$query = $this->db->query("SELECT id, hasil_pemeriksaan, nilai_min, nilai_max, nama_pemeriksaan
									   FROM trx_laboratorium
									   WHERE id_pelayanan = ".$idPasien." AND id = ".$this->db->insert_id().";");
		} else {
			// Insert for female patient
			$res = $this->db->query("INSERT INTO trx_laboratorium
									 SELECT NULL, NOW(), 1, NOW(), 1, 'ACTIVE', ".$idPasien.", NULL, 
											c.nama_pelayanan, c.nama_pemeriksaan, c.nilai_min_wanita, c.nilai_max_wanita, 
											c.nilai_text_wanita, c.id_satuan, c.harga_pemeriksaan 
									 FROM master_pemeriksaan c 
									 WHERE c.id = ".$id_pemeriksaan.";");
	
			// Get the inserted value for hasil_pemeriksaan
			$query = $this->db->query("SELECT id, hasil_pemeriksaan, nilai_min_wanita AS nilai_min, nilai_max_wanita AS nilai_max, nama_pemeriksaan
									   FROM trx_laboratorium
									   WHERE id_pelayanan = ".$idPasien." AND id = ".$this->db->insert_id().";");
		}
	
		// Iterate over the records to check the conditions for hasil_pemeriksaan
		foreach ($query->result_array() as $row) {
			// Check if hasil_pemeriksaan is empty (NULL or empty string) or out of range
			if (!empty($row['hasil_pemeriksaan']) && ($row['hasil_pemeriksaan'] < $row['nilai_min'] || $row['hasil_pemeriksaan'] > $row['nilai_max'])) {
				// Insert into trx_resume if the result is out of range and hasil_pemeriksaan is not empty
				$this->db->query("INSERT INTO trx_resume 
								  (created_date, created_by, modified_date, modified_by, status, id_pelayanan, 
								   nama_dokter, jenis_resume, hasil_resume, flag_generate)
								  VALUES 
								  (NOW(), 1, NOW(), 1, 'ACTIVE', ".$idPasien.", '', 'KESIMPULAN', 
								   '".$row['nama_pemeriksaan']. " berstatus " . $row['hasil_pemeriksaan'] . "', 'NO');");
			}
		}
	
		// Delete any existing charge for the test and insert the new one
		$res = $this->db->query("DELETE FROM trx_tagihan WHERE id_lab = ".$id_pemeriksaan." AND id_pelayanan = ".$idPasien.";");
	
		// Prepare data to be inserted into trx_tagihan
		$save = array();
		$save['status'] = 'Active';
		$save['id_pelayanan'] = $idPasien;
		$save['id_lab'] = $id_pemeriksaan;
		$save['nilai_tagihan'] = $post['harga_pemeriksaan'];
		$save['jenis_tagihan'] = 'TAMBAHAN PEMERIKSAAN';
	
		// Insert new charge data into trx_tagihan
		$res = $this->db->insert('trx_tagihan', $save);
		$last_id = $this->db->insert_id();
	
		// Complete the transaction
		$this->db->trans_complete();
	
		// Return the last insert ID (from trx_tagihan insert)
		return $last_id;
	}
	
	
	
	function remove_lab_pemeriksaan($id, $id_layanan, $nama_periksa, $nama_layanan) {
	    $periksa = $this->db->query("SELECT id, nama_pemeriksaan FROM master_pemeriksaan where nama_pemeriksaan='".$nama_periksa."' and nama_pelayanan='".$nama_layanan."';")->row_array();
	    if (isset($periksa)) {
	        $res = $this->db->query("delete from trx_tagihan where id_lab = ".$periksa['id']." and id_pelayanan = ".$id_layanan.";");
	    }
	    $this->db->query("delete from trx_laboratorium where id = ".$id.";");
	}
	
	function save_pertanyaan_check_add($id, $id_fisik) {
		$res = $this->db->query("insert into trx_medcheck_detail select null,now(),1,now(),1,'ACTIVE',".$id.",id,default_jawaban,'TIDAK' from master_pertanyaan where id in (".$id_fisik.");");
		return $this->db->insert_id();
	}
	
	function autocomplete_nama($kip){
        $this->db->select("mp.id,mp.nama_lengkap,mp.alamat_lengkap,mp.handphone,mp.jenis_pembayaran,mp.nama_asuransi, mp.tanggal_lahir", FALSE);
		$this->db->where('mp.status', 'ACTIVE');
		$this->db->group_start();
		$this->db->like('mp.nama_lengkap', $kip , 'both');
		$this->db->group_end();
        $this->db->order_by('mp.id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('master_pasien mp')->result();
    }
	
	function autocomplete_perusahaan($nama){
        $this->db->select("mp.id,mp.nama_perusahaan", FALSE);
		$this->db->where('mp.status', 'ACTIVE');
		$this->db->group_start();
		$this->db->like('mp.nama_perusahaan', $nama , 'both');
		$this->db->group_end();
        $this->db->order_by('mp.id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('master_perusahaan mp')->result();
    }
	
	function autocomplete_paket_medcheck($nama_paket){
        $this->db->select("mp.id,mp.nama_paket, mp.harga_paket", FALSE);
		$this->db->where('mp.status', 'ACTIVE');
		$this->db->group_start();
		$this->db->like('mp.nama_paket', $nama_paket , 'both');
		$this->db->group_end();
        $this->db->order_by('mp.id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('master_paket_medcheck_header mp')->result();
    }
	
	function autocomplete_pemeriksaan_satuan($nama_paket){
        $this->db->select("mp.id,mp.nama_pemeriksaan,mp.nama_pelayanan, mp.harga_pemeriksaan", FALSE);
		$this->db->where('mp.status', 'ACTIVE');
		$this->db->group_start();
		$this->db->like('mp.nama_pemeriksaan', $nama_paket , 'both');
		$this->db->group_end();
        $this->db->order_by('mp.id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('master_pemeriksaan mp')->result();
    }
	
	function autocomplete_modal_add_anjuran($nama_paket){
        $this->db->select("mgc.id,mgc.deskripsi", FALSE);
		$this->db->where('mgc.kelompok', 'MODAL_ANJURAN');
		$this->db->group_start();
		$this->db->like('mgc.deskripsi', $nama_paket , 'both');
		$this->db->group_end();
        $this->db->order_by('mgc.id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('master_global_condition mgc')->result();
    }
	
	function autocomplete_modal_add_diagnosa($nama_paket){
        $this->db->select("mgc.id,mgc.deskripsi", FALSE);
		$this->db->where('mgc.kelompok', 'MODAL_DIAGNOSA');
		$this->db->group_start();
		$this->db->like('mgc.deskripsi', $nama_paket , 'both');
		$this->db->group_end();
        $this->db->order_by('mgc.id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('master_global_condition mgc')->result();
    }
	
	function autocomplete_modal_add_usg($nama_paket){
        $this->db->select("mgc.id,mgc.deskripsi", FALSE);
		$this->db->where('mgc.kelompok', 'MODAL_USG');
		$this->db->group_start();
		$this->db->like('mgc.deskripsi', $nama_paket , 'both');
		$this->db->group_end();
        $this->db->order_by('mgc.id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('master_global_condition mgc')->result();
    }
	
	function autocomplete_modal_add_treadmill($nama_paket){
        $this->db->select("mgc.id,mgc.deskripsi", FALSE);
		$this->db->where('mgc.kelompok', 'MODAL_TREADMILL');
		$this->db->group_start();
		$this->db->like('mgc.deskripsi', $nama_paket , 'both');
		$this->db->group_end();
        $this->db->order_by('mgc.id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('master_global_condition mgc')->result();
    }
	
	function autocomplete_modal_add_pap_smear($nama_paket){
        $this->db->select("mgc.id,mgc.deskripsi", FALSE);
		$this->db->where('mgc.kelompok', 'MODAL_PAP_SMEAR');
		$this->db->group_start();
		$this->db->like('mgc.deskripsi', $nama_paket , 'both');
		$this->db->group_end();
        $this->db->order_by('mgc.id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('master_global_condition mgc')->result();
    }
    function autocomplete_modal_add_rontgen($nama_paket){
        $this->db->select("mgc.id,mgc.deskripsi", FALSE);
		$this->db->where('mgc.kelompok', 'MODAL_RONTGEN');
		$this->db->group_start();
		$this->db->like('mgc.deskripsi', $nama_paket , 'both');
		$this->db->group_end();
        $this->db->order_by('mgc.id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('master_global_condition mgc')->result();
    }
    function autocomplete_modal_add_iva($nama_paket){
        $this->db->select("mgc.id,mgc.deskripsi", FALSE);
		$this->db->where('mgc.kelompok', 'MODAL_IVA');
		$this->db->group_start();
		$this->db->like('mgc.deskripsi', $nama_paket , 'both');
		$this->db->group_end();
        $this->db->order_by('mgc.id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('master_global_condition mgc')->result();
    }
    function autocomplete_modal_add_alcohol($nama_paket){
        $this->db->select("mgc.id,mgc.deskripsi", FALSE);
		$this->db->where('mgc.kelompok', 'MODAL_ALCOHOL');
		$this->db->group_start();
		$this->db->like('mgc.deskripsi', $nama_paket , 'both');
		$this->db->group_end();
        $this->db->order_by('mgc.id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('master_global_condition mgc')->result();
        
    }
    function autocomplete_modal_add_romberg($nama_paket){
        $this->db->select("mgc.id,mgc.deskripsi", FALSE);
		$this->db->where('mgc.kelompok', 'MODAL_romberg');
		$this->db->group_start();
		$this->db->like('mgc.deskripsi', $nama_paket , 'both');
		$this->db->group_end();
        $this->db->order_by('mgc.id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('master_global_condition mgc')->result();
    }
	function autocomplete_modal_add_kesimpulan($nama_paket){
        $this->db->select("mgc.id,mgc.deskripsi", FALSE);
		$this->db->where('mgc.kelompok', 'MODAL_KESIMPULAN');
		$this->db->group_start();
		$this->db->like('mgc.deskripsi', $nama_paket , 'both');
		$this->db->group_end();
        $this->db->order_by('mgc.id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('master_global_condition mgc')->result();
    }
	
	function autocomplete_get_dokter($nama_dokter){
        $this->db->select("md.id,md.nama_dokter", FALSE);
		$this->db->where('md.status', 'ACTIVE');
		$this->db->group_start();
		$this->db->like('md.nama_dokter', $nama_dokter , 'both');
		$this->db->group_end();
        $this->db->order_by('md.id', 'ASC');
        $this->db->limit(10);
        return $this->db->get('master_dokter md')->result();
    }
	
	function do_delete_data_transaksi_radiologi($id='') {
		$this->db->where('id', $id);  
		$this->db->delete('trx_radiologi'); 
	}
	
	function get_all_data_radiologi($id){

		$res = $this->db->query("SELECT * FROM trx_radiologi where id =".$id.";")->row_array();
		return $res;
	}
	
	function get_last_update($id){

		$res = $this->db->query("select b.name from trx_medcheck_detail a left join users b on (a.created_by = b.users_id ) where id_transaksi = ".$id." limit 1;")->row_array();
		return $res;
	}
	
	function do_delete_data_transaksi_penunjang($id='') {
		$this->db->where('id', $id);  
		$this->db->delete('trx_penunjang'); 
	}
	
	function get_all_data_penunjang($id){

		$res = $this->db->query("SELECT * FROM trx_penunjang where id =".$id.";")->row_array();
		return $res;
	}
	
	function do_delete_data_transaksi_resume($id='') {
		$this->db->where('id', $id);  
		$this->db->delete('trx_resume'); 
	}

	function do_delete_data_transaksi_resume_with_id($id='',$id_created='') {

		$this->db->query("DELETE FROM trx_resume WHERE 	id = ".$id."  and created_by = ".$id_created.";"); 
	}
	
	function get_all_data_resume($id){

		$res = $this->db->query("SELECT * FROM trx_resume where id =".$id.";")->row_array();
		return $res;
	}
	
	function get_data_dokter_pemeriksaan($id){
		$res = $this->db->query("SELECT * FROM trx_medcheck_perusahaan where id = ".$id."")->row_array();
		return $res;
	}
	
	function get_data_dokter_default_pemeriksaan($id){
		$res = $this->db->query("select * from trx_medcheck_perusahaan where id in (
									SELECT id_medcheck_perusahaan FROM trx_pelayanan 
											where id = ".$id.")")->row_array();
		return $res;
	}
}
?>