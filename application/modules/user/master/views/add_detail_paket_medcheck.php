<style type="text/css">
ul.ui-autocomplete {
    z-index: 1100;
}
     </style>

<form  class="tagForm" id="tag-form" role="form bor-rad"  action="<?php echo base_url().'master/save_master_paket_medcheck_detail'?>" method="post" >
  <div class="box-body">
    <div class="row">
          
							<div class="form-group has-feedback">
								
								<input type="hidden" name="id_paket" value="<?php echo $idPaket;?>" class="form-control" >
								<input type="hidden" name="id_pemeriksaan" value="" class="form-control" >
							</div>
							
						
						
						
							<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Nama Pemeriksaan</label>
						    <input  type="text" name="nama_pemeriksaan" id="nama_pemeriksaan" value="<?php echo isset($userData->name)?$userData->name:'';?>" class="form-control" placeholder="Nama Pemeriksaan">
						  </div>
						</div>
							
								<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Nama Pelayanan</label>
						    <input  type="text" name="nama_pelayanan" id="nama_pelayanan" value="<?php echo isset($userData->name)?$userData->name:'';?>" class="form-control" placeholder="Nama Pemeriksaan" readonly>
						  </div>
						</div>
							
							
							
						
							

                      
        </div>
        
        <div class="box-footer sub-btn-wdt">
       
		  <input id="tag-form-submit" type="submit" class="btn btn-primary" value="Submit Data">
        </div>
        
      </form>
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  <script>
	$(document).ready(function() {
		
	$('#tag-form-submit').on('click', function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('/master/save_master_paket_medcheck_detail/');?>",
        data: $('form.tagForm').serialize(),
        success: function(response) {
          location.reload(true); 
        },
        error: function() {
            alert('Error');
        }
    });
    return false;
});


$( "#nama_pemeriksaan" ).autocomplete({
			source: "<?php echo site_url('master/get_autocomplete_pemeriksaan');?>",
			select: function(event, ui){ 
				event.preventDefault();
				$('[name="nama_pemeriksaan"]').val(ui.item.nama_pemeriksaan); 
				$('[name="nama_pelayanan"]').val(ui.item.nama_pelayanan); 
				$('[name="id_pemeriksaan"]').val(ui.item.id_pemeriksaan);  
			}, focus: function(event, ui){
				event.preventDefault();
				$('[name="nama_pemeriksaan"]').val(ui.item.nama_pemeriksaan); 
				$('[name="nama_pelayanan"]').val(ui.item.nama_pelayanan);
				$('[name="id_pemeriksaan"]').val(ui.item.id_pemeriksaan); 
			}
		});
});

	
	
	
	
 </script>