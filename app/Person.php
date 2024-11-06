<?php
namespace App;

class Person
{
    public $name;

    public $age;

    public function __construct($name1, $age1)
    {
        $this->name = $name1;
        $this->age = $age1;
    }


    public function greet()
    {
        return "Hello: I am " . $this->name . "\n" . "I am " . $this->age;
    }

}
?>