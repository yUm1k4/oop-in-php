<?php

use Student as GlobalStudent;

class Student
{
    public static $grades = ['SD', 'SMP', 'SMA'];
    private static $totalStudents = 0;

    public static function motto()
    {
        return "Lern PHP OOP";
    }

    public static function count()
    {
        return self::$totalStudents;
    }

    public static function addStudent()
    {
        return self::$totalStudents++;
    }
}

echo GlobalStudent::$grades[2] . "<br>";
echo GlobalStudent::motto() . "<br>";
"<br>";
"<br>";
echo GlobalStudent::count() . "<br>";
GlobalStudent::addStudent();
echo GlobalStudent::count() . "<br>";
