<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-25 16:21:52 --> Severity: error --> Exception: syntax error, unexpected ')', expecting ',' or ';' /home/masterc3/public_html/citra/application/modules/registrasi/views/data_pelayanan_perusahaan.php 54
ERROR - 2020-02-25 16:21:52 --> Severity: error --> Exception: syntax error, unexpected ')', expecting ',' or ';' /home/masterc3/public_html/citra/application/modules/registrasi/views/data_pelayanan_perusahaan.php 54
ERROR - 2020-02-25 17:01:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '2' at line 5 - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, c.status
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 where a.id 2
ERROR - 2020-02-25 17:01:05 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 78
ERROR - 2020-02-25 17:01:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '2' at line 5 - Invalid query: select a.id, b.nama_perusahaan, a.tanggal_mulai, a.jumlah_hari, a.jenis_medcheck, c.nama_lengkap, c.status
								 from trx_medcheck_perusahaan a 
								 left join master_perusahaan b on (a.id_perusahaan = b.id)
								 left join trx_pelayanan c on (a.id = c.id_medcheck_perusahaan)
								 where a.id 2
ERROR - 2020-02-25 17:01:05 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 78
