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
        transform: translateY(40px) scale(0.95) rotateX(-10deg);
        transition: all 0.8s cubic-bezier(0.22, 1, 0.36, 1);
        will-change: transform, opacity;
    }
    .fade-in-scroll.active {
        opacity: 1;
        transform: translateY(0) scale(1) rotateX(0);
    }

    @keyframes gradient-move {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    .animate-gradient {
        background-size: 200% auto;
        animation: gradient-move 3s linear infinite;
    }

    .ambient-glow {
        position: fixed;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(79, 70, 229, 0.15) 0%, rgba(0,0,0,0) 70%);
        border-radius: 50%;
        z-index: -1;
        filter: blur(60px);
        animation: float 20s infinite alternate;
    }

    @keyframes float {
        0% { transform: translate(-10%, -10%); }
        100% { transform: translate(20%, 20%); }
    }

    .post-card {
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .post-card:hover {
        transform: translateY(-5px);
        border-color: rgba(99, 102, 241, 0.4);
        box-shadow: 0 20px 40px -20px rgba(0, 0, 0, 0.5), 0 0 20px -5px rgba(79, 70, 229, 0.2);
    }

    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>

<body class="bg-[#05070A] min-h-screen flex flex-col overflow-x-hidden relative">
    
    <div class="ambient-glow top-[-10%] left-[-10%]"></div>
    <div class="ambient-glow bottom-[-10%] right-[-10%]" style="animation-delay: -10s; background: radial-gradient(circle, rgba(168, 85, 247, 0.1) 0%, rgba(0,0,0,0) 70%);"></div>

    <?php include_once 'components/Navbar.php'; ?>

    <div class="w-full max-w-[1880px] mx-auto px-6 mb-10 fade-in-scroll mt-20 relative z-10">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 border-b border-white/5 pb-8">
            
            <div class="space-y-2">
                <h1 class="text-5xl font-black text-white tracking-tighter">
                    What’s <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 via-purple-400 to-indigo-400 animate-gradient">New?</span>
                </h1>
                <p class="text-gray-400 text-lg font-light tracking-wide">Jelajahi ide dan inspirasi terbaru dari komunitas.</p>
            </div>

            <div class="flex items-center gap-4 w-full md:w-auto">
                
                <div class="relative group cursor-help">
                    <div class="absolute -inset-1 bg-green-500/20 rounded-xl blur opacity-0 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative flex items-center gap-3 bg-[#111827]/80 backdrop-blur-xl border border-white/10 rounded-xl px-4 py-2.5">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                        </span>
                        <span class="text-sm font-bold text-gray-300 tracking-wider">LIVE FEED</span>
                    </div>
                </div>

                <button class="flex items-center gap-2 bg-[#111827] hover:bg-white/5 border border-white/10 text-gray-300 px-4 py-2.5 rounded-xl font-medium transition-all group">
                    <i class="fa-solid fa-arrow-down-short-wide text-indigo-400"></i>
                    <span>Terbaru</span>
                    <i class="fa-solid fa-chevron-down text-xs ml-2 text-gray-500 group-hover:text-white transition-colors"></i>
                </button>
                
            </div>
        </div>
    </div>

    <div class="w-full space-y-10 relative z-10">
        <?php if (mysqli_num_rows($result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($result)): 
                $tanggalPost = date('d M Y, H:i', strtotime($row['created_at']));
            ?>

        <div class="flex justify-center m-10 fade-in-scroll">
            <div class="bg-[#111827] rounded-2xl p-8 border border-white/10 w-full max-w-[1880px] flex flex-col items-start post-card">
                
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
                <div class="text-center text-gray-500 py-20 fade-in-scroll">
                    <p class="text-xl">Belum ada ide yang di-post bang.</p>
                </div>
            <?php endif; ?>
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