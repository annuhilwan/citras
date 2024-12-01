
    
 
<style> 
h1 { 
    text-align: center; 
} 
h2{
    visibility:hidden;
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


 /* Hide specific elements during print */
 @media print {
            .btn, .box-header {
                display: none;
            }
            
          /*  #    {
            width: 100%;  
            height: auto; 
            max-width: 100%; 
            margin: 0 auto; 
            text-align: left;
        } /* Left-align the chart during printing */

        #chart_diagnosa_div {
            margin-top:-10px;
            margin-left:-180px;
            margin-bottom:50px;
            
        }

        .table{
            visibility: hidden;
        }

        /* If you want to control the layout of the chart container, you can add margins or other styles */
        body {
            margin: 0; /* Remove body margin to ensure content fits the page */
        }

            h2 {
              text-align:left;
                visibility: visible; /* Visible when printing */
                margin-bottom:-20px;
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
                margin-top:-30px;
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
            #chart_top_ten{
                margin-left:-150px;
                margin-top:-700px;
                margin-bottom:600px;
            }
            #chart_div{
                margin-bottom:700px;
            }

            #chart_penunjang_all{
                margin-left:-250px;
                margin-bottom:500px;
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

	#chart_fit_div {
        margin-left:-150px;
        margin-bottom:1800px;
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
    <div class="box-header">
        <a class="btn btn-primary btn-sm" href="<?php echo site_url('/registrasi/list_data_pelayanan_perusahaan_by_search/'); ?>" role="button">Back</a>
        <button class="btn btn-primary btn-sm print-button" onclick="window.print()">Print</button>
       <div class="box-tools">
       <a class="btn btn-primary btn-sm" href="<?php echo site_url('/registrasi/list_data_pasien_bar_chart/'.$data['id']); ?>" role="button">Compare</a>
       </div>
    </div>
   <div class="box-body"> 
   <h2>Kategori Kesehatan Medical Checkup</h2>
     <h1><a href="<?php echo site_url('/registrasi/list_data_detail_chart_kategori_medcheck/'.$data['id']); ?>" target="_blank" class="blue">Kategori Kesehatan Medical Checkup</a></h1> 
    
     <div class="div-subtitle"><span class="font-subtitle">Medical Checkup Health Category</span></div>
	 
	<div id="chart_fit_div"></div>    
    <h2>Jumlah Temuan Diagnosa</h2>
	<h1><a href="<?php echo site_url('/registrasi/list_data_detail_chart_diagnosa_perbagian/'.$data['id']); ?>" target="_blank" class="blue">Jumlah Temuan Diagnosa</a></h1> 
	
    <div class="div-subtitle"><span class="font-subtitle">Number of Diagnostic Finding</span></div>
	<div id="chart_diagnosa_div"></div>  
	<h2>Diagnosa 10 Terbanyak</h2>
	<h1><a href="<?php echo site_url('/registrasi/list_data_detail_chart_diagnosa_perbagian/'.$data['id']); ?>" target="_blank" class="blue">Diagnosa 10 Terbanyak</a></h1> 
	
    <div class="div-subtitle"><span class="font-subtitle">Most 10 Diagnostics</span></div>

    <div class="table">
<table class="table">
  
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
		$no =1;
		foreach ((Array) $diagnosa_top_ten AS $key => $val) { 
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
        </div>
	<div id="chart_top_ten"></div> 
	<!--
	<h1><a href="<?php echo site_url('/registrasi/list_data_detail_chart_faringitis/'.$data['id']); ?>" target="_blank" class="blue">Jumlah Temuan Faringitis per Bagian</a></h1> 
	<div id="chart_faringitis_div"></div> 
	-->
	<h2>Penyebaran Kelamin</h2>
	<h1><a href="<?php echo site_url('/registrasi/list_data_detail_chart_jenis_kelamin/'.$data['id']); ?>" target="_blank" class="blue">Penyebaran Data Kelamin</a></h1> 
	
    <div class="div-subtitle"><span class="font-subtitle">Spread of Gender Data</span></div>
    <div id="chart_div"></div> 
    <!--<h1><a href="<?php echo site_url('/registrasi/list_data_detail_penunjang_medcheck/'.$data['id']); ?>" target="_blank" class="blue">Data Penunjang</a></h1> -->
    <!--<div id="chart_penunjang_div"></div>-->
    <?php 
        foreach ((Array) $penunjang AS $keyp => $valp) { 
    ?>
      <h2>Data Penunjang <?php echo $valp->jenis_pemeriksaan; ?></h2>
        <h1><a href="<?php echo site_url('/registrasi/list_data_detail_penunjang_medcheck_klik/'.$data['id'].'/'.$valp->jenis_pemeriksaan); ?>" target="_blank" class="blue">
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
    google.charts.setOnLoadCallback(top10); 
    //	google.charts.setOnLoadCallback(faringitis); 
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
      var jsonData = $.ajax({ 
          url: "<?php echo base_url() . 'registrasi/getdatajeniskelamin/'.$data['id'] ?>", 
          dataType: "json", 
          async: false 
          }).responseText; 
           
      // Create our data table out of JSON data loaded from server. 
      var data = new google.visualization.DataTable(jsonData); 
 
      // Instantiate and draw our chart, passing in some options. 
      var chart = new google.visualization.PieChart(document.getElementById('chart_div')); 
	   google.visualization.events.addListener(chart, 'select', function() {
       // grab a few details before redirecting

      //alert(data.getValue(chart.getSelection()[0].row, 0));
      //location.href = 'http://www.google.com?row=' + row + '&col=' + col + '&year=' + year;
	  
	  var selectedItem = chart.getSelection()[0];
      if (selectedItem) {
        var topping = data.getValue(selectedItem.row, 0);
        //alert('The user selected ' + topping);
		//window.open('https://www.google.com/search?q= '+ <?php echo $data['id'] ?>);
			window.open('/registrasi/list_data_detail_chart_jenis_kelamin_klik/'+ <?php echo $data['id'] ?> + '/' + topping );
      } 
	 
     });
      chart.draw(data, {width: 900, height: 500,pieSliceText: 'value'}); 
    } 
	
	
	function fitOrNot() { 
      var jsonData = $.ajax({ 
          url: "<?php echo base_url() . 'registrasi/getdatafitornot/'.$data['id'] ?>", 
          dataType: "json", 
          async: false 
          }).responseText; 
           
      // Create our data table out of JSON data loaded from server. 
      var data = new google.visualization.DataTable(jsonData); 
 
      // Instantiate and draw our chart, passing in some options. 
      var chart = new google.visualization.PieChart(document.getElementById('chart_fit_div')); 
	  google.visualization.events.addListener(chart, 'select', function() { 
	  var selectedItem = chart.getSelection()[0];
      if (selectedItem) {
        var topping = data.getValue(selectedItem.row, 0);
			window.open('/registrasi/list_data_detail_chart_kategori_medcheck_klik/'+ <?php echo $data['id'] ?> + '/' + encodeURI(topping) );
      } 
	 
     });
      chart.draw(data, {width: 900, height: 500,pieSliceText: 'value'}); 
    }
	
    function diagnosa() { 
    var jsonData = $.ajax({ 
        url: "<?php echo base_url() . 'registrasi/getdatadiagnosa/'.$data['id'] ?>", 
        dataType: "json", 
        async: false 
    }).responseText; 
     
    // Create our data table out of JSON data loaded from server. 
    var data = new google.visualization.DataTable(jsonData); 

    // Instantiate and draw our chart, passing in some options. 
    var chart = new google.visualization.PieChart(document.getElementById('chart_diagnosa_div'));

    google.visualization.events.addListener(chart, 'select', function() { 
        var selectedItem = chart.getSelection()[0];
        if (selectedItem) {
            var topping = data.getValue(selectedItem.row, 0);
            window.open('/registrasi/list_data_detail_chart_diagnosa_perbagian_klik/'+ <?php echo $data['id'] ?> + '/' + encodeURI(topping) );
        } 
    }); 

    // Set default chart size for the screen
    var options = {
        width: 1200,
        height: 1500,
        pieSliceText: 'value',
        fontSize: 16, // Adjust font size for the screen view
        backgroundColor: 'transparent' 
    };

    chart.draw(data, options); 

    // Resize chart when printing using CSS
    window.onbeforeprint = function () {
        options.width = 980;  // Adjust chart size for print
        options.height = 890;
        options.fontSize = 10;  // Adjust font size for print
        chart.draw(data, options);
    }

    window.onafterprint = function () {
        // Reset the size and font after print
        options.width = 1200;
        options.height = 1500;
        options.fontSize = 14;
        chart.draw(data, options);
    }
} 

	
	function top10() { 
      var jsonData = $.ajax({ 
          url: "<?php echo base_url() . 'registrasi/getdatatopten/'.$data['id'] ?>", 
          dataType: "json", 
          async: false 
          }).responseText; 
           
      // Create our data table out of JSON data loaded from server. 
      var data = new google.visualization.DataTable(jsonData); 
 
      // Instantiate and draw our chart, passing in some options. 
      var chart = new google.visualization.PieChart(document.getElementById('chart_top_ten')); 
	  google.visualization.events.addListener(chart, 'select', function() { 
	  var selectedItem = chart.getSelection()[0];
      if (selectedItem) {
        var topping = data.getValue(selectedItem.row, 0);
			window.open('/registrasi/list_data_detail_chart_diagnosa_perbagian_klik/'+ <?php echo $data['id'] ?> + '/' + encodeURI(topping) );
      } 
	 
     });	
      chart.draw(data, {width: 900, height: 500,pieSliceText: 'value'}); 
    } 
	
	function faringitis() { 
      var jsonData = $.ajax({ 
          url: "<?php echo base_url() . 'registrasi/getdatafaringitis/'.$data['id'] ?>", 
          dataType: "json", 
          async: false 
          }).responseText; 
           
      // Create our data table out of JSON data loaded from server. 
      var data = new google.visualization.DataTable(jsonData); 
 
      // Instantiate and draw our chart, passing in some options. 
      var chart = new google.visualization.PieChart(document.getElementById('chart_faringitis_div')); 
      chart.draw(data, {width: 900, height: 500,pieSliceText: 'value'}); 
    } 
    
    function penunjang() { 
      var jsonData = $.ajax({ 
          url: "<?php echo base_url() . 'registrasi/getdatapenunjang/'.$data['id'] ?>", 
          dataType: "json", 
          async: false 
          }).responseText; 
           
      // Create our data table out of JSON data loaded from server. 
      var data = new google.visualization.DataTable(jsonData); 
 
      // Instantiate and draw our chart, passing in some options. 
      var chart = new google.visualization.PieChart(document.getElementById('chart_penunjang_div')); 
	  google.visualization.events.addListener(chart, 'select', function() { 
	  var selectedItem = chart.getSelection()[0];
      if (selectedItem) {
        var topping = data.getValue(selectedItem.row, 0);
			window.open('/registrasi/list_data_detail_penunjang_medcheck_klik/'+ <?php echo $data['id'] ?> + '/' + encodeURI(topping) );
      } 
	 
     });
      chart.draw(data, {width: 900, height: 500,pieSliceText: 'value'}); 
    }
    
    function penunjangall() { 
    var jsonData = $.ajax({ 
        url: "<?php echo base_url() . 'registrasi/getdatapenunjangall/'.$data['id'] ?>", 
        dataType: "json", 
        async: false 
    }).responseText; 

    // Create our data table out of JSON data loaded from server. 
    var datas = $.parseJSON(jsonData);
    datas.forEach((elem, ix) => {
        var data = new google.visualization.DataTable(elem.data);
        
        // Select the chart container dynamically using the 'elem.jenis' value
        var chartContainerId = 'chart_penunjang_all[\'' + elem.jenis + '\']';
        
        // Ensure the chart container is left-aligned
        document.getElementById(chartContainerId).style.textAlign = 'left';

        var chart = new google.visualization.PieChart(document.getElementById(chartContainerId)); 

        google.visualization.events.addListener(chart, 'select', function() { 
            var selectedItem = chart.getSelection()[0];
            if (selectedItem) {
                var topping = data.getValue(selectedItem.row, 0);
                window.open('/registrasi/list_data_detail_penunjang_all_medcheck_klik/' + <?php echo $data['id'] ?> + '/' + elem.jenis + '/' + encodeURI(topping));
            } 
        });
        chart.draw(data, {width: 900, height: 900, pieSliceText: 'value'}); 
    });
}

    </script>