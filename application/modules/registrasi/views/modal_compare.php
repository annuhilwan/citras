<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare Years Form</title>

    <style type="text/css">
        ul.ui-autocomplete {
            z-index: 9999;  /* Ensure autocomplete dropdown appears above modal */
        }
    </style>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- jQuery UI -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>

<form class="tagForm" id="tag-form" role="form bor-rad" action="<?php echo site_url('registrasi/save_compare_resume'); ?>" method="post">
    <div class="box-body">
        <div class="row">
            <div class="form-group has-feedback">
                <input type="hidden" name="id_pelayanan" value="<?php echo $idPasien; ?>" class="form-control">
            </div>
            <div class="form-group has-feedback">
                <label for="year1">Tahun 1 :</label>
                <input id="year1" name="year1" class="form-control" type="text" placeholder="Enter Year 1">
            </div>
            <div class="form-group has-feedback">
                <label for="year2">Tahun 2 :</label>
                <input id="year2" name="year2" class="form-control" type="text" placeholder="Enter Year 2">
            </div>
        </div>
        <div class="box-footer sub-btn-wdt">
            <input id="tag-form-submit" type="submit" class="btn btn-primary" value="Submit Data">
        </div>
    </div>
</form>

<script>
    $(document).ready(function() {
        var idPasien = "<?php echo $idPasien; ?>"; // Get the PHP variable into JavaScript

        // Fetch available years dynamically via an AJAX request
        $.ajax({
            url: "<?php echo site_url('registrasi/get_years'); ?>",  // The endpoint to get the years
            method: "GET",
            success: function(data) {
                var years = JSON.parse(data);  // Parse the JSON response

                // Autocomplete for year1
                $('#year1').autocomplete({
                    source: years.map(function(year) { return year.year; }),  // Extract the year from each object
                    minLength: 1,  // Start autocomplete after 1 character
                });

                // Autocomplete for year2
                $('#year2').autocomplete({
                    source: years.map(function(year) { return year.year; }),  // Extract the year from each object
                    minLength: 1,  // Start autocomplete after 1 character
                });
            },
            error: function() {
                alert("Error loading years");
            }
        });

        $('#tag-form-submit').on('click', function(e) {
            e.preventDefault();  // Prevent the default form submission

            // Get the manually entered values for year1 and year2
            var year1 = $('#year1').val();
            var year2 = $('#year2').val();

            // Check if both years are entered
            if (year1 && year2) {
                // Check if the years are valid (only 4-digit years)
                var yearPattern = /^[0-9]{4}$/;

                if (yearPattern.test(year1) && yearPattern.test(year2)) {
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
                    alert('Please enter valid years (4-digit format).');
                }
            } else {
                alert('Please enter both Year 1 and Year 2.');
            }
            return false; // Prevent default form submission
        });
    });
</script>

</body>
</html>
