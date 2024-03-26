<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Activity 4</h1>
    <?php

class Person
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

class Employee extends Person
{
    private $salary;
    private $position;

    public function __construct($name, $age, $salary, $position)
    {
        parent::__construct($name, $age);
        $this->salary = $salary;
        $this->position = $position;
    }

    public function getDetails()
    {
        return "Name: {$this->name}, Age: {$this->age}, Salary: {$this->salary}, Position: {$this->position}";
    }
}

// Example usage
$employee = new Employee("Joel Tan", 28, 50000, "Junior Web Developer");
echo $employee->getDetails() . "\n";

?>



</body>
</html>