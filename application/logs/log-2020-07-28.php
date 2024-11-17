<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-28 05:52:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2020-07-28 05:52:08 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 728
ERROR - 2020-07-28 05:52:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2020-07-28 05:52:17 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 728
ERROR - 2020-07-28 10:06:34 --> Severity: Error --> Maximum execution time of 300 seconds exceeded C:\xampp\htdocs\citra\system\database\drivers\mysqli\mysqli_driver.php 305
ERROR - 2020-07-28 10:08:56 --> Severity: Error --> Maximum execution time of 300 seconds exceeded C:\xampp\htdocs\citra\application\libraries\PHPExcel\Worksheet.php 1192
ERROR - 2020-07-28 10:09:34 --> Severity: Error --> Maximum execution time of 300 seconds exceeded C:\xampp\htdocs\citra\system\database\drivers\mysqli\mysqli_driver.php 305
ERROR - 2020-07-28 10:09:51 --> Severity: Error --> Maximum execution time of 300 seconds exceeded C:\xampp\htdocs\citra\system\database\drivers\mysqli\mysqli_driver.php 305
ERROR - 2020-07-28 10:10:25 --> Severity: Error --> Maximum execution time of 300 seconds exceeded C:\xampp\htdocs\citra\system\database\drivers\mysqli\mysqli_driver.php 305
ERROR - 2020-07-28 10:18:01 --> Severity: Error --> Maximum execution time of 300 seconds exceeded C:\xampp\htdocs\citra\system\libraries\Session\drivers\Session_files_driver.php 168
ERROR - 2020-07-28 10:18:01 --> Severity: Error --> Maximum execution time of 300 seconds exceeded C:\xampp\htdocs\citra\system\libraries\Session\drivers\Session_files_driver.php 168
ERROR - 2020-07-28 10:18:01 --> Severity: Error --> Maximum execution time of 300 seconds exceeded C:\xampp\htdocs\citra\system\libraries\Session\drivers\Session_files_driver.php 168
