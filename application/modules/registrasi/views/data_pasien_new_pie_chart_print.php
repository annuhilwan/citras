<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Chart</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 20mm;
            width: 210mm;
            background-color: white;
        }
        h1 {
            color: #3c8dbc;
            text-align: center;
            font-family: 'Source Sans Pro',sans-serif;
            font-size: 36px;
            font-weight: 500;
            line-height: 1.1;
        }
        .btn-primary {
            color: #fff;
            background-color: #00c0ef !important;
            border-color: #00c0ef !important;
            border-radius: 3px;
            box-shadow: none;
            border: 1px solid transparent;
            padding: 5px 10px;
            font-size: 12px;
            line-height: 1.5;
            display: inline-block;
            margin-bottom: 0;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            user-select: none;
            background-image: none;
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
        #chart_div {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px 0px;
        }
        #legend {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1px;
            max-width: 100%;
            margin-bottom: 10px;
        }
        .legend-item {
            display: flex;
            align-items: center;
            font-size: 12px;
        }
        .legend-color {
            min-width: 15px;
            height: 15px;
            margin-right: 5px;
            margin-left: 5px;
        }
        @media print {
            @page {
                size: A4;
                margin: 20mm;
            }
            body {
                margin: 0;
                padding: 0;
            }
            .no-print {
                display: none;
            }
        }
    </style>
    <script src="https://medicalcitra.com/development/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(fetchDataAndDrawChart);
        
        function fetchDataAndDrawChart() {
            var dataArray = [['Name', 'Value']];
            $.ajax({
                url: "<?php echo base_url() . 'registrasi/getdatadiagnosa/'.$data['id'] ?>", 
                dataType: "json", 
                success: function(response) {
                    if (response.rows && Array.isArray(response.rows)) {
                        response.rows.forEach(function(row) {
                            var name = row.c[0].v;
                            var value = row.c[1].v;
                            dataArray.push([name, value]);
                        });
                    } else {
                        console.error("Unexpected response format:", response);
                    }
                    var data = google.visualization.arrayToDataTable(dataArray);
                    drawChart(data);
                },
                error: function(xhr, status, error) {
                    console.error("AJAX error:", status, error);
                }
            });
        }
        
        function drawChart(data) {
            var colors = [];
            for (var i = 0; i < data.getNumberOfRows(); i++) {
                colors.push(generateRandomColor());
            }
            var options = {
                width: 600,
                height: 500,
                pieSliceText: 'value',
                legend: { 
                    position: 'none'
                },
                slices: colors.reduce((acc, color, index) => {
                    acc[index] = {color: color};
                    return acc;
                }, {}),
                chartArea: {
                    left: 20,
                    top: 20,
                    right: 20,
                    bottom: 20
                }
            };
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
            createLegend(data, colors);
            
            setTimeout(function() {
                window.print();
            }, 500);
        }
        
        function generateRandomColor() {
            const randomColor = Math.floor(Math.random() * 16777215).toString(16);
            return '#' + randomColor.padStart(6, '0');
        }
        
        function createLegend(data, colors) {
            var legendDiv = document.getElementById('legend');
            legendDiv.innerHTML = '';
        
            for (var i = 0; i < data.getNumberOfRows(); i++) {
                var label = document.createElement('div');
                label.className = 'legend-item';
                var colorBox = document.createElement('div');
                colorBox.className = 'legend-color';
                colorBox.style.backgroundColor = colors[i];
                
                label.innerHTML = data.getValue(i, 0) + ': ' + data.getValue(i, 1);
                label.prepend(colorBox);
                legendDiv.appendChild(label);
            }
        }
    </script>
</head>
<body>
    <h1><?php echo $title['title']; ?></h1>
	<div class="div-subtitle"><span class="font-subtitle"><?php echo $title['subtitle']; ?></span></div>
	<div id="chart_div" style="display: inline-block;"></div>
    <div id="legend"></div>
    <button class="btn-primary no-print" onclick="window.print();"><i class="fa fa-gear"></i>Print</button>
</body>
</html>




