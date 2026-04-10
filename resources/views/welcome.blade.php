<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50 min-h-screen font-sans text-slate-800 flex flex-col">

    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 py-4 flex flex-col sm:flex-row justify-between items-center">
            <div class="text-2xl font-extrabold text-indigo-700 mb-4 sm:mb-0">
                Amikom<span class="text-slate-800">EventHub</span>
            </div>
            <nav class="flex flex-wrap gap-2 sm:gap-4 justify-center">
                <a href="/"
                    class="bg-indigo-600 text-white font-semibold py-2 px-4 sm:px-6 rounded-lg shadow-md">Home</a>
                <a href="/profil"
                    class="bg-indigo-100 hover:bg-indigo-600 hover:text-white text-indigo-700 font-semibold py-2 px-4 sm:px-6 rounded-lg transition duration-300">Profil</a>
                <a href="/katalog"
                    class="bg-indigo-100 hover:bg-indigo-600 hover:text-white text-indigo-700 font-semibold py-2 px-4 sm:px-6 rounded-lg transition duration-300">Katalog</a>
                <a href="/bantuan"
                    class="bg-indigo-100 hover:bg-indigo-600 hover:text-white text-indigo-700 font-semibold py-2 px-4 sm:px-6 rounded-lg transition duration-300">Bantuan</a>
                <a href="/kontak"
                    class="bg-indigo-100 hover:bg-indigo-600 hover:text-white text-indigo-700 font-semibold py-2 px-4 sm:px-6 rounded-lg transition duration-300">Kontak</a>
            </nav>
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center p-8">
        <div class="max-w-4xl mx-auto bg-white p-10 sm:p-16 rounded-3xl shadow-xl border border-slate-100 text-center">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-slate-800 mb-6 leading-tight">
                Temukan Event Kampus <br>
                <span class="text-indigo-600">Terbaik Hari Ini!</span>
            </h1>
            <p class="text-lg text-slate-500 mb-10 max-w-2xl mx-auto">
                AmikomEventHub adalah platform modern untuk mencari, mendaftar, dan mengikuti berbagai seminar,
                workshop, dan lomba seru di lingkungan kampus. Tingkatkan skill Anda sekarang!
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/katalog"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold text-lg py-4 px-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    Jelajahi Event
                </a>
                <a href="/profil"
                    class="bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-lg py-4 px-8 rounded-xl transition duration-300 border border-slate-200">
                    Lihat Profil
                </a>
            </div>
        </div>
    </main>

    <footer class="bg-slate-800 text-slate-400 py-6 text-center text-sm">
        <p>&copy; 2024 AmikomEventHub. Dibuat untuk Tugas Praktikum Digital Bisnis.</p>
    </footer>

</body>

</html>