<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Event</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50 min-h-screen p-8 font-sans text-slate-800">

    <nav class="flex flex-wrap gap-4 justify-center mb-10">
        <a href="/"
            class="bg-indigo-100 hover:bg-indigo-600 hover:text-white text-indigo-700 font-semibold py-2 px-6 rounded-lg transition duration-300">Home</a>
        <a href="/profil"
            class="bg-indigo-100 hover:bg-indigo-600 hover:text-white text-indigo-700 font-semibold py-2 px-6 rounded-lg transition duration-300">Profil</a>
        <a href="/katalog" class="bg-indigo-600 text-white font-semibold py-2 px-6 rounded-lg shadow-md">Katalog</a>
        <a href="/bantuan"
            class="bg-indigo-100 hover:bg-indigo-600 hover:text-white text-indigo-700 font-semibold py-2 px-6 rounded-lg transition duration-300">Bantuan</a>
        <a href="/kontak"
            class="bg-indigo-100 hover:bg-indigo-600 hover:text-white text-indigo-700 font-semibold py-2 px-6 rounded-lg transition duration-300">Kontak</a>
    </nav>

    <div class="max-w-5xl mx-auto">
        <h1 class="text-3xl font-bold text-center text-slate-800 mb-8">Katalog AmikomEventHub</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div
                class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 border border-slate-100">
                <div class="bg-indigo-500 h-32 flex items-center justify-center">
                    <span class="text-white font-bold text-xl">Seminar IT</span>
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-2">Webinar Web Security</h2>
                    <p class="text-slate-500 text-sm mb-4">Pelajari dasar-dasar keamanan web modern bersama pakar
                        industri.</p>
                    <button
                        class="w-full bg-indigo-50 text-indigo-600 font-semibold py-2 rounded hover:bg-indigo-100 transition">Lihat
                        Detail</button>
                </div>
            </div>

            <div
                class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 border border-slate-100">
                <div class="bg-purple-500 h-32 flex items-center justify-center">
                    <span class="text-white font-bold text-xl">Workshop</span>
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-2">Mastering Laravel 11</h2>
                    <p class="text-slate-500 text-sm mb-4">Praktik langsung membuat aplikasi web dari nol menggunakan
                        Laravel.</p>
                    <button
                        class="w-full bg-purple-50 text-purple-600 font-semibold py-2 rounded hover:bg-purple-100 transition">Lihat
                        Detail</button>
                </div>
            </div>

            <div
                class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 border border-slate-100">
                <div class="bg-teal-500 h-32 flex items-center justify-center">
                    <span class="text-white font-bold text-xl">Lomba</span>
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-2">Hackathon Nasional</h2>
                    <p class="text-slate-500 text-sm mb-4">Tantang diri Anda dan tim dalam kompetisi coding 48 jam
                        nonstop.</p>
                    <button
                        class="w-full bg-teal-50 text-teal-600 font-semibold py-2 rounded hover:bg-teal-100 transition">Lihat
                        Detail</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>