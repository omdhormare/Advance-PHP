<!--Create a form to accept Employee detail and display it in next page. 
(Use sticky form concept)-->

<html>
    <body>
    <form method="POST" action="employee.php">
      <h1>Enter Employee details </h2><br>
<br><h3>Enter Employee No :
    <input type="text" name="name" value="<?php if(isset($_POST['name']))  
    echo $_POST['name'] ?>"><br>

    <br><h3>Enter Employee Name :
    <input type="text" name="t2" value="<?php if(isset($_POST['t2']))  
    echo $_POST['t2'] ?>"><br>
    
    <br><h3>Enter Employee Phone No :
    <input type="text" name="t3" value="<?php if(isset($_POST['t3']))  
    echo $_POST['t3'] ?>"><br>

    <br><h3>Enter Employee Address :
    <input type="text" name="t4" value="<?php if(isset($_POST['t4'])) 
    echo $_POST['t4'] ?>"><br>

    <br><input type="submit" value="NEXT">
</body>
</form>