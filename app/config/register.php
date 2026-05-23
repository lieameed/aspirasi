<?php
require_once __DIR__ . '/../db-connection/db-connection.php';

$conn = getDatabaseConnection();

$nama    = $_POST['nama'] ?? null; 
$pass    = $_POST['password'] ?? null;
$confirm = $_POST['confirm_password'] ?? null;

if (!$nama || !$pass) {
    echo "<script>alert('Data harus diisi!'); window.history.back();</script>";
    exit;
}

if ($pass !== $confirm) {
    echo "<script>alert('Password tidak cocok!'); window.history.back();</script>";
    exit;
}

$hashed = password_hash($pass, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (nama, password_hash) VALUES (?, ?)");
$stmt->bind_param("ss", $nama, $hashed);

if ($stmt->execute()) {
    echo "<script>alert('Berhasil Daftar!'); window.location.href='../index.php?url=login';</script>";
} else {
    echo "Error: " . $conn->error;
}