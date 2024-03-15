<?php
$con = mysqli_connect("localhost","root","","charts");

if($con){
    echo "connected";
}
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['employee', 'contribution'],
        <?php
        $sql = "SELECT * FROM contribution";
        $fire = mysqli_query($con,$sql);
        while ($result = mysqli_fetch_assoc($fire)) {
            echo "['".$result['employee']."',".$result['contribution']."],";
        }
        ?>
        ]);

        // var options = {
        //   title: 'Employee by Department'

        // };
      var options = {
        title: 'Employee by Department',
        titleTextStyle: {
          fontSize: 20, // Set the font size to 18 pixels
          bold: true     // Make the title bold
        },
        legend: { position: 'bottom' }  
      };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
