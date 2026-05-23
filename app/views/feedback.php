<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Feedback - Aspirasi Siswa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap');

        #feedback-page { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
        }
        
        #feedback-page .fade-in-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        #feedback-page .fade-in-scroll.active {
            opacity: 1;
            transform: translateY(0);
        }

        #feedback-page .feedback-card {
            background: rgba(15, 23, 42, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(12px);
            transition: all 0.3s ease;
        }

        #feedback-page .feedback-card:hover {
            border-color: rgba(133, 182, 223, 0.3);
            background: rgba(15, 23, 42, 0.6);
            transform: translateX(5px);
        }

        #feedback-page .sidebar-item:hover {
            background: rgba(133, 182, 223, 0.1);
            color: #85B6DF;
        }
    </style>
</head>
<body class="bg-[#05070A] min-h-screen text-slate-300 overflow-x-hidden">
    
    <?php include_once 'components/Navbar.php'; ?>

    <div id="feedback-page">
        <div class="max-w-[1400px] mx-auto px-6 py-16 flex flex-col lg:flex-row gap-16">
            
            <div class="flex-1 flex flex-col gap-10">
                
                <div class="fade-in-scroll">
                    <div class="flex items-center gap-2 text-[#85B6DF] mb-4 group cursor-pointer">
                        <i class="fa-solid fa-arrow-left transition-transform group-hover:-translate-x-1"></i>
                        <a href="index.php?url=home" class="text-sm font-medium tracking-wide uppercase">Back to Home</a>
                    </div>
                    
                    <h1 class="text-white text-5xl font-extrabold mb-6 tracking-tight">General <span class="text-[#85B6DF]">Feedback.</span></h1>

                    <div class="bg-gradient-to-r from-[#85B6DF]/20 to-transparent p-[1px] rounded-2xl mb-8">
                        <div class="bg-[#05070A] rounded-2xl p-6">
                            <p class="text-slate-400 text-lg leading-relaxed mb-4">
                                Punya ide untuk meningkatkan sistem pengelolaan gagasan kreatif siswa? Kami sangat menghargai setiap masukan agar platform ini bisa terus berkembang mendukung inovasi kalian.
                            </p>
                        </div>
                    </div>

                    <div class="relative group fade-in-scroll">
                        <i class="fa-solid fa-lightbulb absolute left-5 top-1/2 -translate-y-1/2 text-[#85B6DF]"></i>
                        <input type="text" 
                            class="bg-[#0F172A] border border-white/10 focus:border-[#85B6DF]/50 outline-none transition-all text-white text-base w-full rounded-2xl py-5 pl-14 pr-6 placeholder:text-slate-600 shadow-2xl" 
                            placeholder="Ada ide apa hari ini? Tuliskan di sini...">
                    </div>

                    <div class="flex flex-wrap gap-3 mt-8 fade-in-scroll">
                        <button class="px-5 py-2.5 bg-[#85B6DF] text-black font-bold text-xs rounded-full shadow-lg shadow-[#85B6DF]/20">HOT IDEAS</button>
                        <button class="px-5 py-2.5 bg-[#0F172A] border border-white/5 text-slate-400 font-bold text-xs rounded-full hover:bg-white/5 transition-all">NEW</button>
                        <button class="px-5 py-2.5 bg-[#0F172A] border border-white/5 text-slate-400 font-bold text-xs rounded-full hover:bg-white/5 transition-all">TOP</button>
                        <div class="h-8 w-[1px] bg-white/10 mx-2"></div>
                        <button class="px-5 py-2.5 bg-[#0F172A] border border-white/5 text-slate-400 font-bold text-xs rounded-full hover:bg-white/5 transition-all flex items-center gap-2">
                            CATEGORY <i class="fa-solid fa-chevron-down text-[10px]"></i>
                        </button>
                    </div>
                </div>

                <div class="flex flex-col gap-6">
                    <?php if(isset($feedbacks)): ?>
                        <?php while($row = mysqli_fetch_assoc($feedbacks)): ?>
                        <div class="feedback-card p-6 rounded-3xl flex gap-8 fade-in-scroll group">
                            <div class="flex flex-col w-[70px] shrink-0">
                                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden transition-all group-hover:border-[#85B6DF]/30">
                                    <div class="py-4 flex flex-col items-center justify-center">
                                        <span class="text-white text-2xl font-bold"><?= $row['votes'] ?></span>
                                        <span class="text-[9px] uppercase tracking-tighter text-slate-500 font-bold">Votes</span>
                                    </div>
                                    <a href="index.php?url=feedback/vote&id=<?= $row['id'] ?>" 
                                    class="bg-[#85B6DF] text-black font-black text-[10px] py-3 w-full hover:bg-[#6FA5D2] text-center block transition-colors">VOTE</a>
                                </div>
                            </div>
                            
                            <div class="flex flex-col flex-1">
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="text-[10px] font-bold px-2 py-0.5 rounded bg-[#85B6DF]/10 text-[#85B6DF] border border-[#85B6DF]/20 uppercase tracking-widest">
                                        <?= $row['status'] ?>
                                    </span>
                                    <span class="text-[10px] text-slate-500 font-semibold uppercase tracking-widest italic">
                                        #<?= $row['category'] ?>
                                    </span>
                                </div>
                                <h2 class="text-white text-xl font-bold mb-3 group-hover:text-[#85B6DF] transition-colors"><?= $row['title'] ?></h2>
                                <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-2"><?= $row['description'] ?></p>
                                
                                <div class="flex items-center justify-between border-t border-white/5 pt-5">
                                    <div class="flex items-center gap-3">
                                        <span class="text-[10px] text-slate-500 font-bold uppercase tracking-wide">Importance:</span>
                                        <div class="flex gap-2">
                                            <button class="px-3 py-1 border border-white/10 rounded-lg text-[9px] hover:bg-[#85B6DF] hover:text-black transition-all">Not at all</button>
                                            <button class="px-3 py-1 border border-white/10 rounded-lg text-[9px] hover:bg-[#85B6DF] hover:text-black transition-all">Important</button>
                                            <button class="px-3 py-1 border border-white/10 rounded-lg text-[9px] hover:bg-[#85B6DF] hover:text-black transition-all">Critical</button>
                                        </div>
                                    </div>
                                    <span class="text-[10px] text-slate-600 font-medium italic"><?= date('d M Y', strtotime($row['created_at'])) ?></span>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <div class="feedback-card p-8 rounded-3xl flex gap-8 fade-in-scroll group">
                        <div class="flex flex-col w-[70px] shrink-0">
                            <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden shadow-inner">
                                <div class="py-4 flex flex-col items-center justify-center">
                                    <span class="text-white text-2xl font-bold">667</span>
                                    <span class="text-[9px] uppercase tracking-tighter text-slate-500 font-bold">Votes</span>
                                </div>
                                <button class="bg-[#85B6DF] text-black font-black text-[10px] py-3 w-full hover:bg-[#6FA5D2] text-center transition-colors">VOTE</button>
                            </div>
                        </div>
                        <div class="flex flex-col flex-1">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="text-[10px] font-bold px-2 py-0.5 rounded bg-amber-500/10 text-amber-500 border border-amber-500/20 uppercase tracking-widest">In Discovery</span>
                            </div>
                            <h2 class="text-white text-xl font-bold mb-3 group-hover:text-[#85B6DF] transition-colors">Penerapan Sistem Pengelolaan Status Perkembangan Ide</h2>
                            <p class="text-slate-400 text-sm leading-relaxed mb-6">Setiap ide yang dibuat oleh siswa dapat diberi status perkembangan seperti Ide Baru, Sedang Dikembangkan, dan Selesai.</p>
                            <div class="flex items-center justify-between border-t border-white/5 pt-5">
                                <div class="flex items-center gap-2">
                                    <i class="fa-solid fa-comments text-[#85B6DF] text-xs"></i>
                                    <span class="text-[10px] font-bold text-slate-400">90 COMMENTS</span>
                                </div>
                                <button class="text-[10px] font-bold text-[#85B6DF] hover:underline">VIEW DETAIL <i class="fa-solid fa-arrow-right ml-1"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-[350px] shrink-0 flex flex-col gap-8 fade-in-scroll">
                
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-[#85B6DF] to-[#6FA5D2] rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                    <a href="index.php?url=fedback" 
                        class="relative flex items-center justify-center gap-3 px-8 py-5 bg-[#85B6DF] text-black font-black rounded-2xl transition-all hover:scale-[1.02] active:scale-95 shadow-2xl w-full text-center">
                        <i class="fa-solid fa-plus-circle text-xl"></i>
                        ADD NEW FEEDBACK
                    </a>
                </div>

                <div class="bg-[#0F172A] rounded-3xl p-8 border border-white/5 shadow-2xl">
                    <h3 class="font-black text-white text-xs tracking-[0.2em] mb-6 uppercase border-b border-white/10 pb-4">Categories</h3>
                    <div class="flex flex-col gap-2">
                        <a href="#" class="sidebar-item p-3 rounded-xl text-sm transition-all flex justify-between items-center text-[#85B6DF] font-bold">
                            <span>All Ideas</span>
                            <span class="bg-[#85B6DF]/10 px-2 py-0.5 rounded text-[10px]">24</span>
                        </a>
                        <a href="#" class="sidebar-item p-3 rounded-xl text-sm transition-all flex justify-between items-center">
                            <span>Developer API</span>
                            <i class="fa-solid fa-code text-[10px] opacity-20"></i>
                        </a>
                        <a href="#" class="sidebar-item p-3 rounded-xl text-sm transition-all flex justify-between items-center">
                            <span>Authentication</span>
                            <i class="fa-solid fa-lock text-[10px] opacity-20"></i>
                        </a>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-indigo-600/20 to-purple-600/20 rounded-3xl p-8 border border-white/5 relative overflow-hidden">
                    <i class="fa-solid fa-rocket absolute -right-4 -bottom-4 text-white/5 text-8xl -rotate-12"></i>
                    <h4 class="text-white font-bold mb-2">Roadmap 2026</h4>
                    <p class="text-slate-400 text-xs leading-relaxed">Kami sedang mengerjakan fitur kolaborasi tim dan sistem reward untuk ide-ide yang diimplementasikan.</p>
                </div>

            </div>
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