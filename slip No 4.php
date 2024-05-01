<?php
$xml=simplexml_load_file("plyer.xml");
if(!$xml)
die("<br> Not Found ");
foreach($xml ->game AS $a)
{
    if($a->runs>=1200 && $a->wickets>=60)
{
   echo("<br><br>Palyer Name : ".$a->player);
   echo("<br>Palyer runs : ".$a->runs);
   echo("<br>Palyer wickets : ".$a->wickets);
   echo("<br>Palyer noofnotout : ".$a->noofnotout);
}
}
?>