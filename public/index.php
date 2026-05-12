<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/output.css">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#05070A] min-h-screen overflow-x-hidden">

    <?php include 'components/navbar.php'; ?>

    <div class="fixed top-0 left-0 w-[500px] h-[500px] bg-blue-500/10 blur-[120px] rounded-full pointer-events-none"></div>
    <div class="px-14 mt-12 relative z-10">

        <div class="flex justify-between items-center mb-10">

            <div>
                <h1 class="text-5xl font-bold text-white">
                    School Announcement
                </h1>

                <p class="text-gray-400 mt-3 text-lg">
                    Informasi terbaru dan pengumuman sekolah
                </p>
            </div>

            <a href="#"
               class="text-white font-semibold text-lg hover:text-[#5370B0] transition-all">
                Lihat Semua Berita
            </a>

        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2">

                <div class="bg-[#111827] rounded-3xl overflow-hidden border border-white/10
                            hover:scale-[1.01]
                            hover:shadow-[0_0_35px_rgba(99,102,241,0.25)]
                            transition-all duration-300 cursor-pointer">

                    <img src="assets/image.png"
                         class="w-full h-[500px] object-cover">

                    <div class="p-8">

                        <div class="flex items-center gap-3 mb-5">


                            <p class="text-red-400 font-semibold text-lg">
                                IMPORTANT NEWS
                            </p>
                        </div>

                        <h1 class="text-4xl font-bold text-white leading-tight hover:text-[#6366F1] transition-all">
                            Ulangan akhir semester sudah mendekat
                        </h1>

                        <p class="text-gray-400 mt-5 text-lg leading-relaxed">
                            Semua siswa diharapkan mulai mempersiapkan diri untuk menghadapi
                            ujian akhir semester yang akan berlangsung bulan depan.
                        </p>

                        <div class="flex gap-8 mt-8 text-gray-400 text-lg">

                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-calendar text-orange-400"></i>
                                <span>09/03/2026</span>
                            </div>

                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-school text-orange-400"></i>
                                <span>School Event</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="flex flex-col gap-8">

                <div class="flex gap-4 bg-[#111827] rounded-2xl p-4 border border-white/10
                            hover:translate-x-2
                            hover:shadow-[0_0_25px_rgba(99,102,241,0.2)]
                            transition-all duration-300 cursor-pointer">


                    <div class="flex flex-col justify-between w-full">

                        <div class="flex justify-between items-start gap-4">

                            <h1 class="text-lg font-bold text-white leading-snug hover:text-[#6366F1] transition-all">
                                Retret untuk kelas 11, 6 April 2026
                            </h1>

                            <i class="fa-solid fa-calendar text-blue-500 text-xl"></i>

                        </div>

                        <div class="flex gap-4 mt-5 text-sm text-gray-400">

                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-clock text-orange-400"></i>
                                <span>Upcoming Event</span>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="flex gap-4 bg-[#111827] rounded-2xl p-4 border border-white/10
                            hover:translate-x-2
                            hover:shadow-[0_0_25px_rgba(99,102,241,0.2)]
                            transition-all duration-300 cursor-pointer">


                    <div class="flex flex-col justify-between w-full">

                        <div class="flex justify-between items-start gap-4">

                            <h1 class="text-lg font-bold text-white leading-snug hover:text-[#6366F1] transition-all">
                                Lomba menyanyi solo, Mega Mall
                            </h1>

                            <i class="fa-solid fa-trophy text-yellow-500 text-xl"></i>

                        </div>

                        <div class="flex gap-4 mt-5 text-sm text-gray-400">

                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-award text-orange-400"></i>
                                <span>Competition</span>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="flex gap-4 bg-[#111827] rounded-2xl p-4 border border-white/10
                            hover:translate-x-2
                            hover:shadow-[0_0_25px_rgba(99,102,241,0.2)]
                            transition-all duration-300 cursor-pointer">


                    <div class="flex flex-col justify-between w-full">

                        <div class="flex justify-between items-start gap-4">

                            <h1 class="text-lg font-bold text-white leading-snug hover:text-[#6366F1] transition-all">
                                Info Upacara, Senin 6 Mei 2026
                            </h1>

                            <i class="fa-solid fa-calendar text-teal-500 text-xl"></i>

                        </div>

                        <div class="flex gap-4 mt-5 text-sm text-gray-400">

                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-school text-orange-400"></i>
                                <span>School Activity</span>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="flex gap-4 bg-[#111827] rounded-2xl p-4 border border-white/10
                            hover:translate-x-2
                            hover:shadow-[0_0_25px_rgba(99,102,241,0.2)]
                            transition-all duration-300 cursor-pointer">


                    <div class="flex flex-col justify-between w-full">

                        <div class="flex justify-between items-start gap-4">

                            <h1 class="text-lg font-bold text-white leading-snug hover:text-[#6366F1] transition-all">
                                Lomba karapan kuda, Pontianak
                            </h1>

                            <i class="fa-solid fa-trophy text-purple-500 text-xl"></i>

                        </div>

                        <div class="flex gap-4 mt-5 text-sm text-gray-400">

                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-location-dot text-orange-400"></i>
                                <span>Pontianak Event</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

       </div>

</body>
</html>