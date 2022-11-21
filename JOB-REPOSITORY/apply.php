<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application form</title>
    <link rel="stylesheet" href="main.css" type="text/css"/>
</head>
<body>
    <div class="header-home">
        <h1 style="margin-top: 10px">Job Repository</h1>
        <input type="text" />
        <button>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="28"
            height="30"
            fill="currentColor"
            class="bi bi-search"
            viewBox="0 0 16 16"
          >
            <path
              d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
            />
          </svg>
          <p>Search</p>
        </button>
        <a href="index.php">
        <button class="home-btn">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="30" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
          </svg>
          <p>Home</p>
        </button></a>
        <a href=""><button>
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="30" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
            <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
          </svg>
          <p>Jobs</p>
        </button></a>
        <a href="#"><button>
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="30" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
          </svg>
          <p>Notifications</p>
        </button></a>
        <a href="#"><button>
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="30" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
            <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
          </svg>
          <p>Messaging</p>
        </button></a>
  
        <a href="#"><button class="profile-btn">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
          <p>Profile</p>
        </button></a>
    </div>
    <br/>
    <!-- application form holder -->
    <div class="form-holder">
        <form enctype ="multipart/form-data" method="POST" action="apply_logic.php" name="form" onSubmit="return validateform()">
        <p>First Name</p>
        <input type="text" name="fname" id="fname" value="<?php echo $_SESSION['firstName']; ?>"/>
        <p>Last Name</p>
        <input type="text" name="lname" id="lname" value="<?php echo $_SESSION['lastName']; ?>"/>
        <p>Email</p>
        <input type="email" name="email" id="email" value="<?php echo $_SESSION['email']; ?>"/>
        <p>Contact</p>
        <input type="text" name="phone" id="phone" value="<?php echo $_SESSION['phone']; ?>"/>
        <p>CGPA</p>
        <input type="decimal" name="CGPA" id="CGPA"/>
        <p>Experience level</p>
        <input type="number" name="working_experience" id="working_experience"/>
        <p>Qualification</p>
        <textarea type="text" name="qualification" id="qualification"></textarea>
        <p>Other certifications</p>
        <input type="text" name="other" id="other"/>
        <p>Resume/CV</p>
        <input type="file" name="file" id="resume"/>
        <br/>
        <input type="number" name="jobposts_id" style="display:none" value="<?php echo $_SESSION['jobposts_id']; ?>"/>
        <input type="number" name="userprofile_id" style="display:none" value="<?php echo $_SESSION['userid']; ?>"/>
        
        <button type = "submit"name="apply">Apply</button>
        </form>
    </div>
    <script type="application/javascript">
var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 

function validateform()
{
  if(document.form.fname.value == "")
  {
    alert("Applicants first name should not be empty..");
    document.form.fname.focus();
    return false;
  }
  else if(!document.form.fname.value.match(alphaspaceExp))
  {
    alert("Applicants first name not valid..");
    document.form.fname.focus();
    return false;
  }
  else if(document.form.lname.value == "")
  {
    alert("Applicants last name should not be empty..");
    document.form.lname.focus();
    return false;
  }
  else if(!document.form.lname.value.match(alphaspaceExp))
  {
    alert("Applicants last name valid..");
    document.form.lname.focus();
    return false;
  }
  else if(document.form.email.value == "")
  {
    alert("Applicants email should not be empty..");
    document.form.email.focus();
    return false;
  }
  else if(!document.form.email.value.match(emailExp))
  {
    alert("Applicants email valid..");
    document.form.email.focus();
    return false;
  }
  else if(document.form.CGPA.value == "")
  {
    alert("CGPA should not be empty..");
    document.form.CGPA.focus();
    return false;
  }
   else if(!document.form.CGPA.value.match(numericExpression))
  {
    alert("CGPA not valid..");
    document.form.CGPA.focus();
    return false;
  }
  else if(document.form.working_experience.value == "")
  {
    alert("working_experience should not be empty..");
    document.form.working_experience.focus();
    return false;
  }
   else if(!document.form.working_experience.value.match(numericExpression))
  {
    alert("working_experience not valid..");
    document.form.working_experience.focus();
    return false;
  }
  else if(document.form.phone.value == "")
  {
    alert("phone should not be empty..");
    document.form.phone.focus();
    return false;
  }
  else if(document.form.phone.value.length < 10 || document.form.phone.length >14 )
  {
    alert("phone length should be between 10 and 14characters...");
    document.form.phone.focus();
    return false;
  }

  else if(document.form.other.value == "" )
  {
    alert("Please specify any other qualifications");
    document.form.other.focus();
    return false;
  }
  else if(document.form.other.value == "none"){
   alert("sucess");
  }
  
  else if(document.form.resume.value == "" )
  {
    alert("Kindly resume the status..");
    document.form.resume.focus();
    return false;
  }
  else
  {
    return true;
  }
}
</script>
</body>
</html>