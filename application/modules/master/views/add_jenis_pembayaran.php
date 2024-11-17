<form role="form bor-rad" enctype="multipart/form-data" action="<?php echo base_url().'master/add_jenis_pembayaran'?>" method="post">
  <div class="box-body">
    <div class="row">
          
						
					
						<div class="col-md-6">
						  <div class="form-group">
						    <label for="">Nama Jenis Pembayaran</label>
						    <input type="hidden" name="id" value="<?php echo isset($data['id'])?$data['id']:'';?>" class="form-control" placeholder="Nama Jenis Pembayaran">
						    <input type="text" name="nama_jenis_pembayaran" value="<?php echo isset($data['nama_jenis_pembayaran'])?$data['nama_jenis_pembayaran']:'';?>" class="form-control" placeholder="Nama Jenis Pembayaran">
						  </div>
						</div>
					
					
		
        
          
                      
        </div>
        
        <div class="box-footer sub-btn-wdt">
          <button type="submit" name="submit" value="add" class="btn btn-success wdt-bg">Add</button>
        </div>
        
      </form>