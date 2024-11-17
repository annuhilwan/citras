<style>
    h1 { 
        text-align: center; 
    }
</style>

<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-body"> 
                        <a class="btn btn-primary btn-sm" href="<?php echo site_url('/registrasi/list_data_pasien_new_pie_chart_per_perusahaan/'.$id); ?>" role="button">Back</a><br /><br />
                        <button onclick="printChart('chart_faringitis_div')" class="btn btn-success btn-sm">Print Chart</button>
                        <h1 id="chart-title">Jumlah Temuan <?php echo $diagnosa ; ?> per Bagian</h1> 
                        <div id="chart_faringitis_div"></div> 

                        <!-- Print Button -->
                       
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
    google.charts.setOnLoadCallback(faringitis);

    function faringitis() {
        var jsonData = $.ajax({
            url: "<?php echo base_url() . 'registrasi/getdatacharperbagian/'.$id.'/'.urlencode($diagnosa) ?>", 
            dataType: "json", 
            async: false 
        }).responseText;
        
        // Create our data table out of JSON data loaded from the server.
        var data = new google.visualization.DataTable(jsonData);

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_faringitis_div'));
        chart.draw(data, {width: 900, height: 500, pieSliceText: 'value'});
    }

    // Print Chart Function
    function printChart(chartId) {
        var chart = document.getElementById(chartId);
        var chartTitle = document.getElementById('chart-title').innerText;  // Get the chart title

        // Create a print window
        var printWindow = window.open('', '', 'height=500,width=900');
        
        // Write the content into the print window, including the title and chart
        printWindow.document.write('<html><head><title>Print Chart</title></head><body>');
        printWindow.document.write('<h1>' + chartTitle + '</h1>');  // Add the dynamic title
        printWindow.document.write(chart.outerHTML);  // Add the chart
        printWindow.document.write('</body></html>');
        
        printWindow.document.close();
        printWindow.print();  // Trigger the print dialog
    }
</script>
