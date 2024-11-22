<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-21 02:36:39 --> 404 Page Not Found: /index
ERROR - 2024-11-21 06:44:04 --> 404 Page Not Found: /index
ERROR - 2024-11-21 09:02:05 --> 404 Page Not Found: /index
ERROR - 2024-11-21 09:24:09 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatajeniskelamin() C:\xampp56\htdocs\citra-main\application\modules\registrasi\controllers\Registrasi.php 236
ERROR - 2024-11-21 09:24:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'group by b.jenis_kelamin' at line 3 - Invalid query: select b.jenis_kelamin, count(0) jumlah from trx_pelayanan a 
									left join master_pasien b on (a.id_pasien = b.id) 
										where a.id_medcheck_perusahaan =  group by b.jenis_kelamin;
ERROR - 2024-11-21 09:24:09 --> Severity: Error --> Call to a member function result() on boolean C:\xampp56\htdocs\citra-main\application\modules\registrasi\models\Registrasi_model.php 677
ERROR - 2024-11-21 09:24:09 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatafitornot() C:\xampp56\htdocs\citra-main\application\modules\registrasi\controllers\Registrasi.php 271
ERROR - 2024-11-21 09:24:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
											and jenis_resume = 'KATEGORI'	group by hasil_resume' at line 3 - Invalid query: SELECT hasil_resume, count(0) as jumlah FROM trx_resume
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = )
											and jenis_resume = 'KATEGORI'	group by hasil_resume;
ERROR - 2024-11-21 09:24:09 --> Severity: Error --> Call to a member function result() on boolean C:\xampp56\htdocs\citra-main\application\modules\registrasi\models\Registrasi_model.php 686
ERROR - 2024-11-21 09:24:09 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatadiagnosa() C:\xampp56\htdocs\citra-main\application\modules\registrasi\controllers\Registrasi.php 306
ERROR - 2024-11-21 09:24:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
											and jenis_resume = 'DIAGNOSA'	group by hasil_resume' at line 3 - Invalid query: SELECT hasil_resume, count(0) as jumlah FROM trx_resume
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = )
											and jenis_resume = 'DIAGNOSA'	group by hasil_resume;
ERROR - 2024-11-21 09:24:09 --> Severity: Error --> Call to a member function result() on boolean C:\xampp56\htdocs\citra-main\application\modules\registrasi\models\Registrasi_model.php 695
ERROR - 2024-11-21 09:24:09 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatatopten() C:\xampp56\htdocs\citra-main\application\modules\registrasi\controllers\Registrasi.php 355
ERROR - 2024-11-21 09:24:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
											and jenis_resume = 'DIAGNOSA' group by hasil_resume
												o' at line 3 - Invalid query: SELECT hasil_resume, count(0) as jumlah FROM trx_resume
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = )
											and jenis_resume = 'DIAGNOSA' group by hasil_resume
												order by jumlah desc limit 10;
ERROR - 2024-11-21 09:24:09 --> Severity: Error --> Call to a member function result() on boolean C:\xampp56\htdocs\citra-main\application\modules\registrasi\models\Registrasi_model.php 705
ERROR - 2024-11-21 09:24:09 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatapenunjangall() C:\xampp56\htdocs\citra-main\application\modules\registrasi\controllers\Registrasi.php 599
ERROR - 2024-11-21 09:24:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
											group by jenis_pemeriksaan' at line 3 - Invalid query: SELECT jenis_pemeriksaan, count(0) as jumlah FROM trx_penunjang
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = )
											group by jenis_pemeriksaan;
ERROR - 2024-11-21 09:24:09 --> Severity: Error --> Call to a member function result() on boolean C:\xampp56\htdocs\citra-main\application\modules\registrasi\models\Registrasi_model.php 734
ERROR - 2024-11-21 09:25:33 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatajeniskelamin() C:\xampp56\htdocs\citra-main\application\modules\registrasi\controllers\Registrasi.php 236
ERROR - 2024-11-21 09:25:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'group by b.jenis_kelamin' at line 3 - Invalid query: select b.jenis_kelamin, count(0) jumlah from trx_pelayanan a 
									left join master_pasien b on (a.id_pasien = b.id) 
										where a.id_medcheck_perusahaan =  group by b.jenis_kelamin;
ERROR - 2024-11-21 09:25:33 --> Severity: Error --> Call to a member function result() on boolean C:\xampp56\htdocs\citra-main\application\modules\registrasi\models\Registrasi_model.php 677
ERROR - 2024-11-21 09:25:33 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatafitornot() C:\xampp56\htdocs\citra-main\application\modules\registrasi\controllers\Registrasi.php 271
ERROR - 2024-11-21 09:25:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
											and jenis_resume = 'KATEGORI'	group by hasil_resume' at line 3 - Invalid query: SELECT hasil_resume, count(0) as jumlah FROM trx_resume
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = )
											and jenis_resume = 'KATEGORI'	group by hasil_resume;
ERROR - 2024-11-21 09:25:33 --> Severity: Error --> Call to a member function result() on boolean C:\xampp56\htdocs\citra-main\application\modules\registrasi\models\Registrasi_model.php 686
ERROR - 2024-11-21 09:25:33 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatadiagnosa() C:\xampp56\htdocs\citra-main\application\modules\registrasi\controllers\Registrasi.php 306
ERROR - 2024-11-21 09:25:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
											and jenis_resume = 'DIAGNOSA'	group by hasil_resume' at line 3 - Invalid query: SELECT hasil_resume, count(0) as jumlah FROM trx_resume
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = )
											and jenis_resume = 'DIAGNOSA'	group by hasil_resume;
ERROR - 2024-11-21 09:25:33 --> Severity: Error --> Call to a member function result() on boolean C:\xampp56\htdocs\citra-main\application\modules\registrasi\models\Registrasi_model.php 695
ERROR - 2024-11-21 09:25:34 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatatopten() C:\xampp56\htdocs\citra-main\application\modules\registrasi\controllers\Registrasi.php 355
ERROR - 2024-11-21 09:25:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
											and jenis_resume = 'DIAGNOSA' group by hasil_resume
												o' at line 3 - Invalid query: SELECT hasil_resume, count(0) as jumlah FROM trx_resume
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = )
											and jenis_resume = 'DIAGNOSA' group by hasil_resume
												order by jumlah desc limit 10;
ERROR - 2024-11-21 09:25:34 --> Severity: Error --> Call to a member function result() on boolean C:\xampp56\htdocs\citra-main\application\modules\registrasi\models\Registrasi_model.php 705
ERROR - 2024-11-21 09:25:34 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatapenunjangall() C:\xampp56\htdocs\citra-main\application\modules\registrasi\controllers\Registrasi.php 599
ERROR - 2024-11-21 09:25:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
											group by jenis_pemeriksaan' at line 3 - Invalid query: SELECT jenis_pemeriksaan, count(0) as jumlah FROM trx_penunjang
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = )
											group by jenis_pemeriksaan;
ERROR - 2024-11-21 09:25:34 --> Severity: Error --> Call to a member function result() on boolean C:\xampp56\htdocs\citra-main\application\modules\registrasi\models\Registrasi_model.php 734
ERROR - 2024-11-21 09:27:06 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatajeniskelamin() C:\xampp56\htdocs\citra-main\application\modules\registrasi\controllers\Registrasi.php 236
ERROR - 2024-11-21 09:27:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'group by b.jenis_kelamin' at line 3 - Invalid query: select b.jenis_kelamin, count(0) jumlah from trx_pelayanan a 
									left join master_pasien b on (a.id_pasien = b.id) 
										where a.id_medcheck_perusahaan =  group by b.jenis_kelamin;
ERROR - 2024-11-21 09:27:06 --> Severity: Error --> Call to a member function result() on boolean C:\xampp56\htdocs\citra-main\application\modules\registrasi\models\Registrasi_model.php 677
ERROR - 2024-11-21 09:27:06 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatafitornot() C:\xampp56\htdocs\citra-main\application\modules\registrasi\controllers\Registrasi.php 271
ERROR - 2024-11-21 09:27:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
											and jenis_resume = 'KATEGORI'	group by hasil_resume' at line 3 - Invalid query: SELECT hasil_resume, count(0) as jumlah FROM trx_resume
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = )
											and jenis_resume = 'KATEGORI'	group by hasil_resume;
ERROR - 2024-11-21 09:27:06 --> Severity: Error --> Call to a member function result() on boolean C:\xampp56\htdocs\citra-main\application\modules\registrasi\models\Registrasi_model.php 686
ERROR - 2024-11-21 09:27:06 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatadiagnosa() C:\xampp56\htdocs\citra-main\application\modules\registrasi\controllers\Registrasi.php 306
ERROR - 2024-11-21 09:27:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
											and jenis_resume = 'DIAGNOSA'	group by hasil_resume' at line 3 - Invalid query: SELECT hasil_resume, count(0) as jumlah FROM trx_resume
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = )
											and jenis_resume = 'DIAGNOSA'	group by hasil_resume;
ERROR - 2024-11-21 09:27:06 --> Severity: Error --> Call to a member function result() on boolean C:\xampp56\htdocs\citra-main\application\modules\registrasi\models\Registrasi_model.php 695
ERROR - 2024-11-21 09:27:07 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatatopten() C:\xampp56\htdocs\citra-main\application\modules\registrasi\controllers\Registrasi.php 352
ERROR - 2024-11-21 09:27:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
											and jenis_resume = 'DIAGNOSA' group by hasil_resume
												o' at line 3 - Invalid query: SELECT hasil_resume, count(0) as jumlah FROM trx_resume
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = )
											and jenis_resume = 'DIAGNOSA' group by hasil_resume
												order by jumlah desc limit 10;
ERROR - 2024-11-21 09:27:07 --> Severity: Error --> Call to a member function result() on boolean C:\xampp56\htdocs\citra-main\application\modules\registrasi\models\Registrasi_model.php 705
ERROR - 2024-11-21 09:27:07 --> Severity: Warning --> Missing argument 1 for Registrasi::getdatapenunjangall() C:\xampp56\htdocs\citra-main\application\modules\registrasi\controllers\Registrasi.php 596
ERROR - 2024-11-21 09:27:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
											group by jenis_pemeriksaan' at line 3 - Invalid query: SELECT jenis_pemeriksaan, count(0) as jumlah FROM trx_penunjang
									where id_pelayanan in (SELECT id FROM trx_pelayanan
										where id_medcheck_perusahaan = )
											group by jenis_pemeriksaan;
ERROR - 2024-11-21 09:27:07 --> Severity: Error --> Call to a member function result() on boolean C:\xampp56\htdocs\citra-main\application\modules\registrasi\models\Registrasi_model.php 734
ERROR - 2024-11-21 16:15:38 --> 404 Page Not Found: /index
ERROR - 2024-11-21 23:19:22 --> 404 Page Not Found: /index
