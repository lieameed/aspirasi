<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar ide</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../../css/output.css">
    <style>
    .fade-in-scroll {
        opacity: 0;
        transform: translateY(10px);
        transition: all 1s ease-out;
    }

    .fade-in-scroll.active {
        opacity: 1;
        transform: translateY(0);
    }
    </style>
</head>
<body class="bg-[#05070A] overflow-x-hidden">

    <nav class="bg-[#0F172A] w-full min-h-[80px] h-[100px] shadow-[0_0_40px_rgba(99,102,241,0.15)] flex items-center top-0 z-50 px-10">
        <div class="flex flex-row items-center justify-between w-full">
            
            <h1 class="text-white font-bold text-xl md:hidden">Portal Ide</h1>

            <div class="hidden md:flex flex-row items-center text-white text-lg flex-1 justify-end gap-6">
                <a href="../index.php" class="hover:text-[#6366F1] cursor-pointer transition-all">Home</a>
                <a href="post.php" class="hover:text-[#6366F1] cursor-pointer transition-all">Post</a>
                <a href="explore.php" class="hover:text-[#6366F1] cursor-pointer transition-all">Explore</a>
                <a href="ide.php" class="hover:text-[#6366F1] cursor-pointer transition-all">Forums</a>
                <a href="detailide.php" class="hover:text-[#6366F1] cursor-pointer transition-all">Detailed</a>
                <a href="notifications.php" class="hover:text-[#6366F1] cursor-pointer transition-all">Notification</a>
                <a href="about.php" class="hover:text-[#6366F1] cursor-pointer transition-all">About App</a>
                
                <p class="text-gray-600">|</p>

                <a href="php/login.php">
                    <button class="w-[120px] h-[45px] bg-[#6366F1] rounded-xl hover:scale-105 cursor-pointer transition-all font-semibold text-white">Log-In</button>
                </a>
                
                <a href="signup.php">
                    <button class="w-[120px] h-[45px] border-2 border-[#6366F1] text-[#6366F1] rounded-xl hover:scale-105 cursor-pointer transition-all font-semibold">Sign-up</button>
                </a>
            </div>

            <button class="hidden text-white text-2xl">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </nav>

    <div class="flex justify-center mt-10">
        <h1 class="text-white text-4xl font-custom-regular max-w-[800px]">
            Apa yang Baru di Portal Ide Kreatif Siswa
        </h1>
    </div>
        
    <div class="max-w-[1200px] mx-auto px-10 mt-12 pb-20">
        
        <div class="flex flex-wrap gap-4 mb-10">
            <button class="px-6 py-2 bg-[#6366F1] text-white rounded-xl shadow-[0_0_15px_rgba(99,102,241,0.3)] hover:scale-105 transition-all">All</button>
            <button class="px-6 py-2 bg-[#0F172A] border border-white/10 text-slate-300 rounded-xl hover:bg-[#1E293B] hover:text-white transition-all">Ide Baru</button>
            <button class="px-6 py-2 bg-[#0F172A] border border-white/10 text-slate-300 rounded-xl hover:bg-[#1E293B] hover:text-white transition-all">Pengembangan Ide</button>
            <button class="px-6 py-2 bg-[#0F172A] border border-white/10 text-slate-300 rounded-xl hover:bg-[#1E293B] hover:text-white transition-all">Kolaborasi</button>
            <button class="px-6 py-2 bg-[#0F172A] border border-white/10 text-slate-300 rounded-xl hover:bg-[#1E293B] hover:text-white transition-all">Inovasi Siswa</button>
        </div>

        <div class="w-full h-[1px] bg-gradient-to-r from-transparent via-white/10 to-transparent mb-16"></div>

        <div class="flex flex-col gap-20">
            
            <div class="flex flex-col md:flex-row gap-8 group fade-in-scroll">
                <div class="w-1/3">
                    <p class="text-slate-500 font-medium mb-3">
                        Mei 2026
                    </p>
                    <h2 class="text-white text-3xl font-bold leading-tight group-hover:text-[#6366F1] transition-all duration-300">
                        Meningkatkan Kolaborasi dalam Pengembangan Ide Siswa
                    </h2>
                </div>
                <div class="w-2/3">
                    <h3 class="text-slate-200 text-xl font-semibold mb-4">
                        Penambahan Fitur Komentar dan Umpan Balik Ide
                    </h3>
                    <p class="text-slate-400 leading-relaxed text-[15px]">
                        Siswa dan guru kini dapat memberikan komentar atau masukan pada setiap ide yang diunggah di portal ide kreatif siswa. Melalui fitur ini, pengguna dapat berdiskusi mengenai ide yang diajukan serta memberikan saran untuk pengembangan ide tersebut. <br><br>
                        Dengan adanya fitur umpan balik, ide yang awalnya sederhana dapat berkembang menjadi lebih matang karena mendapatkan berbagai sudut pandang dari siswa lain maupun guru.
                    </p>
                </div>
            </div>

            <div class="flex flex-col flex-row gap-8 group fade-in-scroll">
                <div class="w-1/3">
                    <p class="text-slate-500 font-medium mb-3">
                        Juni 2026
                    </p>
                    <h2 class="text-white text-3xl font-bold leading-tight group-hover:text-[#6366F1] transition-all duration-300">
                        Mendorong Kerja Sama dalam Pengembangan Ide Kreatif
                    </h2>
                </div>
                <div class="w-2/3">
                    <h3 class="text-slate-200 text-xl font-semibold mb-4">Fitur Kolaborasi Antar Siswa dalam Mengembangkan Ide</h3>
                    <p class="text-slate-400 leading-relaxed text-[15px]">
                        Portal ide kini memungkinkan beberapa siswa bekerja sama dalam mengembangkan satu ide yang sama. Melalui fitur ini, siswa dapat saling berdiskusi, berbagi tugas, serta bersama-sama menyusun langkah pengembangan ide.<br><br>
                        Fitur kolaborasi ini diharapkan dapat meningkatkan kerja sama antar siswa sekaligus mendorong terciptanya ide yang lebih inovatif karena dikembangkan oleh lebih dari satu orang.
                    </p>
                </div>
            </div>

            <div class="flex flex-col flex-row gap-8 group fade-in-scroll">
                <div class="w-1/3">
                    <p class="text-slate-500 font-medium mb-3">
                        Maret 2026
                    </p>
                    <h2 class="text-white text-3xl font-bold leading-tight group-hover:text-[#6366F1] transition-all duration-300">
                        Sistem Baru untuk Mengelola Ide Kreatif Siswa di Sekolah
                    </h2>
                </div>
                <div class="w-2/3">
                    <h3 class="text-slate-200 text-xl font-semibold mb-4">Penambahan Fitur Pencatatan Ide pada Portal Ide Siswa</h3>
                    <p class="text-slate-400 leading-relaxed text-[15px]">
                        Siswa kini dapat mencatat ide kreatif mereka secara langsung melalui portal ide sekolah yang telah disediakan. Melalui fitur ini, siswa dapat menuliskan judul ide, deskripsi singkat, serta tujuan dari ide tersebut sehingga ide dapat terdokumentasi dengan lebih terstruktur.<br><br>
                        Fitur ini membantu siswa agar ide yang muncul tidak mudah terlupakan serta dapat disimpan dan dikembangkan kembali di masa depan. Dengan adanya pencatatan ide secara digital, sekolah juga dapat mengumpulkan berbagai gagasan kreatif dari siswa sebagai sumber inovasi baru.
                    </p>
                </div>
            </div>

            <div class="flex flex-col flex-row gap-8 group fade-in-scroll">
                <div class="w-1/3">
                    <p class="text-slate-500 font-medium mb-3">
                        Juli 2026
                    </p>
                    <h2 class="text-white text-3xl font-bold leading-tight group-hover:text-[#6366F1] transition-all duration-300">
                        Mempermudah Pemantauan Ide Kreatif Siswa di Sekolah
                    </h2>
                </div>
                <div class="w-2/3">
                    <h3 class="text-slate-200 text-xl font-semibold mb-4">
                        Dashboard Monitoring Ide dan Inovasi Siswa
                    </h3>
                    <p class="text-slate-400 leading-relaxed text-[15px]">
                        Sekolah kini dapat memantau ide kreatif siswa melalui dashboard khusus yang menampilkan berbagai informasi terkait ide yang telah diunggah. Dashboard ini memperlihatkan jumlah ide baru, ide yang sedang dikembangkan, serta ide yang telah berhasil diselesaikan.<br><br>
                        Dengan adanya dashboard monitoring ini, pihak sekolah dapat melihat perkembangan kreativitas siswa secara keseluruhan dan memberikan dukungan pada ide yang memiliki potensi untuk dikembangkan menjadi proyek nyata.
                    </p>
                </div>
            </div>

            <div class="flex flex-col flex-row gap-8 group fade-in-scroll">
                <div class="md:w-1/3">
                    <p class="text-slate-500 font-medium mb-3">
                        April 2026
                    </p>
                    <h2 class="text-white text-3xl font-bold leading-tight group-hover:text-[#6366F1] transition-all duration-300">
                        Peningkatan Sistem Pengembangan Ide Kreatif Siswa
                    </h2>
                </div>
                <div class="md:w-2/3">
                    <h3 class="text-slate-200 text-xl font-semibold mb-4">
                        Fitur Status Perkembangan Ide Kreatif
                    </h3>
                    <p class="text-slate-400 leading-relaxed text-[15px]">
                        Portal ide kini menyediakan status perkembangan ide seperti Ide Baru, Sedang Dikembangkan, dan Selesai. Dengan adanya fitur ini, siswa dapat memantau perkembangan ide yang sedang mereka kerjakan secara lebih jelas dan terorganisir.<br><br>
                        Selain membantu siswa dalam mengelola ide, fitur ini juga memudahkan guru untuk melihat ide mana saja yang sedang berkembang dan memberikan arahan atau dukungan yang diperlukan agar ide tersebut dapat diwujudkan dengan lebih baik.
                    </p>
                </div>
            </div>

        </div>
    </div>

    <script>
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                } else {
                    entry.target.classList.remove('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-scroll').forEach((el) => {
            observer.observe(el);
        });
    </script>
</body>
</html>