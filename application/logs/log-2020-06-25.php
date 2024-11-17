<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-25 08:06:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-06-25 08:06:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-06-25 08:06:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-06-25 08:06:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-06-25 08:06:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-06-25 08:06:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-06-25 08:06:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-06-25 08:06:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-06-25 08:06:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-06-25 08:38:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-06-25 08:38:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-06-25 08:38:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-06-25 08:41:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-06-25 08:41:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-06-25 08:41:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-06-25 08:41:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-06-25 08:41:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-06-25 08:41:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-06-25 08:41:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-06-25 08:41:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-06-25 08:41:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-06-25 08:42:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2020-06-25 08:42:49 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 619
ERROR - 2020-06-25 08:43:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2020-06-25 08:43:16 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 619
ERROR - 2020-06-25 08:45:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil , b.status_periksa
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2020-06-25 08:45:33 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 619
ERROR - 2020-06-25 08:49:16 --> Severity: Warning --> Missing argument 1 for Registrasi::list_data_detail_pelayanan_perusahaan(), called in /home/masterc3/public_html/citra/system/core/CodeIgniter.php on line 514 and defined /home/masterc3/public_html/citra/application/modules/registrasi/controllers/Registrasi.php 321
ERROR - 2020-06-25 08:49:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by -c.no_medcheck desc' at line 9 - Invalid query: select c.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, 
								 c.status, c.created_date, c.cek_fisik,c.cek_lab,c.cek_radiologi,c.cek_penunjang,c.no_medcheck, d.no_identitas,
								 d.jenis_kelamin,c.tanggal_lahir,d.bagian
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 left join master_pasien d on (c.id_pasien = d.id)
								 where  c.id_medcheck_perusahaan = 
								 order by -c.no_medcheck desc
ERROR - 2020-06-25 08:49:16 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 274
ERROR - 2020-06-25 08:49:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-06-25 08:49:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-06-25 08:49:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-06-25 15:35:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-06-25 15:35:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-06-25 15:35:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-06-25 16:14:43 --> 404 Page Not Found: /index
ERROR - 2020-06-25 16:14:54 --> 404 Page Not Found: /index
ERROR - 2020-06-25 16:15:14 --> 404 Page Not Found: /index
ERROR - 2020-06-25 16:15:16 --> 404 Page Not Found: /index
ERROR - 2020-06-25 16:15:23 --> 404 Page Not Found: /index
ERROR - 2020-06-25 16:15:30 --> 404 Page Not Found: /index
ERROR - 2020-06-25 16:15:31 --> 404 Page Not Found: /index
