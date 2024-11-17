<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-06-03 02:49:12 --> 404 Page Not Found: /index
ERROR - 2022-06-03 03:00:18 --> 404 Page Not Found: /index
ERROR - 2022-06-03 03:00:19 --> 404 Page Not Found: /index
ERROR - 2022-06-03 10:47:14 --> 404 Page Not Found: /index
ERROR - 2022-06-03 10:47:14 --> 404 Page Not Found: /index
ERROR - 2022-06-03 10:47:15 --> 404 Page Not Found: /index
ERROR - 2022-06-03 10:47:45 --> 404 Page Not Found: /index
ERROR - 2022-06-03 12:40:35 --> 404 Page Not Found: /index
ERROR - 2022-06-03 13:37:53 --> 404 Page Not Found: /index
ERROR - 2022-06-03 13:38:06 --> 404 Page Not Found: /index
ERROR - 2022-06-03 13:46:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2022-06-03 13:46:06 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-06-03 13:59:45 --> Query error: Column 'hasil_resume' cannot be null - Invalid query: INSERT INTO `trx_resume` (`status`, `id_pelayanan`, `nama_dokter`, `jenis_resume`, `hasil_resume`, `created_by`, `modified_by`) VALUES ('ACTIVE', '57208', '', 'KATEGORI', NULL, '557', '557')
ERROR - 2022-06-03 17:59:49 --> 404 Page Not Found: /index
ERROR - 2022-06-03 20:00:51 --> 404 Page Not Found: /index
ERROR - 2022-06-03 20:00:52 --> 404 Page Not Found: /index
ERROR - 2022-06-03 23:11:09 --> 404 Page Not Found: /index
ERROR - 2022-06-03 23:11:19 --> 404 Page Not Found: /index
