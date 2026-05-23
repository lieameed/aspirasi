<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $idea ? 'Edit Ide' : 'Post Ide Baru' ?></title>
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }

        .animate-fade-up {
            animation: fadeInUp 0.8s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
        }

        .delay-1 { animation-delay: 0.1s; opacity: 0; }
        .delay-2 { animation-delay: 0.2s; opacity: 0; }
        .delay-3 { animation-delay: 0.3s; opacity: 0; }
        .delay-4 { animation-delay: 0.4s; opacity: 0; }

        .focus-within-glow:focus-within {
            box-shadow: 0 0 20px rgba(99, 102, 241, 0.15);
            border-color: rgba(99, 102, 241, 0.4) !important;
        }

        .btn-hover-effect {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .btn-hover-effect:active {
            transform: scale(0.95);
        }
    </style>
</head>
<body class="bg-[#05070A] min-h-screen flex flex-col font-sans pb-20">
    
    <?php include_once 'components/Navbar.php'; ?>

    <div class="max-w-[1000px] mx-auto w-full p-10">
        
        <div class="mb-12 animate-fade-up">
            <h1 class="text-white text-4xl font-bold mb-4"><?= isset($idea) && $idea ? 'Edit Ide' : 'Tulis Ide Baru' ?></h1>
            <div class="w-20 h-1 bg-[#6366F1] rounded-full" style="animation: slideInRight 1s ease-out"></div>
        </div>

        <form action="action/ideas.php" method="POST" class="flex flex-col gap-8">
            
        <?php if (isset($idea['id'])): ?>
            <input type="hidden" name="id" value="<?= $idea['id'] ?>">
        <?php endif; ?>

        <div class="bg-[#0F172A] rounded-2xl p-2 border border-white/5 focus-within:ring-2 focus-within:ring-[#6366F1]/50 transition-all focus-within-glow animate-fade-up delay-1">
            <input type="text" name="title" placeholder="Masukan Judul Ide..." 
                value="<?= $idea['title'] ?? '' ?>"
                class="w-full bg-transparent text-white text-3xl font-bold p-6 outline-none placeholder-gray-600" required>
        </div>

        <div class="flex flex-col md:flex-row items-center gap-6 border-[#0F172A] animate-fade-up delay-2">
            <div class="w-full md:w-1/3 bg-[#0F172A] rounded-2xl p-2 border border-white/5 focus-within:ring-2 focus-within:ring-[#6366F1]/50 transition-all">
                <label class="text-[10px] uppercase tracking-[2px] text-slate-500 px-4 pt-2 block">Kategori Ide</label>
                <select name="category" class="w-full bg-transparent text-[#6366F1] font-semibold p-4 outline-none cursor-pointer border-1 border-[#0F172A] rounded-2xl active:bg-transparent transition-all">
                    <?php
                    $opts = ["Ide Baru", "Pengembangan Ide", "Kolaborasi", "Inovasi Siswa"];
                    foreach ($opts as $opt) {
                        $selected = (isset($idea['category']) && $idea['category'] == $opt) ? 'selected' : '';
                        echo "<option value=\"$opt\" class=\"bg-[#0F172A]\" $selected>$opt</option>";
                    }
                    ?>
                </select>
            </div>
            <p class="text-slate-500 text-sm flex-1 italic">
                Pilih kategori yang paling sesuai agar idemu mudah ditemukan oleh siswa lain.
            </p>
        </div>

        <div class="bg-[#0F172A] rounded-2xl border border-white/5 overflow-hidden focus-within:ring-2 focus-within:ring-[#6366F1]/50 transition-all focus-within-glow animate-fade-up delay-3">
            <div class="bg-white/5 px-6 py-3 flex gap-4 border-b border-white/5">
                <span class="text-slate-400 text-xs font-medium uppercase tracking-widest">Detail Ide Kreatif</span>
            </div>
            <textarea name="description" placeholder="Ceritakan detail idemu, tujuan, dan bagaimana cara mewujudkannya..." 
                class="w-full h-[400px] bg-transparent p-8 text-slate-300 text-lg outline-none resize-none leading-relaxed" required><?= $idea['description'] ?? '' ?></textarea>
        </div>
        
        <div class="flex items-center justify-between mt-4 animate-fade-up delay-4">
            <a href="index.php?url=ide" class="text-slate-500 hover:text-white transition-all hover:-translate-x-1 inline-block">
                <i class="fa-solid fa-arrow-left mr-2"></i> Kembali ke Daftar
            </a>
            
            <button type="submit" name="submit_idea" class="bg-[#6366F1] text-white text-xl px-16 py-5 rounded-2xl btn-hover-effect hover:scale-105 transition-all font-bold shadow-[0_10px_30px_rgba(99,102,241,0.2)] hover:shadow-[0_15px_40px_rgba(99,102,241,0.4)]">
                <?= isset($idea['id']) ? 'Perbarui Ide' : 'Publikasikan Ide' ?> <i class="fa-solid fa-paper-plane ml-3 text-sm animate-bounce"></i>
            </button>
        </div>
    </form>
    </div>

</body>
</html>