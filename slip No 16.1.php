<!--Write a PHP program to accept two string from user and check whether entered 
strings are matching or not.(use sticky form concept)-->
<html>
    <body>
        <form method="POST" action="">
            <h3>Enter 1 string :-
                <input type="text" name="s1" value="<?php if(isset($_POST['s1'])) 
                echo $_POST['s1']?>" ><br><br>
            <h3>Enter 2 string :-
                <input type="text" name="s2" value="<?php if(isset($_POST['s2']))
                echo $_POST['s2']?>" ><br><br>  
            <input type="submit" value="check string matching">      
</html>
</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
$s1=$_POST["s1"];
$s2=$_POST["s2"];

if($s1==$s2)
{
    echo("<h3><br>String Are Matching ...");
}
else
   echo("<h3><br>String Are Not match....");
}
?>