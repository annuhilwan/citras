<form role="form bor-rad" enctype="multipart/form-data" action="<?php echo base_url().'master/add_perusahaan'?>" method="post">
  <div class="box-body">
    <div class="row">
          
						
					
						<div class="col-md-6">
						  <div class="form-group">
						    <label for="">Nama Perusahaan</label>
						    <input type="hidden" name="id" value="<?php echo isset($data['id'])?$data['id']:'';?>" class="form-control" >
						    <input type="text" name="nama_perusahaan" value="<?php echo isset($data['nama_perusahaan'])?$data['nama_perusahaan']:'';?>" class="form-control" placeholder="Nama Perusahaan">
						  </div>
						  <div class="form-group">
						    <label for="">Email Perusahaan</label>
						    <input type="text" name="user_id_perusahaan" value="<?php echo isset($data['user_id_perusahaan'])?$data['user_id_perusahaan']:'';?>" class="form-control" placeholder="User ID Perusahaan">
						  </div>
						   <div class="form-group">
						    <label for="">Password</label>
						    <input type="password" name="password_perusahaan" value="<?php echo isset($data['password_perusahaan'])?$data['password_perusahaan']:'';?>" class="form-control" placeholder="Password">
						  </div>
						  <div class="form-group">
						    <label for="">Alamat 1</label>
						    <input type="text" name="alamat_satu" value="<?php echo isset($data['alamat_satu'])?$data['alamat_satu']:'';?>" class="form-control" placeholder="Alamat 1 Perusahaan">
						  </div> 
						  <div class="form-group">
						    <label for="">Alamat 2</label>
						    <input type="text" name="alamat_dua" value="<?php echo isset($data['alamat_dua'])?$data['alamat_dua']:'';?>" class="form-control" placeholder="Alamat 2 Perusahaan">
						  </div>
						  <div class="form-group">
						    <label for="">Telp</label>
						    <input type="text" name="no_telp" value="<?php echo isset($data['no_telp'])?$data['no_telp']:'';?>" class="form-control" placeholder="Telp Perusahaan">
						  </div>
						</div>
					
					
		
        
          
                      
        </div>
        
        <div class="box-footer sub-btn-wdt">
          <button type="submit" name="submit" value="add" class="btn btn-success wdt-bg">Add</button>
        </div>
        
      </form>