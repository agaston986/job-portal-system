<?php 
session_start();
if(isset($_POST['apply'])){

	 require 'config.php';
	$fname=$_POST['fname'];
	$resume =$_POST['file'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$contact=$_POST['phone'];
	$working_experience=$_POST['working_experience'];
	$resume = $_FILES['file']['name'];
	$fileTnpName = $_FILES['file']['tnp_name'];
	$path = "files/".$resume;
    $CGPA=$_POST['CGPA'];
    $jobposts_id=$_POST['jobposts_id'];
    $userprofile_id=$_POST['userprofile_id'];
	$other=$_POST['other'];
	$qualification=$_POST['qualification'];
	

	
	if($CGPA >= 2 && $CGPA <= 5){
    $sql="insert into application(first_name,last_name,email,phone,working_experience,resume,CGPA,jobposts_id,userprofile_id,other,qualification) values(?,?,?,?,?,?,?,?,?,?,?)";
	
	$insert=$con->prepare($sql);
	$insert->bind_param("ssssisiiiss",$fname,$lname,$email,$contact,$working_experience,$resume,$CGPA,$jobposts_id,$userprofile_id,$other,$qualification);
    
	if($insert->execute()){
		// move_uploaded_file($fileTnpName,$path);
		echo "application succesful";
		header ("location:index.php");
	}else{
	}

	}else {

	$sql="insert into nonsuccessful_applicants(first_name,last_name,email,phone,working_experience,resume,CGPA,jobposts_id,userprofile_id,other,qualification) values(?,?,?,?,?,?,?,?,?,?,?)";
	
	$insert=$con->prepare($sql);
	$insert->bind_param("ssssisiiiss",$fname,$lname,$email,$contact,$working_experience,$resume,$CGPA,$jobposts_id,$userprofile_id,$other,$qualification);
		if($insert->execute()){
		echo "application succesful";
		header ("location:index.php");
	}else{
		echo "specify any other certifications";

	}


	}
	
}
?>