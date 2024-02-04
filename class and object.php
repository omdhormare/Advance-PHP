<html>
    <form method="POST" action="">
        Enter Employee No :
        <input type="text" name="no"><br>
        Enter Employee Name :
        <input type="text" name="name"><br>
        Enter Employee salary :
        <input type="text" name="salary"><br>
        <input type="submit">

<?php
$no=$_POST["no"];
$name=$_POST["name"];
$sal=$_POST["salary"];
{
class emp
 {
    public $eno,$ename,$sal;
        function accept($eno,$ename,$sal)
        {
             $this->eno=$eno;
             $this->ename=$ename;
             $this->sal=$sal;
        }
      function display()
      {
        echo("<br>Emp No : ".$this->eno);
        echo("<br>Emp Name : ".$this->ename);
        echo("<br>Salary : ".$this->sal);
      }
    }
    $ob=new emp();
    $ob->accept($no,$name,$sal);
    $ob->display();
}
?>