<div class="box-body">
    <div class="row">
		<?php foreach($arrPertanyaanFisik as $tanyaFisik) {
		    $kategoriFisik = str_replace('FISIK - ','',$tanyaFisik['kategori_pertanyaan']);
		    if (count($arrPertanyaanFisikCheck) > 0) {
		        $nameid = (in_array($tanyaFisik['id'], $arrPertanyaanFisikCheck))?'fisikchecked':'fisikcheck';
		        $checking = (in_array($tanyaFisik['id'], $arrPertanyaanFisikCheck))?'checked':'';
		        $disabled = (in_array($tanyaFisik['id'], $arrPertanyaanFisikCheck))?'disabled':'';
		    } else {
		        $nameid = 'fisikcheck';
		        $checking = (in_array($tanyaFisik['id'], explode(",", $id_fisik)))?'':'checked';
		        $disabled = '';
		    }
			echo '<div class="form-check col-md-6">
			<div class="row">
				<div class="col-md-1">
					<input type="checkbox" name="'.$nameid.'[]" class="form-check-input" id="'.$nameid.$tanyaFisik['id'].'" value="'.$tanyaFisik['id'].'" '.$checking.' '.$disabled.'>
				</div>
				<div class="col-md-11">
					<label class="form-check-label" for="'.$nameid.'">['.$kategoriFisik.'] '.$tanyaFisik['nama_pertanyaan'].'</label>
				</div>
			</div>
			</div>';
		} ?>
    </div>
</div>
<div class="box-footer sub-btn-wdt">
    <?php if (count($arrPertanyaanFisikCheck) > 0) { ?>
        <button type="button" class="btn btn-success wdt-bg" onclick="validateFisik()" data-dismiss="modal">Save</button>
    <?php } else { ?>
        <button type="button" class="btn btn-success wdt-bg" data-dismiss="modal">Oke</button>
    <?php } ?>
</div>
<script>
$(document).ready(function() {
    $('input[name="fisikcheck[]"]').on('click', function() {
        var fisikUncheckVal = [];
        $('input[name="fisikcheck[]"]').each(function() {
            <?php if (count($arrPertanyaanFisikCheck) > 0) { ?>
            if ($(this).is(':checked')) {
                fisikUncheckVal.push($(this).val());
            }
            <?php } else { ?>
            if (!$(this).is(':checked')) {
                fisikUncheckVal.push($(this).val());
            }
            <?php } ?>
        });
        var newFisikVal = fisikUncheckVal.join(",");
        $('#pertanyaan_fisik').val(newFisikVal);
    });
});

    function validateFisik() {
        var c=confirm("Simpan pertanyaan fisik?")
        if (c==true) {
            var id_pelayanan = $('#id_pelayanan_fisik').val();
            $.ajax({
              url : $('body').attr('data-base-url') + 'registrasi/save_pertanyaan_check_add',
              method: 'post', 
              data : {
                id_pelayanan: id_pelayanan,
                fisik_id: $('#pertanyaan_fisik').val()
              }
            }).done(function(data) {
              location.href = $('body').attr('data-base-url') + 'registrasi/detailMedicalCheckups/'+id_pelayanan;
            });
            return true;
        } else {
            return false;
        }
    }
</script>