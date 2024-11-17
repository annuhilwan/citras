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
				<h3 class="box-title">Data Master Paket </h3>
			</div>
			<form method="post" enctype="multipart/form-data" action="" class="form-label-left" onsubmit="return(validate());">
				<div class="box-body box-profile">
					<div class="row">
					<input type="hidden" id="id_transaksi" name="id_transaksi" value="<?php echo $arrDataPasien['id']; ?>"   class="form-control" placeholder="Data dokter pemeriksa" >
					
						<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h3>Nama Paket: <?php echo $arrDataPaket['nama_paket']; ?></h3>
					<h3>Harga Paket: <?php echo $arrDataPaket['harga_paket']; ?></h3>
					<br>
					<br>	
					<div class="clearfix"></div>
					
				</div>
				<div class="x_content">
					<div class role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
									
							
							<li role="presentation"><a href="#tab_content5" id="warna-tab" role="tab" data-toggle="tab" aria-expanded="true">Pemeriksaan</a></li>
						</ul>
					</div>
					
					<div id="myTabContent" class="tab-content">
					
						<div role="tabpanel" class="tab-pane active in" id="tab_content1" aria-labelledby="spj-tab">
						
						<br/>
							<button type="button" class="btn-sm  btn btn-success modalButtonPemeriksaanMedcheckDetail" data-src="<?php echo $arrDataPaket['id']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add Pemeriksaan</button>
						
						<br>
						<br>
							<table width='100%' border='1' align="center" style='border-collapse: collapse;'>
      
      
	   
	   
	   <div class="x_content table-responsive">
                	<table id="datatable" class="table table-striped" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Paket</th>
								<th>Nama Pemeriksaan</th>
								<th>Nama Pelayanan</th>
								
								<th>Del</th>
							</tr>
						</thead>
						<tbody id="myTable">
						<?php
							$ct = 1;
							foreach ((Array) $arrDataMedcheckDetail AS $key => $val) { 
							?>	<tr>
								<td><?php echo $ct; ?></td>
								<td>
								<?php echo $val['nama_paket']; ?>
								</td>      
								<td><?php echo $val['nama_pemeriksaan']; ?></td>
								<td><?php echo $val['nama_pelayanan']; ?></td>
								<td>
								<a  data-toggle="modal" class="mClass" onclick="delIdMasterPaketDetail(<?php echo $val['id']; ?>, 'master')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" data-id=""></i></a>
								</td>  
								</tr>
								<?php $ct++; 
							}
							?>
						</tbody>
					</table>
					
                </div>
       
     </table>
							
							
							
							
						
							
							
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