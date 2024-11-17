<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-15 03:48:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 3 - Invalid query: select * from trx_medcheck_perusahaan where id in (
									SELECT id_medcheck_perusahaan FROM trx_pelayanan 
											where id = )
ERROR - 2020-09-15 03:48:07 --> Severity: Error --> Call to a member function row_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 1382
ERROR - 2020-09-15 03:48:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 3 - Invalid query: select * from trx_medcheck_perusahaan where id in (
									SELECT id_medcheck_perusahaan FROM trx_pelayanan 
											where id = )
ERROR - 2020-09-15 03:48:08 --> Severity: Error --> Call to a member function row_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 1382
ERROR - 2020-09-15 03:48:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 3 - Invalid query: select * from trx_medcheck_perusahaan where id in (
									SELECT id_medcheck_perusahaan FROM trx_pelayanan 
											where id = )
ERROR - 2020-09-15 03:48:14 --> Severity: Error --> Call to a member function row_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 1382
ERROR - 2020-09-15 06:02:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 4 - Invalid query: insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',4160,null,c.nama_pelayanan,c.nama_pemeriksaan,c.nilai_min_wanita,c.nilai_max_wanita,c.nilai_text_wanita,c.id_satuan,c.harga_pemeriksaan 
								from  master_pemeriksaan c 
								where c.id = ;
ERROR - 2020-09-15 06:23:13 --> Severity: Warning --> Missing argument 1 for Registrasi::list_data_detail_pelayanan_perusahaan() C:\xampp\htdocs\citra\application\modules\registrasi\controllers\Registrasi.php 402
ERROR - 2020-09-15 06:23:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by -c.no_medcheck desc' at line 9 - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 
								 order by -c.no_medcheck desc
ERROR - 2020-09-15 06:23:13 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 288
ERROR - 2020-09-15 06:23:13 --> Severity: Warning --> Missing argument 1 for Registrasi::list_data_detail_pelayanan_perusahaan() C:\xampp\htdocs\citra\application\modules\registrasi\controllers\Registrasi.php 402
ERROR - 2020-09-15 06:23:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by -c.no_medcheck desc' at line 9 - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 
								 order by -c.no_medcheck desc
ERROR - 2020-09-15 06:23:13 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 288
ERROR - 2020-09-15 06:38:34 --> Severity: Warning --> Missing argument 1 for Registrasi::list_data_detail_pelayanan_perusahaan() C:\xampp\htdocs\citra\application\modules\registrasi\controllers\Registrasi.php 402
ERROR - 2020-09-15 06:38:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by -c.no_medcheck desc' at line 9 - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 
								 order by -c.no_medcheck desc
ERROR - 2020-09-15 06:38:34 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 288
ERROR - 2020-09-15 08:24:05 --> Severity: Warning --> Missing argument 1 for Registrasi::list_data_detail_pelayanan_perusahaan() C:\xampp\htdocs\citra\application\modules\registrasi\controllers\Registrasi.php 402
ERROR - 2020-09-15 08:24:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by -c.no_medcheck desc' at line 9 - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 
								 order by -c.no_medcheck desc
ERROR - 2020-09-15 08:24:05 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 288
ERROR - 2020-09-15 08:24:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 4 - Invalid query: insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',4280,null,c.nama_pelayanan,c.nama_pemeriksaan,c.nilai_min_wanita,c.nilai_max_wanita,c.nilai_text_wanita,c.id_satuan,c.harga_pemeriksaan 
								from  master_pemeriksaan c 
								where c.id = ;
ERROR - 2020-09-15 08:24:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 4 - Invalid query: insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',4280,null,c.nama_pelayanan,c.nama_pemeriksaan,c.nilai_min_wanita,c.nilai_max_wanita,c.nilai_text_wanita,c.id_satuan,c.harga_pemeriksaan 
								from  master_pemeriksaan c 
								where c.id = ;
ERROR - 2020-09-15 08:24:37 --> Severity: Warning --> Missing argument 1 for Registrasi::list_data_detail_pelayanan_perusahaan() C:\xampp\htdocs\citra\application\modules\registrasi\controllers\Registrasi.php 402
ERROR - 2020-09-15 08:24:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by -c.no_medcheck desc' at line 9 - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 
								 order by -c.no_medcheck desc
ERROR - 2020-09-15 08:24:37 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 288
ERROR - 2020-09-15 09:12:33 --> Severity: Warning --> Missing argument 1 for Registrasi::list_data_detail_pelayanan_perusahaan() C:\xampp\htdocs\citra\application\modules\registrasi\controllers\Registrasi.php 402
ERROR - 2020-09-15 09:12:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by -c.no_medcheck desc' at line 9 - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 
								 order by -c.no_medcheck desc
ERROR - 2020-09-15 09:12:33 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 288
