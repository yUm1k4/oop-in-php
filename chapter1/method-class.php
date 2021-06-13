<?php

class Student
{
    var $name;
    var $country = 'None';

    public function sayHello()
    {
        return 'Hello, World!';
    }
}

$student1 = new Student;
$student2 = new Student;

$student1->name = 'Zainudin';
$student2->name = 'Abdullah';

echo $student1->name . "<br>"; //Zainudin
echo $student2->name . "<br>"; //Abdullah


echo $student1->sayHello() . "<br>";
echo $student2->sayHello() . "<br>";

// ? mendapatkan semua variable/propperty yg ada di class Student
$class_method = get_class_methods('Student');
echo "Method milik Student: ";
echo "<pre>";
print_r($class_method);
echo "</pre>";

// ? cek apakah property name ada di class Student
if (method_exists('Student', 'sayHello')) {
    echo "Property sayHello tersedia";
} else {
    echo "Property sayHello tidak tersedia";
}
