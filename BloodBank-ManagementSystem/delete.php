<?php
if(isset($_GET["pid"]))
{
 $pid=$_GET["pid"];

    $servername ="localhost:3307";
    $username="root";
    $password="";
    $database="bloodbank1";

    $connection=new mysqli($servername,$username,$password,$database);
    $sucessMessage="";
 $sql="DELETE FROM patient WHERE pid=$pid";
 $connection->query($sql);
}
$successMessage="Patient deleteded successful";
header("location :/bloodbank1/index.php");
exit;
?>