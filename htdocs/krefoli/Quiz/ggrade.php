<?php
session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!doctype html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  
  <title>PHP Quiz</title>
  
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

  <div id="page-wrap">

    <h1>Quiz </h1>
    
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script></head>

       
         <body>
  <script>
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawSeriesChart);

    function drawSeriesChart() {

      var data = google.visualization.arrayToDataTable([
        ['ID', 'Success', 'Advancement', 'Region',     'Population'],
        ['1',    80.66,              1.67,      'Hyderabad',  33739900],
        ['2',    79.84,              1.36,      'Bengaluru',         81902307],
        ['3',    66.6,               1.84,      'Bengaluru',         55230951],
        ['4',    72.73,              2.78,      'Mumbai',    79716203],
        ['5',    80.05,              2,         'Bengaluru',         61801570],
        ['6',    72.49,              1.7,       'Mumbai',    141850000],
        ['7',    68.09,              4.77,      'Mumbai',    310907639],
        ['8',    81.55,              2.96,      'Mumbai',    7485600],
        ['9',    68.6,               1.54,      'Bengaluru',         141850000],
        ['ME',    78.09,              2.05,      'Hyderabad',  107007000]
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


<div id="page-wrap">

    <h1 align="center">Results are out...!!!! </h1>
    
        <?php
            $host = 'localhost';
      $user = 'root';
      $pwd = '';
      $db = 'villgro';
     
  $conn = mysql_connect($host,$user,$pwd);
  if(!$conn)
    die("Failed to connect".mysql_error());
  echo "connected";
  $conn = mysql_connect($host,$user,$pwd);
  if(!$conn)
    die("Failed to connect".mysql_error());
  //echo "connected";

  if(!mysql_select_db($db,$conn))
    die(mysql_error());
  if(!mysql_select_db($db,$conn))
    die(mysql_error());

 $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            session_start();

            $totalCorrect =0;

            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5) { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            echo "<div id='results align='center''>$totalCorrect / 5 correct</div>";


           // $insert = "INSERT INTO quiz VALUES(1,1,1,1,1,'$totalCorrect',5)";



            $name = $_SESSION['name'];

            if ($totalCorrect<3)
            {
              echo "Please replay this level";
           ?>
<html>
<body>
  <a href = "index1.php"> index</a>

</body>
</html>

           <?php

            }
            else
            {

              echo "proceed to the next level";
               ?>
<html>
<body>
  <a href = "index3.php"> index</a>

</body>
</html>

           <?php
            
            }
             echo $name;
             $insert = "INSERT INTO quizz(level2,name) VALUES($totalCorrect,'$name')";


  $run_query = mysql_query($insert,$conn);
  //$run_query = mysql_query($insert,$conn);

    if(!$run_query)
      echo "Failed to insert values\n";
    if(!$run_query)
      //echo "Failed to insert values\n";
            
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

</body>

</html>

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


  
  <div id="series_chart_div" style="width: 900px; height: 500px;"></div>
  </body>
