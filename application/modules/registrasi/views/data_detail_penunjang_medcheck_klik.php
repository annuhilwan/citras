<div class="content-wrapper">
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
            <h3 class="box-title">Data Detail Penunjang MedCheck</h3>
            
			 
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
		   <div class="box-body">        
          <div class="x_content table-responsive">
                	<table id="datatable" class="table table-striped" style="width:100%">
						<thead>
							<tr>							
								<th>No Urut</th>
								<th>Nama Pasien</th>
								<th>NIK</th>
								<th>Nama Bagian</th>
								<th>Kategori</th>
								<th>Hasil</th>
							</tr>
						</thead>
						<tbody id="myTable">
						<?php
							$ct = 1;
							foreach ((Array) $data AS $key => $val) { 
							?>	<tr>							
								<td><?php echo $ct; ?></td>
								<td><?php echo $val['nama_lengkap']; ?></td>
								<td>
								    <?php 
								        if (strtoupper($val['jenis_identitas']) == 'NIK') { 
								            echo $val['no_identitas']; 
								        } else {
								            echo $val['no_identitas'].'('.$val['jenis_identitas'].')';
								        }
								    ?>
								</td>
								<td><?php echo $val['bagian']; ?></td>
								<td><?php echo $val['jenis_pemeriksaan']; ?></td>	
								<td><?php echo $val['hasil_pemeriksaan']; ?></td>
								</tr>
								<?php $ct++; 
							}
							?>
						</tbody>
					</table>
					
                </div>
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
<script type="text/javascript">
  $(document).ready(function() {  
    var url = '<?php echo base_url();?>';//$('.content-header').attr('rel');
    $('#datatable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
    
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