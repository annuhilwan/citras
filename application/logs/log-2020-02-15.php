<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-15 03:33:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 6 - Invalid query: insert into trx_laboratorium
								 select null,now(),1,now(),1,'ACTIVE',105,null,c.nama_pelayanan,c.nama_pemeriksaan,c.nilai_min,c.nilai_max,c.nilai_text,null 
								from master_paket_medcheck_header a 
								left join master_paket_medcheck_detail b on (a.id = b.id_header)
								left join master_pemeriksaan c on (b.id_pemeriksaan = c.id)
								where a.id = ;
