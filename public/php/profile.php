<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile - Lieameed</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    
</head>

<body class="bg-[#05070A] min-h-screen font-sans flex flex-col">

    <?php include '../components/Navbar.php'; ?>

    <div class="relative">
        <div class="w-full h-64 md:h-80 overflow-hidden">
            <img src="/assets/rectangle 22.png" class="w-full h-full object-cover">
        </div>

        <div class="max-w-6xl mx-auto px-6 relative">
            <div class="flex flex-col md:flex-row items-end -mt-16 md:-mt-24 gap-6">
                
                <div class="relative -ml-6">
                    <img src="/assets/karbit gerfa.png" 
                        class="w-40 h-40 md:w-52 md:h-52 rounded-full border-8 border-white shadow-lg bg-white object-cover">
                    </div>

                <div class="flex-1 flex justify-end mb-4 gap-3">
                    <button class="bg-[#5370B0] text-white px-6 py-2 rounded-lg flex items-center gap-2 hover:bg-slate-700 transition-all font-medium">
                        <i class="fa-solid fa-user-plus text-sm"></i> Add Friend
                    </button>
                    <button class="p-2 text-gray-600 hover:bg-gray-100 rounded-full transition-colors">
                        <i class="fa-solid fa-ellipsis-vertical text-2xl"></i>
                    </button>
                </div>
            </div>

            <div class="mt-6">
                <h1 class="text-4xl font-bold text-white">Lieameed</h1>
                <p class="text-xl text-white mt-1">Siswa | XI TKJ 2 | SMK Pontianak</p>
                <div class="flex gap-4 mt-2 text-lg">
                    <p class="font-bold text-white"><span class="font-bold text-white">1</span> Communities</p>
                    <p class="font-bold text-white"><span class="font-bold text-white">10</span> Friends</p>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-6 mt-10 border-b border-white">
        <div class="flex justify-around md:justify-start md:gap-20 text-lg font-semibold text-gray-500">
            <a href="#" class="pb-4 border-b-4 border-[#000000] text-white px-4">Posts</a>
            <a href="#" class="pb-4 hover:text-white px-4">Activity</a>
            <a href="#" class="pb-4 hover:text-white px-4">Favourites</a>
            <a href="#" class="pb-4 hover:text-white px-4">About Me</a>
        </div>
    </div>

    <main class="max-w-6xl mx-auto px-6 py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <div class="bg-white rounded-xl shadow-sm border overflow-hidden">
                <img src="/assets/Foto1.png" class="w-full">
            </div>

            <div class="bg-white rounded-xl shadow-sm border overflow-hidden">  
                <img src="/assets/Foto2.png" class="w-full">
            </div>

            <div class="bg-white rounded-xl shadow-sm border overflow-hidden">
                <img src="/assets/Foto3.png" class="w-full">
            </div>

             <div class="bg-white rounded-xl shadow-sm border overflow-hidden">
                <img src="/assets/Foto4.png" class="w-full">
            </div>

        </div>
    </main>

</body>
</html>