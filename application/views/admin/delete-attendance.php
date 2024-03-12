
<?php
include 'includes/conn.php';


	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM attendance WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Attendance deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

    // Redirect to manage-attendance.php using base_url()
    redirect(base_url('manage-attendance'));
	

	
?>