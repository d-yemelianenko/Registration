<?php 

namespace App;

 class Student extends Person
 {
    public $university;

    public function __construct($name1 ,$age1 ,$university1)
    {
        parent::__construct($name1,$age1);
        $this->university =$university1;
    }

    public function greet()
    {
        return "Hello: I am " . $this->university . "\n" ;
    }
 }


?>