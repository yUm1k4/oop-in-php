<?php

class User
{
    var $firsName;
    var $lastName;
    var $userName;

    public function fullName()
    {
        return $this->firsName . ' ' . $this->lastName;
    }
}

class Customer extends User
{
}

$c = new Customer;
$c->firsName = 'Customer <br>';
$c->lastName = 'Doe';

echo $c->fullName();

// cek apakah subclass tsb merupakan bagian dari parent class user
// menggunakan is_subclass_of()
if (is_subclass_of($c, 'User')) {
    echo "Instance Customer merupakan subclass Class User <br>";
}

// utk mengetahui parent class dari Customer
// menggunakan class_parents()
$parents = class_parents($c);
echo implode(', ', $parents);
