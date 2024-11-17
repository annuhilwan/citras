<form role="form bor-rad" enctype="multipart/form-data" action="<?php echo base_url().'master/add_save_master_jawaban_resume'?>" method="post">
  <div class="box-body">
    <div class="row">
          
						
					
						<div class="col-md-6">
						  <div class="form-group">
						    <label for="">Kategori</label>
						    <input type="hidden" name="id" value="<?php echo isset($data['id'])?$data['id']:'';?>" class="form-control">
						   	<select id="kelompok"  name="kelompok" class="form-control">
									<option value="">-- Select One --</option>
									<option <?php if ($data['kelompok'] == "MODAL_ANJURAN" ) echo 'selected' ; ?> value="MODAL_ANJURAN">ANJURAN</option>;
									<option <?php if ($data['kelompok'] == "MODAL_DIAGNOSA" ) echo 'selected' ; ?> value="MODAL_DIAGNOSA">DIAGNOSA</option>;
									<option <?php if ($data['kelompok'] == "MODAL_USG" ) echo 'selected' ; ?> value="MODAL_USG">USG</option>;
									<option <?php if ($data['kelompok'] == "MODAL_TREADMILL" ) echo 'selected' ; ?> value="MODAL_TREADMILL">TREADMILL</option>;
									<option <?php if ($data['kelompok'] == "MODAL_PAP_SMEAR" ) echo 'selected' ; ?> value="MODAL_PAP_SMEAR">PAP_SMEAR</option>;
									<option <?php if ($data['kelompok'] == "MODAL_KESIMPULAN" ) echo 'selected' ; ?> value="MODAL_KESIMPULAN">KESIMPULAN</option>;
									</select>
						  </div>
						</div>
						
						<div class="col-md-6">
						  <div class="form-group">
						    <label for="">Jawaban Resume</label>
						    <input type="text" name="deskripsi" value="<?php echo isset($data['deskripsi'])?$data['deskripsi']:'';?>" class="form-control" placeholder="Jawaban">
						  </div>
						</div>
						
                      
        </div>
        
        <div class="box-footer sub-btn-wdt">
          <button type="submit" name="submit" value="add" class="btn btn-success wdt-bg">Add</button>
        </div>
        
      </form>