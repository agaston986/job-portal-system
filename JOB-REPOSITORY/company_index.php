<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    
    <title>DashBoard</title>
    
</head>
<body>
<div class="container">
<div class="navigation">
<ul>
    <li > 
        <a href="#">
        <span class="icon"> 
            <ion-icon name="logo-apple"></ion-icon></span>
        <span class="title">COMPANY ADMIN</span>
        </a>
       </li>

    <li> 
    <a href="#">
    <span class="icon"> <ion-icon name="reorder-four-outline"></ion-icon></span>
    <span class="title">Jobs</span>
</a>
</li>
<li> 
    <a href="#">
    <span class="icon"> <ion-icon name="reorder-four-outline"></ion-icon></span>
    <span class="title">Applicants</span>
</a>
</li>
<li> 
<li> 
    <a href="#">
    <span class="icon"><ion-icon name="chatbox-outline"></ion-icon></span>
    <span class="title">chat</span>
</a>
</li>
<li> 
    <a href="#">
    <span class="icon"> <ion-icon name="log-out-outline"></ion-icon></span>
    <span class="title"> signout</span>
</a>
</li>

    </ul>
</div>

<!-- <=======main========= -->
<div class="main">
   
    <div class="picture-div">
        <img src="./work.jpg" alt="home-feed-pic"/>
      </div>
      <!-- =====oredrs  -->
      <div class="details">
     

        <div class="recentOrders">
        <div class="cardHeader">
            <h2>Posted jobs</h2>
            <a class="btn" href="addjob.php" >Add job</a>
        </div>
        <table>
            <thead>
                <tr>
                    <td>job Title </td>
                    <td>Qualifications</td>
                    <td>Date posted</td>
                    <td>Expiry_date</td>
                </tr>
            </thead>
            <?php  
      
      require 'config.php';
       $sql="SELECT title,min_qualification,date_posted,date_of_expiry FROM jobposts";
       $smt = $con->prepare($sql);
       $smt->execute();
       $smt -> bind_result($title,$qul,$datenow,$expiry_date);
       $smt-> store_result();
       while($smt->fetch()){ ?>
            <tbody>
            
                <tr>
                    <td name ="title" action="delete.php"><?php echo $title ?></td>
                    <td><?php echo $qul ?></td>
                    <td><?php echo $datenow?></td>
                    <td><?php echo $expiry_date ?></td>
                    <td> <span class="status delivered"><a href="updatejob.php">update</a></span></td>
                    <td> <a href="deletejob.php" onclick="" > <span class="status delivered">Delete</span></a>
                </tr>
            </tbody>
            <?php }?>
        </table>
   
      </div>
   
   
</div>
</div>
<script type="" src="javascript.js"> </script>

</body>
</html>


  