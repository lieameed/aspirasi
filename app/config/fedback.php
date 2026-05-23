<?php
function koneksi() {
    $c = mysqli_connect("localhost", "root", "", "abcd");
    if (!$c) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    return $c;
}

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['submit_feedback'])) {
    $db = koneksi(); 

    $title       = mysqli_real_escape_string($db, $_POST['title']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $user_id     = $_SESSION['user_id'] ?? 1;

    $sql = "INSERT INTO feedbacks (user_id, title, description, votes, status, category) 
            VALUES ('$user_id', '$title', '$description', 0, 'IN DISCOVERY', 'IDEAS')";

    if (mysqli_query($db, $sql)) {
        echo "<script>alert('Feedback berhasil ditambahkan!'); window.location.href='../../index.php?url=feedback';</script>";
    } else {
        echo "Gagal memproses data: " . mysqli_error($db);
    }
    exit; 
}

function getAllFeedbacks() {
    $db = koneksi();
    $sql = "SELECT * FROM feedbacks ORDER BY created_at DESC";
    return mysqli_query($db, $sql);
}

function voteFeedback($id) {
    $db = koneksi();
    $id = intval($id);
    $sql = "UPDATE feedbacks SET votes = votes + 1 WHERE id = $id";
    return mysqli_query($db, $sql);
}

function addVote($id) {
    $db = koneksi();
    $id = intval($id);
    $sql = "UPDATE feedbacks SET votes = votes + 1 WHERE id = $id";
    return mysqli_query($db, $sql);
}
?>