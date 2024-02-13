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
<div class="full">
        <div id="inner_full>" >
            <div id="header"><a href="login.php" style="text-decoration: none;color: white" top="50%"; left="50%";>
            <h1  align="center"><br>Blood bank management system</a></h1></div>
            <div id="body" >
                
                <form action=""  method="post">
                 <table id="box" align="center">
                    <tr>
                        <td width="200px" height="80px"><b>Enter username</b></td>
                        <td width="200px" height="80px"><input type="text" name="un" placeholder="Enter username" style="width: 150px; height: 30px;border radius:10px"></td>
                    </tr> 
                    <tr>
                        <td width="200px" height="80px"><b>Enter password</b></td>
                        <td width="200px" height="80px"><input type="text" name="ps" placeholder="Enter password" style="width: 150px; height: 30px;border radius:10px" ></td>
                    </tr> 
                    <tr>
                        <td ><input type="submit" name="sub" value="Login" style="width: 50px; height: 20px; border radius:5px"></td>
                    </tr> 
                 </table>
                </form>
                
                <?php
                if(isset($_POST['sub']))
                {
                  $un=$_POST['un'];
                  $ps=$_POST['ps'];
                  $q=$db->prepare("SELECT * FROM admin WHERE uname='$un' AND pass='$ps'");
                  $q->execute();
                  $res=$q->fetchAll(PDO::FETCH_OBJ);
                  if($res)
                  {
                    $_SESSION['un']=$un;
                    header("Location:admin-home.php");
                  }
                  else
                  {
                     echo "<script>Alert('Wrong User')</script>";
                  }
               }
                ?>

            </div>
            <div id="footer"><h3  align="center"><br>copyright@bloodbankproject</h3></div>
        </div>
</div>
</body>
</html>