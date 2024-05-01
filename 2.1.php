<?php
class add
{
    public $a,$b;
    function add1()
    {
        //echo"Hello PHP";
    }
    function sub()
    {
        //echo"Hello omdada";
    }
}
$ob=new add;
$ob->add1();
$ob->sub();
$a=get_declared_classes();
print_r($a);
echo("<br><br>");
$b=get_class_methods($ob);
print_r($b);
echo("<br><br>");
$c=get_class_vars("add");
print_r($c);
?>