<?php
class Buku {
    public $judul;
    public $pengarang;

    public function __construct($judul, $pengarang) {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
    }

    public function infoBuku() {
        return "Judul: " . $this->judul . ", Pengarang: " . $this->pengarang;
    }
}

// Inisialisasi Objek dengan parameter constructor
$buku1 = new Buku("Laskar Pelangi", "Andrea Hirata");
echo $buku1->infoBuku();
?>