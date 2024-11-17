<form class="tagForm" id="tag-form" role="form bor-rad" action="<?php echo site_url('registrasi/save_compare_resume'); ?>" method="post">
    <div class="box-body">
        <div class="row">
            <div class="form-group has-feedback">
                <input type="hidden" name="id_pelayanan" value="<?php echo $idPasien; ?>" class="form-control"> <!-- Hidden input for ID -->
            </div>
            <div class="form-group has-feedback">
                <label for="year1">Tahun 1 :</label>
                <select id="year1" name="year1" class="form-control">
                    <option value="">-- Select One --</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                </select>
            </div>
            <div class="form-group has-feedback">
                <label for="year2">Tahun 2 :</label>
                <select id="year2" name="year2" class="form-control">
                    <option value="">-- Select One --</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                </select>
            </div>
        </div>
        <div class="box-footer sub-btn-wdt">
            <input id="tag-form-submit" type="submit" class="btn btn-primary" value="Submit Data">
        </div>
    </div>
</form>

<script>
	$(document).ready(function() {
		// Pass the PHP variable directly into JavaScript
		var idPasien = "<?php echo $idPasien; ?>"; // Get the PHP variable into JavaScript

		$('#tag-form-submit').on('click', function(e) {
			e.preventDefault();  // Prevent the default form submission

			// Get the selected values for year1 and year2
			var year1 = $('#year1').val();
			var year2 = $('#year2').val();

			// Check if both years are selected
			if (year1 && year2) {
				// Generate the URL with query parameters dynamically
				var redirectUrl = "<?php echo site_url('registrasi/detailMedicalCheckups/'); ?>/" + idPasien + "?year1=" + year1 + "&year2=" + year2;

				// Now submit the form using AJAX
				$.ajax({
					type: "POST",
					url: "<?php echo site_url('registrasi/save_compare_resume'); ?>",
					data: $('form.tagForm').serialize(),  // Serialize the form data
					success: function(response) {
						// Redirect to the new URL with the year parameters
						window.location.href = redirectUrl;
					},
					error: function() {
						alert('Error occurred while submitting the form.');
					}
				});
			} else {
				alert('Please select both Year 1 and Year 2.');
			}
			return false; // Prevent default form submission
		});
	});
</script>
