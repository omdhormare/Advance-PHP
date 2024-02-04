<html>
  <body>
    <form method="post" action="">
      enter name:
      <input type="text" name="t1">
      enter rno:
      <input type="text" name="t2">
      <br>
      <input type="submit" value="insert">
    </form>
  </body>
</html>

<?php
  $con = mysqli_connect("localhost", "root", "");

  if ($con == false) 
  {
    die("\n db connection problem..");
  }

  $nm = $_POST["t1"];
  $rn = $_POST["t2"];

  mysqli_select_db($con, "omdada");

  $k = mysqli_query($con, "INSERT INTO signup (name, rno) VALUES ('$nm', '$rn')");

  if ($k == true) 
  {
    echo("correct");
  } 
  else
   {
    echo("not correct");
  }
?>
