<form role="form bor-rad" enctype="multipart/form-data" action="<?php echo base_url().'master/add_asuransi'?>" method="post">
  <div class="box-body">
    <div class="row">
          
						
					
						<div class="col-md-6">
						  <div class="form-group">
						    <label for="">Nama Asuransi</label>
						    <input type="hidden" name="id" value="<?php echo isset($data['id'])?$data['id']:'';?>" class="form-control" placeholder="Nama Asuransi">
						    <input type="text" name="nama_asuransi" value="<?php echo isset($data['nama_asuransi'])?$data['nama_asuransi']:'';?>" class="form-control" placeholder="Nama Asuransi">
						  </div>
						</div>
					
					
		
        
          
                      
        </div>
        
        <div class="box-footer sub-btn-wdt">
          <button type="submit" name="submit" value="add" class="btn btn-success wdt-bg">Add</button>
        </div>
        
      </form>