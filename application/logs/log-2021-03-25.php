<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-03-25 04:57:48 --> 404 Page Not Found: /index
ERROR - 2021-03-25 08:36:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2021-03-25 08:36:10 --> Severity: Error --> Call to a member function result_array() on a non-object /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 740
ERROR - 2021-03-25 11:16:55 --> 404 Page Not Found: /index
ERROR - 2021-03-25 16:39:51 --> 404 Page Not Found: /index
ERROR - 2021-03-25 17:10:41 --> 404 Page Not Found: /index
ERROR - 2021-03-25 17:10:42 --> 404 Page Not Found: /index
ERROR - 2021-03-25 17:10:44 --> 404 Page Not Found: /index
