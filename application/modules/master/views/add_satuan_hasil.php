<form role="form bor-rad"  action="<?php echo base_url().'master/add_satuan_hasil'?>" method="post">
  <div class="box-body">
    <div class="row">
          
						
						
							
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Nama Satuan Hasil</label>
						    <input type="hidden" name="id" value="<?php echo isset($data['id'])?$data['id']:'';?>" class="form-control" >
						    <input type="text" name="nama_satuan_hasil" value="<?php echo isset($data['nama_satuan_hasil'])?$data['nama_satuan_hasil']:'';?>" class="form-control" placeholder="Nama Satuan Hasil">
						  </div>
						</div>
					
					
		
        
          
                      
        </div>
        
        <div class="box-footer sub-btn-wdt">
          <button type="submit" name="submit" value="add" class="btn btn-success wdt-bg">Add</button>
        </div>
        
      </form>