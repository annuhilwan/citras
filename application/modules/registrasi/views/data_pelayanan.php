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
            <h3 class="box-title">List Pelayanan Medical Check Up</h3>
          </div>
          
          <form method="post" enctype="multipart/form-data" action="<?php echo base_url().'registrasi/list_data_pelayanan' ?>" class="form-label-left">
				<div class="box-body box-profile">
					<div class="row">
						<div class="col-md-6">

						    <div class="form-group has-feedback">
								<label for="exampleInputstatus">Nama Pasien:</label>
								<input type="text" id="nama_lengkap" name="nama_lengkap" value="" class="form-control" placeholder="Masukan Nama Pasien">
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
          
		  <div class="row">
		    <div class="col-xs-3"> </div>
		    <div class="col-xs-3"> </div>
		    <div class="col-xs-3"> </div>
		  
		  <!-- 
		  <div class="col-xs-3">
		  <input class="form-control" id="myInput" type="text" placeholder="Search..">
		  </div>
		  -->
		  </div>
		  
          <!-- /.box-header -->
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
								<th>Download Report</th> 
							</tr>
						</thead>
						<tbody id="myTable">
						<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) { 
							?>	<tr>
								<td><?php echo $ct; ?></td>
								<td>
								<a href="<?php echo site_url('/registrasi/detailMedicalCheckups/'.$val['id']); ?>" class="blue"> <?php echo $val['nama_lengkap']; ?>
								</td>      
								<td><?php echo $val['nama_perusahaan']; ?></td>
								<td><?php echo $val['created_date']; ?></td>
								<td><?php echo $val['jenis_pelayanan']; ?></td>		
								<td><?php echo $val['status']; ?></td>
								<td>
								<a href="<?php echo site_url('/registrasi/excel_export/generate_report_excel/'.$val['id']); ?>" class="blue"> Download
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

<script type="text/javascript">
  $(document).ready(function() {  
    var url = '<?php echo base_url();?>';//$('.content-header').attr('rel');
    
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
		
    setTimeout(function() {
      var add_width = $('.dataTables_filter').width()+$('.box-body .dt-buttons').width()+10;
      $('.table-date-range').css('right',add_width+'px');

        $('.dataTables_info').before('<button data-base-url="<?php echo base_url().'user/delete/'; ?>" rel="delSelTable" class="btn btn-default btn-sm delSelected pull-left btn-blk-del"> <i class="fa fa-trash"></i> </button><br><br>');  
    }, 300);
    $("button.closeTest, button.close").on("click", function (){});
	
	$("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  
  });
</script>            