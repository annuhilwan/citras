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

.lab tr > *:nth-child(6) {
    display: none;
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
			</div>
			<form method="post" enctype="multipart/form-data" action="<?php echo base_url().'registrasi/save_data_medcheck' ?>" class="form-label-left" onsubmit="return(validate());">
				<div class="box-body box-profile">
					<div class="row">
					<input type="hidden" id="id_transaksi" name="id_transaksi" value="<?php echo $arrDataPasien['id']; ?>"   class="form-control" placeholder="Data dokter pemeriksa" >
					
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
						
						<div class="form-group has-feedback">
									<label for="exampleInputstatus">Dokter Pemeriksa:</label>
									<input type="text" id="dokter_pemeriksa" name="dokter_pemeriksa" value="<?php echo (isset($arrDataPasien['dokter_pemeriksa'])?$arrDataPasien['dokter_pemeriksa']:'');?>"   class="form-control" placeholder="Data dokter pemeriksa" readonly>
								</div>
						        </div>

								<div class="col-md-6">
								<div class="form-group has-feedback">
								<label for="exampleInputstatus">Tanggal Pemeriksaan:</label>
								<input type="text" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan" value="<?php echo (isset($arrDataPasien['tanggal_pemeriksaan'])?date("d-m-Y",strtotime($arrDataPasien['tanggal_pemeriksaan'])):'');?>" class="form-control form_date"  readonly/>
							</div>
							</div>

						</div>
						<div class="row">
						    <div class="col-md-12"><h4>TTV</h4></div>
						    <div class="col-md-3">
						        <div class="form-group has-feedback">
									<label for="exampleInputstatus">Tinggi Badan (Cm):</label>
									<input type="text" id="tinggi_badan" name="tinggi_badan" value="<?php echo (isset($arrDataPasien['tinggi_badan'])?$arrDataPasien['tinggi_badan']:'');?>"   class="form-control" placeholder="Data tinggi badan" readonly>
								</div>
								<div class="form-group has-feedback">
									<label for="exampleInputstatus">Berat Badan (Kg):</label>
									<input type="text" id="berat_badan" name="berat_badan" value="<?php echo (isset($arrDataPasien['berat_badan'])?$arrDataPasien['berat_badan']:'');?>"   class="form-control" placeholder="Data berat badan" readonly>
								</div>
							</div>
							<div class="col-md-3">
							    <div class="form-group has-feedback">
									<label for="exampleInputstatus">Tekanan Darah (mmHg):</label>
									<input type="text" id="tekanan_darah" name="tekanan_darah" value="<?php echo (isset($arrDataPasien['tekanan_darah'])?$arrDataPasien['tekanan_darah']:'');?>"   class="form-control" placeholder="Data tekanan darah" readonly>
								</div>
								<div class="form-group has-feedback">
									<label for="exampleInputstatus">Perhitungan BMI :</label>
									<input type="text" id="nilai_bmi" name="nilai_bmi" value="<?php echo (isset($data_bmi['nilai_bmi'])?$data_bmi['nilai_bmi']:'');?>"   class="form-control" placeholder="Nilai BMI" readonly>
								</div>
							</div>
							<div class="col-md-3">
							    <div class="form-group has-feedback">
									<label for="exampleInputstatus">Kategori BMI:</label>
									<input type="text" id="kategori_bmi" name="kategori_bmi" value="<?php echo (isset($data_bmi['kategori_bmi'])?$data_bmi['kategori_bmi']:'');?>"   class="form-control" placeholder="Kategori BMI" readonly>
								</div>
								<div class="form-group has-feedback">
									<label for="exampleInputstatus">Nadi (X/Menit) :</label>
									<input type="text" id="denyut_nadi" name="denyut_nadi" value="<?php echo (isset($arrDataPasien['denyut_nadi'])?$arrDataPasien['denyut_nadi']:'');?>"   class="form-control" placeholder="Denyut nadi" readonly>
								</div>
							</div>
							<div class="col-md-3">
							    <div class="form-group has-feedback">
									<label for="exampleInputstatus">SpO2 (Saturasi Oksigen / %) :</label>
									<input type="text" id="nilai_respirasi" name="nilai_respirasi" value="<?php echo (isset($arrDataPasien['nilai_respirasi'])?$arrDataPasien['nilai_respirasi']:'');?>"   class="form-control" placeholder="Denyut nadi" readonly>
								</div>
								<div class="form-group has-feedback">
									<label for="exampleInputstatus">Suhu (°C):</label>
									<input type="text" id="suhu_badan" name="suhu_badan" value="<?php echo (isset($arrDataPasien['suhu_badan'])?$arrDataPasien['suhu_badan']:'');?>"   class="form-control" placeholder="Suhu badan" readonly>
								</div>
							</div>
							
							</div>
							
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
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> disabled>
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> disabled>
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
								<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" readonly>
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
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> disabled>
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> disabled>
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
								<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" readonly>
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
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> disabled>
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> disabled>
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
								<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" readonly>
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
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> disabled>
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> disabled>
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
								<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" readonly>
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
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> disabled>
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> disabled>
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" readonly>							</div>							
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
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> disabled>
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> disabled>
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" readonly></div>							
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
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> disabled>
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> disabled>
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" readonly></div>							
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
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> disabled>
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> disabled>
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" readonly></div>							
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
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> disabled>
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> disabled>
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" readonly></div>							
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
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> disabled>
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> disabled>
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" readonly></div>							
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
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> disabled>
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> disabled>
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" readonly></div>							
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
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> disabled>
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> disabled>
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" readonly></div>							
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
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> disabled>
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> disabled>
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" readonly></div>							
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
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> disabled>
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> disabled>
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" readonly></div>							
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
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> disabled>
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> disabled>
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" readonly></div>							
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
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> disabled>
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> disabled>
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" readonly></div>							
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
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_ya'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="YA" <?php if ($val['status_periksa'] == "YA") echo 'checked'; ?> disabled>
                                <label for="YA">YA</label>
                                &nbsp;
                                <input type="checkbox" id="<?php echo $val['variable_name'].$val['id'].'_tidak'; ?>" name="<?php echo $val['variable_name'].$val['id']; ?>" value="TIDAK" <?php if ($val['status_periksa'] == "TIDAK") echo 'checked'; ?> disabled>
                                <label for="TIDAK">TIDAK</label>
                            </div>
							<div class="col-md-6">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" readonly></div>							
							</div>
							</div>
			
							<?php
							}}
							?>
							
							
							
							
							
						
							
							
						</div>
					
						<div role="tabpanel" class="tab-pane fade in" id="tab_content2" aria-labelledby="model-tab">
							<br/>
							
							
							<!--<a href="<?php echo base_url().'registrasi/generatePemeriksaan/'.$arrDataPasien['id']; ?>"><button type="button" class="btn btn-success"></i> Generate All Pemeriksaan Laboratorium</button></a> -->
							
							
							
							
							
					 <table width='100%' border='1' class="lab" style='border-collapse: collapse;'>
       <thead>
         <tr>
           <th data-cell-style="cellStyle" width='20%'>Nama Pelayanan</th>
           <th width='20%'>Nama Pemeriksaan</th>
           <th width='20%'>Hasil</th>
           <th width='20%'>Standars</th>
           <th width='20%'>Satuan</th>
           <th width='20%'>Hasil Akhir</th>
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
         <span  ><p>".$hasil_pemeriksaan."</p></span>
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
            
			<input type="hidden" id="fileOld" name="fileOld" value="<?php echo isset($profile_pic)?$profile_pic:'rontgen.png';?>" />
			<br>
			<br>
	<center> <a href="<?php echo base_url();?>assets/rontgenfile/<?php echo isset($filetxt)?$filetxt:'rontgen.png';?>" target="_blank"> <?php echo isset($filetxt)?$filetxt:'Belum Ada File';?></a></center>
                 
			<input type="hidden" id="fileOld" name="fileTxt" value="<?php echo isset($filetxt)?$filetxt:'Belum Ada File';?>" />

            
			<br>
			<br>
			
          </div>

						</div>
						
						<div role="tabpanel" class="tab-pane fade in" id="tab_content6" aria-labelledby="warna-tab">
								<br/>
								
							
						<br>
<br>

	<table id="datatable" class="table table-striped" style="width:100%">
	<button type="button" class="btn-sm btn btn-success modalButtonComparePasien" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Compare</button>
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
								  
								</tr>
								<?php $ct++; 
							}
							?>
						</tbody>
					</table>
					
                </div>
						
						</div>
						
						<div role="tabpanel" class="tab-pane fade in" id="tab_content5" aria-labelledby="warna-tab">
								<br/>
							
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
								<td><a href="<?php echo base_url('assets/penunjang/'.$val['gambar_pemeriksaan']) ?>" target="_blank"><img src="<?php echo base_url('assets/penunjang/'.$val['gambar_pemeriksaan']) ?>" width="64" /></a></td>
								  
								</tr>
								<?php $ct++; 
							}
							?>
						</tbody>
					</table>
					
                </div>
						
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
						
					</div>
                </div>  
			</div>
		</div>
						
						
						
						
						
					</div>
					<br>
					
					</div>
					
					
					
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
    var col_val = $(this).find("td:eq(5)").text();
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