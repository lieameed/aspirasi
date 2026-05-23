<?php
require_once __DIR__ . '/../db-connection/db-connection.php';

$conn = getDatabaseConnection();

$query = "SELECT posts.*, users.nama AS username 
          FROM posts 
          JOIN users ON posts.user_id = users.id 
          ORDER BY posts.created_at DESC";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Recommendation Page</title>

    <style>
    .fade-in-scroll {
        opacity: 0;
        transform: translateY(20px);
        transition: all 1s ease-out;
    }
    .fade-in-scroll.active {
        opacity: 1;
        transform: translateY(0);
    }
    </style>
</head>

<body class="bg-[#05070A] min-h-screen flex flex-col">

    <?php include_once 'components/Navbar.php'; ?>

    <div class="w-full pt-16 pb-12 px-6 fade-in-scroll">
        <div class="max-w-[1200px] mx-auto">
            
            <div class="relative group">
                <div class="absolute inset-y-0 left-0 pl-7 flex items-center pointer-events-none z-10">
                    <i class="fa-solid fa-magnifying-glass text-indigo-400 text-xl transition-all group-focus-within:text-indigo-300 group-focus-within:scale-110"></i>
                </div>

                <input type="text" 
                    class="w-full h-[75px] bg-[#0F172A] border-2 border-white/5 rounded-[22px] pl-16 pr-[160px] text-white text-lg font-medium outline-none 
                        focus:border-indigo-500/50 focus:bg-[#131c33] focus:ring-4 focus:ring-indigo-500/10 shadow-2xl transition-all duration-300 
                        placeholder:text-slate-600 placeholder:font-normal"
                    placeholder="Cari ide kreatif di sini bang...">

                <div class="absolute inset-y-0 right-3 flex items-center gap-3">
                    <div class="hidden md:flex items-center justify-center h-8 px-3 bg-white/5 border border-white/10 rounded-lg">
                        <span class="text-[10px] text-slate-500 font-bold tracking-tighter uppercase">ESC</span>
                    </div>
                    
                    <button class="h-[52px] px-8 bg-indigo-600 hover:bg-indigo-500 text-white font-black rounded-xl flex items-center gap-2 transition-all active:scale-95 shadow-lg shadow-indigo-600/20 uppercase tracking-tighter text-sm">
                        CARI <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </button>
                </div>
            </div>

        </div>
    </div>

    <div class="w-full pt-16 pb-12 px-6">
        <h1 class="text-3xl font-bold text-white ml-6 mb-10 fade-in-scroll">Recommendation</h1>

        <div class="w-full space-y-10">
            <?php if (mysqli_num_rows($result) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($result)): 
                    $tanggalPost = date('d M Y, H:i', strtotime($row['created_at']));
                ?>

        <div class="flex justify-center m-10 fade-in-scroll">
            <div class="bg-[#111827] rounded-2xl p-8 border border-white/10 w-full max-w-[1880px] flex flex-col items-start">
                
                <div class="flex items-center gap-4 mb-6 w-full justify-start">
                    <div class="w-14 h-14 rounded-full bg-gradient-to-tr from-indigo-500 to-purple-500 p-0.5 flex-shrink-0">
                        <img src="https://ui-avatars.com/api/?name=<?= urlencode($row['username']) ?>&background=random" class="w-full h-full rounded-full object-cover border-2 border-[#111827]">
                    </div>
                    <div class="flex flex-col items-start">
                        <h2 class="text-xl font-bold text-white"><?= htmlspecialchars($row['username']) ?></h2>
                        <p class="text-xs text-gray-400">Posted on <?= $tanggalPost ?></p>
                    </div>
                </div>

                <div class="w-full mb-6">
                    <p class="text-gray-200 text-lg leading-relaxed whitespace-pre-wrap"><?= htmlspecialchars(trim($row['caption'])) ?></p>
                </div>

                <?php if (!empty($row['image_path'])): ?>
                    <div class="w-full rounded-2xl overflow-hidden border border-white/5 flex justify-start mb-6">
                        <img src="<?= htmlspecialchars($row['image_path']) ?>" 
                            alt="Post Image" 
                            class="max-h-[600px] w-auto object-contain">
                    </div>
                <?php endif; ?>

                <div class="w-full flex justify-between items-center pt-6 border-t border-white/5">
                    <div class="flex items-center gap-2 text-gray-400 text-sm">
                        <i class="fa-solid fa-location-dot text-orange-500"></i>
                        <span><?= !empty($row['location']) ? htmlspecialchars($row['location']) : 'Global' ?></span>
                    </div>
                    <div class="flex items-center gap-6 text-gray-400">
                        <span><i class="fa-regular fa-heart"></i> 0</span>
                        <span><i class="fa-regular fa-comment"></i> 0</span>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
            <?php else: ?>
                <div class="text-center text-gray-500 py-20">
                    <p class="text-xl">Belum ada ide yang di-post bang.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) entry.target.classList.add('active');
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.fade-in-scroll').forEach((el) => observer.observe(el));
    </script>
</body>
</html>