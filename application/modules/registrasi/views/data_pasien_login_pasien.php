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
            <h3 class="box-title">Master Pasien</h3>
            <div class="box-tools">
               
            </div>
          </div>
		  <div class="box-tools">
             
              
              
            </div>
		  <div class="row">
		  <div class="col-xs-3">
		  
		  </div>
		  <div class="col-xs-3">
		  
		  </div>
		    <div class="col-xs-3">
		  
		  </div>
		  <!-- <div class="col-xs-3">
		  
		  <br>	
		  <br>
		  <input class="form-control" id="myInput" type="text" placeholder="Search..">
		  </div> -->
		  <div class="container">
		  	<div class="container">
		  		<div class="row">
				  	<div class="col-xs-12">
						<!--form method="post" action="http://localhost/shelli/codeigniter/ARTICLE/export/index.php/excel_export/action"-->
						
					</div>
			  </div>
		  	</div>
			  	

		  </div>
		  <br>
			

		  </div>
          <!-- /.box-header -->
          <div>
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
								<a href="<?php echo site_url('/registrasi/detailDataPasienPerPasien/'.$val['id']); ?>" class="blue"> <?php echo $val['nama_lengkap']; ?>
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

  	$('#datatable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );

    var url = '<?php echo base_url();?>';//$('.content-header').attr('rel');
    
    setTimeout(function() {
      var add_width = $('.dataTables_filter').width()+$('.box-body .dt-buttons').width()+10;
      $('.table-date-range').css('right',add_width+'px');

        $('.dataTables_info').before('<button data-base-url="<?php echo base_url().'user/delete/'; ?>" rel="delSelTable" class="btn btn-default btn-sm delSelected pull-left btn-blk-del"> <i class="fa fa-trash"></i> </button><br><br>');  
    }, 300);
    $("button.closeTest, button.close").on("click", function (){});
	
	// $("#myInput").on("keyup", function() {
	//     var value = $(this).val().toLowerCase();
	//     $("#myTable tr").filter(function() {
	//       	$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	//     });
 // 	});
  
});
</script>            