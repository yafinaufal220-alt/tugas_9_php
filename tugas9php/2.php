<?php
class PersegiPanjang {
    public $panjang;
    public $lebar;

    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }
}

// Inisialisasi Objek
$kotak = new PersegiPanjang();
$kotak->panjang = 10;
$kotak->lebar = 5;
echo "Luas Persegi Panjang: " . $kotak->hitungLuas();
?>