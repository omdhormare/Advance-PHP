<html>
    <body>
    <form method="POST" action="">
        Enter Name :
        <input type="text" name="t1"><br>
        Enter Adress :
        <input type="text" name="t2"><br>
        Enter phone-no :
        <input type="text" name="t3"><br>
        select Gender :
        <input type="radio" name="t3" value="r1"><br>
        <input type="radio" name="t3" value="r2"><br>
        <input type="submit">
</html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
$d=$_POST["t4"];
echo("<table border='1'>");
echo("<tr>");
echo("<th> Name </th>");

echo("</tr>");
echo("<tr>");
echo("<td>".$a);
echo("<td>".$b);
echo("<td>".$c);
echo("<td>".$d);
echo("</tr>");

?>









