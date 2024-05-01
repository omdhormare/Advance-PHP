<?php
$f=fopen("Myfile.dat","r");
echo("<table border=1>");
echo("<tr><th>srno</th><th>Name</th><th>Residence Number</th><th>Mobile No</th></tr>");
while($row=fscanf($f,"%s %s %s %s"))
{
echo("<tr>");
    foreach($row as $s)
    {
        echo("<td>".$s);
    }
}
?>