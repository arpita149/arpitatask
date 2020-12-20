<?php
session_start();
$v3=$_SESSION["id"];
require_once('config/db1.php');
$sql="DELETE FROM category where `id`='$v3'";
$res= mysqli_query($con,$sql);
$val1=mysqli_affected_rows($con);
echo "Deleted Successfully!";
?>