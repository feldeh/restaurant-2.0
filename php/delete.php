<?php 

require_once __DIR__ . '/config.php';

	$contact_id = $_GET['contact_id'];
	$sql = "DELETE FROM contacts WHERE id=$contact_id";

	$res = mysqli_query($con, $DelSql);
	if ($res) {
		header("Location: view.php");
	}else{
		echo "Failed to delete";
	}

 ?>