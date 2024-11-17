<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-03-10 07:03:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil 
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2020-03-10 07:03:42 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 388
ERROR - 2020-03-10 07:04:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by a.urutan asc' at line 4 - Invalid query: SELECT a.id, a.nama_pertanyaan, a.variable_name, b.hasil 
								 FROM  master_pertanyaan a 
								left join trx_medcheck_detail b on (a.id = b.id_pertanyaan) 
								WHERE a.status = 'ACTIVE' and a.kategori_pertanyaan like '%FISIK%' and id_transaksi =  order by a.urutan asc
ERROR - 2020-03-10 07:04:34 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 388
