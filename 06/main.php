<?php
require_once 'Car.php';
require_once 'Boat.php';
require_once 'Motor.php';
require_once 'Building.php';

$myCar = new Car("Mobil Sport");
$myBoat = new Boat("Perahu Motor");
$myMotor = new Motor("Motor Gravel");
$myBuilding = new Building("Gedung Tinggi");

$myCar->showInfo();
$myCar->move();
$myCar->refuel();

echo PHP_EOL;

$myBoat->showInfo();
$myBoat->move();
$myBoat->refuel();

echo PHP_EOL;

$myMotor->showInfo();
$myMotor->move();
$myMotor->refuel();

echo PHP_EOL;

$myBuilding->showInfo();
// $myBuilding->move();   // Tidak bisa, Building tidak implements Movable
// $myBuilding->refuel(); // Tidak bisa, Building tidak implements Fuelable