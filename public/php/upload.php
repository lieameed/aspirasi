<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-[#05070A] min-h-screen flex flex-col font-sans text-sm overflow-y-hidden">
    
    // tampilan navbar utama, ada di setiap halaman, blum ngadaptasi ke component yang dibuat karena blum merge sama branch utama, takut nabrak
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

    // kotak besar ditengah, menandakan
    <div class="flex flex-col lg:flex-col w-full max-w-full mx-auto p-10 gap-6 mt-6">
        
        <div class="bg-[#0F172A] flex justify-center items-center max-w-[2200px] h-[450px] flex-1 rounded-[20px] p-8 shadow-lg">
            <div class="bg-white/5 flex justify-center items-center w-full h-[450px] rounded-[20px]">
                <button class="bg-[#0F172A] text-white text-2xl px-16 py-3 rounded-xl hover:bg-[#0F172A]/40 transition-all shadow-md">
                    Drag & Drop
                </button>
            </div>    
        </div>

    <div class="bg-[#0F172A] flex justify-center items-start h-[300px] flex-1 rounded-[20px] p-6 shadow-lg">
        <div class="text-white bg-white/10 rounded-lg text-2xl flex flex-col max-w-[2200px] flex-1 h-[250px] focus-within:ring-2 focus-within:ring-[#6366F1]/50 overflow-hidden">
            
            <textarea name="" placeholder="Masukan Caption Anda" id="" class="bg-transparent p-4 placeholder-gray-400 w-full h-[190px] focus:outline-none resize-none"></textarea>
            
            <div class="flex items-center gap-3 px-4 pb-4 mt-auto">
                <button class="bg-[#334155] hover:bg-[#475569] text-sm py-2 px-4 rounded-full flex items-center gap-2 transition">
                    Add Location
                </button>

                <button class="bg-[#334155] hover:bg-[#475569] text-sm py-2 px-4 rounded-full flex items-center gap-2 transition">
                    Tag Someone
                </button>

                <button class="bg-[#334155] hover:bg-[#475569] text-sm py-2 px-4 rounded-full flex items-center gap-2 transition">
                    Add Music
                </button>
            </div>

        </div>
    </div>
        
        <div class="flex flex-1 justify-center">
            <button class=" bg-[#0F172A] text-white text-xl max-w-[400px] h-[70px] rounded-[20px] flex-1 hover:scale-105 transition-all">
                Post
            </button>
        </div>

    </div>

</body>
</html>