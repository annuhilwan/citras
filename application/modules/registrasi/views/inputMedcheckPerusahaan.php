<link href="<?php echo base_url('/assets/css/jquery-ui.css');?>" rel="stylesheet">
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
				<h3 class="box-title">Pendaftaran Medical Checkup Perusahaan<small></small></h3>
			</div>
			<form method="post" enctype="multipart/form-data" action="<?php echo base_url().'registrasi/save_trx_medcheck_perusahaan' ?>" class="form-label-left">
				<div class="box-body box-profile">
					<div class="row">
						<div class="col-md-6">
					
							
					
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Jenis Transaksi:</label>
								<select id="jenis_medcheck"  name="jenis_medcheck" class="form-control">
									<option value="">-- Select One --</option>
										<option value="Medical Check Up Tahunan">Medical Check Up Tahunan</option>;
									<option value="Medical Check Up Pra-Pegawai">Medical Check Up Pra-Karyawan</option>;
									<option value="Medical Check Up Regular">Medical Check Up Regular</option>;
								</select>
							</div>
					
							
							
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Nama Perusahaan:</label>
								<input type="text" id="nama_perusahaan" name="nama_perusahaan" value=""   class="form-control" placeholder="Masukan Nama Perusahaan">
								<input type="hidden" id="id_perusahaan" name="id_perusahaan" value=""   class="form-control" >
							</div>
							
						<div class="form-group has-feedback">
								<label for="exampleInputstatus">Tanggal Mulai Medical Checkup:</label>
								<input type="text" id="tanggal_mulai" name="tanggal_mulai" value=""  class="form-control form_date" placeholder="Masukan Tanggal Mulai Medcheck" />
							</div>
					
						<div class="form-group has-feedback">
								<label for="exampleInputstatus">Jumlah Hari :</label>
								<input type="text" id="jumlah_hari" name="jumlah_hari" value=""   class="form-control" placeholder="Masukan Jumlah Hari">
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
	
	$( "#nama_perusahaan" ).autocomplete({
			source: "<?php echo site_url('registrasi/get_autocomplete_perusahaan');?>",
			select: function(event, ui){ 
				event.preventDefault();
				$('[name="nama_perusahaan"]').val(ui.item.nama_perusahaan); 
				$('[name="id_perusahaan"]').val(ui.item.id_perusahaan); 
			}, focus: function(event, ui){
				event.preventDefault();
				$('[name="nama_perusahaan"]').val(ui.item.nama_perusahaan); 
				$('[name="id_perusahaan"]').val(ui.item.id_perusahaan); 
			}
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