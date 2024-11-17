<!DOCTYPE html>
<html><head>
<style>
th {
  text-align: left;
}

@page { margin: 10px; }
body { margin: 20px; }

.page_break { page-break-before: always; }
header { position: fixed; left: 0px; top: -180px; right: 0px; height: 150px; background-color: orange; text-align: center; }

.betatable {
    border-collapse: collapse;
table-layout: fixed;
}
.betatable td, .betatable th {
    border: 1px solid black;
}
.betatable tr:first-child th {
    border-top: 1px solid black;
}
.betatable tr:last-child td {
    border-bottom: 1px solid black;
}
.betatable tr td:first-child,
.betatable tr th:first-child {
    border-left: 1px solid black;
}
.betatable tr td:last-child,
.betatable tr th:last-child {
    border-right: 1px solid black;
}

.rontgen th{
    font-weight: normal;
}
.rontgen td {
    height: 15px;
}
.resume th{
    font-weight: normal;
}
.resume td {
    height: 0px;
}

.span-10 {
    font-size: 10px;
}
.span-13 {
    font-size: 13px;
}
}
.span-16 {
    font-size: 16px;
}
.span-7 {
    font-size: 7px;
    font-weight: bold;
    font-style: italic;
}
.td-vtop {
    vertical-align: top;
}
.table-no-border {
    border-spacing: 0;
    border-padding: 0;
}

</style>
</head><body>
<table class="tg">
  <tr>
    <th class="tg-0lax" rowspan="4"><img src="<?php echo 'assets/images/logo_citra.png'; ?>" id="logo" width="100" height="50"></th>
    <td class="tg-0lax"><font size="4">KLINIK CITRA ARDHITA MEDIFARMA</font></th>
  </tr>
  <tr>
    <td class="tg-0lax"><font size="1">Klinik Umum 24 Jam</font></td>
  </tr>
  <tr>
    <td class="tg-0lax"><font size="1">Capitol Business Park B2, Jl. Niaga Raya Cikarang, Bekasi</font></td>
  </tr>
  <tr>
    <td class="tg-0lax"><font size="1">Tlp. 021-89831945, Fax. 021-89831946</font></td>
  </tr>
</table>

<hr>


<br>

<br>

<br>
<?php
    $showpicpasien = '';
    if ($data['picture'] != null && $data['picture'] != '' && $data['picture'] != 'pasien.png') {
        $pictime = explode('_', $data['picture']);
        $picexp = explode('.', end($pictime));
        $ptime = $picexp[0];
        if (ctype_digit($ptime)) {
            $pdate = date('Y-m-d', $ptime);
            if (strtotime($pdate) >= strtotime($data_tanggal_medcheck['tanggal_mulai'])) {
                $showpicpasien = '<img src="assets/pasien/'.$data['picture'].'" id="logo" width="120" height="160">';
            }
        }
    }
?>
<table style="width:100%">
  <tr>
   <td width="35%" rowspan="9"><?php echo $showpicpasien; ?></td>
   <th width="50%" colspan="2"><font size="1">MCU NO : <?php echo $data['no_medcheck']; ?></font></th> 
  </tr>
  <tr>
    <!--<td width="25%"> </td>-->
    <td width="50%" colspan="2"><font size="1"><b> <?php echo $data['nama_perusahaan']; ?></b></font></td>
  </tr>
  <tr>
    <!--<td width="25%"> </td>-->
    <td width="50%" colspan="2">
        <table class="table-no-border">
            <tr>
                <td class="td-newline td-vtop"><span class="span-10">Nama :<br><span class="span-7">Name</span></span></td>
                <td class="td-vtop"><font size="1"><?php echo $data['nama_lengkap']; ?></font></td>
            </tr>
        </table>
    </td>
  </tr>
  <tr>
    <!--<td width="25%"> </td>-->
    <td width="50%" colspan="2">
        <table class="table-no-border">
            <?php
                $dateMcu = new DateTime($data_tanggal_medcheck['tanggal_mulai']);
                $dateBirth = new DateTime($data['tanggal_lahir']);
                $interval = $dateMcu->diff($dateBirth);
                $years_born = $interval->y;
                $months_born = $interval->m;
                $days_born = $interval->d;
            ?>
            <tr>
                <td class="td-newline td-vtop"><span class="span-10">Umur :<br><span class="span-7">Age</span></span></td>
                <td class="td-vtop"><font size="1"><?php echo $years_born.' Tahun '.$months_born.' Bulan '.$days_born.' Hari'; ?></font></td>
            </tr>
        </table>
    </td>
  </tr> 
  <tr>
    <!--<td width="25%"> </td>-->
    <td width="50%" colspan="2">
        <table class="table-no-border">
            <tr>
                <td class="td-newline td-vtop"><span class="span-10">NIK :<br><span class="span-7">NIN</span></span></td>
                <td class="td-vtop"><font size="1"><?php echo $data['no_identitas']; ?></font></td>
            </tr>
        </table>
    </td>
  </tr>
  <tr>
    <!--<td width="25%"> </td>-->
    <td width="50%" colspan="2">
        <table class="table-no-border">
            <tr>
                <td class="td-newline td-vtop"><span class="span-10">Jenis Kelamin :<br><span class="span-7">Gender</span></span></td>
                <td class="td-vtop"><font size="1"><?php echo $data['jenis_kelamin']; ?></font></td>
            </tr>
        </table>
    </td>
  </tr>
  <tr>
    <!--<td width="25%"> </td>-->
    <td width="50%" colspan="2">
        <table class="table-no-border">
            <tr>
                <td class="td-newline td-vtop"><span class="span-10">Bagian :<br><span class="span-7">Division</span></span></td>
                <td class="td-vtop"><font size="1"><?php echo $data['bagian']; ?></font></td>
            </tr>
        </table>
    </td>
  </tr> 
  <tr>
    <!--<td width="25%"> </td>-->
    <td width="50%" colspan="2">
        <table class="table-no-border">
            <tr>
                <td class="td-newline td-vtop"><span class="span-10">Status Kerja :<br><span class="span-7">Employment Status.</span></span></td>
                <td class="td-vtop"><font size="1"><?php echo $data['grup']; ?></font></td>
            </tr>
        </table>
    </td>
  </tr> 
  <tr>
    <!--<td width="25%"> </td>-->
    <td width="50%" colspan="2">
        <table class="table-no-border">
            <tr>
                <td class="td-newline td-vtop"><span class="span-10">Tanggal Periksa :<br><span class="span-7">Checking Date</span></span></td>
                <td class="td-vtop"><font size="1"><?php echo date('d M Y', strtotime($data['tanggal_pemeriksaan'])); ?></font></td>
            </tr>
        </table>
    </td>
  </tr>
  <tr>
    <td width="25%"> </td>
    <td width="50%"> </td>
    <td width="15%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
    <td width="50%" colspan="2" class="td-newline"><b><font size="1">JENIS PEMERIKSAAN</font><br><span class="span-7">CHECKING TYPE</span></b></td>
  </tr>
  <?php
$romawi = array("0","I", "II", "III", "IV", "V");
$hitungan = 0;
?>
  <tr>
    <td width="25%"> </td>
    <td width="50%" colspan="2"><b><font size="1">
	<?php
	$hitungan++;
	echo $romawi[$hitungan].". Pemeriksaan Dokter";
	
	?>
	</font><br><span class="span-7">Doctor Examination</span></b></td>
  </tr> 
  <tr>
    <td width="25%"> </td>
    <td width="50%" colspan="2"><b><font size="1">
	<?php
	if ($data_radiologi_cor || $data_radiologi_pulmo || $data_radiologi_diafragma || $data_radiologi_kesan)
	{
		$hitungan++;
		echo $romawi[$hitungan].". Rontgen Thorax PA";
	}
	
	?> 
	
	
	</font><br><span class="span-7">Rontgen Thorax PA</span></b></td>
  </tr>
  <tr>
    <td width="25%"> </td>
    <td width="50%" colspan="2"><b><font size="1">
	<?php
	$hitungan++;
	echo $romawi[$hitungan].". Pemeriksaan Laboratorium";
	
	?>
	</font><br><span class="span-7">Laboratory Examination</span></b></td>
  </tr>
  <?php
  $angka = 0;
  ?>
 
   <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	 <?php
	if ($data_lab_hematologi)
	{
		$angka++;
		echo  $angka.". HEMATOLOGI";
	}
	
	?> 
	</font></td>
    <td width="25%"> </td>
  </tr>
	 
  <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	<?php
	if ($data_lab_diffcount)
	{
		$angka++;
		echo  $angka.". DIFF COUNT";
	}	
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	<?php
	if ($data_lab_urinalisa)
	{
		$angka++;
		echo  $angka.". URINALISA";
	}
	
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	<?php
	if ($data_lab_sedimenurine)
	{
		$angka++;
		echo  $angka.". SEDIMEN URINE";
	}
	
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	<?php
	if ($data_lab_kimia_darah)
	{
		$angka++;
		echo $angka.". KIMIA DARAH";
	}
	
		?>
	</font></td>
    <td width="25%"> </td>
  </tr> 
  <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	<?php
	if ($data_lab_imunoserologi)
	{
		$angka++;
		echo  $angka.". IMUNOSEROLOGI";
	}
	
		?>
	</font></td>
    <td width="25%"> </td>
  </tr> 
  <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	<?php
	if ($data_lab_drugtest)
	{
		$angka++;
		echo  $angka.". DRUG TEST";
	}

	?>
	</font></td>
    <td width="25%"> </td>
  </tr> 
    <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	<?php
	if ($data_lab_widal)
	{
		$angka++;
		echo  $angka.". WIDAL TEST";
	}	
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	<?php
	if ($data_lab_kulturfeses)
	{
		$angka++;
		echo  $angka.". KULTUR FESES";
	}

	?>
	</font></td>
    <td width="25%"> </td>
  </tr> 
  <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	<?php
	if ($data_lab_golongandarah)
	{
		$angka++;
		echo  $angka.". GOLONGAN DARAH";
	}
	
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	<?php
	if ($data_lab_penandatumor)
	{
		$angka++;
		echo  $angka.". PENANDA TUMOR";
	}	
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	<?php
	if ($data_lab_hexanedione)
	{
		$angka++;
		echo  $angka.". 2,5-HEXANEDIONE";
	}	
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	<?php
	if ($data_lab_elektrolit)
	{
		$angka++;
		echo  $angka.". ELEKTROLIT";
	}	
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	<?php
	if ($data_lab_feses)
	{
		$angka++;
		echo  $angka.". FESES";
	}	
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	<?php
	if ($data_lab_logam)
	{
		$angka++;
		echo  $angka.". LOGAM";
	}	
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	<?php
	if ($data_lab_benzena)
	{
		$angka++;
		echo  $angka.". BENZENA";
	}	
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	<?php
	if ($data_lab_toluena)
	{
		$angka++;
		echo  $angka.". TOLUENA";
	}	
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	<?php
	if ($data_lab_xilene)
	{
		$angka++;
		echo  $angka.". XILENE";
	}	
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
   <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	<?php
	if ($data_lab_codarah)
	{
		$angka++;
		echo  $angka.". CO DARAH";
	}	
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	<?php
	if ($data_lab_btx)
	{
		$angka++;
		echo  $angka.". BTX (Benzene, Toluene, Xylene)";
	}	
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
    <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	<?php
	if ($data_lab_kehamilan)
	{
		$angka++;
		echo  $angka.". KEHAMILAN";
	}	
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
    <td width="50%"><font size="1">
	<?php
	if ($data_lab_rectal)
	{
		$angka++;
		echo  $angka.". RECTAL SWAB";
	}	
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
     <td width="50%"><b><font size="1">
	 <?php
	  if ($data_penunjang_audiometri || $data_penunjang_spirometri || $data_penunjang_pap_smear || $data_penunjang_fitness_test || $data_penunjang_ekg || $data_penunjang_usg_mammae || $data_penunjang_usg_abdomen || $data_penunjang_treadmill || $data_penunjang_ilo || $data_penunjang_iva || $data_penunjang_alcohol)
	{
	$hitungan++;
	echo $romawi[$hitungan].". Pemeriksaan Penunjang";
	}
	?>
	</font></b></td>
    <td width="25%"> </td>
  </tr>
<?php
  $angkapenunjang = 0;
  ?>  
  <tr>
    <td width="25%"> </td>
     <td width="50%"><font size="1">
	 <?php
	 if ($data_penunjang_audiometri)
	{
	$angkapenunjang++;
	echo $angkapenunjang.". Audiometri";
	}
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
     <td width="50%"><font size="1">
	 <?php
	 if ($data_penunjang_ekg)
	{
	$angkapenunjang++;
	echo $angkapenunjang.". EKG";
	}
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
   <tr>
    <td width="25%"> </td>
     <td width="50%"><font size="1">
	 <?php
	 if ($data_penunjang_spirometri)
	{
	$angkapenunjang++;
	echo $angkapenunjang.". Spirometri";
	}
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
   <tr>
    <td width="25%"> </td>
     <td width="50%"><font size="1">
	 <?php
	 if ($data_penunjang_pap_smear)
	{
	$angkapenunjang++;
	echo $angkapenunjang.". Pap Smear";
	}
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
     <td width="50%"><font size="1">
	 <?php
	  if ($data_penunjang_fitness_test)
	{
	$angkapenunjang++;
	echo $angkapenunjang.". Fitness Tes";
	}
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
     <td width="50%"><font size="1">
	 <?php
	 if ($data_penunjang_usg_mammae)
	{
	$angkapenunjang++;
	echo $angkapenunjang.". USG Mammae";
	}
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
     <td width="50%"><font size="1">
	 <?php
	 if ($data_penunjang_usg_abdomen)
	{
	$angkapenunjang++;
	echo $angkapenunjang.". USG Abdomen";
	}
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
     <td width="50%"><font size="1">
	 <?php
	 if ($data_penunjang_treadmill)
	{
	$angkapenunjang++;
	echo $angkapenunjang.". Treadmill";
	}
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
     <td width="50%"><font size="1">
	 <?php
	 if ($data_penunjang_ilo)
	{
	$angkapenunjang++;
	echo $angkapenunjang.". Rontgen ILO";
	}
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
     <td width="50%"><font size="1">
	 <?php
	 if ($data_penunjang_iva)
	{
	$angkapenunjang++;
	echo $angkapenunjang.". IVA Test";
	}
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
  <tr>
    <td width="25%"> </td>
     <td width="50%"><font size="1">
	 <?php
	 if ($data_penunjang_alcohol)
	{
	$angkapenunjang++;
	echo $angkapenunjang.". Alcohol Breath Test";
	}
	?>
	</font></td>
    <td width="25%"> </td>
  </tr>
</table>
                	
<div class="page_break"></div>		
<font size="2">MCU NO : <?php echo $data['no_medcheck']; ?></font> 
<br>           
<table class="table-no-border">
    <tr>
        <td class="td-newline td-vtop"><span class="span-13">Nama :<br><span class="span-7">Name</span></span></td>
        <td class="td-vtop"><font size="2"><?php echo $data['nama_lengkap']; ?></font></td>
    </tr>
</table>      
<br><br>
<table class="table-no-border">
    <tr>
        <td class="td-newline td-vtop"><b><span class="span-16">PEMERIKSAAN FISIK<br><span class="span-7">PHYSICAL EXAMINATION</span></span></b></td>
    </tr>
</table>
<hr>	
<table class="table-no-border">
    <tr>
        <td class="td-newline td-vtop"><b><span class="span-16">KEADAAN UMUM<br><span class="span-7">GENERAL CONDITION</span></span></b></td>
    </tr>
</table>
<br>
<br>
<table style="width:100%">

<tr class="td-vtop">
<td class="td-newline td-vtop"><span class="span-10">BERAT BADAN<br><span class="span-7">WEIGHT</span></span></td>
<td><font style="width:15%" size="1">: <?php echo $data['berat_badan']; ?></font> </td>
<td><font style="width:15%" size="1">Kg</font> </td>
<td><font style="width:15%" size="1"> </font> </td>
<td><font style="width:15%" size="1"> </font> </td>
<td class="td-newline td-vtop"><span class="span-10">TEKANAN DARAH<br><span class="span-7">BLOOD PRESSURE</span></span></td>
<td><font style="width:15%" size="1">: <?php echo $data['tekanan_darah']; ?></font> </td>
<td><font style="width:15%" size="1">mm/Hg</font> </td>

</tr>
<tr class="td-vtop">
<td class="td-newline td-vtop"><span class="span-10">TINGGI BADAN<br><span class="span-7">HEIGHT</span></span></td>
<td><font style="width:15%" size="1">: <?php echo $data['tinggi_badan']; ?></font> </td>
<td><font style="width:15%" size="1">Cm</font> </td>
<td><font style="width:15%" size="1"> </font> </td>
<td><font style="width:15%" size="1"> </font> </td>
<td class="td-newline td-vtop"><span class="span-10">NADI<br><span class="span-7">PULSE</span></span></td>
<td><font style="width:15%" size="1">: <?php echo $data['denyut_nadi']; ?></font> </td>
<td><font style="width:15%" size="1">x/menit</font> </td>
</tr>

</table>
<?php if(count($data_fisik_anamsia) > 0) { ?>
<br>
<br>
<table class="betatable" style="width:100%">
					
							<tr class="td-vtop">
								<th width="200px" class="td-newline">
								    <span class="span-10">ANAMNESA<br><span class="span-7">ANAMNESA</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Ada/Ya<br><span class="span-7">Exist/Yes</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Tidak<br><span class="span-7">No</span></span>
								</th>
								<th width="200px" class="td-newline">
								    <span class="span-10">Keterangan<br><span class="span-7">Note</span></span>
								</th>
							</tr>

						
						<?php
							$ct = 1;
							foreach ((Array) $data_fisik_anamsia AS $key => $val) { 
							?>	<tr>     
								<td width="200px" class="td-newline">
								    <span class="span-10"><?php echo $val['nama_pertanyaan']; ?><br><span class="span-7"><?php echo $val['pertanyaan_inggris']; ?></span></span>
								</td>
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="YA") {echo "X";}else { echo " ";} ?></font></td>								
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="TIDAK") {echo "X";}else { echo " ";} ?></font></td>								
								<td><font style="width:200px" size="1"><?php echo $val['hasil']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
					
</table>
<?php } if(count($data_fisik_mata) > 0) { ?>
<br>
<br>
<table class="betatable" style="width:100%">
					
							<tr>
								<th width="200px" class="td-newline">
								    <span class="span-10">MATA<br><span class="span-7">EYE</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Abnormal<br><span class="span-7">Abnormal</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Normal<br><span class="span-7">Normal</span></span>
								</th>
								<th width="200px" class="td-newline">
								    <span class="span-10">Keterangan<br><span class="span-7">Note</span></span>
								</th>
							</tr>
				
						<?php
							$ct = 1;
							foreach ((Array) $data_fisik_mata AS $key => $val) { 
							?>	<tr>     
								<td width="200px" class="td-newline">
								    <span class="span-10"><?php echo $val['nama_pertanyaan']; ?><br><span class="span-7"><?php echo $val['pertanyaan_inggris']; ?></span></span>
								</td>
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="YA") {echo "X";}else { echo " ";} ?></font></td>								
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="TIDAK") {echo "X";}else { echo " ";} ?></font></td>								
								<td><font style="width:200px" size="1"><?php echo $val['hasil']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
					
</table>	
<?php } if(count($data_fisik_perut) > 0) { ?>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr>
								<th width="200px" class="td-newline">
								    <span class="span-10">PERUT<br><span class="span-7">STOMACH</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Abnormal<br><span class="span-7">Abnormal</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Normal<br><span class="span-7">Normal</span></span>
								</th>
								<th width="200px" class="td-newline">
								    <span class="span-10">Keterangan<br><span class="span-7">Note</span></span>
								</th>
							</tr>
				
						<?php
							$ct = 1;
							foreach ((Array) $data_fisik_perut AS $key => $val) { 
							?>	<tr>     
								<td width="200px" class="td-newline">
								    <span class="span-10"><?php echo $val['nama_pertanyaan']; ?><br><span class="span-7"><?php echo $val['pertanyaan_inggris']; ?></span></span>
								</td>
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="YA") {echo "X";}else { echo " ";} ?></font></td>								
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="TIDAK") {echo "X";}else { echo " ";} ?></font></td>								
								<td><font style="width:200px" size="1"><?php echo $val['hasil']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
						
</table>	
<?php } if(count($data_fisik_leher) > 0) { ?>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr>
								<th width="200px" class="td-newline">
								    <span class="span-10">LEHER<br><span class="span-7">NECK</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Abnormal<br><span class="span-7">Abnormal</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Normal<br><span class="span-7">Normal</span></span>
								</th>
								<th width="200px" class="td-newline">
								    <span class="span-10">Keterangan<br><span class="span-7">Note</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_fisik_leher AS $key => $val) { 
							?>	<tr>     
								<td width="200px" class="td-newline">
								    <span class="span-10"><?php echo $val['nama_pertanyaan']; ?><br><span class="span-7"><?php echo $val['pertanyaan_inggris']; ?></span></span>
								</td>
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="YA") {echo "X";}else { echo " ";} ?></font></td>								
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="TIDAK") {echo "X";}else { echo " ";} ?></font></td>								
								<td><font style="width:200px" size="1"><?php echo $val['hasil']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
					
</table>	
<?php } if(count($data_fisik_tenggorokan) > 0) { ?>
<br>
<br>
<table class="betatable" style="width:100%">
				
							<tr>
								<th width="200px" class="td-newline">
								    <span class="span-10">TENGGOROKAN<br><span class="span-7">THROAT</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Abnormal<br><span class="span-7">Abnormal</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Normal<br><span class="span-7">Normal</span></span>
								</th>
								<th width="200px" class="td-newline">
								    <span class="span-10">Keterangan<br><span class="span-7">Note</span></span>
								</th>
							</tr>

						<?php
							$ct = 1;
							foreach ((Array) $data_fisik_tenggorokan AS $key => $val) { 
							?>	<tr>     
								<td width="200px" class="td-newline">
								    <span class="span-10"><?php echo $val['nama_pertanyaan']; ?><br><span class="span-7"><?php echo $val['pertanyaan_inggris']; ?></span></span>
								</td>
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="YA") {echo "X";}else { echo " ";} ?></font></td>								
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="TIDAK") {echo "X";}else { echo " ";} ?></font></td>								
								<td><font style="width:200px" size="1"><?php echo $val['hasil']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
					
</table>	
<?php } if(count($data_fisik_mulut) > 0) { ?>
<br>
<br>
<table class="betatable" style="width:100%">
					
							<tr>
								<th width="200px" class="td-newline">
								    <span class="span-10">MULUT<br><span class="span-7">MOUTH</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Abnormal<br><span class="span-7">Abnormal</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Normal<br><span class="span-7">Normal</span></span>
								</th>
								<th width="200px" class="td-newline">
								    <span class="span-10">Keterangan<br><span class="span-7">Note</span></span>
								</th>
							</tr>
					
						<?php
							$ct = 1;
							foreach ((Array) $data_fisik_mulut AS $key => $val) { 
							?>	<tr>     
								<td width="200px" class="td-newline">
								    <span class="span-10"><?php echo $val['nama_pertanyaan']; ?><br><span class="span-7"><?php echo $val['pertanyaan_inggris']; ?></span></span>
								</td>
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="YA") {echo "X";}else { echo " ";} ?></font></td>								
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="TIDAK") {echo "X";}else { echo " ";} ?></font></td>								
								<td><font style="width:200px" size="1"><?php echo $val['hasil']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
					
</table>
<?php } if(count($data_fisik_telinga) > 0) { ?>
<br>
<br>
<table class="betatable" style="width:100%">
					
							<tr>
								<th width="200px" class="td-newline">
								    <span class="span-10">TELINGA<br><span class="span-7">EAR</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Abnormal<br><span class="span-7">Abnormal</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Normal<br><span class="span-7">Normal</span></span>
								</th>
								<th width="200px" class="td-newline">
								    <span class="span-10">Keterangan<br><span class="span-7">Note</span></span>
								</th>
							</tr>
					
						<?php
							$ct = 1;
							foreach ((Array) $data_fisik_telinga AS $key => $val) { 
							?>	<tr>     
								<td width="200px" class="td-newline">
								    <span class="span-10"><?php echo $val['nama_pertanyaan']; ?><br><span class="span-7"><?php echo $val['pertanyaan_inggris']; ?></span></span>
								</td>
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="YA") {echo "X";}else { echo " ";} ?></font></td>								
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="TIDAK") {echo "X";}else { echo " ";} ?></font></td>								
								<td><font style="width:200px" size="1"><?php echo $val['hasil']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
					
</table>
<?php } if(count($data_fisik_hidung) > 0) { ?>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr>
								<th width="200px" class="td-newline">
								    <span class="span-10">HIDUNG<br><span class="span-7">NOSE</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Abnormal<br><span class="span-7">Abnormal</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Normal<br><span class="span-7">Normal</span></span>
								</th>
								<th width="200px" class="td-newline">
								    <span class="span-10">Keterangan<br><span class="span-7">Note</span></span>
								</th>
							</tr>

						<?php
							$ct = 1;
							foreach ((Array) $data_fisik_hidung AS $key => $val) { 
							?>	<tr>     
								<td width="200px" class="td-newline">
								    <span class="span-10"><?php echo $val['nama_pertanyaan']; ?><br><span class="span-7"><?php echo $val['pertanyaan_inggris']; ?></span></span>
								</td>
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="YA") {echo "X";}else { echo " ";} ?></font></td>								
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="TIDAK") {echo "X";}else { echo " ";} ?></font></td>								
								<td><font style="width:200px" size="1"><?php echo $val['hasil']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
					
</table>
<?php } if(count($data_fisik_thorax) > 0) { ?>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr>
								<th width="200px" class="td-newline">
								    <span class="span-10">THORAX<br><span class="span-7">THORAX</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Abnormal<br><span class="span-7">Abnormal</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Normal<br><span class="span-7">Normal</span></span>
								</th>
								<th width="200px" class="td-newline">
								    <span class="span-10">Keterangan<br><span class="span-7">Note</span></span>
								</th>
							</tr>

						
						<?php
							$ct = 1;
							foreach ((Array) $data_fisik_thorax AS $key => $val) { 
							?>	<tr>     
								<td width="200px" class="td-newline">
								    <span class="span-10"><?php echo $val['nama_pertanyaan']; ?><br><span class="span-7"><?php echo $val['pertanyaan_inggris']; ?></span></span>
								</td>
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="YA") {echo "X";}else { echo " ";} ?></font></td>								
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="TIDAK") {echo "X";}else { echo " ";} ?></font></td>								
								<td><font style="width:200px" size="1"><?php echo $val['hasil']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
					
</table>
<?php } if(count($data_fisik_corpulmo) > 0) { ?>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr>
								<th width="200px" class="td-newline">
								    <span class="span-10">COR / PULMO<br><span class="span-7">COR / PULMO</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Abnormal<br><span class="span-7">Abnormal</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Normal<br><span class="span-7">Normal</span></span>
								</th>
								<th width="200px" class="td-newline">
								    <span class="span-10">Keterangan<br><span class="span-7">Note</span></span>
								</th>
							</tr>
					
						<?php
							$ct = 1;
							foreach ((Array) $data_fisik_corpulmo AS $key => $val) { 
							?>	<tr>     
								<td width="200px" class="td-newline">
								    <span class="span-10"><?php echo $val['nama_pertanyaan']; ?><br><span class="span-7"><?php echo $val['pertanyaan_inggris']; ?></span></span>
								</td>
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="YA") {echo "X";}else { echo " ";} ?></font></td>								
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="TIDAK") {echo "X";}else { echo " ";} ?></font></td>								
								<td><font style="width:200px" size="1"><?php echo $val['hasil']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
					
</table>
<?php } if(count($data_fisik_extrimitas) > 0) { ?>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr>
								<th width="200px" class="td-newline">
								    <span class="span-10">EXTRIMITAS<br><span class="span-7">EXTRIMITY</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Abnormal<br><span class="span-7">Abnormal</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Normal<br><span class="span-7">Normal</span></span>
								</th>
								<th width="200px" class="td-newline">
								    <span class="span-10">Keterangan<br><span class="span-7">Note</span></span>
								</th>
							</tr>
				
						<?php
							$ct = 1;
							foreach ((Array) $data_fisik_extrimitas AS $key => $val) { 
							?>	<tr>     
								<td width="200px" class="td-newline">
								    <span class="span-10"><?php echo $val['nama_pertanyaan']; ?><br><span class="span-7"><?php echo $val['pertanyaan_inggris']; ?></span></span>
								</td>
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="YA") {echo "X";}else { echo " ";} ?></font></td>								
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="TIDAK") {echo "X";}else { echo " ";} ?></font></td>								
								<td><font style="width:200px" size="1"><?php echo $val['hasil']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>

</table>
<?php } if(count($data_fisik_neuromuscular) > 0) { ?>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr>
								<th width="200px" class="td-newline">
								    <span class="span-10">NEUROMUSCULAR<br><span class="span-7">NEUROMUSCULAR</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Abnormal<br><span class="span-7">Abnormal</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Normal<br><span class="span-7">Normal</span></span>
								</th>
								<th width="200px" class="td-newline">
								    <span class="span-10">Keterangan<br><span class="span-7">Note</span></span>
								</th>
							</tr>
				
						<?php
							$ct = 1;
							foreach ((Array) $data_fisik_neuromuscular AS $key => $val) { 
							?>	<tr>     
								<td width="200px" class="td-newline">
								    <span class="span-10"><?php echo $val['nama_pertanyaan']; ?><br><span class="span-7"><?php echo $val['pertanyaan_inggris']; ?></span></span>
								</td>
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="YA") {echo "X";}else { echo " ";} ?></font></td>								
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="TIDAK") {echo "X";}else { echo " ";} ?></font></td>								
								<td><font style="width:200px" size="1"><?php echo $val['hasil']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>

</table>
<?php } if(count($data_fisik_kulit) > 0) { ?>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr>
								<th width="200px" class="td-newline">
								    <span class="span-10">KULIT<br><span class="span-7">SKIN</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Abnormal<br><span class="span-7">Abnormal</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Normal<br><span class="span-7">Normal</span></span>
								</th>
								<th width="200px" class="td-newline">
								    <span class="span-10">Keterangan<br><span class="span-7">Note</span></span>
								</th>
							</tr>
				
						<?php
							$ct = 1;
							foreach ((Array) $data_fisik_kulit AS $key => $val) { 
							?>	<tr>     
								<td width="200px" class="td-newline">
								    <span class="span-10"><?php echo $val['nama_pertanyaan']; ?><br><span class="span-7"><?php echo $val['pertanyaan_inggris']; ?></span></span>
								</td>
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="YA") {echo "X";}else { echo " ";} ?></font></td>								
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="TIDAK") {echo "X";}else { echo " ";} ?></font></td>								
								<td><font style="width:200px" size="1"><?php echo $val['hasil']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
						
</table>	
<?php } if(count($data_fisik_sistem_alat) > 0) { ?>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr>
								<th width="200px" class="td-newline">
								    <span class="span-10">Sistem Alat Gerak Tangan<br><span class="span-7">Hand Movement System</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Abnormal<br><span class="span-7">Abnormal</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Normal<br><span class="span-7">Normal</span></span>
								</th>
								<th width="200px" class="td-newline">
								    <span class="span-10">Keterangan<br><span class="span-7">Note</span></span>
								</th>
							</tr>
					
						<?php
							$ct = 1;
							foreach ((Array) $data_fisik_sistem_alat AS $key => $val) { 
							?>	<tr>     
								<td width="200px" class="td-newline">
								    <span class="span-10"><?php echo $val['nama_pertanyaan']; ?><br><span class="span-7"><?php echo $val['pertanyaan_inggris']; ?></span></span>
								</td>
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="YA") {echo "X";}else { echo " ";} ?></font></td>								
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="TIDAK") {echo "X";}else { echo " ";} ?></font></td>								
								<td><font style="width:200px" size="1"><?php echo $val['hasil']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
					
</table>	
<?php } if(count($data_fisik_abdomen) > 0) { ?>
<br>
<br>
<table class="betatable" style="width:100%">
					
							<tr>
								<th width="200px" class="td-newline">
								    <span class="span-10">ABDOMEN<br><span class="span-7">ABDOMEN</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Abnormal<br><span class="span-7">Abnormal</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Normal<br><span class="span-7">Normal</span></span>
								</th>
								<th width="200px" class="td-newline">
								    <span class="span-10">Keterangan<br><span class="span-7">Note</span></span>
								</th>
							</tr>
					
						<?php
							$ct = 1;
							foreach ((Array) $data_fisik_abdomen AS $key => $val) { 
							?>	<tr>     
								<td width="200px" class="td-newline">
								    <span class="span-10"><?php echo $val['nama_pertanyaan']; ?><br><span class="span-7"><?php echo $val['pertanyaan_inggris']; ?></span></span>
								</td>
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="YA") {echo "X";}else { echo " ";} ?></font></td>								
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="TIDAK") {echo "X";}else { echo " ";} ?></font></td>								
								<td><font style="width:200px" size="1"><?php echo $val['hasil']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>

</table>	
<?php } if(count($data_fisik_sistem_alat) > 0) { ?>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr>
								<th width="200px" class="td-newline">
								    <span class="span-10">Sistem Alat Gerak Tangan<br><span class="span-7">Hand Movement System</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Abnormal<br><span class="span-7">Abnormal</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Normal<br><span class="span-7">Normal</span></span>
								</th>
								<th width="200px" class="td-newline">
								    <span class="span-10">Keterangan<br><span class="span-7">Note</span></span>
								</th>
							</tr>
					
						<?php
							$ct = 1;
							foreach ((Array) $data_fisik_sistem_alat AS $key => $val) { 
							?>	<tr>     
								<td width="200px" class="td-newline">
								    <span class="span-10"><?php echo $val['nama_pertanyaan']; ?><br><span class="span-7"><?php echo $val['pertanyaan_inggris']; ?></span></span>
								</td>
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="YA") {echo "X";}else { echo " ";} ?></font></td>								
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="TIDAK") {echo "X";}else { echo " ";} ?></font></td>								
								<td><font style="width:200px" size="1"><?php echo $val['hasil']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
					
</table>	
<?php } if(count($data_fisik_genetalia) > 0) { ?>
<br>
<br>
<table class="betatable" style="width:100%">
					
							<tr>
								<th width="200px" class="td-newline">
								    <span class="span-10">GENITALIA<br><span class="span-7">GENITALIA</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Abnormal<br><span class="span-7">Abnormal</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Normal<br><span class="span-7">Normal</span></span>
								</th>
								<th width="200px" class="td-newline">
								    <span class="span-10">Keterangan<br><span class="span-7">Note</span></span>
								</th>
							</tr>
					
						<?php
							$ct = 1;
							foreach ((Array) $data_fisik_genetalia AS $key => $val) { 
							?>	<tr>     
								<td width="200px" class="td-newline">
								    <span class="span-10"><?php echo $val['nama_pertanyaan']; ?><br><span class="span-7"><?php echo $val['pertanyaan_inggris']; ?></span></span>
								</td>
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="YA") {echo "X";}else { echo " ";} ?></font></td>								
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="TIDAK") {echo "X";}else { echo " ";} ?></font></td>								
								<td><font style="width:200px" size="1"><?php echo $val['hasil']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
					
</table>
<?php } if(count($data_fisik_keterangan_lain) > 0) { ?>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr>
								<th width="200px" class="td-newline">
								    <span class="span-10">KETERANGAN LAIN<br><span class="span-7">OTHER INFORMATION</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Abnormal<br><span class="span-7">Abnormal</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Normal<br><span class="span-7">Normal</span></span>
								</th>
								<th width="200px" class="td-newline">
								    <span class="span-10">Keterangan<br><span class="span-7">Note</span></span>
								</th>
							</tr>
				
						<?php
							$ct = 1;
							foreach ((Array) $data_fisik_keterangan_lain AS $key => $val) { 
							?>	<tr>     
								<td width="200px" class="td-newline">
								    <span class="span-10"><?php echo $val['nama_pertanyaan']; ?><br><span class="span-7"><?php echo $val['pertanyaan_inggris']; ?></span></span>
								</td>
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="YA") {echo "X";}else { echo " ";} ?></font></td>								
								<td align="center"><font style="width:50px" size="1"><?php if ($val['status_periksa'] =="TIDAK") {echo "X";}else { echo " ";} ?></font></td>								
								<td><font style="width:200px" size="1"><?php echo $val['hasil']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
					
</table>	
<?php } ?>
<div class="page_break"></div>
  <br></br>
<table class="table-no-border">
    <tr>
        <td class="td-newline td-vtop"><b><span class="span-16">PEMERIKSAAN LABORATORIUM<br><span class="span-7">LABORATORY EXAMINATION</span></span></b></td>
    </tr>
</table>
<hr>
<br>
<font size="2">MCU NO : <?php echo $data['no_medcheck']; ?></font> 
<br>           
<table class="table-no-border">
    <tr>
        <td class="td-newline td-vtop"><span class="span-13">Nama :<br><span class="span-7">Name</span></span></td>
        <td class="td-vtop"><font size="2"><?php echo $data['nama_lengkap']; ?></font></td>
    </tr>
</table>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_hematologi){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">HEMATOLOGI<br><span class="span-7">HEMATOLOGY</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_hematologi AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>     
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo $val['hasil_pemeriksaan']; ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
						
</table>	
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_diffcount){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">DIFF COUNT<br><span class="span-7">DIFF COUNT</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_diffcount AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>          
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo $val['hasil_pemeriksaan']; ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
						
</table>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_urinalisa){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">URINALISA<br><span class="span-7">URINALISA</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_urinalisa AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>          
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo $val['hasil_pemeriksaan']; ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
						
</table>	
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_sedimenurine){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">SEDIMEN URINE<br><span class="span-7">URINE SEDIMENT</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_sedimenurine AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>         
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo $val['hasil_pemeriksaan']; ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
						
</table>	
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_kimia_darah){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">KIMIA DARAH<br><span class="span-7">BLOOD CHEMISTRY</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_kimia_darah AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>          
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo $val['hasil_pemeriksaan']; ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
						
</table>
<br>
<br>

<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_imunoserologi){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">IMUNOSEROLOGI<br><span class="span-7">IMMUNOSEROLOGY</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_imunoserologi AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>          
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo $val['hasil_pemeriksaan']; ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
						


</table>
						
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_drugtest){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">DRUG TEST<br><span class="span-7">DRUG TEST</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_drugtest AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>          
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo $val['hasil_pemeriksaan']; ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
						


</table>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_widal){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">WIDAL TEST<br><span class="span-7">WIDAL TEST</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_widal AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>          
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo $val['hasil_pemeriksaan']; ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
</table>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_kulturfeses){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">KULTUR FESES<br><span class="span-7">CULTURE FESES</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_kulturfeses AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>          
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo $val['hasil_pemeriksaan']; ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
						

						</table>	
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_golongandarah){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">GOLONGAN DARAH<br><span class="span-7">BLOOD TYPE</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_golongandarah AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>          
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo $val['hasil_pemeriksaan']; ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
						

</table>	
<br>
<br>

<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_penandatumor){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">PENANDA TUMOR<br><span class="span-7">TUMOR MARKER</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_penandatumor AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>          
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo $val['hasil_pemeriksaan']; ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
						
</table>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_hexanedione){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">2,5-HEXANEDIONE<br><span class="span-7">2,5-HEXANEDIONE</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_hexanedione AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>          
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo $val['hasil_pemeriksaan']; ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
						
						</table>

<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_elektrolit){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">ELEKTROLIT<br><span class="span-7">ELECTROLYTE</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_elektrolit AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>          
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo $val['hasil_pemeriksaan']; ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
						
</table>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_feses){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">FESES<br><span class="span-7">FESES</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_feses AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>          
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo $val['hasil_pemeriksaan']; ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
						
</table>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_logam){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">LOGAM<br><span class="span-7">METAL</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_logam AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>          
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars ($val['hasil_pemeriksaan']); ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
							
</table>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_benzena){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">BENZENA<br><span class="span-7">BENZENE</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_benzena AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>          
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars ($val['hasil_pemeriksaan']); ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>

</table>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_toluena){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">TOLUENA<br><span class="span-7">TOULENE</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_toluena AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>          
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars ($val['hasil_pemeriksaan']); ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>

</table>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_xilene){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">XILENE<br><span class="span-7">XYLENE</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_xilene AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>          
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars ($val['hasil_pemeriksaan']); ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>


</table>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_codarah){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">CO DARAH<br><span class="span-7">BLOOD CARBON MONOXIDE</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_codarah AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>          
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars ($val['hasil_pemeriksaan']); ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
						
						</table>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_btx){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">BTX (Benzene, Toluene, Xylene)<br><span class="span-7">BTX (Benzene, Toluene, Xylene)</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_btx AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>          
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars ($val['hasil_pemeriksaan']); ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
						
</table>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_kehamilan){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">KEHAMILAN<br><span class="span-7">PREGNANCY</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_kehamilan AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>          
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo $val['hasil_pemeriksaan']; ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
						
</table>	
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_rectal){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">RECTAL SWAB<br><span class="span-7">RECTAL SWAB</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_rectal AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>          
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo $val['hasil_pemeriksaan']; ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
						
</table>
<br>
<br>
<table class="betatable" style="width:100%">
						
							<tr <?php if($data_lab_widal){echo '';} else {echo "style=\"display: none;\"";} ?> >
								<th width="200px" class="td-newline">
								    <span class="span-10">WIDAL TEST<br><span class="span-7">WIDAL TEST</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Hasil<br><span class="span-7">Result</span></span>
								</th>
								<th width="100px" class="td-newline" align="center">
								    <span class="span-10">Nilai Rujukan<br><span class="span-7">Reference Value</span></span>
								</th>
								<th width="50px" class="td-newline" align="center">
								    <span class="span-10">Satuan<br><span class="span-7">Unit</span></span>
								</th>
							</tr>
						
						
						<?php
							$ct = 1;
							foreach ((Array) $data_lab_widal AS $key => $val) { 
							?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>          
								<td><font style="width:200px" size="1"><?php echo $val['nama_pemeriksaan']; ?></font></td>
								<td align="center"><font style="width:100px" size="1"><?php echo $val['hasil_pemeriksaan']; ?></font></td>								
								<td align="center"><font style="width:100px" size="1"><?php echo htmlspecialchars($val['nilai_text']); ?></font></td>								
								<td><font style="width:50" size="1"><?php echo $val['nilai_satuan']; ?></font></td>								
								</tr>
								<?php $ct++; 
							}
							?>
</table>

<div class="page_break"></div>	
<br>			
<br>			
<table style="width:100%" >
	<tr>
	<td width="10%"> </td>
	<th width="90%" colspan="9"><b><font size="3">KLINIK CITRA ARDHITA MEDIFARMA</font></b></th>
	</tr>
	<tr>
	<td width="10%"> </td>
	<td width="10%"> </td>
	<td width="10%"> </td>
	<td width="10%"> </td>
	<td width="10%"> </td>
	<td width="10%"> </td>
	<td width="10%"> </td>
	<td width="10%"> </td>
	<td width="10%"> </td>
	<td width="10%"> </td>
	</tr>
	<tr>
	<td width="10%"> </td>
	<td width="10%"> </td>
	<th width="50%" colspan="5"><b><font size="1">NO RONTGEN : <?php echo $data['no_medcheck']; ?></font></b></th>
	<td width="10%"> </td>
	<td width="10%"> </td>
	<td width="10%"> </td>
	</tr> 
  </table>
  
  <table style="width:100%" frame="box" class="rontgen">
	<tr>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<th width="50%" colspan="5">
		    <table class="table-no-border">
                <tr>
                    <td class="td-newline td-vtop"><span class="span-10">Nama :<br><span class="span-7">Name</span></span></td>
                    <td class="td-vtop"><font size="1"><?php echo $data['nama_lengkap']; ?></font></td>
                </tr>
            </table>
		</th>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<td width="10%"> </td>
	</tr> 
	<tr>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<th width="50%" colspan="5">
		    <table class="table-no-border">
                <tr>
                    <td class="td-newline td-vtop"><span class="span-10">Umur :<br><span class="span-7">Age</span></span></td>
                    <td class="td-vtop"><font size="1"><?php echo $data['jumlah_hari_lahir']; ?></font></td>
                </tr>
            </table>
		</th>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<td width="10%"> </td>
	</tr> 
	<tr>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<th width="50%" colspan="5">
		    <table class="table-no-border">
                <tr>
                    <td class="td-newline td-vtop"><span class="span-10">NIK :<br><span class="span-7">NIN</span></span></td>
                    <td class="td-vtop"><font size="1"><?php echo $data['no_identitas']; ?></font></td>
                </tr>
            </table>
		</th>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<td width="10%"> </td>
	</tr>
	<tr>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<th width="50%" colspan="5">
		    <table class="table-no-border">
                <tr>
                    <td class="td-newline td-vtop"><span class="span-10">Bagian :<br><span class="span-7">Division</span></span></td>
                    <td class="td-vtop"><font size="1"><?php echo $data['bagian']; ?></font></td>
                </tr>
            </table>
		</th>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<td width="10%"> </td>
	</tr> 
	<tr>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<th width="50%" colspan="5">
		    <table class="table-no-border">
                <tr>
                    <td class="td-newline td-vtop"><span class="span-10">Grup :<br><span class="span-7">Group</span></span></td>
                    <td class="td-vtop"><font size="1"><?php echo $data['grup']; ?></font></td>
                </tr>
            </table>
		</th>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<td width="10%"> </td>
	</tr> 
	<tr>
		<th width="100%" colspan="10" align="center">
		    <u><span class="span-10">LAPORAN HASIL RADIOLOGI<br><span class="span-7">RADIOLOGICAL REPORT</span></span></u>
		</th>
	</tr>
	<tr>
		<th width="100%" colspan="10" align="center"><b><font size="1"><?php echo $data['nama_perusahaan']; ?></b></th>
	</tr>	
	<tr>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<th width="50%" colspan="5">
		    <span class="span-10">TS. YTH<br><span class="span-7">Dear Colleague</span></span>
		</th>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<td width="10%"> </td>
	</tr> 
	<tr>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<th width="50%" colspan="5">
		    <span class="span-10">BERSAMA INI KAMI BERITAHUKAN :<br><span class="span-7">WE WILL TELL YOU WITH THIS</span></span>
		</th>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<td width="10%"> </td>
	</tr> 
	<tr>
		<td width="100%" colspan="10"> </td>
	</tr> 
	<tr class="td-vtop">
		<td width="10%"> </td>
		<td width="10%"> </td>
		<th width="30%" colspan="3">
		    <b><span class="span-10">COR (JANTUNG)<br><span class="span-7">COR (HEART)</span></span></b>
		</th>
		<td width="50%"colspan="5"><font size="1"> : <?php echo htmlspecialchars ($data_radiologi_cor['hasil_pemeriksaan']); ?></font> </td>
	</tr> 
	<tr>
		<td width="100%" colspan="10"> </td>
	</tr> 
	<tr class="td-vtop">
		<td width="10%"> </td>
		<td width="10%"> </td>
		<th width="30%" colspan="3">
		    <b><span class="span-10">PULMO (PARU)<br><span class="span-7">PULMO (LUNGS)</span></span></b>
		</th>
		<td width="50%"colspan="5"><font size="1"> : <?php echo $data_radiologi_pulmo['hasil_pemeriksaan']; ?></font> </td>
	</tr>
	<tr>
		<td width="100%" colspan="10"> </td>
	</tr>	
	<tr class="td-vtop">
		<td width="10%"> </td>
		<td width="10%"> </td>
		<th width="30%" colspan="3">
		    <b><span class="span-10">DIAGFRAHMA<br><span class="span-7">DIAPHRAGM</span></span></b>
		</th>
		<td width="50%"colspan="5"><font size="1"> : <?php echo $data_radiologi_diafragma['hasil_pemeriksaan']; ?></font> </td>
	</tr> 
	<tr>
		<td width="100%" colspan="10"> </td>
	</tr>	
	<tr class="td-vtop">
		<td width="10%"> </td>
		<td width="10%"> </td>
		<th width="30%" colspan="3">
		    <b><span class="span-10">KESAN<br><span class="span-7">IMPRESSION</span></span></b>
		</th>
		<td width="50%"colspan="5"><font size="1"> : <?php echo $data_radiologi_kesan['hasil_pemeriksaan']; ?></font> </td>
	</tr> 
	<tr>
		<td width="100%" colspan="10"> </td>
	</tr>
	<tr>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<th width="40%" colspan="4" align="center"><font size="1">Cikarang, <?php echo date('d M Y', strtotime($data['tanggal_pemeriksaan'])) ; ?> </font></th>
	</tr>
	<tr>
		<td width="100%" colspan="10"> </td>
	</tr>
	<tr>
		<td width="100%" colspan="10"> </td>
	</tr>
	<tr>
		<td width="100%" colspan="10"> </td>
	</tr>	
	<tr>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<td width="10%"> </td>
		<th width="40%" colspan="4" align="center"><b><font size="1"><?php echo $data_tanggal_medcheck['nama_dokter_rontgen'] ; ?> </font></b></th>
	</tr>
	</table>
<div class="page_break"></div>	
<font size="2">MCU NO : <?php echo $data['no_medcheck']; ?></font> 
<br>           
<table class="table-no-border">
    <tr>
        <td class="td-newline td-vtop"><span class="span-13">Nama :<br><span class="span-7">Name</span></span></td>
        <td class="td-vtop"><font size="2"><?php echo $data['nama_lengkap']; ?></font></td>
    </tr>
</table>
<br><br>
<table class="table-no-border">
    <tr>
        <td class="td-newline td-vtop"><b><span class="span-13">PEMERIKSAAN FISIK<br><span class="span-7">PHYSICAL EXAMINATION</span></span></b></td>
    </tr>
</table>
<hr>	
<table class="table-no-border">
    <tr>
        <td class="td-newline td-vtop"><b><span class="span-13">KEADAAN UMUM<br><span class="span-7">GENERAL CONDITION</span></span></b></td>
    </tr>
</table>
<br>
<table style="width:100%">

<tr class="td-vtop">
<td class="td-newline td-vtop"><span class="span-10">BERAT BADAN<br><span class="span-7">WEIGHT</span></span></td>
<td><font style="width:15%" size="1">: <?php echo $data['berat_badan']; ?></font> </td>
<td><font style="width:15%" size="1">Kg</font> </td>
<td><font style="width:15%" size="1"> </font> </td>
<td><font style="width:15%" size="1"> </font> </td>
<td class="td-newline td-vtop"><span class="span-10">TEKANAN DARAH<br><span class="span-7">BLOOD PRESSURE</span></span></td>
<td><font style="width:15%" size="1">: <?php echo $data['tekanan_darah']; ?></font> </td>
<td><font style="width:15%" size="1">mm/Hg</font> </td>
</tr>
<tr class="td-vtop">
<td class="td-newline td-vtop"><span class="span-10">TINGGI BADAN<br><span class="span-7">HEIGHT</span></span></td>
<td><font style="width:15%" size="1">: <?php echo $data['tinggi_badan']; ?></font> </td>
<td><font style="width:15%" size="1">Cm</font> </td>
<td><font style="width:15%" size="1"> </font> </td>
<td><font style="width:15%" size="1"> </font> </td>
<td class="td-newline td-vtop"><span class="span-10">NADI<br><span class="span-7">PULSE</span></span></td>
<td><font style="width:15%" size="1">: <?php echo $data['denyut_nadi']; ?></font> </td>
<td><font style="width:15%" size="1">x/menit</font> </td>
</tr>

</table>
<br>	
<br>	
<b><font size="2">BMI : 	<?php echo $data_bmi['nilai_bmi']; ?> (<?php echo $data_bmi['kategori_bmi']; ?>)</font></b>	
<br>

<table class="table-no-border">
    <tr>
        <td class="td-newline td-vtop"><b><span class="span-13">I. Laporan Radiologi<br><span class="span-7">I. Radiology Report</span></span></b></td>
    </tr>
</table>
<br>	
 <table style="width:100%"   class="resume">
	<tr class="td-vtop">
		<td width="40%">
		    <span class="span-10">COR (JANTUNG)<br><span class="span-7">COR (HEART)</span></span>
		</td>
		<td width="5%"><font size="1">:</font></td>
		<th width="55%"><font size="1"><?php echo $data_radiologi_cor['hasil_pemeriksaan']; ?></font></th>
	</tr> 
	<tr class="td-vtop">
		<td width="40%">
		    <span class="span-10">PULMO (PARU)<br><span class="span-7">PULMO (LUNGS)</span></span>
		</td>
		<td width="5%"><font size="1">:</font></td>
		<th width="55%"><font size="1"><?php echo $data_radiologi_pulmo['hasil_pemeriksaan']; ?></font></th>
	</tr>
	<tr class="td-vtop">
		<td width="40%">
		    <span class="span-10">DIAGFRAHMA<br><span class="span-7">DIAPHRAGM</span></span>
		</td>
		<td width="5%"><font size="1">:</font></td>
		<th width="55%"><font size="1"><?php echo $data_radiologi_diafragma['hasil_pemeriksaan']; ?></font></th>
	</tr> 
	<tr class="td-vtop">
		<td width="40%">
		    <span class="span-10">KESAN<br><span class="span-7">IMPRESSION</span></span>
		</td>
		<td width="5%"><font size="1">:</font></td>
		<th width="55%"><font size="1"><?php echo $data_radiologi_kesan['hasil_pemeriksaan']; ?></font></th>
	</tr> 
</table>
<br>
<table class="table-no-border">
    <tr>
        <td class="td-newline td-vtop"><b><span class="span-13">II. Pemeriksaan Fisik<br><span class="span-7">II. Physical Examination</span></span></b></td>
    </tr>
</table>
<table  style="width:100%" class="resume">
		<?php					
		foreach ((Array) $data_pertanyaan_fisik_all_terisi AS $key => $val) { 
		?>	<tr>							     
				<td width="40%" class="td-newline">
				    <span class="span-10"><?php echo $val['nama_pertanyaan']; ?><br><span class="span-7"><?php echo $val['pertanyaan_inggris']; ?></span></span>
				</td>
				<td width="5%" ><font size="1">:</font></td>
				<td width="55%"><font size="1"><?php echo $val['hasil']; ?></font></td>
			</tr>
		<?php 
			}
		?>
		
		<?php					
		foreach ((Array) $data_pertanyaan_fisik_mata_visus AS $key => $val) { 
		?>	<tr>							     
				<td width="40%" class="td-newline">
				    <span class="span-10"><?php echo $val['nama_pertanyaan']; ?><br><span class="span-7"><?php echo $val['pertanyaan_inggris']; ?></span></span>
				</td>
				<td width="5%" ><font size="1">:</font></td>
				<td width="55%"><font size="1"><?php echo $val['hasil']; ?></font></td>
			</tr>
		<?php 
			}
		?>
		
						
</table>
<br>
<table class="table-no-border">
    <tr>
        <td class="td-newline td-vtop"><b><span class="span-13">III. Laboratorium<br><span class="span-7">III. Laboratory</span></span></b></td>
    </tr>
</table>
<table  style="width:100%" class="resume">
		<?php
							
		foreach ((Array) $data_laboratorium_for_resume AS $key => $val) { 
		?>	<tr <?php if ($val['hasil_akhir'] == 'ERROR') echo "style='color:red'" ?>>       							     
				<td width="40%"><font size="1"><?php echo $val['nama_pelayanan']; ?> - <?php echo $val['nama_pemeriksaan']; ?></font></td>
				<td width="5%" ><font size="1">:</font></td>
				<td width="55%"><font size="1"><?php echo $val['hasil_pemeriksaan'] ; ?> <?php echo $val['nilai_satuan']; ?></font></td>
			</tr>
		<?php 
			}
		?>
						
</table>
<br>
<table class="table-no-border">
    <tr>
        <td class="td-newline td-vtop"><b><span class="span-13">IV. Resume<br><span class="span-7">IV. Resume</span></span></b></td>
    </tr>
</table>
<table  style="width:100%" class="resume">
		<?php
		function getResumeUk($jenis_resume) {
		    $resume_inggris = $jenis_resume;
		    if ($jenis_resume == "ANJURAN") {
		        $resume_inggris = "ADVICE";
		    } else if ($jenis_resume == "DIAGNOSA") {
		        $resume_inggris = "DIAGNOSIS";
		    } else if ($jenis_resume == "KESIMPULAN") {
		        $resume_inggris = "CONCLUSION";
		    } else if ($jenis_resume == "KATEGORI") {
		        $resume_inggris = "CATEGORY";
		    }
		    return $resume_inggris;
		}
		$first = true;					
		foreach ((Array) $data_resume_kesimpulan AS $key => $val) {
		    $jenis_resume = "";
		    $resume_inggris = "";
		    if ($first == true) {
		        $jenis_resume = $val['jenis_resume'];
		        $resume_inggris = getResumeUk($jenis_resume);
		        $first = false;
		    }
		?>	
		    <tr class="td-vtop">
				<td width="40%" class="td-newline">
				    <span class="span-10"><?php echo $jenis_resume; ?><br><span class="span-7"><?php echo $resume_inggris; ?></span></span>
				</td>
				<td width="5%" ><font size="1">:</font></td>
				<td width="55%"><font size="1"><?php echo $val['hasil_resume'] ; ?> <?php echo $val['nilai_satuan']; ?></font></td>
			</tr>
		<?php 
			}
		?>
						
</table>
<table  style="width:100%" class="resume">
		<?php
		$first = true;					
		foreach ((Array) $data_resume_anjuran AS $key => $val) {
		    $jenis_resume = "";
		    $resume_inggris = "";
		    if ($first == true) {
		        $jenis_resume = $val['jenis_resume'];
		        $resume_inggris = getResumeUk($jenis_resume);
		        $first = false;
		    }
		?>	
		    <tr class="td-vtop">
				<td width="40%" class="td-newline">
				    <span class="span-10"><?php echo $jenis_resume; ?><br><span class="span-7"><?php echo $resume_inggris; ?></span></span>
				</td>
				<td width="5%" ><font size="1">:</font></td>
				<td width="55%"><font size="1"><?php echo $val['hasil_resume'] ; ?> <?php echo $val['nilai_satuan']; ?></font></td>
			</tr>
		<?php 
			}
		?>
						
</table>
<table  style="width:100%" class="resume">
		<?php
		$first = true;					
		foreach ((Array) $data_resume_diagnosa AS $key => $val) {
		    $jenis_resume = "";
		    $resume_inggris = "";
		    if ($first == true) {
		        $jenis_resume = $val['jenis_resume'];
		        $resume_inggris = getResumeUk($jenis_resume);
		        $first = false;
		    }
		?>	
		    <tr class="td-vtop">							     
				<td width="40%" class="td-newline">
				    <span class="span-10"><?php echo $jenis_resume; ?><br><span class="span-7"><?php echo $resume_inggris; ?></span></span>
				</td>
				<td width="5%" ><font size="1">:</font></td>
				<td width="55%"><font size="1"><?php echo $val['hasil_resume'] ; ?> <?php echo $val['nilai_satuan']; ?></font></td>
			</tr>
		<?php 
			}
		?>
						
</table>
<table  style="width:100%" class="resume">
		<?php
		$first = true;					
		foreach ((Array) $data_resume_kategori AS $key => $val) {
		    $jenis_resume = "";
		    $resume_inggris = "";
		    if ($first == true) {
		        $jenis_resume = $val['jenis_resume'];
		        $resume_inggris = getResumeUk($jenis_resume);
		        $first = false;
		    }
		?>	
		    <tr class="td-vtop">							     
				<td width="40%" class="td-newline">
				    <span class="span-10"><?php echo $jenis_resume; ?><br><span class="span-7"><?php echo $resume_inggris; ?></span></span>
				</td>
				<td width="5%" ><font size="1">:</font></td>
				<td width="55%"><font size="1"><?php echo $val['hasil_resume'] ; ?> <?php echo $val['nilai_satuan']; ?></font></td>
			</tr>
		<?php 
			}
		?>
						
</table>
<br>
<table class="table-no-border">
    <tr>
        <td class="td-newline td-vtop"><b><span class="span-13">V. Penunjang<br><span class="span-7">V. Support</span></span></b></td>
    </tr>
</table>
<table  style="width:100%" class="resume">
		<?php
							
		foreach ((Array) $data_penunjang_all AS $key => $val) { 
		?>	<tr>							     
				<td width="40%"><font size="1"><?php echo $val['jenis_pemeriksaan']; ?> </font></td>
				<td width="5%" ><font size="1">:</font></td>
				<td width="55%"><font size="1"><?php echo $val['hasil_pemeriksaan'] ; ?> <?php echo $val['nilai_satuan']; ?></font></td>
			</tr>
		<?php 
			}
		?>
						
</table>
<br>	
<br>	
<br>	
<table  style="width:100%" class="rontgen">
			<tr>							     
				<td width="30%"><font size="1">  </font></td>
				<td width="30%" ><font size="1"></font></td>
				<td width="30%" align="center"><b><font size="1">Penanggung Jawab Klinik</font></b></td>
			</tr>
			<tr>							     
				<td width="100%" colspan ="3"><font size="1">  </font></td>
			</tr>
			<tr>							     
				<td width="100%" colspan ="3"><font size="1">  </font></td>
			</tr>
			<tr>							     
				<td width="30%"><font size="1">  </font></td>
				<td width="30%" ><font size="1"></font></td>
				<td width="30%" align="center"><b><font size="1"><?php echo $data_tanggal_medcheck['nama_dokter_penanggung_jawab'] ; ?></font></b></td>
			</tr>

						
</table>
</body></html>
