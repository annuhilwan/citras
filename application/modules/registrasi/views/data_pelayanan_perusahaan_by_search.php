<link href="<?php echo base_url('/assets/css/jquery-ui.css');?>" rel="stylesheet">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper clearfix">
<!-- Content Header (Page header) -->
<!-- Main content -->
  <section class="content">
  <?php if($this->session->flashdata("messagePr")){?>
    <div class="alert alert-info">      
      <?php echo $this->session->flashdata("messagePr")?>
    </div>
  <?php } ?>
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">List Pelayanan Perusahaan</h3>

			<form method="post" enctype="multipart/form-data" action="<?php echo base_url().'registrasi/list_data_pelayanan_perusahaan_by_search' ?>" class="form-label-left">
				<div class="box-body box-profile">
					<div class="row">
						<div class="col-md-6">
						    
						    <div class="form-group has-feedback">
								<label for="exampleInputstatus">Nama Perusahaan:</label>
								<input type="text" id="name_pt" name="name_pt" value="" class="form-control" placeholder="Masukan Nama Perusahaan">
							</div>
						
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
								<label for="exampleInputstatus">Tahun MedCheck:</label>
								<input type="text" id="tanggal_medcheck" name="tanggal_medcheck" value=""  class="form-control form_date" placeholder="Masukan Tahun Medical Checkup" />
							</div>
					
							
						
							<div class="form-group has-feedback">
								<button id="save"  name="save" type="submit"  class="btn btn-primary" />Search</button><br />
							</div>	
			
						</div>
					</div>
				</div>
			</form>    
            
			 
          </div>
		  <div class="row">
		  <div class="col-xs-3">
		  
		  </div>
		  <div class="col-xs-3">
		  
		  </div>
		    <div class="col-xs-3">
		  
		  </div>
		 
		  </div>
          <!-- /.box-header -->
          <div class="x_content table-responsive">
                	<table id="datatable" class="table table-striped" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Perusahaan</th>
								<th>Jenis </th>
								<th>Tanggal Mulai</th>							
								<th>Lama Hari</th> 
								<th>Jumlah Pasien</th> 
								<th>Setting Dokter</th> 
								<th>Print Invoice</th> 
								
								<th>Action</th> 
								<th>Report</th> 
								<th>Grafik</th> 
							</tr>
						</thead>
						<tbody id="myTable">
						<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) { 
							?>	<tr>
								<td><?php echo $ct; ?></td>
								<td>
								<a href="<?php echo site_url('/registrasi/list_data_detail_pelayanan_perusahaan/'.$val['id']); ?>" class="blue"> <?php echo $val['nama_perusahaan']; ?>
								</td>      
								<td><?php echo $val['jenis_medcheck']; ?></td>
								<td><?php echo ($val['tanggal_mulai'] !== null ? date('d M Y', strtotime($val['tanggal_mulai'])) : null); ?></td>
								<td><?php echo $val['jumlah_hari']; ?></td>							
								<td><?php echo $val['jumlah_pasien']; ?></td>	
								<td>
								<a id="btnEditRow" class="modalButtonSettingDokter mClass"  href="javascript:;" type="button" data-src="<?php echo $val['id']; ?>" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>
								</td>
								<td>
								<a href="<?php echo site_url('/registrasi/print_summary_invoice_medical_perusahaan/'.$val['id']); ?>" target="_blank"  class="blue"> <?php echo 'Cetak'; ?>
								</td> 
																
								<td>
								<a href="<?php echo site_url('/registrasi/uploadDataPasienMedCheck/'.$val['id']); ?>" class="blue"> <?php echo 'Tambah Data'; ?>
								</td>  
								<td>
								<a href="<?php echo site_url('/registrasi/excel_export/generate_report_excel_perusahaan/'.$val['id']); ?>" class="blue"> Download
								</td>
								
								<td>
								<a href="<?php echo site_url('/registrasi/registrasi/list_data_pasien_new_pie_chart/'.$val['id']); ?>" class="blue"> Lihat
								</td>
								</tr>
								<?php $ct++; 
							}
							?>
						</tbody>
					</table>
					
                </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>  
<!-- Modal Crud Start-->
<div class="modal fade" id="nameModal_user" role="dialog">
  <div class="modal-dialog">
    <div class="box box-primary popup" >
      <div class="box-header with-border formsize">
        <h3 class="box-title">User Form</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <!-- /.box-header -->
      <div class="modal-body" style="padding: 0px 0px 0px 0px;"></div>
    </div>
  </div>
</div><!--End Modal Crud --> 

<link href="<?php echo base_url('/assets/css/bootstrap-datetimepicker.min.css');?>" rel="stylesheet">
<script src="<?php echo base_url('/assets/js/bootstrap-datetimepicker.min.js');?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>

<script>

$(document).ready(function() {
	$('.form_date').datetimepicker({
		format: 'yyyy',
		pickTime: false,
		autoclose: 1,
		startView: 4,
		minView: 4,
		maxView: 4
	});

	$('#datatable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
    
    $( "#name_pt" ).autocomplete({
		source: "<?php echo site_url('registrasi/get_autocomplete_perusahaan');?>",
		select: function(event, ui){ 
			event.preventDefault();
			$('[name="name_pt"]').val(ui.item.nama_perusahaan); 
		
		}, focus: function(event, ui){
			event.preventDefault();
			$('[name="name_pt"]').val(ui.item.nama_perusahaan); 
		
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