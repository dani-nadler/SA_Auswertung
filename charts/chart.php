<?php
 include_once '../sa/class_chart.php';
$HTML =<<<XYZ
<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
 
      // Load the Visualization API and the charts package.
      google.load('visualization', '1.0', {'packages':['corechart']});
 
      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);
 
      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
 
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Klasse');
        data.addColumn('number', 'Anzahl Studenten');
        data.addRows({$pie_chart_data});
 
        // Set chart options
        var options = {title:'Anzahl Studenten pro Klasse',
         titleTextStyle: {fontName: 'Lato', fontSize: 18, bold: true},
                       height: 500,
                       is3D: true,
         colors:['#0F4F8D','#2B85C1','#8DA9BF','#F2C38D','#E6AC03','#F09B35', '#D94308', '#013453'],
         chartArea:{left:30,top:30,width:'100%',height:'80%'}};
 
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('pie_chart_div'));
        chart.draw(data, options);
      }
 
      // Make the charts responsive
      jQuery(document).ready(function(){
        jQuery(window).resize(function(){
          drawChart();
        });
      });
 
    </script>
 
    <div id="pie_chart_div"></div>
        
        
        
     -----------------------------------------------------------------------------------------------------------------------------------------------   
        
        
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
 
      // Load the Visualization API and the charts package.
      google.load('visualization', '1.0', {'packages':['corechart']});
 
      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart2);
 
      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart2() {
 
        // Create the data table.
        var data2 = new google.visualization.DataTable();
        data2.addColumn('string', 'Klasse');
        data2.addColumn('number', 'Anzahl Studenten');
        data2.addColumn({ type: 'string', role: 'style' });
        data2.addRows({$column_chart_data});
 
        // Set chart options
        var options2 = {title:'Anzahl Studenten pro Klasse',
         titleTextStyle: {fontName: 'Lato', fontSize: 18, bold: true},
                       height: 500,
                       is3D: true,
         colors:['#91A753','#C6D9AC'],
         backgroundColor: '#886622',
         vAxis: {minValue: 0},
         chartArea:{left:30,top:30,width:'100%',height:'80%'}};
 
        // Instantiate and draw our chart, passing in some options.
        var chart2 = new google.visualization.ColumnChart(document.getElementById('column_chart_div'));
        chart2.draw(data2, options2);
      }
 
      // Make the charts responsive
      jQuery(document).ready(function(){
        jQuery(window).resize(function(){
          drawChart2();
        });
      });
 
    </script>
 
    <div id="column_chart_div"></div>
XYZ;
 
    echo $HTML;
 
?>

