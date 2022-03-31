<?php
class Employee
{
    public $name;
    public $age;
    public $salary;

    public function __construct($name, $age, $department, $section, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->department = $department;
        $this->section = $section;
        $this->salary = $salary;
    }

    public function detail()
    {
        echo "<h1>Employee Profile detail</h1>";
        echo "Employee name " . $this->name . "</br>";
        echo "Employee age " . $this->age . "</br>";
        echo "Employee department " . $this->department . "</br>";
        echo "Employee section " . $this->section . "</br>";
        echo "Employee salary " . $this->salary . "</br>";
    }
}

class Head extends Employee
{
    public $house = 5000;
    public $medical = 1000;
    public $bonus = 3000;
    public $total_salary = 0;

    public function information()
    {
        $this->total_salary = $this->house + $this->medical + $this->bonus + $this->salary;

        echo "<h1>Employee detail</h1>";
        echo "Employee name " . $this->name . "</br>";
        echo "Employee age " . $this->age . "</br>";
        echo "Employee department " . $this->department . "</br>";
        echo "Employee section " . $this->section . "</br>";
        echo "Employee salary " . $this->salary . "</br>";
        echo "Total salary " . $this->total_salary . "</br>";
    }
}

$e1 = new Employee('Ali', 30, 'Programmer', 'Programmer', 30000);
$e2 = new Head('Md Ali', 30, 'Programmer', 'Programmer', 50000);
$e1->detail();
$e2->information();
