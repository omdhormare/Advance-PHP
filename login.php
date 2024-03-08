<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
die("error");

$s1=$_POST["t1"];
$s2=$_POST["t2"];

mysqli_query($con,"use php");
$res=mysqli_query($con,"select * from login where username='$s1' AND password='$s2' ");
if($row=mysqli_fetch_array($res))
echo("<h3>Login succefully...");
else
echo("<h3>Invalid Login ...");
?>