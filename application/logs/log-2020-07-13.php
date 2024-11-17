<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-13 04:10:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 310
ERROR - 2020-07-13 04:10:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 384
ERROR - 2020-07-13 04:10:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 429
ERROR - 2020-07-13 04:11:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 310
ERROR - 2020-07-13 04:11:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 384
ERROR - 2020-07-13 04:11:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 429
ERROR - 2020-07-13 04:18:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 310
ERROR - 2020-07-13 04:18:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 384
ERROR - 2020-07-13 04:18:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 429
ERROR - 2020-07-13 04:19:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 310
ERROR - 2020-07-13 04:19:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 384
ERROR - 2020-07-13 04:19:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 429
ERROR - 2020-07-13 04:22:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 310
ERROR - 2020-07-13 04:22:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 384
ERROR - 2020-07-13 04:22:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 429
ERROR - 2020-07-13 04:22:40 --> Severity: Warning --> Missing argument 1 for Registrasi::list_data_detail_pelayanan_perusahaan() C:\xampp\htdocs\citra\application\modules\registrasi\controllers\Registrasi.php 387
ERROR - 2020-07-13 04:22:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by -c.no_medcheck desc' at line 9 - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 
								 order by -c.no_medcheck desc
ERROR - 2020-07-13 04:22:40 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 288
ERROR - 2020-07-13 04:54:56 --> Severity: Warning --> Missing argument 1 for Registrasi::list_data_detail_pelayanan_perusahaan() C:\xampp\htdocs\citra\application\modules\registrasi\controllers\Registrasi.php 387
ERROR - 2020-07-13 04:54:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by -c.no_medcheck desc' at line 9 - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 
								 order by -c.no_medcheck desc
ERROR - 2020-07-13 04:54:56 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 288
ERROR - 2020-07-13 04:55:55 --> Query error: Column count doesn't match value count at row 1 - Invalid query: insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',316,null,c.nama_pelayanan,c.nama_pemeriksaan,c.nilai_min_wanita,c.nilai_max_wanita,c.nilai_text_wanita,null 
								from master_paket_medcheck_header a 
								left join master_paket_medcheck_detail b on (a.id = b.id_header)
								left join master_pemeriksaan c on (b.id_pemeriksaan = c.id)
								where a.id = 10;
ERROR - 2020-07-13 06:04:40 --> 404 Page Not Found: /index
ERROR - 2020-07-13 06:13:33 --> Severity: Warning --> Missing argument 1 for Registrasi::list_data_detail_pelayanan_perusahaan() C:\xampp\htdocs\citra\application\modules\registrasi\controllers\Registrasi.php 387
ERROR - 2020-07-13 06:13:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by -c.no_medcheck desc' at line 9 - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 
								 order by -c.no_medcheck desc
ERROR - 2020-07-13 06:13:33 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 288
