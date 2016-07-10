<!doctype html>
<html>
<head>





<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script></head>

       
	   	   <body>

            <div id="page-wrap">

    <h1>Quiz </h1>
    
        <?php
            $host = 'localhost';
      $user = 'root';
      $pwd = '';
      $db = 'learningms';

  $conn = mysql_connect($host,$user,$pwd);
  if(!$conn)
    die("Failed to connect".mysql_error());
  echo "connected";

  if(!mysql_select_db($db,$conn))
    die(mysql_error());


            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5) { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 5 correct</div>";

            $insert = "INSERT INTO quiz VALUES(1,1,1,1,1,'$totalCorrect',5)";



  $run_query = mysql_query($insert,$conn);

    if(!$run_query)
      echo "Failed to insert values\n";
            
        ?>

  
  </div>
  
  <script type="text/javascript">
  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
  </script>
  <script type="text/javascript">
  var pageTracker = _gat._getTracker("UA-68528-29");
  pageTracker._initData();
  pageTracker._trackPageview();
  </script>


	<script>
	    google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawSeriesChart);

    function drawSeriesChart() {

      var data = google.visualization.arrayToDataTable([
        ['ID', 'Success', 'Advancement', 'Region',     'Population'],
        ['6',    80.66,              1.67,      'Hyderabad',  33739900],
        ['5',    79.84,              1.36,      'Mumbai',         81902307],
        ['1',    66.6,               1.84,      'Mumbai',         55230951],
        ['2',    72.73,              2.78,      'Bengaluru',    79716203],
        ['7',    80.05,              2,         'Mumbai',         61801570],
        ['4',    72.49,              1.7,       'Bengaluru',    141850000],
        ['3',    68.09,              4.77,      'Bengaluru',    310907639],
        ['8',    81.55,              2.96,      'Bengaluru',    7485600],
        ['ME',    68.6,               1.54,      'Hyderabad',         141850000],
        ['1',    78.09,              2.05,      'Hyderabad',  107007000*'$totalCorrect']
      ]);

      var options = {
        title: 'Correlation between Success rate ' +
               'and Advancement of different users',
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