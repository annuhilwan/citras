<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-08-27 05:10:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 3 - Invalid query: select * from trx_medcheck_perusahaan where id in (
									SELECT id_medcheck_perusahaan FROM trx_pelayanan 
											where id = )
ERROR - 2020-08-27 05:10:10 --> Severity: Error --> Call to a member function row_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 1382
ERROR - 2020-08-27 05:10:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 3 - Invalid query: select * from trx_medcheck_perusahaan where id in (
									SELECT id_medcheck_perusahaan FROM trx_pelayanan 
											where id = )
ERROR - 2020-08-27 05:10:11 --> Severity: Error --> Call to a member function row_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 1382
ERROR - 2020-08-27 05:10:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 3 - Invalid query: select * from trx_medcheck_perusahaan where id in (
									SELECT id_medcheck_perusahaan FROM trx_pelayanan 
											where id = )
ERROR - 2020-08-27 05:10:16 --> Severity: Error --> Call to a member function row_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 1382
ERROR - 2020-08-27 05:10:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 3 - Invalid query: select * from trx_medcheck_perusahaan where id in (
									SELECT id_medcheck_perusahaan FROM trx_pelayanan 
											where id = )
ERROR - 2020-08-27 05:10:17 --> Severity: Error --> Call to a member function row_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 1382
ERROR - 2020-08-27 11:59:03 --> Query error: Column 'bagian' cannot be null - Invalid query: INSERT INTO `master_pasien` (`created_dt`, `updated_dt`, `nama_pt`, `nama_lengkap`, `jenis_kelamin`, `tanggal_lahir`, `jenis_identitas`, `no_identitas`, `email`, `bagian`, `grup`, `status`) VALUES ('2020-08-27 11:59:03', '2020-08-27 11:59:03', 'PT. NUSA TOYOTETSU ENGINEERING', NULL, NULL, '1970-01-01', 'NIK', NULL, NULL, NULL, NULL, 'ACTIVE')
ERROR - 2020-08-27 11:59:04 --> Query error: Duplicate entry '0@email.com' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', NULL, '$2y$10$gm8C.CT7WfH2HPx89HLO1uKN4jg3Js9jJy7dlP5HQrXbxvKrQUM8G', '0@email.com', 'user.png', 'Pasien', 0)
ERROR - 2020-08-27 11:59:04 --> Query error: Column 'bagian' cannot be null - Invalid query: INSERT INTO `master_pasien` (`created_dt`, `updated_dt`, `nama_pt`, `nama_lengkap`, `jenis_kelamin`, `tanggal_lahir`, `jenis_identitas`, `no_identitas`, `email`, `bagian`, `grup`, `status`) VALUES ('2020-08-27 11:59:04', '2020-08-27 11:59:04', 'PT. NUSA TOYOTETSU ENGINEERING', NULL, NULL, '1970-01-01', 'NIK', NULL, NULL, NULL, NULL, 'ACTIVE')
ERROR - 2020-08-27 11:59:04 --> Query error: Duplicate entry '0@email.com' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', NULL, '$2y$10$psvw90IgkTHlt3O9bUQYBOad9ACXG9Kd8xufzT0ZUy1lHweXv6lvK', '0@email.com', 'user.png', 'Pasien', 0)
