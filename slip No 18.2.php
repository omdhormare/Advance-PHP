<!DOCTYPE html>
<html>
<head>
    <title>Book Information</title>
</head>
<body>
    <form method="POST" action="">
        <select name="t1">
            <option>PHP</option>
            <option>Java</option>
        </select>
        <input type="submit" name="submit" value="Get Book Info">
    </form>

    <?php
    {
        $t1 = $_POST["t1"];
        $xml = simplexml_load_file("slip No 18.2.xml");

        foreach ($xml->Books->PHP as $book) 
        {
            if($book->publication==$t1)
            {
                echo "<br>Title : " . $book->title;
                echo "<br>Publication : " . $book->publication;
                echo "<br>Price : " . $book->price;
            }
        }
    }
    ?>
</body>
</html>
