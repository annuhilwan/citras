<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-07-02 01:33:01 --> Severity: Warning --> mysqli::query(): MySQL server has gone away /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2022-07-02 01:33:01 --> Severity: Warning --> mysqli::query(): Error reading result set's header /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2022-07-02 01:33:01 --> Query error: MySQL server has gone away - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2022-07-02 01:33:01 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 225
ERROR - 2022-07-02 03:03:40 --> 404 Page Not Found: /index
ERROR - 2022-07-02 06:25:02 --> 404 Page Not Found: /index
ERROR - 2022-07-02 06:25:03 --> 404 Page Not Found: /index
ERROR - 2022-07-02 08:29:16 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 25) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-07-02 08:29:16 --> Unable to connect to the database
ERROR - 2022-07-02 13:31:49 --> 404 Page Not Found: /index
ERROR - 2022-07-02 13:31:50 --> 404 Page Not Found: /index
ERROR - 2022-07-02 14:02:44 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 25) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-07-02 14:02:44 --> Unable to connect to the database
ERROR - 2022-07-02 14:02:45 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 25) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-07-02 14:02:45 --> Unable to connect to the database
ERROR - 2022-07-02 14:02:45 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 25) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-07-02 14:02:45 --> Unable to connect to the database
ERROR - 2022-07-02 14:02:47 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 25) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-07-02 14:02:47 --> Unable to connect to the database
ERROR - 2022-07-02 14:02:47 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 25) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-07-02 14:02:47 --> Unable to connect to the database
ERROR - 2022-07-02 14:02:49 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 25) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-07-02 14:02:49 --> Unable to connect to the database
ERROR - 2022-07-02 14:02:49 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 25) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-07-02 14:02:49 --> Unable to connect to the database
ERROR - 2022-07-02 14:02:50 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 25) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-07-02 14:02:50 --> Unable to connect to the database
ERROR - 2022-07-02 14:02:56 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-07-02 14:02:56 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-07-02 14:02:56 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-07-02 14:02:56 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-07-02 14:02:56 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-07-02 14:02:56 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-07-02 14:35:42 --> 404 Page Not Found: /index
ERROR - 2022-07-02 15:48:34 --> Query error: Duplicate entry 'ega-wijaya@unicharm.com' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', 'AJENG RESTU PANGESTIKA', '$2y$10$ZZGkpUsHuCXLZrmd/H3D/.WyCgO6qL5S2ALgX27i1I0awdQJ9Pfo2', 'ega-wijaya@unicharm.com', 'user.png', 'Pasien', 47598)
ERROR - 2022-07-02 17:42:50 --> 404 Page Not Found: /index
ERROR - 2022-07-02 17:55:58 --> 404 Page Not Found: /index
ERROR - 2022-07-02 18:32:41 --> 404 Page Not Found: /index
ERROR - 2022-07-02 21:17:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-07-02 21:17:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-07-02 21:17:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
