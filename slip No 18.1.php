<!--Write a PHP program to create a simple distance calculator that can accept
 distance in meters from user. Convert it into centimeter or kilometer according
  to user preference.
(use radio buttons and Self Processing form)-->
<html>
    <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <h3>Enter Distance :
            <input type="text" name="n1"><br>
            <input type="radio" name="ch" value="t1">Convert  into centimeter<br>
            <input type="radio" name="ch" value="t2">Convert  into kilometer<br>
            <input type="submit">
</form>
<html>            
    <?php
    error_reporting(0);
    {
        $n1=(float)$_POST["n1"];
        $ch1=$_POST["ch"];
        switch($ch1)
        {
            case "t1":$n2= $n1 * 100;
                   echo("<h3>The Convert  into centimeter : ".$n2);
                   break;
            case "t2":$n2= $n1 * 1000;
                   echo("<h3>The Convert  into kilometer : ".$n2);
                   break;       
        }
    }
?>