<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_management";

$conn = mysqli_connect("localhost", "root", "", "employee_management");

// Fetch attendance data for each department
$departments = ['Full stack developer', 'UI/UX designer', 'Human Resource', 'Back end developer', 'Front end Developer', 'Quality assurance'];
$attendance_data = [];
foreach ($departments as $dept) {
    $result = mysqli_query($conn, "SELECT COUNT(*) AS count, status FROM attendance JOIN employees ON attendance.employee_id = employees.id WHERE employees.department = '$dept' GROUP BY status");
    $attendance_data[$dept] = ['Present' => 0, 'Absent' => 0];
    while ($row = mysqli_fetch_assoc($result)) {
        $attendance_data[$dept][$row['status']] = $row['count'];
    }
}

// Prepare data for chart
$dataPoints = [];
foreach ($attendance_data as $dept => $counts) {
    $total = array_sum($counts);
    $attendance_percentage = ($total > 0) ? ($counts['Present'] / $total) * 100 : 0;
    $absence_percentage = 100 - $attendance_percentage;
    
    // Add data points for each department
    $dataPoints[] = ["label" => "$dept", "y" => $attendance_percentage, "indexLabel" => "{$attendance_percentage}%", "color" => "#39F3E5"];
    $dataPoints[] = ["label" => "$dept", "y" => $absence_percentage, "indexLabel" => "{$absence_percentage}%", "color" => "#3E09A1"];
    
    // Add a gap between each department
    $dataPoints[] = ["label" => "", "y" => 0];
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script>
        window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer", {
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
                    showInLegend: true,
                    legendText: "Attendance",
                    name: "Attendance",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();
        }
    </script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
</body>
</html>
