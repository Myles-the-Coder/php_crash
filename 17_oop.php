<?php
/*
From PHP55 onwards you can write PHP in either a procedural 
or object oriented way. OOP consists of classes that can hold 
'properties' and 'methods'. 
Objects can be created from classes.
*/ 

class User {
  // Properties are attributes that belong to a class
  // Access Modifiers: public, private, protected
  // public: accessible everywhere
  // private: accessible only within the class
  // protected: accessible only within the class and subclasses
  public $name;
  public $email;
  public $password;

  // Constructor is a special method that is called when an object is created
  public function __construct($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }
 
  // Methods are functions that belong to a class
  function set_name($name) {
    $this->name = $name;
  }

  function get_name() {
    return $this->name;
  }
}

// Create an object from the class
$user1 = new User('Brad', 'example@gmail.com', 'password');
echo $user1->name;

// Inheritance
class Employee extends User {
  public function __construct($name, $email, $password, $title) {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function return_title($title) {
    return $this->$title;
  }
}

$employee1 = new Employee('Myles', 'example@gmail.com', 'password', 'Web Developer');

var_dump($employee1);