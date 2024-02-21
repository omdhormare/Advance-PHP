<html>
    <form method="POST" action="">
        Enter Number :
        <input type="text" name="t1"><br>
        <input type="submit">
<?php
 $n=$_POST["t1"];
 {
    $c=$n*$n*$n;
    echo("<h2>The Cube Of Number : ".$c);
 }
?>