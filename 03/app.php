<?php
require_once 'BangunDatar.php';
require_once 'Lingkaran.php';
require_once 'Persegi.php';
require_once 'Segitiga.php';

$bd = new BangunDatar();
$bd->luas();
$bd->keliling();

// objek lingkaran
$lk = new Lingkaran(15);
echo "Luas lingkaran: " . $lk->luas() . PHP_EOL;
echo "keliling lingkaran: " . $lk->keliling() . PHP_EOL;

// objek persegi
$pj = new Persegi(10);
echo "Luas Bujur Sangkar: " . $pj->luas() . PHP_EOL;
echo "keliling Bujur Sangkar: " . $pj->keliling() . PHP_EOL;

// objek segitiga
$sg = new Segitiga(10, 8);
echo "Luas Segitiga: " . $sg->luas() . PHP_EOL;

// Segitiga tidak punya keliling(), jadi yang terpanggil
// adalah keliling() milik parent class BangunDatar
$sg->keliling();