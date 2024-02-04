<html>
    <form method="POST" action="">
     Enter 1 No:
     <input type="text" name="one"><br><br>
     Enter 2 No:
     <input type="text" name="two"><br><br>
      <input type="submit">  
</html>
<?php
error_reporting(0);
{
$a=$_POST["one"];
$b=$_POST["two"];
{
    class mul
    {
        public $a,$b;
        function get_data($a,$b)
        {
            $this->a=$a;
            $this->b=$b;
        }
        function add()
        {
            $c=$this->a + $this->b;
            echo("<br>Addtion : ".$c);
        }
        function sub()
        {
            $c=$this->a - $this->b;
            echo("<br> substraction : ".$c);
        }
        function mul()
        {
            $c=$this->a * $this->b;
            echo("<br> Multiplication : ".$c);
        }
        
    function div()
    {
        if($this->b !=0)
        {
        $c = $this->a / $this->b;
        echo("<br> Division: " . $c);
        }
    }
    }
    $ob=new mul();
    $ob->get_data($a,$b);
    $ob->add();
    $ob->sub();
    $ob->mul();
    $ob->div();
}
}
?>