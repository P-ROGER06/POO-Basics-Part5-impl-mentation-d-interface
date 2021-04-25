<?php


require 'Bicycle.php';
require_once 'Car.php';



$dynamoBike = new Bicycle('grey', 1);

$dynamoBike->setCurrentSpeed(25);

echo "Bike/ speed 25 km/h / switch on / bool result = " . $dynamoBike->switchOn() . "<br>". "<br>";

$dynamoBike->setCurrentSpeed(8);

echo "Bike/ speed 8 km/h / switch on / bool result = " . $dynamoBike->switchOn() . "<br>". "<br>";

$dynamoBike->setCurrentSpeed(25);

echo "Bike/ speed 25 km/h / switch off / bool result = " . $dynamoBike->switchOff() . "<br>". "<br>";

$tesla = new Car('grey', 4, 'electric');

echo "Car / switch on / bool result = " . $tesla->switchOn();
