<html>
    <form method="POST" action="">
        <h3>Enter Number for Multiplication:
            <input type="text" name="t1"><br>
         Enter check Even or Odd Number :
         <input type="text" name="t2"><br>
         <hr>
         <h1>Choose option</h1>
         <h2><input type="radio" name="a" value="mul">Multiplication Table<br>
         <input type="radio" name="a" value="even_odd">Even Or Odd<br><hr>
         <input type="submit"><hr>
</form>
</html>         

<?php
class check{
    public $n;
        function even_odd()
        {
            if($this->n%2==0)
            {
                echo("<h2>Number Is Even :".$this->n);
            }
            else
               echo("<h2>Number Is Odd :".$this->n);
        }
        function mul()
        {
            for($i=1;$i<=10;$i++)
            {
                echo("<br>".$i * $this->n);
            }
        }
    }

 $ob=new check();
 $n=$_POST["t1"];
 $n=$_POST["t2"];
 $a = $_POST["a"]; // Added line to fix the undefined variable error
 switch($a)
 {
    case "mul":
        $ob->n = $n; // Assigning the value of $n to the property $n of the object
        $ob->mul();
        break;
    case "even_odd":
         $ob->n = $n1; // Assigning the value of $n1 to the property $n of the object
         $ob->even_odd();
         break;   
 }
?>