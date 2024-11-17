<form  class="tagForm" id="tag-form" role="form bor-rad"  action="<?php echo base_url().'apotek/save_master_obat'?>" method="post" >
  <div class="box-body">
    <div class="row">
          
							<div class="form-group has-feedback">
								
								<input type="hidden" name="id_pelayanan" value="<?php echo $idPasien;?>" class="form-control" >
							</div>
							
							<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Kode Obat</label>
						    <input  type="text" name="kode_obat" id="kode_obat" value="<?php echo isset($userData->name)?$userData->name:'';?>" class="form-control" placeholder="Kode Obat">
						  </div>
						</div>
						
						
							<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Nama Obat</label>
						    <input  type="text" name="nama_obat" id="nama_obat" value="<?php echo isset($userData->name)?$userData->name:'';?>" class="form-control" placeholder="Nama Obat">
						  </div>
						</div>
							
							
							<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Lokasi Obat</label>
						    <input  type="text" name="lokasi_obat" id="lokasi_obat" value="<?php echo isset($userData->name)?$userData->name:'';?>" class="form-control" placeholder="Lokasi Obat">
						  </div>
						</div>
							
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Stok</label>
						    <input  type="text" name="stok_obat" id="stok_obat" value="<?php echo isset($userData->name)?$userData->name:'';?>" class="form-control" placeholder="Stok Obat">
						  </div>
						</div>
						
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Harga</label>
						    <input  type="text" name="harga_obat" id="harga_obat" value="<?php echo isset($userData->name)?$userData->name:'';?>" class="form-control" placeholder="Harga Obat">
						  </div>
						</div>
							

                      
        </div>
        
        <div class="box-footer sub-btn-wdt">
       
		  <input id="tag-form-submit" type="submit" class="btn btn-primary" value="Submit Data">
        </div>
        
      </form>
	  
	  <script>
	$(document).ready(function() {
		
		$('#tag-form-submit').on('click', function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('/apotek/save_master_obat/');?>",
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

	});
	
	
	
 </script>