<?php
$xml=simplexml_load_file("sport.xml");

if(!$xml)
{
die("File Not Fond....");
}
foreach($xml->sport as $sport)
{
    echo("<br>sname :".$sport->sname);
    echo("<br>sno:".$sport->sno);
}
?>