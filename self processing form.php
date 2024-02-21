<!-- Write a PHP script to accept a string from user and then display the accepted string in reverse order.
(use concept of self processing form)-->
<html>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <h2>Enter A string : 
        <input type="text" name="t1"> 
        <input type="submit">
    <body>
 
<?php
error_reporting(0);
{
    $s1=$_POST["t1"];
    $s2=strrev($s1);
    echo("<h1><br>Reverse String : ".$s2);
}

?>    