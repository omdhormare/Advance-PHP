<?php
$t1=$_POST["t1"];
$con=mysqli_connect("localhost","root","","practice");
if($con==false)
{
    die("error");
}
mysqli_select_db($con,"practice");
$res=mysqli_query($con,"select * from student where standard='$t1'");
while($row=mysqli_fetch_array($res))
{
    echo("<br>Student sno: ".$row['sno']);
    echo("<br>Student Name: ".$row['sname']);
    echo("<br>Student standard: ".$row['standard']);
    echo("<br>Student per: ".$row['per']);
}
?>
