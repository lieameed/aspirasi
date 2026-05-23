<?php
require_once __DIR__ . '/../db-connection/db-connection.php';
$conn = getDatabaseConnection(); 

$nama = $_POST['nama'] ?? null;
$pass = $_POST['pass'] ?? null;

if (!$nama || !$pass) {
    echo "<script>alert('Isi semua data!'); window.history.back();</script>";
    exit;
}

$stmt = $conn->prepare("SELECT id, nama, password_hash FROM users WHERE nama = ?");
$stmt->bind_param("s", $nama);
$stmt->execute();
$result = $stmt->get_result();

if ($user = $result->fetch_assoc()) {
    if (password_verify($pass, $user['password_hash'])) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['is_login'] = true;

        echo "<script>alert('Login Berhasil!'); window.location.href='../index.php?url=home';</script>";
        exit;
    } else {
        echo "<script>alert('Password Salah!'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('User tidak ditemukan!'); window.history.back();</script>";
}

?>