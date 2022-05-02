<?php
// Statis methods & properties
class User {
    public $name;
    public $age;
    public static $minPassLength = 6;

    public static function validatePass($pass)
    {
        if (strlen($pass) >= self::$minPassLength) {
            return true;
        }
        return false;
    }
}

$password = 'hello1';
if (User::validatePass($password)) {
    echo 'Password valid';
} else {
    echo 'Password not valid';
}