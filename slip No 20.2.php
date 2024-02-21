<!--Write a PHP script for the following: Design a form to accept a number from 
the user. Perform the operations and show the results.
1) Fibonacci Series.
2) To find sum of the digits of that number.
(Use the concept of self processing page.)-->
<html>
    <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <h3>Enter Number :
            <input type="text" name="t1" value="<?php if(isset($_POST['t1']))
            echo $_POST['t1']?>"><br><br>
            <input type="radio" name="aa" value="t2">Fibonacci Series<br><br>
            <input type="radio" name="aa" value="t3">Find Sum Of Digit<br><br>
            <input type="submit" value="Result">
</body>

<?php
  $n=$_POST["t1"];
  $ch=$_POST["aa"];
  switch($ch)
  {
       case "t2":
                 $a=0;
                 $b=1;
                 $c;
                 echo("<h2><br>Fibonacci Series : ");
                for($i=1;$i<=$n;$i++)
                {
                    echo(","."&nbsp;".$a);
                    $c=$a+$b;
                    $a=$b;
                    $b=$c;
                }
                break;
       case "t3":
                 $sum=0;
                 while($n>0)
                 {
                    $d=$n%10;
                    $sum=$sum+$d;
                    $n=$n/10;
                 }
                 echo("<h2><br> Sum Of Digit : ".$sum);
                 break;
  }
 
?>
