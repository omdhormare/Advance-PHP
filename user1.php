<?php
$n1=$_POST["t1"];
if(empty($n1))
echo("<br>Enter UserName ..");
else if(strlen($n1)<=3)
echo("<br>Username Is Too Short...");
else
echo("<br>Valid UserName..");
?>