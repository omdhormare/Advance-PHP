<html>
    <form method="POST" action="">
    Enter Course Name : 
    <input type="text" name="t1"><br>
    <input type="submit"> 
</html>

<?php
$t1=$_POST["t1"];
$xml=simplexml_load_file("a1.xml");
echo("<table border=1>");
echo("<tr><th>Roll No</th> <th>Name</th> <th>Address</th> <th>Course</th></tr>");
foreach($xml->information AS $s)
{
    if($s->course==$t1)
    {
        echo("<tr>");
        echo("<td>".$s->rollno);
        echo("<td>".$s->name);
        echo("<td>".$s->address);
        echo("<td>".$s->course);
    }
}
?>