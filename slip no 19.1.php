<?php
$xml=simplexml_load_file("slip No 19.1.xml");
foreach($xml->info AS $s)
{
    print_r($s);
}
?>