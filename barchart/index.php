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

<!DOCTYPE HTML>
<html>
<head>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script>
        function renderBarChart() {
            var chart = new CanvasJS.Chart("barchart", {
                animationEnabled: true,
                theme: "light2",
                title:{
                    text: "Monthly Attendance and Absences by Department"
                },
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
</head>
<body>
<div id="barchart" style="height: 370px; width: 100%;"></div>
</body>
</html>
