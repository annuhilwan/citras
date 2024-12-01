
    
 
<style> 
h1 { 
    text-align: center; 
} 
h2 { 
    text-align: center;
    visibility:hidden; 
} 
.div-subtitle {
    text-align: center;

}
.font-subtitle {
    font-size: 12px;
    font-style: italic;
    font-weight: bold;
}

#chart_fit_div {
        width: 100%; /* Full width by default */
        height: 400px; /* Default height */
        text-align: left; /* Align chart to the left */
    }

    /* Adjust the margin to reduce space between charts */
.chart-container {
    margin: 10px 0; /* Vertical spacing between charts (top and bottom) */
    padding: 0;
}

/* Optionally, you can adjust padding, width, or height if needed */


/* Optional: If you want all charts to be in a horizontal layout */
.chart-container-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px; /* Adjusts the space between charts horizontally */
}
.gender{
                margin-top:-40px;
                font-size: 12px;
                font-style: italic;
                text-align:center;
            }


 /* Hide specific elements during print */
 @media print {
            .btn, .box-header {
                display: none;
            }
            
            #chart_fit_div {
            width: 10%;  /* Make the chart fit the entire width of the page */
            height: 300px;  /* Allow height to adjust dynamically */
            max-width: 100%;  /* Ensure chart doesn't overflow */
            margin: 0 0 0 -350px;  /* Center the chart */
            text-align: left; /* Left-align the chart during printing */
        }
        /* .diagnos{
            margin-top:-20px;
            margin-bottom:-45px;
            z-index: 1999;
        } */

        #chart_diagnosa_div {
        margin: 0 0 0 -350px;  /* Center the chart */
        z-index: 100;
        /* margin-bottom:23950px; */
    }

    .google-visualization-tooltip,
    .google-visualization-axis-text,
    .google-visualization-legend-text {
        font-size: 10px !important;  /* Reduce font size for printing */
    }
        /* If you want to control the layout of the chart container, you can add margins or other styles */
        body {
            margin: 0; /* Remove body margin to ensure content fits the page */
        }

            h2 {
              text-align:center;
                visibility: visible; /* Visible when printing */
                margin-bottom:-90px;
            }
            
            .kelamin{
                margin-top:-90px
                margin-bottom:100px;
            }
            .penunjang{
                margin-top:510px
            }

            .print-button{
                visibility:hidden;
            }

            .content-wrapper {
                margin: 0;
                padding: 0;
            }

            #print-container {
                page-break-inside: avoid; /* Prevent page breaks inside the container */
            }

            .chart-title-text {
                display: inline-block;
                font-size: 14px;
                font-weight: bold;
            }
            
            .gender{
                margin-top:90px;
                font-size: 12px;
                font-style: italic;
                text-align:center;
            }
          
            .div-subtitle {
                font-size: 12px;
                font-style: italic;
                text-align:center;
            }

            /* Force page breaks after each chart section */
            .chart-section {
                page-break-before: always; /* Start a new page for each chart section */
                margin-bottom: 0px;
            }

            #print-container {
                page-break-inside: avoid; /* Prevent page breaks inside the container */
            }

            /* Remove hyperlinks inside h1 during print */
            h1 a {
                text-decoration: none;
                color: inherit; /* Optional: Keeps the original text color */
                visibility: hidden;
            }

            #chart_fit_div {
            width: 40% !important;  /* Set width to full page */
            text-align: left !important; /* Ensure left alignment */
            margin-top:20px;
            margin-bottom:500px;
        }

        #chart_div {
            width: 40% !important;  /* Set width to full page */
            text-align: left !important; /* Ensure left alignment */
            margin-left:-250px;
            margin-top:10px;    
            margin-bottom:900px;
        }

    
            #chart_penunjang_all { 
                margin-left:-250px;
               width: 20% !important;  /* Set width to full page */
               height: auto !important;  /* Adjust height based on content */
               text-align: left !important; /* Ensure left alignment */
                /* margin-left:-200px;
                margin-bottom:90px; */
            }


            /* .chart_penunjang_all_audiometri{
                margin-top:-400px;
                margin-left:-200px;
                margin-bottom:400px;
            }
             */
            #chart_penunjang_all_audiometri{
                height:400px;
                margin-left:-200px;
                margin-bottom:400px;
            }

            #chart_penunjang_all_ekg{
                height:300px;
            } 
            #chart_penunjang_all_ivatest{
                height:300px;
            } 


    /* Adjust font size for chart labels, tooltips, axis, and legends */
    .google-visualization-tooltip, 
    .google-visualization-axis-text, 
    .google-visualization-legend-text {
        font-size: 10px !important;  /* Smaller font size for print */
    }

    /* Optional: hide elements you don't want printed */
  
        }
</style> 

 
<div class="content-wrapper">
 <section class="content">
 <div class="row">
 <div class="col-xs-12">
  <div class="box box-success">
   <div class="box-body"> 
   <a class="btn btn-primary btn-sm" href="<?php echo site_url('/registrasi/list_data_pasien_new_pie_chart/'.$data['id']); ?>" role="button">Back</a>
   <button class="btn btn-primary btn-sm print-button" onclick="window.print()">Print</button><br /><br />
   <h2>Kategori Kesehatan Medical Checkup</h2> 
     <h1><a href="<?php echo site_url('/registrasi/list_data_detail_chart_kategori_medcheck_pertahun/'.$data['id']); ?>" target="_blank" class="blue">Kategori Kesehatan Medical Checkup</a></h1>
    
     <div class="div-subtitle"><span class="font-subtitle">Medical Checkup Health Category</span></div>
	 
	<div id="chart_fit_div"></div>
    <h2>Jumlah Temuan Diagnosa</h2> 
	<h1><a href="<?php echo site_url('/registrasi/list_data_detail_chart_diagnosa_perbagian_pertahun/'.$data['id']); ?>" target="_blank" class="blue">Jumlah Temuan Diagnosa</a></h1> 
	
  
  <div class="div-subtitle"><span class="font-subtitle">Number of Diagnostic Finding</span></div>
  <div class="judulcetak">   
	<div id="chart_diagnosa_div"></div>  
      </div>
	<h1><a href="<?php echo site_url('/registrasi/list_data_detail_chart_jenis_kelamin_pertahun/'.$data['id']); ?>" target="_blank" class="blue">Penyebaran Data Kelamin</a></h1> 
	<h2 class="kelamin">Penyebaran Data Kelamin</h2> 
  <div class="gender"><span class="font-subtitle">Spread of Gender Data</span></div>
    <div id="chart_div"></div> 
    <!--<h1><a href="<?php echo site_url('/registrasi/list_data_detail_penunjang_medcheck_pertahun/'.$data['id']); ?>" target="_blank" class="blue">Data Penunjang</a></h1> -->
    <!--<div id="chart_penunjang_div"></div> -->
    <?php 
        foreach ((Array) $penunjang AS $keyp => $valp) { 
    ?> <h2>Data Penunjang <?php echo $valp->jenis_pemeriksaan; ?></h2> 
       
        <h1><a href="<?php echo site_url('/registrasi/list_data_detail_penunjang_medcheck_klik_pertahun/'.$data['id'].'/'.$valp->jenis_pemeriksaan); ?>" target="_blank" class="blue">
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

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
	
	
	
  
  
    <script type="text/javascript"> 
     
    // Load the Visualization API and the piechart package. 
    google.charts.load('current', {'packages':['corechart']}); 
       
    // Set a callback to run when the Google Visualization API is loaded. 
    google.charts.setOnLoadCallback(drawChart); 
    google.charts.setOnLoadCallback(fitOrNot); 
    google.charts.setOnLoadCallback(diagnosa); 
    // google.charts.setOnLoadCallback(penunjang); 
    google.charts.setOnLoadCallback(penunjangall); 
	
	 function selectHandler() {
      var selectedItem = chart.getSelection()[0];
      if (selectedItem) {
        var topping = data.getValue(selectedItem.row, 0);
        alert('The user selected ' + topping);
      }
    }
       
    function drawChart() { 
    var idmcuData = $.parseJSON($.ajax({ 
        url: "<?php echo base_url() . 'registrasi/getdataidmedcheckpertahun/'.$data['id'] ?>", 
        dataType: "json", 
        async: false 
    }).responseText); 

    var jsonData = $.ajax({ 
        url: "<?php echo base_url() . 'registrasi/getdatajeniskelamincompare/'.$data['id'] ?>", 
        dataType: "json", 
        async: false 
    }).responseText; 

    // Create our data table out of JSON data loaded from the server. 
    var data = new google.visualization.arrayToDataTable($.parseJSON(jsonData));

    // Instantiate and draw our chart, passing in some options. 
    var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

    google.visualization.events.addListener(chart, 'select', function() {
        var selectedItem = chart.getSelection()[0];
        if (selectedItem) {
            var topping = data.getValue(selectedItem.row, 0);
            var col = parseInt(selectedItem.column) - 1;
            window.open('/registrasi/list_data_detail_chart_jenis_kelamin_klik/' + idmcuData[col] + '/' + topping);
        } 
    });

    var coldt = $.parseJSON(jsonData)[0].length;
    var colHeight = (coldt - 1) * 10;
    var rowHeight = data.getNumberOfRows() * colHeight;
    var chartHeight = rowHeight + colHeight;

    var options = {
        chart: {
            title: 'Penyebaran Data Kelamin',
            backgroundColor: 'transparent'  // Set the chart background to transparent
        },
        hAxis: {
            minValue: 0,
        },
        legend: {textStyle: {fontSize: 14}},
        hAxis: {textStyle: {fontSize: 12}},
        vAxis: {textStyle: {fontSize: 12}},
        tooltip: {textStyle: {fontSize: 14}},
        height: chartHeight,
        chartArea: {
            width: '40%',
            height: '100%',
            bottom: 20,
            backgroundColor: 'transparent'  // Set the chart area background to transparent
        },
        bar: {groupWidth: "90%"},  // Bar group width adjusted
    };

    // Draw the chart with the transparent background
    chart.draw(data, options); 
}

	
    function fitOrNot() {
    var idmcuData = $.parseJSON($.ajax({
        url: "<?php echo base_url() . 'registrasi/getdataidmedcheckpertahun/'.$data['id'] ?>",
        dataType: "json",
        async: false
    }).responseText);

    var jsonData = $.ajax({
        url: "<?php echo base_url() . 'registrasi/getdatafitornotcompare/'.$data['id'] ?>",
        dataType: "json",
        async: false
    }).responseText;

    var data = new google.visualization.arrayToDataTable($.parseJSON(jsonData));

    var chart = new google.visualization.BarChart(document.getElementById('chart_fit_div'));
    google.visualization.events.addListener(chart, 'select', function () {
        var selectedItem = chart.getSelection()[0];
        if (selectedItem) {
            var topping = data.getValue(selectedItem.row, 0);
            var col = parseInt(selectedItem.column) - 1;
            window.open('/registrasi/list_data_detail_chart_kategori_medcheck_klik/' + idmcuData[col] + '/' + encodeURI(topping));
        }
    });

    var coldt = $.parseJSON(jsonData)[0].length;
    var colHeight = (coldt - 1) * 10;
    var rowHeight = data.getNumberOfRows() * colHeight;
    var chartHeight = rowHeight + colHeight;

    var options = {
        chart: {
            title: 'Kategori Kesehatan Medical Checkup',
            backgroundColor: 'transparent'  // Set chart background to transparent
        },
        hAxis: {
            minValue: 0,
        },
        legend: {textStyle: {fontSize: 14}},
        hAxis: {textStyle: {fontSize: 12}},
        vAxis: {textStyle: {fontSize: 12}},
        tooltip: {textStyle: {fontSize: 14}},
        height: chartHeight,
        chartArea: {
            width: '40%',
            height: '100%',
            bottom: 20,
            backgroundColor: 'transparent'  // Set chart area background to transparent
        },
        bar: {groupWidth: "100%"},
    };

    chart.draw(data, options);

    // Resize chart when printing
    window.onbeforeprint = function () {
        // Adjust chart dimensions for print
        document.getElementById('chart_fit_div').style.height = '300px';  // Set a smaller height for print
        document.getElementById('chart_fit_div').style.width = '60%';  // Set a smaller width for print
        document.getElementById('chart_fit_div').style.textAlign = 'left'; // Center alignment for print

        // Adjust font sizes for print (smaller fonts)
        var chartArea = document.querySelector('#chart_fit_div .google-visualization-chart');
        if (chartArea) {
            var chartTextElements = chartArea.querySelectorAll('.google-visualization-tooltip, .google-visualization-axis-text, .google-visualization-legend-text');
            chartTextElements.forEach(function (element) {
                element.style.fontSize = '10px'; // Resize text to fit better on print
            });
        }
    };

    // Reset size after printing (optional)
    window.onafterprint = function () {
        document.getElementById('chart_fit_div').style.height = chartHeight + 'px';  // Reset original height
        document.getElementById('chart_fit_div').style.width = '80%';  // Reset original width
        document.getElementById('chart_fit_div').style.textAlign = 'left'; // Keep left alignment after printing

        // Reset font size to original after printing
        var chartArea = document.querySelector('#chart_fit_div .google-visualization-chart');
        if (chartArea) {
            var chartTextElements = chartArea.querySelectorAll('.google-visualization-tooltip, .google-visualization-axis-text, .google-visualization-legend-text');
            chartTextElements.forEach(function (element) {
                element.style.fontSize = '12px'; // Reset font size after printing
            });
        }
    };
}



function diagnosa() {
    var idmcuData = $.parseJSON($.ajax({
        url: "<?php echo base_url() . 'registrasi/getdataidmedcheckpertahun/'.$data['id'] ?>",
        dataType: "json",
        async: false
    }).responseText);

    var jsonData = $.ajax({
        url: "<?php echo base_url() . 'registrasi/getdatadiagnosacompare/'.$data['id'] ?>",
        dataType: "json",
        async: false
    }).responseText;

    var data = new google.visualization.arrayToDataTable($.parseJSON(jsonData));
    var chart = new google.visualization.BarChart(document.getElementById('chart_diagnosa_div'));

    google.visualization.events.addListener(chart, 'select', function() {
        var selectedItem = chart.getSelection()[0];
        if (selectedItem) {
            var topping = data.getValue(selectedItem.row, 0);
            var col = parseInt(selectedItem.column) - 1;
            window.open('/registrasi/list_data_detail_chart_diagnosa_perbagian_klik/' + idmcuData[col] + '/' + encodeURI(topping));
        }
    });

    var coldt = $.parseJSON(jsonData)[0].length;
    var colHeight = (coldt - 1) * 10;
    var rowHeight = data.getNumberOfRows() * colHeight;
    var chartHeight = rowHeight + colHeight;

    var options = {
        chart: {
            title: 'Jumlah Temuan Diagnosa',
            backgroundColor: 'transparent'
        },
        hAxis: {
            minValue: 0,
        },
        legend: { textStyle: { fontSize: 14 } },
        hAxis: { textStyle: { fontSize: 12 } },
        vAxis: { textStyle: { fontSize: 12 } },
        tooltip: { textStyle: { fontSize: 14 } },
        height: chartHeight,
        chartArea: {
            width: '40%',
            height: '100%',
            bottom: 20,
            backgroundColor: 'transparent'
        },
        bar: { groupWidth: "80%" },
    };

    chart.draw(data, options);

    // Adjust margin to bring charts closer to each other (optional)
    document.getElementById('chart_diagnosa_div').style.margin = '5px 0';  // Tighter vertical margin between charts

    // Resize chart when printing (set smallest size)
    window.onbeforeprint = function() {
        document.getElementById('chart_diagnosa_div').style.height = '200px';  // Set a very small height for print
        document.getElementById('chart_diagnosa_div').style.width = '40%';  // Set a small width for print
        document.getElementById('chart_diagnosa_div').style.textAlign = 'left';

        var chartArea = document.querySelector('#chart_diagnosa_div .google-visualization-chart');
        if (chartArea) {
            var chartTextElements = chartArea.querySelectorAll('.google-visualization-tooltip, .google-visualization-axis-text, .google-visualization-legend-text');
            chartTextElements.forEach(function(element) {
                element.style.fontSize = '8px';  // Make text small for printing
            });
        }
    };

    // Reset size after printing (optional)
    window.onafterprint = function() {
        document.getElementById('chart_diagnosa_div').style.height = chartHeight + 'px';  // Reset original height
        document.getElementById('chart_diagnosa_div').style.width = '40%';  // Reset original width
        document.getElementById('chart_diagnosa_div').style.textAlign = 'left';

        var chartArea = document.querySelector('#chart_diagnosa_div .google-visualization-chart');
        if (chartArea) {
            var chartTextElements = chartArea.querySelectorAll('.google-visualization-tooltip, .google-visualization-axis-text, .google-visualization-legend-text');
            chartTextElements.forEach(function(element) {
                element.style.fontSize = '12px';  // Reset font size to original after printing
            });
        }
    };
}


    function penunjang() { 
	    var idmcuData = $.parseJSON($.ajax({ 
          url: "<?php echo base_url() . 'registrasi/getdataidmedcheckpertahun/'.$data['id'] ?>", 
          dataType: "json", 
          async: false 
          }).responseText); 
          
      var jsonData = $.ajax({ 
          url: "<?php echo base_url() . 'registrasi/getdatapenunjangcompare/'.$data['id'] ?>", 
          dataType: "json", 
          async: false 
          }).responseText; 
           
      // Create our data table out of JSON data loaded from server. 
      var data = new google.visualization.arrayToDataTable($.parseJSON(jsonData));
 
      // Instantiate and draw our chart, passing in some options. 
      var chart = new google.visualization.BarChart(document.getElementById('chart_penunjang_div'));
	  google.visualization.events.addListener(chart, 'select', function() { 
	  var selectedItem = chart.getSelection()[0];
      if (selectedItem) {
        var topping = data.getValue(selectedItem.row, 0);
        var col = parseInt(selectedItem.column) - 1;
			window.open('/registrasi/list_data_detail_penunjang_medcheck_klik/'+ idmcuData[col] + '/' + encodeURI(topping) );
      } 
      
	  });
     
        var coldt = $.parseJSON(jsonData)[0].length;
        var colHeight = (coldt-1) * 10;
        var rowHeight = data.getNumberOfRows() * colHeight;
        var chartHeight = rowHeight + colHeight;
      
      var options = {
        chart: {
          title: 'Data Penunjang'
        },
        hAxis: {
          minValue: 0,
        },
        legend: {textStyle: {fontSize: 14}},
        hAxis: {textStyle: {fontSize: 12}},
        vAxis: {textStyle: {fontSize: 12}},
        tooltip: {textStyle: {fontSize: 14}},
        height: chartHeight,
        chartArea: {
          width: '30%',
          height: '200px',
          bottom: 20,
          backgroundColor: 'transparent'  // Set the chart area background to transparent
        },
        bar: {groupWidth: "90%"},
      };
      chart.draw(data, options); 
    } 
    
    function penunjangall() {
    var idmcuData = $.parseJSON($.ajax({
        url: "<?php echo base_url() . 'registrasi/getdataidmedcheckpertahun/'.$data['id'] ?>",
        dataType: "json",
        async: false
    }).responseText);

    var jsonData = $.ajax({
        url: "<?php echo base_url() . 'registrasi/getdatapenunjangallcompare/'.$data['id'] ?>",
        dataType: "json",
        async: false
    }).responseText;

    var datas = $.parseJSON(jsonData);
    datas.forEach((elem, ix) => {
        var data = new google.visualization.arrayToDataTable(elem.data);
        var chart = new google.visualization.BarChart(document.getElementById('chart_penunjang_all[\''+elem.jenis+'\']'));

        google.visualization.events.addListener(chart, 'select', function() {
            var selectedItem = chart.getSelection()[0];
            if (selectedItem) {
                var topping = data.getValue(selectedItem.row, 0);
                var col = parseInt(selectedItem.column) - 1;
                window.open('/registrasi/list_data_detail_penunjang_all_medcheck_klik/'+ idmcuData[col] + '/' + elem.jenis + '/' + encodeURI(topping));
            }
        });

        var coldt = elem.data[0].length;
        var colHeight = (coldt-1) * 10;
        var rowHeight = data.getNumberOfRows() * colHeight;
        var chartHeight = rowHeight + colHeight;

        var options = {
            chart: {
                title: 'Data Penunjang'
            },
            hAxis: {
                minValue: 0,
            },
            legend: { textStyle: { fontSize: 14 } },
            hAxis: { textStyle: { fontSize: 12 } },
            vAxis: { textStyle: { fontSize: 12 } },
            tooltip: { textStyle: { fontSize: 14 } },
            height: chartHeight,
            chartArea: {
                width: '30%',
                height: '560px',
                bottom: 20,
                backgroundColor: 'transparent'  // Set the chart area background to transparent
            },
            bar: { groupWidth: "90%" },
        };
        chart.draw(data, options);
    });

    // Resize charts and set print-friendly layout when printing
    window.onbeforeprint = function() {
        // Resize all chart containers for printing
        document.querySelectorAll('.google-visualization-chart').forEach(function(chartElement) {
            chartElement.style.height = '300px';  // Set a smaller height for printing
            chartElement.style.width = '80%';  // Set a smaller width for printing
            chartElement.style.textAlign = 'left';  // Center the chart on the page
        });

        // Adjust font size for print
        document.querySelectorAll('.google-visualization-tooltip, .google-visualization-axis-text, .google-visualization-legend-text').forEach(function(element) {
            element.style.fontSize = '8px';  // Reduce font size for printing
        });

        // Ensure the layout fits on a single page
        document.body.style.margin = '0';  // Remove margins to avoid unnecessary spacing
        window.print();  // Trigger the print dialog
    };

    // Reset the layout and font sizes after printing
    window.onafterprint = function() {
        document.querySelectorAll('.google-visualization-chart').forEach(function(chartElement) {
            chartElement.style.height = '560px';  // Reset height to original value
            chartElement.style.width = '30%';  // Reset width to original value
            chartElement.style.textAlign = 'left';  // Reset alignment
        });

        // Reset font size back to the original
        document.querySelectorAll('.google-visualization-tooltip, .google-visualization-axis-text, .google-visualization-legend-text').forEach(function(element) {
            element.style.fontSize = '12px';  // Reset font size to original after printing
        });
    };
}

 
    </script>