<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hompage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/output.css">
</head>
<body class="bg-[#05070A] min-h-screen flex flex-col">
    
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

    <div class="w-full max-w-[1200px] mx-auto h-[120px] bg-[#0F172A] rounded-2xl flex items-center justify-center mt-10 shadow-[0_0_20px_rgba(99,102,241,0.15)] px-10">
        <div class="w-full"> 
            <div class="relative w-full flex items-center">
                <i class="fa-solid fa-magnifying-glass absolute left-6 text-gray-400 text-xl"></i>
                <input type="text" placeholder="Cari apa bang..." class="w-full h-[60px] bg-white/15 border border-white/10 rounded-2xl pl-16 pr-6 text-white text-lg outline-none focus:border-blue-500 transition-all focus:bg-white/10">
            </div>
        </div>
    </div>

    <h1 class="text-3xl font-bold text-white ml-12 mt-10">
        Recommendation
    </h1>

    <div class="flex-1 flex justify-center items-center p-10 text-center">
        <h1 class="text-4xl text-white/20 font-bold">
            No current Popular Posts/Posts made by developer Yet
        </h1>
    </div>

</body>
</html>