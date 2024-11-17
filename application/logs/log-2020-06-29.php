<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-29 05:06:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 313
ERROR - 2020-06-29 05:06:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 387
ERROR - 2020-06-29 05:06:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 432
ERROR - 2020-06-29 05:08:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 310
ERROR - 2020-06-29 05:08:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 384
ERROR - 2020-06-29 05:08:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/masterc3/public_html/citra/application/modules/registrasi/views/detailDataDiriPasien.php 429
ERROR - 2020-06-29 08:00:57 --> Severity: error --> Exception: syntax error, unexpected end of file /home/masterc3/public_html/citra/application/modules/registrasi/views/data_pasien_new_pie_chart.php 154
ERROR - 2020-06-29 08:01:17 --> Severity: error --> Exception: syntax error, unexpected end of file /home/masterc3/public_html/citra/application/modules/registrasi/views/data_pasien_new_pie_chart.php 154
ERROR - 2020-06-29 08:01:22 --> Severity: error --> Exception: syntax error, unexpected end of file /home/masterc3/public_html/citra/application/modules/registrasi/views/data_pasien_new_pie_chart.php 154
ERROR - 2020-06-29 08:01:33 --> Severity: error --> Exception: syntax error, unexpected end of file /home/masterc3/public_html/citra/application/modules/registrasi/views/data_pasien_new_pie_chart.php 166
ERROR - 2020-06-29 08:01:56 --> Severity: error --> Exception: syntax error, unexpected end of file /home/masterc3/public_html/citra/application/modules/registrasi/views/data_pasien_new_pie_chart.php 166
ERROR - 2020-06-29 08:02:03 --> Severity: error --> Exception: syntax error, unexpected end of file /home/masterc3/public_html/citra/application/modules/registrasi/views/data_pasien_new_pie_chart.php 166
ERROR - 2020-06-29 08:03:02 --> Severity: error --> Exception: syntax error, unexpected end of file /home/masterc3/public_html/citra/application/modules/registrasi/views/data_pasien_new_pie_chart.php 166
ERROR - 2020-06-29 08:05:28 --> Severity: error --> Exception: Cannot use object of type stdClass as array /home/masterc3/public_html/citra/application/modules/registrasi/views/data_pasien_new_pie_chart.php 44
ERROR - 2020-06-29 08:20:28 --> 404 Page Not Found: ../modules/registrasi/controllers/Registrasi/grafik_pie_per_diagnosa_perbagian
ERROR - 2020-06-29 08:21:23 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatafitornot(), called in /home/masterc3/public_html/citra/system/core/CodeIgniter.php on line 514 and defined /home/masterc3/public_html/citra/application/modules/registrasi/controllers/Registrasi.php 160
ERROR - 2020-06-29 08:21:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
											and jenis_resume = 'KATEGORI'	group by hasil_resume' at line 3 - Invalid query: SELECT hasil_resume, count(0) as jumlah FROM trx_resume
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = )
											and jenis_resume = 'KATEGORI'	group by hasil_resume;
ERROR - 2020-06-29 08:21:23 --> Severity: error --> Exception: Call to a member function result() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 430
ERROR - 2020-06-29 08:21:24 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatadiagnosa(), called in /home/masterc3/public_html/citra/system/core/CodeIgniter.php on line 514 and defined /home/masterc3/public_html/citra/application/modules/registrasi/controllers/Registrasi.php 195
ERROR - 2020-06-29 08:21:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
											and jenis_resume = 'DIAGNOSA'	group by hasil_resume' at line 3 - Invalid query: SELECT hasil_resume, count(0) as jumlah FROM trx_resume
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = )
											and jenis_resume = 'DIAGNOSA'	group by hasil_resume;
ERROR - 2020-06-29 08:21:24 --> Severity: error --> Exception: Call to a member function result() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 439
ERROR - 2020-06-29 08:21:24 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatatopten(), called in /home/masterc3/public_html/citra/system/core/CodeIgniter.php on line 514 and defined /home/masterc3/public_html/citra/application/modules/registrasi/controllers/Registrasi.php 230
ERROR - 2020-06-29 08:21:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
											and jenis_resume = 'DIAGNOSA' group by hasil_resume
												ord' at line 3 - Invalid query: SELECT hasil_resume, count(0) as jumlah FROM trx_resume
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = )
											and jenis_resume = 'DIAGNOSA' group by hasil_resume
												order by jumlah desc limit 10;
ERROR - 2020-06-29 08:21:24 --> Severity: error --> Exception: Call to a member function result() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 449
ERROR - 2020-06-29 08:21:24 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatafaringitis(), called in /home/masterc3/public_html/citra/system/core/CodeIgniter.php on line 514 and defined /home/masterc3/public_html/citra/application/modules/registrasi/controllers/Registrasi.php 265
ERROR - 2020-06-29 08:21:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and c.jenis_resume = 'Diagnosa' and hasil_resume = 'Faringitis'
												grou' at line 4 - Invalid query: select b.bagian, count(0) jumlah from trx_pelayanan a 
									left join master_pasien b on (a.id_pasien = b.id)
										left join trx_resume c on (a.id = c.id_pelayanan)
											where a.id_medcheck_perusahaan =  and c.jenis_resume = 'Diagnosa' and hasil_resume = 'Faringitis'
												group by b.bagian;
ERROR - 2020-06-29 08:21:24 --> Severity: error --> Exception: Call to a member function result() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 469
ERROR - 2020-06-29 08:23:08 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatafitornot(), called in /home/masterc3/public_html/citra/system/core/CodeIgniter.php on line 514 and defined /home/masterc3/public_html/citra/application/modules/registrasi/controllers/Registrasi.php 160
ERROR - 2020-06-29 08:23:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
											and jenis_resume = 'KATEGORI'	group by hasil_resume' at line 3 - Invalid query: SELECT hasil_resume, count(0) as jumlah FROM trx_resume
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = )
											and jenis_resume = 'KATEGORI'	group by hasil_resume;
ERROR - 2020-06-29 08:23:08 --> Severity: error --> Exception: Call to a member function result() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 430
ERROR - 2020-06-29 08:23:08 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatadiagnosa(), called in /home/masterc3/public_html/citra/system/core/CodeIgniter.php on line 514 and defined /home/masterc3/public_html/citra/application/modules/registrasi/controllers/Registrasi.php 195
ERROR - 2020-06-29 08:23:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
											and jenis_resume = 'DIAGNOSA'	group by hasil_resume' at line 3 - Invalid query: SELECT hasil_resume, count(0) as jumlah FROM trx_resume
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = )
											and jenis_resume = 'DIAGNOSA'	group by hasil_resume;
ERROR - 2020-06-29 08:23:08 --> Severity: error --> Exception: Call to a member function result() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 439
ERROR - 2020-06-29 08:23:08 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatatopten(), called in /home/masterc3/public_html/citra/system/core/CodeIgniter.php on line 514 and defined /home/masterc3/public_html/citra/application/modules/registrasi/controllers/Registrasi.php 230
ERROR - 2020-06-29 08:23:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
											and jenis_resume = 'DIAGNOSA' group by hasil_resume
												ord' at line 3 - Invalid query: SELECT hasil_resume, count(0) as jumlah FROM trx_resume
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = )
											and jenis_resume = 'DIAGNOSA' group by hasil_resume
												order by jumlah desc limit 10;
ERROR - 2020-06-29 08:23:08 --> Severity: error --> Exception: Call to a member function result() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 449
ERROR - 2020-06-29 08:23:08 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatafaringitis(), called in /home/masterc3/public_html/citra/system/core/CodeIgniter.php on line 514 and defined /home/masterc3/public_html/citra/application/modules/registrasi/controllers/Registrasi.php 265
ERROR - 2020-06-29 08:23:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and c.jenis_resume = 'Diagnosa' and hasil_resume = 'Faringitis'
												grou' at line 4 - Invalid query: select b.bagian, count(0) jumlah from trx_pelayanan a 
									left join master_pasien b on (a.id_pasien = b.id)
										left join trx_resume c on (a.id = c.id_pelayanan)
											where a.id_medcheck_perusahaan =  and c.jenis_resume = 'Diagnosa' and hasil_resume = 'Faringitis'
												group by b.bagian;
ERROR - 2020-06-29 08:23:08 --> Severity: error --> Exception: Call to a member function result() on boolean /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 469
