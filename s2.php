<?php
$n1=$_POST["t1"];
$con=mysqli_connect("localhost","root","","practice");
  if($con==false)
{
    die("error");
}
mysqli_select_db($con,"practice");
$res=mysqli_query($con," select * from student,project where 
                  student.pgroup=project.pgroup AND  ptitle='$n1' ");
while($row=mysqli_fetch_array($res))
{
    echo("<br>Stundet seat No : ".$row['seat_no']);
    echo("<br>Stundet Name : ".$row['name']);
    echo("<br>Stundet class : ".$row['class']);
    echo("<br>Stundet project Group Number : ".$row['p_group']);
    echo("<br>Stundet Project Title : ".$row['ptitle']);
}
?>