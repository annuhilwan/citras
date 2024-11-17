<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-19 02:55:33 --> Query error: Column 'bagian' cannot be null - Invalid query: INSERT INTO `master_pasien` (`created_dt`, `updated_dt`, `nama_pt`, `nama_lengkap`, `jenis_kelamin`, `tanggal_lahir`, `jenis_identitas`, `no_identitas`, `email`, `bagian`, `grup`, `status`) VALUES ('2020-12-19 02:55:33', '2020-12-19 02:55:33', 'PT. AUTO ASKA INDONESIA', NULL, NULL, '1970-01-01', 'NIK', NULL, NULL, NULL, NULL, 'ACTIVE')
ERROR - 2020-12-19 02:55:33 --> Query error: Duplicate entry '0@email.com' for key 'email' - Invalid query: INSERT INTO `users` (`user_id`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`, `id_pasien`) VALUES ('1', 'active', '0', NULL, '$2y$10$qQJncGvW2X5z3gVaUaWCy.grnWm4hoDKSz8XTLL6yBv4Ym7mZO86W', '0@email.com', 'user.png', 'Pasien', 0)
ERROR - 2020-12-19 03:13:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 4 - Invalid query: insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',8674,null,c.nama_pelayanan,c.nama_pemeriksaan,c.nilai_min_wanita,c.nilai_max_wanita,c.nilai_text_wanita,c.id_satuan,c.harga_pemeriksaan 
								from  master_pemeriksaan c 
								where c.id = ;
ERROR - 2020-12-19 07:29:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2020-12-19 07:29:37 --> Severity: Error --> Call to a member function result_array() on a non-object C:\xampp\htdocs\citra\application\modules\registrasi\models\Registrasi_model.php 740
ERROR - 2020-12-19 11:09:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 310
ERROR - 2020-12-19 11:09:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 384
ERROR - 2020-12-19 11:09:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 429
ERROR - 2020-12-19 13:34:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 310
ERROR - 2020-12-19 13:34:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 384
ERROR - 2020-12-19 13:34:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\citra\application\modules\registrasi\views\detailDataDiriPasienPerPasien.php 429
