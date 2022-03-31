<?php
class Person
{
    // public $name = "Md Ammad Ali"; 
    // public $age = 30;
    // public $gander = "male";

    public $name = '';                                                      // Property 
    public $age = 0;
    public $gander = '';

    // public function __construct($name='Md Ammad Ali', $age=30, $gander='male'){}
    // public function __construct($name='', $age=0, $gander=''){}

    public function __construct($name, $age, $gander)                       // Construct 
    {
        $this->name = $name . "</br>";
        $this->age = $age . "</br>";
        $this->gander = $gander . "</br>";
    }

    public function show()                                                  // Method
    {
        echo $this->name . " " . $this->age . "" . $this->gander;
    }
}
$person = new Person('Md Ammad Ali', 20, 'male');
$person1 = new Person('Md Ali', 30, 'male');
$person2 = new Person('Md Azom Ali', 40, 'male');
$person3 = new Person('Md Rubel Ali', 50, 'male');

// $person = new Person('Md Ammad Ali', 30, 'male');
// $person->name = 'Md Ammad Ali' . "</br>";
// $person->age = 30 . "</br>";
// $person->gander = "male " . " </br>";

$person->show();
$person1->show();
$person2->show();
$person3->show();
