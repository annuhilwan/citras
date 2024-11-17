<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Checkup Report</title>

    <!-- Styles -->
    <style>
        h1 {
            text-align: center;
        }

        .div-subtitle {
            text-align: center;
            margin-top: -15px;
        }

        .font-subtitle {
            font-size: 12px;
            font-style: italic;
            font-weight: bold;
        }

        /* Custom print styles */
        @media print {
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
            }

            /* Remove hyperlinks */
            a {
                color: black !important;
                text-decoration: none !important; /* Removes underline */
            }

            /* Hide specific elements during print */
            .content-wrapper, .box-body {
                display: block;
            }

            .btn {
                display: none; /* Hide buttons during print */
            }

            .box-tools, .thead-light, .div-subtitle, .font-subtitle, .chart-title {
                display: none; /* Hide titles and non-relevant elements during print */
            }

            /* Hide the $diagnosa_top_ten table during print */
            .diagnosa-top-ten-table {
                display: none;
            }

            /* Ensure chart fits well during print */
            #chart_fit_div, #chart_diagnosa_div, #chart_div, #chart_top_ten, #chart_penunjang_all {
                width: 100% !important;
                height: auto !important;
                page-break-inside: avoid; /* Prevent charts from being cut off */
            }

            /* Remove unnecessary page breaks between charts */
            #chart_fit_div,
            #chart_diagnosa_div,
            #chart_div,
            #chart_top_ten,
            #chart_penunjang_all {
                page-break-before: auto; /* Removed redundant page-break-before: always */
            }

            .page-break {
                page-break-before: always;
            }

            /* Reduce margins and scaling for better fitting */
            @page {
                margin: 10mm; /* Reduce margin to prevent unnecessary space */
            }

            /* Optional: Adjust chart size for better scaling */
            #chart_fit_div,
            #chart_diagnosa_div,
            #chart_div,
            #chart_top_ten,
            #chart_penunjang_all {
                height: 500px !important; /* Adjust height to fit content */
            }

            .content-wrapper {
                padding-bottom: 20px;
            }
        }
    </style>

    <!-- Google Charts and External Scripts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
</head>
<body>

<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <a class="btn btn-primary btn-sm" href="<?php echo site_url('/registrasi/list_data_pelayanan_perusahaan_by_search/'); ?>" role="button">Back</a><br /><br />
                        <div class="box-tools">
                            <a class="btn btn-primary btn-sm" href="<?php echo site_url('/registrasi/list_data_pasien_bar_chart/'.$data['id']); ?>" role="button">Compare</a>
                        </div>
                    </div>
                    <div class="box-body">
                        <!-- Print Button -->
                        <button class="btn btn-warning btn-sm" onclick="window.print()">Print</button><br /><br />

                        <!-- Chart 1 Title Hidden in Print -->
                        <h1 class="chart-title"><a href="<?php echo site_url('/registrasi/list_data_detail_chart_kategori_medcheck/'.$data['id']); ?>" target="_blank" class="blue">Kategori Kesehatan Medical Checkup</a></h1>
                        <div class="div-subtitle"><span class="font-subtitle">Medical Checkup Health Category</span></div>
                        <div id="chart_fit_div"></div>

                        <!-- Chart 2 Title Hidden in Print -->
                        <h1 class="chart-title"><a href="<?php echo site_url('/registrasi/list_data_detail_chart_diagnosa_perbagian/'.$data['id']); ?>" target="_blank" class="blue">Jumlah Temuan Diagnosa</a></h1>
                        <div class="div-subtitle"><span class="font-subtitle">Number of Diagnostic Finding</span></div>
                        <div id="chart_diagnosa_div"></div>

                        <!-- Chart 3 Title Hidden in Print -->
                        <h1 class="chart-title"><a href="<?php echo site_url('/registrasi/list_data_detail_chart_diagnosa_perbagian/'.$data['id']); ?>" target="_blank" class="blue">Diagnosa 10 Terbanyak</a></h1>
                        <div class="div-subtitle"><span class="font-subtitle">Most 10 Diagnostics</span></div>

                        <table class="table diagnosa-top-ten-table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Urutan</th>
                                    <th scope="col">Nama Diagnosa</th>
                                    <th scope="col">Jumlah Temuan</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $first = true;
                                    $no = 1;
                                    foreach ((Array) $diagnosa_top_ten as $key => $val) { 
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $no ; ?></th>
                                        <td><?php echo $val['hasil_resume'] ; ?></td>
                                        <td><?php echo $val['jumlah'] ; ?></td>
                                        <td><a href="<?php echo site_url('/registrasi/list_grafik_per_bagian/'.$data['id'].'/'.urlencode($val['hasil_resume'])); ?>" target="_blank" class="blue">Lihat Grafik</a></td>
                                    </tr>
                                <?php 
                                    $no++;
                                    }
                                ?>
                            </tbody>
                        </table>

                        <div id="chart_top_ten"></div>

                        <!-- Gender Chart Title Hidden in Print -->
                        <h1 class="chart-title"><a href="<?php echo site_url('/registrasi/list_data_detail_chart_jenis_kelamin/'.$data['id']); ?>" target="_blank" class="blue">Penyebaran Data Kelamin</a></h1>
                        <div class="div-subtitle"><span class="font-subtitle">Spread of Gender Data</span></div>
                        <div id="chart_div"></div>

                        <?php 
                            foreach ((Array) $penunjang as $keyp => $valp) { 
                        ?>
                            <!-- Supporting Data Chart Title Hidden in Print -->
                            <h1 class="chart-title"><a href="<?php echo site_url('/registrasi/list_data_detail_penunjang_medcheck_klik/'.$data['id'].'/'.$valp->jenis_pemeriksaan); ?>" target="_blank" class="blue">
                                Data Penunjang <?php echo $valp->jenis_pemeriksaan; ?>
                            </a></h1>
                            <div class="div-subtitle"><span class="font-subtitle"><?php echo $valp->jenis_pemeriksaan; ?> Supporting Data</span></div>
                            <div id="chart_penunjang_all['<?php echo $valp->jenis_pemeriksaan; ?>']"></div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- JavaScript -->
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    google.charts.setOnLoadCallback(fitOrNot);
    google.charts.setOnLoadCallback(diagnosa);
    google.charts.setOnLoadCallback(top10);
    google.charts.setOnLoadCallback(penunjangall);
    google.charts.setOnLoadCallback(penunjang);

    function drawChart() {
        var jsonData = $.ajax({
            url: "<?php echo base_url() . 'registrasi/getdatajeniskelamin/'.$data['id'] ?>",
            dataType: "json",
            async: false
        }).responseText;

        var data = new google.visualization.DataTable(jsonData);
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, {width: 900, height: 500, pieSliceText: 'value'});
    }

    function fitOrNot() {
        var jsonData = $.ajax({
            url: "<?php echo base_url() . 'registrasi/getdatafitornot/'.$data['id'] ?>",
            dataType: "json",
            async: false
        }).responseText;

        var data = new google.visualization.DataTable(jsonData);
        var chart = new google.visualization.PieChart(document.getElementById('chart_fit_div'));
        chart.draw(data, {width: 900, height: 500, pieSliceText: 'value'});
    }

    function diagnosa() {
        var jsonData = $.ajax({
            url: "<?php echo base_url() . 'registrasi/getdatadiagnosa/'.$data['id'] ?>",
            dataType: "json",
            async: false
        }).responseText;

        var data = new google.visualization.DataTable(jsonData);
        var chart = new google.visualization.PieChart(document.getElementById('chart_diagnosa_div'));
        chart.draw(data, {width: 900, height: 1500, pieSliceText: 'value'});
    }

    function top10() {
        var jsonData = $.ajax({
            url: "<?php echo base_url() . 'registrasi/getdatatopten/'.$data['id'] ?>",
            dataType: "json",
            async: false
        }).responseText;

        var data = new google.visualization.DataTable(jsonData);
        var chart = new google.visualization.PieChart(document.getElementById('chart_top_ten'));
        chart.draw(data, {width: 900, height: 500, pieSliceText: 'value'});
    }

    function penunjangall() {
        var jsonData = $.ajax({
            url: "<?php echo base_url() . 'registrasi/getdatapenunjangall/'.$data['id'] ?>",
            dataType: "json",
            async: false
        }).responseText;

        var data = new google.visualization.DataTable(jsonData);
        var chart = new google.visualization.PieChart(document.getElementById('chart_penunjang_all'));
        chart.draw(data, {width: 900, height: 500, pieSliceText: 'value'});
    }

    function penunjang() {
        var jsonData = $.ajax({
            url: "<?php echo base_url() . 'registrasi/getdatapenunjang/'.$data['id'] ?>",
            dataType: "json",
            async: false
        }).responseText;

        var data = new google.visualization.DataTable(jsonData);
        var chart = new google.visualization.PieChart(document.getElementById('chart_penunjang'));
        chart.draw(data, {width: 900, height: 500, pieSliceText: 'value'});
    }

    // Save as PDF
    function saveAsPDF(chartId) {
        const { jsPDF } = window.jspdf;
        var chartElement = document.getElementById(chartId);

        // Create a new jsPDF instance
        var doc = new jsPDF();

        // Capture the chart image as base64
        html2canvas(chartElement).then(function (canvas) {
            var imgData = canvas.toDataURL('image/jpeg'); // Convert to base64 image
            doc.addImage(imgData, 'JPEG', 10, 10, 180, 160); // Add image to PDF (adjust size as needed)
            doc.save('chart.pdf'); // Save PDF
        });
    }
</script>

</body>
</html>
