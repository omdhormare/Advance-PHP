<!--Write a PHP program to convert temperature Fahrenheit to Celsius using sticky
 form-->
 <html>
    <form method="POST" action="">
        <h3>Enter temperature In Celsius :--
            <input type="text" name="t1" value="<?php if(isset($_POST['t1']))
            echo $_POST['t1'];?>"><br><br>
            <input type="submit" value="Calculate">
</form>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $n1=$_POST["t1"];
    $f=($n1*9/5)+32;
    echo("<h2><br> Temperature Fahrenheit -: " .$f);
}
?>