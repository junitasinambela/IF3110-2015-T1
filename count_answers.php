<?php 
	include('db_connector.php');
	$sql = "SELECT COUNT(*) AS count FROM answer WHERE id = '$id'";
	$answer = mysqli_query($con,$sql);
	$count = mysqli_fetch_array($answer);
	mysqli_close($con);
?>