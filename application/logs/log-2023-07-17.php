<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-17 00:02:47 --> 404 Page Not Found: /index
ERROR - 2023-07-17 00:45:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 00:45:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 00:45:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 00:47:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 00:47:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 00:47:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 00:48:50 --> 404 Page Not Found: /index
ERROR - 2023-07-17 00:53:00 --> 404 Page Not Found: /index
ERROR - 2023-07-17 00:55:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 00:55:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 00:55:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 01:00:28 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:01:38 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:02:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 01:02:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 01:02:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 01:03:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 01:03:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 01:03:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 01:05:21 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:05:30 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:09:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 01:09:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 01:09:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 01:10:02 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:13:09 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:13:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2023-07-17 01:13:12 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 1008
ERROR - 2023-07-17 01:13:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2023-07-17 01:13:42 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 1008
ERROR - 2023-07-17 01:13:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2023-07-17 01:13:45 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 1008
ERROR - 2023-07-17 01:14:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 01:14:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 01:14:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 01:16:15 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:17:04 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:18:57 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:20:11 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:23:12 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:26:17 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:29:22 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:32:24 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:33:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 01:33:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 01:33:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 01:35:28 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:38:35 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:40:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 01:40:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 01:40:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 01:41:36 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:44:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 01:44:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 01:44:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 01:44:37 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:47:38 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:50:42 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:51:20 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:53:57 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:57:09 --> 404 Page Not Found: /index
ERROR - 2023-07-17 01:59:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 01:59:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 01:59:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 01:59:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 01:59:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 01:59:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:00:10 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:00:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:00:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:00:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:02:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:02:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:02:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:02:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:02:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:02:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:03:13 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:03:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:03:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:03:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:04:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:04:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:04:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:05:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:05:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:05:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:06:16 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:07:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:07:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:07:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:09:47 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:10:15 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:11:17 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:12:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:12:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:12:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:12:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:12:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:12:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:14:01 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:14:32 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:18:01 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:18:05 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:18:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:18:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:18:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:19:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:19:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:19:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:21:02 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:21:22 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:24:03 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:24:37 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:27:04 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:27:40 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:30:07 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:30:47 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:33:08 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:34:07 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:35:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:35:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:35:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:36:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:36:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:36:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:36:09 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:37:27 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:39:11 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:39:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:39:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:39:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:40:36 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:40:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:40:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:40:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:41:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:41:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:41:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:41:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:41:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:41:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:42:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:42:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:42:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:42:18 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:43:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:43:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:43:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:43:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:43:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:43:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:43:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:43:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:43:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:43:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:43:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:43:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:43:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:43:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:43:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:43:56 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:44:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:44:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:44:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:45:24 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:46:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:46:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:46:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:46:22 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:46:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:46:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:46:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:47:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2023-07-17 02:47:13 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 1008
ERROR - 2023-07-17 02:47:19 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:48:31 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:49:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:49:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:49:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:51:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:51:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:51:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:51:40 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:51:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 02:51:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 02:51:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 02:53:14 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:55:20 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:59:09 --> 404 Page Not Found: /index
ERROR - 2023-07-17 02:59:35 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:02:37 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:02:47 --> Query error: Column 'nama_paket' cannot be null - Invalid query: INSERT INTO `master_paket_medcheck_header` (`nama_paket`, `harga_paket`, `status`) VALUES (NULL, NULL, 'ACTIVE')
ERROR - 2023-07-17 03:05:16 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:05:43 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:08:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 03:08:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 03:08:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 03:08:52 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:09:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 03:09:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 03:09:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 03:11:32 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:12:01 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:15:04 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:15:04 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:15:18 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:18:20 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:18:26 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:20:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2023-07-17 03:20:18 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 1008
ERROR - 2023-07-17 03:21:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2023-07-17 03:21:03 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 1008
ERROR - 2023-07-17 03:21:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2023-07-17 03:21:26 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 1008
ERROR - 2023-07-17 03:21:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2023-07-17 03:21:26 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 1008
ERROR - 2023-07-17 03:21:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2023-07-17 03:21:28 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 1008
ERROR - 2023-07-17 03:21:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2023-07-17 03:21:31 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 1008
ERROR - 2023-07-17 03:21:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2023-07-17 03:21:34 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 1008
ERROR - 2023-07-17 03:21:40 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:24:44 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:24:54 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:27:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 03:27:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 03:27:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 03:28:06 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:28:10 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:31:16 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:31:33 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:31:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 03:31:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 03:31:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 03:34:34 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:35:08 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:37:35 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:38:09 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:40:41 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:41:30 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:42:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 03:42:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 03:42:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 03:43:51 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:45:07 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:47:05 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:48:09 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:50:40 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:51:12 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:53:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 03:53:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 03:53:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 03:53:41 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:53:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 03:53:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 03:53:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 03:54:24 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:56:43 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:57:28 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:58:27 --> 404 Page Not Found: /index
ERROR - 2023-07-17 03:59:49 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:00:29 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:02:54 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:03:30 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:05:55 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:06:35 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:09:05 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:09:53 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:12:08 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:12:55 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:13:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 04:13:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 04:13:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 04:15:09 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:15:56 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:18:10 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:18:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 04:18:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 04:18:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 04:21:14 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:21:46 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:23:29 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:24:47 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:27:29 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:27:29 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:27:29 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:27:29 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:28:00 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:29:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 04:29:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 04:29:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 04:31:01 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:34:20 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:37:25 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:41:19 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:43:11 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:44:26 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:46:18 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:47:47 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:49:23 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:49:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 04:49:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 04:49:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 04:50:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 04:50:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 04:50:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 04:51:36 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:51:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 04:51:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 04:51:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 04:52:30 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:54:39 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:55:38 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:58:19 --> 404 Page Not Found: /index
ERROR - 2023-07-17 04:58:47 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:01:46 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:01:50 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:04:53 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:04:55 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:08:02 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:08:05 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:11:08 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:11:16 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:14:13 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:16:05 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:17:15 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:18:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 05:18:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 05:18:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 05:18:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 05:18:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 05:18:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 05:20:47 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:20:53 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:25:16 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:27:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 05:27:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 05:27:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 05:28:17 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:28:21 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:31:18 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:31:51 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:34:19 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:34:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 05:34:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 05:34:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 05:34:55 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:36:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 05:36:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 05:36:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 05:37:23 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:37:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 05:37:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 05:37:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 05:37:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 05:37:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 05:37:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 05:37:56 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:40:31 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:41:08 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:43:36 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:44:11 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:46:44 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:47:22 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:49:50 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:50:42 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:53:49 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:57:12 --> 404 Page Not Found: /index
ERROR - 2023-07-17 05:58:10 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:01:14 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:04:18 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:07:19 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:08:38 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:10:24 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:10:40 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:13:27 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:13:50 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:16:28 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:16:51 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:19:30 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:19:57 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:22:34 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:23:28 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:25:50 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:26:29 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:28:53 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:29:32 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:31:54 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:32:35 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:33:56 --> Query error: Column 'nama_paket' cannot be null - Invalid query: INSERT INTO `master_paket_medcheck_header` (`nama_paket`, `harga_paket`, `status`) VALUES (NULL, NULL, 'ACTIVE')
ERROR - 2023-07-17 06:34:56 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:35:45 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:37:58 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:39:00 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:39:07 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:40:59 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:42:11 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:44:02 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:45:22 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:47:46 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:48:35 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:50:52 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:51:36 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:53:58 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:55:03 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:57:02 --> 404 Page Not Found: /index
ERROR - 2023-07-17 06:58:37 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:00:03 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:01:43 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:03:06 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:06:19 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:06:25 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:09:32 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:10:33 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:12:38 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:15:49 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:18:55 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:20:40 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:22:00 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:23:48 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:25:01 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:25:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 07:25:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 07:25:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 07:27:29 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:28:05 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:30:48 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:32:19 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:33:58 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:35:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 07:35:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 07:35:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 07:35:24 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:37:04 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:37:35 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:37:35 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:37:35 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:37:35 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:38:29 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:40:16 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:41:36 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:43:41 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:45:01 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:46:58 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:48:03 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:50:00 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:51:06 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:52:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 07:52:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 07:52:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 07:53:21 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:53:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 07:53:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 07:53:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 07:54:13 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:56:22 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:57:21 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:57:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 07:57:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 07:57:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 07:59:23 --> 404 Page Not Found: /index
ERROR - 2023-07-17 07:59:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 07:59:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 07:59:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 08:00:23 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:03:12 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:03:34 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:06:16 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:06:39 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:09:19 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:09:42 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:12:21 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:12:48 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:14:33 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:15:25 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:15:52 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:18:28 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:18:58 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:21:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 08:21:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 08:21:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 08:21:42 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:22:00 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:23:59 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:23:59 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:23:59 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:23:59 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:24:44 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:25:02 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:27:47 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:28:11 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:31:03 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:31:24 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:34:16 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:34:25 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:37:18 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:37:47 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:40:29 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:40:58 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:43:34 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:45:48 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:46:44 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:50:09 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:51:39 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:53:16 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:56:20 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:56:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 08:56:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 08:56:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 08:56:54 --> 404 Page Not Found: /index
ERROR - 2023-07-17 08:59:26 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:00:17 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:03:40 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:06:49 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:08:29 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:09:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:09:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:09:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:09:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:09:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:09:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:10:13 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:10:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:10:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:10:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:10:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:10:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:10:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:10:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:10:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:10:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:10:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:10:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:10:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:10:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:10:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:10:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:11:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:11:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:11:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:11:35 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:12:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:12:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:12:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:13:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:13:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:13:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:13:29 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:14:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:14:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:14:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:14:44 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:15:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:15:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:15:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:16:42 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:17:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:17:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:17:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:17:45 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:18:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:18:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:18:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:20:05 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:23:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:23:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:23:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:23:07 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:23:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:23:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:23:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:23:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:23:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:23:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:23:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:23:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:23:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:23:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:23:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:23:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:23:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:23:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:23:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:24:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:24:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:24:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:26:12 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:26:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:26:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:26:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:27:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:27:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:27:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:28:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:28:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:28:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:29:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:29:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:29:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:29:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:29:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:29:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:29:22 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:32:24 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:34:27 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:35:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:35:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:35:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:35:27 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:37:48 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:38:28 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:40:54 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:41:30 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:42:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 09:42:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 09:42:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 09:44:01 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:44:36 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:47:08 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:47:37 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:50:10 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:50:41 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:53:12 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:53:51 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:56:13 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:56:52 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:59:15 --> 404 Page Not Found: /index
ERROR - 2023-07-17 09:59:58 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:02:16 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:03:15 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:05:19 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:06:25 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:08:20 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:09:27 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:11:22 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:12:32 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:13:51 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:13:51 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:13:52 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:13:52 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:14:46 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:15:48 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:17:47 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:18:57 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:21:09 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:22:03 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:24:14 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:25:06 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:27:17 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:28:18 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:30:19 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:31:21 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:31:38 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:33:20 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:34:29 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:36:22 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:37:40 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:39:34 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:40:42 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:42:35 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:43:47 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:45:53 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:46:53 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:48:55 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:50:00 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:51:57 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:52:34 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:52:36 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:53:03 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:55:19 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:56:11 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:58:22 --> 404 Page Not Found: /index
ERROR - 2023-07-17 10:59:24 --> 404 Page Not Found: /index
ERROR - 2023-07-17 11:03:50 --> 404 Page Not Found: /index
ERROR - 2023-07-17 11:11:05 --> 404 Page Not Found: /index
ERROR - 2023-07-17 11:14:26 --> 404 Page Not Found: /index
ERROR - 2023-07-17 11:21:19 --> 404 Page Not Found: /index
ERROR - 2023-07-17 11:21:30 --> 404 Page Not Found: /index
ERROR - 2023-07-17 11:24:29 --> 404 Page Not Found: /index
ERROR - 2023-07-17 11:24:33 --> 404 Page Not Found: /index
ERROR - 2023-07-17 11:27:40 --> 404 Page Not Found: /index
ERROR - 2023-07-17 12:11:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 12:11:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 12:11:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 12:15:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 12:15:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 12:15:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 12:15:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 12:15:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 12:15:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 12:19:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 12:19:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 12:19:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 12:19:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 12:19:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 12:19:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 12:39:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 12:39:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 12:39:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 12:41:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 12:41:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 12:41:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 12:44:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 12:44:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 12:44:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 12:44:49 --> 404 Page Not Found: /index
ERROR - 2023-07-17 12:47:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 12:47:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 12:47:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 12:47:54 --> 404 Page Not Found: /index
ERROR - 2023-07-17 12:48:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 12:48:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 12:48:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 12:48:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 12:48:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 12:48:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 12:49:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 12:49:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 12:49:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 12:51:08 --> 404 Page Not Found: /index
ERROR - 2023-07-17 12:55:34 --> 404 Page Not Found: /index
ERROR - 2023-07-17 12:59:58 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:03:24 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:05:50 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:09:03 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:09:27 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:12:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2023-07-17 13:12:26 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 1008
ERROR - 2023-07-17 13:12:33 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:12:33 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:12:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2023-07-17 13:12:33 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 1008
ERROR - 2023-07-17 13:14:21 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:14:27 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:14:39 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:15:38 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:15:51 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:18:40 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:18:54 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:22:14 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:23:00 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:23:34 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:25:33 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:26:01 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:28:52 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:29:09 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:31:59 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:32:13 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:35:09 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:35:17 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:38:14 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:38:30 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:41:26 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:41:33 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:44:37 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:44:41 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:45:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 13:45:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 13:45:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 13:47:40 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:47:57 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:48:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 13:48:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 13:48:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 13:50:56 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:51:11 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:53:59 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:57:12 --> 404 Page Not Found: /index
ERROR - 2023-07-17 13:57:43 --> 404 Page Not Found: /index
ERROR - 2023-07-17 14:01:06 --> 404 Page Not Found: /index
ERROR - 2023-07-17 14:01:31 --> 404 Page Not Found: /index
ERROR - 2023-07-17 14:01:33 --> 404 Page Not Found: /index
ERROR - 2023-07-17 14:04:29 --> 404 Page Not Found: /index
ERROR - 2023-07-17 14:04:35 --> 404 Page Not Found: /index
ERROR - 2023-07-17 14:07:36 --> 404 Page Not Found: /index
ERROR - 2023-07-17 14:10:44 --> 404 Page Not Found: /index
ERROR - 2023-07-17 14:11:39 --> 404 Page Not Found: /index
ERROR - 2023-07-17 14:12:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 14:12:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 14:12:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 14:15:21 --> 404 Page Not Found: /index
ERROR - 2023-07-17 14:19:05 --> 404 Page Not Found: /index
ERROR - 2023-07-17 14:22:15 --> 404 Page Not Found: /index
ERROR - 2023-07-17 14:22:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2023-07-17 14:22:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2023-07-17 14:22:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2023-07-17 14:22:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2023-07-17 14:22:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2023-07-17 14:22:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2023-07-17 14:23:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2023-07-17 14:23:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2023-07-17 14:23:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2023-07-17 14:25:12 --> 404 Page Not Found: /index
ERROR - 2023-07-17 14:25:37 --> 404 Page Not Found: /index
ERROR - 2023-07-17 14:36:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 14:36:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 14:36:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 14:57:24 --> 404 Page Not Found: /index
ERROR - 2023-07-17 14:57:24 --> 404 Page Not Found: /index
ERROR - 2023-07-17 14:57:24 --> 404 Page Not Found: /index
ERROR - 2023-07-17 14:57:24 --> 404 Page Not Found: /index
ERROR - 2023-07-17 15:04:00 --> 404 Page Not Found: /index
ERROR - 2023-07-17 15:04:41 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Resource temporarily unavailable /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2023-07-17 15:04:41 --> Unable to connect to the database
ERROR - 2023-07-17 15:04:41 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Resource temporarily unavailable /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2023-07-17 15:04:41 --> Unable to connect to the database
ERROR - 2023-07-17 15:04:41 --> Query error: Resource temporarily unavailable - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.01 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 27.00 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.51 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 25.00 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 17.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 18.50 THEN 'Kurus'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 17 THEN ' Sangat Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 673117
ERROR - 2023-07-17 15:04:41 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 178
ERROR - 2023-07-17 15:04:44 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Resource temporarily unavailable /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2023-07-17 15:04:44 --> Unable to connect to the database
ERROR - 2023-07-17 15:04:44 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Resource temporarily unavailable /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2023-07-17 15:04:44 --> Unable to connect to the database
ERROR - 2023-07-17 15:04:44 --> Query error: Resource temporarily unavailable - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.01 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 27.00 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.51 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 25.00 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 17.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 18.50 THEN 'Kurus'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 17 THEN ' Sangat Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 673117
ERROR - 2023-07-17 15:04:44 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 178
ERROR - 2023-07-17 15:04:48 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Resource temporarily unavailable /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2023-07-17 15:04:48 --> Unable to connect to the database
ERROR - 2023-07-17 15:04:48 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): Resource temporarily unavailable /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2023-07-17 15:04:48 --> Unable to connect to the database
ERROR - 2023-07-17 15:04:48 --> Query error: Resource temporarily unavailable - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.01 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 27.00 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.51 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 25.00 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 17.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 18.50 THEN 'Kurus'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 17 THEN ' Sangat Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 673117
ERROR - 2023-07-17 15:04:48 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 178
ERROR - 2023-07-17 15:06:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 15:06:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 15:06:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 15:07:06 --> 404 Page Not Found: /index
ERROR - 2023-07-17 15:08:50 --> 404 Page Not Found: /index
ERROR - 2023-07-17 15:09:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 15:09:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 15:09:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 15:10:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 15:10:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 15:10:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 15:11:02 --> 404 Page Not Found: /index
ERROR - 2023-07-17 15:52:36 --> 404 Page Not Found: /index
ERROR - 2023-07-17 15:52:36 --> 404 Page Not Found: /index
ERROR - 2023-07-17 15:57:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 15:57:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 15:57:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 15:59:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 15:59:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 15:59:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 16:00:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 16:00:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 16:00:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 16:04:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 16:04:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 16:04:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 16:04:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 16:04:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 16:04:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 16:05:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 16:05:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 16:05:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 16:08:43 --> 404 Page Not Found: /index
ERROR - 2023-07-17 16:09:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 16:09:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 16:09:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 16:10:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 16:10:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 16:10:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 16:13:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 16:13:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 16:13:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 16:16:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 16:16:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 16:16:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 17:28:50 --> 404 Page Not Found: /index
ERROR - 2023-07-17 18:42:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 18:42:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 18:42:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 18:46:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 18:46:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 18:46:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 18:47:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 18:47:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 18:47:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 18:47:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 18:47:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 18:47:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 20:18:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 20:18:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 20:18:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 21:18:53 --> 404 Page Not Found: /index
ERROR - 2023-07-17 21:37:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 21:37:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 21:37:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 21:39:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 21:39:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 21:39:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 22:16:47 --> 404 Page Not Found: /index
ERROR - 2023-07-17 22:36:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2023-07-17 22:36:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2023-07-17 22:36:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2023-07-17 22:54:32 --> 404 Page Not Found: /index
ERROR - 2023-07-17 22:54:32 --> 404 Page Not Found: /index
ERROR - 2023-07-17 22:54:32 --> 404 Page Not Found: /index
ERROR - 2023-07-17 22:54:32 --> 404 Page Not Found: /index
ERROR - 2023-07-17 23:06:39 --> 404 Page Not Found: /index
ERROR - 2023-07-17 23:29:15 --> 404 Page Not Found: /index
