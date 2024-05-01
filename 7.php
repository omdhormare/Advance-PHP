<?php
$name=$_POST["t1"];
$con=mysqli_connect("localhost","root","","practice");
if($con==false)
{
    die("Error");
}
mysqli_select_db($con,"practice");
$res=mysqli_query($con,"select * from employee WHERE ename='$name' ");
while($row=mysqli_fetch_array($res))
{
    echo("<br>Employee no : ".$row['eno']);
    echo("<br>Employee Name : ".$row['ename']);
    echo("<br>Emplyee Destination :".$row['dis']);
    echo("<br>Emplyee Salary :".$row['salary']);
}

?>