<?php
namespace Example;

class User{
    
    private $name;
    private $lastname;
            
    function getName() {
        return $this->name;
    }

    function getLastname() {
        return $this->lastname;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function __construct() {
        
    }
    
    public function getFullName(){
        return $this->getName() . " " . $this->getLastname();
    }
}