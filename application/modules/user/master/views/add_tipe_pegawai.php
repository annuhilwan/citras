<form role="form bor-rad" enctype="multipart/form-data" action="<?php echo base_url().'master/add_tipe_pegawai'?>" method="post">
  <div class="box-body">
    <div class="row">
          
						
					
						<div class="col-md-6">
						  <div class="form-group">
						    <label for="">Nama Tipe Pegawai</label>
						    <input type="hidden" name="id" value="<?php echo isset($data['id'])?$data['id']:'';?>" class="form-control" placeholder="Nama Tipe Pegawai">
						    <input type="text" name="nama_tipe_pegawai" value="<?php echo isset($data['nama_tipe_pegawai'])?$data['nama_tipe_pegawai']:'';?>" class="form-control" placeholder="Nama Tipe Pegawai">
						  </div>
						</div>
					
					
		
        
          
                      
        </div>
        
        <div class="box-footer sub-btn-wdt">
          <button type="submit" name="submit" value="add" class="btn btn-success wdt-bg">Add</button>
        </div>
        
      </form>