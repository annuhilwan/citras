<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-22 04:55:48 --> Severity: Warning --> Missing argument 1 for Registrasi_model::get_data_pasien(), called in /home/masterc3/public_html/citra/application/modules/registrasi/controllers/Registrasi.php on line 438 and defined /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 33
ERROR - 2020-01-22 04:55:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - Invalid query: SELECT id, nama_lengkap FROM master_pasien where id = 
ERROR - 2020-01-22 04:55:48 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 36
ERROR - 2020-01-22 04:55:48 --> Severity: Warning --> Missing argument 1 for Registrasi_model::get_data_pasien(), called in /home/masterc3/public_html/citra/application/modules/registrasi/controllers/Registrasi.php on line 438 and defined /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 33
ERROR - 2020-01-22 04:55:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - Invalid query: SELECT id, nama_lengkap FROM master_pasien where id = 
ERROR - 2020-01-22 04:55:48 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 36
ERROR - 2020-01-22 05:00:01 --> Query error: Unknown column 'b.a' in 'field list' - Invalid query: select b.a, a.nama_lengkap, a.status, a.jenis_pelayanan , a.created_date
								 from trx_pelayanan a 
								 left join master_pasien b on (a.id_pasien = b.id)
ERROR - 2020-01-22 05:00:01 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 29
ERROR - 2020-01-22 05:00:01 --> Query error: Unknown column 'b.a' in 'field list' - Invalid query: select b.a, a.nama_lengkap, a.status, a.jenis_pelayanan , a.created_date
								 from trx_pelayanan a 
								 left join master_pasien b on (a.id_pasien = b.id)
ERROR - 2020-01-22 05:00:01 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 29
