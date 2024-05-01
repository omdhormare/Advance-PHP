<?php
$name=$_POST["t1"];

$con=mysqli_connect("localhost","root","","practice");
if($con==false)
{
    die("Error..");
}
mysqli_select_db($con,"practice");
$qur=mysqli_query($con,"select * from actor,movie,ma WHERE actor.ano=ma.ano AND 
movie.mno=ma.mno AND aname='$name'");
while($row=mysqli_fetch_array($qur))
{
    echo("<br>Actor No : ".$row['ano']);
    echo("<br>Actor name : ".$row['aname']);
    echo("<br>Movie No : ".$row['mno']);
    echo("<br>Movie Name : ".$row['mname']);
    echo("<br>Movie Release Year : ".$row['ryear']);
    echo("<br>Rs : ".$row['Rs']);
    echo("<br>----------------------------------------<br>");
}
?>