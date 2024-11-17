<div class="box-body">
    <div class="row">
		<?php foreach($arrTipePemeriksaan as $tipePeriksa) {
		    $arrTipePeriksaCheck = [];
		    if ($arrDataPaket['tipe_pemeriksaan'] != null) {
		        $arrTipePeriksaCheck = explode(',', $arrDataPaket['tipe_pemeriksaan']);
		    }
		    $checking = (in_array($tipePeriksa['id'], $arrTipePeriksaCheck))?'checked':'';
		    echo '<div class="form-check col-md-6">
			<div class="row">
				<div class="col-md-1">
					<input type="checkbox" name="tipecheck[]" class="form-check-input" id="tipecheck'.$tipePeriksa['id'].'" value="'.$tipePeriksa['id'].'" '.$checking.'>
				</div>
				<div class="col-md-10">
					<label class="form-check-label" for="tipecheck">'.$tipePeriksa['name'].'</label>
				</div>
			</div>
			</div>
			<input type="hidden" id="label_pemeriksaan" name="label_pemeriksaan" value="'.$arrDataPaket['tipe_pemeriksaan'].'"  class="form-control">
			<input type="hidden" id="id_paket_periksa" name="id_paket_periksa" value="'.$arrDataPaket['id'].'"  class="form-control">';
		} ?>
    </div>
</div>
<div class="box-footer sub-btn-wdt">
    <button type="button" class="btn btn-success wdt-bg" onclick="validateLabel()" data-dismiss="modal">Save</button>
</div>
<script>
    $(document).ready(function() {
        $('input[name="tipecheck[]"]').on('click', function() {
            var tipeCheckVal = [];
            $('input[name="tipecheck[]"]').each(function() {
                if ($(this).is(':checked')) {
                    tipeCheckVal.push($(this).val());
                }
            });
            var newTipeVal = tipeCheckVal.join(",");
            $('#label_pemeriksaan').val(newTipeVal);
        });
    });
    function validateLabel() {
        var c=confirm("Simpan label ?")
        if (c==true) {
            var id_paket = $('#id_paket_periksa').val();
            $.ajax({
              url : $('body').attr('data-base-url') + 'master/save_pemeriksaan_label_check_add',
              method: 'post', 
              data : {
                id_paket: id_paket,
                label_id: $('#label_pemeriksaan').val()
              }
            }).done(function(data) {
              location.href = $('body').attr('data-base-url') + 'master/detail_master_paket/'+id_paket;
            });
            return true;
        } else {
            return false;
        }
    }
</script>