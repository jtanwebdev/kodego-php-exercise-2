<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Activity 3</h1>
    <?php

class Vehicle
{
    private $brand;
    private $model;
    private $year;

    public function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getDetails()
    {
        return "Brand: {$this->brand}, Model: {$this->model}, Year: {$this->year}";
    }
}

// Example usage
$vehicle = new Vehicle("Toyota", "Corolla", 2022);
echo $vehicle->getDetails() . "\n";

?>

</body>
</html>