<?php
$d = new DOMDocument();
$d->load("abc.xml");

$runs = $d->getElementsByTagName('runs');
$wickets = $d->getElementsByTagName('wickets');
$players = $d->getElementsByTagName('player');

foreach ($players as $key => $player) 
{
    $runValue = $runs[$key]->textContent;
    $wicketValue = $wickets[$key]->textContent;

    if ($runValue >= 1200 && $wicketValue >= 50) 
    {
        echo "<br>" . $player->textContent;
    }
}
?>
