<?php

class Student
{
    var $firstName;
    var $lastName;

    public function sayHello()
    {
        return 'Hello, World!';
    }

    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

$p = new Student;

$p->firstName = 'Zainudin';
$p->lastName = 'Abdullah';

echo $p->firstName . "<br>";
echo $p->lastName . "<br>";

echo $p->fullName() . "<br>";
