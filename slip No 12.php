<html>
    <form method="POST" action="">
        Enter Temprature in Celsius:
        <input type="text" name="t1" value= <?php echo $_POST["t1"];?>>
        <input type="submit">
</html>
<?php
{
$n=$_POST["t1"];
$f=($n*9/5)+32;
echo(" Temperature Fahrenheit : ".$f);
}
?>