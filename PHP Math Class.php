<?php

//Write a class called 'Math' with static methods like 'add()', 'subtract()', and 'multiply()'. Use these methods to perform mathematical calculations.

class Math {
    public static function add(int $a, int $b) {
        echo "Sum of $a and $b is = ". $a + $b . "<br>";
    }
    public static function subtract(int $a, int $b) {
        echo "Subtraction of $a from $b is = ". $a - $b. "<br>";
    }
    public static function multiply(int $a, int $b) {
        echo "Multiplicaton of $a and $b is = ". $a * $b. "<br>";
    }
    public static function divide(int $a, int $b) {
        echo "Division of $a on $b is = ". $a / $b. "<br>";
    }
    public static function module(int $a, int $b) {
        echo "mod of $a on $b is = ". $a % $b. "<br>";
    }
}
Math::add(5,4);
Math::subtract(5,4);
Math::multiply(5,4);
Math::divide(5,4);
Math::module(5,4);