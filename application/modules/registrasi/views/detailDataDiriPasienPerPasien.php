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
				<h3 class="box-title">Data Detail Pasien </h3>
			</div>
			<form method="post" enctype="multipart/form-data" action="<?php echo base_url().'registrasi/save_data_medcheck' ?>" class="form-label-left" onsubmit="return(validate());">
				<div class="box-body box-profile">
					<div class="row">
					<input type="hidden" id="id_transaksi" name="id_transaksi" value="<?php echo $arrDataPasien['id']; ?>"   class="form-control" placeholder="Data dokter pemeriksa" >
					
						<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<div class="box-body box-profile">
					<div class="row">
						<div class="col-md-6">
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Nama Perusahaan:</label>
								<input type="text" id="nama_pt" name="nama_pt" value="<?php echo (isset($arrDataPasien['nama_pt'])?$arrDataPasien['nama_pt']:'');?>"   class="form-control" readonly>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Nama Depan:</label>
								<input type="text" id="nama_depan" name="nama_depan" value="<?php echo (isset($arrDataPasien['nama_depan'])?$arrDataPasien['nama_depan']:'');?>"   class="form-control" readonly>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Nama Lengkap:</label>
								<input type="text" id="nama_lengkap" name="nama_lengkap" value="<?php echo (isset($arrDataPasien['nama_lengkap'])?$arrDataPasien['nama_lengkap']:'');?>"   class="form-control" readonly>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Jenis Identitas:</label>
								<input type="text" id="jenis_identitas" name="jenis_identitas" value="<?php echo (isset($arrDataPasien['jenis_identitas'])?$arrDataPasien['jenis_identitas']:'');?>"   class="form-control" readonly>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">No Identitas:</label>
								<input type="text" id="no_identitas" name="no_identitas" value="<?php echo (isset($arrDataPasien['no_identitas'])?$arrDataPasien['no_identitas']:'');?>"   class="form-control" readonly>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Jenis Kelamin:</label>
								<input type="text" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo (isset($arrDataPasien['jenis_kelamin'])?$arrDataPasien['jenis_kelamin']:'');?>"   class="form-control" readonly>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Tempat Lahir:</label>
								<input type="text" id="tempat_lahir" name="tempat_lahir" value="<?php echo (isset($arrDataPasien['tempat_lahir'])?$arrDataPasien['tempat_lahir']:'');?>"   class="form-control" readonly>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Tanggal Lahir:</label>
								<input type="text" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo (isset($arrDataPasien['tanggal_lahir'])?date("d-m-Y",strtotime($arrDataPasien['tanggal_lahir'])):'');?>"  onchange="getAge()" class="form-control form_date" readonly />
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Umur:</label>
								<input type="text" id="age_now" name="age_now" value=""   class="form-control" placeholder="Umur akan terhitung automatis" readonly>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Alamat:</label>
								<input type="text" id="alamat_lengkap" name="alamat_lengkap" value="<?php echo (isset($arrDataPasien['alamat_lengkap'])?$arrDataPasien['alamat_lengkap']:'');?>"   class="form-control" readonly>
							</div>
					
							<div class="row">
								<div class="col-md-6">
									<div class="form-group has-feedback">
										<label for="exampleInputstatus">RT:</label>
										<input type="text" id="rt" name="rt" value="<?php echo (isset($arrDataPasien['rt'])?$arrDataPasien['rt']:'');?>"   class="form-control" readonly>
									</div>
								</div>	
								<div class="col-md-6">
									<div class="form-group has-feedback">
										<label for="exampleInputstatus">RW:</label>
										<input type="text" id="rw" name="rw" value="<?php echo (isset($arrDataPasien['rw'])?$arrDataPasien['rw']:'');?>"   class="form-control" readonly>
									</div>
								</div>	
							</div>

							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Kota:</label>								
								<input type="text" id="kota" name="kota" value="<?php echo (isset($arrDataPasien['kota'])?$arrDataPasien['kota']:'');?>"   class="form-control" readonly>
							</div>
					
						</div>
			
						<div class="col-md-6">

							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Kecamatan:</label>
								<input type="text" id="kecamatan" name="kecamatan" value="<?php echo (isset($arrDataPasien['kecamatan'])?$arrDataPasien['kecamatan']:'');?>"   class="form-control" readonly>
							</div>					
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Kelurahan:</label>
								<input type="text" id="kelurahan" name="kelurahan" value="<?php echo (isset($arrDataPasien['kelurahan'])?$arrDataPasien['kelurahan']:'');?>"   class="form-control" readonly>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Kode Pos:</label>
								<input type="text" id="kode_pos" name="kode_pos" value="<?php echo (isset($arrDataPasien['kode_pos'])?$arrDataPasien['kode_pos']:'');?>"   class="form-control" readonly>
							</div>
							
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Telepon:</label>
								<input type="text" id="telepon" name="telepon" value="<?php echo (isset($arrDataPasien['telepon'])?$arrDataPasien['telepon']:'');?>"   class="form-control" readonly>
							</div>
							
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Handphone:</label>
								<input type="text" id="handphone" name="handphone" value="<?php echo (isset($arrDataPasien['handphone'])?$arrDataPasien['handphone']:'');?>"   class="form-control" readonly>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Email:</label>
								<input type="text" id="email" name="email" value="<?php echo (isset($arrDataPasien['email'])?$arrDataPasien['email']:'');?>"   class="form-control" readonly>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Tipe Pegawai:</label>
								<input type="text" id="tipe_pegawai" name="tipe_pegawai" value="<?php echo (isset($arrDataPasien['tipe_pegawai'])?$arrDataPasien['tipe_pegawai']:'');?>"   class="form-control" readonly>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Jabatan:</label>
								<input type="text" id="jabatan" name="jabatan" value="<?php echo (isset($arrDataPasien['jabatan'])?$arrDataPasien['jabatan']:'');?>"   class="form-control" readonly>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Bagian:</label>
								<input type="text" id="bagian" name="bagian" value="<?php echo (isset($arrDataPasien['bagian'])?$arrDataPasien['bagian']:'');?>"   class="form-control" readonly>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Grup:</label>
								<input type="text" id="grup" name="grup" value="<?php echo (isset($arrDataPasien['grup'])?$arrDataPasien['grup']:'');?>"   class="form-control" readonly>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Jenis Pembayaran:</label>
								<input type="text" id="jenis_pembayaran" name="jenis_pembayaran" value="<?php echo (isset($arrDataPasien['jenis_pembayaran'])?$arrDataPasien['jenis_pembayaran']:'');?>"   class="form-control" readonly>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Nama Asuransi:</label>
								<input type="text" id="nama_asuransi" name="nama_asuransi" value="<?php echo (isset($arrDataPasien['nama_asuransi'])?$arrDataPasien['nama_asuransi']:'');?>"   class="form-control" readonly>
							</div>
					
							
			
						</div>
					</div>
				</div>
					
				</div>
				<div class="x_content">
					<div class role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
							<li role="presentation" class="active"><a href="#tab_content1" id="spj-tab" role="tab" data-toggle="tab" aria-expanded="true">Medical Checkup</a></li>				
							<li role="presentation"><a href="#tab_content2" id="model-tab" role="tab" data-toggle="tab" aria-expanded="true">Rawat Jalan</a></li>
						</ul>
					</div>
					
					<div id="myTabContent" class="tab-content">
					
						<div role="tabpanel" class="tab-pane active in" id="tab_content1" aria-labelledby="spj-tab">
						<br/>
				<div class="x_content table-responsive">
					<table id="datatable" class="table table-striped" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Pasien</th>
								<th>Nama Perusahaan</th>
								<th>Tanggal Pelayanan</th>
								<th>Jenis Pelayanan</th>
								<th>Status</th> 
								<th>Download Summary</th>
							</tr>
						</thead>
						<tbody id="myTable">
						<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) { 
							?>	<tr>
								<td><?php echo $ct; ?></td>
								<td>
								<a href="<?php echo site_url('/registrasi/detailMedicalCheckupsPerPasien/'.$val['id']); ?>" class="blue"> <?php echo $val['nama_lengkap']; ?>
								</td>      
								<td><?php echo $val['nama_perusahaan']; ?></td>
								<td><?php echo $val['created_date']; ?></td>
								<td><?php echo $val['jenis_pelayanan']; ?></td>		
								<td><?php echo $val['status']; ?></td>
								<td>
								<a href="<?php echo site_url('/registrasi/print_summary_medcheck_perorangan/'.$val['id']); ?>" target="_blank" class="blue"> Cetak
								</td>
								</tr>
								<?php $ct++; 
							}
							?>
						</tbody>
					</table>
					
					<?php if (isset($getdatabypasienyears) && !empty($getdatabypasienyears)): ?>
    <table border="1">
        <thead>
            <tr>
                <th>Pelayanan ID</th>
                <th>Nama Perusahaan</th>
                <th>Year 1 (Trx Pelayanan)</th>
                <th>Year 2 (Trx Resume)</th>
                <!-- Add more columns based on your data needs -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($getdatabypasienyears as $data): ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['nama_perusahaan']; ?></td>
                    <td><?php echo $data['year1']; ?></td>
                    <td><?php echo $data['year2']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No data found for the specified pasien.</p>
<?php endif; ?>

                </div>
							
							
							
							
							
						
							
							
						</div>
					
						<div role="tabpanel" class="tab-pane fade in" id="tab_content2" aria-labelledby="model-tab">
							<br/>
							<div class="x_content table-responsive">
                	<table id="datatable" class="table table-striped" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Pasien</th>
								<th>Nama Perusahaan</th>
								<th>Tanggal Pelayanan</th>
								<th>Jenis Pelayanan</th>
								<th>Status</th> 
							</tr>
						</thead>
						<tbody id="myTable">
						<?php
							$ct = 1;
							foreach ((Array) $dataRawat AS $key => $val) { 
							?>	<tr>
								<td><?php echo $ct; ?></td>
								<td>
								<a href="<?php echo site_url('/registrasi/detailRawatJalan/'.$val['id']); ?>" class="blue"> <?php echo $val['nama_lengkap']; ?>
								</td>      
								<td><?php echo $val['nama_perusahaan']; ?></td>
								<td><?php echo $val['created_date']; ?></td>
								<td><?php echo $val['jenis_pelayanan']; ?></td>		
								<td><?php echo $val['status']; ?></td>
								</tr>
								<?php $ct++; 
							}
							?>
						</tbody>
					</table>
					
                </div>
							
							
						</div>
						<div role="tabpanel" class="tab-pane fade in" id="tab_content3" aria-labelledby="warna-tab">
								<br/>
							<button type="button" class="btn-sm  btn btn-success modalButtonRadiologi" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Pemeriksaan</button>
						
						

<br>
<br>

<table width='100%' border='1' align="center" style='border-collapse: collapse;'>
       <thead>
         <tr>
           <th data-cell-style="cellStyle" width='20%'>Nama Pemeriksaan</th>	
           <th width='20%'>Hasil</th>
           <th width='20%'>Catatan</th>
           <th width='20%'>Dokter</th>
           <th width='20%'>Status Pemeriksaan</th>
         </tr>
       </thead>
       <tbody>
       <?php 
       // User List
       foreach($arrDataRadiologi as $user){
         $id = $user['id'];
		 $nama_pemeriksaan = $user['nama_pemeriksaan'];
         $hasil_pemeriksaan = $user['hasil_pemeriksaan'];
         $catatan = $user['catatan'];
         $nama_dokter = $user['nama_dokter'];
         $status_pemeriksaan = $user['status_pemeriksaan'];

         echo "<tr>";
         echo "<td>
          <span  >".$nama_pemeriksaan."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='nama_pemeriksaan' id='emailtxt_".$id."' value='".$nama_pemeriksaan."' >
         </td>";
		  echo "<td>
         <span class='edit' ><p>".$hasil_pemeriksaan."</p></span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='hasil_pemeriksaan' id='emailtxt_".$id."' value='".$hasil_pemeriksaan."' >
         </td>";
		  echo "<td>
          <span  >".$catatan."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='catatan' id='emailtxt_".$id."' value='".$catatan."' >
         </td>";
		 echo "<td >
          <span  >".$nama_dokter."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='nama_dokter' id='emailtxt_".$id."' value='".$nama_dokter."' >
         </td>";
		 echo "<td >
          <span  >".$status_pemeriksaan."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='status_pemeriksaan' id='emailtxt_".$id."' value='".$status_pemeriksaan."' >
         </td>";
         echo "</tr>";
       }
       ?>
       </tbody>
     </table>
	 
	 <br>
	 <h4>Digital X-Ray : </h4>
	  <div class="col-md-3">
            <div class="pic_size" id="image-holder"> 
            <?php  
              if(file_exists('assets/images/'.$arrDataPasien['digital_xray']) && isset($arrDataPasien['digital_xray'])){
              $profile_pic = $arrDataPasien['digital_xray'];
              }else{
              $profile_pic = 'user.png';}?>
              <center> <img class="thumb-image setpropileam" src="<?php echo base_url();?>/assets/images/<?php echo isset($profile_pic)?$profile_pic:'user.png';?>" alt="User profile picture"></center>
            </div>
            <br>
            <div class="fileUpload btn btn-success wdt-bg">
                <span>Add File</span>
                <input id="fileUpload" class="upload" name="profile_pic" type="file" accept="image/*" /><br />
                <input type="hidden" name="fileOld" value="<?php echo isset($user_data[0]->profile_pic)?$user_data[0]->profile_pic:'';?>" />
            </div>
          </div>

						</div>
						
						<div role="tabpanel" class="tab-pane fade in" id="tab_content4" aria-labelledby="warna-tab">
								<br/>
							<button type="button" class="btn-sm  btn btn-success modalButtonResume" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Resume</button>
						
						<br>
<br>

<table width='100%' border='1' align="center" style='border-collapse: collapse;'>
       <thead>
         <tr>
           <th data-cell-style="cellStyle" width='33%'>Nama Resume</th>	
           <th width='33%'>Hasil Resume</th>
           <th width='33%'>Dokter</th>
         </tr>
       </thead>
       <tbody>
       <?php 
       // User List
       foreach($arrDataResume as $user){
         $id = $user['id'];
		 $jenis_resume = $user['jenis_resume'];
         $hasil_resume = $user['hasil_resume'];
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
							<button type="button" class="btn-sm  btn btn-success modalButtonPenunjang" data-src="<?php echo $arrDataPasien['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Penunjang</button>
						
						<br>
<br>

<table width='100%' border='1' align="center" style='border-collapse: collapse;'>
       <thead>
         <tr>
           <th data-cell-style="cellStyle" width='33%'>Nama Resume</th>	
           <th width='33%'>Hasil Resume</th>
           <th width='33%'>Dokter</th>
         </tr>
       </thead>
       <tbody>
       <?php 
       // User List
       foreach($arrDataPenunjang as $user){
         $id = $user['id'];
		 $jenis_pemeriksaan = $user['jenis_pemeriksaan'];
         $hasil_pemeriksaan = $user['hasil_pemeriksaan'];
         $nama_dokter = $user['nama_dokter'];

         echo "<tr>";
         echo "<td>
          <span  >".$jenis_pemeriksaan."</span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='jenis_pemeriksaan' id='emailtxt_".$id."' value='".$jenis_pemeriksaan."' >
         </td>";
		  echo "<td>
         <span class='edit' ><p>".$hasil_pemeriksaan."</p></span>
         <input type='text' class='txtedit' data-id='".$id."' data-field='hasil_pemeriksaan' id='emailtxt_".$id."' value='".$hasil_pemeriksaan."' >
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
  
  getAge();
  
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