<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-25 01:16:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2023-04-25 01:16:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2023-04-25 01:16:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2023-04-25 01:58:48 --> 404 Page Not Found: /index
ERROR - 2023-04-25 02:32:17 --> 404 Page Not Found: /index
ERROR - 2023-04-25 02:32:19 --> 404 Page Not Found: /index
ERROR - 2023-04-25 03:28:56 --> 404 Page Not Found: /index
ERROR - 2023-04-25 03:28:58 --> 404 Page Not Found: /index
ERROR - 2023-04-25 03:32:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2023-04-25 03:32:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2023-04-25 03:32:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2023-04-25 05:39:14 --> 404 Page Not Found: /index
ERROR - 2023-04-25 05:39:14 --> 404 Page Not Found: /index
ERROR - 2023-04-25 05:39:15 --> 404 Page Not Found: /index
ERROR - 2023-04-25 05:43:27 --> 404 Page Not Found: /index
ERROR - 2023-04-25 05:43:45 --> 404 Page Not Found: /index
ERROR - 2023-04-25 05:46:19 --> Severity: Warning --> mysqli::query(): MySQL server has gone away /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2023-04-25 05:46:19 --> Severity: Warning --> mysqli::query(): Error reading result set's header /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2023-04-25 05:46:19 --> Query error: MySQL server has gone away - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2023-04-25 05:46:19 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 250
ERROR - 2023-04-25 07:48:22 --> 404 Page Not Found: /index
ERROR - 2023-04-25 08:21:31 --> 404 Page Not Found: /index
ERROR - 2023-04-25 09:07:35 --> 404 Page Not Found: /index
ERROR - 2023-04-25 10:15:50 --> 404 Page Not Found: /index
ERROR - 2023-04-25 10:15:53 --> 404 Page Not Found: /index
ERROR - 2023-04-25 10:15:56 --> 404 Page Not Found: /index
ERROR - 2023-04-25 10:15:59 --> 404 Page Not Found: /index
ERROR - 2023-04-25 10:16:02 --> 404 Page Not Found: /index
ERROR - 2023-04-25 10:16:04 --> 404 Page Not Found: /index
ERROR - 2023-04-25 11:36:55 --> 404 Page Not Found: /index
ERROR - 2023-04-25 12:16:58 --> 404 Page Not Found: /index
ERROR - 2023-04-25 12:19:56 --> 404 Page Not Found: /index
ERROR - 2023-04-25 12:19:57 --> 404 Page Not Found: /index
ERROR - 2023-04-25 13:22:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2023-04-25 13:22:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2023-04-25 13:22:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2023-04-25 14:29:47 --> 404 Page Not Found: /index
ERROR - 2023-04-25 14:33:27 --> 404 Page Not Found: /index
ERROR - 2023-04-25 14:33:30 --> 404 Page Not Found: /index
ERROR - 2023-04-25 14:33:34 --> 404 Page Not Found: /index
ERROR - 2023-04-25 14:33:35 --> 404 Page Not Found: /index
ERROR - 2023-04-25 14:33:37 --> 404 Page Not Found: /index
ERROR - 2023-04-25 14:45:18 --> 404 Page Not Found: /index
ERROR - 2023-04-25 14:45:18 --> 404 Page Not Found: /index
ERROR - 2023-04-25 14:51:44 --> 404 Page Not Found: /index
ERROR - 2023-04-25 17:17:14 --> 404 Page Not Found: /index
ERROR - 2023-04-25 17:17:15 --> 404 Page Not Found: /index
ERROR - 2023-04-25 22:34:15 --> 404 Page Not Found: /index
ERROR - 2023-04-25 22:34:17 --> 404 Page Not Found: /index
ERROR - 2023-04-25 22:39:20 --> 404 Page Not Found: /index
ERROR - 2023-04-25 22:39:20 --> 404 Page Not Found: /index
ERROR - 2023-04-25 22:42:17 --> 404 Page Not Found: /index
ERROR - 2023-04-25 22:42:17 --> 404 Page Not Found: /index
ERROR - 2023-04-25 22:42:19 --> 404 Page Not Found: /index
ERROR - 2023-04-25 22:42:20 --> 404 Page Not Found: /index
