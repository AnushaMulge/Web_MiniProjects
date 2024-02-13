<?php
session_start();
$hostName="localhost:3307";
$dbUser="root";
$dbPassword="";
$dbName="carrentalwebsite";
$conn =mysqli_connect($hostName,$dbUser,$dbPassword,$dbName);
       if(isset($_POST['save'])){
        $uname=$_POST["uname"];
        $uage=$_POST["uage"];
        $gender=$_POST["gender"];
        $phone=$_POST["phone"];
        $address=$_POST["address"];
        $errors=array();

            if( empty($uname) OR empty($uage) OR empty($gender Or empty($phone) Or empty($address))){
             array_push($errors,"All Fields are required");
            }
       
        $query ="INSERT INTO info (`uname`, `uage`, `gender`, `phone`, `address`) VALUES ('$uname','$uage','$gender','$phone','$address' )";
        $query_run=mysqli_query($conn,$query);
       
           if($query_run)
           {
               $_SESSION['status']="Information Saved Successfully";
               header("Location:rent.php");
           }
           else{
               $_SESSION['status']="Information Not Saved Try Again";
               header("Location:info.php");
           }
       }
?>