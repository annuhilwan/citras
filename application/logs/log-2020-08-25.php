<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-08-25 04:06:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2020-08-25 04:06:15 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 728
ERROR - 2020-08-25 04:14:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2020-08-25 04:14:24 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 728
ERROR - 2020-08-25 08:30:18 --> 404 Page Not Found: /index
ERROR - 2020-08-25 08:30:18 --> 404 Page Not Found: /index
ERROR - 2020-08-25 08:30:36 --> 404 Page Not Found: /index
ERROR - 2020-08-25 08:30:38 --> 404 Page Not Found: /index
ERROR - 2020-08-25 08:51:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2020-08-25 08:51:21 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 728
ERROR - 2020-08-25 09:47:14 --> Severity: Error --> Maximum execution time of 300 seconds exceeded C:\xampp\htdocs\citra\system\database\drivers\mysqli\mysqli_driver.php 305
ERROR - 2020-08-25 11:11:45 --> Query error: Duplicate entry 'hrd-ga1@tiger-sash.co.id' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', 'Fadli Kurniawan', '$2y$10$ucbfyTLcH/SqsDnOo0UjPu/./V.r5q9LSLwBEOvelWRUUdR1BCnUS', 'hrd-ga1@tiger-sash.co.id', 'user.png', 'Pasien', 1307)
ERROR - 2020-08-25 11:11:45 --> Query error: Duplicate entry 'hrd-ga1@tiger-sash.co.id' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', 'Hadzakiysa Adillah', '$2y$10$oR3mit1Y/EBKK5l54n6r4.z/9RdIGvpiBMhvwZunSX3zZOGUN5DVy', 'hrd-ga1@tiger-sash.co.id', 'user.png', 'Pasien', 1308)
ERROR - 2020-08-25 11:11:46 --> Query error: Duplicate entry 'hrd-ga1@tiger-sash.co.id' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', 'Muhammad Sendy Muqorrobin', '$2y$10$x9tIS3D5fjKXeo1yn5B.1.1ePO9d2Zz5sewuivhABsCSa4.We.hsm', 'hrd-ga1@tiger-sash.co.id', 'user.png', 'Pasien', 1314)
ERROR - 2020-08-25 11:11:47 --> Query error: Duplicate entry 'hrd-ga1@tiger-sash.co.id' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', 'Ronald', '$2y$10$IXFOa5sOpUTNZiencqw4gO8PrSHrr6fnk5YObvxr/DBus1LR0/qnm', 'hrd-ga1@tiger-sash.co.id', 'user.png', 'Pasien', 1316)
ERROR - 2020-08-25 11:11:47 --> Query error: Duplicate entry 'hrd-ga1@tiger-sash.co.id' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', 'Solichun', '$2y$10$A7ywD6f4hTZlzwpSvzZbTOIHblbSEdHdzaetQCMGk1.jQovbhwZ7.', 'hrd-ga1@tiger-sash.co.id', 'user.png', 'Pasien', 1318)
ERROR - 2020-08-25 11:11:47 --> Query error: Duplicate entry 'hrd-ga1@tiger-sash.co.id' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', 'Syahrul Al Razzaq', '$2y$10$XPVH.94TpLRd6REC/Jho7O6aOPSJWz6t/rfEXSy6GvmN8fNyUJO/u', 'hrd-ga1@tiger-sash.co.id', 'user.png', 'Pasien', 1319)
ERROR - 2020-08-25 11:11:48 --> Query error: Duplicate entry 'Yandapradana1@gmail.com' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', 'Zulfikar', '$2y$10$lDRLOWJWPA5KrelfSbVAPepJaCcgKStjX6MCVe691hb8uo2Vqp7nG', 'Yandapradana1@gmail.com', 'user.png', 'Pasien', 1324)
ERROR - 2020-08-25 11:11:48 --> Query error: Duplicate entry 'hrd-ga1@tiger-sash.co.id' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', 'M Rivaldi Iswanto', '$2y$10$Q0oPS.v12llq0XdJ/bvteez811RB2NEpL3nRH9i.SXyNnuvnLrnOS', 'hrd-ga1@tiger-sash.co.id', 'user.png', 'Pasien', 1325)
ERROR - 2020-08-25 11:11:48 --> Query error: Duplicate entry 'hrd-ga1@tiger-sash.co.id' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', 'Samsul Bahri', '$2y$10$1sd8thzvOD3M5qhVAYzLcesscN3Y2eJRuOw56HsWQhhE8587xVeoy', 'hrd-ga1@tiger-sash.co.id', 'user.png', 'Pasien', 1326)
ERROR - 2020-08-25 11:11:48 --> Query error: Duplicate entry 'hrd-ga1@tiger-sash.co.id' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', 'Fuminori Kondo', '$2y$10$6xFiSzWmZnHDTRlCl5lBHePSBzctAUd93Q65bfzaaWE41AyXd2APy', 'hrd-ga1@tiger-sash.co.id', 'user.png', 'Pasien', 1327)
ERROR - 2020-08-25 11:11:49 --> Query error: Column 'bagian' cannot be null - Invalid query: INSERT INTO `master_pasien` (`created_dt`, `updated_dt`, `nama_pt`, `nama_lengkap`, `jenis_kelamin`, `tanggal_lahir`, `jenis_identitas`, `no_identitas`, `email`, `bagian`, `grup`, `status`) VALUES ('2020-08-25 11:11:49', '2020-08-25 11:11:49', 'PT. TIGER SASH INDONESIA', NULL, NULL, '1970-01-01', 'NIK', NULL, NULL, NULL, NULL, 'ACTIVE')
ERROR - 2020-08-25 11:11:49 --> Query error: Duplicate entry '0@email.com' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', NULL, '$2y$10$CCsOlw4n1/ooAEqUCi180uxFzxSPk4G8fyns.YahSrUjDYScGbqUq', '0@email.com', 'user.png', 'Pasien', 0)
ERROR - 2020-08-25 11:11:49 --> Query error: Column 'bagian' cannot be null - Invalid query: INSERT INTO `master_pasien` (`created_dt`, `updated_dt`, `nama_pt`, `nama_lengkap`, `jenis_kelamin`, `tanggal_lahir`, `jenis_identitas`, `no_identitas`, `email`, `bagian`, `grup`, `status`) VALUES ('2020-08-25 11:11:49', '2020-08-25 11:11:49', 'PT. TIGER SASH INDONESIA', NULL, NULL, '1970-01-01', 'NIK', NULL, NULL, NULL, NULL, 'ACTIVE')
ERROR - 2020-08-25 11:11:49 --> Query error: Duplicate entry '0@email.com' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', NULL, '$2y$10$lC/t5UeatrdaNm5w1hysROZqY3Ktlys8ECBWaNKnINqhrbT5WVrWa', '0@email.com', 'user.png', 'Pasien', 0)