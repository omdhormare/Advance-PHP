<?php
interface gmTokg
{
    function gmTOkg($gm);
    function kgTogm($kg);
}
class convert implements gmTokg
{
    public $gm,$kg;
    function gmToKg($gm)
    {
        $this->gm=$gm;
        echo("<br>GmToKg : ".$this->gm/100);
    }
    function kgTogm($kg)
    {
        $this->kg=$kg;
        echo("<br>kgToGm : ".$this->kg*100);
    }
}
$ob=new convert;
$ob->gmToKg(100);
$ob->kgTogm(200);
?>