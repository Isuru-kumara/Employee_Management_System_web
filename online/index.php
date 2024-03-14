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

<!DOCTYPE HTML>
<html>

<head>
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
                    radius: "100%",
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
                    text: "Employee Work Location Breakdown"
                },
                subtitles: [{
                    text: "Drill down to see shift details",
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
    </style>
</head>

<body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <button class="btn invisible" id="backButton">&lt; Back</button>
</body>

</html>
