<?php
$xml=new simpleXMLElement('<om></om>');
$c=$xml->addchild('Team');
$c->addAttribute('name','om');
$c->addchild('per','80');

$xml->asXML("y1.xml");
?>