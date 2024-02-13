<?php
    $servername ="localhost:3307";
    $username="root";
    $password="";
    $database="carrentalwebsite";

    $connection=new mysqli($servername,$username,$password,$database);

    $name="";
    $uname="";
    $email="";
    $phno ="";
    $password="";
    $confirmpassword="";

    $errorMessage="";
    $sucessMessage="";


  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    //retain previous values
            $name=$_POST["name"];
            $uname=$_POST["uname"];
            $email=$_POST["email"];
            $phno=$_POST["phno"];
            $password=$_POST["password"];
            $confirmpassword=$_POST["confirmpassword"];

            do
            {
              if( empty($name) || empty($uname) || empty($email)  || empty($phno)   || empty($password) || empty($confirmpassword) )
              {
                $errorMessage="All the fields are required";
                break;
              }
              else if($password!=$confirmpassword){
                $errorMessage="Password and Confirm Password different.";
                break;
              }
              else{
              $sql = "INSERT INTO register (`name`,`uname`,`email`,`phno`,`password`,`confirmpassword`)"."VALUES ('$name','$uname','$email','$phno','$password','$confirmpassword')";
              $sql1 = "INSERT INTO `login`( `uname`, `pass`) VALUES ('$uname','$password')";
              //execute sql query
              $result = $connection->query($sql);
              $res = $connection->query($sql1);

                 if(isset($_POST['sub'])){
                    header("Location:/CarRentalWebsite/HomePage.php");
                 }
                
              if(!$result || !$res)
              {
                  $errorMessage="Invalid Query :".$connection->error;
              }
              $name="";
              $uname="";
              $email="";
              $phno ="";
              $password="";
              $confirmpassword="";
          
              }
            }while(false);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CarRentalWebsite/RStyleSheet.css">
    <title>Registration Page</title>
</head>
<body>
<?php
        if(!empty($errorMessage))
        {
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
              <strong>$errorMessage</strong>
              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
          </div>";
        }
?>

    <div class="container">
        <form action="" method="post">
            <h2>Registration</h2>
            <div class="content">
                <div class="input-box">
                    <label for="name">Full Name</label>
                    <input type="text" placeholder="Enter full name" name="name" required>
                </div>
                <div class="input-box">
                    <label for="username">Username</label>
                    <input type="text" placeholder="Enter username" name="uname" required>
                </div>
                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Enter your valid email address" name="email" required>
                </div>
                <div class="input-box">
                    <label for="phonenumber">Phone Number</label>
                    <input type="tel" placeholder="Enter your phone number" name="phno" required>
                </div>
                <div class="input-box">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Enter new password" name="password" required>
                </div>
                <div class="input-box">
                    <label for="Cpassword">Confirm Password</label>
                    <input type="password" placeholder="Confirm the new password" name="confirmpassword" required>
                </div>
                <span class="gender-title">Gender</span>
                <div class="gender-category">
                    <input type="radio" name="gender" id="male">
                    <label for="gender">Male</label>
                    <input type="radio" name="gender" id="female">
                    <label for="gender">Female</label>
                    <input type="radio" name="gender" id="other">
                    <label for="gender">Other</label>
                </div>
            </div>
        <?php
        if(!empty($successMessage))
        {
            echo "<div class='row mb-3'>
              <div class='offset-sm-3 col-sm-6'>
               <div class='alert alert-success alert-dismissible fade show' role='alert'>
                 <strong>$successMessage</strong>
                 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
               </div>
              </div>  
            </div>";
        }
        ?>
            <div class="alert">
                <p>By clicking SignUp, you agree to our <a href="#">Terms,</a><a href="#">Privacy Policy,</a> and <a href="#">Cookies Policy.</a>
                You may receive SMS notifications from us and can opt at any time.</p>
            </div>
            <div class="button-container">
                <button type="submit" name="sub" onclick="window.location.href='/CarRentalWebsite/HomePage.php'";>Register</button>
            </div>
        </form>
    </div>
</body>
</html>