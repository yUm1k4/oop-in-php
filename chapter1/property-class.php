<?php

class Student
{
    var $name;
    var $country = 'None';
}

$student1 = new Student;
$student2 = new Student;

$student1->name = 'Zainudin';
$student2->name = 'Abdullah';

echo $student1->name . "<br>"; //Zainudin
echo $student2->name . "<br>"; //Abdullah

// ? mendapatkan semua variable/propperty yg ada di class Student
$class_vars = get_class_vars('Student');
echo "Propterty milik Student: ";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

// ? cek apakah property name ada di class Student
if (property_exists('Student', 'name')) {
    echo "Property name tersedia";
} else {
    echo "Property name tidak tersedia";
}
