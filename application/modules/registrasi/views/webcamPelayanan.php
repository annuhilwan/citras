<style type="text/css">
</style>
<div style="width: 100%;">
    <div id="my_camera" style="float: left; width: 531px; background: black; margin-left: 20px;"></div>
    <div id="my_result" style="float: left; width: 531px; background: black; margin-left: 20px;"></div>
    
    <div style="float: left; width: 218px; margin-left: 20px;">
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url().'registrasi/save_picture_medcheck_webcam' ?>" class="form-label-left">
        <?php  
          if(file_exists('assets/pasien/'.$arrDataDetailPasien['picture']) && isset($arrDataDetailPasien['picture'])){
          $patient_pic = $arrDataDetailPasien['picture'];
          }else{
          $patient_pic = 'pasien.png';}
    	?>
    	<input type="hidden" id="patient_pic" name="patient_pic" value="" />
        <input type="hidden" id="filePatientOld" name="filePatientOld" value="<?php echo isset($patient_pic)?$patient_pic:'pasien.png';?>" />
    	<input type="hidden" id="id_patient" name="id_patient" value="<?php echo $arrDataDetailPasien['id_pasien']; ?>" />
    	<input type="hidden" id="id_trans" name="id_trans" value="<?php echo $arrDataPasien['id']; ?>" />
    	<button type="button" onclick="javascript:void(take_snapshot())" class="btn btn-primary">Take Picture</button>
    	<button type="submit" class="btn btn-primary">Save</button>
    	</form>
    	<button type="button" onclick="backmedcheck()" class="btn btn-primary">Back</button>
    </div>
</div>

<script src="<?php echo base_url('/assets/js/webcam/webcam.js');?>"></script>
<script language="JavaScript">
    Webcam.set({
		width: 1280,
		height: 720,
		crop_width: 531,
		crop_height: 708,
		image_format: 'jpeg',
		jpeg_quality: 100,
		force_flash: false,
		flip_horiz: true,
		fps: 45
	});
	Webcam.attach( '#my_camera' );
		
	function take_snapshot() {
		Webcam.snap( function(data_uri) {
			document.getElementById('my_result').innerHTML = '<img src="'+data_uri+'"/>';
			document.getElementById('patient_pic').value = data_uri;
		});
	}
	
	function backmedcheck() {
	    window.location.href = '<?php echo site_url('/registrasi/detailMedicalCheckups/'.$arrDataPasien['id']); ?>';
	}
</script>