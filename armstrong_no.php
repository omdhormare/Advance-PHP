<html>
    <body>
        <form acton="<?php echo($_SERVER['PHP_SELF']);?>" method="POST">
        <h3>Enter The Number :
            <input type="text" name="num1">
            <input type="SUBMIT" name="t1">
</html>
<?php
$num=$_POST['num1'];
$n=$num;
$sum=0;
while($n>0)
{
    $d=$n%10;
    $sum=$sum+$d*$d*$d;
    $n=(int)($n/10);
}
if($num==$sum)
echo("<h1>Armstrong Number : ".$num);
else
echo("<h1>NOT Armstrong Number : ".$num);
?>