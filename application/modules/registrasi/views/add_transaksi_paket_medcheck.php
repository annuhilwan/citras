<style type="text/css">
ul.ui-autocomplete {
    z-index: 1100;
}
     </style>

<form  class="tagForm" id="tag-form" role="form bor-rad"  action="<?php echo base_url().'registrasi/save_trx_lab_based_on_paket'?>" method="post" >
  <div class="box-body">
    <div class="row">
          
							<div class="form-group has-feedback">
								
								<input type="hidden" name="id_pasien" value="<?php echo $idPasien;?>" class="form-control" >
								<input type="hidden" name="id_paket" value="" class="form-control" >
							</div>
							
						
						
						
							<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Nama Paket</label>
						    <input  type="text" name="nama_paket" id="nama_paket" value="<?php echo isset($userData->name)?$userData->name:'';?>" class="form-control" placeholder="Nama Pemeriksaan">
						  </div>
						</div>
						
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Harga Paket</label>
						    <input  type="text" name="harga_paket" id="harga_paket" value="<?php echo isset($userData->name)?$userData->name:'';?>" class="form-control" placeholder="Harga Paket" readonly >
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
        url: "<?php echo site_url('/registrasi/save_trx_lab_based_on_paket/');?>",
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


$( "#nama_paket" ).autocomplete({
			source: "<?php echo site_url('registrasi/get_autocomplete_paket_medcheck');?>",
			select: function(event, ui){ 
				event.preventDefault();
				$('[name="nama_paket"]').val(ui.item.nama_paket); 
				$('[name="id_paket"]').val(ui.item.id_paket);  
				$('[name="harga_paket"]').val(ui.item.harga_paket);  
			}, focus: function(event, ui){
				event.preventDefault();
				$('[name="nama_paket"]').val(ui.item.nama_paket); 
				$('[name="id_paket"]').val(ui.item.id_paket); 
				$('[name="harga_paket"]').val(ui.item.harga_paket); 
			}
		});
});

	
	
	
	
 </script>