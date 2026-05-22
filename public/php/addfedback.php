<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Post Ide Baru</title>
    <style>
        .fade-in { animation: fadeIn 0.8s ease-out; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-[#05070A] min-h-screen flex flex-col font-sans pb-20">
    
    <nav class="bg-[#0F172A] w-full min-h-[80px] h-[100px] shadow-[0_0_40px_rgba(99,102,241,0.15)] flex items-center top-0 z-50 px-10">
        <div class="flex flex-row items-center justify-between w-full">
            
            <h1 class="text-white font-bold text-xl md:hidden">Portal Ide</h1>

            <div class="hidden md:flex flex-row items-center text-white text-lg flex-1 justify-end gap-6">
                <a href="index.php" class="hover:text-[#6366F1] cursor-pointer transition-all">Home</a>
                <a href="post.php" class="hover:text-[#6366F1] cursor-pointer transition-all">Post</a>
                <a href="php/explore.php" class="hover:text-[#6366F1] cursor-pointer transition-all">Explore</a>
                <a href="php/ide.php" class="hover:text-[#6366F1] cursor-pointer transition-all">Forums</a>
                <a href="php/detailide.php" class="hover:text-[#6366F1] cursor-pointer transition-all">Detailed</a>
                <a href="notifications.php" class="hover:text-[#6366F1] cursor-pointer transition-all">Notification</a>
                <a href="about.php" class="hover:text-[#6366F1] cursor-pointer transition-all">About App</a>
                
                <p class="text-gray-600">|</p>

                <a href="php/login.php">
                    <button class="w-[120px] h-[45px] bg-[#6366F1] rounded-xl hover:scale-105 transition-all font-semibold text-white">Log-In</button>
                </a>
                
                <a href="php/signup.php">
                    <button class="w-[120px] h-[45px] border-2 border-[#6366F1] text-[#6366F1] rounded-xl hover:scale-105 transition-all font-semibold">Sign-up</button>
                </a>
            </div>

            <button class="hidden text-white text-2xl">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </nav>

    <div class="max-w-[1000px] mx-auto w-full p-10 fade-in">
        
        <div class="mb-12">
            <h1 class="text-white text-4xl font-bold mb-4">Beri Feedback</h1>
            <div class="w-20 h-1 bg-[#6366F1] rounded-full"></div>
        </div>

        <form action="php/process_idea.php" method="POST" class="flex flex-col gap-8">
            
            <div class="bg-[#0F172A] rounded-2xl p-2 border border-white/5 focus-within:ring-2 focus-within:ring-[#6366F1]/50 transition-all">
                <input type="text" name="title" placeholder="Masukan Feedback..." 
                    class="w-full bg-transparent text-white text-3xl font-bold p-6 outline-none placeholder-gray-600" required>
            </div>

            <div class="bg-[#0F172A] rounded-2xl border border-white/5 overflow-hidden focus-within:ring-2 focus-within:ring-[#6366F1]/50 transition-all">
                <div class="bg-white/5 px-6 py-3 flex gap-4 border-b border-white/5">
                    <span class="text-slate-400 text-xs font-medium uppercase tracking-widest">Detail Feedback</span>
                </div>
                <textarea name="description" placeholder="Berikan deskripsi ke feedback kalian" 
                    class="w-full h-[400px] bg-transparent p-8 text-slate-300 text-lg outline-none resize-none leading-relaxed" required></textarea>
            </div>
            
            <div class="flex items-center justify-between mt-4">
                <a href="ide.php" class="text-slate-500 hover:text-white transition-all">
                    <i class="fa-solid fa-arrow-left mr-2"></i> Kembali ke Daftar
                </a>
                
                <button type="submit" name="submit_idea" class="bg-[#6366F1] text-white text-xl px-16 py-5 rounded-2xl hover:scale-105 transition-all font-bold shadow-[0_10px_30px_rgba(99,102,241,0.2)]">
                    Tambah Feedback <i class="fa-solid fa-paper-plane ml-3 text-sm"></i>
                </button>
            </div>

        </form>
    </div>

</body>
</html>