<?php
class empleado{
    private $firstName;
    private $lastName;
    private $age;

    //constructor

    public function __construct($firstName, $lastName, $age){

        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }    
    public function getFirstName(){
        return $this->firstName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function getAge(){
        return $this->age; 
    }   
}