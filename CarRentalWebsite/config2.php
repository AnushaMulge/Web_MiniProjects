<?php
session_start();
$hostName="localhost:3307";
$dbUser="root";
$dbPassword="";
$dbName="carrentalwebsite";
$conn =mysqli_connect($hostName,$dbUser,$dbPassword,$dbName);
       if(isset($_POST['submit'])){
        $uname=$_POST["uname"];
        $cost=$_POST["cost"];
        $type=$_POST["type"];
        $errors=array();

            if(empty($uname) OR empty($cost) OR empty($type) ){
             array_push($errors,"All Fields are required");
            }
       
        $query ="INSERT INTO pay (`uname`, `cost`, `type`) VALUES ('$uname','$cost','$type' )";
        $query_run=mysqli_query($conn,$query);
       
           if($query_run)
           {
               $_SESSION['status']="Payment Successfull";
               header("Location:rent.php");
           }
           else{
               $_SESSION['status']="Payment Failed Try Again";
               header("Location:pay.php");
           }
       }
?>