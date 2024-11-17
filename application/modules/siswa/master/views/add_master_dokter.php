<form role="form bor-rad" enctype="multipart/form-data" action="<?php echo base_url().'master/add_save_master_dokter'?>" method="post">
  <div class="box-body">
    <div class="row">
          
						
					
						<div class="col-md-6">
						  <div class="form-group">
						    <label for="">Nama Dokter</label>
						    <input type="hidden" name="id" value="<?php echo isset($data['id'])?$data['id']:'';?>" class="form-control">
						    <input type="text" name="nama_dokter" value="<?php echo isset($data['nama_dokter'])?$data['nama_dokter']:'';?>" class="form-control" placeholder="Nama Dokter">
						  </div>
						</div>
						
                      
        </div>
        
        <div class="box-footer sub-btn-wdt">
          <button type="submit" name="submit" value="add" class="btn btn-success wdt-bg">Add</button>
        </div>
        
      </form>