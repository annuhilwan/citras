<style type="text/css">
ul.ui-autocomplete {
    z-index: 1100;
}
</style>

<form role="form bor-rad"  action="<?php echo base_url().'registrasi/update_setting_dokter_perusahaan'?>" method="post">
  <div class="box-body">
    <div class="row">
          
						
					
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Nama Dokter Penanggung Jawab</label>
						    <input type="hidden" name="id"  value="<?php echo isset($data['id'])?$data['id']:'';?>" class="form-control" >
						    <input type="text" name="nama_dokter_penanggung_jawab" id="nama_dokter_penanggung_jawab" value="<?php echo isset($data['nama_dokter_penanggung_jawab'])?$data['nama_dokter_penanggung_jawab']:'';?>" class="form-control" placeholder="Nama Dokter Penanngung Jawab">
						  </div>
						</div>
						
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Nama Dokter EKG</label>
						    <input type="text" name="nama_dokter_ekg" id="nama_dokter_ekg" value="<?php echo isset($data['nama_dokter_ekg'])?$data['nama_dokter_ekg']:'';?>" class="form-control" placeholder="Nama Dokter EKG">
						  </div>
						</div>
						
						
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Nama Dokter Rontgen</label>
						    <input type="text" name="nama_dokter_rontgen" id="nama_dokter_rontgen" value="<?php echo isset($data['nama_dokter_rontgen'])?$data['nama_dokter_rontgen']:'';?>" class="form-control" placeholder="Nama Dokter Rontgen">
						  </div>
						</div>
						
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Nama Dokter Audiometri</label>
						    <input type="text" name="nama_dokter_audiometri" id="nama_dokter_audiometri" value="<?php echo isset($data['nama_dokter_audiometri'])?$data['nama_dokter_audiometri']:'';?>" class="form-control" placeholder="Nama Dokter Audiometri">
						  </div>
						</div>
						
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Nama Dokter Spirometri</label>
						    <input type="text" name="nama_dokter_spirometri" id="nama_dokter_spirometri" value="<?php echo isset($data['nama_dokter_spirometri'])?$data['nama_dokter_spirometri']:'';?>" class="form-control" placeholder="Nama Dokter Spirometri">
						  </div>
						</div>
						
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Nama Dokter Penunjang Umum</label>
						    <input type="text" name="nama_dokter_penunjang" id="nama_dokter_penunjang" value="<?php echo isset($data['nama_dokter_penunjang'])?$data['nama_dokter_penunjang']:'';?>" class="form-control" placeholder="Nama Dokter Penunjang Umum">
						  </div>
						</div>
						
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Nama Dokter Resume</label>
						    <input type="text" name="nama_dokter_resume" id="nama_dokter_resume" value="<?php echo isset($data['nama_dokter_resume'])?$data['nama_dokter_resume']:'';?>" class="form-control" placeholder="Nama Dokter Resume">
						  </div>
						</div>
						
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">No Invoice</label>
						    <input type="text" name="no_invoice" id="no_invoice" value="<?php echo isset($data['no_invoice'])?$data['no_invoice']:'';?>" class="form-control" placeholder="No Invoice">
						  </div>
						</div>
						
						

                      
        </div>
        
        <div class="box-footer sub-btn-wdt">
          <button type="submit" name="submit" value="add" class="btn btn-success wdt-bg">Add</button>
        </div>
        
      </form>
	  
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		
		<script>
	$(document).ready(function() {
				
		$( "#nama_dokter_penanggung_jawab" ).autocomplete({
			source: "<?php echo site_url('registrasi/get_autocomplete_get_nama_dokter');?>",
			select: function(event, ui){ 
				event.preventDefault();
				$('[name="nama_dokter_penanggung_jawab"]').val(ui.item.nama_dokter); 
			}, focus: function(event, ui){
				event.preventDefault();
				$('[name="nama_dokter_penanggung_jawab"]').val(ui.item.nama_dokter);  
			}
		});
		
		$( "#nama_dokter_rontgen" ).autocomplete({
			source: "<?php echo site_url('registrasi/get_autocomplete_get_nama_dokter');?>",
			select: function(event, ui){ 
				event.preventDefault();
				$('[name="nama_dokter_rontgen"]').val(ui.item.nama_dokter); 
			}, focus: function(event, ui){
				event.preventDefault();
				$('[name="nama_dokter_rontgen"]').val(ui.item.nama_dokter);  
			}
		});
		
		$( "#nama_dokter_ekg" ).autocomplete({
			source: "<?php echo site_url('registrasi/get_autocomplete_get_nama_dokter');?>",
			select: function(event, ui){ 
				event.preventDefault();
				$('[name="nama_dokter_ekg"]').val(ui.item.nama_dokter); 
			}, focus: function(event, ui){
				event.preventDefault();
				$('[name="nama_dokter_ekg"]').val(ui.item.nama_dokter);  
			}
		});
		
		$( "#nama_dokter_audiometri" ).autocomplete({
			source: "<?php echo site_url('registrasi/get_autocomplete_get_nama_dokter');?>",
			select: function(event, ui){ 
				event.preventDefault();
				$('[name="nama_dokter_audiometri"]').val(ui.item.nama_dokter); 
			}, focus: function(event, ui){
				event.preventDefault();
				$('[name="nama_dokter_audiometri"]').val(ui.item.nama_dokter);  
			}
		});
		
		$( "#nama_dokter_spirometri" ).autocomplete({
			source: "<?php echo site_url('registrasi/get_autocomplete_get_nama_dokter');?>",
			select: function(event, ui){ 
				event.preventDefault();
				$('[name="nama_dokter_spirometri"]').val(ui.item.nama_dokter); 
			}, focus: function(event, ui){
				event.preventDefault();
				$('[name="nama_dokter_spirometri"]').val(ui.item.nama_dokter);  
			}
		});
		
		$( "#nama_dokter_penunjang" ).autocomplete({
			source: "<?php echo site_url('registrasi/get_autocomplete_get_nama_dokter');?>",
			select: function(event, ui){ 
				event.preventDefault();
				$('[name="nama_dokter_penunjang"]').val(ui.item.nama_dokter); 
			}, focus: function(event, ui){
				event.preventDefault();
				$('[name="nama_dokter_penunjang"]').val(ui.item.nama_dokter);  
			}
		});
		
		$( "#nama_dokter_resume" ).autocomplete({
			source: "<?php echo site_url('registrasi/get_autocomplete_get_nama_dokter');?>",
			select: function(event, ui){ 
				event.preventDefault();
				$('[name="nama_dokter_resume"]').val(ui.item.nama_dokter); 
			}, focus: function(event, ui){
				event.preventDefault();
				$('[name="nama_dokter_resume"]').val(ui.item.nama_dokter);  
			}
		});
		
			

	});
		
 </script>