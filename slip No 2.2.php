<!--Write a script to solve following questions (Use “Student.xml” file)
i) Create a DOM Document object and load this XML file.
11) Get the output of this Document to the browser.
111) Save this [. XML] document in another format 1.e. in [.doc]
Write a XML Script to print the names of the student 
present in “Student.xm!” file-->

<?php
$dom=new DomDocument();
$dom->load("student.xml");
echo $dom->savexml();

$dom->save("A2.doc");

foreach($dom->getElementsByTagName('name') AS $s1)
{
    echo($s1->nodeValue."<br>");
}
?>