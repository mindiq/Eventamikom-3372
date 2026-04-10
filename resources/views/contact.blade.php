<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - AmikomEventHub</title>
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
                    class="bg-indigo-100 hover:bg-indigo-600 hover:text-white text-indigo-700 font-semibold py-2 px-4 sm:px-6 rounded-lg transition duration-300">Home</a>
                <a href="/profil"
                    class="bg-indigo-100 hover:bg-indigo-600 hover:text-white text-indigo-700 font-semibold py-2 px-4 sm:px-6 rounded-lg transition duration-300">Profil</a>
                <a href="/katalog"
                    class="bg-indigo-100 hover:bg-indigo-600 hover:text-white text-indigo-700 font-semibold py-2 px-4 sm:px-6 rounded-lg transition duration-300">Katalog</a>
                <a href="/bantuan"
                    class="bg-indigo-100 hover:bg-indigo-600 hover:text-white text-indigo-700 font-semibold py-2 px-4 sm:px-6 rounded-lg transition duration-300">Bantuan</a>
                <a href="/kontak"
                    class="bg-indigo-600 text-white font-semibold py-2 px-4 sm:px-6 rounded-lg shadow-md">Kontak</a>
            </nav>
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center p-6 sm:p-12">
        <div
            class="max-w-4xl w-full bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col md:flex-row border border-slate-100">

            <div class="bg-indigo-600 p-10 text-white flex flex-col justify-center md:w-2/5">
                <h2 class="text-3xl font-extrabold mb-4">Mari Berbincang!</h2>
                <p class="text-indigo-200 mb-10 leading-relaxed">Punya pertanyaan seputar event, pendaftaran, atau ingin
                    menjalin kerja sama? Tim kami selalu siap membantu Anda.</p>

                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="bg-indigo-500 p-3 rounded-full">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <span class="font-medium tracking-wide">amikom@amikom.ac.id</span>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="bg-indigo-500 p-3 rounded-full">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.243-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <span class="font-medium tracking-wide leading-tight">Universitas AMIKOM<br>Yogyakarta</span>
                    </div>
                </div>
            </div>

            <div class="p-10 md:p-14 md:w-3/5 flex flex-col justify-center text-center sm:text-left bg-white">
                <h3 class="text-3xl font-bold text-slate-800 mb-4">Hubungi Kami</h3>
                <p class="text-slate-500 mb-10 text-lg leading-relaxed">
                    Saat ini layanan formulir otomatis sedang dalam tahap pengembangan. Silakan kirimkan pesan Anda
                    langsung melalui email, atau kembali mengeksplorasi event-event menarik di beranda.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center sm:justify-start">
                    <a href="mailto:amikom@amikom.ac.id"
                        class="bg-indigo-50 text-indigo-700 font-bold py-3 px-6 rounded-xl hover:bg-indigo-100 transition duration-300 text-center border border-indigo-200">
                        Kirim Email
                    </a>
                    <a href="/"
                        class="bg-indigo-600 text-white font-bold py-3 px-6 rounded-xl hover:bg-indigo-700 hover:shadow-lg transition duration-300 text-center">
                        Kembali ke Home
                    </a>
                </div>
            </div>

        </div>
    </main>

</body>

</html>