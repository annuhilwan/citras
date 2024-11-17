<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-10-23 01:46:12 --> 404 Page Not Found: /index
ERROR - 2021-10-23 02:42:59 --> Query error: Duplicate entry 'PT. JONAN INDONESIA' for key 'nama_perusahaan' - Invalid query: INSERT INTO `master_perusahaan` (`nama_perusahaan`, `alamat_satu`, `alamat_dua`, `no_telp`, `status`) VALUES ('PT. JONAN INDONESIA', '', '', '', 'ACTIVE')
ERROR - 2021-10-23 02:42:59 --> Query error: Duplicate entry 'jonan@medicalcitra.com' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', 'PT. JONAN INDONESIA', '$2y$10$tMdHw7pn6VFaYZGnQ52KbucanCeq90K/N6EyWbyfNovU4.FpOu1V.', 'jonan@medicalcitra.com', 'user.png', 'Perusahaan', 0)
ERROR - 2021-10-23 02:58:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 4 - Invalid query: insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',29672,null,c.nama_pelayanan,c.nama_pemeriksaan,c.nilai_min,c.nilai_max,c.nilai_text,c.id_satuan,c.harga_pemeriksaan 
								from  master_pemeriksaan c 
								where c.id = ;
ERROR - 2021-10-23 02:58:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 4 - Invalid query: insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',29672,null,c.nama_pelayanan,c.nama_pemeriksaan,c.nilai_min,c.nilai_max,c.nilai_text,c.id_satuan,c.harga_pemeriksaan 
								from  master_pemeriksaan c 
								where c.id = ;
ERROR - 2021-10-23 04:38:07 --> 404 Page Not Found: /index
ERROR - 2021-10-23 05:19:15 --> 404 Page Not Found: /index
ERROR - 2021-10-23 05:19:15 --> 404 Page Not Found: /index
ERROR - 2021-10-23 05:19:16 --> 404 Page Not Found: /index
ERROR - 2021-10-23 06:08:07 --> 404 Page Not Found: /index
ERROR - 2021-10-23 07:04:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 4 - Invalid query: insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',30057,null,c.nama_pelayanan,c.nama_pemeriksaan,c.nilai_min,c.nilai_max,c.nilai_text,c.id_satuan,c.harga_pemeriksaan 
								from  master_pemeriksaan c 
								where c.id = ;
ERROR - 2021-10-23 07:06:17 --> 404 Page Not Found: /index
ERROR - 2021-10-23 07:33:43 --> 404 Page Not Found: /index
ERROR - 2021-10-23 07:33:45 --> 404 Page Not Found: /index
ERROR - 2021-10-23 08:10:04 --> Severity: Warning --> Error while sending QUERY packet. PID=7924 /home/u346274557/domains/medicalcitra.com/public_html/system/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2021-10-23 08:10:04 --> Query error: MySQL server has gone away - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 155
								 order by -c.no_medcheck desc
ERROR - 2021-10-23 08:10:04 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/u346274557/domains/medicalcitra.com/public_html/application/modules/registrasi/models/Registrasi_model.php 318
ERROR - 2021-10-23 08:27:16 --> 404 Page Not Found: /index
ERROR - 2021-10-23 08:27:20 --> 404 Page Not Found: /index
ERROR - 2021-10-23 14:48:01 --> 404 Page Not Found: /index
ERROR - 2021-10-23 16:11:00 --> 404 Page Not Found: /index
ERROR - 2021-10-23 16:56:21 --> 404 Page Not Found: /index
ERROR - 2021-10-23 16:56:25 --> 404 Page Not Found: /index
ERROR - 2021-10-23 18:48:51 --> 404 Page Not Found: /index
ERROR - 2021-10-23 18:49:26 --> 404 Page Not Found: /index
ERROR - 2021-10-23 19:35:55 --> 404 Page Not Found: /index
