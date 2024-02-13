<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CarRentalWebsite/LStyleSheet.css">
    <title>Login Page</title>
</head>
<body>
    <br>
    <h2>Login Form</h2>
    <form action="" method="post">
        <div class="imgcontainer">
            <img src="/CarRentalWebsite/Images/User_Avatar.png" alt="Avatar">
        </div>
        <div class="container">
            <label for="username">Username</label>
            <input type="text" placeholder="Enter Username" name="uname" required>
            <label for="password">Password</label>
            <input type="password" placeholder="Enter Password" name="pass" required>
            <button type="submit" name="sub" class="login-btn" onclick="window.location.href='http://localhost/CarRentalWebsite/HomePage.php'";>Log in</button>
            <label for="remember">
                <input type="checkbox" checked="checked" name="remember">Remember me
            </label>
        </div>
        <div class="container" style="background-color: #f1f1f1;">
            <button type="button" class="cancel-btn" onclick="window.location.href='http://localhost/CarRentalWebsite/HomePage.php'";>Cancel</button>
            <a href="#">Forgot Password?</a>
        </div>
    </form>
    <?php
     if(isset($_POST['sub']))
     {
          $un=$_POST['uname'];
          $ps=$_POST['pass'];
          $q=$db->prepare("SELECT * FROM login WHERE uname='$un' AND pass='$ps'");
          $q->execute();
          $res=$q->fetchAll(PDO::FETCH_OBJ);
          if($res)
          {
               $_SESSION['uname']=$un;
               header("Location:/CarRentalWebsite/HomePage.php");
          }
          else
          {
               echo "<script>Alert('Wrong User')</script>";
          }
      }
?>
</body>
</html>
