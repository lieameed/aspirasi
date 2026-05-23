<?php 
$activeFilter = isset($_GET['filter']) ? $_GET['filter'] : 'all'; 
$categories = [
    'all' => 'All',
    'Ide Baru' => 'Ide Baru',
    'Pengembangan Ide' => 'Pengembangan Ide',
    'Kolaborasi' => 'Kolaborasi',
    'Inovasi Siswa' => 'Inovasi Siswa'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Ide Kreatif</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .fade-in-scroll { opacity: 0; transform: translateY(20px); transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1); }
        .fade-in-scroll.active { opacity: 1; transform: translateY(0); }

        .idea-card {
            background: rgba(15, 23, 42, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            transition: all 0.4s ease;
        }
        .idea-card:hover {
            background: rgba(30, 41, 59, 0.5);
            border-color: rgba(99, 102, 241, 0.3);
            transform: translateY(-5px);
            box-shadow: 0 20px 40px -20px rgba(0,0,0,0.5);
        }
    </style>
</head>
<body class="bg-[#05070A] text-slate-300 overflow-x-hidden font-sans">

    <?php include_once 'components/Navbar.php'; ?>

    <div class="max-w-[1200px] mx-auto px-10 pt-20 pb-10 text-center">
        <h1 class="text-white text-5xl md:text-6xl font-extrabold tracking-tight mb-4 fade-in-scroll">
            Explore <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">Ideas.</span>
        </h1>
        <p class="text-slate-500 text-lg max-w-2xl mx-auto fade-in-scroll">
            Temukan inspirasi dan kolaborasi dari berbagai ide kreatif siswa di seluruh penjuru sekolah.
        </p>
    </div>

    <div class="max-w-[1200px] mx-auto px-10 mt-10 pb-20">
        <div class="flex flex-wrap gap-4 mb-8 items-center justify-between fade-in-scroll">
            <div class="flex flex-wrap gap-2">
                <?php foreach ($categories as $slug => $label): ?>
                    <?php 
                        $is_active = ($activeFilter === $slug);
                        $class = $is_active 
                            ? "bg-indigo-600 text-white border-indigo-500 shadow-[0_0_20px_rgba(79,70,229,0.4)]" 
                            : "bg-[#0F172A] border-white/5 text-slate-400 hover:text-white hover:border-white/20";
                    ?>
                    <a href="index.php?url=ide&filter=<?= urlencode($slug) ?>" 
                       class="px-5 py-2 rounded-full transition-all border text-sm font-semibold <?= $class ?>">
                        <?= $label ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <a href="index.php?url=ideas" 
               class="px-6 py-2.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-full hover:scale-105 active:scale-95 transition-all font-bold shadow-lg shadow-indigo-500/20 flex items-center gap-2">
                <i class="fa-solid fa-plus text-xs"></i> PUBLISH IDE
            </a>
        </div>

        <div class="relative w-full h-[1px] mb-16">
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
        </div>

        <div class="grid grid-cols-1 gap-8">
            <?php 
            if ($result && mysqli_num_rows($result) > 0):
                while ($row = mysqli_fetch_assoc($result)):
                    $tanggal = date('d M Y', strtotime($row['created_at']));
            ?>
                <div class="idea-card p-8 rounded-3xl flex flex-col md:flex-row gap-8 fade-in-scroll group">
                    <div class="md:w-1/4">
                        <div class="flex items-center gap-2 text-indigo-400 font-mono text-sm mb-3">
                            <i class="fa-regular fa-calendar"></i>
                            <span><?= $tanggal ?></span>
                        </div>
                        <h2 class="text-white text-2xl font-bold leading-tight group-hover:text-indigo-400 transition-colors">
                            <?= htmlspecialchars($row['title']) ?>
                        </h2>
                        
                        <div class="flex gap-5 mt-6 pt-6 border-t border-white/5">
                            <a href="index.php?url=ide/edit&id=<?= $row['id'] ?>" class="text-slate-500 hover:text-indigo-400 text-sm flex items-center gap-2 transition-colors">
                                <i class="fa-solid fa-pen-nib"></i> Edit
                            </a>
                            <a href="index.php?url=ide/delete&id=<?= $row['id'] ?>" 
                               onclick="return confirm('Hapus ide ini?')"
                               class="text-slate-500 hover:text-red-500 text-sm flex items-center gap-2 transition-colors">
                                <i class="fa-solid fa-trash-can"></i> Hapus
                            </a>
                        </div>
                    </div>

                    <div class="md:w-3/4 flex flex-col justify-between">
                        <div>
                            <span class="inline-block px-3 py-1 rounded-md bg-indigo-500/10 text-indigo-400 text-[11px] font-bold uppercase tracking-widest mb-4 border border-indigo-500/20">
                                <i class="fa-solid fa-tag mr-1"></i> <?= htmlspecialchars($row['category']) ?>
                            </span>
                            <p class="text-slate-400 leading-relaxed text-lg">
                                <?= nl2br(htmlspecialchars($row['description'])) ?>
                            </p>
                        </div>
                        
                        <div class="mt-8 flex items-center justify-between">
                            <div class="flex -space-x-2">
                                <div class="w-8 h-8 rounded-full border-2 border-[#05070A] bg-slate-800 flex items-center justify-center text-[10px] text-white font-bold">SM</div>
                                <div class="w-8 h-8 rounded-full border-2 border-[#05070A] bg-indigo-800 flex items-center justify-center text-[10px] text-white font-bold">JD</div>
                            </div>
                            <button class="text-xs font-bold text-slate-500 hover:text-white transition-colors">LIHAT DETAIL <i class="fa-solid fa-arrow-right ml-1 text-[10px]"></i></button>
                        </div>
                    </div>
                </div>
            <?php 
                endwhile;
            else: 
            ?>
                <div class="py-20 text-center fade-in-scroll">
                    <div class="w-20 h-20 bg-slate-900 rounded-full flex items-center justify-center mx-auto mb-6 border border-white/5 text-slate-600">
                        <i class="fa-solid fa-lightbulb text-3xl"></i>
                    </div>
                    <p class="text-slate-500 text-lg italic">Belum ada ide yang ditemukan di kategori ini.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, { threshold: 0.1 });
        
        document.querySelectorAll('.fade-in-scroll').forEach((el) => observer.observe(el));
    </script>
</body>
</html>