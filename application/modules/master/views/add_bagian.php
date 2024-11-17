<form role="form bor-rad" enctype="multipart/form-data" action="<?php echo base_url().'master/add_bagian'?>" method="post">
  <div class="box-body">
    <div class="row">
          
						
					
						<div class="col-md-6">
						  <div class="form-group">
						    <label for="">Nama Bagian</label>
						    <input type="hidden" name="id" value="<?php echo isset($data['id'])?$data['id']:'';?>" class="form-control" placeholder="Nama Bagian">
						    <input type="text" name="nama_bagian" value="<?php echo isset($data['nama_bagian'])?$data['nama_bagian']:'';?>" class="form-control" placeholder="Nama Bagian">
						  </div>
						</div>
					
					
		
        
          
                      
        </div>
        
        <div class="box-footer sub-btn-wdt">
          <button type="submit" name="submit" value="add" class="btn btn-success wdt-bg">Add</button>
        </div>
        
      </form>