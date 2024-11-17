<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-17 03:39:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 310
ERROR - 2020-07-17 03:39:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 384
ERROR - 2020-07-17 03:39:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 429
ERROR - 2020-07-17 03:39:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 310
ERROR - 2020-07-17 03:39:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 384
ERROR - 2020-07-17 03:39:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 429
ERROR - 2020-07-17 03:42:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 310
ERROR - 2020-07-17 03:42:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 384
ERROR - 2020-07-17 03:42:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 429
ERROR - 2020-07-17 03:43:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 310
ERROR - 2020-07-17 03:43:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 384
ERROR - 2020-07-17 03:43:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 429
ERROR - 2020-07-17 03:43:23 --> Severity: Warning --> Missing argument 1 for Registrasi::list_data_detail_pelayanan_perusahaan() C:\xampp\htdocs\citra\application\modules\registrasi\controllers\Registrasi.php 387
ERROR - 2020-07-17 03:43:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by -c.no_medcheck desc' at line 9 - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 
								 order by -c.no_medcheck desc
ERROR - 2020-07-17 03:43:23 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 288
ERROR - 2020-07-17 03:48:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 310
ERROR - 2020-07-17 03:48:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 384
ERROR - 2020-07-17 03:48:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 429
ERROR - 2020-07-17 03:52:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 310
ERROR - 2020-07-17 03:52:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 384
ERROR - 2020-07-17 03:52:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 429
ERROR - 2020-07-17 03:52:55 --> Severity: Warning --> Missing argument 1 for Registrasi::list_data_detail_pelayanan_perusahaan() C:\xampp\htdocs\citra\application\modules\registrasi\controllers\Registrasi.php 387
ERROR - 2020-07-17 03:52:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by -c.no_medcheck desc' at line 9 - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 
								 order by -c.no_medcheck desc
ERROR - 2020-07-17 03:52:55 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 288
ERROR - 2020-07-17 12:46:56 --> 404 Page Not Found: /index
ERROR - 2020-07-17 12:47:34 --> 404 Page Not Found: /index
ERROR - 2020-07-17 14:53:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'BAN' and tanggal_lahir = '1983-06-10' limit 1' at line 1 - Invalid query: select id from master_pasien where nama_lengkap = 'MUHAMMAD BAHRUL SA'BAN' and tanggal_lahir = '1983-06-10' limit 1;
ERROR - 2020-07-17 14:53:06 --> Severity: Error --> Call to a member function row_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 34
