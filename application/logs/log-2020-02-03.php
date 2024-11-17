ERROR - 2020-02-03 09:19:16 --> Query error: Unknown column 'hasil_pemeriksaan' in 'field list' - Invalid query: insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',102,hasil_pemeriksaan,nama_pelayanan,nama_pemeriksaan,nilai_min,nilai_max,nilai_text,null from master_pemeriksaan;
ERROR - 2020-02-03 09:36:23 --> Query error: Unknown column 'hasil_pemeriksaan' in 'field list' - Invalid query: UPDATE `users` SET `hasil_pemeriksaan` = '1'
WHERE `users_id` = '1'
ERROR - 2020-02-03 10:03:35 --> Severity: error --> Exception: syntax error, unexpected 'ERROR' (T_STRING), expecting ',' or ')' /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 70
ERROR - 2020-02-03 10:03:35 --> Severity: error --> Exception: syntax error, unexpected 'ERROR' (T_STRING), expecting ',' or ')' /home/masterc3/public_html/citra/application/modules/registrasi/models/Registrasi_model.php 70
ERROR - 2020-02-03 10:12:06 --> Severity: error --> Exception: syntax error, unexpected 'display' (T_STRING), expecting ',' or ';' /home/masterc3/public_html/citra/application/modules/registrasi/views/detailMedicalCheckup.php 457
ERROR - 2020-02-03 10:12:06 --> Severity: error --> Exception: syntax error, unexpected 'display' (T_STRING), expecting ',' or ';' /home/masterc3/public_html/citra/application/modules/registrasi/views/detailMedicalCheckup.php 457
ERROR - 2020-02-03 10:12:42 --> Severity: error --> Exception: syntax error, unexpected end of file /home/masterc3/public_html/citra/application/modules/registrasi/views/detailMedicalCheckup.php 212
ERROR - 2020-02-03 10:42:27 --> Query error: Column 'nama_pelayanan' cannot be null - Invalid query: INSERT INTO `master_pemeriksaan` (`status`, `nama_pelayanan`, `nama_pemeriksaan`, `nilai_min`, `nilai_max`, `nilai_text`) VALUES ('ACTIVE', NULL, NULL, NULL, NULL, NULL)
