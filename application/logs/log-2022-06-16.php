<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-06-16 00:05:24 --> 404 Page Not Found: /index
ERROR - 2022-06-16 04:10:51 --> 404 Page Not Found: /index
ERROR - 2022-06-16 04:41:31 --> 404 Page Not Found: /index
ERROR - 2022-06-16 08:19:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-06-16 08:19:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-06-16 08:19:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-06-16 08:29:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2022-06-16 08:29:39 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-06-16 08:29:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2022-06-16 08:29:43 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-06-16 08:29:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2022-06-16 08:29:45 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-06-16 11:26:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2022-06-16 11:26:18 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-06-16 11:32:31 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-06-16 11:32:31 --> Unable to connect to the database
ERROR - 2022-06-16 11:32:32 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-06-16 11:32:32 --> Unable to connect to the database
ERROR - 2022-06-16 11:32:33 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-06-16 11:32:33 --> Unable to connect to the database
ERROR - 2022-06-16 11:32:33 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-06-16 11:32:33 --> Unable to connect to the database
ERROR - 2022-06-16 11:32:33 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi = 59723 order by a.urutan asc
ERROR - 2022-06-16 11:32:33 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-06-16 11:32:35 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-06-16 11:32:35 --> Unable to connect to the database
ERROR - 2022-06-16 11:32:37 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-06-16 11:32:37 --> Unable to connect to the database
ERROR - 2022-06-16 11:32:39 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-06-16 11:32:39 --> Unable to connect to the database
ERROR - 2022-06-16 11:32:39 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-06-16 11:32:39 --> Unable to connect to the database
ERROR - 2022-06-16 11:32:39 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi = 59723 order by a.urutan asc
ERROR - 2022-06-16 11:32:39 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-06-16 11:32:39 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-06-16 11:32:39 --> Unable to connect to the database
ERROR - 2022-06-16 11:32:41 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-06-16 11:32:41 --> Unable to connect to the database
ERROR - 2022-06-16 11:32:48 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-06-16 11:32:48 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-06-16 11:32:48 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-06-16 11:32:48 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-06-16 12:41:25 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:41:26 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:41:26 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:41:26 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:42:02 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:42:02 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:42:08 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:42:09 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:42:11 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:42:17 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:42:36 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:42:51 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:42:55 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:43:03 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:43:06 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:43:23 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:43:43 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:43:45 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:44:14 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:44:24 --> 404 Page Not Found: /index
ERROR - 2022-06-16 12:44:25 --> 404 Page Not Found: /index
ERROR - 2022-06-16 13:46:11 --> 404 Page Not Found: /index
ERROR - 2022-06-16 13:46:11 --> 404 Page Not Found: /index
ERROR - 2022-06-16 13:50:24 --> 404 Page Not Found: /index
ERROR - 2022-06-16 15:00:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-06-16 15:00:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-06-16 15:00:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-06-16 15:07:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-06-16 15:07:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-06-16 15:07:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-06-16 15:09:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-06-16 15:09:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-06-16 15:09:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-06-16 15:09:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-06-16 15:09:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-06-16 15:09:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-06-16 15:36:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-06-16 15:36:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-06-16 15:36:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-06-16 15:36:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-06-16 15:36:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-06-16 15:36:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-06-16 17:15:52 --> 404 Page Not Found: /index
ERROR - 2022-06-16 20:46:13 --> 404 Page Not Found: /index
