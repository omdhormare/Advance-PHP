<?php
$xml=new simpleXMLElement('<CricketTeam></CricketTeam>');
$c=$xml->addChild('Team');
$c->addAttribute('Country','India');
$c->addchild('player','om');
$c->addchild('runs','20');
$c->addchild('wicket','80');

$c=$xml->addChild('Team');
$c->addAttribute('Country','India');
$c->addchild('player','om');
$c->addchild('runs','20');
$c->addchild('wicket','80');
$xml->asXML("om.xml");

echo("<h3>Succefully Insert Element om.XMl File....");
?>