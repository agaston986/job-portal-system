<?php 
session_start();
require "config.php";
if(isset($_POST['post-job'])){
if(!isset($_SESSION[companyId])){
  
  $sql = "select * from jobposts where company_id='$_SESSION[companyId]'; ";
		
		$result=mysql_query($con,$sql);
		$row=mysql_fetch_array($result);
			$_SESSION['title']=$row['title'];
			echo $_SESSION['title'];

		
}
}
?><!-- 
<!DOCTYPE html>
<head>
	<title>
		
	</title>
</head>
<body>
	<div class="flex-holder">
      <div class="post-job-div">
        <div class="post-job">
          <form action="postjob_logic.php" method="POST">
            <p>Job Title</p>
            <input type="text" name="title" value="<?php echo $_SESSION['title'];?>" />
            <p>Job Description</p>
            <textarea
              name="Job_description"
              id=""
              cols="30"
              rows="10" value="<?php echo $_SESSION['Job_description'];?>"
            ></textarea>
            <p>Job Objectives</p>
            <textarea
              name="Job_objectives"
              id=""
              cols="30"
              rows="10"
             value="<?php echo $_SESSION['job_objectives'];?>"></textarea>

            <p>Minimum qualification</p>
            <textarea
              name="min_qualification"
              id=""
              cols="30"
              rows="10" value="<?php echo $_SESSION['min_qualification'];?>"
            ></textarea>
            <p>Date of expiry</p>
            <input type="date" name="dateofexpiry"/>
            <br />
            <input name="company_id" value="<?php echo $_SESSION['companyId']; ?>" style="display:none"/>
            <button class="post-job-button" name="post-job">Post Job</button>
          </form>
        </div>
      </div>
  </div>
</body>
</html> -->