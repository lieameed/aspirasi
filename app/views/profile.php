<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['nama'])) {
    echo "<script>alert('Silahkan login terlebih dahulu!'); window.location.href='index.php?url=login';</script>";
    exit;
}

require_once __DIR__ . '/../db-connection/db-connection.php'; 
$conn = getDatabaseConnection();

$nama_user = $_SESSION['nama'];
$stmt = $conn->prepare("SELECT * FROM users WHERE nama = ?");
$stmt->bind_param("s", $nama_user);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
    session_destroy();
    header("Location: index.php?url=login");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile - Lieameed</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes scaleIn {
            from { opacity: 0; transform: scale(0.8); }
            to { opacity: 1; transform: scale(1); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .relative > .w-full.h-64 {
            animation: fadeIn 1s ease-out forwards;
        }

        .relative.-ml-6 img {
            animation: scaleIn 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            animation-delay: 0.3s;
            opacity: 0;
        }

        .mt-6 h1, .mt-6 p, .mt-6 .flex {
            animation: fadeInUp 0.6s ease-out forwards;
            opacity: 0;
        }
        .mt-6 h1 { animation-delay: 0.5s; }
        .mt-6 p { animation-delay: 0.6s; }
        .mt-6 .flex { animation-delay: 0.7s; }

        .max-w-6xl.mt-10 a {
            animation: fadeIn 0.8s ease-out forwards;
            opacity: 0;
        }
        .max-w-6xl.mt-10 a:nth-child(1) { animation-delay: 0.8s; }
        .max-w-6xl.mt-10 a:nth-child(2) { animation-delay: 0.9s; }
        .max-w-6xl.mt-10 a:nth-child(3) { animation-delay: 1.0s; }
        .max-w-6xl.mt-10 a:nth-child(4) { animation-delay: 1.1s; }

        .grid > div {
            animation: fadeInUp 0.7s ease-out forwards;
            opacity: 0;
        }
        .grid > div:nth-child(1) { animation-delay: 1.2s; }
        .grid > div:nth-child(2) { animation-delay: 1.3s; }
        .grid > div:nth-child(3) { animation-delay: 1.4s; }
        .grid > div:nth-child(4) { animation-delay: 1.5s; }

        .grid > div img {
            transition: transform 0.4s ease;
        }
        .grid > div:hover img {
            transform: scale(1.08);
        }
    </style>
</head>

<body class="bg-[#05070A] min-h-screen font-sans flex flex-col">

    <?php include 'components/Navbar.php'; ?>

    <div class="relative">
        <div class="w-full h-64 md:h-80 overflow-hidden">
            <img src="/assets/rectangle 22.png" class="w-full h-full object-cover">
        </div>

        <div class="max-w-6xl mx-auto px-6 relative">
            <div class="flex flex-col md:flex-row items-end -mt-16 md:-mt-24 gap-6">
                
                <div class="relative -ml-6">
                    <img src="/assets/skukuy.jpg" 
                        class="w-40 h-40 md:w-52 md:h-52 rounded-full border-8 border-white shadow-lg bg-white object-cover">
                    </div>

                <div class="flex-1 flex justify-end mb-4 gap-3">
                    <button class="bg-[#5370B0] text-white px-6 py-2 rounded-lg flex items-center gap-2 hover:bg-slate-700 transition-all font-medium active:scale-95">
                        <i class="fa-solid fa-user-plus text-sm"></i> Add Friend
                    </button>
                    <button class="p-2 text-gray-600 hover:bg-gray-100 rounded-full transition-colors active:scale-90">
                        <i class="fa-solid fa-ellipsis-vertical text-2xl"></i>
                    </button>
                </div>
            </div>

            <div class="mt-6">
                <h1 class="text-4xl font-bold text-white"><?= htmlspecialchars($row['nama']) ?></h1>
                <p class="text-xl text-white mt-1">Siswa | XI TKJ 2 | SMK Pontianak</p>
                <div class="flex gap-4 mt-2 text-lg">
                    <p class="font-bold text-white"><span class="font-bold text-white">1</span> Communities</p>
                    <p class="font-bold text-white"><span class="font-bold text-white">10</span> Friends</p>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-6 mt-10 border-b border-white">
        <div class="flex justify-around md:justify-start md:gap-20 text-lg font-semibold text-gray-500">
            <a href="#" class="pb-4 border-b-4 border-[#000000] text-white px-4 transition-all">Posts</a>
            <a href="#" class="pb-4 hover:text-white px-4 transition-all">Activity</a>
            <a href="#" class="pb-4 hover:text-white px-4 transition-all">Favourites</a>
            <a href="#" class="pb-4 hover:text-white px-4 transition-all">About Me</a>
        </div>
    </div>

    <main class="max-w-6xl mx-auto px-6 py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <div class="bg-white rounded-xl shadow-sm border overflow-hidden cursor-pointer">
                <img src="/assets/Foto1.png" class="w-full">
            </div>

            <div class="bg-white rounded-xl shadow-sm border overflow-hidden cursor-pointer">  
                <img src="/assets/Foto2.png" class="w-full">
            </div>

            <div class="bg-white rounded-xl shadow-sm border overflow-hidden cursor-pointer">
                <img src="/assets/Foto3.png" class="w-full">
            </div>

             <div class="bg-white rounded-xl shadow-sm border overflow-hidden cursor-pointer">
                <img src="/assets/Foto4.png" class="w-full">
            </div>

        </div>
    </main>

</body>
</html>