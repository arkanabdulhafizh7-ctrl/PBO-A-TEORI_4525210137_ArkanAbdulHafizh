<?php
// Interface: kontrak bahwa kendaraan bisa isi bahan bakar
interface Fuelable {
    public function refuel();
}

// Trait: pengganti "default method" milik interface di Java
trait FuelableDefault {
    public function refuel() {
        echo "Mengisi bahan bakar umum." . PHP_EOL;
    }
}