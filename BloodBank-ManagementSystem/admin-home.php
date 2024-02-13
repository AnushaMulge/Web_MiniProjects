<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="/bloodbank1/s1.css">
</head>
<body>
<div id="full">
        <div id="inner_full>">
            <div id="header">
             
               <div>
                <h1>
                <div class="logo">
               <img src="logo.jpg"><a href="/bloodbank1/admin-home.php" style="text-decoration: none;color: white" >&nbsp; Blood bank management system</a></div>
              </h1>
               </div>
             </div>
            </div>
            <div id="admin">
                <br>
                <?php
                 $un=$_SESSION['un'];
                 if(!$un)
                 {
                    header("Location:/bloodbank1/index.php");
                 }
                ?>
                 <br><br>
                 <h2>&nbsp; Welcome Admin</h2>
                 <br><br><br>
            
                 <ul>
                   <li><a href='index.php'>Patient List</a></li>
                   <li><a href='bloodtype.php'>Blood</a></li>
                   <li><a href='donor.php'>Donor</a></li>
                  
                 </ul><br><br><br><br><br>
                 <ul>
                   <li><a href='bbavail.php'>BloodAvailabilty</a></li>
                   <li><a href='doctor.php'>Doctor</a></li>
                   <li><a href='hospital.php'>Hospital</a></li>
                   
                 </ul><br><br><br><br><br>
                 <ul>
                   <li ><a href='bloodbank.php'>Bloodbank </a></li>
                  </ul>
            </div>
            <div id="footer">
              <p align="center"><a href="logout.php"><font color="blue"><br>Logout</a></p>
              <h3  align="center"><font color="white">copyright@bloodbankproject</h3>
            </div>
            
        </div>
    </div>
</body>
</html>
