<?php
try
{
$db=new PDO('mysql:host=localhost:3307;dbname=carrentalwebsite','root','');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
    {
    echo "Connection failed: ".$e->getMessage();
    exit;
    }
?>