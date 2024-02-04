<!DOCTYPE html>
<html>
<head>
    <title>slip_no 18.1 php</title>
</head>
<body>
    <form method="POST" action="slip_no 18.php">
        <h3>Enter Distance In Meter:</h3>
        <input type="text" name="t1"><br><br>
        <input type="radio" name="t2" value="1">Convert it into centimeter<br>
        <input type="radio" name="t2" value="2">Convert it into kilometer<br>
        <br>
        <input type="submit" name="t4">
    </form>

    <?php
        error_reporting(0);
    {
        $num1 = $_POST['t1'];
        $r = $_POST['t2'];
        switch ($r) 
        {
            case 1:
                $r2 = round($num1 * 100); 
                echo("<h3>Centimeter: " . $r2);
                break;
            case 2:
                $r3 = round($num1 / 1000); 
                echo("<h3>Kilometer: " . $r3);
                break;
        }
    }
    ?>
</body>
</html>
