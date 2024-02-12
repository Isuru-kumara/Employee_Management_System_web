<?php
	$conn = new mysqli('localhost', 'root', '', 'employee_attendance');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>