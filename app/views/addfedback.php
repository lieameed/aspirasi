<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Post Ide Baru</title>
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes scaleWidth {
            from { width: 0; }
            to { width: 5rem; }
        }

        .animate-fade-up {
            animation: fadeInUp 0.7s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
        }

        .delay-1 { animation-delay: 0.1s; opacity: 0; }
        .delay-2 { animation-delay: 0.2s; opacity: 0; }
        .delay-3 { animation-delay: 0.3s; opacity: 0; }

        .btn-interact {
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        
        .btn-interact:active {
            transform: scale(0.95);
        }

        .title-line {
            animation: scaleWidth 1s cubic-bezier(0.77, 0, 0.175, 1) forwards;
        }
    </style>
</head>
<body class="bg-[#05070A] min-h-screen flex flex-col font-sans pb-20">
    
    <?php include_once 'components/Navbar.php'; ?>

    <div class="max-w-[1000px] mx-auto w-full p-10">
        
        <div class="mb-12 animate-fade-up">
            <h1 class="text-white text-4xl font-bold mb-4">Beri Feedback</h1>
            <div class="h-1 bg-[#6366F1] rounded-full title-line"></div>
        </div>

        <form action="action/feedback.php" method="POST" class="flex flex-col gap-8">
            
            <div class="bg-[#0F172A] rounded-2xl p-2 border border-white/5 focus-within:ring-2 focus-within:ring-[#6366F1]/50 transition-all animate-fade-up delay-1">
                <input type="text" name="title" placeholder="Masukan Feedback..." 
                    class="w-full bg-transparent text-white text-3xl font-bold p-6 outline-none placeholder-gray-600" required>
            </div>

            <div class="bg-[#0F172A] rounded-2xl border border-white/5 overflow-hidden focus-within:ring-2 focus-within:ring-[#6366F1]/50 transition-all animate-fade-up delay-2">
                <div class="bg-white/5 px-6 py-3 flex gap-4 border-b border-white/5">
                    <span class="text-slate-400 text-xs font-medium uppercase tracking-widest">Detail Feedback</span>
                </div>
                <textarea name="description" placeholder="Berikan deskripsi ke feedback kalian" 
                    class="w-full h-[400px] bg-transparent p-8 text-slate-300 text-lg outline-none resize-none leading-relaxed" required></textarea>
            </div>
            
            <div class="flex items-center justify-between mt-4 animate-fade-up delay-3">
                <a href="index.php?url=feedback" class="text-slate-500 hover:text-white transition-all hover:-translate-x-2 inline-flex items-center">
                    <i class="fa-solid fa-arrow-left mr-2"></i> Kembali ke Daftar
                </a>
                
                <button type="submit" name="submit_feedback" class="bg-[#6366F1] text-white text-xl px-16 py-5 rounded-2xl btn-interact hover:scale-105 transition-all font-bold shadow-[0_10px_30px_rgba(99,102,241,0.2)] hover:shadow-[0_15px_40px_rgba(99,102,241,0.4)]">
                    Tambah Feedback <i class="fa-solid fa-paper-plane ml-3 text-sm group-hover:translate-x-1 transition-transform"></i>
                </button>
            </div>

        </form>
    </div>

</body>
</html>