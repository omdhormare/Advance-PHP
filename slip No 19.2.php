<?php
$n=$_POST["t1"];

$xml=simplexml_load_file("slip No 19.2.xml");
if(!$xml)
{
    die("Not Found..");
}
foreach($xml->info AS $s)
{
    if($s->name==$n)
    {
          echo("<br>Book Name : ".$s->name);
          echo("<br>Book Author : ".$s->author);
          echo("<br>Book Year : ".$s->year);
          echo("<br>Book Price : ".$s->price);
    }
}
?>
