<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-03-16 02:06:33 --> Query error: Column 'status_pemeriksaan' cannot be null - Invalid query: INSERT INTO `trx_radiologi` (`status`, `id_pelayanan`, `status_pemeriksaan`, `nama_pemeriksaan`, `hasil_pemeriksaan`, `catatan`, `nama_dokter`) VALUES ('ACTIVE', '100', NULL, 'COR(JANTUNG)', 'yaaa', 'DBN', '')
ERROR - 2020-03-16 02:06:51 --> Query error: Column 'status_pemeriksaan' cannot be null - Invalid query: INSERT INTO `trx_radiologi` (`status`, `id_pelayanan`, `status_pemeriksaan`, `nama_pemeriksaan`, `hasil_pemeriksaan`, `catatan`, `nama_dokter`) VALUES ('ACTIVE', '100', NULL, 'KESAN', 'dfgd', 'DBN', '')
ERROR - 2020-03-16 02:08:27 --> Query error: Column 'status_pemeriksaan' cannot be null - Invalid query: INSERT INTO `trx_radiologi` (`status`, `id_pelayanan`, `status_pemeriksaan`, `nama_pemeriksaan`, `hasil_pemeriksaan`, `catatan`, `nama_dokter`) VALUES ('ACTIVE', '183', NULL, 'PULMO(PARU)', 'asd', 'DBN', 'dr. Te')
ERROR - 2020-03-16 05:00:41 --> 404 Page Not Found: ../modules/registrasi/controllers/Excel_export/data_report_detail
ERROR - 2020-03-16 05:00:41 --> 404 Page Not Found: ../modules/registrasi/controllers/Excel_export/data_report_detail
ERROR - 2020-03-16 05:04:33 --> Severity: error --> Exception: Call to a member function getActiveSheet() on null /home/masterc3/public_html/citra/application/modules/registrasi/controllers/Excel_export.php 126
ERROR - 2020-03-16 05:04:33 --> Severity: error --> Exception: Call to a member function getActiveSheet() on null /home/masterc3/public_html/citra/application/modules/registrasi/controllers/Excel_export.php 126
ERROR - 2020-03-16 16:43:35 --> Query error: Unknown column 'hasil_resume' in 'field list' - Invalid query: UPDATE `trx_laboratorium` SET `hasil_resume` = ''
WHERE `id` = '26'
