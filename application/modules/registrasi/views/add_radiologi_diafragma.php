<style type="text/css">
ul.ui-autocomplete {
    z-index: 1100;
}
</style>

<form  class="tagForm" id="tag-form" role="form bor-rad"  action="<?php echo base_url().'registration/save_trx_radiologi'?>" method="post" >
  <div class="box-body">
    <div class="row">
          
							<div class="form-group has-feedback">
								
								<input type="hidden" name="id_pelayanan" value="<?php echo $idPasien;?>" class="form-control" >
							</div>
							
							<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Dokter Pemeriksa</label>
						    <input  type="text" name="nama_dokter" id="nama_dokter" value="<?php echo isset($data['dokter_pemeriksa'])?$data['dokter_pemeriksa']:$data['nama_dokter_rontgen'];?>" class="form-control" placeholder="Dokter Pemeriksa">
						  </div>
						</div>
							
							<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Status Pemeriksaan :</label>
							<br>
						    <input  type="radio" name="status_pemeriksaan" id="status_pemeriksaan" checked value="Ya"  />Ya
							<input  type="radio" name="status_pemeriksaan" id="status_pemeriksaan" value="Tidak"  />Tidak
						  </div>
						</div>
							
						<div class="form-group has-feedback">
								<label for="exampleInputstatus">Nama Pemeriksaan :</label>
								<input  type="text" name="nama_pemeriksaan" id="nama_pemeriksaan" value="DIAFRAGMA" class="form-control" readonly>
							</div>
							
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Catatan :</label>
								<select  id="catatan"  name="catatan" class="form-control">
									<option value="DBN">DBN</option>;
									<option value="ABN">ABN</option>;
								</select>
							</div>
							
							<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Hasil Pemeriksaan</label>
						    <input  type="text" name="hasil_pemeriksaan" id="hasil_pemeriksaan" value="Sinus dan Diafragma Dalam Batas Normal" class="form-control" placeholder="Hasil Pemeriksaan">
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
        url: "<?php echo site_url('/registrasi/save_trx_radiologi/');?>",
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