<?php

class Student
{
}

$student1 = new Student;

// cek ada kelas apa saja
$classes = get_declared_classes();
echo "Classes: " . implode(', ', $classes) . "<br>";

$classNames = ['Product', 'Student', 'student'];

foreach ($classNames as $cn) {
    if (class_exists($cn)) {
        echo "{$cn} class ada. <br>";
    } else {
        echo "{$cn} class tidak ada <br>";
    }
}
