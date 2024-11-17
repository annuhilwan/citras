
    
 
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
   <div class="box-body"> 
   <a class="btn btn-primary btn-sm" href="<?php echo site_url('/registrasi/list_data_pasien_new_pie_chart_per_perusahaan/'.$data['id']); ?>" role="button">Back</a>
     <h1><a href="<?php echo site_url('/registrasi/list_data_detail_chart_kategori_medcheck_pertahun/'.$data['id']); ?>" target="_blank" class="blue">Kategori Kesehatan Medical Checkup</a></h1> 
     <div class="div-subtitle"><span class="font-subtitle">Medical Checkup Health Category</span></div>
	 
	<div id="chart_fit_div"></div>    
    
	<h1><a href="<?php echo site_url('/registrasi/list_data_detail_chart_diagnosa_perbagian_pertahun/'.$data['id']); ?>" target="_blank" class="blue">Jumlah Temuan Diagnosa</a></h1> 
	<div class="div-subtitle"><span class="font-subtitle">Number of Diagnostic Finding</span></div>
	<div id="chart_diagnosa_div"></div>  
	
	<h1><a href="<?php echo site_url('/registrasi/list_data_detail_chart_jenis_kelamin_pertahun/'.$data['id']); ?>" target="_blank" class="blue">Penyebaran Data Kelamin</a></h1> 
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
           
      // Create our data table out of JSON data loaded from server. 
      var data = new google.visualization.arrayToDataTable($.parseJSON(jsonData));
 
      // Instantiate and draw our chart, passing in some options. 
      var chart = new google.visualization.BarChart(document.getElementById('chart_fit_div')); 
	  google.visualization.events.addListener(chart, 'select', function() { 
	  var selectedItem = chart.getSelection()[0];
      if (selectedItem) {
        var topping = data.getValue(selectedItem.row, 0);
        var col = parseInt(selectedItem.column) - 1;
			window.open('/registrasi/list_data_detail_chart_kategori_medcheck_klik/'+ idmcuData[col] + '/' + encodeURI(topping));
      } 
	 
     });
     
        var coldt = $.parseJSON(jsonData)[0].length;
        var colHeight = (coldt-1) * 40;
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
          width: '75%',
          height: '100%',
          bottom: 20,
        },
        bar: {groupWidth: "90%"},
      };
      chart.draw(data, options); 
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
			window.open('/registrasi/list_data_detail_chart_diagnosa_perbagian_klik/'+ idmcuData[col] + '/' + encodeURI(topping) );
      } 
	 
     });	  
     
        var coldt = $.parseJSON(jsonData)[0].length;
        var colHeight = (coldt-1) * 40;
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
          width: '75%',
          height: '100%',
          bottom: 20,
        },
        bar: {groupWidth: "90%"},
      };
      chart.draw(data, options); 
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
              width: '75%',
              height: '100%',
              bottom: 20,
            },
            bar: {groupWidth: "90%"},
          };
          chart.draw(data, options); 
      });
    }
 
    </script>