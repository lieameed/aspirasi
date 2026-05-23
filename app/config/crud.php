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

if (isset($_POST['submit_idea'])) {
    $db = koneksi(); 

    $id          = $_POST['id'] ?? null;

    $title       = mysqli_real_escape_string($db, $_POST['title']);
    $category    = mysqli_real_escape_string($db, $_POST['category']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $user_id     = $_SESSION['user_id'] ?? 1;

    if ($id && $id !== '') {
        $sql = "UPDATE ideas SET 
                title = '$title', 
                category = '$category', 
                description = '$description' 
                WHERE id = " . intval($id);
        $notif = "Ide berhasil diperbarui!";
    } else {
        $sql = "INSERT INTO ideas (user_id, title, category, description) 
                VALUES ('$user_id', '$title', '$category', '$description')";
        $notif = "Ide baru berhasil dipublikasikan!";
    }

    if (mysqli_query($db, $sql)) {
        echo "<script>alert('$notif'); window.location.href='../../index.php?url=ide';</script>";
    } else {
        echo "Gagal memproses data: " . mysqli_error($db);
    }
    exit; 
}

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['submit_idea'])) {
    $id          = $_POST['id'] ?? null;
    $title       = mysqli_real_escape_string($conn, $_POST['title']);
    $category    = mysqli_real_escape_string($conn, $_POST['category']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $user_id     = $_SESSION['user_id'] ?? 1;

    if ($id) {
        $sql = "UPDATE ideas SET 
                title = '$title', 
                category = '$category', 
                description = '$description' 
                WHERE id = $id";
        $notif = "Ide berhasil diperbarui!";
    } else {
        $sql = "INSERT INTO ideas (user_id, title, category, description) 
                VALUES ('$user_id', '$title', '$category', '$description')";
        $notif = "Ide baru berhasil dipublikasikan!";
    }

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('$notif'); window.location.href='index.php?url=?ide';</script>";
    } else {
        echo "Gagal memproses data: " . mysqli_error($conn);
    }
}

if (isset($_GET['action']) && $_GET['action'] === 'delete') {
    $id = intval($_GET['id']);

    $sql = "DELETE FROM ideas WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Ide berhasil dihapus!'); window.location.href='index.php?url=ide';</script>";
    } else {
        echo "Gagal menghapus data: " . mysqli_error($conn);
    }
}

function getIdeaById($id) {
    $db = koneksi(); 
    
    $id = intval($id);
    $sql = "SELECT * FROM ideas WHERE id = $id LIMIT 1";
    $result = mysqli_query($db, $sql);
    
    return mysqli_fetch_assoc($result);
}


// Hapus fungsi getAllIdeas() yang lama, ganti dengan versi sakti ini:
function getAllIdeas($conn, $filter = 'all') {
    // Pastikan koneksi ada, kalau gak ada kita bikin lokal
    if (!$conn) {
        $conn = koneksi();
    }

    $sql = "SELECT * FROM ideas";
    
    // Logika Filter
    if ($filter !== 'all') {
        $filterSafe = mysqli_real_escape_string($conn, $filter);
        $sql .= " WHERE category = '$filterSafe'";
    }
    
    $sql .= " ORDER BY created_at DESC";
    
    return mysqli_query($conn, $sql);
}

// Pastikan redirect di bagian POST pakai ini biar gak nyasar:
// window.location.href='index.php?url=ide';
function deleteIdea($id) {
    $db = koneksi();
    $safe_id = mysqli_real_escape_string($db, $id);
    $sql = "DELETE FROM ideas WHERE id = '$safe_id'";
    return mysqli_query($db, $sql);
}


?>