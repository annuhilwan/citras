<style type="text/css">
ul.ui-autocomplete {
    z-index: 1100;
}
     </style>

<form  class="tagForm" id="tag-form" role="form bor-rad"  action="<?php echo base_url().'registrasi/save_trx_lab_add_pemeriksaan'?>" method="post" >
  <div class="box-body">
    <div class="row">
          
							<div class="form-group has-feedback">
								
								<input type="text" name="id_pasien" value="<?php echo $idPasien;?>" class="form-control" >
								<input type="text" name="id_pemeriksaan" value="" class="form-control" >
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
						    <input  type="text" name="nama_pelayanan" id="nama_pelayanan" value="<?php echo isset($userData->name)?$userData->name:'';?>" class="form-control" placeholder="Nama Pelayanan" readonly>
						  </div>
						</div>
						
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Harga Pemeriksaan</label>
						    <input  type="text" name="harga_pemeriksaan" id="harga_pemeriksaan" value="<?php echo isset($userData->name)?$userData->name:'';?>" class="form-control" placeholder="Harga Pemeriksaan" readonly >
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
        url: "<?php echo site_url('/registrasi/save_trx_lab_add_pemeriksaan/');?>",
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
			source: "<?php echo site_url('registrasi/get_autocomplete_tambah_pemeriksaan');?>",
			select: function(event, ui){ 
				event.preventDefault();
				$('[name="nama_pemeriksaan"]').val(ui.item.nama_pemeriksaan); 
				$('[name="nama_pelayanan"]').val(ui.item.nama_pelayanan);  
				$('[name="harga_pemeriksaan"]').val(ui.item.harga_pemeriksaan);  
				$('[name="id_pemeriksaan"]').val(ui.item.id_pemeriksaan);  
			}, focus: function(event, ui){
				event.preventDefault();
				$('[name="nama_pemeriksaan"]').val(ui.item.nama_pemeriksaan); 
				$('[name="nama_pelayanan"]').val(ui.item.nama_pelayanan);  
				$('[name="harga_pemeriksaan"]').val(ui.item.harga_pemeriksaan);  
				$('[name="id_pemeriksaan"]').val(ui.item.id_pemeriksaan);  
			}
		});
});

	
	
	
	
 </script>