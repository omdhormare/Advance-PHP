<?php
$s=simplexml_load_file("book.xml");

if(!$s)
die("<file Not Found>");

foreach($s->book_information AS $s1)
{
    echo("<br><br>Book no : ".$s1->book_no);
    echo("<br>Book name : ".$s1->book_name);
    echo("<br>Book Price : ".$s1->book_price);
}
?>