<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 font-sans text-gray-800 antialiased">

    <header class="bg-white shadow-sm border-b border-gray-100">
        <nav class="container mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <span class="text-3xl font-extrabold text-indigo-700">Amikom<span class="text-sky-500">Event</span>Hub</span>
                <span class="text-sm font-medium text-gray-400 hidden sm:block">Fakultas Ilmu Komputer</span>
            </div>
            <div class="flex items-center gap-3">
                <a href="/" class="px-5 py-2.5 bg-sky-100 text-sky-800 rounded-full font-semibold hover:bg-sky-200 transition duration-300">Home</a>
                <a href="/profil" class="px-5 py-2.5 bg-white text-indigo-800 rounded-full font-semibold hover:bg-indigo-100 border border-indigo-200 transition duration-300">Profil</a>
                <a href="/katalog" class="px-5 py-2.5 bg-white text-indigo-800 rounded-full font-semibold hover:bg-indigo-100 border border-indigo-200 transition duration-300">Katalog</a>
                <a href="/bantuan" class="px-5 py-2.5 bg-white text-indigo-800 rounded-full font-semibold hover:bg-indigo-100 border border-indigo-200 transition duration-300">Bantuan</a>
                <a href="/kontak" class="px-5 py-2.5 bg-white text-indigo-800 rounded-full font-semibold hover:bg-indigo-100 border border-indigo-200 transition duration-300">Kontak</a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-12">
        @yield('content')
    </main>

    <footer class="bg-slate-900 text-slate-300 mt-20">
        <div class="container mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-4 gap-10">
            <div>
                <span class="text-3xl font-extrabold text-white">Amikom<span class="text-sky-400">Event</span>Hub</span>
                <p class="mt-4 text-sm">Pusat informasi acara mahasiswa Universitas AMIKOM Yogyakarta.</p>
            </div>
            <div>
                <h4 class="font-semibold text-white mb-4">Fitur</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition">Daftar Acara</a></li>
                    <li><a href="#" class="hover:text-white transition">Halaman Profil</a></li>
                    <li><a href="#" class="hover:text-white transition">FAQ Resmi</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-white mb-4">Kontak Kami</h4>
                <ul class="space-y-2 text-sm">
                    <li>Gedung Citra, Lantai 3</li>
                    <li>amikomeventhub@amikom.ac.id</li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-white mb-4">Tentang Kami</h4>
                <p class="text-sm">Dipersembahkan oleh Mahasiswa Sistem Informasi S1.</p>
            </div>
        </div>
        <div class="bg-slate-950 text-center py-4 text-xs">
            © 2024 AmikomEventHub. Universitas AMIKOM Yogyakarta. All rights reserved.
        </div>
    </footer>

</body>
</html>