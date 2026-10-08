<?php
require_once 'Mahasiswa.php';

// Subclass yang mewarisi Mahasiswa
class MahasiswaInternational extends Mahasiswa {
    private $negaraAsal;

    /*
     * Pengganti 3 constructor Java:
     * 1. ()                         -> tanpa parameter
     * 2. (nama, nim, negara)        -> $param3 = negara
     * 3. (nama, nim, umur, negara)  -> $param3 = umur, $param4 = negara
     */
    public function __construct($nama = "Belum Diisi", $nim = "Belum Diisi", $param3 = null, $param4 = null) {
        if ($param4 !== null) {
            parent::__construct($nama, $nim, $param3);
            $this->negaraAsal = $param4;
        } elseif ($param3 !== null) {
            parent::__construct($nama, $nim);
            $this->negaraAsal = $param3;
        } else {
            parent::__construct();
            $this->negaraAsal = "Belum Diisi";
        }
    }

    public function getNegaraAsal() {
        return $this->negaraAsal;
    }

    public function setNegaraAsal($negaraAsal) {
        $this->negaraAsal = $negaraAsal;
    }

    // Override tampilkanInfo untuk menambah informasi negara
    public function tampilkanInfo() {
        parent::tampilkanInfo();
        echo "Negara Asal: " . $this->negaraAsal . PHP_EOL;
    }
}