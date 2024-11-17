<form role="form bor-rad"  action="<?php echo base_url().'master/add_pertanyaan'?>" method="post">
  <div class="box-body">
    <div class="row">
          
						
						<div class="form-group has-feedback">
								<label for="exampleInputstatus">Kategori Pertanyaan:</label>
								<select id="kategori_pertanyaan"  name="kategori_pertanyaan" class="form-control">
									<option value="">-- Select One --</option>
									<option <?php if ($data['kategori_pertanyaan'] == "FISIK - ANAMNESA" ) echo 'selected' ; ?> value="FISIK - ANAMNESA">FISIK - ANAMNESA</option>;
									<option <?php if ($data['kategori_pertanyaan'] == "FISIK - MATA" ) echo 'selected' ; ?> value="FISIK - MATA">FISIK - MATA</option>;
									<option <?php if ($data['kategori_pertanyaan'] == "FISIK - PERUT" ) echo 'selected' ; ?> value="FISIK - PERUT">FISIK - PERUT</option>;
									<option <?php if ($data['kategori_pertanyaan'] == "FISIK - LEHER" ) echo 'selected' ; ?> value="FISIK - LEHER">FISIK - LEHER</option>;
									<option <?php if ($data['kategori_pertanyaan'] == "FISIK - TENGGOROKAN" ) echo 'selected' ; ?> value="FISIK - TENGGOROKAN">FISIK - TENGGOROKAN</option>;
									<option <?php if ($data['kategori_pertanyaan'] == "FISIK - MULUT" ) echo 'selected' ; ?> value="FISIK - MULUT">FISIK - MULUT</option>;
									<option <?php if ($data['kategori_pertanyaan'] == "FISIK - TELINGA" ) echo 'selected' ; ?> value="FISIK - TELINGA">FISIK - TELINGA</option>;
									<option <?php if ($data['kategori_pertanyaan'] == "FISIK - HIDUNG" ) echo 'selected' ; ?> value="FISIK - HIDUNG">FISIK - HIDUNG</option>;
									<option <?php if ($data['kategori_pertanyaan'] == "FISIK - THORAX" ) echo 'selected' ; ?> value="FISIK - THORAX">FISIK - THORAX</option>;
									<option <?php if ($data['kategori_pertanyaan'] == "FISIK - COLPULMO" ) echo 'selected' ; ?> value="FISIK - COLPULMO">FISIK - COL / PULMO</option>;
									<option <?php if ($data['kategori_pertanyaan'] == "FISIK - EXTRIMITAS" ) echo 'selected' ; ?> value="FISIK - EXTRIMITAS">FISIK - EXTRIMITAS</option>;
									<option <?php if ($data['kategori_pertanyaan'] == "FISIK - NEUROMUSCULAR" ) echo 'selected' ; ?> value="FISIK - NEUROMUSCULAR">FISIK - NEUROMUSCULAR</option>;
									<option <?php if ($data['kategori_pertanyaan'] == "FISIK - KULIT" ) echo 'selected' ; ?> value="FISIK - KULIT">FISIK - KULIT</option>;
									<option <?php if ($data['kategori_pertanyaan'] == "FISIK - SISTEM ALAT GERAK TANGAN" ) echo 'selected' ; ?> value="FISIK - SISTEM ALAT GERAK TANGAN">FISIK - SISTEM ALAT GERAK TANGAN</option>;
									<option <?php if ($data['kategori_pertanyaan'] == "FISIK - ABDOMEN" ) echo 'selected' ; ?> value="FISIK - ABDOMEN">FISIK - ABDOMEN</option>;
									<option <?php if ($data['kategori_pertanyaan'] == "FISIK - GENITALIA" ) echo 'selected' ; ?> value="FISIK - GENITALIA">FISIK - GENITALIA</option>;
									<option <?php if ($data['kategori_pertanyaan'] == "FISIK - KETERANGAN LAIN" ) echo 'selected' ; ?> value="FISIK - KETERANGAN LAIN">FISIK - KETERANGAN LAIN</option>;
								</select>
							</div>
							
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Nama Pertanyaan </label>
						    <input type="hidden" name="id" value="<?php echo isset($data['id'])?$data['id']:'';?>" class="form-control" >
						    <input type="text" name="nama_pertanyaan" value="<?php echo isset($data['nama_pertanyaan'])?$data['nama_pertanyaan']:'';?>" class="form-control" placeholder="Nama Pertanyaan">
						  </div>
						</div>
						
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Pertanyaan Inggris</label>
						    <input type="text" name="pertanyaan_inggris" value="<?php echo isset($data['pertanyaan_inggris'])?$data['pertanyaan_inggris']:'';?>" class="form-control" placeholder="Pertanyaan Inggris">
						  </div>
						</div>
						
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Default Jawaban</label>
						    <input type="text" name="default_jawaban" value="<?php echo isset($data['default_jawaban'])?$data['default_jawaban']:'';?>" class="form-control" placeholder="Default Jawaban">
						  </div>
						</div>
						
						<div class="form-group has-feedback">
						  <div class="form-group">
						    <label for="">Urutan</label>
						    <input type="text" name="urutan" value="<?php echo isset($data['urutan'])?$data['urutan']:'';?>" class="form-control" placeholder="Urutan">
						  </div>
						</div>
					
					
		
        
          
                      
        </div>
        
        <div class="box-footer sub-btn-wdt">
          <button type="submit" name="submit" value="add" class="btn btn-success wdt-bg">Add</button>
        </div>
        
      </form>