<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/output.css">
    <title>Halaman Detail Ide</title>
</head>
<body class="bg-[#05070A] min-h-screen flex flex-col">
    <nav class="bg-[#0F172A] w-full min-h-[80px] h-[100px] shadow-[0_0_40px_rgba(99,102,241,0.15)] flex items-center top-0 z-50 px-10">
        <div class="flex flex-row items-center justify-between w-full">
            
            <h1 class="text-white font-bold text-xl md:hidden">Portal Ide</h1>

            <div class="hidden md:flex flex-row items-center text-white text-lg flex-1 justify-end gap-6">
                <a href="index.php" class="hover:text-[#6366F1] cursor-pointer transition-all">Home</a>
                <a href="post.php" class="hover:text-[#6366F1] cursor-pointer transition-all">Post</a>
                <a href="explore.php" class="hover:text-[#6366F1] cursor-pointer transition-all">Explore</a>
                <a href="php/ide.php" class="hover:text-[#6366F1] cursor-pointer transition-all">Forums</a>
                <a href="detailide.php" class="hover:text-[#6366F1] cursor-pointer transition-all">Detailed</a>
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

    <div class="flex flex-col items-center justify-center text-center pt-24 pb-16 px-10">
        <h1 class="text-white text-4xl font-bold leading-tight max-w-[850px]">
            Kami Mengelola Ide Kreatif Siswa untuk Mengembangkan Inovasi yang Lebih Bermakna
        </h1>
    </div>

    <div class="max-w-[1200px] mx-auto px-10 grid grid-cols-2 gap-8 mb-20">
        
        <div class="bg-[#0F172A] p-10 rounded-2xl flex flex-col justify-between border border-white/5 shadow-lg">
            <div>
                <h2 class="text-white text-2xl font-bold mb-5">
                    Pencatatan Ide Siswa Secara Digital
                </h2>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Sistem ini memungkinkan siswa untuk mencatat ide kreatif mereka kapan saja secara mudah dan terstruktur. Dengan adanya fitur ini, ide yang muncul tidak akan hilang.
                </p>
            </div>
            <a href="#" class="w-[160px] h-[50px] bg-white rounded-xl mt-10 flex items-center justify-center text-black font-bold text-lg hover:bg-gray-200 transition-all">
                Learn More
            </a>
        </div>

        <div class="bg-[#0F172A] p-10 rounded-2xl flex flex-col justify-between border border-white/5 shadow-lg">
            <div>
                <h2 class="text-white text-2xl font-bold mb-5">
                    Pengelolaan dan Pengembangan Ide Secara Bertahap
                </h2>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Siswa dapat mengembangkan ide mereka secara bertahap dengan menambahkan detail, tujuan, serta rencana pengembangan.
                </p>
            </div>
            <a href="#" class="w-[160px] h-[50px] bg-white rounded-xl mt-10 flex items-center justify-center text-black font-bold text-lg hover:bg-gray-200 transition-all">
                Learn More
            </a>
        </div>

        <div class="bg-[#0F172A] p-10 rounded-2xl flex flex-col justify-between border border-white/5 shadow-lg">
            <div>
                <h2 class="text-white text-2xl font-bold mb-5">
                    Fitur Umpan Balik dari Siswa dan Guru
                </h2>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Sistem menyediakan ruang bagi siswa dan guru untuk memberikan komentar, saran, dan masukan terhadap ide yang diunggah.
                </p>
            </div>
            <a href="#" class="w-[160px] h-[50px] bg-white rounded-xl mt-10 flex items-center justify-center text-black font-bold text-lg hover:bg-gray-200 transition-all">
                Learn More
            </a>
        </div>

        <div class="bg-[#0F172A] p-10 rounded-2xl flex flex-col justify-between border border-white/5 shadow-lg">
            <div>
                <h2 class="text-white text-2xl font-bold mb-5">
                    Kolaborasi Antar Siswa dalam Mengembangkan Ide
                </h2>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Siswa dapat bekerja sama dalam mengembangkan satu ide yang sama untuk menghasilkan inovasi yang lebih kreatif.
                </p>
            </div>
            <a href="#" class="w-[160px] h-[50px] bg-white rounded-xl mt-10 flex items-center justify-center text-black font-bold text-lg hover:bg-gray-200 transition-all">
                Learn More
            </a>
        </div>

        <div class="bg-[#0F172A] p-10 rounded-2xl flex flex-col justify-between border border-white/5 shadow-lg">
            <div>
                <h2 class="text-white text-2xl font-bold mb-5">
                    Monitoring dan Evaluasi Perkembangan Ide
                </h2>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Guru dan sekolah dapat memantau perkembangan ide siswa melalui sistem yang terintegrasi untuk memberikan dukungan yang tepat.
                </p>
            </div>
            <a href="#" class="w-[160px] h-[50px] bg-white rounded-xl mt-10 flex items-center justify-center text-black font-bold text-lg hover:bg-gray-200 transition-all">
                Learn More
            </a>
        </div>

        <div class="bg-[#0F172A] p-10 rounded-2xl flex flex-col justify-between border border-white/5 shadow-lg">
            <div>
                <h2 class="text-white text-2xl font-bold mb-5">
                    Pengelompokan Ide Berdasarkan Kategori
                </h2>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Ide-ide yang diunggah dapat dikelompokkan berdasarkan kategori tertentu sehingga memudahkan pencarian dan pengelolaan.
                </p>
            </div>
            <a href="#" class="w-[160px] h-[50px] bg-white rounded-xl mt-10 flex items-center justify-center text-black font-bold text-lg hover:bg-gray-200 transition-all">
                Learn More
            </a>
        </div>

    </div>

    <div class="max-w-[1200px] mx-auto px-10 pb-32">
        <div class="w-full bg-[#0F172A] rounded-[40px] py-20 px-10 flex flex-col items-center text-center border border-white/5 shadow-2xl">
            <h2 class="text-white text-3xl font-bold mb-6">
                Wujudkan Ide Kreatif Menjadi Inovasi Nyata
            </h2>
            <p class="text-gray-400 max-w-[700px] leading-relaxed mb-10 text-lg">
                Ubah ide-ide sederhana menjadi solusi yang bermanfaat melalui sistem pengelolaan ide yang terstruktur dan kolaboratif.
            </p>
            <a href="#" class="w-[240px] h-[60px] bg-white rounded-2xl flex items-center justify-center text-black font-bold text-xl hover:bg-gray-200 transition-all">
                Mulai Kembangkan Ide
            </a>
        </div>
    </div>

</body>
</html>