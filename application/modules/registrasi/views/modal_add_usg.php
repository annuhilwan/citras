<style type="text/css">
ul.ui-autocomplete {
    z-index: 1100;
}
     </style>

<form  class="tagForm" id="tag-form" role="form bor-rad"  enctype="multipart/form-data" action="<?php echo base_url().'registrasi/save_trx_penunjang'?>" method="post" >
  <div class="box-body">
    <div class="row">
          
							<div class="form-group has-feedback">
								
								<input type="hidden" name="id_pelayanan" value="<?php echo $idPasien;?>" class="form-control" >
							</div>
							
							<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Dokter Pemeriksa</label>
						  <input  type="text" name="nama_dokter" id="nama_dokter" value="<?php echo isset($data['nama_dokter'])?$data['nama_dokter']:$data['nama_dokter_penunjang'];?>" class="form-control" placeholder="Dokter Pemeriksa">
						  </div>
						</div>
							
						    <div class="form-group has-feedback">
								<label for="exampleInputstatus">Jenis Resume :</label>
								<select  id="jenis_pemeriksaan"  name="jenis_pemeriksaan" class="form-control">
									<option value="USG MAMMAE">USG MAMMAE</option>;
									<option value="USG ABDOMEN">USG ABDOMEN</option>;
								</select>
							</div>
							
							
							
							<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Hasil Resume</label>
						    <input  type="text" name="hasil_pemeriksaan" id="hasil_pemeriksaan" value="" class="form-control" placeholder="Hasil Pemeriksaan">
						  </div>
						</div>
						
						<div class="col-md-12"> 
							<div class="form-group imsize">
							<label for="exampleInputFile">Image Upload</label>
							<input type="file" name="gambar_pemeriksaan" id="exampleInputFile">
							</div>
							</div> 
							

                      
        </div>
        
        <div class="box-footer sub-btn-wdt">
       
		  <input type="submit" class="btn btn-primary" value="Submit Data">
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
        url: "<?php echo site_url('/registrasi/save_trx_penunjang/');?>",
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


		$( "#hasil_resume" ).autocomplete({
			source: "<?php echo site_url('registrasi/get_autocomplete_add_model_usg');?>",
			select: function(event, ui){ 
				event.preventDefault();
				$('[name="hasil_resume"]').val(ui.item.hasil_resume); 
			}, focus: function(event, ui){
				event.preventDefault();
				$('[name="hasil_resume"]').val(ui.item.hasil_resume);  
			}
		});
		
		$( "#nama_dokter" ).autocomplete({
			source: "<?php echo site_url('registrasi/get_autocomplete_get_nama_dokter');?>",
			select: function(event, ui){ 
				event.preventDefault();
				$('[name="nama_dokter"]').val(ui.item.nama_dokter); 
			}, focus: function(event, ui){
				event.preventDefault();
				$('[name="nama_dokter"]').val(ui.item.nama_dokter);  
			}
		});
		
			

	});
	


	
	
	
	
 </script>