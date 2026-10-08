<?php
require_once 'Vehicle.php';
require_once 'Movable.php';
require_once 'Fuelable.php';

class Car extends Vehicle implements Movable, Fuelable {
    public function __construct($name) {
        parent::__construct($name);
    }

    public function move() {
        echo $this->name . " bergerak di jalan." . PHP_EOL;
    }

    public function refuel() {
        echo $this->name . "Isi bahan bakar mobil" . PHP_EOL;
    }
}