<form role="form bor-rad" enctype="multipart/form-data" action="<?php echo base_url().'master/add_identitas'?>" method="post">
  <div class="box-body">
    <div class="row">
          
						
					
						<div class="col-md-6">
						  <div class="form-group">
						    <label for="">Nama Identitas</label>
						    <input type="hidden" name="id" value="<?php echo isset($data['id'])?$data['id']:'';?>" class="form-control" placeholder="Nama Identitas">
						    <input type="text" name="nama_identitas" value="<?php echo isset($data['nama_identitas'])?$data['nama_identitas']:'';?>" class="form-control" placeholder="Nama Identitas">
						  </div>
						</div>
					
					
		
        
          
                      
        </div>
        
        <div class="box-footer sub-btn-wdt">
          <button type="submit" name="submit" value="add" class="btn btn-success wdt-bg">Add</button>
        </div>
        
      </form>