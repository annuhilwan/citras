<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-14 06:48:19 --> 404 Page Not Found: /index
ERROR - 2020-09-14 06:48:19 --> 404 Page Not Found: /index
ERROR - 2020-09-14 08:07:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2020-09-14 08:07:47 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 728
ERROR - 2020-09-14 08:17:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 310
ERROR - 2020-09-14 08:17:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 384
ERROR - 2020-09-14 08:17:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 429
ERROR - 2020-09-14 09:12:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 310
ERROR - 2020-09-14 09:12:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 384
ERROR - 2020-09-14 09:12:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 429
ERROR - 2020-09-14 10:12:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 4 - Invalid query: insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',4282,null,c.nama_pelayanan,c.nama_pemeriksaan,c.nilai_min_wanita,c.nilai_max_wanita,c.nilai_text_wanita,c.id_satuan,c.harga_pemeriksaan 
								from  master_pemeriksaan c 
								where c.id = ;
ERROR - 2020-09-14 10:42:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 310
ERROR - 2020-09-14 10:42:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 384
ERROR - 2020-09-14 10:42:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 429
ERROR - 2020-09-14 11:03:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 4 - Invalid query: insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',4142,null,c.nama_pelayanan,c.nama_pemeriksaan,c.nilai_min_wanita,c.nilai_max_wanita,c.nilai_text_wanita,c.id_satuan,c.harga_pemeriksaan 
								from  master_pemeriksaan c 
								where c.id = ;
