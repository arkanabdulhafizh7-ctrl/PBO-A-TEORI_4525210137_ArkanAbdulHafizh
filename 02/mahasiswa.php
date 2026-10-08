<?php
class Mahasiswa {
    private $nama;
    private $nim;
    private $umur;

    // Pengganti 3 constructor Java (tanpa parameter, 2 parameter, 3 parameter)
    public function __construct($nama = "Belum Diisi", $nim = "Belum Diisi", $umur = 0) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->umur = $umur;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getUmur() {
        return $this->umur;
    }

    public function setUmur($umur) {
        $this->umur = $umur;
    }

    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . PHP_EOL;
        echo "NIM: " . $this->nim . PHP_EOL;
        echo "Umur: " . $this->umur . PHP_EOL;
    }
}