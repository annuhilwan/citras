<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-07 04:51:29 --> 404 Page Not Found: /index
ERROR - 2020-09-07 04:51:30 --> 404 Page Not Found: /index
ERROR - 2020-09-07 08:30:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 4 - Invalid query: insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',3580,null,c.nama_pelayanan,c.nama_pemeriksaan,c.nilai_min_wanita,c.nilai_max_wanita,c.nilai_text_wanita,c.id_satuan,c.harga_pemeriksaan 
								from  master_pemeriksaan c 
								where c.id = ;
ERROR - 2020-09-07 10:31:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 4 - Invalid query: insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',3556,null,c.nama_pelayanan,c.nama_pemeriksaan,c.nilai_min_wanita,c.nilai_max_wanita,c.nilai_text_wanita,c.id_satuan,c.harga_pemeriksaan 
								from  master_pemeriksaan c 
								where c.id = ;
ERROR - 2020-09-07 10:32:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 4 - Invalid query: insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',3556,null,c.nama_pelayanan,c.nama_pemeriksaan,c.nilai_min_wanita,c.nilai_max_wanita,c.nilai_text_wanita,c.id_satuan,c.harga_pemeriksaan 
								from  master_pemeriksaan c 
								where c.id = ;
ERROR - 2020-09-07 10:35:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 4 - Invalid query: insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',3556,null,c.nama_pelayanan,c.nama_pemeriksaan,c.nilai_min_wanita,c.nilai_max_wanita,c.nilai_text_wanita,c.id_satuan,c.harga_pemeriksaan 
								from  master_pemeriksaan c 
								where c.id = ;
ERROR - 2020-09-07 12:36:43 --> Query error: Column 'bagian' cannot be null - Invalid query: INSERT INTO `master_pasien` (`created_dt`, `updated_dt`, `nama_pt`, `nama_lengkap`, `jenis_kelamin`, `tanggal_lahir`, `jenis_identitas`, `no_identitas`, `email`, `bagian`, `grup`, `status`) VALUES ('2020-09-07 12:36:43', '2020-09-07 12:36:43', 'PT. YASUFUKU INDONESIA', NULL, NULL, '1970-01-01', 'NIK', NULL, NULL, NULL, NULL, 'ACTIVE')
ERROR - 2020-09-07 12:36:43 --> Query error: Duplicate entry '0@email.com' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', NULL, '$2y$10$faMP6KcBolvUM6gSZ86pSuWQN6r4YZA665M75X4weuUOGlGrqO2JG', '0@email.com', 'user.png', 'Pasien', 0)
