<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController
{
    public function register()
    {
        // 1. Ambil data dari form $_POST
        $username = $_POST['username'];
        $password = $_POST['password'];

        // 2. Panggil Model untuk memasukkan data
        $userModel = new UserModel();
        $simpan = $userModel->registerUser($username, $password);

        if ($simpan) {
            echo "Registrasi berhasil! Silakan login.";
        } else {
            echo "Registrasi gagal.";
        }
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $userModel = new UserModel();
        $user = $userModel->checkLogin($username);

        // Verifikasi password yang di-hash
        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            echo "Login Berhasil! Selamat datang " . $user['username'];
        } else {
            echo "Username atau password salah!";
        }
    }
}