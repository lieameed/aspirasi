<?php

namespace App\Core;

// Memanggil file config agar konstanta DB_HOST dkk bisa terbaca
require_once '../app/config/app.php';

class Database
{
    // Properti untuk menyimpan nyawa koneksi
    protected $connection;

    public function __construct()
    {
        // Membuka koneksi menggunakan konstanta dari file config
        $this->connection = mysqli_connect(
            DB_HOST,
            DB_USER,
            DB_PASSWORD,
            DB_NAME
        );

        // Jika koneksi gagal, langsung matikan aplikasi dengan pesan error
        if (!$this->connection) {
            die("Koneksi ke Database Gagal: " . mysqli_connect_error());
        }
    }

    // Fungsi tambahan untuk mengambil objek koneksi jika dibutuhkan class lain
    public function getConnection() {
        return $this->connection;
    }
}
?>