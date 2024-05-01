<!-- Write a PHP script to perform the following stack related operations- insert, delete and display.
(Use concept of self processing form)-->
<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Enter choice :
<br><input type="radio" name="ch" value=1> Insert element in stack <br>
Enter Number :
<input type="text" name="t1"><br>
<input type="radio" name="ch" value=2> Delete element from stack <br>
<input type="radio" name="ch" value=3> Display content of stack <br>
<br>

<input type="submit" value="submit">
</body>

</html>

<?php
$n=$_POST["t1"];
$choice=$_POST["ch"];
{
        $arr=array(1,2,3,4,5);
        switch($choice)
        {
                case 1:
                        array_push($arr,5,4);
                        print_r($arr);
                        break;
                case 2:
                        $ele=array_pop($arr);
                        echo "Poped element : ".$ele;
                        break;
                case 3:
                        print_r($arr);
                        break;
        }
}

?>