<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/output.css">
    <title>LoginBang</title>
</head>
<body class="bg-black flex items-center justify-center min-h-screen">

    <a href="../index.php"><i class="fa-solid fa-arrow-left text-white absolute top-10 left-10 cursor-pointer text-4xl hover:text-white/10 transition-all"></i></a>

    <form action="" class="w-full max-w-[644px] h-[825px] bg-[#111827] rounded-3xl shadow-[0_0_80px_rgba(99,102,241,0.15)] flex flex-col items-center justify-center border border-white/10">

        <a href="homepage.php" class="inline-block">
            <i class="fa-regular fa-user text-7xl text-white mb-8"></i>
        </a>

        <div class="text-center mb-10">
            <h1 class="text-white text-4xl font-bold mb-4">Welcome Back!</h1>
            <p class="text-gray-400 text-xl">Belum memiliki akun? <span class="text-blue-500 cursor-pointer">Sign-Up</span></p>
        </div>

        <div class="w-full px-20"> 
            <input type="text" placeholder="Masukkan Nama Anda..." class="w-full h-[60px] bg-white/5 border border-white/10 rounded-2xl px-6 text-white text-lg outline-none focus:border-blue-500 transition-all mb-6">
        </div>

        <div class="w-full px-20"> 
            <input type="password" placeholder="Masukkan Password Anda..." class="w-full h-[60px] bg-white/5 border border-white/10 rounded-2xl px-6 text-white text-lg outline-none focus:border-blue-500 transition-all mb-6">
        </div> 

        <div class="w-full px-20">
            <button class="w-full h-[60px] bg-white border border-white/10 rounded-2xl px-6 text-black text-xl outline-none transition-all mb-6 hover:bg-white/20 hover:text-white transition-all font-bold">Log-In</button>
        </div>

        <div class="flex items-center justify-center gap-6 w-full">
    
            <div class="flex flex-col items-center">
                <div class="flex items-center justify-center w-[80px] h-[80px] bg-white/5 border border-white/10 rounded-full hover:bg-white/20 transition-all cursor-pointer">
                    <i class="fa-brands fa-google text-3xl text-white"></i>
                </div>
                <p class="text-white text-[20px] font-medium">Google</p>
            </div>

            <div class="flex flex-col items-center">
                <div class="flex items-center justify-center w-[80px] h-[80px] bg-white/5 border border-white/10 rounded-full hover:bg-white/20 transition-all cursor-pointer">
                    <i class="fa-brands fa-facebook-f text-3xl text-white"></i>
                </div>
                <p class="text-white text-[20px] font-medium">Facebook</p>
            </div>

            <div class="flex flex-col items-center">
                <div class="flex items-center justify-center w-[80px] h-[80px] bg-white/5 border border-white/10 rounded-full hover:bg-white/20 transition-all cursor-pointer">
                    <i class="fa-brands fa-apple text-3xl text-white"></i>
                </div>
                <p class="text-white text-[20px] font-medium">Apple</p>
            </div>

            <div class="flex flex-col items-center">
                <div class="flex items-center justify-center w-[80px] h-[80px] bg-white/5 border border-white/10 rounded-full hover:bg-white/20 transition-all cursor-pointer">
                    <i class="fa-brands fa-github text-3xl text-white"></i>
                </div>
                <p class="text-white text-[20px] font-medium">Github</p>
            </div>

        </div>
    </form>

</body>
</html>