<?php
$n1=$_POST["t1"];
$xml=simplexml_load_file("player.xml");
if(!$xml)
{
    die("Not Found");
}
foreach($xml->info AS $n)
{
    if($n->name==$n1)
    {
    echo("<br>Player Name : ".$n->name);
    echo("<br>Player counrty : ".$n->counrty);
    echo("<br>Player wicket : ".$n->wicket);
    echo("<br>Player runs : ".$n->runs);
    }
}
?>
