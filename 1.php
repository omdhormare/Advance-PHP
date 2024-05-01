<html>
    <form method="POST" action="1.php">
    Enter Course Name : 
    <input type="text" name="t1" ><br>
    <input type="submit">
</html>


<?php
$s1=$_POST["t1"];
$f=0;
$xml=simplexml_load_file("1.xml");
foreach($xml->stud AS $s)
if($s->course==$s1)
{
    $f=1;
    echo("<br><br> Student Roll No  : ".$s->rollno);
    echo("<br>Student Name  : ".$s->name);
    echo("<br>Student address  : ".$s->address);
    echo("<br>Student course  : ".$s->course);
}
if($f==0)
echo("Recorde Not Found");
?>