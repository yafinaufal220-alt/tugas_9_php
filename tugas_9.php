<?php

// --- Soal 1: Class Mahasiswa ---
class Mahasiswa {
    public $nama;

    public function tampilkanNama() {
        return "Nama Mahasiswa: " . $this->nama;
    }
}

// --- Soal 2: Class Persegi Panjang ---
class PersegiPanjang {
    public $panjang;
    public $lebar;

    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }
}

// --- Soal 3: Class Buku (dengan Constructor) ---
class Buku {
    public $judul;
    public $pengarang;

    public function __construct($judul, $pengarang) {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
    }

    public function infoBuku() {
        return "Buku: $this->judul, Pengarang: $this->pengarang";
    }
}

// --- Soal 4: Class User (Getter & Setter) ---
class User {
    private $username;

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }
}

// --- Soal 5: Class Mobil ---
class Mobil {
    public $merk;

    public function infoMobil() {
        return "Merk Mobil: " . $this->merk;
    }
}

// ==========================================
// EKSEKUSI OBJEK
// ==========================================

echo "### Hasil Output Tugas OOP ###\n\n";

// 1. Eksekusi Mahasiswa
$mhs = new Mahasiswa();
$mhs->nama = "Budi Santoso";
echo "1. " . $mhs->tampilkanNama() . "\n";

// 2. Eksekusi Persegi Panjang
$pp = new PersegiPanjang();
$pp->panjang = 10;
$pp->lebar = 5;
echo "2. Luas Persegi Panjang: " . $pp->hitungLuas() . "\n";

// 3. Eksekusi Buku
$buku1 = new Buku("Laskar Pelangi", "Andrea Hirata");
echo "3. " . $buku1->infoBuku() . "\n";

// 4. Eksekusi User
$user1 = new User();
$user1->setUsername("admin_kece");
echo "4. Username baru: " . $user1->getUsername() . "\n";

// 5. Eksekusi Mobil (2 Objek)
$mobilA = new Mobil();
$mobilA->merk = "Toyota";
$mobilB = new Mobil();
$mobilB->merk = "Honda";
echo "5a. " . $mobilA->infoMobil() . "\n";
echo "5b. " . $mobilB->infoMobil() . "\n";

?>