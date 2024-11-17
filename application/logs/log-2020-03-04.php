<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-03-04 07:36:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'as jumlah_pasien
                                 	group by a.id, b.nama_perusah' at line 5 - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id)
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) as jumlah_pasien
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2020-03-04 07:36:50 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 128
ERROR - 2020-03-04 07:36:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'as jumlah_pasien
                                 	group by a.id, b.nama_perusah' at line 5 - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, 
	(SELECT count(id) FROM trx_pelayanan
	where id_medcheck_perusahaan  = a.id)
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id) as jumlah_pasien
                                 	group by a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck
ERROR - 2020-03-04 07:36:50 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 128
ERROR - 2020-03-04 07:54:51 --> Query error: Duplicate entry 'reza@gmail.com' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', 'FRANS', '$2y$10$r0u6wHoP5BtC7aN4hyRoeOORBIBprAFjGaULPQ28A./Avi5D6jJ8C', 'reza@gmail.com', 'user.png', 'Pasien', 34)
ERROR - 2020-03-04 07:54:51 --> Query error: Duplicate entry 'pawanov@gmail.com' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', 'LILIN', '$2y$10$iszOlE8lw9Yj7IkwbMbgZed2aV2ktPxdS5FeyVYvAeQfsREY86/pm', 'pawanov@gmail.com', 'user.png', 'Pasien', 35)
ERROR - 2020-03-04 07:54:51 --> Query error: Duplicate entry 'adiatmaja@gmail.com' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', 'SOMAT', '$2y$10$4H5soKEb/tBH2y2LZjRk1.n9GIZ0/vohVY7sOlp8PGE7l7iLojIW2', 'adiatmaja@gmail.com', 'user.png', 'Pasien', 36)
ERROR - 2020-03-04 08:05:25 --> Query error: Duplicate entry 'reza@gmail.com' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', 'AHMAD', '$2y$10$6FQ8gvnr8bjQRukMv2FSou0zZF1EjvzO9MR6dRNMMnLHtY4/L94GS', 'reza@gmail.com', 'user.png', 'Pasien', 37)
ERROR - 2020-03-04 08:05:25 --> Query error: Duplicate entry 'pawanov@gmail.com' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', 'FAUZI', '$2y$10$xbrp.gvOyTbnfdts4wR05Oy/nwHPXcCwjtwxw1TVVs.bqnKbWBbJC', 'pawanov@gmail.com', 'user.png', 'Pasien', 38)
ERROR - 2020-03-04 08:05:25 --> Query error: Duplicate entry 'adiatmaja@gmail.com' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', 'NURHAYATI', '$2y$10$.12AHY5R/8Dxy5DcClm6.ezkhBGFM6H/nLQJDEYJ31Ez1hyLTQd4O', 'adiatmaja@gmail.com', 'user.png', 'Pasien', 39)
ERROR - 2020-03-04 08:06:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 08:06:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 08:06:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 08:06:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 08:06:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 08:06:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 08:09:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 08:09:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 08:09:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 08:09:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 08:09:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 08:09:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 08:09:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 08:09:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 08:09:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 08:09:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 08:09:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 08:09:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 09:50:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 09:50:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 09:50:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:20 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: error --> Exception: Call to a member function append_child() on null /home/masterc3/public_html/citra/application/third_party/dompdf/include/frame_tree.cls.php 228
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:21 --> Severity: Warning --> Illegal string offset 'hex' /home/masterc3/public_html/citra/application/third_party/dompdf/include/style.cls.php 1422
ERROR - 2020-03-04 10:00:22 --> Severity: error --> Exception: Call to a member function append_child() on null /home/masterc3/public_html/citra/application/third_party/dompdf/include/frame_tree.cls.php 228
ERROR - 2020-03-04 10:10:22 --> Severity: error --> Exception: Requested HTML document contains no data. /home/masterc3/public_html/citra/application/third_party/dompdf/include/frame_tree.cls.php 146
ERROR - 2020-03-04 10:10:23 --> Severity: error --> Exception: Requested HTML document contains no data. /home/masterc3/public_html/citra/application/third_party/dompdf/include/frame_tree.cls.php 146
ERROR - 2020-03-04 10:37:57 --> Severity: error --> Exception: Requested HTML document contains no data. /home/masterc3/public_html/citra/application/third_party/dompdf/include/frame_tree.cls.php 146
ERROR - 2020-03-04 15:00:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 15:00:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 15:00:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 15:01:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil 
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2020-03-04 15:01:45 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 352
ERROR - 2020-03-04 15:02:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - Invalid query: delete from trx_laboratorium where id_pelayanan = ;
ERROR - 2020-03-04 15:02:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'null,nama_pelayanan,nama_pemeriksaan,nilai_min,nilai_max,nilai_text,null from ma' at line 2 - Invalid query: insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',,null,nama_pelayanan,nama_pemeriksaan,nilai_min,nilai_max,nilai_text,null from master_pemeriksaan;
ERROR - 2020-03-04 15:03:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 15:03:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 15:03:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 15:03:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 15:03:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 15:03:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 15:57:39 --> Severity: error --> Exception: Call to a member function get_cellmap() on null /home/masterc3/public_html/citra/application/third_party/dompdf/include/table_cell_frame_reflower.cls.php 64
ERROR - 2020-03-04 15:57:39 --> Severity: error --> Exception: Call to a member function get_cellmap() on null /home/masterc3/public_html/citra/application/third_party/dompdf/include/table_cell_frame_reflower.cls.php 64
ERROR - 2020-03-04 16:11:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 16:11:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 16:11:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 16:20:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 16:20:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 16:20:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 16:48:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 16:48:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 16:48:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 16:48:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 16:48:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 16:48:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 16:51:37 --> 404 Page Not Found: /index
ERROR - 2020-03-04 16:51:37 --> 404 Page Not Found: /index
ERROR - 2020-03-04 17:09:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 17:09:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 17:09:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 17:09:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 17:09:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 17:09:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 17:23:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 17:23:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 17:23:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 17:23:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 17:23:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 17:23:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 17:23:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 17:23:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 17:23:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 17:23:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 17:23:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 17:23:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 17:24:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 17:24:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 17:24:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 17:24:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-03-04 17:24:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-03-04 17:24:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-03-04 17:49:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '= 1' at line 3 - Invalid query: update master_obat
									set stok = stok - 1
										where 	 = 1
