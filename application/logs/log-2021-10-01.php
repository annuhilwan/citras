<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-10-01 03:01:10 --> 404 Page Not Found: /index
ERROR - 2021-10-01 04:38:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2021-10-01 04:38:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2021-10-01 04:38:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2021-10-01 04:50:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 4 - Invalid query: insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',27338,null,c.nama_pelayanan,c.nama_pemeriksaan,c.nilai_min,c.nilai_max,c.nilai_text,c.id_satuan,c.harga_pemeriksaan 
								from  master_pemeriksaan c 
								where c.id = ;
ERROR - 2021-10-01 05:47:03 --> 404 Page Not Found: /index
ERROR - 2021-10-01 08:25:31 --> 404 Page Not Found: /index
ERROR - 2021-10-01 08:33:23 --> Severity: Warning --> Error while sending QUERY packet. PID=18520 /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2021-10-01 08:33:23 --> Query error: MySQL server has gone away - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 147
								 order by -c.no_medcheck desc
ERROR - 2021-10-01 08:33:23 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 318
ERROR - 2021-10-01 13:14:43 --> 404 Page Not Found: /index
ERROR - 2021-10-01 13:36:22 --> 404 Page Not Found: /index
ERROR - 2021-10-01 13:37:55 --> 404 Page Not Found: /index
ERROR - 2021-10-01 13:37:56 --> 404 Page Not Found: /index
ERROR - 2021-10-01 19:06:48 --> 404 Page Not Found: /index
ERROR - 2021-10-01 23:22:25 --> 404 Page Not Found: /index
