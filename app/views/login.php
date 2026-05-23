<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/output.css">
    <title>LoginBang</title>
    <style>
    .fade-in-scroll {
        opacity: 0;
        transform: translateY(30px) scale(0.95);
        transition: all 0.8s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .fade-in-scroll.active {
        opacity: 1;
        transform: translateY(0) scale(1);
    }

    .stagger-1 { transition-delay: 0.1s; }
    .stagger-2 { transition-delay: 0.2s; }
    .stagger-3 { transition-delay: 0.3s; }
    .stagger-4 { transition-delay: 0.4s; }
    .stagger-5 { transition-delay: 0.5s; }

    button, .social-item {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
    }

    button:active {
        transform: scale(0.96);
    }

    .social-item:hover {
        transform: translateY(-8px);
        filter: drop-shadow(0 10px 15px rgba(99, 102, 241, 0.3));
    }
    </style>
</head>
<body class="bg-black flex items-center justify-center min-h-screen">

    <a href="../index.php"><i class="fa-solid fa-arrow-left text-white absolute top-10 left-10 cursor-pointer text-4xl hover:text-white/10 transition-all"></i></a>

    <form action="action/login_action.php" class="fade-in-scroll w-full max-w-[644px] py-12 bg-[#111827] rounded-3xl shadow-[0_0_80px_rgba(99,102,241,0.15)] flex flex-col items-center justify-center border border-white/10" method="POST">

        <i class="fa-regular fa-user text-7xl text-white mb-8 fade-in-scroll stagger-1"></i>

        <div class="text-center mb-10 fade-in-scroll stagger-2">
            <h1 class="text-white text-4xl font-bold mb-4">Welcome Back!</h1>
            <p class="text-gray-400 text-xl">Belum memiliki akun? <span class="text-blue-500 cursor-pointer"><a href="index.php?url=signup">Sign-Up</a></span></p>
        </div>

        <div class="w-full px-20 fade-in-scroll stagger-3"> 
            <input type="text" name="nama" placeholder="Masukkan Nama Anda..." class="w-full h-[60px] bg-white/5 border border-white/10 rounded-2xl px-6 text-white text-lg outline-none focus:border-blue-500 transition-all mb-6">
        </div>

        <div class="w-full px-20 fade-in-scroll stagger-4"> 
            <input type="password" name="pass" placeholder="Masukkan Password Anda..." class="w-full h-[60px] bg-white/5 border border-white/10 rounded-2xl px-6 text-white text-lg outline-none focus:border-blue-500 transition-all mb-2">
            <div class="text-right w-full mb-6"> 
                <a href="#" class="text-blue-500 text-sm hover:text-blue-400 transition-all cursor-pointer">Forgot password?</a>
            </div>
        </div> 

        <div class="w-full px-20 fade-in-scroll stagger-5">
            <button class="w-full h-[60px] bg-white border border-white/10 rounded-2xl px-6 text-black text-xl outline-none transition-all mb-8 hover:bg-white/20 hover:text-white transition-all font-bold">Log-In</button>
        </div>

        <div class="flex items-center justify-center gap-6 w-full fade-in-scroll stagger-5">
    
            <div class="flex flex-col items-center social-item">
                <div class="flex items-center justify-center w-[80px] h-[80px] bg-white/5 border border-white/10 rounded-full hover:bg-white/20 transition-all cursor-pointer">
                    <i class="fa-brands fa-google text-3xl text-white"></i>
                </div>
                <p class="text-white text-[20px] font-medium mt-2">Google</p>
            </div>

            <div class="flex flex-col items-center social-item">
                <div class="flex items-center justify-center w-[80px] h-[80px] bg-white/5 border border-white/10 rounded-full hover:bg-white/20 transition-all cursor-pointer">
                    <i class="fa-brands fa-facebook-f text-3xl text-white"></i>
                </div>
                <p class="text-white text-[20px] font-medium mt-2">Facebook</p>
            </div>

            <div class="flex flex-col items-center social-item">
                <div class="flex items-center justify-center w-[80px] h-[80px] bg-white/5 border border-white/10 rounded-full hover:bg-white/20 transition-all cursor-pointer">
                    <i class="fa-brands fa-apple text-3xl text-white"></i>
                </div>
                <p class="text-white text-[20px] font-medium mt-2">Apple</p>
            </div>

            <div class="flex flex-col items-center social-item">
                <div class="flex items-center justify-center w-[80px] h-[80px] bg-white/5 border border-white/10 rounded-full hover:bg-white/20 transition-all cursor-pointer">
                    <i class="fa-brands fa-github text-3xl text-white"></i>
                </div>
                <p class="text-white text-[20px] font-medium mt-2">Github</p>
            </div>

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
</body>
</html>