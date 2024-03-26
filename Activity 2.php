<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Activity 2</h1>
    <?php

class Circle
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pi() * $this->radius * $this->radius;
    }

    public function getCircumference()
    {
        return 2 * pi() * $this->radius;
    }
}


$circle = new Circle(5);
echo "Area: " . $circle->getArea() . "</br>";
echo "Circumference: " . $circle->getCircumference() . "</br>";

?>
</body>
</html>