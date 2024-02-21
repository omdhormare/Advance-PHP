<!--Write a PHP program to create class circle having radius data member and two member 
function find_circumference() and find _area().
 Display area and circumference depending on user’s preference-->
 <!--$area = 3.14 * $r * $r;
$cir = 2*3.14*$r;
-->
<html>
<form method="POST" action="">
    <h3>Enter Area Of circle :
         <input type="text" name="t1">
    <h2>Choose Option</h2> 
    <input type="radio" name="a" value="area">Find circumference<br>
    <input type="radio" name="a" value="circ">Find Area<br><hr>
    <input type="submit"><hr>

<?php
 class circle
 {
    public $r,$area,$cir;
    function find_circumference()
    {
        $this->area=2*3.14*$this->r;
        echo("<h3>Area Of circumference : ".$this->area);
    }
    function find_area()
    {
        $this->cir=$this->r*3.14*$this->r;
        echo("<h3>Area Of Circle : ".$this->cir);
    }
 }

 $ob=new circle();
 $ob->r=(float)$_POST["t1"];
 switch($_POST["a"])
 {
    case "area":
        $ob->find_circumference();
        break;
    case "circ":
        $ob->find_area();
        break;    
 }
?>    