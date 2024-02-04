<html>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<h2>Enter The String :
    <input type="text" name="t1"><br><br>
    <input type="submit" name="t2">
<?php
if(isset($_POST['t2']))
{
$s1=$_POST['t1'];
$s2=strrev($s1);
echo("<h1> The Reverse String : ".$s2);
}
?>