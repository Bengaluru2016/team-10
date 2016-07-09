<!doctype html>
<html>
<head>
<meta charset=@utf-8@>




<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script></head>

       
	   	   <body>
	<script>
	    google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawSeriesChart);

    function drawSeriesChart() {

      var data = google.visualization.arrayToDataTable([
        ['ID', 'Success', 'Advancement', 'Region',     'Population'],
        ['-',    80.66,              1.67,      'North America',  33739900],
        ['-',    79.84,              1.36,      'Europe',         81902307],
        [':',    66.6,               1.84,      'Europe',         55230951],
        ['o',    72.73,              2.78,      'Middle East',    79716203],
        ['GBR',    80.05,              2,         'Europe',         61801570],
        ['IRN',    72.49,              1.7,       'Middle East',    141850000],
        ['IRQ',    68.09,              4.77,      'Middle East',    310907639],
        ['ISR',    81.55,              2.96,      'Middle East',    7485600],
        ['RUS',    68.6,               1.54,      'Europe',         141850000],
        ['USA',    78.09,              2.05,      'North America',  307007000]
      ]);

      var options = {
        title: 'Correlation between life expectancy, fertility rate ' +
               'and population of some world countries (2010)',
        hAxis: {title: 'Success'},
        vAxis: {title: 'Advancement'},
        bubble: {textStyle: {fontSize: 10}}
      };
	  

      var chart = new google.visualization.BubbleChart(document.getElementById('series_chart_div'));
      chart.draw(data, options);
    }
	</script>
	
	<div id="series_chart_div" style="width: 900px; height: 500px;"></div>
	</body>