<?php
session_start();
$hostName="localhost:3307";
$dbUser="root";
$dbPassword="";
$dbName="carrentalwebsite";
$conn =mysqli_connect($hostName,$dbUser,$dbPassword,$dbName);
 
if(isset($_POST['submit'])){
    $pickup=$_POST["pickup"];
    $pdate =$_POST["pdate"];
    $ptime =$_POST["ptime"];
    $drop =$_POST["drop"];
    $ddate=$_POST["ddate"];
    $dtime=$_POST["dtime"];
    $errors=array();

            

    $query="INSERT INTO placedate (`pickup`, `pdate`, `ptime`, `drop`, `ddate`, `dtime`) VALUES ('$pickup','$pdate','$ptime','$drop','$ddate','$dtime')";
    $query_run=mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['status']="Place,Date and Time Saved Successfully";
        header("Location:rent.php");
    }
    else{
        $_SESSION['status']="Select Place,Date and Time Again";
        header("Location:pd.php");
    }
}
?>