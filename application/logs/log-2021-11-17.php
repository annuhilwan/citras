<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-17 00:23:47 --> 404 Page Not Found: /index
ERROR - 2021-11-17 00:23:47 --> 404 Page Not Found: /index
ERROR - 2021-11-17 00:23:47 --> 404 Page Not Found: /index
ERROR - 2021-11-17 00:23:47 --> 404 Page Not Found: /index
ERROR - 2021-11-17 00:23:47 --> 404 Page Not Found: /index
ERROR - 2021-11-17 00:23:47 --> 404 Page Not Found: /index
ERROR - 2021-11-17 00:23:47 --> 404 Page Not Found: /index
ERROR - 2021-11-17 00:23:47 --> 404 Page Not Found: /index
ERROR - 2021-11-17 00:23:47 --> 404 Page Not Found: /index
ERROR - 2021-11-17 00:23:47 --> 404 Page Not Found: /index
ERROR - 2021-11-17 00:23:47 --> 404 Page Not Found: /index
ERROR - 2021-11-17 00:23:47 --> 404 Page Not Found: /index
ERROR - 2021-11-17 00:23:47 --> 404 Page Not Found: /index
ERROR - 2021-11-17 00:23:47 --> 404 Page Not Found: /index
ERROR - 2021-11-17 00:23:47 --> 404 Page Not Found: /index
ERROR - 2021-11-17 00:23:47 --> 404 Page Not Found: /index
ERROR - 2021-11-17 00:23:47 --> 404 Page Not Found: /index
ERROR - 2021-11-17 00:23:47 --> 404 Page Not Found: /index
ERROR - 2021-11-17 00:33:28 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:33:28 --> Unable to connect to the database
ERROR - 2021-11-17 00:33:28 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:33:28 --> Unable to connect to the database
ERROR - 2021-11-17 00:33:28 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2021-11-17 00:33:28 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 212
ERROR - 2021-11-17 00:33:30 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:33:30 --> Unable to connect to the database
ERROR - 2021-11-17 00:33:30 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:33:30 --> Unable to connect to the database
ERROR - 2021-11-17 00:33:34 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:33:34 --> Unable to connect to the database
ERROR - 2021-11-17 00:33:34 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2021-11-17 00:33:38 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:33:38 --> Unable to connect to the database
ERROR - 2021-11-17 00:33:38 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:33:38 --> Unable to connect to the database
ERROR - 2021-11-17 00:33:38 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:33:38 --> Unable to connect to the database
ERROR - 2021-11-17 00:33:38 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: SELECT a.*, b.name FROM trx_pelayanan a left join users b on (a.created_by = b.users_id) where id = 33166
ERROR - 2021-11-17 00:33:38 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 742
ERROR - 2021-11-17 00:33:38 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:33:38 --> Unable to connect to the database
ERROR - 2021-11-17 00:33:38 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2021-11-17 00:33:44 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:33:44 --> Unable to connect to the database
ERROR - 2021-11-17 00:33:45 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:33:45 --> Unable to connect to the database
ERROR - 2021-11-17 00:33:46 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:33:46 --> Unable to connect to the database
ERROR - 2021-11-17 00:33:46 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2021-11-17 00:33:48 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:33:48 --> Unable to connect to the database
ERROR - 2021-11-17 00:33:49 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:33:49 --> Unable to connect to the database
ERROR - 2021-11-17 00:33:49 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2021-11-17 00:33:50 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:33:50 --> Unable to connect to the database
ERROR - 2021-11-17 00:33:50 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:33:50 --> Unable to connect to the database
ERROR - 2021-11-17 00:33:50 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: SELECT a.*, b.name FROM trx_pelayanan a left join users b on (a.created_by = b.users_id) where id = 33166
ERROR - 2021-11-17 00:33:50 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 742
ERROR - 2021-11-17 00:33:56 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:33:56 --> Unable to connect to the database
ERROR - 2021-11-17 00:33:56 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:33:56 --> Unable to connect to the database
ERROR - 2021-11-17 00:33:56 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: SELECT a.*, b.name FROM trx_pelayanan a left join users b on (a.created_by = b.users_id) where id = 33166
ERROR - 2021-11-17 00:33:56 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 742
ERROR - 2021-11-17 00:34:00 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:00 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:00 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:00 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:00 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 176
								 order by -c.no_medcheck desc
ERROR - 2021-11-17 00:34:00 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 318
ERROR - 2021-11-17 00:34:06 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:06 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:06 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:06 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:06 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 176
								 order by -c.no_medcheck desc
ERROR - 2021-11-17 00:34:06 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 318
ERROR - 2021-11-17 00:34:18 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:18 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:18 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:18 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:18 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.1 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 27 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 25 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 18 THEN 'Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 33144
ERROR - 2021-11-17 00:34:18 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 165
ERROR - 2021-11-17 00:34:21 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:21 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:22 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:22 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:22 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2021-11-17 00:34:23 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:23 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:23 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:23 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:23 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.1 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 27 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 25 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 18 THEN 'Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 33144
ERROR - 2021-11-17 00:34:23 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 165
ERROR - 2021-11-17 00:34:26 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:26 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:26 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:26 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:26 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: SELECT *
FROM `users`
WHERE `is_deleted` = '0' AND (`name` = 'Perawat@citraardhita.com' OR `email` = 'Perawat@citraardhita.com')
ERROR - 2021-11-17 00:34:26 --> Severity: error --> Exception: Call to a member function result() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/user/models/User_model.php 15
ERROR - 2021-11-17 00:34:30 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:30 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:30 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:30 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:30 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.1 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 27 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 25 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 18 THEN 'Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 33144
ERROR - 2021-11-17 00:34:30 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 165
ERROR - 2021-11-17 00:34:40 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:40 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:40 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:40 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:40 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.1 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 27 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 25 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 18 THEN 'Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 33646
ERROR - 2021-11-17 00:34:40 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 165
ERROR - 2021-11-17 00:34:41 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:41 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:41 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:41 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:41 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 176
								 order by -c.no_medcheck desc
ERROR - 2021-11-17 00:34:41 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 318
ERROR - 2021-11-17 00:34:41 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:41 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:42 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:42 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:42 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:42 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:42 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:42 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:42 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 176
								 order by -c.no_medcheck desc
ERROR - 2021-11-17 00:34:42 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 318
ERROR - 2021-11-17 00:34:50 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:50 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:51 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:51 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:51 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2021-11-17 00:34:53 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:53 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:53 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:34:53 --> Unable to connect to the database
ERROR - 2021-11-17 00:34:53 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: SELECT *
FROM `users`
WHERE `is_deleted` = '0' AND (`name` = 'Perawat@citraardhita.com' OR `email` = 'Perawat@citraardhita.com')
ERROR - 2021-11-17 00:34:53 --> Severity: error --> Exception: Call to a member function result() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/user/models/User_model.php 15
ERROR - 2021-11-17 00:35:14 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:35:14 --> Unable to connect to the database
ERROR - 2021-11-17 00:35:14 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:35:14 --> Unable to connect to the database
ERROR - 2021-11-17 00:35:14 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.1 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 27 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 25 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 18 THEN 'Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 33144
ERROR - 2021-11-17 00:35:14 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 165
ERROR - 2021-11-17 00:35:22 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:35:22 --> Unable to connect to the database
ERROR - 2021-11-17 00:35:22 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:35:22 --> Unable to connect to the database
ERROR - 2021-11-17 00:35:22 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: SELECT *
FROM `users`
WHERE `is_deleted` = '0' AND (`name` = 'Perawat@citraardhita.com' OR `email` = 'Perawat@citraardhita.com')
ERROR - 2021-11-17 00:35:22 --> Severity: error --> Exception: Call to a member function result() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/user/models/User_model.php 15
ERROR - 2021-11-17 00:35:45 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:35:45 --> Unable to connect to the database
ERROR - 2021-11-17 00:35:48 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:35:48 --> Unable to connect to the database
ERROR - 2021-11-17 00:36:28 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:36:28 --> Unable to connect to the database
ERROR - 2021-11-17 00:36:28 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:36:28 --> Unable to connect to the database
ERROR - 2021-11-17 00:36:38 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:36:38 --> Unable to connect to the database
ERROR - 2021-11-17 00:36:38 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:36:38 --> Unable to connect to the database
ERROR - 2021-11-17 00:36:38 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:36:38 --> Unable to connect to the database
ERROR - 2021-11-17 00:36:40 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:36:40 --> Unable to connect to the database
ERROR - 2021-11-17 00:36:51 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:36:51 --> Unable to connect to the database
ERROR - 2021-11-17 00:36:51 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:36:51 --> Unable to connect to the database
ERROR - 2021-11-17 00:36:51 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: SELECT *
FROM `users`
WHERE `is_deleted` = '0' AND (`name` = 'Opi@gmail.com' OR `email` = 'Opi@gmail.com')
ERROR - 2021-11-17 00:36:51 --> Severity: error --> Exception: Call to a member function result() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/user/models/User_model.php 15
ERROR - 2021-11-17 00:37:04 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:37:04 --> Unable to connect to the database
ERROR - 2021-11-17 00:37:04 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:37:04 --> Unable to connect to the database
ERROR - 2021-11-17 00:37:04 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:37:04 --> Unable to connect to the database
ERROR - 2021-11-17 00:37:11 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:37:11 --> Unable to connect to the database
ERROR - 2021-11-17 00:37:12 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:37:12 --> Unable to connect to the database
ERROR - 2021-11-17 00:37:12 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2021-11-17 00:37:16 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:37:16 --> Unable to connect to the database
ERROR - 2021-11-17 00:37:16 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:37:16 --> Unable to connect to the database
ERROR - 2021-11-17 00:37:16 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: SELECT *
FROM `users`
WHERE `is_deleted` = '0' AND (`name` = 'Perawat@citraardhita.com' OR `email` = 'Perawat@citraardhita.com')
ERROR - 2021-11-17 00:37:16 --> Severity: error --> Exception: Call to a member function result() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/user/models/User_model.php 15
ERROR - 2021-11-17 00:37:17 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:37:17 --> Unable to connect to the database
ERROR - 2021-11-17 00:37:17 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:37:17 --> Unable to connect to the database
ERROR - 2021-11-17 00:37:17 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: SELECT *
FROM `users`
WHERE `is_deleted` = '0' AND (`name` = 'Perawat@citraardhita.com' OR `email` = 'Perawat@citraardhita.com')
ERROR - 2021-11-17 00:37:17 --> Severity: error --> Exception: Call to a member function result() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/user/models/User_model.php 15
ERROR - 2021-11-17 00:37:26 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:37:26 --> Unable to connect to the database
ERROR - 2021-11-17 00:37:31 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:37:31 --> Unable to connect to the database
ERROR - 2021-11-17 00:37:32 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:37:32 --> Unable to connect to the database
ERROR - 2021-11-17 00:37:44 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:37:44 --> Unable to connect to the database
ERROR - 2021-11-17 00:37:45 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:37:45 --> Unable to connect to the database
ERROR - 2021-11-17 00:37:45 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2021-11-17 00:37:48 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:37:48 --> Unable to connect to the database
ERROR - 2021-11-17 00:37:48 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 176
								 order by -c.no_medcheck desc
ERROR - 2021-11-17 00:37:48 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 318
ERROR - 2021-11-17 00:37:54 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:37:54 --> Unable to connect to the database
ERROR - 2021-11-17 00:37:54 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:37:54 --> Unable to connect to the database
ERROR - 2021-11-17 00:37:54 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 176
								 order by -c.no_medcheck desc
ERROR - 2021-11-17 00:37:54 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 318
ERROR - 2021-11-17 00:37:56 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:37:56 --> Unable to connect to the database
ERROR - 2021-11-17 00:37:56 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:37:56 --> Unable to connect to the database
ERROR - 2021-11-17 00:37:56 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 176
								 order by -c.no_medcheck desc
ERROR - 2021-11-17 00:37:56 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 318
ERROR - 2021-11-17 00:37:59 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:37:59 --> Unable to connect to the database
ERROR - 2021-11-17 00:37:59 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:37:59 --> Unable to connect to the database
ERROR - 2021-11-17 00:37:59 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: SELECT *
FROM `users`
WHERE `is_deleted` = '0' AND (`name` = 'Opi@gmail.com' OR `email` = 'Opi@gmail.com')
ERROR - 2021-11-17 00:37:59 --> Severity: error --> Exception: Call to a member function result() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/user/models/User_model.php 15
ERROR - 2021-11-17 00:38:01 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:38:01 --> Unable to connect to the database
ERROR - 2021-11-17 00:38:38 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:38:38 --> Unable to connect to the database
ERROR - 2021-11-17 00:38:38 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:38:38 --> Unable to connect to the database
ERROR - 2021-11-17 00:38:38 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2021-11-17 00:38:38 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 212
ERROR - 2021-11-17 00:38:48 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:38:48 --> Unable to connect to the database
ERROR - 2021-11-17 00:38:48 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2021-11-17 00:38:52 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:38:52 --> Unable to connect to the database
ERROR - 2021-11-17 00:38:52 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:38:52 --> Unable to connect to the database
ERROR - 2021-11-17 00:38:52 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2021-11-17 00:38:53 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:38:53 --> Unable to connect to the database
ERROR - 2021-11-17 00:38:53 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2021-11-17 00:41:58 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:41:58 --> Unable to connect to the database
ERROR - 2021-11-17 00:41:58 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:41:58 --> Unable to connect to the database
ERROR - 2021-11-17 00:41:58 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2021-11-17 00:41:58 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 212
ERROR - 2021-11-17 00:41:59 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:41:59 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:02 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:02 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:02 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:02 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:02 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2021-11-17 00:42:02 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 212
ERROR - 2021-11-17 00:42:03 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:03 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:03 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:03 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:03 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2021-11-17 00:42:03 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 212
ERROR - 2021-11-17 00:42:04 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:04 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:04 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:04 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:04 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2021-11-17 00:42:04 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 212
ERROR - 2021-11-17 00:42:05 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:05 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:05 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:05 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:05 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2021-11-17 00:42:05 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 212
ERROR - 2021-11-17 00:42:12 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:12 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:12 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:12 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:12 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2021-11-17 00:42:12 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 212
ERROR - 2021-11-17 00:42:13 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:13 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:14 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:14 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:15 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:15 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:15 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:15 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:15 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.1 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 27 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 25 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 18 THEN 'Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 33140
ERROR - 2021-11-17 00:42:15 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 165
ERROR - 2021-11-17 00:42:16 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:16 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:17 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:17 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:17 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2021-11-17 00:42:17 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 212
ERROR - 2021-11-17 00:42:19 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:19 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:19 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2021-11-17 00:42:19 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:19 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:19 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:19 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:19 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2021-11-17 00:42:19 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 212
ERROR - 2021-11-17 00:42:20 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:20 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:20 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:20 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:20 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.1 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 27 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 25 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 18 THEN 'Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 33140
ERROR - 2021-11-17 00:42:20 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 165
ERROR - 2021-11-17 00:42:26 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:26 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:26 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:42:26 --> Unable to connect to the database
ERROR - 2021-11-17 00:42:26 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2021-11-17 00:42:26 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 212
ERROR - 2021-11-17 00:43:01 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:43:01 --> Unable to connect to the database
ERROR - 2021-11-17 00:43:03 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:43:03 --> Unable to connect to the database
ERROR - 2021-11-17 00:43:11 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:43:11 --> Unable to connect to the database
ERROR - 2021-11-17 00:43:11 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:43:11 --> Unable to connect to the database
ERROR - 2021-11-17 00:43:11 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 160
								 order by -c.no_medcheck desc
ERROR - 2021-11-17 00:43:11 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 318
ERROR - 2021-11-17 00:43:12 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:43:13 --> Unable to connect to the database
ERROR - 2021-11-17 00:43:14 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:43:14 --> Unable to connect to the database
ERROR - 2021-11-17 00:43:22 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:43:22 --> Unable to connect to the database
ERROR - 2021-11-17 00:43:23 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:43:23 --> Unable to connect to the database
ERROR - 2021-11-17 00:43:27 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:43:27 --> Unable to connect to the database
ERROR - 2021-11-17 00:43:27 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:43:27 --> Unable to connect to the database
ERROR - 2021-11-17 00:43:33 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:43:33 --> Unable to connect to the database
ERROR - 2021-11-17 00:43:33 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:43:33 --> Unable to connect to the database
ERROR - 2021-11-17 00:43:35 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:43:35 --> Unable to connect to the database
ERROR - 2021-11-17 00:43:37 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:43:37 --> Unable to connect to the database
ERROR - 2021-11-17 00:43:39 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:43:39 --> Unable to connect to the database
ERROR - 2021-11-17 00:43:39 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:43:39 --> Unable to connect to the database
ERROR - 2021-11-17 00:43:39 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 176
								 order by -c.no_medcheck desc
ERROR - 2021-11-17 00:43:39 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 318
ERROR - 2021-11-17 00:43:51 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:43:51 --> Unable to connect to the database
ERROR - 2021-11-17 00:43:51 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:43:51 --> Unable to connect to the database
ERROR - 2021-11-17 00:43:51 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 169
								 order by -c.no_medcheck desc
ERROR - 2021-11-17 00:43:51 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 318
ERROR - 2021-11-17 00:43:59 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:43:59 --> Unable to connect to the database
ERROR - 2021-11-17 00:43:59 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:43:59 --> Unable to connect to the database
ERROR - 2021-11-17 00:43:59 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2021-11-17 00:43:59 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 212
ERROR - 2021-11-17 00:44:06 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:44:06 --> Unable to connect to the database
ERROR - 2021-11-17 00:44:06 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:44:06 --> Unable to connect to the database
ERROR - 2021-11-17 00:44:06 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2021-11-17 00:44:06 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 212
ERROR - 2021-11-17 00:44:09 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:44:09 --> Unable to connect to the database
ERROR - 2021-11-17 00:44:11 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:44:11 --> Unable to connect to the database
ERROR - 2021-11-17 00:44:12 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:44:12 --> Unable to connect to the database
ERROR - 2021-11-17 00:44:12 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 160
								 order by -c.no_medcheck desc
ERROR - 2021-11-17 00:44:12 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 318
ERROR - 2021-11-17 00:44:18 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:44:18 --> Unable to connect to the database
ERROR - 2021-11-17 00:44:19 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:44:19 --> Unable to connect to the database
ERROR - 2021-11-17 00:44:19 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2021-11-17 00:44:30 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:44:30 --> Unable to connect to the database
ERROR - 2021-11-17 00:44:30 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2021-11-17 00:44:35 --> 404 Page Not Found: /index
ERROR - 2021-11-17 00:44:35 --> 404 Page Not Found: /index
ERROR - 2021-11-17 00:44:35 --> 404 Page Not Found: /index
ERROR - 2021-11-17 00:44:38 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:44:38 --> Unable to connect to the database
ERROR - 2021-11-17 00:44:39 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:44:39 --> Unable to connect to the database
ERROR - 2021-11-17 00:45:25 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:45:25 --> Unable to connect to the database
ERROR - 2021-11-17 00:45:25 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:45:25 --> Unable to connect to the database
ERROR - 2021-11-17 00:45:25 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2021-11-17 00:45:25 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 212
ERROR - 2021-11-17 00:45:53 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:45:53 --> Unable to connect to the database
ERROR - 2021-11-17 00:45:53 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:45:53 --> Unable to connect to the database
ERROR - 2021-11-17 00:45:53 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 176
								 order by -c.no_medcheck desc
ERROR - 2021-11-17 00:45:53 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 318
ERROR - 2021-11-17 00:45:59 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:45:59 --> Unable to connect to the database
ERROR - 2021-11-17 00:46:29 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:46:29 --> Unable to connect to the database
ERROR - 2021-11-17 00:46:29 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:46:29 --> Unable to connect to the database
ERROR - 2021-11-17 00:46:29 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 160
								 order by -c.no_medcheck desc
ERROR - 2021-11-17 00:46:29 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 318
ERROR - 2021-11-17 00:46:42 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:46:42 --> Unable to connect to the database
ERROR - 2021-11-17 00:46:42 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:46:42 --> Unable to connect to the database
ERROR - 2021-11-17 00:46:42 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2021-11-17 00:46:42 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 212
ERROR - 2021-11-17 00:46:44 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:46:44 --> Unable to connect to the database
ERROR - 2021-11-17 00:46:44 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:46:44 --> Unable to connect to the database
ERROR - 2021-11-17 00:46:44 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:46:44 --> Unable to connect to the database
ERROR - 2021-11-17 00:46:44 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:46:44 --> Unable to connect to the database
ERROR - 2021-11-17 00:46:44 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2021-11-17 00:46:44 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 212
ERROR - 2021-11-17 00:46:45 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:46:45 --> Unable to connect to the database
ERROR - 2021-11-17 00:46:45 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2021-11-17 00:46:47 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:46:47 --> Unable to connect to the database
ERROR - 2021-11-17 00:46:47 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:46:47 --> Unable to connect to the database
ERROR - 2021-11-17 00:46:47 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2021-11-17 00:46:47 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 212
ERROR - 2021-11-17 00:46:57 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:46:57 --> Unable to connect to the database
ERROR - 2021-11-17 00:46:58 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:46:58 --> Unable to connect to the database
ERROR - 2021-11-17 00:46:58 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2021-11-17 00:46:59 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:46:59 --> Unable to connect to the database
ERROR - 2021-11-17 00:46:59 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2021-11-17 00:47:03 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:47:03 --> Unable to connect to the database
ERROR - 2021-11-17 00:47:31 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:47:31 --> Unable to connect to the database
ERROR - 2021-11-17 00:47:31 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:47:31 --> Unable to connect to the database
ERROR - 2021-11-17 00:47:31 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2021-11-17 00:47:31 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 212
ERROR - 2021-11-17 00:47:32 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:47:32 --> Unable to connect to the database
ERROR - 2021-11-17 00:47:32 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:47:32 --> Unable to connect to the database
ERROR - 2021-11-17 00:47:32 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id) as jumlah_pasien
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) 
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2021-11-17 00:47:32 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 212
ERROR - 2021-11-17 00:47:57 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:47:57 --> Unable to connect to the database
ERROR - 2021-11-17 00:49:59 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:49:59 --> Unable to connect to the database
ERROR - 2021-11-17 00:49:59 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:49:59 --> Unable to connect to the database
ERROR - 2021-11-17 00:49:59 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:49:59 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:49:59 --> Unable to connect to the database
ERROR - 2021-11-17 00:49:59 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.1 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 27 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 25 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 18 THEN 'Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 33140
ERROR - 2021-11-17 00:49:59 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 165
ERROR - 2021-11-17 00:49:59 --> Unable to connect to the database
ERROR - 2021-11-17 00:49:59 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.1 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 27 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 25 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 18 THEN 'Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 33140
ERROR - 2021-11-17 00:49:59 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 165
ERROR - 2021-11-17 00:50:01 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:50:01 --> Unable to connect to the database
ERROR - 2021-11-17 00:50:01 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:50:01 --> Unable to connect to the database
ERROR - 2021-11-17 00:50:01 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.1 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 27 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 25 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 18 THEN 'Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 33140
ERROR - 2021-11-17 00:50:01 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 165
ERROR - 2021-11-17 00:50:03 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:50:03 --> Unable to connect to the database
ERROR - 2021-11-17 00:50:03 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2021-11-17 00:50:03 --> Unable to connect to the database
ERROR - 2021-11-17 00:50:03 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.1 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 27 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.1 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 25 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 18 THEN 'Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 33140
ERROR - 2021-11-17 00:50:03 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 165
ERROR - 2021-11-17 01:11:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:11:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:11:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:16:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:16:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:16:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:16:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:16:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:16:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:17:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:17:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:17:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:19:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:19:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:19:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:20:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:20:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:20:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:21:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:21:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:21:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:22:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:22:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:22:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:23:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:23:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:23:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:23:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:23:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:23:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:23:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:23:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:23:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:24:27 --> 404 Page Not Found: /index
ERROR - 2021-11-17 01:24:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:24:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:24:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:25:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:25:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:25:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:29:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:29:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:29:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:30:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:30:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:30:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:36:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:36:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:36:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:40:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:40:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:40:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:43:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:43:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:43:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:44:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:44:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:44:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:45:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:45:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:45:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:45:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:45:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:45:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:50:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:50:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:50:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:50:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:50:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:50:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:50:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:50:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:50:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:50:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:50:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:50:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:56:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:56:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:56:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:57:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:57:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:57:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:57:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:57:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:57:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:57:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:57:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:57:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:57:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:57:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:57:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:59:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:59:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:59:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 01:59:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 01:59:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 01:59:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 02:03:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 02:03:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 02:03:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 02:11:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 02:11:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 02:11:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 02:13:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 02:13:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 02:13:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 02:40:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2021-11-17 02:40:58 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 770
ERROR - 2021-11-17 02:41:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2021-11-17 02:41:46 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 770
ERROR - 2021-11-17 03:15:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 03:15:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 03:15:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 03:18:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 03:18:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 03:18:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 03:18:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 03:18:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 03:18:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 03:42:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2021-11-17 03:42:22 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 770
ERROR - 2021-11-17 03:46:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 03:46:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 03:46:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 03:50:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 03:50:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 03:50:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 04:05:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 04:05:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 04:05:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 04:09:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 04:09:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 04:09:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 04:11:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 04:11:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 04:11:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 04:13:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 04:13:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 04:13:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 04:16:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 04:16:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 04:16:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 04:22:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 04:22:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 04:22:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 04:23:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 04:23:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 04:23:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 04:24:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 04:24:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 04:24:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 04:27:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2021-11-17 04:27:38 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 770
ERROR - 2021-11-17 04:33:21 --> Query error: Column 'hasil_resume' cannot be null - Invalid query: INSERT INTO `trx_resume` (`status`, `id_pelayanan`, `nama_dokter`, `jenis_resume`, `hasil_resume`, `created_by`, `modified_by`) VALUES ('ACTIVE', '31446', '', 'KATEGORI', NULL, '557', '557')
ERROR - 2021-11-17 04:34:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 04:34:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 04:34:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 04:36:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 04:36:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 04:36:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 04:37:04 --> 404 Page Not Found: /index
ERROR - 2021-11-17 05:06:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 05:06:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 05:06:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 05:09:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 05:09:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 05:09:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 05:12:40 --> 404 Page Not Found: /index
ERROR - 2021-11-17 05:12:40 --> 404 Page Not Found: /index
ERROR - 2021-11-17 05:12:40 --> 404 Page Not Found: /index
ERROR - 2021-11-17 05:12:40 --> 404 Page Not Found: /index
ERROR - 2021-11-17 05:12:40 --> 404 Page Not Found: /index
ERROR - 2021-11-17 05:12:40 --> 404 Page Not Found: /index
ERROR - 2021-11-17 05:12:40 --> 404 Page Not Found: /index
ERROR - 2021-11-17 05:12:40 --> 404 Page Not Found: /index
ERROR - 2021-11-17 05:13:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 05:13:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 05:13:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 05:24:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 05:24:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 05:24:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 05:27:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 05:27:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 05:27:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 05:28:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 05:28:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 05:28:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 05:28:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 05:28:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 05:28:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 06:10:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 06:10:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 06:10:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 06:17:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 06:17:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 06:17:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 06:22:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 06:22:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 06:22:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 06:29:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 06:29:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 06:29:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 06:31:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 06:31:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 06:31:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 06:38:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:38:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:38:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:38:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:38:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:38:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:38:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:38:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:38:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:39:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:39:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:39:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:39:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 06:39:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 06:39:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 06:39:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:39:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:39:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:39:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:39:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:39:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:40:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:40:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:40:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:40:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:40:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:40:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:40:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:40:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:40:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:40:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:40:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:40:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:40:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:40:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:40:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:40:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:40:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:40:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:40:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:40:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:40:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:40:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:40:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:40:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:41:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:41:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:41:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:41:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:41:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:41:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:41:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:41:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:41:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:42:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:42:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:42:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:42:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:42:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:42:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:42:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 06:42:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 06:42:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 06:43:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:43:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:43:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:44:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 06:44:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 06:44:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 06:47:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:47:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:47:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:50:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 06:50:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 06:50:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 06:50:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 06:50:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 06:50:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 06:51:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:51:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:51:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:51:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:51:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:51:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:51:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:51:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:51:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:52:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 06:52:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 06:52:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 06:52:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:52:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:52:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:52:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:52:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:52:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:53:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:53:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:53:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:53:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:53:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:53:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:53:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:53:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:53:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:54:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:54:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:54:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:54:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:54:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:54:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:54:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:54:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:54:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:55:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:55:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:55:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:55:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:55:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:55:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:55:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:55:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:55:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:56:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:56:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:56:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:56:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:56:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:56:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:56:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:56:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:56:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:56:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:56:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:56:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:57:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:57:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:57:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:57:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:57:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:57:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:57:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:57:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:57:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:58:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:58:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:58:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:58:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:58:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:58:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:58:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:58:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:58:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 06:58:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 06:58:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 06:58:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:00:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:00:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:00:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:01:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 07:01:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 07:01:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 07:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 07:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 07:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 07:02:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:02:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:02:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:02:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:02:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:02:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:03:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 07:03:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 07:03:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 07:03:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:03:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:03:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:03:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:03:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:03:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:03:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:03:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:03:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:04:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:04:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:04:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:04:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:04:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:04:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:04:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:04:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:04:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:05:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 07:05:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 07:05:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 07:05:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:05:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:05:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:05:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 07:05:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 07:05:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 07:06:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:06:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:06:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:06:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:06:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:06:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:06:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:06:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:06:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:07:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:07:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:07:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:07:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:07:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:07:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:07:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:07:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:07:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:07:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:07:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:07:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:07:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 07:07:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 07:07:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 07:08:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:08:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:08:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:08:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:08:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:08:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:09:02 --> Query error: Column 'hasil_resume' cannot be null - Invalid query: INSERT INTO `trx_resume` (`status`, `id_pelayanan`, `nama_dokter`, `jenis_resume`, `hasil_resume`, `created_by`, `modified_by`) VALUES ('ACTIVE', '31457', '', 'KATEGORI', NULL, '557', '557')
ERROR - 2021-11-17 07:09:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:09:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:09:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:09:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:09:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:09:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:09:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:09:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:09:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:10:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:10:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:10:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:10:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:10:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:10:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:10:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:10:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:10:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:10:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:10:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:10:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:11:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 07:11:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 07:11:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 07:11:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:11:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:11:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:11:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:11:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:11:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:11:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:11:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:11:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:11:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:11:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:11:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:14:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 07:14:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 07:14:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 07:15:06 --> 404 Page Not Found: /index
ERROR - 2021-11-17 07:22:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:22:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:22:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:23:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:23:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:23:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:23:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:23:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:23:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:23:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 07:23:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 07:23:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 07:23:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:23:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:23:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:23:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:23:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:23:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:24:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:24:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:24:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:24:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:24:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:24:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:24:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:24:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:24:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:25:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:25:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:25:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:25:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:25:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:25:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:26:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:26:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:26:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:26:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:26:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:26:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:26:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:26:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:26:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:27:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:27:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:27:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:27:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:27:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:27:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:27:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:27:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:27:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:28:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:28:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:28:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:28:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:28:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:28:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:28:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:28:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:28:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:28:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:28:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:28:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:29:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:29:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:29:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:29:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:29:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:29:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:29:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:29:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:29:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:30:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:30:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:30:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:30:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:30:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:30:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:30:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 07:30:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 07:30:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 07:30:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:30:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:30:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:30:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:30:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:30:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:31:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 07:31:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 07:31:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 07:31:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:31:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:31:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:31:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:31:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:31:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:32:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:32:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:32:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:32:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:32:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:32:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:32:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:32:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:32:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:33:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:33:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:33:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:33:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:33:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:33:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:33:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:33:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:33:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:34:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:34:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:34:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:34:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:34:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:34:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:34:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:34:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:34:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:35:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:35:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:35:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:35:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:35:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:35:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:35:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:35:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:35:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:36:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:36:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:36:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:36:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:36:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:36:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:36:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:36:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:36:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:37:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:37:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:37:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:37:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:37:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:37:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:37:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:37:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:37:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:37:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:37:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:37:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:38:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:38:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:38:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:38:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:38:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:38:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:38:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:38:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:38:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:38:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:38:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:38:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:39:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:39:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:39:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:39:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:39:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:39:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:39:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:39:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:39:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:39:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:39:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:39:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:40:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:40:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:40:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:40:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:40:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:40:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:40:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:40:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:40:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:41:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:41:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:41:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:41:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:41:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:41:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:41:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:41:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:41:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:41:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:41:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:41:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:42:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:42:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:42:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:42:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:42:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:42:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:43:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:43:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:43:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:43:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:43:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:43:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:43:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:43:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:43:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 07:43:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 07:43:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 07:43:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 08:22:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 08:22:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 08:22:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 08:25:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 08:25:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 08:25:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 08:25:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-11-17 08:25:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-11-17 08:25:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-11-17 08:35:33 --> Query error: Column 'hasil_resume' cannot be null - Invalid query: INSERT INTO `trx_resume` (`status`, `id_pelayanan`, `nama_dokter`, `jenis_resume`, `hasil_resume`, `created_by`, `modified_by`) VALUES ('ACTIVE', '31531', '', 'KATEGORI', NULL, '557', '557')
ERROR - 2021-11-17 08:44:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 08:44:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 08:44:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 08:54:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 08:54:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 08:54:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 08:55:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 08:55:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 08:55:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 09:03:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 09:03:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 09:03:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 10:10:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 10:10:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 10:10:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 10:18:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 10:18:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 10:18:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 10:18:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 10:18:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 10:18:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 10:28:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 10:28:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 10:28:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 10:33:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 10:33:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 10:33:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 10:49:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 10:49:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 10:49:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 10:54:23 --> 404 Page Not Found: /index
ERROR - 2021-11-17 10:54:24 --> 404 Page Not Found: /index
ERROR - 2021-11-17 11:08:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 11:08:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 11:08:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 11:30:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 11:30:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 11:30:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 11:31:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 11:31:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 11:31:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 11:34:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 11:34:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 11:34:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 11:35:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 11:35:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 11:35:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 11:35:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 11:35:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 11:35:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 11:42:52 --> 404 Page Not Found: /index
ERROR - 2021-11-17 11:42:52 --> 404 Page Not Found: /index
ERROR - 2021-11-17 11:42:53 --> 404 Page Not Found: /index
ERROR - 2021-11-17 11:42:53 --> 404 Page Not Found: /index
ERROR - 2021-11-17 11:44:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 11:44:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 11:44:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 11:54:23 --> 404 Page Not Found: /index
ERROR - 2021-11-17 11:54:24 --> 404 Page Not Found: /index
ERROR - 2021-11-17 12:38:38 --> Query error: Column 'id_pelayanan' cannot be null - Invalid query: INSERT INTO `trx_penunjang` (`status`, `id_pelayanan`, `nama_dokter`, `jenis_pemeriksaan`, `hasil_pemeriksaan`, `gambar_pemeriksaan`, `created_by`, `modified_by`) VALUES ('ACTIVE', NULL, NULL, NULL, NULL, NULL, '7', '7')
ERROR - 2021-11-17 13:46:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 13:46:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 13:46:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 13:52:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 13:52:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 13:52:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 13:52:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 13:52:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 13:52:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 13:54:35 --> 404 Page Not Found: /index
ERROR - 2021-11-17 14:25:33 --> 404 Page Not Found: /index
ERROR - 2021-11-17 14:25:33 --> 404 Page Not Found: /index
ERROR - 2021-11-17 14:25:33 --> 404 Page Not Found: /index
ERROR - 2021-11-17 14:25:33 --> 404 Page Not Found: /index
ERROR - 2021-11-17 14:25:34 --> 404 Page Not Found: /index
ERROR - 2021-11-17 14:25:34 --> 404 Page Not Found: /index
ERROR - 2021-11-17 14:25:34 --> 404 Page Not Found: /index
ERROR - 2021-11-17 14:25:34 --> 404 Page Not Found: /index
ERROR - 2021-11-17 16:48:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 16:48:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 16:48:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2021-11-17 17:16:30 --> 404 Page Not Found: /index
ERROR - 2021-11-17 17:16:31 --> 404 Page Not Found: /index
ERROR - 2021-11-17 17:33:17 --> 404 Page Not Found: /index
ERROR - 2021-11-17 17:33:17 --> 404 Page Not Found: /index
ERROR - 2021-11-17 17:33:17 --> 404 Page Not Found: /index
ERROR - 2021-11-17 17:33:17 --> 404 Page Not Found: /index
ERROR - 2021-11-17 17:33:17 --> 404 Page Not Found: /index
ERROR - 2021-11-17 17:33:17 --> 404 Page Not Found: /index
ERROR - 2021-11-17 17:33:18 --> 404 Page Not Found: /index
ERROR - 2021-11-17 17:33:18 --> 404 Page Not Found: /index
ERROR - 2021-11-17 17:33:18 --> 404 Page Not Found: /index
ERROR - 2021-11-17 17:33:18 --> 404 Page Not Found: /index
ERROR - 2021-11-17 17:33:18 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:29 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:30 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:30 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:30 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:30 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:30 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:30 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:30 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:30 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:30 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:31 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:31 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:47 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:47 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:48 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:48 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:48 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:48 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:48 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:48 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:48 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:48 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:48 --> 404 Page Not Found: /index
ERROR - 2021-11-17 18:00:48 --> 404 Page Not Found: /index
ERROR - 2021-11-17 23:00:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2021-11-17 23:00:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2021-11-17 23:00:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
