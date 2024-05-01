<html>
<body>
    <form method="POST" action="">
        Enter value KG to GM:
        <input type="text" name="t1"><br>
        Enter value GM to KG:
        <input type="text" name="t2"><br>
        <input type="submit">
    </form>
<?php
interface cal
{
    function KGtoGM($kg,$gm);
    function GMtoKG($kg,$gm);
}
class convert implements cal
{
    function KGtoGM($kg,$gm)
    {
        $this->kg=$gm*1000;
        echo("<br>KG to GM : ".$this->kg);
    }
    function GMtoKG($kg,$gm)
    {
        $this->gm=$kg/1000;
        echo("<br>GM to KG : ".$this->gm);
    }
}

    $kg=$_POST["t1"];
    $gm=$_POST["t2"];
    
    $n1=new convert;
    $n1->KGtoGM($kg,$gm);

    $n2=new convert;
    $n2->GMtoKG($kg,$gm);
?>