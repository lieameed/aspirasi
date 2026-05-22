<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/output.css">

    <style>
    .fade-in-scroll {
        opacity: 0;
        transform: translateY(10px);
        transition: all 1s ease-out;
    }

    .fade-in-scroll.active {
        opacity: 1;
        transform: translateY(0);
    }
    </style>
</head>

<body class="bg-[#05070A] min-h-screen flex flex-col">

    <?php include_once '../components/Navbar.php';?>

    
    <div class="w-full max-w-[1200px] mx-auto h-[120px] bg-[#0F172A] rounded-2xl flex items-center justify-center mt-10 shadow-[0_0_20px_rgba(99,102,241,0.15)] px-10">
        <div class="w-full"> 
            <div class="relative w-full flex items-center">
                <i class="fa-solid fa-magnifying-glass absolute left-6 text-gray-400 text-xl"></i>
                <input type="text" placeholder="Cari apa bang..." 
                    class="w-full h-[60px] bg-white/15 border border-white/10 rounded-2xl pl-16 pr-6 text-white text-lg outline-none focus:border-blue-500 transition-all focus:bg-white/10">
            </div>
        </div>
    </div>

    
    <h1 class="text-3xl font-bold text-white ml-12 mt-10">
        Recommendation
    </h1>

    
    <div class="flex-1 flex justify-center items-center p-10 text-center">
        <h1 class="text-4xl text-white/20 font-bold">
            No current Popular Posts / Posts made by developer yet
        </h1>
    </div>

    <script>
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                } else {
                    entry.target.classList.remove('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-scroll').forEach((el) => {
            observer.observe(el);
        });
    </script>
</body>
</html>