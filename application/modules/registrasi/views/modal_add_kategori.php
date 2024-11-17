<style type="text/css">
ul.ui-autocomplete {
    z-index: 1100;
}
     </style>

<form  class="tagForm" id="tag-form" role="form bor-rad"  action="<?php echo base_url().'registration/save_trx_resume_anjuran'?>" method="post" >
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
								<input  type="text" name="jenis_resume" id="jenis_resume" value="KATEGORI" class="form-control" readonly>
							</div>
							
							
							
							<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Hasil Resume</label>
						    <br>
							<input type="radio" name="hasil_resume" id="hasil_resume" <?php if (isset($arrDataPasien['hasil_resume']) && $arrDataPasien['hasil_resume']=="1") echo "checked";?> value="FIT">FIT
							<br>
							<input type="radio" name="hasil_resume" id="hasil_resume" <?php if (isset($arrDataPasien['hasil_resume']) && $arrDataPasien['hasil_resume']=="0") echo "checked";?> value="FIT WITH RECOMMENDATION">FIT WITH RECOMMENDATION
							<br>
							<input type="radio" name="hasil_resume" id="hasil_resume" <?php if (isset($arrDataPasien['hasil_resume']) && $arrDataPasien['hasil_resume']=="0") echo "checked";?> value="UNFIT">UNFIT
							<br>
							<input type="radio" name="hasil_resume" id="hasil_resume" <?php if (isset($arrDataPasien['hasil_resume']) && $arrDataPasien['hasil_resume']=="0") echo "checked";?> value="TEMPORARY UNFIT">TEMPORARY UNFIT
							<br>
							<input type="radio" name="hasil_resume" id="hasil_resume" <?php if (isset($arrDataPasien['hasil_resume']) && $arrDataPasien['hasil_resume']=="0") echo "checked";?> value="BAIK">BAIK
							<br>
							<input type="radio" name="hasil_resume" id="hasil_resume" <?php if (isset($arrDataPasien['hasil_resume']) && $arrDataPasien['hasil_resume']=="0") echo "checked";?> value="CUKUP">CUKUP
							<br>
							<input type="radio" name="hasil_resume" id="hasil_resume" <?php if (isset($arrDataPasien['hasil_resume']) && $arrDataPasien['hasil_resume']=="0") echo "checked";?> value="PERLU TINDAK LANJUT">PERLU TINDAK LANJUT
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
        url: "<?php echo site_url('/registrasi/save_trx_resume_anjuran/');?>",
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
			source: "<?php echo site_url('registrasi/get_autocomplete_add_model_kesimpulan');?>",
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