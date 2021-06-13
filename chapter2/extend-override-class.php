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
    var $city;
    var $country;

    public function location()
    {
        return $this->city . ', ' . $this->country;
    }

    public function fullName()
    {
        // melakukan override pada method fullName()
        return $this->firsName . ' ' . $this->lastName . ' (customer)';
    }
}

// * User class
$u = new User;
$u->firsName = 'Zain';
$u->lastName = 'Abd';
// $u->city = 'Surabaya';
// $u->country = 'Indonesia';

echo $u->fullName() . '<br>';
// echo $u->location() . '<br>';

// * Customer class
$c = new Customer;
$c->firsName = 'Customer';
$c->lastName = 'Doe';
$c->city = 'Bekasi';
$c->country = 'Indonesia';

echo $c->fullName() . '<br>';
echo $c->location() . '<br>';

echo "<br>";

// cek apakah subclass tsb merupakan bagian dari parent class user
// menggunakan is_subclass_of()
if (is_subclass_of($c, 'User')) {
    echo "Instance Customer merupakan subclass Class User <br>";
}

// utk mengetahui parent class dari Customer
// menggunakan class_parents()
$parents = class_parents($c);
echo implode(', ', $parents);
