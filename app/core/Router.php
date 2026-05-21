<?php

namespace App\Models;

use App\Core\Model;

class UserModel extends Model
{
    public function registerUser($username, $password)
    {
        // Mengamankan password dengan hash
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        $query = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = mysqli_prepare($this->connection, $query);
        
        mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPassword);
        return mysqli_stmt_execute($stmt);
    }

    public function checkLogin($username)
    {
        $query = "SELECT * FROM users WHERE username = ?";
        $stmt = mysqli_prepare($this->connection, $query);
        
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        
        $result = mysqli_stmt_get_result($stmt);
        return mysqli_fetch_assoc($result);
    }
}