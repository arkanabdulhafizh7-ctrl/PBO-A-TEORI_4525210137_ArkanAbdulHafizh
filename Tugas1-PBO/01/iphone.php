<?php
class iPhone {
    // Properties
    public $color;
    public $storage;

    // Konstruktor
    public function __construct($color, $storage) {
        $this->color = $color;
        $this->storage = $storage;
    }

    public function getColor() {
        return $this->color;
    }

    public function getStorage() {
        return $this->storage;
    }
}