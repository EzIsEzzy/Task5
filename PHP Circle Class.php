<?php

//Write a PHP class called 'Circle' that has a radius property. Implement methods to calculate the circle's area and circumference.

Class Circle{
    private float $radius = 0;
    private const pi = 3.14159265359;
    public function __construct($radius){
        echo "Just a notifier, the radius is in cm";
        $this->radius = $radius;
    }
    public function getCircleArea(){
        return ((self::pi * pow(($this->radius),2))). " cm" ;
    }
}

$circle1= new Circle(20);
echo "<h3>The area for this circle is = ". $circle1->getCircleArea();"</h3>";