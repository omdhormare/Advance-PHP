<html>   
    <table border="1"; align="center"; width="550px"; height="70px";>
    <tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>Address</th>
        <th>collage</th>
    </tr>    
<?php
$s1 = $_POST["t1"];
$flag = 0;
$xml = simplexml_load_file("student.xml");

if (!$xml) 
{
    die("File Not Found");
}

foreach ($xml->student AS $student)
 {
    if ($student['class'] == $s1) 
    {
        echo("<tr>");
        echo("<td>". $student->rno);
        echo("<td>". $student->name);
        echo("<td>". $student->address);
        echo("<td>". $student->collage);
        $flag = 1;
        break;
    }
}

if ($flag == 0) 
{
    echo("Not Found...");
}
?>
