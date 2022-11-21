<?php 
session_start();
if(isset($_POST['updateList'])){
	require 'config.php';
	$jobpost_id = $_POST['jobId'];
	$sql = "select * from application where jobposts_id =".$jobpost_id;
    $result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
	
	$_SESSION['jobposts_id']= $row['jobposts_id'];
	$_SESSION['lastName']= $row['last_name'];
	$_SESSION['email']= $row['email'];
	header("location: employee.php");
	// echo $row['first_name'];
	// echo $row['last_name'];
	// echo $row['email'];
}
?>