<style type="text/css">
ul.ui-autocomplete {
    z-index: 1100;
}
     </style>

<form  class="tagForm" id="tag-form" role="form bor-rad"  action="<?php echo base_url().'apotek/save_trx_obat_rawat_jalan'?>" method="post" >
  <div class="box-body">
    <div class="row">
          
							<div class="form-group has-feedback">
								
								<input type="hidden" name="id_pelayanan" value="<?php echo $idPasien;?>" class="form-control" >
								<input type="hidden" name="id_obat" value="" class="form-control" >
							</div>
							
						
						
						
							<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Nama Obat</label>
						    <input  type="text" name="nama_obat" id="nama_obat" value="<?php echo isset($userData->name)?$userData->name:'';?>" class="form-control" placeholder="Nama Obat">
						  </div>
						</div>
							
							
							
							
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Stok</label>
						    <input  type="text" name="stok" id="stok" value="<?php echo isset($userData->name)?$userData->name:'';?>" class="form-control" placeholder="Stok Obat" readonly >
						  </div>
						</div>
						
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Harga</label>
						    <input  type="text" name="harga_jual" id="harga_jual" value="<?php echo isset($userData->name)?$userData->name:'';?>" class="form-control" placeholder="Harga Obat" readonly >
						  </div>
						</div>
						
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Jumlah</label>
						    <input  type="text" name="jumlah_beli" id="jumlah_beli" value="<?php echo isset($userData->name)?$userData->name:'';?>" class="form-control" placeholder="Jumlah Beli" 	 >
						  </div>
						</div>
							

                      
        </div>
        
        <div class="box-footer sub-btn-wdt">
       
		  <input id="tag-form-submit" type="submit" class="btn btn-primary" value="Submit Data">
        </div>
        
      </form>
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  <script>
	$(document).ready(function() {
		
	$('#tag-form-submit').on('click', function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('/apotek/save_trx_obat_rawat_jalan/');?>",
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


$( "#nama_obat" ).autocomplete({
			source: "<?php echo site_url('apotek/get_autocomplete_obat');?>",
			select: function(event, ui){ 
				event.preventDefault();
				$('[name="nama_obat"]').val(ui.item.nama_obat); 
				$('[name="stok"]').val(ui.item.stok); 
				$('[name="harga_jual"]').val(ui.item.harga_jual);  
				$('[name="id_obat"]').val(ui.item.id_obat);  
			}, focus: function(event, ui){
				event.preventDefault();
				$('[name="nama_obat"]').val(ui.item.nama_obat); 
				$('[name="stok"]').val(ui.item.stok); 
				$('[name="harga_jual"]').val(ui.item.harga_jual); 
				$('[name="id_obat"]').val(ui.item.id_obat); 
			}
		});
});

	
	
	
	
 </script>