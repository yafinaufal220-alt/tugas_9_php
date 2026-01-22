<?php
class User {
    private $username;

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }
}

// Inisialisasi Objek
$user1 = new User();
$user1->setUsername("admin_kece"); // Mengubah nilai
echo "Username: " . $user1->getUsername(); // Menampilkan nilai
?>