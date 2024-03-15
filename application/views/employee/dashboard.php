 <!-- Donut Chart -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_tracking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve total employee count
$sqlTotalEmployees = "SELECT COUNT(*) as totalEmployees FROM employees";
$resultTotalEmployees = $conn->query($sqlTotalEmployees);
$rowTotalEmployees = $resultTotalEmployees->fetch_assoc();
$totalEmployees = $rowTotalEmployees['totalEmployees'];

// Retrieve home and office employee count
$sqlHomeEmployees = "SELECT COUNT(*) as homeEmployees FROM employees WHERE location = 'Home'";
$resultHomeEmployees = $conn->query($sqlHomeEmployees);
$rowHomeEmployees = $resultHomeEmployees->fetch_assoc();
$homeEmployees = $rowHomeEmployees['homeEmployees'];

$officeEmployees = $totalEmployees - $homeEmployees;

// Prepare data for chart
$newVsReturningVisitorsDataPoints = array(
    array("y" => $homeEmployees, "name" => "Home", "color" => "#E7823A"),
    array("y" => $officeEmployees, "name" => "Office", "color" => "#546BC1")
);

// Total visitors calculation (for illustration purposes)
$totalVisitors = $totalEmployees * 2; // You need to replace this with the actual total visitors logic

?>

<!-- Bar Chart -->
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_management";

$conn = mysqli_connect($servername, $username, $password, $dbname);


$departments = ['Full stack developer', 'UI/UX designer', 'Human Resource', 'Back end developer', 'Front end Developer', 'Quality assurance'];
$attendance_data = [];
foreach ($departments as $dept) {
    $result = mysqli_query($conn, "SELECT COUNT(*) AS count, status FROM attendance JOIN employees ON attendance.employee_id = employees.id WHERE employees.department = '$dept' GROUP BY status");
    $attendance_data[$dept] = ['Present' => 0, 'Absent' => 0];
    while ($row = mysqli_fetch_assoc($result)) {
        $attendance_data[$dept][$row['status']] = $row['count'];
    }
}

$dataPoints1 = [];
$dataPoints2 = [];
foreach ($attendance_data as $dept => $counts) {
    $total = array_sum($counts);
    $attendance_percentage = ($total > 0) ? ($counts['Present'] / $total) * 100 : 0;
    $absence_percentage = 100 - $attendance_percentage;
  
    $dataPoints2[] = ["label" => "$dept", "y" => $attendance_percentage, "indexLabel" => "{$attendance_percentage}%", "color" => "#5B8499"];
    $dataPoints1[] = ["label" => "$dept", "y" => $absence_percentage, "indexLabel" => "{$absence_percentage}%", "color" => "#39F3E5"];
    
    $dataPoints1[] = ["label" => "", "y" => 0];
    $dataPoints2[] = ["label" => "", "y" => 0];
}
?>
 <head>
  <!-- Donut Chart -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <script>
        window.onload = function () {
            var totalVisitors = <?php echo $totalVisitors ?>;
            var visitorsData = {
                "Employee Work Location Breakdown": [{
                    click: visitorsChartDrilldownHandler,
                    cursor: "pointer",
                    explodeOnClick: false,
                    innerRadius: "75%",
                    legendMarkerType: "square",
                    name: "Employee Work Location Breakdown",
                    radius: "70%",
                    showInLegend: true,
                    startAngle: 90,
                    type: "doughnut",
                    dataPoints: <?php echo json_encode($newVsReturningVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
                }],
                "Home": [{
                    color: "#E7823A",
                    name: "Home",
                    type: "column",
                    xValueType: "dateTime",
                    dataPoints: <?php echo json_encode($newVsReturningVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
                }],
                "Office": [{
                    color: "#546BC1",
                    name: "Office",
                    type: "column",
                    xValueType: "dateTime",
                    dataPoints: <?php echo json_encode($newVsReturningVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            };

            var newVSReturningVisitorsOptions = {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: ""
                },
                subtitles: [{
                    // text: "Drill down to see shift details",
                    backgroundColor: "#2eacd1",
                    fontSize: 16,
                    fontColor: "white",
                    padding: 5
                }],
                legend: {
                    fontFamily: "calibri",
                    fontSize: 14,
                    itemTextFormatter: function (e) {
                        return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / totalVisitors * 100) + "%";
                    }
                },
                data: []
            };

            var visitorsDrilldownedChartOptions = {
                animationEnabled: true,
                theme: "light2",
                axisX: {
                    labelFontColor: "#717171",
                    lineColor: "#a2a2a2",
                    tickColor: "#a2a2a2"
                },
                axisY: {
                    gridThickness: 0,
                    includeZero: false,
                    labelFontColor: "#717171",
                    lineColor: "#a2a2a2",
                    tickColor: "#a2a2a2",
                    lineThickness: 1
                },
                data: []
            };

            var chart = new CanvasJS.Chart("chartContainer", newVSReturningVisitorsOptions);
            chart.options.data = visitorsData["Employee Work Location Breakdown"];
            chart.render();

            function visitorsChartDrilldownHandler(e) {
                chart = new CanvasJS.Chart("chartContainer", visitorsDrilldownedChartOptions);
                chart.options.data = visitorsData[e.dataPoint.name];
                chart.options.title = {
                    text: e.dataPoint.name
                }
                chart.render();
                $("#backButton").toggleClass("invisible");
            }

            $("#backButton").click(function () {
                $(this).toggleClass("invisible");
                chart = new CanvasJS.Chart("chartContainer", newVSReturningVisitorsOptions);
                chart.options.data = visitorsData["Employee Work Location Breakdown"];
                chart.render();
            });
        }
    </script>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script>
        function renderBarChart() {
            var chart = new CanvasJS.Chart("barchart", {
                animationEnabled: true,
                theme: "light2",
                // title:{
                //     text: "Monthly Attendance and Absences by Department"
                // },
                axisY:{
                    includeZero: true
                },
                legend:{
                    cursor: "pointer",
                    verticalAlign: "center",
                    horizontalAlign: "right",
                },
                data: [{
                    type: "column",
                    name: "Attendance",
                    indexLabel: "{y}",
                    yValueFormatString: "#3E09A1",
                    showInLegend: true,
                    dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
                   
                },{
                    type: "column",
                    name: "Absence",
                    indexLabel: "{y}",
                    yValueFormatString: "#39F3E5",
                    showInLegend: true,
                    dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?> 
                }]
            });
            chart.render();
        }

        // Call the function when the document is ready
        document.addEventListener("DOMContentLoaded", function() {
            renderBarChart();
        });
    </script>
  <style>
    #backButton {
            border-radius: 4px;
            padding: 8px;
            border: none;
            font-size: 16px;
            background-color: #2eacd1;
            color: white;
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .invisible {
            display: none;
        }
    .curve{
        border-radius: 15px;
    }
  </style>
 </head>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon curve">
            <div class="inner">
              <h3><?php 
              if(isset($leave))
              {
                echo sizeof($leave);
              }
              else{
                echo 0;
              }
              ?></h3>
              <p>Leaves</p>
            </div>
            <div class="icon">
              <i class="ionicons ion-log-out"></i>
            </div>  
            <a href="<?php echo base_url(); ?>view-leave" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>          
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red curve">
            <div class="inner">
              <h3><?php 
              if(isset($leave))
              {
                echo sizeof($leave);
              }
              else{
                echo 0;
              }
              ?></h3>
              <p>Requests</p>
            </div>
            <div class="icon">
              <i class="ionicons ion-log-out"></i>
            </div>  
            <a href="<?php echo base_url(); ?>view-request" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>          
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow curve">
            <div class="inner">
              <h3><?php 
              if(isset($leave))
              {
                echo sizeof($leave);
              }
              else{
                echo 0;
              }
              ?></h3>
              <p>Letters</p>
            </div>
            <div class="icon">
              <i class="ionicons ion-log-out"></i>
            </div>  
            <a href="<?php echo base_url(); ?>view-letters" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>          
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green curve">
            <div class="inner">
              <h3><?php 
              if(isset($leave))
              {
                echo sizeof($leave);
              }
              else{
                echo 0;
              }
              ?></h3>
              <p>Salary</p>
            </div>
            <div class="icon">
              <i class="ionicons ion-log-out"></i>
            </div>  
            <a href="<?php echo base_url(); ?>view-letters" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>          
          </div>
        </div>
      </div>
      <div class="row">
        
        <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputPassword1" style="font-size:larger">Employee Availability</label>      
                    <div id="chartContainer" style="height: 340px; width: 400px;"></div>  <!-- Donut Chart -->
                    <button class="btn invisible" id="backButton">&lt; Back</button>             
                  </div>
                </div>
                <div class="col-md-7">
                  <div id="box">
                    <div class="form-group">
                    <label for="exampleInputPassword1" style="font-size:larger">Employee Attendance</label><br>
                    <div id="barchart" style="height: 350px; width: 100%;"></div>  <!-- Bar chart -->                   
                    </div>
                    </div>
        </div>                    
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
