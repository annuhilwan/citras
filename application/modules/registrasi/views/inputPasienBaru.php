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
				<h3 class="box-title">Pendaftaran Pasien Baru <small></small></h3>
			</div>
			
			<form method="post" enctype="multipart/form-data" action="<?php echo base_url().'registrasi/save_master_pasien' ?>" class="form-label-left">
				<div class="box-body box-profile">
					<div class="row">
						<div class="col-md-6">
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Nama Perusahaan:</label>
								<select id="nama_pt" name="nama_pt" class="form-control">
									<option value="">-- Select One --</option>
									<?php
										foreach ((Array) $arrPerusahaan as $key => $val){
											echo '<option value="'.$val['nama_perusahaan'].'" '.((isset($data_edit['id']) && $data_edit['id'] == $val['id']) ? 'selected' : '').' >'.$val['nama_perusahaan'].'</option>';
										}
									?>
								</select>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Nama Depan:</label>
								<select id="nama_depan"  name="nama_depan" class="form-control">
									<option value="">-- Select One --</option>
									<option value="Tn.">Tn.</option>;
									<option value="Ny.">Ny.</option>;
									<option value="Nn.">Nn.</option>;
									<option value="An.">An.</option>;
								</select>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Nama Lengkap:</label>
								<input type="text" id="nama_lengkap" name="nama_lengkap" value=""   class="form-control" placeholder="Masukan Nama Lengkap">
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Jenis Identitas:</label>
								<select id="jenis_identitas" name="jenis_identitas" class="form-control">
									<option value="">-- Select One --</option>
									<?php
										foreach ((Array) $arrIdentitas as $key => $val){
											echo '<option value="'.$val['nama_identitas'].'" '.((isset($data_edit['id']) && $data_edit['id'] == $val['id']) ? 'selected' : '').' >'.$val['nama_identitas'].'</option>';
										}
									?>
								</select>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">No Identitas:</label>
								<input type="text" id="no_identitas" name="no_identitas" value=""   class="form-control" placeholder="Masukan No Identitas">
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Jenis Kelamin:</label>
								<select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
									<option value="">-- Select One --</option>
									<option value="PRIA">Pria</option>;
									<option value="WANITA">Wanita</option>;
								</select>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Tempat Lahir:</label>
								<select id="tempat_lahir" name="tempat_lahir" class="form-control">
									<option value="">-- Select One --</option>
									<?php
										foreach ((Array) $arrKota as $key => $val){
											echo '<option value="'.$val['nama_kota'].'" '.((isset($data_edit['id']) && $data_edit['id'] == $val['id']) ? 'selected' : '').' >'.$val['nama_kota'].'</option>';
										}
									?>
								</select>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Tanggal Lahir:</label>
								<input type="text" id="tanggal_lahir" name="tanggal_lahir" value=""
								  onchange="getAge()" class="form-control form_date" placeholder="Masukan Tanggal Lahir" />
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Umur:</label>
								<input type="text" id="age_now" name="age_now" value=""   class="form-control" placeholder="Umur akan terhitung automatis" readonly>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Alamat:</label>
								<input type="text" id="alamat_lengkap" name="alamat_lengkap" value=""   class="form-control" placeholder="Masukan alamat lengkap">
							</div>
					
							<div class="row">
								<div class="col-md-6">
									<div class="form-group has-feedback">
										<label for="exampleInputstatus">RT:</label>
										<input type="text" id="rt" name="rt" value=""   class="form-control" placeholder="Masukan No RT">
									</div>
								</div>	
								<div class="col-md-6">
									<div class="form-group has-feedback">
										<label for="exampleInputstatus">RW:</label>
										<input type="text" id="rw" name="rw" value=""   class="form-control" placeholder="Masukan No RW">
									</div>
								</div>	
							</div>

							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Kota:</label>								
								 <select id="kota" name="kota" class="form-control">
									<option value="">-- Select One --</option>
									<?php
										foreach ((Array) $arrKota as $key => $val){
											echo '<option value="'.$val['nama_kota'].'" '.((isset($data_edit['id']) && $data_edit['id'] == $val['id']) ? 'selected' : '').' >'.$val['nama_kota'].'</option>';
										}
									?>
								  </select>
							</div>
					
						</div>
			
						<div class="col-md-6">

							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Kecamatan:</label>
								<select id="kecamatan" name="kecamatan" class="form-control">
									<option value="">-- Select One --</option>
									<?php
										foreach ((Array) $arrKecamatan as $key => $val){
											echo '<option value="'.$val['nama_kecamatan'].'" '.((isset($data_edit['id']) && $data_edit['id'] == $val['id']) ? 'selected' : '').' >'.$val['nama_kecamatan'].'</option>';
										}
									?>
								</select>
							</div>					
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Kelurahan:</label>
								<select id="kelurahan" name="kelurahan" class="form-control">
									<option value="">-- Select One --</option>
									<?php
										foreach ((Array) $arrKelurahan as $key => $val){
											echo '<option value="'.$val['nama_kelurahan'].'" '.((isset($data_edit['id']) && $data_edit['id'] == $val['id']) ? 'selected' : '').' >'.$val['nama_kelurahan'].'</option>';
										}
									?>
								</select>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Kode Pos:</label>
								<input type="text" id="kode_pos" name="kode_pos" value=""   class="form-control" placeholder="Masukan Kode Pos">
							</div>
							
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Telepon:</label>
								<input type="text" id="telepon" name="telepon" value=""   class="form-control" placeholder="Masukan No Telepon">
							</div>
							
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Handphone:</label>
								<input type="text" id="handphone" name="handphone" value=""   class="form-control" placeholder="Masukan No Handphone">
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Email:</label>
								<input type="text" id="email" name="email" value=""   class="form-control" placeholder="Masukan email">
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Tipe Pegawai:</label>
								<select id="tipe_pegawai" name="tipe_pegawai" class="form-control">
									<option value="">-- Select One --</option>
									<?php
										foreach ((Array) $arrTipePegawai as $key => $val){
											echo '<option value="'.$val['nama_tipe_pegawai'].'" '.((isset($data_edit['id']) && $data_edit['id'] == $val['id']) ? 'selected' : '').' >'.$val['nama_tipe_pegawai'].'</option>';
										}
									?>
								</select>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Jabatan:</label>
								<select id="jabatan" name="jabatan" class="form-control">
								<option value="">-- Select One --</option>
									<?php
										foreach ((Array) $arrJabatan as $key => $val){
											echo '<option value="'.$val['nama_jabatan'].'" '.((isset($data_edit['id']) && $data_edit['id'] == $val['id']) ? 'selected' : '').' >'.$val['nama_jabatan'].'</option>';
										}
									?>
								</select>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Bagian:</label>
								<select id="bagian" name="bagian" class="form-control">
									<option value="">-- Select One --</option>
									<?php
										foreach ((Array) $arrBagian as $key => $val){
											echo '<option value="'.$val['nama_bagian'].'" '.((isset($data_edit['id']) && $data_edit['id'] == $val['id']) ? 'selected' : '').' >'.$val['nama_bagian'].'</option>';
										}
									?>
								</select>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Grup:</label>
								<select name="grup" class="form-control">
									<option value="">-- Select One --</option>
									<?php
										foreach ((Array) $arrGroup as $key => $val){
											echo '<option value="'.$val['nama_group'].'" '.((isset($data_edit['id']) && $data_edit['id'] == $val['id']) ? 'selected' : '').' >'.$val['nama_group'].'</option>';
										}
									?>
								</select>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Jenis Pembayaran:</label>
								<select id="jenis_pembayaran" name="jenis_pembayaran" class="form-control">
									<option value="">-- Select One --</option>
									<?php
										foreach ((Array) $arrJenisPembayaran as $key => $val){
											echo '<option value="'.$val['nama_jenis_pembayaran'].'" '.((isset($data_edit['id']) && $data_edit['id'] == $val['id']) ? 'selected' : '').' >'.$val['nama_jenis_pembayaran'].'</option>';
										}
									?>
								</select>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Nama Asuransi:</label>
								<select id="nama_asuransi" name="nama_asuransi" class="form-control">
									<option value="">-- Select One --</option>
									<?php
										foreach ((Array) $arrAsuransi as $key => $val){
											echo '<option value="'.$val['nama_asuransi'].'" '.((isset($data_edit['id']) && $data_edit['id'] == $val['id']) ? 'selected' : '').' >'.$val['nama_asuransi'].'</option>';
										}
									?>
								</select>
							</div>
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Upload Foto:</label>
								<input id="fileUpload"  name="upload_foto" type="file" accept="image/*" /><br />
							</div>
						
							<div class="form-group has-feedback">
								<button id="save"  name="save" type="submit"  class="btn btn-primary" />Save</button><br />
							</div>	
			
						</div>
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
});
	   
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
</script>