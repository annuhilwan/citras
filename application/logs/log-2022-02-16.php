<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-02-16 01:00:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2022-02-16 01:00:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2022-02-16 01:00:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2022-02-16 01:13:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2022-02-16 01:13:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2022-02-16 01:13:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2022-02-16 01:17:44 --> 404 Page Not Found: /index
ERROR - 2022-02-16 01:21:49 --> Severity: Warning --> Error while sending QUERY packet. PID=15287 /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2022-02-16 01:21:49 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `setting`
ERROR - 2022-02-16 01:21:49 --> Severity: error --> Exception: Call to a member function result() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/setting/models/Setting_model.php 16
ERROR - 2022-02-16 01:23:15 --> Severity: Warning --> Error while sending QUERY packet. PID=14437 /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2022-02-16 01:23:15 --> Query error: MySQL server has gone away - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2022-02-16 01:23:15 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 225
ERROR - 2022-02-16 01:23:52 --> Severity: Warning --> Error while sending QUERY packet. PID=34794 /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2022-02-16 01:23:52 --> Query error: MySQL server has gone away - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi = 44462 order by a.urutan asc
ERROR - 2022-02-16 01:23:52 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-02-16 01:23:52 --> Severity: Warning --> Error while sending QUERY packet. PID=47229 /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2022-02-16 01:23:52 --> Query error: MySQL server has gone away - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi = 45444 order by a.urutan asc
ERROR - 2022-02-16 01:23:52 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-02-16 01:37:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-16 01:37:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-16 01:37:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-16 01:40:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-16 01:40:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-16 01:40:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-16 02:07:37 --> Query error: Duplicate entry '33671@email.com' for key 'email' - Invalid query: UPDATE `users` SET `status` = 'active', `name` = 'ONJO JOHARUDIN', `email` = '33671@email.com', `profile_pic` = 'user.png'
WHERE `users_id` = '13547'
ERROR - 2022-02-16 03:30:46 --> 404 Page Not Found: /index
ERROR - 2022-02-16 03:30:46 --> 404 Page Not Found: /index
ERROR - 2022-02-16 03:30:46 --> 404 Page Not Found: /index
ERROR - 2022-02-16 03:30:46 --> 404 Page Not Found: /index
ERROR - 2022-02-16 03:30:47 --> 404 Page Not Found: /index
ERROR - 2022-02-16 03:30:47 --> 404 Page Not Found: /index
ERROR - 2022-02-16 03:30:47 --> 404 Page Not Found: /index
ERROR - 2022-02-16 03:30:47 --> 404 Page Not Found: /index
ERROR - 2022-02-16 04:30:03 --> 404 Page Not Found: /index
ERROR - 2022-02-16 04:30:04 --> 404 Page Not Found: /index
ERROR - 2022-02-16 04:30:04 --> 404 Page Not Found: /index
ERROR - 2022-02-16 05:27:43 --> 404 Page Not Found: /index
ERROR - 2022-02-16 06:26:50 --> 404 Page Not Found: /index
ERROR - 2022-02-16 06:26:50 --> 404 Page Not Found: /index
ERROR - 2022-02-16 06:48:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2022-02-16 06:48:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2022-02-16 06:48:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2022-02-16 06:50:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-16 06:50:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-16 06:50:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-16 07:16:53 --> 404 Page Not Found: /index
ERROR - 2022-02-16 07:54:25 --> 404 Page Not Found: /index
ERROR - 2022-02-16 15:34:25 --> 404 Page Not Found: /index
ERROR - 2022-02-16 16:23:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-16 16:23:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-16 16:23:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-16 16:36:13 --> 404 Page Not Found: /index
ERROR - 2022-02-16 16:38:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-16 16:38:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-16 16:38:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-16 16:41:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-16 16:41:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-16 16:41:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-16 16:44:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-16 16:44:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-16 16:44:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-16 17:01:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-16 17:01:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-16 17:01:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-16 17:02:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-16 17:02:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-16 17:02:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-16 17:03:16 --> 404 Page Not Found: /index
ERROR - 2022-02-16 17:05:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-16 17:05:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-16 17:05:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-16 17:11:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-16 17:11:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-16 17:11:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-16 17:36:32 --> 404 Page Not Found: /index
ERROR - 2022-02-16 17:55:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-16 17:55:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-16 17:55:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-16 18:47:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-16 18:47:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-16 18:47:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-16 18:47:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-16 18:47:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-16 18:47:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-16 18:47:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-16 18:47:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-16 18:47:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-16 18:48:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-16 18:48:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-16 18:48:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-16 18:49:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-16 18:49:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-16 18:49:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-16 21:12:18 --> 404 Page Not Found: /index
ERROR - 2022-02-16 21:12:19 --> 404 Page Not Found: /index
ERROR - 2022-02-16 21:37:05 --> Severity: Warning --> Error while sending QUERY packet. PID=36223 /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2022-02-16 21:37:05 --> Query error: MySQL server has gone away - Invalid query: SELECT id FROM trx_pelayanan 
									where id_medcheck_perusahaan = 235;
ERROR - 2022-02-16 21:37:05 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Excel_export_model.php 62
ERROR - 2022-02-16 23:22:38 --> 404 Page Not Found: /index
ERROR - 2022-02-16 23:22:40 --> 404 Page Not Found: /index
ERROR - 2022-02-16 23:25:26 --> 404 Page Not Found: /index
ERROR - 2022-02-16 23:51:32 --> 404 Page Not Found: /index
