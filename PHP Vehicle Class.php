<?php

//Write a PHP class called 'Vehicle' with properties like 'brand', 'model', and 'year'. Implement a method to display the vehicle details.

class Vehicle{
    private string $brand="";
    private string $model="";
    private int $year=0;
    public function __construct(string $brand, string $model, int $year){
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }
    public function displayDetails(){
        echo "Brand: <h3 style='display:inline;'> $this->brand </h3>";
        echo "Model: <h3 style='display:inline;'> $this->model</h3>\n";
        echo "Year:  <h3 style='display:inline;'>$this->year</h3>\n";
    }
}

$Electric = new Vehicle('Tesla','Y',2024);
$Electric->displayDetails();