<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Notification</title>
    <style>
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .flex.flex-col.gap-2 > div {
            opacity: 0;
            animation: slideIn 0.5s ease-out forwards;
        }

        .flex.flex-col.gap-2 > div:nth-child(1) { animation-delay: 0.1s; }
        .flex.flex-col.gap-2 > div:nth-child(2) { animation-delay: 0.2s; }
        .flex.flex-col.gap-2 > div:nth-child(3) { animation-delay: 0.3s; }
        .flex.flex-col.gap-2 > div:nth-child(4) { animation-delay: 0.4s; }

        .border-l-4 {
            box-shadow: inset 10px 0 20px -10px rgba(99, 102, 241, 0.2);
            transition: all 0.3s ease;
        }

        .flex.items-center.gap-4:hover {
            background-color: #1e293b !important;
            transform: scale(1.01);
            transition: all 0.2s ease;
        }

        .bg-\[\#6366F1\] {
            box-shadow: 0 0 12px #6366F1;
        }
    </style>
</head>
<body class="bg-[#05070A] min-h-screen flex flex-col">

    <?php include_once 'components/Navbar.php'; ?>

    <div class="flex flex-row items-center justify-between w-full px-12 mt-10">
        <h1 class="text-3xl font-bold text-white">
            Notification    
        </h1>

        <button class="w-[160px] h-[50px] border-2 border-[#6366F1] text-[#6366F1] rounded-xl hover:scale-105 cursor-pointer transition-all font-semibold text-base hover:bg-[#6366F1] hover:text-white">
            Mark all as read
        </button>
    </div>

    <div class="flex flex-row items-center gap-3 w-full px-12 mt-4">
        <button class="px-6 h-[50px] border-2 border-[#6366F1] bg-[#6366F1] text-white rounded-xl hover:scale-105 cursor-pointer transition-all font-semibold text-base">
            All
        </button>

        <button class="px-6 h-[50px] border-2 border-[#6366F1] text-[#6366F1] rounded-xl hover:scale-105 cursor-pointer transition-all font-semibold text-base hover:bg-[#6366F1]/10">
            Likes
        </button>

        <button class="px-6 h-[50px] border-2 border-[#6366F1] text-[#6366F1] rounded-xl hover:scale-105 cursor-pointer transition-all font-semibold text-base hover:bg-[#6366F1]/10">
            Comments
        </button>

        <button class="px-6 h-[50px] border-2 border-[#6366F1] text-[#6366F1] rounded-xl hover:scale-105 cursor-pointer transition-all font-semibold text-base hover:bg-[#6366F1]/10">
            Follows
        </button>
    </div>

    <div class="flex flex-col gap-2 px-12 mt-6">

    <div class="flex items-center gap-4 p-4 rounded-xl bg-[#0F172A] border-l-4 border-[#6366F1]">
        <div class="w-10 h-10 rounded-full bg-[#6366F1]/20 text-[#6366F1] flex items-center justify-center font-semibold text-sm">ED</div>
        <div class="flex-1">
            <p class="text-white text-sm"><span class="font-semibold">Edwin</span> liked your post</p>
            <p class="text-gray-500 text-xs">2m ago</p>
        </div>
        <div class="w-2 h-2 rounded-full bg-[#6366F1]"></div>
    </div>

    <div class="flex items-center gap-4 p-4 rounded-xl bg-[#0F172A] border-l-4 border-[#6366F1]">
        <div class="w-10 h-10 rounded-full bg-[#6366F1]/20 text-[#6366F1] flex items-center justify-center font-semibold text-sm">MA</div>
        <div class="flex-1">
            <p class="text-white text-sm"><span class="font-semibold">Marcel</span> commented on your post</p>
            <p class="text-gray-500 text-xs">3m ago</p>
        </div>
        <div class="w-2 h-2 rounded-full bg-[#6366F1]"></div>
    </div>

    <div class="flex items-center gap-4 p-4 rounded-xl bg-[#0F172A]">
        <div class="w-10 h-10 rounded-full bg-[#6366F1]/20 text-[#6366F1] flex items-center justify-center font-semibold text-sm">MR</div>
        <div class="flex-1">
            <p class="text-white text-sm"><span class="font-semibold">Marco</span> started following you</p>
            <p class="text-gray-500 text-xs">14m ago</p>
        </div>
    </div>

    <div class="flex items-center gap-4 p-4 rounded-xl bg-[#0F172A]">
        <div class="w-10 h-10 rounded-full bg-[#6366F1]/20 text-[#6366F1] flex items-center justify-center font-semibold text-sm">AL</div>
        <div class="flex-1">
            <p class="text-white text-sm"><span class="font-semibold">Alex</span> liked your post</p>
            <p class="text-gray-500 text-xs">2d ago</p>
        </div>
    </div>
</div>

</body>
</html>