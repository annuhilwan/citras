<form role="form bor-rad"  action="<?php echo base_url().'master/add_kecamatan'?>" method="post">
  <div class="box-body">
    <div class="row">
          
						
					
						<div class="col-md-6">
						  <div class="form-group">
						    <label for="">Nama Kecamatan</label>
						    <input type="hidden" name="id" value="<?php echo isset($data['id'])?$data['id']:'';?>" class="form-control" placeholder="Nama Kecamatan">
						    <input type="text" name="nama_kecamatan" value="<?php echo isset($data['nama_kecamatan'])?$data['nama_kecamatan']:'';?>" class="form-control" placeholder="Nama Kecamatan">
						  </div>
						</div>
					
					
		
        
          
                      
        </div>
        
        <div class="box-footer sub-btn-wdt">
          <button type="submit" name="submit" value="add" class="btn btn-success wdt-bg">Add</button>
        </div>
        
      </form>