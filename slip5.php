<html>
    <form method="POST" action="">
    Enter Radius Circle:
    <input type="text" name="t1"><br>
    Enter Rectanle length And Breath:
    <input type="text" name="t2">
    <input type="text" name="t3"><br>
    Enter Cylinder Radius And Height:
    <input type="text" name="t4">
    <input type="text" name="t5"><br>
    <input type="submit">

<?php
abstract class shape
{
    abstract function area();
    abstract function volume();
}
class rect extends shape
{
    public $l,$b;
    function __construct($l,$b)
    {
        $this->l=$l;
        $this->b=$b;
    }
    function area()
    {
        echo("<br>Area Of Rectangle : ".$this->l*$this->b);
    }
    function volume()
    {
        echo("<br>Volume Of Rectangle : ".(2*$this->l+$this->b));
    }
}
class circle extends rect
{
    public $r;
    function __construct($r)
    {
        $this->r=$r;
    }
    function area()
    {
        echo("<br>Area Of Circle : ".(3.14*$this->r*$this->r));
    }
    function volume()
    {
        echo("<br>Volume Of Circle : ".(2*3.14*$this->r));
    }
}

class cylinder extends circle
{
    public $r;
    function __construct($r,$h)
    {
        $this->r=$r;
        $this->h=$h;
    }
    function area()
    {
        echo("<br>Area Of Circle : ".(3.14*$this->r*$this->r*$this->h));
    }
    function volume()
    {
        echo("<br>Volume Of Circle : ".(2*$this->r*$this->h+2*$this->r*$this->h));
    }
}
$r=$_POST["t1"];
$r=$_POST["t2"];
$h=$_POST["t3"];
$r=$_POST["t4"];
$h=$_POST["t4"];
$ob=new rect($r,$h);
$ob1=new circle($r);
$ob2=new cylinder($r,$h);

$ob->area();
$ob->volume();
$ob1->area();
$ob1->volume();
$ob2->area();
$ob2->volume();
?>