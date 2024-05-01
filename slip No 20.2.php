<html>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Enter Number :
    <input type="text" name="t1"><br>
    <input type="radio" name="r1" value="1">Sum Of Digit<br>
    <input type="radio" name="r1" value="2">Fibonaccci Series<br>
    <input type="submit">
</html>
<?php
$n=$_POST["t1"];
$ch=$_POST["r1"];
switch($ch)
{
    case 1:$sum=0;
           while($n>0)
           {
              $d=$n%10;
              $sum=$sum+$d;
              $n=$n/10;
           }
           echo("<br>Sum Of Digit : ".$sum);
           break;
    case 2:
           $a=0;
           $b=1;
           $c;
           for($i=1;$i<$n;$i++)
           {
              echo("<br>".$a);
              $c=$a+$b;
              $a=$b;
              $b=$c;
           }     
           break;  
}

?>