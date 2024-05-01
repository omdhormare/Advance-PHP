<?php
$dom=new DomDocument();
$dom->load("s1.xml");
echo("<br>Student Details :");
print($dom->saveXML());
$dom->save("s1.doc");

foreach($dom->getElementsByTagName('name') AS $s1)
{
   echo("<br>student Name : ".$s1->nodeValue);
}
?>

