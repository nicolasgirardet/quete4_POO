<?php

require_once "Car.php";

$oneCar = new Car;

try {
    $oneCar->start();
} catch (Exception $e) {
    $oneCar->setHasParkBrake(false);
    echo $e->getMessage() . PHP_EOL;
} finally {
    echo "Ma voiture roule comme un donut!";
}


