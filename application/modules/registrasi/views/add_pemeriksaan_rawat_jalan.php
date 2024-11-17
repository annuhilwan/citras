<form  class="tagForm" id="tag-form" role="form bor-rad"  action="<?php echo base_url().'registration/save_trx_pemeriksaan_rawat_jalan'?>" method="post" >
  <div class="box-body">
    <div class="row">
          
							<div class="form-group has-feedback">
								
								<input type="hidden" name="id_pelayanan" value="<?php echo $idPasien;?>" class="form-control" >
							</div>
							
							<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Dokter Pemeriksa</label>
						    <input  type="text" name="dokter_pemeriksa" id="dokter_pemeriksa" value="<?php echo isset($userData->name)?$userData->name:'';?>" class="form-control" placeholder="Dokter Pemeriksa">
						  </div>
						</div>
							
							
							
						<div class="form-group has-feedback">
								<label for="exampleInputstatus">Jenis Pemeriksaan :</label>
							 <input  type="text" name="jenis_pemeriksaan" id="jenis_pemeriksaan" value="<?php echo isset($userData->name)?$userData->name:'';?>" class="form-control" placeholder="Hasil Pemeriksaan">
							</div>
							
							
							<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Hasil Pemeriksaan</label>
						    <input  type="text" name="hasil_pemeriksaan" id="hasil_pemeriksaan" value="<?php echo isset($userData->name)?$userData->name:'';?>" class="form-control" placeholder="Hasil Pemeriksaan">
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
        url: "<?php echo site_url('/registrasi/save_trx_pemeriksaan_rawat_jalan/');?>",
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