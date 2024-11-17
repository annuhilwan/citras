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
				<h3 class="box-title">Pendaftaran Pasien Baru <small></small></h3>
				<div class="box-tools">
               <a href="<?php echo site_url('/registrasi/inputPasienBaru'); ?>" class="btn-sm btn btn-success" role="button"><i class="glyphicon glyphicon-plus"></i> Tambah Data Pasien</a>
            </div>
			</div>
			
			<form method="post" enctype="multipart/form-data" action="<?php echo base_url().'registrasi/search_data_pasien_new' ?>" class="form-label-left">
				<div class="box-body box-profile">
					<div class="row">
						<div class="col-md-6">

						<div class="form-group has-feedback">
								<label for="exampleInputstatus">Nama Pasien:</label>
								<input type="text" id="nama_lengkap" name="nama_lengkap" value=""   class="form-control" placeholder="Masukan Nama Pasien">
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
								<label for="exampleInputstatus">Tanggal Lahir:</label>
								<input type="text" id="tanggal_lahir" name="tanggal_lahir" value=""  class="form-control form_date" placeholder="Masukan Tanggal Lahir Pasien" />
							</div>
					
							
						
							<div class="form-group has-feedback">
								<button id="save"  name="save" type="submit"  class="btn btn-primary" />Search</button><br />
							</div>	
			
						</div>
					</div>
				</div>
			</form>    
			
			<div class="x_content table-responsive">
          			
	          			
          			
          			
					  <table id="datatable" class="table table-striped" style="width:100%">
						  <thead>
							  <tr>
								  <th>No</th>
								  <th>Nama Depan</th>
								  <th>Nama Lengkap</th>
								  <th>Nama Perusahaan</th>
								  <th>Jenis Kelamin</th>
								  <th>Tempat Lahir</th> 
								  <th>Tanggal Lahir</th> 
							  </tr>
						  </thead>
						  <tbody id="myTable">
						  <?php
							  $ct = 1;
							  foreach ((Array) $data AS $key => $val) { 
							  ?>	<tr>
								  <td><?php echo $ct; ?></td>
								  <td><?php echo $val['nama_depan']; ?></td>
								  <td>
								  <a href="<?php echo site_url('/registrasi/detailDataPasien/'.$val['id']); ?>" class="blue"> <?php echo $val['nama_lengkap']; ?>
								  </td>      
								  <td><?php echo $val['nama_pt']; ?></td>
								  <td><?php echo $val['jenis_kelamin']; ?></td>
								  <td><?php echo $val['tempat_lahir']; ?></td>		
								  <td><?php echo ($val['tanggal_lahir'] !== null ? date('d M Y', strtotime($val['tanggal_lahir'])) : null); ?></td>
								  </tr>
								  <?php $ct++; 
							  }
							  ?>
						  </tbody>
					  </table>
  
					   
  
				  </div>
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
		format: 'yyyy-mm-dd',
		pickTime: false,
		autoclose: 1,
		startView: 3,
		minView: 2,
		maxView: 4
	});

	$('#datatable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );

	$( "#nama_lengkap" ).autocomplete({
			source: "<?php echo site_url('registrasi/get_autocomplete_nama');?>",
			select: function(event, ui){ 
				event.preventDefault();
				$('[name="nama_lengkap"]').val(ui.item.nama_lengkap); 
			
			}, focus: function(event, ui){
				event.preventDefault();
				$('[name="nama_lengkap"]').val(ui.item.nama_lengkap); 
			
			}
		});

});
	   

</script>