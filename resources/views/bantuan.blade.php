<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusat Bantuan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50 min-h-screen p-8 font-sans text-slate-800">

    <nav class="flex flex-wrap gap-4 justify-center mb-10">
        <a href="/"
            class="bg-indigo-100 hover:bg-indigo-600 hover:text-white text-indigo-700 font-semibold py-2 px-6 rounded-lg transition duration-300">Home</a>
        <a href="/profil"
            class="bg-indigo-100 hover:bg-indigo-600 hover:text-white text-indigo-700 font-semibold py-2 px-6 rounded-lg transition duration-300">Profil</a>
        <a href="/katalog"
            class="bg-indigo-100 hover:bg-indigo-600 hover:text-white text-indigo-700 font-semibold py-2 px-6 rounded-lg transition duration-300">Katalog</a>
        <a href="/bantuan" class="bg-indigo-600 text-white font-semibold py-2 px-6 rounded-lg shadow-md">Bantuan</a>
        <a href="/kontak"
            class="bg-indigo-100 hover:bg-indigo-600 hover:text-white text-indigo-700 font-semibold py-2 px-6 rounded-lg transition duration-300">Kontak</a>
    </nav>

    <div class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow-lg border border-slate-100">
        <h1 class="text-3xl font-bold text-center text-slate-800 mb-2">Pusat Bantuan</h1>
        <p class="text-center text-slate-500 mb-8">Pertanyaan yang sering diajukan (FAQ)</p>

        <div class="space-y-4">
            <div class="border border-slate-200 rounded-lg p-4 hover:bg-slate-50 transition">
                <h3 class="font-bold text-lg text-indigo-700 mb-2">Bagaimana cara mendaftar event?</h3>
                <p class="text-slate-600 text-sm">Anda dapat mendaftar dengan menuju halaman Katalog, memilih event yang
                    diinginkan, lalu klik tombol "Lihat Detail" untuk mengisi formulir pendaftaran.</p>
            </div>

            <div class="border border-slate-200 rounded-lg p-4 hover:bg-slate-50 transition">
                <h3 class="font-bold text-lg text-indigo-700 mb-2">Apakah event ini gratis?</h3>
                <p class="text-slate-600 text-sm">Beberapa event bersifat gratis, namun ada juga event premium seperti
                    workshop intensif yang membutuhkan biaya investasi. Detail biaya ada di masing-masing kartu event.
                </p>
            </div>

            <div class="border border-slate-200 rounded-lg p-4 hover:bg-slate-50 transition">
                <h3 class="font-bold text-lg text-indigo-700 mb-2">Bagaimana jika saya mengalami kendala teknis?</h3>
                <p class="text-slate-600 text-sm">Silakan kunjungi halaman <a href="/kontak"
                        class="text-indigo-500 underline hover:text-indigo-700">Kontak</a> untuk mengirimkan email
                    kepada admin kami.</p>
            </div>
        </div>
    </div>

</body>

</html>