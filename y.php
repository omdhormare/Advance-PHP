<?php
$f1=fopen("om.php","r");
$s=filesize("om.xml");
$a=fread($f1,$s);
echo($a);
?>