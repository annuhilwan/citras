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
</style> 

<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <a class="btn btn-primary btn-sm" href="<?php echo site_url('/registrasi/list_data_medcheck_per_perusahaan/'); ?>" role="button">Back</a><br /><br />
                        <button onclick="printChart('chart_fit_div', 'Kategori Kesehatan Medical Checkup')" class="btn btn-success btn-sm">Print</button>
                        <div class="box-tools">
                            <a class="btn btn-primary btn-sm" href="<?php echo site_url('/registrasi/list_data_pasien_bar_chart_per_perusahaan/'.$data['id']); ?>" role="button">Compare</a>
                        </div>
                    </div>
                    <div class="box-body"> 
                        <h1><a href="<?php echo site_url('/registrasi/list_data_detail_chart_kategori_medcheck/'.$data['id']); ?>" target="_blank" class="blue">Kategori Kesehatan Medical Checkup</a></h1> 
                        <div class="div-subtitle"><span class="font-subtitle">Medical Checkup Health Category</span></div>
                        <div id="chart_fit_div"></div>  
                       

                        <h1><a href="<?php echo site_url('/registrasi/list_data_detail_chart_diagnosa_perbagian/'.$data['id']); ?>" target="_blank" class="blue">Jumlah Temuan Diagnosa</a></h1> 
                        <div class="div-subtitle"><span class="font-subtitle">Number of Diagnostic Finding</span></div>
                        <div id="chart_diagnosa_div"></div>  
                        <button onclick="printChart('chart_diagnosa_div', 'Jumlah Temuan Diagnosa')" class="btn btn-success btn-sm">Print</button>

                        <h1><a href="<?php echo site_url('/registrasi/list_data_detail_chart_diagnosa_perbagian/'.$data['id']); ?>" target="_blank" class="blue">Diagnosa 10 Terbanyak</a></h1> 
                        <div class="div-subtitle"><span class="font-subtitle">Most 10 Diagnostics</span></div>
                        <div id="chart_top_ten"></div>  
                        <button onclick="printChart('chart_top_ten', 'Diagnosa 10 Terbanyak')" class="btn btn-success btn-sm">Print</button>

                        <h1><a href="<?php echo site_url('/registrasi/list_data_detail_chart_jenis_kelamin/'.$data['id']); ?>" target="_blank" class="blue">Penyebaran Data Kelamin</a></h1> 
                        <div class="div-subtitle"><span class="font-subtitle">Spread of Gender Data</span></div>
                        <div id="chart_div"></div>  
                        <button onclick="printChart('chart_div', 'Penyebaran Data Kelamin')" class="btn btn-success btn-sm">Print</button>

                        <?php foreach ((Array) $penunjang AS $keyp => $valp) { ?>
                            <h1><a href="<?php echo site_url('/registrasi/list_data_detail_penunjang_medcheck_klik/'.$data['id'].'/'.$valp->jenis_pemeriksaan); ?>" target="_blank" class="blue">
                                Data Penunjang <?php echo $valp->jenis_pemeriksaan; ?>
                            </a></h1>
                            <div class="div-subtitle"><span class="font-subtitle"><?php echo $valp->jenis_pemeriksaan; ?> Supporting Data</span></div>
                            <div id="chart_penunjang_all['<?php echo $valp->jenis_pemeriksaan; ?>']"></div>
                            <button onclick="printChart('chart_penunjang_all[\'<?php echo $valp->jenis_pemeriksaan; ?>\']', 'Data Penunjang <?php echo $valp->jenis_pemeriksaan; ?>')" class="btn btn-success btn-sm">Print Chart</button>
                        <?php } ?>
                    </div> 
                </div> 
            </div> 
        </div> 
    </section> 
</div> 

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 

<script type="text/javascript"> 
    // Load the Visualization API and the piechart package. 
    google.charts.load('current', {'packages':['corechart']}); 
       
    // Set a callback to run when the Google Visualization API is loaded. 
    google.charts.setOnLoadCallback(drawChart); 
    google.charts.setOnLoadCallback(fitOrNot); 
    google.charts.setOnLoadCallback(diagnosa); 
    google.charts.setOnLoadCallback(top10); 
    google.charts.setOnLoadCallback(penunjangall); 

    // Print Chart Function
    function printChart(chartId, title) {
        var chart = document.getElementById(chartId);
        
        // Create a print window
        var printWindow = window.open('', '', 'height=500,width=900');
        
        // Write the content into the print window, including the title and chart
        printWindow.document.write('<html><head><title>Print Chart</title></head><body>');
        printWindow.document.write('<h1>' + title + '</h1>');  // Add the dynamic title
        printWindow.document.write(chart.outerHTML);  // Add the chart
        printWindow.document.write('</body></html>');
        
        printWindow.document.close();
        printWindow.print();  // Trigger the print dialog
    }

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
        chart.draw(data, {width: 900, height: 500, pieSliceText: 'value'}); 
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

        var datas = $.parseJSON(jsonData);
        datas.forEach((elem, ix) => {
            var data = new google.visualization.DataTable(elem.data);
            var chart = new google.visualization.PieChart(document.getElementById('chart_penunjang_all[\''+elem.jenis+'\']')); 
            chart.draw(data, {width: 900, height: 500, pieSliceText: 'value'}); 
        });
    }
</script>
