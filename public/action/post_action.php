<?php
session_start();

require_once __DIR__ . '/../../app/db-connection/db-connection.php';
require_once __DIR__ . '/../../app/controllers/PostController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = getDatabaseConnection();

    $postController = new PostController($conn);
    
    $result = $postController->createPost($_POST, $_FILES);

    if ($result === true) {
        echo "<script>
                alert('Ide lu berhasil di-post bang!');
                window.location.href = '../index.php?url=home';
              </script>";
        exit;
    } else {
        echo "<script>
                alert('Gagal post: $result');
                window.history.back();
              </script>";
        exit;
    }
} else {
    header("Location: index.php?url=home");
    exit;
}
?>