<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-15 06:46:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 310
ERROR - 2020-07-15 06:46:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 384
ERROR - 2020-07-15 06:46:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 429
ERROR - 2020-07-15 07:40:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2020-07-15 07:40:07 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 714
ERROR - 2020-07-15 07:40:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 310
ERROR - 2020-07-15 07:40:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 384
ERROR - 2020-07-15 07:40:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasien.php 429
ERROR - 2020-07-15 08:10:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2020-07-15 08:10:37 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 714
