<?php
  
  session_start();
  @include("config.php");

  $userprofile = $_SESSION['user_name'];

  if($userprofile == true)
  {

  }
  else
  {
    header('location:login_form.php');
  }

  $query1 = "SELECT gender, count(*) as number1 FROM survey GROUP BY gender";
  $result1 = mysqli_query($conn,$query1);

  $query2 = "SELECT subject, count(*) as number2 FROM survey GROUP BY subject";
  $result2 = mysqli_query($conn,$query2);

  $query3 = "SELECT class, count(*) as number3 FROM survey GROUP BY class";
  $result3 = mysqli_query($conn,$query3);

  $query4 = "SELECT finance, count(*) as number4 FROM survey GROUP BY finance";
  $result4 = mysqli_query($conn,$query4);

?>


<html>
  <head>
    <link rel="stylesheet" href="design.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart1);
      google.charts.setOnLoadCallback(drawChart2);
      google.charts.setOnLoadCallback(drawChart3);
      google.charts.setOnLoadCallback(drawChart4);

      function drawChart1() {

        var data1 = google.visualization.arrayToDataTable([
          ['gender', 'number1'],
          <?php 
            while($row1=mysqli_fetch_array($result1))
            {
              echo"['".$row1["gender"]."', ".$row1["number1"]."],";
            }
          ?>
        ]);

        var options1 = {
          title: 'Percentage of male and female participants',
          pieHole:0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

        chart.draw(data1, options1);
      }

      function drawChart2() {

        var data2 = google.visualization.arrayToDataTable([
          ['subject', 'number2'],
          <?php 
            while($row2=mysqli_fetch_array($result2))
            {
              echo"['".$row2["subject"]."', ".$row2["number2"]."],";
            }
          ?>
        ]);

        var options2 = {
          title: 'Percentage of subjects picked',
          pieHole:0.4,
        };

        var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart2.draw(data2, options2);
      }

      function drawChart3() {

        var data3 = google.visualization.arrayToDataTable([
          ['class', 'number3'],
          <?php 
            while($row3=mysqli_fetch_array($result3))
            {
              echo"['".$row3["class"]."', ".$row3["number3"]."],";
            }
          ?>
        ]);

        var options3 = {
          title: 'Classes of students who took the survey',
          pieHole:0.4,
        };

        var chart3 = new google.visualization.PieChart(document.getElementById('piechart3'));

        chart3.draw(data3, options3);
      }

      function drawChart4() {

        var data4 = google.visualization.arrayToDataTable([
          ['finance', 'number4'],
          <?php 
            while($row4=mysqli_fetch_array($result4))
            {
              echo"['".$row4["finance"]."', ".$row4["number4"]."],";
            }
          ?>
        ]);

        var options4 = {
          title: 'Financial source of students taking the survey',
          pieHole:0.4,
        };

        var chart4 = new google.visualization.PieChart(document.getElementById('piechart4'));

        chart4.draw(data4, options4);
      }
    </script>
  </head>
  <body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">⇑</button>
    <div class="nav">
      <img src="logo_black.png">
      <nav>
          <ul>
              <li><a href="landing.php">HOME</a></li>
              <li><a href="survey.php">SURVEY</a></li>
              <li><a href="#query">SEARCH</a></li>
          </ul>
      </nav>
      <a href="logout_form.php"><button>Logout</button></a>
    </div>
    <div class="survafter">
      <h1>Thank you for your input. We've received your survey!</h1>
      <h3>Here's some statistics of people who have participated in our survey. You can analyze them to furthur consider your decisions.</h3>
    </div>
    <div>
      <div style="width: 100%; height: 500px;  display: flex;">
        <div id="piechart1" style="width: 900px; height: 500px;"></div>
        <div id="piechart2" style="width: 900px; height: 500px;">
        </div>
      </div>  
      <div style="width: 100%; height: 500px;  display: flex;">
        <div id="piechart3" style="width: 900px; height: 500px;">
        </div>
        <div id="piechart4" style="width: 900px; height: 500px;">
        </div>
      </div>
    </div>
  <div class="footer">
        <h2>Developed by:</h1>
        <h3>Md. Shams Kadir Khan, Amina Begum Tithi, Fahmida Sultana Mahi, Sadia Mahfuz Sraboni<br>For the project of 2nd Year 2nd Semester</h3>
        <div class="contact">
            <a href="https://www.facebook.com/XanthophyllCB7"><img src="icon1.png"></a>
            <a href="https://www.instagram.com/guide_of_teyvat"><img src="icon2.png"></a>
            <a href="https://twitter.com/XanthophyllP"><img src="icon3.png"></a>
            <a href="landing.php"><img src="icon4.png"></a>  
        </div>    
    </div>
    <script src="design.js"></script>   
</body>
</html>
