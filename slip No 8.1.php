<html>
    <form method="post" action="">
        Select Shape:
        <select name="s1">
            <option value="1">square</option>
            <option value="2">circle</option>
            <option value="3">Tringle</option>
        </select><br><br>
Enter Square No :
<input type="text" name="t1"><br><br>
Enter Circle radius :
<input type="text" name="t2"><br><br>
Enter Rectagle length :
<input type="text" name="t3"><br>
Enter Rectagle Breath :
<input type="text" name="t4"><br>
<input type="submit">
</html>

<?php
class shape
{
    
}
class tringle extends shape
{
    function lb($s2,$s3)
    {
        $this->s2=$s2;
        $this->s3=$s3;

        echo("<br>Tringle Length AND Breath: ".$this->s2*$this->s3);
    }
}
class square extends tringle
{
    function squ($s)
    {
        $this->s=$s;
        echo("<br>Square Of These No : ".$this->s*$this->s);
    }
}
class circle extends square
{
    function circle1($r)
    {
        $this->r=$r;
        echo("<br> Area Of Circle : ".$this->r*1*3.14);
    }
}
$s1=$_POST["s1"];
switch($s1)
{
    case "1":
            $s1=$_POST["t1"];
            $s=new square;
            $s->squ($s1);
            break;
    case "2":
            $p1=$_POST["t2"];
            $z=new circle;
            $z->circle1($p1);
            break;  
    case "3" :
             $s2=$_POST["t3"];
             $s3=$_POST["t4"];
             $a=new tringle;
             $a->lb($s2,$s3);
             break;
}            

  
?>