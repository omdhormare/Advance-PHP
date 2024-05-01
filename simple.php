<html>
    <form method="POST" action="">
        Enter Emp Name:
        <input type="text" name="t1"><br>
        Enter Emp salary:
        <input type="text" name="t2"><br>
        <input type="submit"><br>
</form>
</html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
class emp
{
    public $s1,$s2,$s3;
    function accept($a,$b)
{
    $this->a=$a;
    $this->b=$b;
    echo("Emp Name : ".$this->a);
    echo("<br>Emp salary : ".$this->b);
}
function dis()
{

}
}
$ob=new emp();
$ob->accept($a,$b);
$ob->dis();
echo"<br>";
$c= get_declared_classes();
print_r($c);

echo"<br>";
$c1= get_class_methods("emp");
print_r($c1);

echo "<br>";
$c3 = get_class_vars("emp");
print_r($c3);


?>