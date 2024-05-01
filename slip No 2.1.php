<!--
a) Write a PHP script to demonstrate the introspection for examining classes and 
objects. (use
function get_declared_classes() ,get_class_methods() and get_class_vars())-->
<?php
class AA
{
    public $aa;
       function dis()
    {
        
    }
    public $b;
    function dis1()
    {
        
    }
    public $c;
    function dis2()
    {
        
    } 
    public $d;
    function dis3()
    {
        
    }
}
$c=get_declared_classes();
echo("<h1><br>All classed ..");
print_r($c);
$ob=new aa();
$d=get_class_methods($ob);
echo("<h1>Total Class Method : ");
print_r($d);
echo("<hr>");
$d=get_class_vars("aa");
echo("<h2><br>Total Class Declared Variable : ");
print_r($d);
?>