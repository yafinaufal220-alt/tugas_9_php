<?php
class Mahasiswa {
    public $nama;

    public function tampilkanNama() {
        return "Nama Mahasiswa: " . $this->nama;
    }
}

// Inisialisasi Objek
$mhs = new Mahasiswa();
$mhs->nama = "Budi Santoso";
echo $mhs->tampilkanNama(); 
?>