<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Halaman Detail Ide</title>
    
    <style>
        #ide-detail-content .fade-in-scroll {
            opacity: 0;
            transform: translateY(30px) scale(0.98);
            filter: blur(5px);
            transition: all 0.8s cubic-bezier(0.2, 1, 0.3, 1);
        }

        #ide-detail-content .fade-in-scroll.active {
            opacity: 1;
            transform: translateY(0) scale(1);
            filter: blur(0);
        }

        #ide-detail-content .grid > div:nth-child(1) { transition-delay: 0.1s; }
        #ide-detail-content .grid > div:nth-child(2) { transition-delay: 0.2s; }
        #ide-detail-content .grid > div:nth-child(3) { transition-delay: 0.3s; }
        #ide-detail-content .grid > div:nth-child(4) { transition-delay: 0.4s; }
        #ide-detail-content .grid > div:nth-child(5) { transition-delay: 0.5s; }
        #ide-detail-content .grid > div:nth-child(6) { transition-delay: 0.6s; }

        #ide-detail-content .card-idea {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(255, 255, 255, 0.05);
            background-color: #0F172A;
        }

        #ide-detail-content .card-idea:hover {
            transform: translateY(-8px) scale(1.02);
            background-color: #161e33;
            border-color: rgba(99, 102, 241, 0.6);
            box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.5), 
                        0 0 20px rgba(99, 102, 241, 0.1);
            z-index: 10;
        }

        #ide-detail-content .btn-learn:hover {
            background-color: #e2e8f0;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-[#05070A] min-h-screen flex flex-col">
    
    <?php include_once 'components/Navbar.php'; ?>

    <div id="ide-detail-content">
        
        <div class="flex flex-col items-center justify-center text-center pt-24 pb-16 px-10 fade-in-scroll">
            <h1 class="text-white text-4xl font-bold leading-tight max-w-[850px]">
                Kami Mengelola <span class="text-indigo-400">Ide Kreatif</span> Siswa untuk Mengembangkan Inovasi yang Lebih Bermakna
            </h1>
        </div>

        <div class="max-w-[1200px] mx-auto px-10 grid grid-cols-1 md:grid-cols-2 gap-8 mb-20">
            
            <div class="card-idea p-10 rounded-2xl flex flex-col justify-between shadow-lg fade-in-scroll">
                <div>
                    <h2 class="text-white text-2xl font-bold mb-5">Pencatatan Ide Siswa Secara Digital</h2>
                    <p class="text-gray-400 text-sm leading-relaxed">Sistem ini memungkinkan siswa untuk mencatat ide kreatif mereka kapan saja secara mudah dan terstruktur.</p>
                </div>
                <a href="#" class="btn-learn w-[160px] h-[50px] bg-white rounded-xl mt-10 flex items-center justify-center text-black font-bold text-lg transition-all">
                    Learn More
                </a>
            </div>

            <div class="card-idea p-10 rounded-2xl flex flex-col justify-between shadow-lg fade-in-scroll">
                <div>
                    <h2 class="text-white text-2xl font-bold mb-5">Pengelolaan dan Pengembangan Ide</h2>
                    <p class="text-gray-400 text-sm leading-relaxed">Siswa dapat mengembangkan ide mereka secara bertahap dengan menambahkan detail dan rencana pengembangan.</p>
                </div>
                <a href="#" class="btn-learn w-[160px] h-[50px] bg-white rounded-xl mt-10 flex items-center justify-center text-black font-bold text-lg transition-all">
                    Learn More
                </a>
            </div>

            <div class="card-idea p-10 rounded-2xl flex flex-col justify-between shadow-lg fade-in-scroll">
                <div>
                    <h2 class="text-white text-2xl font-bold mb-5">Fitur Umpan Balik</h2>
                    <p class="text-gray-400 text-sm leading-relaxed">Sistem menyediakan ruang bagi siswa dan guru untuk memberikan komentar dan saran terhadap ide.</p>
                </div>
                <a href="#" class="btn-learn w-[160px] h-[50px] bg-white rounded-xl mt-10 flex items-center justify-center text-black font-bold text-lg transition-all">
                    Learn More
                </a>
            </div>

            <div class="card-idea p-10 rounded-2xl flex flex-col justify-between shadow-lg fade-in-scroll">
                <div>
                    <h2 class="text-white text-2xl font-bold mb-5">Kolaborasi Antar Siswa</h2>
                    <p class="text-gray-400 text-sm leading-relaxed">Siswa dapat bekerja sama dalam mengembangkan satu ide yang sama untuk hasil yang lebih maksimal.</p>
                </div>
                <a href="#" class="btn-learn w-[160px] h-[50px] bg-white rounded-xl mt-10 flex items-center justify-center text-black font-bold text-lg transition-all">
                    Learn More
                </a>
            </div>

            <div class="card-idea p-10 rounded-2xl flex flex-col justify-between shadow-lg fade-in-scroll">
                <div>
                    <h2 class="text-white text-2xl font-bold mb-5">Monitoring Evaluasi</h2>
                    <p class="text-gray-400 text-sm leading-relaxed">Guru dapat memantau perkembangan ide siswa melalui sistem yang terintegrasi secara realtime.</p>
                </div>
                <a href="#" class="btn-learn w-[160px] h-[50px] bg-white rounded-xl mt-10 flex items-center justify-center text-black font-bold text-lg transition-all">
                    Learn More
                </a>
            </div>

            <div class="card-idea p-10 rounded-2xl flex flex-col justify-between shadow-lg fade-in-scroll">
                <div>
                    <h2 class="text-white text-2xl font-bold mb-5">Pengelompokan Kategori</h2>
                    <p class="text-gray-400 text-sm leading-relaxed">Ide dapat dikelompokkan berdasarkan kategori tertentu sehingga memudahkan pencarian.</p>
                </div>
                <a href="#" class="btn-learn w-[160px] h-[50px] bg-white rounded-xl mt-10 flex items-center justify-center text-black font-bold text-lg transition-all">
                    Learn More
                </a>
            </div>

        </div>

        <div class="max-w-[1200px] mx-auto px-10 pb-32 fade-in-scroll">
            <div class="relative w-full bg-[#0F172A] rounded-[40px] py-20 px-10 flex flex-col items-center text-center border border-white/5 shadow-2xl overflow-hidden group">
                <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-600/10 blur-[100px] transition-all group-hover:bg-indigo-600/20"></div>

                <h2 class="text-white text-3xl font-bold mb-6 relative z-10">Wujudkan Ide Kreatif Menjadi Inovasi Nyata</h2>
                <p class="text-gray-400 max-w-[700px] leading-relaxed mb-10 text-lg relative z-10">Ubah ide-ide sederhana menjadi solusi yang bermanfaat melalui sistem yang kolaboratif.</p>
                <a href="#" class="w-[240px] h-[60px] bg-white rounded-2xl flex items-center justify-center text-black font-bold text-xl hover:scale-105 transition-all relative z-10 shadow-lg active:scale-95">
                    Mulai Kembangkan Ide
                </a>
            </div>
        </div>

    </div> <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.fade-in-scroll').forEach((el) => {
            observer.observe(el);
        });
    </script>
</body>
</html>