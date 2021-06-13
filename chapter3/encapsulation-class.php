<?php

class User
{
    public $firstName;
    public $lastName;
    public $userName;

    protected $regID = 1001;
    private $level = 'User';

    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    protected function sayProtect()
    {
        return "Hello, Protected";
    }

    private function sayPrivate()
    {
        return "Hello, Private";
    }

    public function sayMe()
    {
        $this->sayPrivate();
    }
}

class Customer extends User
{
    public function sayParent()
    {
        return $this->sayProtect();
    }
}

$u = new User;
$u->firstName = 'User';
$u->lastName = 'Class';

// echo $u->regID . "<br>"; // ! error
// echo $u->level . "<br>"; // ! error

echo $u->fullName() . "<br>";
echo $u->sayMe() . "<br>";
// echo $u->sayProtect() . "<br>"; // ! error, seharusnya bisa, tapi error karena tidak bisa memanggil instanisasi di luar function
// echo $u->sayPrivate() . "<br>"; // ! error, karena visibilitasnya private


$c = new Customer;
$c->firstName = 'Customer';
$c->lastName = 'Doe <br>';

echo $c->fullName();
echo $c->sayParent(); // * "Hello, Protected"
// echo $c->sayPrivate(); // ! error karena visibilitasnya private