<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-05-25 04:03:49 --> 404 Page Not Found: /index
ERROR - 2024-05-25 04:03:50 --> 404 Page Not Found: /index
ERROR - 2024-05-25 04:03:52 --> 404 Page Not Found: /index
ERROR - 2024-05-25 05:17:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 05:17:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 05:17:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 05:17:48 --> 404 Page Not Found: /index
ERROR - 2024-05-25 06:18:44 --> 404 Page Not Found: /index
ERROR - 2024-05-25 06:43:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 06:43:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 06:43:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 06:43:09 --> 404 Page Not Found: /index
ERROR - 2024-05-25 06:58:37 --> 404 Page Not Found: /index
ERROR - 2024-05-25 06:58:38 --> 404 Page Not Found: /index
ERROR - 2024-05-25 06:58:39 --> 404 Page Not Found: /index
ERROR - 2024-05-25 06:58:40 --> 404 Page Not Found: /index
ERROR - 2024-05-25 07:17:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 07:17:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 07:17:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 07:17:27 --> 404 Page Not Found: /index
ERROR - 2024-05-25 07:18:48 --> 404 Page Not Found: /index
ERROR - 2024-05-25 07:23:51 --> 404 Page Not Found: /index
ERROR - 2024-05-25 07:49:32 --> 404 Page Not Found: /index
ERROR - 2024-05-25 07:52:39 --> 404 Page Not Found: /index
ERROR - 2024-05-25 07:58:23 --> 404 Page Not Found: /index
ERROR - 2024-05-25 08:15:22 --> 404 Page Not Found: /index
ERROR - 2024-05-25 08:16:27 --> 404 Page Not Found: /index
ERROR - 2024-05-25 08:18:48 --> 404 Page Not Found: /index
ERROR - 2024-05-25 08:25:54 --> 404 Page Not Found: /index
ERROR - 2024-05-25 08:28:31 --> 404 Page Not Found: /index
ERROR - 2024-05-25 08:30:02 --> 404 Page Not Found: /index
ERROR - 2024-05-25 08:35:55 --> 404 Page Not Found: /index
ERROR - 2024-05-25 08:36:35 --> 404 Page Not Found: /index
ERROR - 2024-05-25 08:44:10 --> 404 Page Not Found: /index
ERROR - 2024-05-25 08:44:52 --> 404 Page Not Found: /index
ERROR - 2024-05-25 08:45:33 --> 404 Page Not Found: /index
ERROR - 2024-05-25 08:46:03 --> 404 Page Not Found: /index
ERROR - 2024-05-25 08:46:22 --> 404 Page Not Found: /index
ERROR - 2024-05-25 08:47:53 --> 404 Page Not Found: /index
ERROR - 2024-05-25 08:48:03 --> 404 Page Not Found: /index
ERROR - 2024-05-25 08:49:13 --> 404 Page Not Found: /index
ERROR - 2024-05-25 08:52:10 --> 404 Page Not Found: /index
ERROR - 2024-05-25 08:52:56 --> 404 Page Not Found: /index
ERROR - 2024-05-25 08:54:16 --> Severity: Warning --> mysqli::query(): MySQL server has gone away /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2024-05-25 08:54:16 --> Severity: Warning --> mysqli::query(): Error reading result set's header /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2024-05-25 08:54:16 --> Query error: MySQL server has gone away - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
								 where   year(a.tanggal_mulai) = '2023' 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2024-05-25 08:54:16 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 277
ERROR - 2024-05-25 08:54:18 --> 404 Page Not Found: /index
ERROR - 2024-05-25 08:56:08 --> 404 Page Not Found: /index
ERROR - 2024-05-25 08:59:01 --> Severity: Warning --> mysqli::query(): MySQL server has gone away /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2024-05-25 08:59:01 --> Severity: Warning --> mysqli::query(): Error reading result set's header /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2024-05-25 08:59:01 --> Query error: MySQL server has gone away - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
								 where   year(a.tanggal_mulai) = '2023' 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2024-05-25 08:59:01 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 277
ERROR - 2024-05-25 08:59:31 --> Severity: Warning --> mysqli::query(): MySQL server has gone away /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2024-05-25 08:59:31 --> Severity: Warning --> mysqli::query(): Error reading result set's header /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2024-05-25 08:59:31 --> Query error: MySQL server has gone away - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
								 where   year(a.tanggal_mulai) = '2023' 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2024-05-25 08:59:31 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 277
ERROR - 2024-05-25 08:59:33 --> 404 Page Not Found: /index
ERROR - 2024-05-25 09:01:01 --> Severity: Warning --> mysqli::query(): MySQL server has gone away /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2024-05-25 09:01:01 --> Severity: Warning --> mysqli::query(): Error reading result set's header /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2024-05-25 09:01:01 --> Query error: MySQL server has gone away - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
								 where   year(a.tanggal_mulai) = '2023' 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2024-05-25 09:01:01 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 277
ERROR - 2024-05-25 09:02:39 --> 404 Page Not Found: /index
ERROR - 2024-05-25 09:06:00 --> 404 Page Not Found: /index
ERROR - 2024-05-25 09:07:50 --> 404 Page Not Found: /index
ERROR - 2024-05-25 09:18:00 --> 404 Page Not Found: /index
ERROR - 2024-05-25 09:21:01 --> 404 Page Not Found: /index
ERROR - 2024-05-25 09:24:50 --> 404 Page Not Found: /index
ERROR - 2024-05-25 09:28:33 --> 404 Page Not Found: /index
ERROR - 2024-05-25 09:28:46 --> 404 Page Not Found: /index
ERROR - 2024-05-25 09:29:05 --> 404 Page Not Found: /index
ERROR - 2024-05-25 09:31:05 --> 404 Page Not Found: /index
ERROR - 2024-05-25 09:39:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 09:39:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 09:39:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 09:46:20 --> 404 Page Not Found: /index
ERROR - 2024-05-25 09:53:47 --> 404 Page Not Found: /index
ERROR - 2024-05-25 09:54:18 --> 404 Page Not Found: /index
ERROR - 2024-05-25 10:00:14 --> 404 Page Not Found: /index
ERROR - 2024-05-25 10:16:47 --> 404 Page Not Found: /index
ERROR - 2024-05-25 10:18:12 --> 404 Page Not Found: /index
ERROR - 2024-05-25 10:20:02 --> 404 Page Not Found: /index
ERROR - 2024-05-25 10:21:07 --> 404 Page Not Found: /index
ERROR - 2024-05-25 10:22:04 --> 404 Page Not Found: /index
ERROR - 2024-05-25 10:26:17 --> 404 Page Not Found: /index
ERROR - 2024-05-25 10:29:34 --> 404 Page Not Found: /index
ERROR - 2024-05-25 10:31:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 10:31:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 10:31:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 10:33:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 10:33:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 10:33:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 10:40:20 --> 404 Page Not Found: /index
ERROR - 2024-05-25 10:52:34 --> 404 Page Not Found: /index
ERROR - 2024-05-25 10:56:11 --> 404 Page Not Found: /index
ERROR - 2024-05-25 10:58:46 --> 404 Page Not Found: /index
ERROR - 2024-05-25 10:59:16 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:02:28 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:05:53 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:06:06 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:06:58 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:07:14 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:07:29 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:11:50 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:15:10 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:15:36 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:18:58 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:20:01 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:24:15 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:25:01 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:25:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 11:25:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 11:25:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 11:25:48 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:25:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 11:25:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 11:25:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 11:26:49 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:27:27 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:30:42 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:31:46 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:50:14 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:52:17 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:55:49 --> 404 Page Not Found: /index
ERROR - 2024-05-25 11:56:00 --> 404 Page Not Found: /index
ERROR - 2024-05-25 12:32:33 --> 404 Page Not Found: /index
ERROR - 2024-05-25 12:35:02 --> 404 Page Not Found: /index
ERROR - 2024-05-25 12:42:00 --> 404 Page Not Found: /index
ERROR - 2024-05-25 12:58:52 --> 404 Page Not Found: /index
ERROR - 2024-05-25 12:58:53 --> 404 Page Not Found: /index
ERROR - 2024-05-25 13:16:15 --> 404 Page Not Found: /index
ERROR - 2024-05-25 13:29:11 --> 404 Page Not Found: /index
ERROR - 2024-05-25 13:34:35 --> 404 Page Not Found: /index
ERROR - 2024-05-25 13:48:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 13:48:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 13:48:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 13:48:34 --> 404 Page Not Found: /index
ERROR - 2024-05-25 13:54:44 --> 404 Page Not Found: /index
ERROR - 2024-05-25 14:12:46 --> 404 Page Not Found: /index
ERROR - 2024-05-25 14:12:46 --> 404 Page Not Found: /index
ERROR - 2024-05-25 15:02:58 --> 404 Page Not Found: /index
ERROR - 2024-05-25 15:21:48 --> 404 Page Not Found: /index
ERROR - 2024-05-25 15:26:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 15:26:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 15:26:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 15:46:19 --> 404 Page Not Found: /index
ERROR - 2024-05-25 15:46:21 --> 404 Page Not Found: /index
ERROR - 2024-05-25 15:46:23 --> 404 Page Not Found: /index
ERROR - 2024-05-25 15:56:27 --> 404 Page Not Found: /index
ERROR - 2024-05-25 15:57:29 --> 404 Page Not Found: /index
ERROR - 2024-05-25 16:44:20 --> 404 Page Not Found: /index
ERROR - 2024-05-25 17:13:20 --> 404 Page Not Found: /index
ERROR - 2024-05-25 17:16:42 --> 404 Page Not Found: /index
ERROR - 2024-05-25 17:32:42 --> 404 Page Not Found: /index
ERROR - 2024-05-25 17:32:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 17:32:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 17:32:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 17:32:59 --> 404 Page Not Found: /index
ERROR - 2024-05-25 17:34:15 --> 404 Page Not Found: /index
ERROR - 2024-05-25 17:34:15 --> 404 Page Not Found: /index
ERROR - 2024-05-25 17:38:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 17:38:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 17:38:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 17:38:17 --> 404 Page Not Found: /index
ERROR - 2024-05-25 17:39:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 17:39:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 17:39:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 17:39:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 17:39:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 17:39:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 17:40:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 17:40:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 17:40:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 17:40:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 17:40:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 17:40:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 18:14:11 --> 404 Page Not Found: /index
ERROR - 2024-05-25 18:42:49 --> 404 Page Not Found: /index
ERROR - 2024-05-25 18:43:36 --> 404 Page Not Found: /index
ERROR - 2024-05-25 18:52:50 --> 404 Page Not Found: /index
ERROR - 2024-05-25 18:54:41 --> 404 Page Not Found: /index
ERROR - 2024-05-25 19:22:59 --> 404 Page Not Found: /index
ERROR - 2024-05-25 19:44:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 19:44:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 19:44:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 19:44:34 --> 404 Page Not Found: /index
ERROR - 2024-05-25 19:46:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 19:46:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 19:46:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 19:46:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 19:46:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 19:46:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 19:50:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 19:50:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 19:50:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 19:50:31 --> 404 Page Not Found: /index
ERROR - 2024-05-25 19:57:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 19:57:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 19:57:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 20:17:16 --> 404 Page Not Found: /index
ERROR - 2024-05-25 20:21:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 20:21:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 20:21:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 20:21:34 --> 404 Page Not Found: /index
ERROR - 2024-05-25 20:37:53 --> 404 Page Not Found: /index
ERROR - 2024-05-25 20:41:02 --> 404 Page Not Found: /index
ERROR - 2024-05-25 22:03:10 --> 404 Page Not Found: /index
ERROR - 2024-05-25 22:54:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 314
ERROR - 2024-05-25 22:54:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 388
ERROR - 2024-05-25 22:54:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 433
ERROR - 2024-05-25 22:54:11 --> 404 Page Not Found: /index
ERROR - 2024-05-25 23:05:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2024-05-25 23:05:12 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 1086
ERROR - 2024-05-25 23:05:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.pertanyaan_inggris, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2024-05-25 23:05:18 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 1086
