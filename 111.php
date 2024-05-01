<?php
$xml = new SimpleXMLElement('<CricketTeam></CricketTeam>');

// Add team details
$team = $xml->addChild('Team');
$team->addAttribute('country', 'Australia');
$player = $team->addChild('player', 'Player Name');
$player = $team->addChild('player', 'Player Name');
?>
