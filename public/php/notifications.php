<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/output.css">
    <title>Notification</title>
</head>
<body class="bg-[#05070A] min-h-screen flex flex-col">

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

                <a href="login.php">
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

    <!-- buton start -->

    <div class="flex flex-row items-center justify-between w-full px-12 mt-10">
        <h1 class="text-3xl font-bold text-white">
            Notification    
        </h1>

        <button class="w-[160px] h-[50px] border-2 border-[#6366F1] text-[#6366F1] rounded-xl hover:scale-105 cursor-pointer transition-all font-semibold text-base">
            Mark all as read
        </button>
    </div>

    <div class="flex flex-row items-center gap-3 w-full px-12 mt-4">
        <button class="px-6 h-[50px] border-2 border-[#6366F1] bg-[#6366F1] text-white rounded-xl hover:scale-105 cursor-pointer transition-all font-semibold text-base">
            All
        </button>

        <button class="px-6 h-[50px] border-2 border-[#6366F1] text-[#6366F1] rounded-xl hover:scale-105 cursor-pointer transition-all font-semibold text-base">
            Likes
        </button>

        <button class="px-6 h-[50px] border-2 border-[#6366F1] text-[#6366F1] rounded-xl hover:scale-105 cursor-pointer transition-all font-semibold text-base">
            Comments
        </button>

        <button class="px-6 h-[50px] border-2 border-[#6366F1] text-[#6366F1] rounded-xl hover:scale-105 cursor-pointer transition-all font-semibold text-base">
            Follows
        </button>
    </div>

    <div class="flex flex-col gap-2 px-12 mt-6">

    <!-- buton end -->
    <!-- notif start -->

    <div class="flex items-center gap-4 p-4 rounded-xl bg-[#1E293B] border-l-4 border-[#6366F1]">
        <div class="w-10 h-10 rounded-full bg-[#6366F1]/20 text-[#6366F1] flex items-center justify-center font-semibold text-sm">ED</div>
        <div class="flex-1">
            <p class="text-white text-sm"><span class="font-semibold">Edwin</span> liked your post</p>
            <p class="text-gray-500 text-xs">2m ago</p>
        </div>
        <div class="w-2 h-2 rounded-full bg-[#6366F1]"></div>
    </div>

    <div class="flex items-center gap-4 p-4 rounded-xl bg-[#1E293B] border-l-4 border-[#6366F1]">
        <div class="w-10 h-10 rounded-full bg-[#6366F1]/20 text-[#6366F1] flex items-center justify-center font-semibold text-sm">MA</div>
        <div class="flex-1">
            <p class="text-white text-sm"><span class="font-semibold">Marcel</span> commented on your post</p>
            <p class="text-gray-500 text-xs">3m ago</p>
        </div>
        <div class="w-2 h-2 rounded-full bg-[#6366F1]"></div>
    </div>

    <div class="flex items-center gap-4 p-4 rounded-xl bg-[#1E293B]">
        <div class="w-10 h-10 rounded-full bg-[#6366F1]/20 text-[#6366F1] flex items-center justify-center font-semibold text-sm">MR</div>
        <div class="flex-1">
            <p class="text-white text-sm"><span class="font-semibold">Marco</span> started following you</p>
            <p class="text-gray-500 text-xs">14m ago</p>
        </div>
    </div>

    <div class="flex items-center gap-4 p-4 rounded-xl bg-[#1E293B]">
        <div class="w-10 h-10 rounded-full bg-[#6366F1]/20 text-[#6366F1] flex items-center justify-center font-semibold text-sm">AL</div>
        <div class="flex-1">
            <p class="text-white text-sm"><span class="font-semibold">Alex</span> liked your post</p>
            <p class="text-gray-500 text-xs">2d ago</p>
        </div>
    </div>
    <!-- notif end -->
</div>

</body>
</html>