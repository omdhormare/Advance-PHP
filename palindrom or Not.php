<html>
    <body>
        <form acton="<?php echo($_SERVER['PHP_SELF']);?>" method="POST">
        <h3>Enter The Number :
            <input type="text" name="num1">
            <input type="SUBMIT" name="t1">
</html>

<?php
$num=$_POST['num1'];
$sum=0;
$n=$num;
while($n>0)
{
    $d=$n%10;
    $sum=$d+($sum*10);
    $n=(int)($n/10);
}
if($sum==$num)
echo("<h3>Palindrom Number :".$num);
else
echo("<h3>NOT Palindrom Number :".$num);
?>