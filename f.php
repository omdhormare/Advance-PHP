<html>
    <form method="POST" action="">
        Enter No :
        <input type="text" name="t1"><br>
        <input type="submit">
</html>

<?php
$n=$_POST["t1"];
$a=0;
$b=1;
$c;
echo("<h2> Fibonacci Series :");
for($i=1;$i<=$n;$i++)
{
    
    echo("&nbsp;".$a);
    $c=$a+$b;
    $a=$b;
    $b=$c;
}

?>