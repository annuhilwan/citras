<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-03-29 02:40:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 04:40:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:21:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 08:21:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 08:21:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 08:22:31 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:25:48 --> 404 Page Not Found: /index
ERROR - 2022-03-29 08:25:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 08:25:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 08:25:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 08:27:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 08:27:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 08:27:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 08:30:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 08:30:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 08:30:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 09:31:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 09:31:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 09:31:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 09:42:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 09:42:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 09:42:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 09:55:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 09:55:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 09:55:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 10:08:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2022-03-29 10:08:59 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-03-29 10:10:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2022-03-29 10:10:05 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-03-29 10:10:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2022-03-29 10:10:07 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-03-29 10:10:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2022-03-29 10:10:09 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-03-29 11:14:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 11:14:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 11:14:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 11:17:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 11:17:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 11:17:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 11:23:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 11:23:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 11:23:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 11:33:39 --> Query error: Column 'nama_dokter' cannot be null - Invalid query: INSERT INTO `trx_resume` (`status`, `flag_generate`, `id_pelayanan`, `nama_dokter`, `jenis_resume`, `hasil_resume`, `created_by`) VALUES ('ACTIVE', 'YES', '34458', NULL, 'KESIMPULAN', 'VISUS MATA OD : -0. 25', '7')
ERROR - 2022-03-29 11:33:39 --> Query error: Column 'nama_dokter' cannot be null - Invalid query: INSERT INTO `trx_resume` (`status`, `flag_generate`, `id_pelayanan`, `nama_dokter`, `jenis_resume`, `hasil_resume`, `created_by`) VALUES ('ACTIVE', 'YES', '34458', NULL, 'KESIMPULAN', 'VISUS MATA OD Silinder : Silinder : normal', '7')
ERROR - 2022-03-29 11:33:43 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:33:44 --> 404 Page Not Found: /index
ERROR - 2022-03-29 11:33:51 --> Query error: Column 'nama_dokter' cannot be null - Invalid query: INSERT INTO `trx_resume` (`status`, `flag_generate`, `id_pelayanan`, `nama_dokter`, `jenis_resume`, `hasil_resume`, `created_by`) VALUES ('ACTIVE', 'YES', '34458', NULL, 'KESIMPULAN', 'VISUS MATA OD : -0. 25', '7')
ERROR - 2022-03-29 11:33:51 --> Query error: Column 'nama_dokter' cannot be null - Invalid query: INSERT INTO `trx_resume` (`status`, `flag_generate`, `id_pelayanan`, `nama_dokter`, `jenis_resume`, `hasil_resume`, `created_by`) VALUES ('ACTIVE', 'YES', '34458', NULL, 'KESIMPULAN', 'VISUS MATA OD Silinder : Silinder : normal', '7')
ERROR - 2022-03-29 11:33:59 --> Query error: Column 'nama_dokter' cannot be null - Invalid query: INSERT INTO `trx_resume` (`status`, `flag_generate`, `id_pelayanan`, `nama_dokter`, `jenis_resume`, `hasil_resume`, `created_by`) VALUES ('ACTIVE', 'YES', '34458', NULL, 'KESIMPULAN', 'VISUS MATA OD : -0. 25', '7')
ERROR - 2022-03-29 11:34:06 --> Query error: Column 'nama_dokter' cannot be null - Invalid query: INSERT INTO `trx_resume` (`status`, `flag_generate`, `id_pelayanan`, `nama_dokter`, `jenis_resume`, `hasil_resume`, `created_by`) VALUES ('ACTIVE', 'YES', '34458', NULL, 'KESIMPULAN', 'VISUS MATA OD : -0. 25', '7')
ERROR - 2022-03-29 11:34:06 --> Query error: Column 'nama_dokter' cannot be null - Invalid query: INSERT INTO `trx_resume` (`status`, `flag_generate`, `id_pelayanan`, `nama_dokter`, `jenis_resume`, `hasil_resume`, `created_by`) VALUES ('ACTIVE', 'YES', '34458', NULL, 'KESIMPULAN', 'VISUS MATA OS Silinder : Silinder : -0. 25', '7')
ERROR - 2022-03-29 11:36:25 --> Query error: Column 'nama_dokter' cannot be null - Invalid query: INSERT INTO `trx_resume` (`status`, `flag_generate`, `id_pelayanan`, `nama_dokter`, `jenis_resume`, `hasil_resume`, `created_by`) VALUES ('ACTIVE', 'YES', '34458', NULL, 'KESIMPULAN', 'VISUS MATA OD : -0.25', '7')
ERROR - 2022-03-29 11:36:25 --> Query error: Column 'nama_dokter' cannot be null - Invalid query: INSERT INTO `trx_resume` (`status`, `flag_generate`, `id_pelayanan`, `nama_dokter`, `jenis_resume`, `hasil_resume`, `created_by`) VALUES ('ACTIVE', 'YES', '34458', NULL, 'KESIMPULAN', 'VISUS MATA OS Silinder : Silinder : -0. 25', '7')
ERROR - 2022-03-29 12:33:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 12:33:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 12:33:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 12:34:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 12:34:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 12:34:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 13:03:04 --> 404 Page Not Found: /index
ERROR - 2022-03-29 13:25:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 14:42:57 --> 404 Page Not Found: /index
ERROR - 2022-03-29 15:54:25 --> 404 Page Not Found: /index
ERROR - 2022-03-29 16:05:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 16:05:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 16:05:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 16:08:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 16:08:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 16:08:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 16:13:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 16:13:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 16:13:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 17:43:56 --> 404 Page Not Found: /index
ERROR - 2022-03-29 17:44:26 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:48:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 21:48:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 21:48:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 21:49:06 --> 404 Page Not Found: /index
ERROR - 2022-03-29 21:53:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 21:53:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 21:53:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 21:53:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 21:53:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 21:53:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 21:53:54 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:26:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 22:26:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 22:26:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 22:27:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 22:27:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 22:27:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 22:27:49 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:28:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 22:28:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 22:28:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 22:28:39 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:34:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 22:34:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 22:34:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 22:34:42 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:34:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 22:34:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 22:34:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 22:35:01 --> 404 Page Not Found: /index
ERROR - 2022-03-29 22:35:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 22:35:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 22:35:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 23:03:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 23:03:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 23:03:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 23:04:30 --> 404 Page Not Found: /index
ERROR - 2022-03-29 23:05:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 23:05:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 23:05:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 23:09:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 23:09:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 23:09:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 23:10:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-03-29 23:10:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-03-29 23:10:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-03-29 23:14:20 --> 404 Page Not Found: /index
