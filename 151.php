<?php
$a=$_POST["t1"];
$a1=array("shirampur","shirdi");
if($a!="")
{
    foreach($a1 AS $a1)
    {
        if(strstr($a1,$a))
        {
            echo("<br>".$a1);
        }
    }
}
?>