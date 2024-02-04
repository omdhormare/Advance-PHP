<html>
<form method="POST" action="">
    Select Shape:
    <select name="p1">
        <option value="1">Circle</option>
        <option value="2">Square</option>
        <option value="3">Rectangle</option>
    </select>
    <br>

    Enter Circle Radius:
    <input type="text" name="t1"><br>

    Square Side:
    <input type="text" name="t2"><br>

    Rectangle Length:
    <input type="text" name="t3"><br>

    Rectangle Breadth:
    <input type="text" name="t4"><br>

    <input type="submit" value="Submit">
</form>
</html>
<?php
interface Shape 
{
    function area();
}

class Circle implements Shape 
{
    private $radius;

    function __construct($radius) 
    {
        $this->radius = $radius;
    }

    function area() 
    {
        $area = 3.14 * $this->radius * $this->radius;
        echo("Area of circle: " . $area);
        echo("<br><br>");
    }
}

class Square implements Shape 
{
    private $side;
    function __construct($side) 
    {
        $this->side = $side;
    }

    function area() 
    {
        $area = $this->side * $this->side;
        echo("Area of square: " . $area);
        echo("<br><br>");
    }
}

class Rectangle implements Shape 
{
    public $length,$breadth;
    function __construct($length, $breadth)
     {
        $this->length = $length;
        $this->breadth = $breadth;
    }

    function area() 
    {
        $area = $this->length * $this->breadth;
        echo("Area of rectangle: " . $area);
        echo("<br><br>");
    }
}

{
    $p1 = $_POST["p1"];
    switch ($p1) 
    {
        case "1":
            $radius = $_POST["t1"];
            $circle = new Circle($radius);
            $circle->area();
            break;
        case "2":
            $side = $_POST["t2"];
            $square = new Square($side);
            $square->area();
            break;
        case "3":
            $length = $_POST["t3"];
            $breadth = $_POST["t4"];
            $rectangle = new Rectangle($length, $breadth);
            $rectangle->area();
            break;
    }
}
?>

