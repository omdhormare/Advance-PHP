<?php
 class calculator
 {
    public $a,$b,$c;

    function __construct($a,$b)
    {
        $this->a=$a;
        $this->b=$b;
    }
    function add()
    {
        $this->c=$this->a+$this->b;
        echo("<h2>Addtion : ".$this->c);
    }
    function sub()
    {
        $this->c=$this->a-$this->b;
        echo("<h2>Substraction : ".$this->c);
    }
    function mul()
    {
        $this->c=$this->a*$this->b;
        echo("<h2>Multiplication : ".$this->c);
    }
    function div()
    {
        $this->c=$this->a/$this->b;
        echo("<h2>division : ".$this->c);
    }
 }
 $ob=new calculator(3,4);

 $ob->add();
 $ob->mul();
 $ob->sub();
 $ob->div();
?>