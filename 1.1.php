<html>
    <form method="POST" action="">
    Enter 1 No :
    <input type="text" name="t1" value="<?php echo $_POST["t1"];?>"><br>
    Enter 2 No :
    <input type="text" name="t2" value="<?php echo $_POST["t2"];?>"><br>
    <input type="radio" name="r1" value="1">Addtion<br>
    <input type="radio" name="r1" value="2">Substraction<br>
    <input type="radio" name="r1" value="3">Multiplication<br>
    <input type="radio" name="r1" value="4">Division<br>
    <input type="submit">
</html>
<?php
class calculater
{
    public $n,$n1;
    function add($n,$n1)
    {
        $this->n=$n;
        $this->n1=$n1;
        echo("<br>Addtion : ".$this->n+$this->n1);
    }
    function sub($n,$n1)
    {
        $this->n=$n;
        $this->n1=$n1;
        echo("<br>Substrction : ".$this->n-$this->n1);
    }
    function mul($n,$n1)
    {
        $this->n=$n;
        $this->n1=$n1;
        echo("<br>Multiplication : ".$this->n*$this->n1);
    }
    function div($n,$n1)
    {
        $this->n=$n;
        $this->n1=$n1;
        echo("<br>Division : ".$this->n/$this->n1);
    }
}
$n=$_POST["t1"];
$n1=$_POST["t2"];
$ch=$_POST["r1"];
$ob=new calculater;
switch($ch)
{
case "1":
        $ob->add($n,$n1);
        break;
case "2":
        $ob->sub($n,$n1);
        break;

case "3":
        $ob->mul($n,$n1);
        break;

case "4":
        $ob->div($n,$n1);
        break;       
}
?>