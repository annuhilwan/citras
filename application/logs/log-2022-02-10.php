<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-02-10 02:56:30 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:56:30 --> Unable to connect to the database
ERROR - 2022-02-10 02:56:31 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:56:31 --> Unable to connect to the database
ERROR - 2022-02-10 02:56:34 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:56:34 --> Unable to connect to the database
ERROR - 2022-02-10 02:56:34 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:56:34 --> Unable to connect to the database
ERROR - 2022-02-10 02:56:34 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:56:34 --> Unable to connect to the database
ERROR - 2022-02-10 02:56:34 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.01 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 27.00 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.51 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 25.00 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 17.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 18.50 THEN 'Kurus'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 17 THEN ' Sangat Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 46807
ERROR - 2022-02-10 02:56:34 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 178
ERROR - 2022-02-10 02:56:38 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:56:38 --> Unable to connect to the database
ERROR - 2022-02-10 02:56:41 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:56:41 --> Unable to connect to the database
ERROR - 2022-02-10 02:56:41 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:56:41 --> Unable to connect to the database
ERROR - 2022-02-10 02:56:43 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:56:43 --> Unable to connect to the database
ERROR - 2022-02-10 02:56:50 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:56:50 --> Unable to connect to the database
ERROR - 2022-02-10 02:56:50 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:56:50 --> Unable to connect to the database
ERROR - 2022-02-10 02:56:50 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.01 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 27.00 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.51 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 25.00 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 17.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 18.50 THEN 'Kurus'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 17 THEN ' Sangat Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 46807
ERROR - 2022-02-10 02:56:50 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 178
ERROR - 2022-02-10 02:56:59 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:56:59 --> Unable to connect to the database
ERROR - 2022-02-10 02:57:02 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:57:02 --> Unable to connect to the database
ERROR - 2022-02-10 02:57:07 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:57:07 --> Unable to connect to the database
ERROR - 2022-02-10 02:57:41 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:57:41 --> Unable to connect to the database
ERROR - 2022-02-10 02:57:41 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:57:41 --> Unable to connect to the database
ERROR - 2022-02-10 02:57:41 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi = 46745 order by a.urutan asc
ERROR - 2022-02-10 02:57:41 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-02-10 02:57:48 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:57:48 --> Unable to connect to the database
ERROR - 2022-02-10 02:57:48 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:57:48 --> Unable to connect to the database
ERROR - 2022-02-10 02:57:48 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi = 46745 order by a.urutan asc
ERROR - 2022-02-10 02:57:48 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-02-10 02:57:49 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:57:49 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:05 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:05 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:05 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:05 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:05 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.01 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 27.00 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.51 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 25.00 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 17.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 18.50 THEN 'Kurus'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 17 THEN ' Sangat Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 44592
ERROR - 2022-02-10 02:58:05 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 178
ERROR - 2022-02-10 02:58:06 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:06 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:06 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:06 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:06 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.01 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 27.00 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.51 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 25.00 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 17.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 18.50 THEN 'Kurus'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 17 THEN ' Sangat Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 44264
ERROR - 2022-02-10 02:58:06 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 178
ERROR - 2022-02-10 02:58:07 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:07 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:07 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:07 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:07 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.01 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 27.00 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.51 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 25.00 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 17.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 18.50 THEN 'Kurus'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 17 THEN ' Sangat Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 45600
ERROR - 2022-02-10 02:58:07 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 178
ERROR - 2022-02-10 02:58:08 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:08 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:08 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:08 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:08 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.01 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 27.00 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.51 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 25.00 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 17.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 18.50 THEN 'Kurus'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 17 THEN ' Sangat Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 44634
ERROR - 2022-02-10 02:58:08 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 178
ERROR - 2022-02-10 02:58:10 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:10 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:10 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:10 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:10 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.01 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 27.00 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.51 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 25.00 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 17.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 18.50 THEN 'Kurus'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 17 THEN ' Sangat Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 44661
ERROR - 2022-02-10 02:58:10 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 178
ERROR - 2022-02-10 02:58:11 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:11 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:11 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:11 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:11 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi = 46745 order by a.urutan asc
ERROR - 2022-02-10 02:58:11 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-02-10 02:58:11 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:11 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:13 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:13 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:13 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:13 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:13 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.01 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 27.00 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.51 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 25.00 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 17.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 18.50 THEN 'Kurus'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 17 THEN ' Sangat Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 44592
ERROR - 2022-02-10 02:58:13 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 178
ERROR - 2022-02-10 02:58:20 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:20 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:20 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:20 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:20 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.01 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 27.00 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.51 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 25.00 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 17.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 18.50 THEN 'Kurus'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 17 THEN ' Sangat Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 44592
ERROR - 2022-02-10 02:58:20 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 178
ERROR - 2022-02-10 02:58:20 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:20 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:21 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:21 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:22 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:22 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:22 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:22 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:22 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.01 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 27.00 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.51 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 25.00 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 17.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 18.50 THEN 'Kurus'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 17 THEN ' Sangat Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 46745
ERROR - 2022-02-10 02:58:22 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 178
ERROR - 2022-02-10 02:58:23 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:23 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:38 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:38 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:38 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:38 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:38 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.01 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 27.00 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.51 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 25.00 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 17.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 18.50 THEN 'Kurus'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 17 THEN ' Sangat Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 46852
ERROR - 2022-02-10 02:58:38 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 178
ERROR - 2022-02-10 02:58:43 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:43 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:43 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:43 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:43 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi = 46836 order by a.urutan asc
ERROR - 2022-02-10 02:58:43 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-02-10 02:58:43 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:43 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:43 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:43 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:43 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 237
								 order by -c.no_medcheck desc
ERROR - 2022-02-10 02:58:43 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 331
ERROR - 2022-02-10 02:58:51 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:51 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:51 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:58:51 --> Unable to connect to the database
ERROR - 2022-02-10 02:58:51 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 237
								 order by -c.no_medcheck desc
ERROR - 2022-02-10 02:58:51 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 331
ERROR - 2022-02-10 02:59:04 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:59:04 --> Unable to connect to the database
ERROR - 2022-02-10 02:59:04 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:59:04 --> Unable to connect to the database
ERROR - 2022-02-10 02:59:04 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 233
								 order by -c.no_medcheck desc
ERROR - 2022-02-10 02:59:04 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 331
ERROR - 2022-02-10 02:59:07 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:59:07 --> Unable to connect to the database
ERROR - 2022-02-10 02:59:07 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:59:07 --> Unable to connect to the database
ERROR - 2022-02-10 02:59:07 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.01 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 27.00 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.51 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 25.00 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 17.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 18.50 THEN 'Kurus'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 17 THEN ' Sangat Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 46745
ERROR - 2022-02-10 02:59:07 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 178
ERROR - 2022-02-10 02:59:13 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:59:13 --> Unable to connect to the database
ERROR - 2022-02-10 02:59:13 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:59:13 --> Unable to connect to the database
ERROR - 2022-02-10 02:59:13 --> Query error: User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) - Invalid query: select id,round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) as nilai_bmi,
									CASE
									WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 27.01 THEN 'Obesitas'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 25.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 27.00 THEN 'Kegemukan'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 18.51 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 25.00 THEN 'Normal'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) >= 17.01 and round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) <= 18.50 THEN 'Kurus'
										WHEN round(berat_badan / ((tinggi_badan / 100) * (tinggi_badan / 100)),2) < 17 THEN ' Sangat Kurus'
									ELSE 'Data tidak lengkap' 
									END as kategori_bmi
									from trx_pelayanan
									where id = 46745
ERROR - 2022-02-10 02:59:13 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 178
ERROR - 2022-02-10 02:59:22 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:59:22 --> Unable to connect to the database
ERROR - 2022-02-10 02:59:43 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 02:59:43 --> Unable to connect to the database
ERROR - 2022-02-10 02:59:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2022-02-10 02:59:58 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-02-10 03:00:34 --> Severity: Warning --> Error while sending QUERY packet. PID=10414 /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2022-02-10 03:00:34 --> Query error: MySQL server has gone away - Invalid query: UPDATE `trx_laboratorium` SET `hasil_pemeriksaan` = '11.8', `created_by` = '3481', `modified_by` = '3481'
WHERE `id` = '1249906'
ERROR - 2022-02-10 03:00:34 --> Severity: Warning --> Error while sending QUERY packet. PID=33899 /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2022-02-10 03:00:34 --> Query error: MySQL server has gone away - Invalid query: UPDATE `trx_laboratorium` SET `hasil_pemeriksaan` = '6100', `created_by` = '3481', `modified_by` = '3481'
WHERE `id` = '1249908'
ERROR - 2022-02-10 03:00:34 --> Severity: Warning --> Error while sending QUERY packet. PID=35356 /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2022-02-10 03:00:34 --> Query error: MySQL server has gone away - Invalid query: UPDATE `trx_laboratorium` SET `hasil_pemeriksaan` = '4.07', `created_by` = '3481', `modified_by` = '3481'
WHERE `id` = '1249909'
ERROR - 2022-02-10 03:00:35 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-02-10 03:00:35 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-02-10 03:00:35 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-02-10 03:00:35 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-02-10 03:00:35 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-02-10 03:00:35 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-02-10 03:00:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2022-02-10 03:00:36 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-02-10 03:01:30 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-02-10 03:05:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2022-02-10 03:05:49 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-02-10 03:05:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2022-02-10 03:05:54 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-02-10 03:06:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2022-02-10 03:06:09 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-02-10 03:06:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2022-02-10 03:06:34 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-02-10 03:06:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2022-02-10 03:06:37 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-02-10 03:42:30 --> 404 Page Not Found: /index
ERROR - 2022-02-10 03:42:34 --> 404 Page Not Found: /index
ERROR - 2022-02-10 03:50:37 --> 404 Page Not Found: /index
ERROR - 2022-02-10 03:57:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2022-02-10 03:57:02 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-02-10 03:57:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa, a.kategori_pertanyaan
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2022-02-10 03:57:08 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 787
ERROR - 2022-02-10 04:15:58 --> 404 Page Not Found: /index
ERROR - 2022-02-10 04:49:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-10 04:49:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-10 04:49:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-10 06:49:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '%20Cache%20works%20by%20storing%20static%20content%20of%20websites%20on%20ext...' at line 4 - Invalid query: select a.id, a.nama_lengkap, a.status, a.jenis_pelayanan , a.created_date, a.nama_perusahaan, a.no_medcheck, a.tanggal_pemeriksaan, 
								 b.no_identitas, b.jenis_kelamin, b.bagian, b.grup, a.berat_badan, a.tinggi_badan, a.tekanan_darah, a.denyut_nadi
								 from trx_pelayanan a 
								 left join master_pasien b on (a.id_pasien = b.id) where a.id = 37728Get%20superior%20performance%20and%20improve%20SEO%20for%20your%20website%20by%20using%20the%20Cache.%20Cache%20works%20by%20storing%20static%20content%20of%20websites%20on%20extremely%20high-speed%20cache%20servers.%20This%20allows%20to%20bypass%20PHP%20requests%20and%20render%20every%20page%20as%20fast%20as%20possible.%20The%20cache%20is%20being%20cleared%20every%2030%20minutes.
ERROR - 2022-02-10 06:49:47 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 195
ERROR - 2022-02-10 06:53:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2022-02-10 06:53:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2022-02-10 06:53:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2022-02-10 07:02:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-10 07:02:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-10 07:02:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-10 07:11:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-10 07:11:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-10 07:11:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-10 07:12:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-10 07:12:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-10 07:12:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-10 07:38:23 --> 404 Page Not Found: /index
ERROR - 2022-02-10 07:41:26 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 07:41:26 --> Unable to connect to the database
ERROR - 2022-02-10 07:41:28 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 07:41:28 --> Unable to connect to the database
ERROR - 2022-02-10 07:41:29 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-02-10 07:41:29 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-02-10 07:55:57 --> Query error: Column 'nama_dokter' cannot be null - Invalid query: INSERT INTO `trx_resume` (`status`, `flag_generate`, `id_pelayanan`, `nama_dokter`, `jenis_resume`, `hasil_resume`, `created_by`) VALUES ('ACTIVE', 'YES', '44268', NULL, 'KESIMPULAN', 'GIGI : berlubang gigi geraham 4 lubang', '7')
ERROR - 2022-02-10 07:56:05 --> Query error: Column 'nama_dokter' cannot be null - Invalid query: INSERT INTO `trx_resume` (`status`, `flag_generate`, `id_pelayanan`, `nama_dokter`, `jenis_resume`, `hasil_resume`, `created_by`) VALUES ('ACTIVE', 'YES', '44268', NULL, 'KESIMPULAN', 'GIGI : berlubang gigi geraham 4 lubang', '7')
ERROR - 2022-02-10 07:56:36 --> Query error: Column 'nama_dokter' cannot be null - Invalid query: INSERT INTO `trx_resume` (`status`, `flag_generate`, `id_pelayanan`, `nama_dokter`, `jenis_resume`, `hasil_resume`, `created_by`) VALUES ('ACTIVE', 'YES', '44521', NULL, 'KESIMPULAN', 'GIGI : gigi berlubang di geraham bawaah kanan dan kiri', '7')
ERROR - 2022-02-10 07:56:42 --> Query error: Column 'nama_dokter' cannot be null - Invalid query: INSERT INTO `trx_resume` (`status`, `flag_generate`, `id_pelayanan`, `nama_dokter`, `jenis_resume`, `hasil_resume`, `created_by`) VALUES ('ACTIVE', 'YES', '44521', NULL, 'KESIMPULAN', 'GIGI : gigi berlubang di geraham bawaah kanan dan kiri', '7')
ERROR - 2022-02-10 08:04:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-10 08:04:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-10 08:04:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-10 08:08:23 --> Query error: Column 'nama_dokter' cannot be null - Invalid query: INSERT INTO `trx_resume` (`status`, `flag_generate`, `id_pelayanan`, `nama_dokter`, `jenis_resume`, `hasil_resume`, `created_by`) VALUES ('ACTIVE', 'YES', '44877', NULL, 'KESIMPULAN', 'KELUHAN SAAT BEKERJA : sakit belakang kepala', '7')
ERROR - 2022-02-10 08:08:28 --> Query error: Column 'nama_dokter' cannot be null - Invalid query: INSERT INTO `trx_resume` (`status`, `flag_generate`, `id_pelayanan`, `nama_dokter`, `jenis_resume`, `hasil_resume`, `created_by`) VALUES ('ACTIVE', 'YES', '44877', NULL, 'KESIMPULAN', 'KELUHAN SAAT BEKERJA : sakit belakang kepala', '7')
ERROR - 2022-02-10 08:22:31 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 08:22:31 --> Unable to connect to the database
ERROR - 2022-02-10 08:22:31 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-02-10 08:22:31 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 08:22:31 --> Unable to connect to the database
ERROR - 2022-02-10 08:22:32 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 08:22:32 --> Unable to connect to the database
ERROR - 2022-02-10 08:22:33 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 08:22:33 --> Unable to connect to the database
ERROR - 2022-02-10 08:22:33 --> Severity: Warning --> mysqli::real_connect(): (HY000/1226): User 'u346274557_citra' has exceeded the 'max_user_connections' resource (current value: 50) /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 202
ERROR - 2022-02-10 08:22:33 --> Unable to connect to the database
ERROR - 2022-02-10 08:22:51 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-02-10 08:22:52 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-02-10 08:22:52 --> Severity: error --> Exception: Call to a member function real_escape_string() on boolean /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 391
ERROR - 2022-02-10 08:38:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-10 08:38:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-10 08:38:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-10 08:41:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-10 08:41:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-10 08:41:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-10 08:47:28 --> 404 Page Not Found: /index
ERROR - 2022-02-10 08:47:29 --> 404 Page Not Found: /index
ERROR - 2022-02-10 08:50:19 --> 404 Page Not Found: /index
ERROR - 2022-02-10 09:08:31 --> 404 Page Not Found: /index
ERROR - 2022-02-10 09:16:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-10 09:16:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-10 09:16:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-10 09:28:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-10 09:28:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-10 09:28:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-10 09:30:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-10 09:30:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-10 09:30:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-10 09:41:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-10 09:41:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-10 09:41:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-10 11:54:27 --> 404 Page Not Found: /index
ERROR - 2022-02-10 12:17:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-10 12:17:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-10 12:17:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-10 12:27:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-10 12:27:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-10 12:27:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-10 17:24:28 --> 404 Page Not Found: /index
ERROR - 2022-02-10 18:01:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-10 18:01:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-10 18:01:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-10 18:05:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 310
ERROR - 2022-02-10 18:05:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 384
ERROR - 2022-02-10 18:05:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasienPerPasien.php 429
ERROR - 2022-02-10 18:26:38 --> 404 Page Not Found: /index
ERROR - 2022-02-10 18:26:39 --> 404 Page Not Found: /index
ERROR - 2022-02-10 19:10:32 --> 404 Page Not Found: /index
ERROR - 2022-02-10 19:31:35 --> 404 Page Not Found: /index
ERROR - 2022-02-10 19:31:36 --> 404 Page Not Found: /index
