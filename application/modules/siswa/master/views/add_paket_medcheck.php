<form role="form bor-rad" enctype="multipart/form-data" action="<?php echo base_url().'master/add_paket_medcheck'?>" method="post">
  <div class="box-body">
    <div class="row">
          
						
					
						<div class="col-md-6">
						  <div class="form-group">
						    <label for="">Nama Paket</label>
						    <input type="hidden" name="id" value="<?php echo isset($data['id'])?$data['id']:'';?>" class="form-control">
						    <input type="text" name="nama_paket" value="<?php echo isset($data['nama_paket'])?$data['nama_paket']:'';?>" class="form-control" placeholder="Nama Paket">
						  </div>
						</div>
						
						<div class="col-md-6">
						  <div class="form-group">
						    <label for="">Harga Paket</label>
						    <input type="text" name="harga_paket" value="<?php echo isset($data['harga_paket'])?$data['harga_paket']:'';?>" class="form-control" placeholder="Harga Paket">
						  </div>
						</div>
					
					
		
        
          
                      
        </div>
        
        <div class="box-footer sub-btn-wdt">
          <button type="submit" name="submit" value="add" class="btn btn-success wdt-bg">Add</button>
        </div>
        
      </form>