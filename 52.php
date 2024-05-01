<?php
$t1=$_POST["t1"];
$con=mysqli_connect("localhost","root","","practice");
if($con==false)
{
    die("errro");
}
mysqli_select_db($con,"practice");
$res=mysqli_query($con,"select * from student WHERE class='$t1' ");
while($row=mysqli_fetch_array($res))
{
    echo("<br> Seat No : ".$row['seat_no']);
    echo("<br> Student Name : ".$row['name']);
    echo("<br> class : ".$row['class']);    
    echo("<br> pGroup : ".$row['p_group']);  
    echo("<br> p group  : ".$row['pgroup']); 
}
?>
