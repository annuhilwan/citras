<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-03-08 03:05:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 310
ERROR - 2021-03-08 03:05:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 384
ERROR - 2021-03-08 03:05:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 429
ERROR - 2021-03-08 04:52:18 --> Severity: Warning --> Missing argument 1 for Registrasi::list_data_detail_pelayanan_perusahaan() C:\xampp\htdocs\citra\application\modules\registrasi\controllers\Registrasi.php 402
ERROR - 2021-03-08 04:52:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by -c.no_medcheck desc' at line 9 - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 
								 order by -c.no_medcheck desc
ERROR - 2021-03-08 04:52:18 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 288
ERROR - 2021-03-08 05:19:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 310
ERROR - 2021-03-08 05:19:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 384
ERROR - 2021-03-08 05:19:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 429
ERROR - 2021-03-08 05:20:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 310
ERROR - 2021-03-08 05:20:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 384
ERROR - 2021-03-08 05:20:06 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 429
ERROR - 2021-03-08 08:05:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 310
ERROR - 2021-03-08 08:05:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 384
ERROR - 2021-03-08 08:05:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 429
ERROR - 2021-03-08 08:35:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 310
ERROR - 2021-03-08 08:35:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 384
ERROR - 2021-03-08 08:35:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 429
ERROR - 2021-03-08 08:45:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 310
ERROR - 2021-03-08 08:45:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 384
ERROR - 2021-03-08 08:45:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 429
ERROR - 2021-03-08 08:51:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 310
ERROR - 2021-03-08 08:51:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 384
ERROR - 2021-03-08 08:51:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 429
