<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-10 04:40:19 --> Severity: Warning --> Missing argument 1 for Registrasi::list_data_detail_chart_faringitis() C:\xampp\htdocs\citra\application\modules\registrasi\controllers\Registrasi.php 421
ERROR - 2020-07-10 04:40:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and b.jenis_resume = 'DIAGNOSA' and b.hasil_resume = 'Faringitis'
														' at line 6 - Invalid query: SELECT  a.nama_lengkap, c.bagian
									from trx_pelayanan a
										left join master_pasien c on (a.id_pasien = c.id)
											left join trx_resume b on (a.id = b.id_pelayanan)
												where a.id_medcheck_perusahaan = 
													and b.jenis_resume = 'DIAGNOSA' and b.hasil_resume = 'Faringitis'
															order by c.bagian asc;
ERROR - 2020-07-10 04:40:19 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 262
ERROR - 2020-07-10 04:40:29 --> Severity: Warning --> Missing argument 1 for Registrasi::list_data_detail_chart_faringitis() C:\xampp\htdocs\citra\application\modules\registrasi\controllers\Registrasi.php 421
ERROR - 2020-07-10 04:40:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and b.jenis_resume = 'DIAGNOSA' and b.hasil_resume = 'Faringitis'
														' at line 6 - Invalid query: SELECT  a.nama_lengkap, c.bagian
									from trx_pelayanan a
										left join master_pasien c on (a.id_pasien = c.id)
											left join trx_resume b on (a.id = b.id_pelayanan)
												where a.id_medcheck_perusahaan = 
													and b.jenis_resume = 'DIAGNOSA' and b.hasil_resume = 'Faringitis'
															order by c.bagian asc;
ERROR - 2020-07-10 04:40:29 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 262
ERROR - 2020-07-10 04:41:09 --> Severity: Warning --> Missing argument 1 for Registrasi::list_data_detail_chart_faringitis() C:\xampp\htdocs\citra\application\modules\registrasi\controllers\Registrasi.php 421
ERROR - 2020-07-10 04:41:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'and b.jenis_resume = 'DIAGNOSA' and b.hasil_resume = 'Faringitis'
														' at line 6 - Invalid query: SELECT  a.nama_lengkap, c.bagian
									from trx_pelayanan a
										left join master_pasien c on (a.id_pasien = c.id)
											left join trx_resume b on (a.id = b.id_pelayanan)
												where a.id_medcheck_perusahaan = 
													and b.jenis_resume = 'DIAGNOSA' and b.hasil_resume = 'Faringitis'
															order by c.bagian asc;
ERROR - 2020-07-10 04:41:09 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 262
ERROR - 2020-07-10 04:48:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'group by b.jenis_kelamin' at line 3 - Invalid query: select b.jenis_kelamin, count(0) jumlah from trx_pelayanan a 
									left join master_pasien b on (a.id_pasien = b.id) 
										where a.id_medcheck_perusahaan =  group by b.jenis_kelamin;
ERROR - 2020-07-10 04:48:23 --> Severity: Error --> Call to a member function result() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 423
ERROR - 2020-07-10 04:48:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'group by b.jenis_kelamin' at line 3 - Invalid query: select b.jenis_kelamin, count(0) jumlah from trx_pelayanan a 
									left join master_pasien b on (a.id_pasien = b.id) 
										where a.id_medcheck_perusahaan =  group by b.jenis_kelamin;
ERROR - 2020-07-10 04:48:34 --> Severity: Error --> Call to a member function result() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 423
ERROR - 2020-07-10 04:49:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'group by b.jenis_kelamin' at line 3 - Invalid query: select b.jenis_kelamin, count(0) jumlah from trx_pelayanan a 
									left join master_pasien b on (a.id_pasien = b.id) 
										where a.id_medcheck_perusahaan =  group by b.jenis_kelamin;
ERROR - 2020-07-10 04:49:21 --> Severity: Error --> Call to a member function result() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 423
ERROR - 2020-07-10 05:53:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 310
ERROR - 2020-07-10 05:53:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 384
ERROR - 2020-07-10 05:53:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 429
ERROR - 2020-07-10 11:27:04 --> 404 Page Not Found: /index
ERROR - 2020-07-10 12:15:07 --> 404 Page Not Found: /index
ERROR - 2020-07-10 12:49:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 310
ERROR - 2020-07-10 12:49:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 384
ERROR - 2020-07-10 12:49:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 429
ERROR - 2020-07-10 12:49:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 310
ERROR - 2020-07-10 12:49:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 384
ERROR - 2020-07-10 12:49:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 429
ERROR - 2020-07-10 13:04:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 310
ERROR - 2020-07-10 13:04:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 384
ERROR - 2020-07-10 13:04:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 429
ERROR - 2020-07-10 13:05:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 310
ERROR - 2020-07-10 13:05:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 384
ERROR - 2020-07-10 13:05:03 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 429
ERROR - 2020-07-10 13:05:41 --> Severity: Warning --> Missing argument 1 for Registrasi::list_data_detail_pelayanan_perusahaan() C:\xampp\htdocs\citra\application\modules\registrasi\controllers\Registrasi.php 387
ERROR - 2020-07-10 13:05:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by -c.no_medcheck desc' at line 9 - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 
								 order by -c.no_medcheck desc
ERROR - 2020-07-10 13:05:41 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 288
ERROR - 2020-07-10 13:06:05 --> Query error: Column count doesn't match value count at row 1 - Invalid query: insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',312,null,c.nama_pelayanan,c.nama_pemeriksaan,c.nilai_min_wanita,c.nilai_max_wanita,c.nilai_text_wanita,null 
								from master_paket_medcheck_header a 
								left join master_paket_medcheck_detail b on (a.id = b.id_header)
								left join master_pemeriksaan c on (b.id_pemeriksaan = c.id)
								where a.id = 10;
