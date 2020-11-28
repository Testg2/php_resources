<?php

    /*
     * Write PHP Program to Define Three Car Types and its Color.
     * Display Car Type and its Color.
     
     
     */


//oops is way or pattern or style so that we can wrint code reusable small code 
//what is class and how to organise class
class Cars
{
    public $name;
    public $color;

    function setName($name1){
        $this->name = $name1;
    }

    function setColor($color1){
        $this->color = $color1;
    }
}

$sportsCar = new Cars();
$sportsCar->setName("Ferrari");
$sportsCar->setColor("Red");

$modernCar = new Cars();
$modernCar->setName("BMW");
$modernCar->setColor("Blue");

$budgetCar = new Cars();
$budgetCar->setName("Hundai");
$budgetCar->setColor("Black");

echo "Car: $sportsCar->name is $sportsCar->color Color" . PHP_EOL;
echo "Car: $modernCar->name is $modernCar->color  Color" . PHP_EOL;
echo "Car: $budgetCar->name is $budgetCar->color  Color" . PHP_EOL;





