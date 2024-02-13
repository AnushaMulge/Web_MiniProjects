<?php

$hostName="localhost:3307";
$dbUser="root";
$dbPassword="";
$dbName="carrentalwebsite";
$conn =mysqli_connect($hostName,$dbUser,$dbPassword,$dbName);
if ($conn == false) {
    die("Something went wrong");
}

?>