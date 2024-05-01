<?php
$xml=simplexml_load_file("p.xml");

foreach($xml->info AS $s)
{
    if($s->runs==2000 && $s->wicket==100)
    {
        echo("<br>Name : ".$s->player);
        echo("<br>Name : ".$s->runs);
        echo("<br>Name : ".$s->run);
        echo("<br>Name : ".$s->wicket);
    }
}

?>