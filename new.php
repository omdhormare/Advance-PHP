<!--this oprator use in PHP-->
<?php
class dis
{
    public $a=100;//global
function dis1()
{
    echo"<h1> Number :".$this->a;//local 
}
}
$A=new dis();
$A->dis1();
?>