<?php
 require_once("../dbConnection/connect.php");
   // include 'includes/action.php';
?>
<!DOCTYPE html>
<html lang="en">
<!-- head -->

<body id="body">
    <div class="container">
        <!-- top navbar -->
        
        <main>
            <div class="main__container">
                <!-- dashboard title and greetings -->
                <div class="main__title">
                    <!-- <img src="images/hello.svg" alt=""> -->
                    <div class="main__greeting">
                        <h1>Birds Summary</h1>
                    </div>
                </div>
                <!-- dashboard title ends here -->

                <!-- Div for containing Feed Summary: Feed Consumed and Feed Remaining -->
                
                <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
                                
                <!-- End of Div for containing Feed Summary -->

            </div>
        </main>
        
        <!-- sidebar nav -->
       
    </div>
  
    <!-- <script src="script.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript"> -->
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['NoofHens', 'numberofeggs'],
                <?php
                    echo "['NoofHens', " . $NumberofHens . "],";
          
                    echo "['numberofeggs', " . $numberofeggs . "],";
         
                ?>
            ]);

            var options = {
                title: 'Birds Alive vs. Feed Dead',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
</body>
</html>