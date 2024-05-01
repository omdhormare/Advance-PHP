<Html>
    <form method="POST" action="">
        Enter 1 Number :
        <input type="text" name="t1" value="<?php echo $_POST["t1"];?>"><br>
        Enter 2 Number :
        <input type="text" name="t2" value="<?php echo $_POST["t2"];?>"><br>
<input type="radio" name="r1" value="t3">Addtion<br>
<input type="radio" name="r1" value="t4">Substriction<br>
<input type="radio" name="r1" value="t5">Multiplication<br>
<input type="radio" name="r1" value="t6">Division<br>
<input type="submit">
<?php
class calculate
{
    public $a,$b;
    function __construct($a,$b)
    {
       $this->a=$a;
       $this->b=$b;
    }
    function add()
    {
        echo("<br>Addition Of Two No :".$this->a+$this->b);
    }
    function sub()
    {
        echo("<br>Substrction Of Two No :".$this->a-$this->b);
    }
    function mul()
    {
        echo("<br>Multiplication Of Two No :".$this->a*$this->b);
    }
    function div()
    {
        echo("<br>Division Of Two No :".$this->a/$this->b);
    }
}
    $n1=$_POST["t1"];
    $n2=$_POST["t2"];
    $ch=$_POST["r1"];
    $cal=new calculate($n1,$n2);
    switch($ch)
    {
        case "t3":$cal->add();
                  break;
        case "t4":$cal->sub();
                  break;  
        case "t5":$cal->mul();
                  break;
       case "t6":$cal->div();
                  break;             
    }
?>