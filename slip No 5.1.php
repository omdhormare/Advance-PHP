<?php
abstract class shape
{
    abstract function area();
    abstract function volume();
}
class area extends shape
{
    public $r;
    function __construct($r)
    {
        $this->r=$r;
    }
    function area()
    {
        return 3.14*$this->r*$this->r;
    }
    function volume()
    {
        return 2*3.14*$this->r;
    }
}
$ob=new area(10.20);
echo("<br>Area Of Circle : ".$ob->area());
echo("<br>Volume Of Circle : ".$ob->volume());
?>