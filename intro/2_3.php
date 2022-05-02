<?php
// classes, properties and methods
// Define a class
class User {
    // properties (attributes)
    public $name;

    // methods (functions)
    public function sayHello()
    {
        return "Hello, {$this->name}!";
    }
}

// Instatiate a user object from the user class

$user1 = new User();
$user1->name = 'Brad';
echo $user1->sayHello();

// Create new user

$user2 = new User();
$user2->name = 'Jeff';
echo $user2->sayHello();