<form role="form bor-rad" enctype="multipart/form-data" action="<?php echo base_url().'master/add_kelurahan'?>" method="post">
  <div class="box-body">
    <div class="row">
          
						
					
						<div class="col-md-6">
						  <div class="form-group">
						    <label for="">Nama Kelurahan</label>
						    <input type="hidden" name="id" value="<?php echo isset($data['id'])?$data['id']:'';?>" class="form-control" placeholder="Nama Kelurahan">
						    <input type="text" name="nama_kelurahan" value="<?php echo isset($data['nama_kelurahan'])?$data['nama_kelurahan']:'';?>" class="form-control" placeholder="Nama Kelurahan">
						  </div>
						</div>
					
					
		
        
          
                      
        </div>
        
        <div class="box-footer sub-btn-wdt">
          <button type="submit" name="submit" value="add" class="btn btn-success wdt-bg">Add</button>
        </div>
        
      </form>