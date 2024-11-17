<form  class="tagForm" id="tag-form" role="form bor-rad"  action="<?php echo base_url().'registration/save_trx_radiologi'?>" method="post" >
  <div class="box-body">
    <div class="row">
          
							<div class="form-group has-feedback">
								
								<input type="hidden" name="id_pelayanan" value="<?php echo $idPasien;?>" class="form-control" >
							</div>
							
							<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Dokter Pemeriksa</label>
						    <input  type="text" name="dokter_pemeriksa" id="dokter_pemeriksa" value="<?php echo isset($data['dokter_pemeriksa'])?$data['dokter_pemeriksa']:$data['nama_dokter_rontgen'];?>" class="form-control" placeholder="Dokter Pemeriksa">
						  </div>
						</div>
							
							<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Status Pemeriksaan :</label>
							<br>
						    <input  type="radio" name="status_pemeriksaan" id="status_pemeriksaan" value="Ya"  />Ya
							<input  type="radio" name="status_pemeriksaan" id="status_pemeriksaan" value="Tidak"  />Tidak
						  </div>
						</div>
							
						<div class="form-group has-feedback">
								<label for="exampleInputstatus">Nama Pemeriksaan :</label>
								<select  id="nama_pemeriksaan"  name="nama_pemeriksaan" class="form-control">
									<option value="">-- Select One --</option>
									<option value="COR(JANTUNG)">COR(JANTUNG)</option>;
									<option value="PULMO(PARU)">PULMO(PARU)</option>;
									<option value="DIAFRAGMA">DIAFRAGMA</option>;
									<option value="KESAN">KESAN</option>;
								</select>
							</div>
							
							<div class="form-group has-feedback">
								<label for="exampleInputstatus">Catatan :</label>
								<select  id="catatan"  name="catatan" class="form-control">
									<option value="">-- Select One --</option>
									<option value="ABN">ABN</option>;
									<option value="DBN">DBN</option>;
								</select>
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

	});
	
	
	
 </script>