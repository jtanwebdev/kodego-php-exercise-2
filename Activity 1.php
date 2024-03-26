<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Activity 1</h1>
    <?php

class Rectangle
{
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->length * $this->width;
    }

    public function getPerimeter()
    {
        return 2 * ($this->length + $this->width);
    }
}


$rectangle = new Rectangle(5, 10);
echo "Area: " . $rectangle->getArea() . "</br>";
echo "Perimeter: " . $rectangle->getPerimeter() . "</br>";

?>
</body>
</html>