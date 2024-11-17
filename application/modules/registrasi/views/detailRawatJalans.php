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

.lab tr > *:nth-child(5) {
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
			<form method="post" enctype="multipart/form-data" action="<?php echo base_url().'registrasi/save_data_medcheck' ?>" class="form-label-left" onsubmit="return(validate());">
				<div class="box-body box-profile">
					<div class="row">
					<input type="hidden" id="id_transaksi" name="id_transaksi" value="<?php echo $arrDataPasien['id']; ?>"   class="form-control" placeholder="Data dokter pemeriksa" >
					
						<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h3>Nama Pasien: <?php echo $arrDataPasien['nama_lengkap']; ?></h3>
					<h2>Data Detail</h2>
					<div class="clearfix"></div>
					
				</div>
				<div class="x_content">
					<div class role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
							<li role="presentation" class="active"><a href="#tab_content1" id="spj-tab" role="tab" data-toggle="tab" aria-expanded="true">Fisik</a></li>				
							<li role="presentation"><a href="#tab_content2" id="model-tab" role="tab" data-toggle="tab" aria-expanded="true">Pemeriksaan</a></li>
							<li role="presentation"><a href="#tab_content3" id="warna-tab" role="tab" data-toggle="tab" aria-expanded="true">Diagnosa</a></li>
							<li role="presentation"><a href="#tab_content4" id="warna-tab" role="tab" data-toggle="tab" aria-expanded="true">Tindakan</a></li>
							<li role="presentation"><a href="#tab_content5" id="warna-tab" role="tab" data-toggle="tab" aria-expanded="true">Obat</a></li>
						</ul>
					</div>
					
					<div id="myTabContent" class="tab-content">
					
						<div role="tabpanel" class="tab-pane active in" id="tab_content1" aria-labelledby="spj-tab">
						<br/>
						<div class="row">
						<div class="col-md-3">
						<div class="form-group has-feedback">
									<label for="exampleInputstatus">Dokter Pemeriksa:</label>
									<input type="text" id="dokter_pemeriksa" name="dokter_pemeriksa" value="<?php echo (isset($arrDataPasien['dokter_pemeriksa'])?$arrDataPasien['dokter_pemeriksa']:'');?>"   class="form-control" placeholder="Data dokter pemeriksa" >
								</div>
						</div>
						</div>
						<div class="row">
							<div class="col-md-6">
						
								<div class="form-group has-feedback">
									<label for="exampleInputstatus">Berat Badan (Kg):</label>
									<input type="text" id="berat_badan" name="berat_badan" value="<?php echo (isset($arrDataPasien['berat_badan'])?$arrDataPasien['berat_badan']:'');?>"   class="form-control" placeholder="Data berat badan" >
								</div>
								
								<div class="form-group has-feedback">
									<label for="exampleInputstatus">Tinggi Badan (Cm):</label>
									<input type="text" id="tinggi_badan" name="tinggi_badan" value="<?php echo (isset($arrDataPasien['tinggi_badan'])?$arrDataPasien['tinggi_badan']:'');?>"   class="form-control" placeholder="Data tinggi badan" >
								</div>
								
								<div class="form-group has-feedback">
									<label for="exampleInputstatus">Tekanan Darah (mmHg):</label>
									<input type="text" id="tekanan_darah" name="tekanan_darah" value="<?php echo (isset($arrDataPasien['tekanan_darah'])?$arrDataPasien['tekanan_darah']:'');?>"   class="form-control" placeholder="Data tekanan darah" >
								</div>
							
							</div>
							
							
							<div class="col-md-6">
						
								<div class="form-group has-feedback">
									<label for="exampleInputstatus">Nadi (X/Menit) :</label>
									<input type="text" id="denyut_nadi" name="denyut_nadi" value="<?php echo (isset($arrDataPasien['denyut_nadi'])?$arrDataPasien['denyut_nadi']:'');?>"   class="form-control" placeholder="Denyut nadi" >
								</div>
								
								<div class="form-group has-feedback">
									<label for="exampleInputstatus">Suhu (°C):</label>
									<input type="text" id="suhu_badan" name="suhu_badan" value="<?php echo (isset($arrDataPasien['suhu_badan'])?$arrDataPasien['suhu_badan']:'');?>"   class="form-control" placeholder="Denyut nadi" >
								</div>
								
								<div class="form-group has-feedback">
									<label for="exampleInputstatus">Respirasi (X/Menit) :</label>
									<input type="text" id="nilai_respirasi" name="nilai_respirasi" value="<?php echo (isset($arrDataPasien['nilai_respirasi'])?$arrDataPasien['nilai_respirasi']:'');?>"   class="form-control" placeholder="Denyut nadi" >
								</div>
							
							</div>
							
							
							</div>
							
							<h4>ANAMNESA : </h4>
							<?php
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikAnamsia AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-9">
								<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" >
							</div>							
							</div>
							</div>
			
							<?php
							}
							?>
							
							<h4>MATA : </h4>
							<?php
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikMata AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-9">
								<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" >
							</div>							
							</div>
							</div>
			
							<?php
							}
							?>
							
							<h4>LEHER : </h4>
							<?php
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikLeher AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-9">
								<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" >
							</div>							
							</div>
							</div>
			
							<?php
							}
							?>
							
							<h4>TENGGOROKAN : </h4>
							<?php
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikTenggorokan AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-9">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" >							</div>							
							</div>
							</div>
			
							<?php
							}
							?>
							
							<h4>MULUT : </h4>
							<?php
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikMulut AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-9">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" ></div>							
							</div>
							</div>
			
							<?php
							}
							?>
							
							<h4>TELINGA : </h4>
							<?php
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikTelinga AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-9">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" ></div>							
							</div>
							</div>
			
							<?php
							}
							?>
							
							<h4>HIDUNG : </h4>
							<?php
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikHidung AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-9">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" ></div>							
							</div>
							</div>
			
							<?php
							}
							?>
							
							<h4>THORAX : </h4>
							<?php
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikThorax AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-9">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" ></div>							
							</div>
							</div>
			
							<?php
							}
							?>
							
							<h4>COR / PULMO : </h4>
							<?php
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikCorPulmo AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-9">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" ></div>							
							</div>
							</div>
			
							<?php
							}
							?>
							
							<h4>ABDOMEN : </h4>
							<?php
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikAbdomen AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-9">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" ></div>							
							</div>
							</div>
			
							<?php
							}
							?>
							
							<h4>SISTEM ALAT GERAK TANGAN : </h4>
							<?php
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikSistemAlatGerakTangan AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-9">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" ></div>							
							</div>
							</div>
			
							<?php
							}
							?>
							
							
							<h4>EXTRIMITAS : </h4>
							<?php
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikExtrimitas AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-9">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" ></div>							
							</div>
							</div>
			
							<?php
							}
							?>
							
							<h4>GENITALIA : </h4>
							<?php
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikGenetalia AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-9">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" ></div>							
							</div>
							</div>
			
							<?php
							}
							?>
							
							
								
							
							
							<h4>KETERANGAN LAIN : </h4>
							<?php
							$jumlah = 'test';
							foreach ((Array) $arrPertanyaanFisikKeteranganLain AS $key => $val) 
							{
							?>						
							<div class="form-group has-feedback">
							<div class="row">
							<div class="col-md-3">
								<label for="exampleInputstatus"><?php echo $val['nama_pertanyaan']; ?></label>
							</div>
							<div class="col-md-9">
							<input type="text" id="<?php echo $val['variable_name']; ?>" name="<?php echo $val['variable_name']; ?>" value="<?php echo (isset($val['hasil'])?$val['hasil']:'');?>"   class="form-control" placeholder="<?php echo "DATA"." ".$val['nama_pertanyaan']; ?>" ></div>							
							</div>
							</div>
			
							<?php
							}
							?>
							
							
							
							
							
						
							
							
						</div>
					
						<div role="tabpanel" class="tab-pane fade in" id="tab_content2" aria-labelledby="model-tab">
								<br/>
							<button type="button" class="btn-sm  btn btn-success modalButtonPemeriksaanRawatJalan" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Pemeriksaan</button>
						
						<br>
<br>

<table width='100%' border='1' align="center" style='border-collapse: collapse;'>
       <thead>
         <tr>
           <th data-cell-style="cellStyle" width='33%'>Jenis Pemeriksaan</th>	
           <th width='33%'>Hasil Resume</th>
           <th width='33%'>Dokter</th>
         </tr>
       </thead>
       <tbody>
       <?php 
       // User List
       foreach($arrDataPemeriksaan as $user){
         $id = $user['id'];
		 $jenis_resume = $user['jenis_pemeriksaan'];
         $hasil_resume = $user['hasil_pemeriksaan'];
         $nama_dokter = $user['nama_dokter'];

         echo "<tr>";
         echo "<td>
          <span  >".$jenis_resume."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='jenis_resume' id='emailtxt_".$id."' value='".$jenis_resume."' >
         </td>";
		  echo "<td>
         <span class='edit' ><p>".$hasil_resume."</p></span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='hasil_resume' id='emailtxt_".$id."' value='".$hasil_resume."' >
         </td>";
		 echo "<td >
          <span  >".$nama_dokter."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='nama_dokter' id='emailtxt_".$id."' value='".$nama_dokter."' >
         </td>";
         echo "</tr>";
       }
       ?>
       </tbody>
     </table>
							
							
						</div>
						<div role="tabpanel" class="tab-pane fade in" id="tab_content3" aria-labelledby="warna-tab">
								<br/>
							<button type="button" class="btn-sm  btn btn-success modalButtonDiagnosa" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Diagnosa</button>
						
						<br>
<br>

<table width='100%' border='1' align="center" style='border-collapse: collapse;'>
       <thead>
         <tr>
           <th data-cell-style="cellStyle" width='33%'>Jenis Pemeriksaan</th>	
           <th width='33%'>Hasil Resume</th>
           <th width='33%'>Dokter</th>
         </tr>
       </thead>
       <tbody>
       <?php 
       // User List
       foreach($arrDataDiagnosa as $user){
         $id = $user['id'];
		 $jenis_resume = $user['jenis_diagnosa'];
         $hasil_resume = $user['hasil_diagnosa'];
         $nama_dokter = $user['nama_dokter'];

         echo "<tr>";
         echo "<td>
          <span  >".$jenis_resume."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='jenis_resume' id='emailtxt_".$id."' value='".$jenis_resume."' >
         </td>";
		  echo "<td>
         <span class='edit' ><p>".$hasil_resume."</p></span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='hasil_resume' id='emailtxt_".$id."' value='".$hasil_resume."' >
         </td>";
		 echo "<td >
          <span  >".$nama_dokter."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='nama_dokter' id='emailtxt_".$id."' value='".$nama_dokter."' >
         </td>";
         echo "</tr>";
       }
       ?>
       </tbody>
     </table>

						</div>
						
						<div role="tabpanel" class="tab-pane fade in" id="tab_content4" aria-labelledby="warna-tab">
								<br/>
							<button type="button" class="btn-sm  btn btn-success modalButtonTindakan" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Tindakan</button>
						
						<br>
<br>

<table width='100%' border='1' align="center" style='border-collapse: collapse;'>
       <thead>
         <tr>
           <th data-cell-style="cellStyle" width='33%'>Jenis Tindakan</th>	
           <th width='33%'>Hasil Tindakan</th>
           <th width='33%'>Dokter</th>
         </tr>
       </thead>
       <tbody>
       <?php 
       // User List
       foreach($arrDataTindakan as $user){
         $id = $user['id'];
		 $jenis_resume = $user['jenis_tindakan'];
         $hasil_resume = $user['hasil_tindakan'];
         $nama_dokter = $user['nama_dokter'];

         echo "<tr>";
         echo "<td>
          <span  >".$jenis_resume."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='jenis_resume' id='emailtxt_".$id."' value='".$jenis_resume."' >
         </td>";
		  echo "<td>
         <span class='edit' ><p>".$hasil_resume."</p></span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='hasil_resume' id='emailtxt_".$id."' value='".$hasil_resume."' >
         </td>";
		 echo "<td >
          <span  >".$nama_dokter."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='nama_dokter' id='emailtxt_".$id."' value='".$nama_dokter."' >
         </td>";
         echo "</tr>";
       }
       ?>
       </tbody>
     </table>
						
						</div>
						
						<div role="tabpanel" class="tab-pane fade in" id="tab_content5" aria-labelledby="warna-tab">
								<br/>
							<button type="button" class="btn-sm  btn btn-success modalButtonObatRawatJalan" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Obat</button>
						
						<br>
<br>

<table width='100%' border='1' align="center" style='border-collapse: collapse;'>
       <thead>
         <tr>
           <th data-cell-style="cellStyle" width='33%'>Nama Obat</th>	
           <th width='33%'>Jumlah Obat</th>
           <th width='33%'>Nilai Tagihan</th>
         </tr>
       </thead>
       <tbody>
       <?php 
       // User List
       foreach($arrDataObat as $user){
         $id = $user['id'];
		 $nama_obat = $user['nama_obat'];
		 $jumlah_nilai = $user['jumlah_nilai'];
         $nilai_tagihan = $user['nilai_tagihan'];

         echo "<tr>";
         echo "<td>
          <span  >".$nama_obat."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='nama_obat' id='emailtxt_".$id."' value='".$nama_obat."' >
         </td>";
		  echo "<td>
         <span class='edit' ><p>".$jumlah_nilai."</p></span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='jumlah_nilai' id='emailtxt_".$id."' value='".$jumlah_nilai."' >
         </td>";
		 echo "<td >
          <span  >".$nilai_tagihan."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='nilai_tagihan' id='emailtxt_".$id."' value='".$nilai_tagihan."' >
         </td>";
         echo "</tr>";
       }
       ?>
       </tbody>
     </table>
						
						</div>
						
						<div role="tabpanel" class="tab-pane fade in" id="tab_content6" aria-labelledby="warna-tab">
								<br/>
							
						
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
					<div class="form-group has-feedback">
								<button id="save"  name="save" type="submit"  class="btn btn-primary" />Save</button><br />
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
    var col_val = $(this).find("td:eq(4)").text();
    if( $.trim(col_val.toLowerCase() ) === "ok" ) {
      $(this).addClass('selected');  //the selected class colors the row green//
    } else {
      $(this).addClass('bad');
    }
  });
  
});


function validate()
{
	 var str1 = "Berat badan pasien diatas 100 Kg (";
	 var beratBadanPasien =0;
	 var berat = 0;
	 var str2 = " Kg), Lanjutkan ?";
	 var res = "";
	 beratBadanPasien = document.getElementById('berat_badan').value; 
	 var berat = parseInt(document.getElementById('berat_badan').value);
	 if (berat > 100)
	 {
	 res = str1.concat(beratBadanPasien, str2);
	 } else {
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