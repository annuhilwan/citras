<form role="form bor-rad" enctype="multipart/form-data" action="<?php echo base_url().'master/add_kota'?>" method="post">
  <div class="box-body">
    <div class="row">
          
						
					
						<div class="col-md-6">
						  <div class="form-group">
						    <label for="">Nama Kota</label>
						    <input type="hidden" name="id" value="<?php echo isset($data['id'])?$data['id']:'';?>" class="form-control" style="text-transform:uppercase" placeholder="Nama Kota">
						    <input type="text" name="nama_kota" value="<?php echo isset($data['nama_kota'])?$data['nama_kota']:'';?>" class="form-control" style="text-transform:uppercase" placeholder="Nama Kota">
						  </div>
						</div>
					
					
		
        
          
                      
        </div>
        
        <div class="box-footer sub-btn-wdt">
          <button type="submit" name="submit" value="add" class="btn btn-success wdt-bg">Add</button>
        </div>
        
      </form>