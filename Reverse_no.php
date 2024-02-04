<html>
    <body>
    <form acton="<?php echo($_SERVER['PHP_SELF']);?>" method="POST">
    <h3>Enter The Number :
        <input type="text" name="num1">
        <input type="SUBMIT" name="t1">
</html>

<?php
error_reporting(0);
$n=$_POST['num1'];
echo("<h2>Reverse Number : ");
while($n>0)
{
    $d=$n%10;
    echo($d);
    $n=(int)($n/10);
}
?>