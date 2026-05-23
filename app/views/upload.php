<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Post Your Idea</title>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        
        .fade-in-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .fade-in-scroll.active {
            opacity: 1;
            transform: translateY(0);
        }

        .glass-card {
            background: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .upload-area {
            background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' rx='20' ry='20' stroke='%23334155FF' stroke-width='3' stroke-dasharray='10%2c 10' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e");
            transition: all 0.3s ease;
        }

        .upload-area:hover {
            background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' rx='20' ry='20' stroke='%236366F1FF' stroke-width='3' stroke-dasharray='10%2c 10' stroke-dashoffset='10' stroke-linecap='square'/%3e%3c/svg%3e");
        }
    </style>
</head>
<body class="bg-[#05070A] min-h-screen flex flex-col font-sans text-sm selection:bg-indigo-500/30">

    <?php include_once 'components/Navbar.php'; ?>

    <div class="flex flex-col w-full max-w-5xl mx-auto p-6 lg:p-10 gap-8 mt-4">
        
    <form action="action/post_action.php" method="POST" enctype="multipart/form-data" class="flex flex-col w-full max-w-5xl mx-auto p-6 lg:p-10 gap-8 mt-4">
        
        <div class="glass-card flex justify-center items-center w-full h-[450px] rounded-[30px] p-6 shadow-2xl fade-in-scroll">
            <label for="imageUpload" class="upload-area flex flex-col justify-center items-center w-full h-full rounded-[20px] group cursor-pointer">
                <div class="w-20 h-20 bg-indigo-500/10 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-500">
                    <i class="fa-solid fa-cloud-arrow-up text-indigo-400 text-3xl"></i>
                </div>
                <div class="bg-[#0F172A] text-white font-bold text-lg px-12 py-4 rounded-2xl border border-white/10 group-hover:bg-indigo-600 transition-all shadow-xl shadow-indigo-500/10">
                    Drag & Drop <span class="text-white/40 font-normal text-sm ml-2">or Click to Upload</span>
                </div>
                <p class="text-slate-500 mt-4 text-xs tracking-wider">High resolution images supported (PNG, JPG, up to 10MB)</p>
                
                <input type="file" id="imageUpload" name="image" accept=".png, .jpg, .jpeg" class="hidden" required>
            </label>    
        </div>

        <div class="glass-card flex justify-center items-start h-auto flex-1 rounded-[30px] p-6 shadow-2xl fade-in-scroll">
            <div class="text-white bg-white/5 rounded-2xl flex flex-col w-full h-[280px] focus-within:ring-2 focus-within:ring-indigo-500/40 focus-within:bg-white/10 transition-all overflow-hidden border border-white/5">
                
                <textarea name="caption" placeholder="Apa yang sedang kamu pikirkan bang?" class="bg-transparent p-6 placeholder-slate-500 w-full h-[200px] focus:outline-none resize-none text-lg leading-relaxed" required></textarea>
                
                <div class="flex items-center gap-3 px-6 pb-6">
                    <input type="hidden" name="location" value="Jakarta, Indonesia">
                    
                    <button type="button" class="bg-slate-800 hover:bg-indigo-600 text-slate-300 hover:text-white text-xs font-semibold py-2.5 px-5 rounded-xl flex items-center gap-2 transition-all border border-white/5">
                        <i class="fa-solid fa-location-dot"></i> Add Location
                    </button>
                    </div>
            </div>
        </div>
        
        <div class="flex justify-center fade-in-scroll pb-10">
            <button type="submit" class="relative group bg-indigo-600 text-white text-xl font-bold w-full max-w-[450px] h-[75px] rounded-[25px] flex items-center justify-center gap-3 hover:bg-indigo-500 transition-all shadow-lg shadow-indigo-600/20 overflow-hidden">
                <div class="absolute inset-0 w-1/4 h-full -translate-x-full"></div>
                <i class="fa-solid fa-paper-plane group-hover:rotate-12 transition-transform"></i>
                Post Idea
            </button>
        </div>
    </form>

    <script>
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

    <style>
        @keyframes shimmer {
            100% { transform: translateX(500%); }
        }
    </style>
</body>
</html>