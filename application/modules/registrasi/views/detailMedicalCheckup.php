<style type="text/css">
     .txtedit{
        display: none;
        width: 98%;
     }

	 
.selected{
  color:green;
}
.bad{
  color:red;
}

p:empty {
  width: 100%;
  height: 20px;
  background: red;
}

.lab tr > *:nth-child(7) {
    display: none;
}

input[readonly].classname{
  background-color: #dddddd;
  border: 0;
  font-size: 1em;
}
     </style>	
	 
	

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper clearfix">
<!-- Main content -->
	<div class="col-md-12 form f-label">
	<?php if($this->session->flashdata("messagePr")){?>
		<div class="alert alert-info">      
		<?php echo $this->session->flashdata("messagePr")?>
		</div>
	<?php } ?>
    <!-- Profile Image -->
		<div class="box box-success pad-profile">
			<div class="box-header with-border">
				<h3 class="box-title">Data Medical Check Up </h3>
			</div>
			<div class="box-body box-profile">
			   
			    <div class="col-md-3">
			        <form method="post" enctype="multipart/form-data" action="<?php echo base_url().'registrasi/save_picture_medcheck' ?>" class="form-label-left">
			        <div class="pic_size" id="image-holder"> 
                    <?php  
                      if(file_exists('assets/pasien/'.$arrDataDetailPasien['picture']) && isset($arrDataDetailPasien['picture'])){
                        $patient_pic = $arrDataDetailPasien['picture'];
                      }else{
                        $patient_pic = 'pasien.png';
                      }
                      
                      $hide_pic = true;
                      $pictime = explode('_', $patient_pic);
                      $picexp = explode('.', end($pictime));
                      $ptime = $picexp[0];
                      if (ctype_digit($ptime)) {
                        $pdate = date('Y-m-d', $ptime);
                        if (strtotime($pdate) >= strtotime($arrDataDetailPerusahaanPasien['tanggal_mulai'])) { $hide_pic = false; }
                      }
        			?>
                      <center>
                          <?php if ($hide_pic) { ?>
                            <img class="thumb-image setpropileam" src="<?php echo base_url();?>assets/pasien/pasien.png" alt="Patient picture" style="width: 150px; height: 200px; object-fit: cover;">
                          <?php } else { ?>
                            <a href="<?php echo base_url();?>assets/pasien/<?php echo isset($patient_pic)?$patient_pic:'pasien.png';?>" target="_blank">
                              <img class="thumb-image setpropileam" src="<?php echo base_url();?>assets/pasien/<?php echo isset($patient_pic)?$patient_pic:'pasien.png';?>" alt="Patient picture" style="width: 150px; height: 200px; object-fit: cover;">
                            </a>
                          <?php } ?>
                        </center>
                    </div>
                    <br>
                    <?php 
    			    $usertype = $this->session->userdata('user_details')[0]->user_type;
    			    if($usertype == 'admin' || $usertype == 'Member' || $usertype == 'Lab' || $usertype == 'Marketing' 
    			        || $usertype == 'Medical Record' || $usertype == 'Perawat Pendaftaran') {
    			    ?>
                    <div class="fileUpload btn btn-success">
                        <span>Add Gambar</span>
                        <input id="fileUpload" class="upload" name="patient_pic" type="file" accept="image/*" multiple="true"/>
        			</div>
        			<input type="hidden" id="filePatientOld" name="filePatientOld" value="<?php echo isset($patient_pic)?$patient_pic:'pasien.png';?>" />
        			<input type="hidden" id="id_patient" name="id_patient" value="<?php echo $arrDataDetailPasien['id_pasien']; ?>" />
        			<input type="hidden" id="id_trans" name="id_trans" value="<?php echo $arrDataPasien['id']; ?>" />
        			<button id="savepict"  name="savepict" type="submit" class="btn btn-primary" />Save Gambar</button><br />
        			<?php } ?>
        			</form>
        		</div>
        		<div class="col-md-5">
        		    <table width='100%' border='0' class="lab" style='border-collapse: collapse;'>
        		        <thead>
        		        <tr><th width='100%'><h4>No MCU: <?php echo $arrDataPasien['no_medcheck']; ?></h4></th></tr>
        		        <tr><th width='100%'><h4>Nama Pasien: <?php echo $arrDataPasien['nama_lengkap']; ?></h4></th></tr>
        		        <tr><th width='100%'><h4>Jenis Kelamin: <?php echo $arrDataDetailPasien['jenis_kelamin']; ?></h4></th></tr>
                        <?php
                            $dateMcu = new DateTime($arrDataDetailPerusahaanPasien['tanggal_mulai']);
                            $dateBirth = new DateTime($arrDataPasien['tanggal_lahir']);
                            $interval = $dateMcu->diff($dateBirth);
                            $years_born = $interval->y;
                            $months_born = $interval->m;
                            $days_born = $interval->d;
                        ?>
                        <tr><th width='100%'><h4>Umur: <?php echo $years_born.' Tahun '.$months_born.' Bulan '.$days_born.' Hari'; ?></h4></th></tr>
                        <tr><th width='100%'><h4>Tanggal Lahir: <?php echo $arrDataPasien['tanggal_lahir']; ?></h4></th></tr>
                        </thead>
                    </table>
    		    </div>
                <div class="col-md-4">
                    <a class="btn btn-primary btn-sm pull-right" href="<?php echo site_url('/registrasi/list_data_detail_pelayanan_perusahaan/'.$arrDataDetailPerusahaanPasien['id']); ?>" role="button">Back</a>
                    <?php
                    if($usertype == 'admin' || $usertype == 'Member' || $usertype == 'Lab' || $usertype == 'Marketing' 
                        || $usertype == 'Medical Record' || $usertype == 'Perawat Pendaftaran') {
                    ?>
                    <a class="btn btn-primary btn-sm pull-right" style="margin-right: 10px;" href="<?php echo site_url('/registrasi/webcam_pelayanan/'.$arrDataPasien['id']); ?>" role="button">Webcam Picture</a>
                    <?php } ?>
                </div>
			</div>
			<form method="post" enctype="multipart/form-data" action="<?php echo base_url().'registrasi/save_data_medcheck' ?>" class="form-label-left" onsubmit="return(validate());">
				<div class="box-body box-profile">
					<div class="row">
					<input type="hidden" id="id_transaksi" name="id_transaksi" value="<?php echo $arrDataPasien['id']; ?>"   class="form-control" placeholder="Data dokter pemeriksa" >
					<input type="hidden" id="version" name="version" value="<?php echo $arrDataPasien['version']; ?>"/>
					
						<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
				    
	   <br>
					<div class="clearfix"></div>
					
				</div>
				<div class="x_content">
					<div class role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
							<li role="presentation" class="active"><a href="#tab_content1" id="spj-tab" role="tab" data-toggle="tab" aria-expanded="true">Fisik</a></li>				
							<li role="presentation"><a href="#tab_content2" id="model-tab" role="tab" data-toggle="tab" aria-expanded="true">Laboratorium</a></li>
							<li role="presentation"><a href="#tab_content4" id="warna-tab" role="tab" data-toggle="tab" aria-expanded="true">Radiologi</a></li>
							<li role="presentation"><a href="#tab_content5" id="warna-tab" role="tab" data-toggle="tab" aria-expanded="true">Penunjang</a></li>
							<li role="presentation"><a href="#tab_content6" id="warna-tab" role="tab" data-toggle="tab" aria-expanded="true">Resume</a></li>
						</ul>
					</div>
					
					<div id="myTabContent" class="tab-content">
					
						<div role="tabpanel" class="tab-pane active in" id="tab_content1" aria-labelledby="spj-tab">
						<br/>
						<div class="row">
						
						<div class="col-md-6">
						Pasien sudah dilakukan pemeriksaan fisik ? 
							<br/>
							<input type="radio" name="cek_fisik" id="cek_fisik" <?php if (isset($arrDataPasien['cek_fisik']) && $arrDataPasien['cek_fisik']=="1") echo "checked";?> value="1">Sudah
							<input type="radio" name="cek_fisik" id="cek_fisik" <?php if (isset($arrDataPasien['cek_fisik']) && $arrDataPasien['cek_fisik']=="0") echo "checked";?> value="0">Belum
							<br/>
							<br/>
						Data pemeriksaan fisik sudah diinput ? 
							<br/>
							<input type="radio" name="isi_cek_fisik" id="isi_cek_fisik" <?php if (isset($arrDataPasien['isi_cek_fisik']) && $arrDataPasien['isi_cek_fisik']=="1") echo "checked";?> value="1">Sudah
							<input type="radio" name="isi_cek_fisik" id="isi_cek_fisik" <?php if (isset($arrDataPasien['isi_cek_fisik']) && $arrDataPasien['isi_cek_fisik']=="0") echo "checked";?> value="0">Belum
							<br/>
							<br/>
							*Terakhir diupdate oleh : <?php echo (isset($arrDataPasien['name'])?$arrDataPasien['name']:'');?>
							<br/>
							<br/>
							
						</div>
						</div>
						<div class="row">
							
							<div class="col-md-6">
						<div class="form-group has-feedback">
									<label for="exampleInputstatus">Dokter Pemeriksa:</label>
									<input type="text" id="dokter_pemeriksa" name="dokter_pemeriksa" value="<?php echo (isset($arrDataPasien['dokter_pemeriksa'])?$arrDataPasien['dokter_pemeriksa']:'');?>"   class="form-control" placeholder="Data dokter pemeriksa" >
								</div>
								</div>
								
								<div class="col-md-6">
								<div class="form-group has-feedback">
								<label for="exampleInputstatus">Tanggal Pemeriksaan:</label>
								<input type="text" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan" value="<?php echo (isset($arrDataPasien['tanggal_pemeriksaan'])?date("d-m-Y",strtotime($arrDataPasien['tanggal_pemeriksaan'])):'');?>" class="form-control form_date"  />
							</div>
							</div>
							
							</div>
						<div class="row">
						    <div class="col-md-12"><h4>TTV</h4></div>
						    <div class="col-md-3">
						        <div class="form-group has-feedback">
									<label for="exampleInputstatus">Tinggi Badan (Cm):</label>
									<input type="text" id="tinggi_badan" name="tinggi_badan" value="<?php echo (isset($arrDataPasien['tinggi_badan'])?$arrDataPasien['tinggi_badan']:'');?>"   class="form-control" placeholder="Data tinggi badan" oninput="this.value = this.value.replace(/[^0-9./]/g, '')">
								</div>
								<div class="form-group has-feedback">
									<label for="exampleInputstatus">Berat Badan (Kg):</label>
									<input type="text" id="berat_badan" name="berat_badan" value="<?php echo (isset($arrDataPasien['berat_badan'])?$arrDataPasien['berat_badan']:'');?>"   class="form-control" placeholder="Data berat badan" oninput="this.value = this.value.replace(/[^0-9./]/g, '')">
								</div>
							</div>
							<div class="col-md-3">
							    <div class="form-group has-feedback">
									<label for="exampleInputstatus">Tekanan Darah (mmHg):</label>
									<input type="text" id="tekanan_darah" name="tekanan_darah" value="<?php echo (isset($arrDataPasien['tekanan_darah'])?$arrDataPasien['tekanan_darah']:'');?>"   class="form-control" placeholder="Data tekanan darah" oninput="this.value = this.value.replace(/[^0-9./]/g, '')">
								</div>
								<div class="form-group has-feedback">
									<label for="exampleInputstatus">Perhitungan BMI :</label>
									<input type="text" id="nilai_bmi" name="nilai_bmi" value="<?php echo (isset($data_bmi['nilai_bmi'])?$data_bmi['nilai_bmi']:'');?>"   class="form-control" placeholder="Nilai BMI" oninput="this.value = this.value.replace(/[^0-9./]/g, '')">
								</div>
							</div>
							<div class="col-md-3">
							    <div class="form-group has-feedback">
									<label for="exampleInputstatus">Kategori BMI:</label>
									<input type="text" id="kategori_bmi" name="kategori_bmi" value="<?php echo (isset($data_bmi['kategori_bmi'])?$data_bmi['kategori_bmi']:'');?>"   class="form-control" placeholder="Kategori BMI" >
								</div>
								<div class="form-group has-feedback">
									<label for="exampleInputstatus">Nadi (X/Menit) :</label>
									<input type="text" id="denyut_nadi" name="denyut_nadi" value="<?php echo (isset($arrDataPasien['denyut_nadi'])?$arrDataPasien['denyut_nadi']:'');?>"   class="form-control" placeholder="Denyut nadi" oninput="this.value = this.value.replace(/[^0-9./]/g, '')">
								</div>
							</div>
							<div class="col-md-3">
							    <div class="form-group has-feedback">
									<label for="exampleInputstatus">SpO2 (Saturasi Oksigen / %) :</label>
									<input type="text" id="nilai_respirasi" name="nilai_respirasi" value="<?php echo (isset($arrDataPasien['nilai_respirasi'])?$arrDataPasien['nilai_respirasi']:'');?>"   class="form-control" placeholder="Denyut nadi" oninput="this.value = this.value.replace(/[^0-9./]/g, '')">
								</div>
								<div class="form-group has-feedback">
									<label for="exampleInputstatus">Suhu (°C):</label>
									<input type="text" id="suhu_badan" name="suhu_badan" value="<?php echo (isset($arrDataPasien['suhu_badan'])?$arrDataPasien['suhu_badan']:'');?>"   class="form-control" placeholder="Suhu badan" oninput="this.value = this.value.replace(/[^0-9./]/g, '')">
								</div>
							</div>
							
							</div>
							
							<?php 
    						    if($this->session->userdata('user_details')[0]->user_type == 'admin') { 
								echo '<div class="row"><div class="col-md-12">'.
								'<input type="hidden" id="pertanyaan_fisik" name="pertanyaan_fisik" value="" class="form-control">'.
								'<input type="hidden" id="id_pelayanan_fisik" name="id_pelayanan_fisik" value="'.$arrDataPasien['id'].'" class="form-control">'.
								'<button type="button" class="btn-sm btn btn-success pull-right modalButtonPertanyaanCheckAdd" data-toggle="modal"><i class="glyphicon glyphicon-cog"></i> Pertanyaan Fisik</button>'.
								'</div></div>';
    							}
							?>
							
							<?php
							if (count($arrPertanyaanFisikAnamsia) > 0) {
							    echo '<h4>ANAMNESA : </h4>';
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikAnamsia AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-3">
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
								<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control classname" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" 
								<?php if($val[ "status_periksa" ]=="TIDAK"){
          					echo " readOnly ";
      						}else{
          					echo " ";
      						}
								?>>
							</div>	
							
							</div>
							</div>
			
							<?php
							}}
							?>
							
							<?php
							if (count($arrPertanyaanFisikMata) > 0) {
							    echo '<h4>MATA : </h4>';
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikMata AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-3">
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
								<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control classname" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" 
								<?php if($val[ "status_periksa" ]=="TIDAK"){
          							echo " readOnly ";
      								}else{
          							echo " ";
      								}
								?>>
								
							</div>							
							</div>
							</div>
			
							<?php
							}}
							?>
							
							<?php
							if (count($arrPertanyaanFisikPerut) > 0) {
							    echo '<h4>PERUT : </h4>';
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikPerut AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-3">
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
								<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control classname" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" 
								<?php if($val[ "status_periksa" ]=="TIDAK"){
          							echo " readOnly ";
      								}else{
          							echo " ";
      								}
								?>>
								
							</div>							
							</div>
							</div>
			
							<?php
							}}
							?>
							
							<?php
							if (count($arrPertanyaanFisikLeher) > 0) {
							    echo '<h4>LEHER : </h4>';
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikLeher AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-3">
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
								<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control classname" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" 
								<?php if($val[ "status_periksa" ]=="TIDAK"){
          							echo " readOnly ";
      								}else{
          							echo " ";
      								}
								?>>
							</div>							
							</div>
							</div>
			
							<?php
							}}
							?>
							
							<?php
							if (count($arrPertanyaanFisikTenggorokan) > 0) {
							    echo '<h4>TENGGOROKAN : </h4>';
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikTenggorokan AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-3">
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control classname" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" 
							<?php if($val[ "status_periksa" ]=="TIDAK"){
          							echo " readOnly ";
      								}else{
          							echo " ";
      								}
								?>>							
							</div>							
							</div>
							</div>
			
							<?php
							}}
							?>
							
							<?php
							if (count($arrPertanyaanFisikMulut) > 0) {
							    echo '<h4>MULUT : </h4>';
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikMulut AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-3">
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control classname" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" 
							<?php if($val[ "status_periksa" ]=="TIDAK"){
          							echo " readOnly ";
      								}else{
          							echo " ";
      								}
								?>>
							</div>							
							</div>
							</div>
			
							<?php
							}}
							?>
							
							<?php
							if (count($arrPertanyaanFisikTelinga) > 0) {
							    echo '<h4>TELINGA : </h4>';
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikTelinga AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-3">
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control classname" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" 
							<?php if($val[ "status_periksa" ]=="TIDAK"){
          							echo " readOnly ";
      								}else{
          							echo " ";
      								}
								?>>
							</div>							
							</div>
							</div>
			
							<?php
							}}
							?>
							
							<?php
							if (count($arrPertanyaanFisikHidung) > 0) {
							    echo '<h4>HIDUNG : </h4>';
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikHidung AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-3">
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control classname" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" 
							<?php if($val[ "status_periksa" ]=="TIDAK"){
          							echo " readOnly ";
      								}else{
          							echo " ";
      								}
								?>>
							</div>							
							</div>
							</div>
			
							<?php
							}}
							?>
							
							<?php
							if (count($arrPertanyaanFisikThorax) > 0) {
							    echo '<h4>THORAX : </h4>';
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikThorax AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-3">
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control classname" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" 
							<?php if($val[ "status_periksa" ]=="TIDAK"){
          							echo " readOnly ";
      								}else{
          							echo " ";
      								}
								?>>
							</div>							
							</div>
							</div>
			
							<?php
							}}
							?>
							
							<?php
							if (count($arrPertanyaanFisikCorPulmo) > 0) {
							    echo '<h4>COR / PULMO : </h4>';
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikCorPulmo AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-3">
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control classname" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" 
							<?php if($val[ "status_periksa" ]=="TIDAK"){
          							echo " readOnly ";
      								}else{
          							echo " ";
      								}
								?>>
							</div>							
							</div>
							</div>
			
							<?php
							}}
							?>
							
							<?php
							if (count($arrPertanyaanFisikAbdomen) > 0) {
							    echo '<h4>ABDOMEN : </h4>';
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikAbdomen AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-3">
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control classname" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" <?php if($val[ "status_periksa" ]=="TIDAK"){
          							echo " readOnly ";
      								}else{
          							echo " ";
      								}
								?>>
							</div>							
							</div>
							</div>
			
							<?php
							}}
							?>
							
							<?php
							if (count($arrPertanyaanFisikSistemAlatGerakTangan) > 0) {
							    echo '<h4>SISTEM ALAT GERAK TANGAN : </h4>';
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikSistemAlatGerakTangan AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-3">
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control classname" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" 
							<?php if($val[ "status_periksa" ]=="TIDAK"){
          							echo " readOnly ";
      								}else{
          							echo " ";
      								}
								?>>
							</div>							
							</div>
							</div>
			
							<?php
							}}
							?>
							
							
							<?php
							if (count($arrPertanyaanFisikExtrimitas) > 0) {
							    echo '<h4>EXTRIMITAS : </h4>';
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikExtrimitas AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-3">
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control classname" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" 
							<?php if($val[ "status_periksa" ]=="TIDAK"){
          							echo " readOnly ";
      								}else{
          							echo " ";
      								}
								?>>
							</div>							
							</div>
							</div>
			
							<?php
							}}
							?>
							
							<?php
							if (count($arrPertanyaanFisikNeuromuscular) > 0) {
							    echo '<h4>NEUROMUSCULAR : </h4>';
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikNeuromuscular AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-3">
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control classname" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" 
							<?php if($val[ "status_periksa" ]=="TIDAK"){
          							echo " readOnly ";
      								}else{
          							echo " ";
      								}
								?>>
							</div>							
							</div>
							</div>
			
							<?php
							}}
							?>

							<?php
							if (count($arrPertanyaanFisikKulit) > 0) {
							    echo '<h4>KULIT : </h4>';
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikKulit AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-3">
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control classname" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" 
							<?php if($val[ "status_periksa" ]=="TIDAK"){
          							echo " readOnly ";
      								}else{
          							echo " ";
      								}
								?>>
							</div>							
							</div>
							</div>
			
							<?php
							}}
							?>
							
							<?php
							if (count($arrPertanyaanFisikGenetalia) > 0) {
							    echo '<h4>GENITALIA : </h4>';
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikGenetalia AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-3">
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control classname" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" 
							<?php if($val[ "status_periksa" ]=="TIDAK"){
          							echo " readOnly ";
      								}else{
          							echo " ";
      								}
								?>>
							</div>							
							</div>
							</div>
			
							<?php
							}}
							?>
							
							
							<?php
							if (count($arrPertanyaanFisikKeteranganLain) > 0) {
							    echo '<h4>KETERANGAN LAIN : </h4>';
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikKeteranganLain AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-3">
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> onclick="checkfieldOne(this, '<?php echo $val['variable_name']; ?>')">
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control classname" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" 
							<?php if($val[ "status_periksa" ]=="TIDAK"){
          							echo " readOnly ";
      								}else{
          							echo " ";
      								}
								?>>
							</div>							
							</div>
							</div>
			
							<?php
							}}
							?>
							
							
							
							
							
						
							
							
						</div>
					
						<div role="tabpanel" class="tab-pane fade in" id="tab_content2" aria-labelledby="model-tab">
							<br/>
							Pasien sudah dilakukan pengambilan darah ? 
							<br/>
							<input type="radio" name="cek_lab" id="cek_lab" <?php if (isset($arrDataPasien['cek_lab']) && $arrDataPasien['cek_lab']=="1") echo "checked";?> value="1">Sudah
							<input type="radio" name="cek_lab" id="cek_lab" <?php if (isset($arrDataPasien['cek_lab']) && $arrDataPasien['cek_lab']=="0") echo "checked";?> value="0">Belum
							<br/>
							<br/>
							Data darah pasien sudah diinput  ? 
							<br/>
							<input type="radio" name="isi_cek_lab" id="isi_cek_lab" <?php if (isset($arrDataPasien['isi_cek_lab']) && $arrDataPasien['isi_cek_lab']=="1") echo "checked";?> value="1">Sudah
							<input type="radio" name="isi_cek_lab" id="isi_cek_lab" <?php if (isset($arrDataPasien['isi_cek_lab']) && $arrDataPasien['isi_cek_lab']=="0") echo "checked";?> value="0">Belum
							<br/>
							
							<!--<a href="<?php echo base_url().'registrasi/generatePemeriksaan/'.$arrDataPasien['id']; ?>"><button type="button" class="btn btn-success"></i> Generate All Pemeriksaan Laboratorium</button></a> -->
							
							
							<br/>
							<button type="button" class="btn-sm  btn btn-success modalButtonTransaksiPaketMedCheck" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Pilih Paket</button>
							<button type="button" class="btn-sm  btn btn-success modalButtonTransaksiTambahPemeriksaan" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Tambah Pemeriksaan</button>
							<br/>
							<br/>
							
							
					 <table width='100%' border='1' class="lab" style='border-collapse: collapse;'>
       <thead>
         <tr>
           <th data-cell-style="cellStyle" width='20%'>Nama Pelayanan</th>
           <th width='20%'>Nama Pemeriksaan</th>
           <th width='15%'>Hasil</th>
           <th width='15%'>Standars</th>
           <th width='15%'>Satuan</th>
		   <th width='5%'>User</th>
           <th width='10%'>Hasil Akhir</th>
           
         </tr>
       </thead>
       <tbody>
       <?php 
       // User List
       foreach($arrDataLab as $user){
         $id = $user['id'];
         $nama_pelayanan = $user['nama_pelayanan'];
		 $nama_pemeriksaan = $user['nama_pemeriksaan'];
         $hasil_pemeriksaan = $user['hasil_pemeriksaan'];
         $nilai_text = $user['nilai_text'];
         $nilai_satuan = $user['nilai_satuan'];
         $hasil_akhir = $user['hasil_akhir'];
         $nameuserinput = $user['name'];
         
         $userdel = '<span>'.$nameuserinput.'</span>';
         $usertype = $this->session->userdata('user_details')[0]->user_type;
    	 if($usertype == 'admin' || $usertype == 'Lab') {
             $userdel = '<span>'.$nameuserinput.' | <b style="cursor:pointer;" onclick="removeLabPemeriksaan('.$id.','.$arrDataPasien['id'].',\''.$nama_pemeriksaan.'\',\''.$nama_pelayanan.'\')">X</b></span>';
         }

         echo "<tr>";
         echo "<td>
         <span  >".$nama_pelayanan."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='nama_pelayanan' id='nametxt_".$id."' value='".$nama_pelayanan."' >
         </td>";
         echo "<td>
          <span  >".$nama_pemeriksaan."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='nama_pemeriksaan' id='emailtxt_".$id."' value='".$nama_pemeriksaan."' >
         </td>";
		  echo "<td>
         <span class='edit' ><p>".$hasil_pemeriksaan."</p></span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='hasil_pemeriksaan' id='emailtxt_".$id."' value='".$hasil_pemeriksaan."' >
         </td>";
		  echo "<td>
          <span  >".$nilai_text."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='nilai_text' id='emailtxt_".$id."' value='".$nilai_text."' >
         </td>";
		 echo "<td >
          <span  >".$nilai_satuan."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='nilai_satuan' id='emailtxt_".$id."' value='".$nilai_satuan."' >
         </td>";
		 echo "<td >".$userdel.
         "<input type='text' class='txtedit' data-id='".$id."' data-field='nameuserinput' id='emailtxt_".$id."' value='".$nameuserinput."' >
         </td>";
		 echo "<td >
          <span  >".$hasil_akhir."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='hasil_akhir' id='emailtxt_".$id."' value='".$hasil_akhir."' >
         </td>";
		  
         echo "</tr>";
       }
       ?>
       </tbody>
     </table>
							
							
						</div>
						
						
						
						
						<div role="tabpanel" class="tab-pane fade in" id="tab_content4" aria-labelledby="warna-tab">
								<br/>
							Pasien sudah dilakukan pengecekan radiologi ? 
							<br/>
							<input type="radio" name="cek_radiologi" id="cek_radiologi" <?php if (isset($arrDataPasien['cek_radiologi']) && $arrDataPasien['cek_radiologi']=="1") echo "checked";?> value="1">Sudah
							<input type="radio" name="cek_radiologi" id="cek_radiologi" <?php if (isset($arrDataPasien['cek_radiologi']) && $arrDataPasien['cek_radiologi']=="0") echo "checked";?> value="0">Belum
							<br/>
							<br/>
							Data radiologi pasien sudah diinput ? 
							<br/>
							<input type="radio" name="isi_cek_radiologi" id="isi_cek_radiologi" <?php if (isset($arrDataPasien['isi_cek_radiologi']) && $arrDataPasien['isi_cek_radiologi']=="1") echo "checked";?> value="1">Sudah
							<input type="radio" name="isi_cek_radiologi" id="isi_cek_radiologi" <?php if (isset($arrDataPasien['isi_cek_radiologi']) && $arrDataPasien['isi_cek_radiologi']=="0") echo "checked";?> value="0">Belum
							<br/>
							<br/>
							<button type="button" class="btn-sm  btn btn-success modalButtonRadiologi" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Pemeriksaan Cor</button>
							<button type="button" class="btn-sm  btn btn-success modalButtonRadiologiPulmo" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Pemeriksaan Pulmo</button>
							<button type="button" class="btn-sm  btn btn-success modalButtonRadiologiDiafragma" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Pemeriksaan Diafragma</button>
							<button type="button" class="btn-sm  btn btn-success modalButtonRadiologiKesan" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Pemeriksaan Kesan</button>
						
						

<br>
<br>


	
 <div class="x_content table-responsive">
                	<table id="datatable" class="table table-striped" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Pemeriksaan</th>
								<th>Hasil</th>
								<th>Catatan</th>
								<th>Dokter</th>
								<th>Status Pemeriksaan</th>								
								<th>User</th>
								<?php if($this->session->userdata('user_details')[0]->user_type == 'admin' or'Medical Record') { ?>
								<th>Hapus</th>
								<?php } ?>
							</tr>
						</thead>
						<tbody id="myTable">
						<?php
							$ct = 1;
							foreach ((Array) $arrDataRadiologi AS $key => $val) { 
							?>	<tr>
								<td><?php echo $ct; ?></td>
								<td><?php echo $val['nama_pemeriksaan']; ?></td>      
								<td><?php echo $val['hasil_pemeriksaan']; ?></td>
								<td><?php echo $val['catatan']; ?></td>
								<td><?php echo $val['nama_dokter']; ?></td>
								<td><?php echo $val['status_pemeriksaan']; ?></td>
								<td><?php echo $val['name']; ?></td>
								<?php if($this->session->userdata('user_details')[0]->user_type == 'admin' or 'Medical Record') { ?>
								<td>
								<a  data-toggle="modal" class="mClass" onclick="delIdDataTrxRadiologi(<?php echo $val['id']; ?>, 'registrasi')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" data-id=""></i></a>
								</td> 
								<?php } ?>
								</tr>
								<?php $ct++; 
							}
							?>
						</tbody>
					</table>
					
                </div>

				
	 <br>
	 <h4>Digital X-Ray : </h4>
	  <div class="col-md-3">
            <div class="pic_size" id="image-holder"> 
            <?php  
              if(file_exists('assets/rontgen/'.$arrDataPasien['digital_xray']) && isset($arrDataPasien['digital_xray'])){
              $profile_pic = $arrDataPasien['digital_xray'];
              }else{
              $profile_pic = 'rontgen.png';}
			  
			  if(file_exists('assets/rontgenfile/'.$arrDataPasien['file_text_xray']) && isset($arrDataPasien['file_text_xray'])){
              $filetxt = $arrDataPasien['file_text_xray'];
              }else{
              $filetxt = 'Belum Ada File';}
			  
			  ?>
              <center> <a href="<?php echo base_url();?>assets/rontgen/<?php echo isset($profile_pic)?$profile_pic:'rontgen.png';?>" target="_blank"> <img class="thumb-image setpropileam" src="<?php echo base_url();?>assets/rontgen/<?php echo isset($profile_pic)?$profile_pic:'rontgen.png';?>" alt="User profile picture"></a></center>
            </div>
            <br>
            <div class="fileUpload btn btn-success wdt-bg">
                <span>Add File Gambar</span>
                <input id="fileUpload" class="upload" name="profile_pic" type="file" accept="image/*" multiple="true"/>
				<br />
            </div>
			<input type="hidden" id="fileOld" name="fileOld" value="<?php echo isset($profile_pic)?$profile_pic:'rontgen.png';?>" />
			<br>
			<br>
	<center> <a href="<?php echo base_url();?>assets/rontgenfile/<?php echo isset($filetxt)?$filetxt:'rontgen.png';?>" target="_blank"> <?php echo isset($filetxt)?$filetxt:'Belum Ada File';?></a></center>
                 <div class="fileUpload btn btn-success wdt-bg">
                <span>Add File Txt</span>
                <input id="fileUpload" class="upload" name="txt_rontgen" type="file"  multiple="true"/>
				<br />
            </div>
			<input type="hidden" id="fileOld" name="fileTxt" value="<?php echo isset($filetxt)?$filetxt:'Belum Ada File';?>" />

            
			<br>
			<br>
			
          </div>
            <?php if($this->session->userdata('user_details')[0]->user_type == 'Medical Record') { ?>
            <div class="col-md-1"><button type="button" class="btn-sm btn btn-danger" onclick="removeRontgenImage('<?php echo isset($profile_pic)?$profile_pic:'rontgen.png';?>')"><i class="glyphicon glyphicon-remove"></i></button></div>
            <?php } ?>

						</div>
						
						<div role="tabpanel" class="tab-pane fade in" id="tab_content6" aria-labelledby="warna-tab">
								<br/>
								
							<button type="button" class="btn-sm  btn btn-success modalButtonResume" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Resume</button>
							<button type="button" class="btn-sm  btn btn-success modalButtonAddAnjuran" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Anjuran</button>
							<button type="button" class="btn-sm  btn btn-success modalButtonAddKesimpulan" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Kesimpulan</button>
							<?php if ($arrDataPasien['isi_cek_fisik'] =="1" && $arrDataPasien['isi_cek_lab']=="1" && $arrDataPasien['isi_cek_radiologi']=="1" && ($arrDataPasien['isi_cek_penunjang']=="1" || $arrDataPasien['isi_cek_penunjang']=="2" || $arrDataPasien['isi_cek_penunjang']=="3")){ ?>
							<button type="button" class="btn-sm  btn btn-success modalButtonAddDiagnosa" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Diagnosa</button>
							<button type="button" class="btn-sm  btn btn-success modalButtonAddKategori" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Kategori</button>
							<button type="button" class="btn-sm  btn btn-success modalButtonAddKategoriKhusus" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Kategori Khusus</button>
							<button type="button" class="btn-sm btn btn-success modalButtonCompare" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Compare</button>

							<?php } 
							else { ?>
							<button type="button" class="btn-sm  btn btn-danger modalButtonAddDiagnosa" disabled><i class="glyphicon glyphicon-plus"></i> Add Diagnosa</button>
							<button type="button" class="btn-sm  btn btn-danger modalButtonAddKategori" disabled><i class="glyphicon glyphicon-plus"></i> Add Kategori</button>
							<button type="button" class="btn-sm  btn btn-danger modalButtonAddKategoriKhusus" disabled><i class="glyphicon glyphicon-plus"></i> Add Kategori Khusus</button>
							<button type="button" class="btn-sm  btn btn-danger modalButtonAddKategoriKhusus" disabled><i class="glyphicon glyphicon-plus"></i> Compare</button>
							<?php } ?>
						<br>
<br>

	<table id="datatable" class="table table-striped" style="width:100%">
						<thead>
							<tr>
								<td>Perhitungan BMI</td>
								<td>:</td>
								<td><?php echo (isset($data_bmi['nilai_bmi'])?$data_bmi['nilai_bmi']:'');?></td>
							</tr>
							<tr>
								<td>Kategori BMI</td>
								<td>:</td>
								<td><?php echo (isset($data_bmi['kategori_bmi'])?$data_bmi['kategori_bmi']:'');?></td>
							</tr>
						</thead>
						</table>
	  
	 <div class="x_content table-responsive">
                	<table id="datatable" class="table table-striped" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Resume</th>
								<th>Hasil Resume</th>
								<th>Dokter</th>							
								<th>User</th>
								<th>Tanggal Input</th>
								<?php if($this->session->userdata('user_details')[0]->user_type == 'Medical Record' or 'Lab') { ?>
								<th>Hapus</th>
								<?php } ?>
							</tr>
						</thead>
						<tbody id="myTable">
						<?php
							$ct = 1;
							foreach ((Array) $arrDataResume AS $key => $val) { 
							?>	<tr>
								<td><?php echo $ct; ?></td>
								<td><?php echo $val['jenis_resume']; ?></td>      
								<td><?php echo $val['hasil_resume']; ?></td>
								<td><?php echo $val['nama_dokter']; ?></td>
								<td><?php echo $val['name']; ?></td>
								<td><?php echo ($val['created_date'] !== null ? date('d M Y G:i:s', strtotime($val['created_date']) + 60*60*7) : null); ?></td>
								<?php if($this->session->userdata('user_details')[0]->user_type == 'Medical Record' or 'Lab') { ?>
								<td>
								<a  data-toggle="modal" class="mClass" onclick="delIdDataTrxResume(<?php echo $val['id']; ?>, 'registrasi')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" data-id=""></i></a>
								</td> 
								<?php } ?>
								</tr>
								<?php $ct++; 
							}
							?>
						</tbody>
					</table>

					<div id="comparison-result" class="x_content table-responsive">
   <?php if (!empty($year1) && !empty($year2)): ?> <!-- Check if both years are provided -->
    <h3>Perbandingan Resume Tahun <?php echo htmlspecialchars($year1); ?> dan <?php echo htmlspecialchars($year2); ?></h3>

    <!-- Table for Year 1 -->
    <?php if (!empty($arrDataResumeYear1)): ?>
        <h4>Resume Tahun <?php echo htmlspecialchars($year1); ?></h4>
        <table class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Resume</th>
                    <th>Hasil <?php echo htmlspecialchars($year1); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $ct = 1; ?>
                <?php foreach ($arrDataResumeYear1 as $item): ?>
                    <tr>
                        <td><?php echo $ct++; ?></td>
                        <td><?php echo htmlspecialchars($item['jenis_resume']); ?></td>
                        <td><?php echo htmlspecialchars($item['hasil_resume']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No resume data available for Tahun <?php echo htmlspecialchars($year1); ?>.</p>
    <?php endif; ?>

    <!-- Table for Year 2 -->
    <?php if (!empty($arrDataResumeYear2)): ?>
        <h4>Resume Tahun <?php echo htmlspecialchars($year2); ?></h4>
        <table class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Resume</th>
                    <th>Hasil <?php echo htmlspecialchars($year2); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $ct = 1; ?>
                <?php foreach ($arrDataResumeYear2 as $item): ?>
                    <tr>
                        <td><?php echo $ct++; ?></td>
                        <td><?php echo htmlspecialchars($item['jenis_resume']); ?></td>
                        <td><?php echo htmlspecialchars($item['hasil_resume']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No resume data available for Tahun <?php echo htmlspecialchars($year2); ?>.</p>
    <?php endif; ?>

    <!-- Table for Comparison (Both Year Results Side by Side) -->
    <?php if (!empty($arrDataResumeYear1) && !empty($arrDataResumeYear2)): ?>
        <h4>Perbandingan Hasil Resume Tahun <?php echo htmlspecialchars($year1); ?> dan <?php echo htmlspecialchars($year2); ?></h4>
        <table class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Resume</th>
                    <th>Hasil <?php echo htmlspecialchars($year1); ?></th>
                    <th>Hasil <?php echo htmlspecialchars($year2); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $ct = 1; ?>
                <?php foreach ($arrDataResumeYear1 as $key => $item): ?>
                    <tr>
                        <td><?php echo $ct++; ?></td>
                        <td><?php echo htmlspecialchars($item['jenis_resume']); ?></td>
                        <td><?php echo htmlspecialchars($item['hasil_resume']); ?></td>
                        <td>
                            <?php 
                                // Make sure we have both year 1 and year 2 data for the same jenis_resume
                                echo !empty($arrDataResumeYear2[$key]) ? htmlspecialchars($arrDataResumeYear2[$key]['hasil_resume']) : 'No data';
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

<?php else: ?>
    <p>Please select both years to compare.</p>
<?php endif; ?>


</div>




	</div>









						
						</div>
						
						<div role="tabpanel" class="tab-pane fade in" id="tab_content5" aria-labelledby="warna-tab">
								<br/>
							Pasien sudah dilakukan pengecekan penunjang ? 
							<br/>
							<input type="radio" name="cek_penunjang" id="cek_penunjang" <?php if (isset($arrDataPasien['cek_penunjang']) && $arrDataPasien['cek_penunjang']=="1") echo "checked";?> value="1">Sudah
							<input type="radio" name="cek_penunjang" id="cek_penunjang" <?php if (isset($arrDataPasien['cek_penunjang']) && $arrDataPasien['cek_penunjang']=="0") echo "checked";?> value="0">Belum
							<br/>
							<br/>
							Data penunjang pasien sudah diinput ? 
							<br/>
							<input type="radio" name="isi_cek_penunjang" id="isi_cek_penunjang" <?php if (isset($arrDataPasien['isi_cek_penunjang']) && $arrDataPasien['isi_cek_penunjang']=="1") echo "checked";?> value="1">Sudah
							<input type="radio" name="isi_cek_penunjang" id="isi_cek_penunjang" <?php if (isset($arrDataPasien['isi_cek_penunjang']) && $arrDataPasien['isi_cek_penunjang']=="0") echo "checked";?> value="0">Belum
							<input type="radio" name="isi_cek_penunjang" id="isi_cek_penunjang" <?php if (isset($arrDataPasien['isi_cek_penunjang']) && $arrDataPasien['isi_cek_penunjang']=="2") echo "checked";?> value="2">Tidak Ada Pemeriksaan
							<input type="radio" name="isi_cek_penunjang" id="isi_cek_penunjang" <?php if (isset($arrDataPasien['isi_cek_penunjang']) && $arrDataPasien['isi_cek_penunjang']=="3") echo "checked";?> value="3">Tidak Melakukan Pemeriksaan
							<br/>
							<br/>
							<button type="button" class="btn-sm  btn btn-success modalButtonPenunjang" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add EKG</button>
							<button type="button" class="btn-sm  btn btn-success modalButtonPenunjangAudiometri" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Audiometri</button>
							<button type="button" class="btn-sm  btn btn-success modalButtonPenunjangSpirometri" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Spirometri</button>
							<button type="button" class="btn-sm  btn btn-success modalButtonAddUsg" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add USG</button>
							<button type="button" class="btn-sm  btn btn-success modalButtonAddTreadmill" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Treadmil</button>
							<button type="button" class="btn-sm  btn btn-success modalButtonAddPapSmear" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Pap Smear</button>
							<button type="button" class="btn-sm  btn btn-success modalButtonAddFitness" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Fitness Test</button>
							<button type="button" class="btn-sm  btn btn-success modalButtonAddRontgen" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Rontgen ILO</button>
							<button type="button" class="btn-sm  btn btn-success modalButtonAddIva" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add IVA Test</button>
							<button type="button" class="btn-sm  btn btn-success modalButtonAddAlcohol" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Alcohol Breath Test</button>
							<button type="button" class="btn-sm  btn btn-success modalButtonAddRomberg" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Romberg Test</button>
						<br>
<br>
	 
	 <div class="x_content table-responsive">
                	<table id="datatable" class="table table-striped" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Resume</th>
								<th>Hasil Resume</th>
								<th>Dokter</th>							
								<th>Gambar</th>							
								<th>User</th>	
								<?php if($this->session->userdata('user_details')[0]->user_type == 'Medical Record') { ?>
								<th>Hapus</th>
								<?php } ?>
							</tr>
						</thead>
						<tbody id="myTable">
						<?php
							$ct = 1;
							foreach ((Array) $arrDataPenunjang AS $key => $val) { 
							?>	<tr>
								<td><?php echo $ct; ?></td>
								<td><?php echo $val['jenis_pemeriksaan']; ?></td>      
								<td><?php echo $val['hasil_pemeriksaan']; ?></td>
								<td><?php echo $val['nama_dokter']; ?></td>
								<td>
								    <?php 
    						          if(file_exists('assets/penunjang/'.$val['gambar_pemeriksaan']) && isset($val['gambar_pemeriksaan'])){
                                      $penunjang_pic = $val['gambar_pemeriksaan'];
                                      }else{$penunjang_pic = 'penunjang.png';}
								    ?>
								    <a href="<?php echo base_url('assets/penunjang/'.$penunjang_pic) ?>" target="_blank"><img src="<?php echo base_url('assets/penunjang/'.$penunjang_pic) ?>" width="64" /></a>
								    <?php if($this->session->userdata('user_details')[0]->user_type == 'Medical Record') {  ?>
								    <span style="cursor:pointer;" onclick="removePenunjangImage('<?php echo $penunjang_pic;?>')"><i class="glyphicon glyphicon-remove"></i></span>
								    <?php } ?>
							    </td>
								<td><?php echo $val['name']; ?></td>
								<?php if($this->session->userdata('user_details')[0]->user_type == 'Medical Record') { ?>
								<td>
								    <?php if($penunjang_pic == 'penunjang.png'){ ?>
								        <a data-toggle="modal" class="mClass" onclick="delIdDataTrxPenunjang(<?php echo $val['id']; ?>, 'registrasi')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" data-id=""></i></a>
    								<?php } else { ?>
    								    <a class="mClass" onclick="alert('hapus gambar terlebih dahulu')"><i class="fa fa-trash-o"></i></a>
    								<?php } ?>
								</td>  
								<?php } ?>
								</tr>
								<?php $ct++; 
							}
							?>
						</tbody>
					</table>
					
                </div>
						
						</div>
						
					
						
					<div class="modal fade" id="nameModal_user" role="dialog">
  <div class="modal-dialog">
    <div class="box box-primary popup" >
      <div class="box-header with-border formsize">
        <h3 class="box-title">Tambah Data </h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
      </div>
      <!-- /.box-header -->
      <div class="modal-body" style="padding: 0px 0px 0px 0px;"></div>
    </div>
  </div>
</div><!--End Modal Crud --> 

<div class="modal fade" id="nameModal_fisik" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="box box-primary popup" >
      <div class="box-header with-border formsize">
        <h3 class="box-title">Data</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
      </div>
      <!-- /.box-header -->
      <div class="modal-body" style="padding: 0px 0px 0px 0px;"></div>
    </div>
  </div>
</div><!--End Modal Crud --> 
						
					</div>
                </div>  
			</div>
		</div>
						
						
						
						
						
					</div>
					<br>
					<?php if($this->session->userdata('user_details')[0]->user_type == 'Pasien') { ?>
					
					</div>
					<?php } else { ?>
					<div class="form-group has-feedback">
								<button id="save"  name="save" type="submit"  class="btn btn-primary" />Save</button><br />
					</div>
					
					<?php } ?>
				</div>
				
					
			</form>                     
		<!-- /.box -->
		
		
	
	
		</div>
		
		
	
	
    <!-- /.content -->
	</div>
</div>


<!-- /.content-wrapper -->
<link href="<?php echo base_url('/assets/css/bootstrap-datetimepicker.min.css');?>" rel="stylesheet">
<script src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>

$(document).ready(function() {
	$('.form_date').datetimepicker({
		format: 'dd-mm-yyyy',
		pickTime: false,
		autoclose: 1,
		startView: 3,
		minView: 2,
		maxView: 4
	});
	
	$(".lab tr:not(:has(th))").each(function(){
    var col_val = $(this).find("td:eq(6)").text();
    if( $.trim(col_val.toLowerCase() ) === "ok" ) {
      $(this).addClass('selected');  //the selected class colors the row green//
    } else {
      $(this).addClass('bad');
    }
  });


$( "#dokter_pemeriksa" ).autocomplete({
			source: "<?php echo site_url('registrasi/get_autocomplete_get_nama_dokter_pemeriksa');?>",
			select: function(event, ui){ 
				event.preventDefault();
				$('[name="dokter_pemeriksa"]').val(ui.item.dokter_pemeriksa); 
			}, focus: function(event, ui){
				event.preventDefault();
				$('[name="dokter_pemeriksa"]').val(ui.item.dokter_pemeriksa);  
			}
		});

	


  
  
  
});


function checkfield (select,valuetext) 
{
	var selectedOption = select.options[select.selectedIndex];
	var disabled = (selectedOption.value == "TIDAK");
	console.log(valuetext);
	console.log(selectedOption.value);
	$("#"+valuetext).prop("readOnly", disabled);
}

function checkfieldOne(checkbox, valuetext) {
    const checkboxes = document.querySelectorAll('input[type="checkbox"][name="'+checkbox.name+'"]');
    checkboxes.forEach((item) => {
        if (item !== checkbox) {
            item.checked = false;
        }
    });
    var disabled = (checkbox.value == "TIDAK");
    $("#"+valuetext).prop("readOnly", disabled);
    if (!checkbox.checked) {
        checkboxes[0].checked = true;
        $("#"+valuetext).prop("readOnly", false);
    }
}
  

function validate()
{
	 var str1 = "Berat badan pasien diatas 100 Kg (";
	 var str3 = "Tinggi badan pasien diatas 200 m (";
	 var beratBadanPasien =0;
	 var tinggiBadanPasien =0;
	 var berat = 0;
	 var tinggi = 0;
	 var str2 = " Kg), Lanjutkan ?";
	 var str4 = " m), Lanjutkan ?";
	 var res = "";
	 beratBadanPasien = document.getElementById('berat_badan').value; 
	 tinggiBadanPasien = document.getElementById('tinggi_badan').value; 
	 var berat = parseInt(document.getElementById('berat_badan').value);
	 var tinggi = parseInt(document.getElementById('tinggi_badan').value);
	 if (berat > 100)
	 {
	 res = str1.concat(beratBadanPasien, str2);
	 } else if (tinggi > 200) {
		res = str3.concat(tinggiBadanPasien, str4);
	 }else {
		res = "Anda yakin akan submit data ?";
	 }
     var r=confirm(res)
    if (r==true)
      return true;
    else
      return false;
}
	   
function getAge() {
	var tanggalLahirPasien =0;
	tanggalLahirPasien = document.getElementById('tanggal_lahir').value;
	var now = new Date();
	var today = new Date(now.getFullYear(),now.getMonth(),now.getDate());
	console.log(tanggalLahirPasien);
	console.log(tanggalLahirPasien.substring(6,10));
	console.log(tanggalLahirPasien.substring(3,5));
	console.log(tanggalLahirPasien.substring(0,2)-1);
	var yearNow = now.getFullYear();
	console.log(now);
  
	var monthNow = now.getMonth();
	var dateNow = now.getDate();

	var dob = new Date(tanggalLahirPasien.substring(6,10),                                  
						tanggalLahirPasien.substring(3,5),
						tanggalLahirPasien.substring(0,2)-1					 
	);

	var yearDob = dob.getFullYear();
	var monthDob = dob.getMonth();
	var dateDob = dob.getDate();
	var age = {};
	var ageString = "";
	var yearString = "";
	var monthString = "";
	var dayString = "";

	yearAge = yearNow - yearDob;
	
	if (monthNow >= monthDob)
		var monthAge = monthNow - monthDob;
	else {
		yearAge--;
		var monthAge = 12 + monthNow -monthDob;
	}

	if (dateNow >= dateDob)
		var dateAge = dateNow - dateDob;
	else {
		monthAge--;
		var dateAge = 31 + dateNow - dateDob;

		if (monthAge < 0) {
			monthAge = 11;
			yearAge--;
		}
	}

	age = {
		years: yearAge,
		months: monthAge,
		days: dateAge
	};

	if ( age.years > 1 ) yearString = " tahun";
	else yearString = " tahun";
	if ( age.months> 1 ) monthString = " bulan";
	else monthString = " bulan";
	if ( age.days > 1 ) dayString = " hari";
	else dayString = " hari";


  if ( (age.years > 0) && (age.months > 0) && (age.days > 0) )
    ageString = age.years + yearString + ", " + age.months + monthString + ", dan " + age.days + dayString + ".";
  else if ( (age.years == 0) && (age.months == 0) && (age.days > 0) )
    ageString = "Hanya " + age.days + dayString + " !";
  else if ( (age.years > 0) && (age.months == 0) && (age.days == 0) )
    ageString = age.years + yearString + ". Selamat Ulang Tahun!!";
  else if ( (age.years > 0) && (age.months > 0) && (age.days == 0) )
    ageString = age.years + yearString + " dan " + age.months + monthString + ".";
  else if ( (age.years == 0) && (age.months > 0) && (age.days > 0) )
    ageString = age.months + monthString + " dan " + age.days + dayString + ".";
  else if ( (age.years > 0) && (age.months == 0) && (age.days > 0) )
    ageString = age.years + yearString + " dan " + age.days + dayString + ".";
  else if ( (age.years == 0) && (age.months > 0) && (age.days == 0) )
    ageString = age.months + monthString + ".";
  else ageString = "Oops! Tidak dapat menghitung umur!";
  
  age_now.value =ageString;

  return ageString;
}

function removeLabPemeriksaan(id_lab, id_layanan, nm_periksa, nm_layanan) {
    var r=confirm("Hapus data laboratorium ?")
    if (r==true) {
        $.ajax({
            url: "<?php echo site_url('registrasi/remove_lab_pemeriksaan');?>",
            type: 'post',
            data: { id: id_lab, id_layanan: id_layanan, nama_periksa: nm_periksa, nama_layanan: nm_layanan },
            success:function(response){
                location.reload();
            }
        });
        return true;
    } else {
      return false;
    }
}

function removeRontgenImage(image) {
    var r=confirm("Hapus gambar rontgen ?")
    if (r==true) {
        $.ajax({
            url: "<?php echo site_url('registrasi/remove_rontgen_image');?>",
            type: 'post',
            data: { image: image },
            success:function(response){
                location.reload();
            }
        });
        return true;
    } else {
      return false;
    }
}

function removePenunjangImage(image) {
    var r=confirm("Hapus gambar penunjang ?")
    if (r==true) {
        $.ajax({
            url: "<?php echo site_url('registrasi/remove_penunjang_image');?>",
            type: 'post',
            data: { image: image },
            success:function(response){
                location.reload();
            }
        });
        return true;
    } else {
      return false;
    }
}


       // On text click
       $('.edit').click(function(){
          // Hide input element
          $('.txtedit').hide();

          // Show next input element
          $(this).next('.txtedit').show().focus();

          // Hide clicked element
          $(this).hide();
       });

       // Focus out from a textbox
       $('.txtedit').focusout(function(){
          // Get edit id, field name and value
          var edit_id = $(this).data('id');
          var fieldname = $(this).data('field');
          var value = $(this).val();

          // assign instance to element variable
          var element = this;

          // Send AJAX request
          $.ajax({
            url: "<?php echo site_url('registrasi/updateuser');?>",
            type: 'post',
            data: { field:fieldname, value:value, id:edit_id },
            success:function(response){

              // Hide Input element
              $(element).hide();

              // Update viewing value and display it
              $(element).prev('.edit').show();
              $(element).prev('.edit').text(value);
            }
          });
        });
      
</script>