<?php

//Write a PHP class called 'Student' with properties like 'name', 'age', and 'grade'. Implement a method to display student information.

Class Student{
    private string $name="";
    private int $age=0;
    private int $grade=0;

    public function setStudentInfo($name, $age, $grade)
    {
        if (is_string($name) and is_int($age) and is_int($grade) and $grade >= 1 and $grade <= 12)
        {
            $this->name = $name;
            $this->age = $age;
            $this->grade = $grade;

            echo "<h3> Student Info has been set! </h3>";
        }
        else
        {
            echo "<h3> Please check your inputs! </h3>";
        }
    }
    public function getStudentInfo()
    {
        echo "<h3> You are ". $this->name .", with an age of ". $this->age .", on grade ". $this->grade ."</h3>";
    }
}

$StudentAhmed = new Student();
$StudentAhmed->setStudentInfo("Ahmed", 20, 12);
$StudentAhmed->getStudentInfo();