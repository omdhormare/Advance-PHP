<!--Write a PHP script to create a simple calculator that can accept two numbers and 
perform
operations like add, subtract, multiplication. (Use the concept of Class)-->
<html>
<form method="POST" action="slip No 1.1.php">
    <h3>Enter 1 Number :<br>
    <input type="text" name="t1"><br><br>
    <h3>Enter 2 Number :<br>
    <input type="text" name="t2"><br><br>
    <h1>Choose Option </h1>
    <h2><input type="radio" name="a" value="add">Addtion<br>
    <h2><input type="radio" name="a" value="sub">substraction<br>
    <h2><input type="radio" name="a" value="mul">multiplication<br><hr>
    <input type="submit" name="Check"><br><hr>
<form>
</html>

<?php
class calculator
{
    public $a,$b,$c;
    function add()
    {
        return $this->a + $this->b;
    }
    function sub()
    {
        return $this->a - $this->b;
    }
    function mul()
    {
        return $this->a * $this->b;
    }
}
$ob=new calculator();
$ob->a=$_POST["t1"];
$ob->b=$_POST["t2"];
switch($_POST["a"])
{
    case "add":
         $c=$ob->add();
         echo("Addtion : ".$c);
         break;

    case "sub":
         $c=$ob->sub();
         echo("Subsraction : ".$c);
         break;

    case "mul":
        $c=$ob->mul();
        echo("Multiplication : ".$c);
        break;
}

?>