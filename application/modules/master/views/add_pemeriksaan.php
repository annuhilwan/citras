<style type="text/css">
ul.ui-autocomplete {
    z-index: 1100;
}
</style>

<form role="form bor-rad"  action="<?php echo base_url().'master/add_pemeriksaan'?>" method="post">
  <div class="box-body">
    <div class="row">
          
						
						<div class="form-group has-feedback">
								<label for="exampleInputstatus">Nama Pelayanan:</label>
								<select id="nama_pelayanan"  name="nama_pelayanan" class="form-control">
									<option value="">-- Select One --</option>
									<option <?php if ($data['nama_pelayanan'] == "HEMATOLOGI"	 ) echo 'selected' ; ?> value="HEMATOLOGI"		>HEMATOLOGI</option>;
									<option <?php if ($data['nama_pelayanan'] == "DIFFCOUNT"	 ) echo 'selected' ; ?> value="DIFFCOUNT"		>DIFF COUNT</option>;
									<option <?php if ($data['nama_pelayanan'] == "URINALISA"	 ) echo 'selected' ; ?> value="URINALISA"		>URINALISA</option>;
									<option <?php if ($data['nama_pelayanan'] == "SEDIMENURINE"	 ) echo 'selected' ; ?> value="SEDIMENURINE"	>SEDIMEN URINE</option>;
									<option <?php if ($data['nama_pelayanan'] == "KIMIADARAH"	 ) echo 'selected' ; ?> value="KIMIADARAH"		>KIMIA DARAH</option>;
									<option <?php if ($data['nama_pelayanan'] == "DRUGTEST"	 	 ) echo 'selected' ; ?> value="DRUGTEST"		>DRUG TEST</option>;
									<option <?php if ($data['nama_pelayanan'] == "IMUNOLOGI"	 ) echo 'selected' ; ?> value="IMUNOLOGI"		>IMUNOLOGI</option>;
									<option <?php if ($data['nama_pelayanan'] == "IMUNOSEROLOGI" ) echo 'selected' ; ?> value="IMUNOSEROLOGI"	>IMUNOSEROLOGI</option>;
									<option <?php if ($data['nama_pelayanan'] == "KEHAMILAN"	 ) echo 'selected' ; ?> value="KEHAMILAN"		>KEHAMILAN</option>;
									<option <?php if ($data['nama_pelayanan'] == "RECTAL"	     ) echo 'selected' ; ?> value="RECTAL"			>RECTAL SWAB</option>;
									<option <?php if ($data['nama_pelayanan'] == "WIDAL"	     ) echo 'selected' ; ?> value="WIDAL"			>WIDAL TEST</option>;
									<option <?php if ($data['nama_pelayanan'] == "2,5-HEXANEDIONE"	 ) echo 'selected' ; ?> value="2,5-HEXANEDIONE"		>2,5-HEXANEDIONE</option>;
									<option <?php if ($data['nama_pelayanan'] == "ELEKTROLIT"	 ) echo 'selected' ; ?> value="ELEKTROLIT"		>ELEKTROLIT</option>;
									<option <?php if ($data['nama_pelayanan'] == "FESES"	 ) echo 'selected' ; ?> value="FESES"		        >FESES</option>;
									<option <?php if ($data['nama_pelayanan'] == "LOGAM"	 ) echo 'selected' ; ?> value="LOGAM"		        >LOGAM</option>;
									<option <?php if ($data['nama_pelayanan'] == "GOLONGAN DARAH"	 ) echo 'selected' ; ?> value="GOLONGAN DARAH"		>GOLONGAN DARAH</option>;
									<option <?php if ($data['nama_pelayanan'] == "PENANDA TUMOR"	 ) echo 'selected' ; ?> value="PENANDA TUMOR"		>PENANDA TUMOR</option>;
									<option <?php if ($data['nama_pelayanan'] == "BTX"		 ) echo 'selected' ; ?> value="BTX"					>BTX</option>;
									<option <?php if ($data['nama_pelayanan'] == "KULTUR FESES"		 ) echo 'selected' ; ?> value="KULTUR FESES"		>KULTUR FESES</option>;
									<option <?php if ($data['nama_pelayanan'] == "CO DARAH"		 ) echo 'selected' ; ?> value="CO DARAH"		>CO DARAH</option>;
									<option <?php if ($data['nama_pelayanan'] == "BENZENA"		 ) echo 'selected' ; ?> value="BENZENA"			>BENZENA</option>;
									<option <?php if ($data['nama_pelayanan'] == "TOLUENA"		 ) echo 'selected' ; ?> value="TOLUENA"			>TOLUENA</option>;
									<option <?php if ($data['nama_pelayanan'] == "XILENE"		 ) echo 'selected' ; ?> value="XILENE"		 	>XILENE</option>;

								</select>
							</div>
							
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Nama Pemeriksaan</label>
						    <input type="hidden" name="id" value="<?php echo isset($data['id'])?$data['id']:'';?>" class="form-control" >
						    <input type="text" name="nama_pemeriksaan" value="<?php echo isset($data['nama_pemeriksaan'])?$data['nama_pemeriksaan']:'';?>" class="form-control" placeholder="Nama Pemeriksaan">
						  </div>
						</div>
						
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Nilai Min</label>
						    
							<div class="row">
								<div class="col-md-3">
									<div class="form-group has-feedback">
										<label for="exampleInputstatus">Pria :</label>
									</div>
								</div>	
								<div class="col-md-9">
									<div class="form-group has-feedback">
										<input type="text" name="nilai_min" value="<?php echo isset($data['nilai_min'])?$data['nilai_min']:'';?>" class="form-control" placeholder="Nilai Minimum Pria">
									</div>
								</div>	
							</div>
								<div class="row">
								<div class="col-md-3">
									<div class="form-group has-feedback">
										<label for="exampleInputstatus">Wanita :</label>
									</div>
								</div>	
								<div class="col-md-9">
									<div class="form-group has-feedback">
										<input type="text" name="nilai_min_wanita" value="<?php echo isset($data['nilai_min_wanita'])?$data['nilai_min_wanita']:'';?>" class="form-control" placeholder="Nilai Minimum Wanita">
									</div>
								</div>	
							</div>
						    
						  </div>
						</div>
						
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Nilai Max</label>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group has-feedback">
										<label for="exampleInputstatus">Pria :</label>
									</div>
								</div>	
								<div class="col-md-9">
									<div class="form-group has-feedback">
										<input type="text" name="nilai_max" value="<?php echo isset($data['nilai_max'])?$data['nilai_max']:'';?>" class="form-control" placeholder="Nilai Maximum Pria">
									</div>
								</div>	
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group has-feedback">
										<label for="exampleInputstatus">Wanita :</label>
									</div>
								</div>	
								<div class="col-md-9">
									<div class="form-group has-feedback">
										<input type="text" name="nilai_max_wanita" value="<?php echo isset($data['nilai_max_wanita'])?$data['nilai_max_wanita']:'';?>" class="form-control" placeholder="Nilai Maximum Wanita">
									</div>
								</div>	
							</div>
						  </div>
						</div>
						
						
						
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Nilai Text</label>
						   
						    <div class="row">
								<div class="col-md-3">
									<div class="form-group has-feedback">
										<label for="exampleInputstatus">Pria :</label>
									</div>
								</div>	
								<div class="col-md-9">
									<div class="form-group has-feedback">
										 <input type="text" name="nilai_text" value="<?php echo isset($data['nilai_text'])?$data['nilai_text']:'';?>" class="form-control" placeholder="Nilai Text Pria">
									</div>
								</div>	
							</div>
							
						    <div class="row">
								<div class="col-md-3">
									<div class="form-group has-feedback">
										<label for="exampleInputstatus">Wanita :</label>
									</div>
								</div>	
								<div class="col-md-9">
									<div class="form-group has-feedback">
										<input type="text" name="nilai_text_wanita" value="<?php echo isset($data['nilai_text_wanita'])?$data['nilai_text_wanita']:'';?>" class="form-control" placeholder="Nilai Text Wanita">
									</div>
								</div>	
							</div>
						  </div>
						</div>
						
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Satuan</label>
						    <input type="text" name="id_satuan" id="id_satuan" value="<?php echo isset($data['id_satuan'])?$data['id_satuan']:'';?>" class="form-control" placeholder="Satuan Pemeriksaan">
						  </div>
						</div>
						
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Harga</label>
						    <input type="text" name="harga_pemeriksaan" value="<?php echo isset($data['harga_pemeriksaan'])?$data['harga_pemeriksaan']:'';?>" class="form-control" placeholder="Harga Pemeriksaan">
						  </div>
						</div>
						
							<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Urutan</label>
						    <input type="text" name="urutan_pemeriksaan" value="<?php echo isset($data['urutan_pemeriksaan'])?$data['urutan_pemeriksaan']:'';?>" class="form-control" placeholder="Urutan Pemeriksaan">
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
				
		$( "#id_satuan" ).autocomplete({
			source: "<?php echo site_url('master/get_autocomplete_get_satuan_pemeriksaan');?>",
			select: function(event, ui){ 
				event.preventDefault();
				$('[name="id_satuan"]').val(ui.item.id_satuan); 
			}, focus: function(event, ui){
				event.preventDefault();
				$('[name="id_satuan"]').val(ui.item.id_satuan);  
			}
		});
		
			

	});
		
 </script>