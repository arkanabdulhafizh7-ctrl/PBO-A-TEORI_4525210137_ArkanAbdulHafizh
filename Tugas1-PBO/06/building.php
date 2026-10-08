<?php
require_once 'Vehicle.php';

// Tidak bisa bergerak dan tidak perlu bahan bakar,
// jadi tidak implements Movable maupun Fuelable
class Building extends Vehicle {
    public function __construct($name) {
        parent::__construct($name);
    }
}