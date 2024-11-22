
    
 
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


 /* Hide specific elements during print */
 @media print {
            .btn, .box-header {
                display: none;
            }
            
            #chart_fit_div {
            width: 100%;  /* Make the chart fit the entire width of the page */
            height: auto;  /* Allow height to adjust dynamically */
            max-width: 100%;  /* Ensure chart doesn't overflow */
            margin: 0 0 250px -350px;  /* Center the chart */
            text-align: left; /* Left-align the chart during printing */
        }

        #chart_diagnosa_div {
        width: 30% !important;  /* Set width to full page */
        height: 3700px !important;  /* Allow height to adjust based on content */
        margin-top:-94px;
        margin-left:-250px;
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
              text-align:left;
                visibility: visible; /* Visible when printing */
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
            width: 100% !important;  /* Set width to full page */
            height: auto !important;  /* Adjust height based on content */
            text-align: left !important; /* Ensure left alignment */
        }

    
            #chart_penunjang_all {
                width: 100% !important;  /* Set width to full page */
                height: 6200px !important;  /* Adjust height based on content */
                text-align: left !important; /* Ensure left alignment */
                margin-bottom:650px;
            }


    /* Adjust font size for chart labels, tooltips, axis, and legends */
    .google-visualization-tooltip, 
    .google-visualization-axis-text, 
    .google-visualization-legend-text {
        font-size: 10px !important;  /* Smaller font size for print */
    }

    /* Optional: hide elements you don't want printed */
    .no-print {
        display: none !important;
    }

            /* Reducing chart sizes specifically for printing */
            #chart_div, #chart_top_ten, .chart-penunjang-all {
                width: 100% !important;  /* Use full width of the page */
                height: 300px !important; /* Reduce the height to make charts smaller */
            }

            /* Reduce font size of subtitles */
            .div-subtitle {
                font-size: 10px !important;
                font-style: italic;
            }

            /* Adjust chart titles and descriptions */
            h1 {
                font-size: 16px !important;
            }
            .judulcetak{
              margin-top:-10px;

            }

            .font-subtitle {
                font-size: 10px !important;
                font-style: italic;
                text-align:center;
            }

            /* Align all charts to the left when printing */
            #print-container {
                text-align: left !important; /* Ensure left alignment */
            }

            /* Ensure each chart container is also left-aligned */
            .chart-section {
                text-align: left !important;
                margin-left: 0 !important;
                padding-left: 0 !important;
            }

            /* Additional tweaks for chart section layout */
            .chart-section h1, .chart-section h2, .div-subtitle {
                text-align: left !important; /* Left-align headings and subtitles */
            }

            /* Optional: Reset any large margins for charts */
            .chart-section div {
                margin: 0;
                padding: 0;
            }
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
     <h1><a href="<?php echo site_url('/registrasi/list_data_detail_chart_kategori_medcheck_pertahun/'.$data['id']); ?>" target="_blank" class="blue">Kategori Kesehatan Medical Checkup</a></h1>
     <h2>Kategori Kesehatan Medical Checkup</h2> 
     <div class="div-subtitle"><span class="font-subtitle">Medical Checkup Health Category</span></div>
	 
	<div id="chart_fit_div"></div>
  
	<h1><a href="<?php echo site_url('/registrasi/list_data_detail_chart_diagnosa_perbagian_pertahun/'.$data['id']); ?>" target="_blank" class="blue">Jumlah Temuan Diagnosa</a></h1> 
	<h2>Jumlah Temuan Diagnosa</h2> 
  
  <div class="div-subtitle"><span class="font-subtitle">Number of Diagnostic Finding</span></div>
  <div class="judulcetak">   
	<div id="chart_diagnosa_div"></div>  
      </div>
	<h1><a href="<?php echo site_url('/registrasi/list_data_detail_chart_jenis_kelamin_pertahun/'.$data['id']); ?>" target="_blank" class="blue">Penyebaran Data Kelamin</a></h1> 
	<h2>Penyebaran Data Kelamin</h2> 
  <div class="div-subtitle"><span class="font-subtitle">Spread of Gender Data</span></div>
    <div id="chart_div"></div> 
    <!--<h1><a href="<?php echo site_url('/registrasi/list_data_detail_penunjang_medcheck_pertahun/'.$data['id']); ?>" target="_blank" class="blue">Data Penunjang</a></h1> -->
    <!--<div id="chart_penunjang_div"></div> -->
    <?php 
        foreach ((Array) $penunjang AS $keyp => $valp) { 
    ?>
        <h1><a href="<?php echo site_url('/registrasi/list_data_detail_penunjang_medcheck_klik_pertahun/'.$data['id'].'/'.$valp->jenis_pemeriksaan); ?>" target="_blank" class="blue">
            Data Penunjang <?php echo $valp->jenis_pemeriksaan; ?>
        </a></h1>
        <h2>Data Penunjang <?php echo $valp->jenis_pemeriksaan; ?></h2> 
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
           
      // Create our data table out of JSON data loaded from server. 
      var data = new google.visualization.arrayToDataTable($.parseJSON(jsonData));
 
      // Instantiate and draw our chart, passing in some options. 
      var chart = new google.visualization.BarChart(document.getElementById('chart_div')); 
	  google.visualization.events.addListener(chart, 'select', function() {
	  var selectedItem = chart.getSelection()[0];
      if (selectedItem) {
        var topping = data.getValue(selectedItem.row, 0);
        var col = parseInt(selectedItem.column) - 1;
			window.open('/registrasi/list_data_detail_chart_jenis_kelamin_klik/'+ idmcuData[col] + '/' + topping );
      } 
	 
     });
     
        var coldt = $.parseJSON(jsonData)[0].length;
        var colHeight = (coldt-1) * 40;
        var rowHeight = data.getNumberOfRows() * colHeight;
        var chartHeight = rowHeight + colHeight;
      
      var options = {
        chart: {
          title: 'Penyebaran Data Kelamin'
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
          width: '75%',
          height: '100%',
          bottom: 20,
        },
        bar: {groupWidth: "90%"},
      };
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
    google.visualization.events.addListener(chart, 'select', function() { 
        var selectedItem = chart.getSelection()[0];
        if (selectedItem) {
            var topping = data.getValue(selectedItem.row, 0);
            var col = parseInt(selectedItem.column) - 1;
            window.open('/registrasi/list_data_detail_chart_kategori_medcheck_klik/' + idmcuData[col] + '/' + encodeURI(topping));
        } 
    });

    var coldt = $.parseJSON(jsonData)[0].length;
    var colHeight = (coldt - 1) * 40;
    var rowHeight = data.getNumberOfRows() * colHeight;
    var chartHeight = rowHeight + colHeight;

    var options = {
        chart: {
            title: 'Kategori Kesehatan Medical Checkup'
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
            width: '40%',  // Increased width to use more of the available space
            height: '100%',
            bottom: 20,
        },
        bar: {groupWidth: "100%"},
    };

    chart.draw(data, options);

    // Resize chart when printing
    window.onbeforeprint = function() {
        // Adjust chart dimensions for print
        document.getElementById('chart_fit_div').style.height = 'auto';  // Allow height to adjust automatically
        document.getElementById('chart_fit_div').style.width = '80%';  // Set width to 100% to fit the page width
        document.getElementById('chart_fit_div').style.textAlign = 'left'; // Ensure left alignment
        
        // Adjust font sizes for print
        var chartArea = document.querySelector('#chart_fit_div .google-visualization-chart');
        if (chartArea) {
            var chartTextElements = chartArea.querySelectorAll('.google-visualization-tooltip, .google-visualization-axis-text, .google-visualization-legend-text');
            chartTextElements.forEach(function(element) {
                element.style.fontSize = '10px'; // Resize text for printing
            });
        }
    };

    // Reset size after printing (optional)
    window.onafterprint = function() {
        document.getElementById('chart_fit_div').style.height = chartHeight + 'px';  // Reset original height
        document.getElementById('chart_fit_div').style.width = '80%';  // Reset original width
        document.getElementById('chart_fit_div').style.textAlign = 'left'; // Keep left alignment after printing
        
        // Reset font size to original after printing
        var chartArea = document.querySelector('#chart_fit_div .google-visualization-chart');
        if (chartArea) {
            var chartTextElements = chartArea.querySelectorAll('.google-visualization-tooltip, .google-visualization-axis-text, .google-visualization-legend-text');
            chartTextElements.forEach(function(element) {
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

    // Create our data table out of JSON data loaded from server. 
    var data = new google.visualization.arrayToDataTable($.parseJSON(jsonData));

    // Instantiate and draw our chart, passing in some options. 
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
    var colHeight = (coldt - 1) * 40;
    var rowHeight = data.getNumberOfRows() * colHeight;
    var chartHeight = rowHeight + colHeight;

    var options = {
        chart: {
            title: 'Jumlah Temuan Diagnosa'
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
        },
        bar: {groupWidth: "90%"},
    };
    chart.draw(data, options);

    // Resize chart and adjust font size before printing
    window.onbeforeprint = function() {
        // Resize chart for print
        document.getElementById('chart_diagnosa_div').style.height = '70%';  // Set height to auto
        document.getElementById('chart_diagnosa_div').style.width = '100%';  // Set width to full page

        // Adjust font size for print
        var chartArea = document.querySelector('#chart_diagnosa_div .google-visualization-chart');
        if (chartArea) {
            var chartTextElements = chartArea.querySelectorAll('.google-visualization-tooltip, .google-visualization-axis-text, .google-visualization-legend-text');
            chartTextElements.forEach(function(element) {
                element.style.fontSize = '10px';  // Resize text to 10px for printing
            });
        }
    };

    // Reset size and font size after printing
    window.onafterprint = function() {
        document.getElementById('chart_diagnosa_div').style.height = chartHeight + 'px';  // Reset original height
        document.getElementById('chart_diagnosa_div').style.width = '40%';  // Keep the width 100%

        // Reset font size to original after printing
        var chartArea = document.querySelector('#chart_diagnosa_div .google-visualization-chart');
        if (chartArea) {
            var chartTextElements = chartArea.querySelectorAll('.google-visualization-tooltip, .google-visualization-axis-text, .google-visualization-legend-text');
            chartTextElements.forEach(function(element) {
                element.style.fontSize = '12px';  // Reset font size after printing
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
        var colHeight = (coldt-1) * 40;
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
          width: '75%',
          height: '100%',
          bottom: 20,
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
        			window.open('/registrasi/list_data_detail_penunjang_all_medcheck_klik/'+ idmcuData[col] + '/' + elem.jenis + '/' + encodeURI(topping) );
              } 
          
    	  });
         
            var coldt = elem.data[0].length;
            var colHeight = (coldt-1) * 40;
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
              width: '40%',
              height: '3500px',
              bottom: 20,
            },
            bar: {groupWidth: "90%"},
          };
          chart.draw(data, options); 
      });
    }
 
    </script>