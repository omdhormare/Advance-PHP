<!-- Write a PHP script to perform the following stack related operations- insert, delete and display.
(Use concept of self processing form)-->
<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Enter choice :
<br><input type="radio" name="ch" value=1> Insert element in stack <br>
<input type="radio" name="ch" value=2> Delete element from stack <br>
<input type="radio" name="ch" value=3> Display content of stack <br>
<br>

<input type="submit" value="submit">
</body>

</html>

<?php
$choice=$_POST["ch"];
{
        $arr=array(1,2,3,4,5,6,7,8,9,10);
        switch($choice)
        {
                case 1:
                        array_push($arr,10);
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