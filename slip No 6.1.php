<?php
$u="http://www.collage.com/science/science/CS.php";
$a=parse_url($u);
header("content-type:text/plain");
echo("scheme : ".$a['scheme']."\n");
echo("Host : ".$a['host']."\n");
echo("Path : ".$a['path']."\n");
?>