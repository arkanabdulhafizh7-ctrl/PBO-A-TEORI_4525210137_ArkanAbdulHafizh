<?php
require_once 'BangunDatar.php';

class Lingkaran extends BangunDatar {
    // r atau jari-jari
    private $r;

    public function __construct($r) {
        $this->r = $r;
    }

    public function luas() {
        return round(M_PI * $this->r * $this->r, 2);
    }

    public function keliling() {
        return round(2 * M_PI * $this->r, 2);
    }
}