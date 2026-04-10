@extends('layouts.app')

@section('title', 'Halaman Utama')

@section('content')
<div class="space-y-20">

    <section class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center bg-slate-100 p-12 rounded-3xl shadow-inner">
        <div>
            <h1 class="text-5xl font-extrabold text-gray-900 leading-tight">Temukan & Ikuti Acara Seru di <span class="text-indigo-700">AMIKOM</span>.</h1>
            <p class="mt-6 text-xl text-gray-600 max-w-xl">Pusat informasi acara kampus untuk mahasiswa Sistem Informasi dan seluruh sivitas akademika Universitas AMIKOM Yogyakarta.</p>
            <div class="mt-10 flex gap-4">
                <a href="/katalog" class="px-8 py-3.5 bg-indigo-600 text-white rounded-xl font-bold hover:bg-indigo-700 hover:shadow-lg transition duration-300">Lihat Katalog Acara</a>
                <a href="#" class="px-8 py-3.5 bg-white text-gray-800 rounded-xl font-bold hover:bg-gray-200 transition duration-300 border border-gray-200">Pelajari Lebih Lanjut</a>
            </div>
        </div>
        <div>
            <div class="flex items-center justify-center p-12 bg-white rounded-full shadow-lg border-4 border-dashed border-indigo-200">
                <svg class="w-60 h-60 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M18 13a3 3 0 110-6m0 6v6m0-6a3 3 0 100 6h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
        </div>
    </section>

    <section class="py-16">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-16">Pusat Acara Paling Update di AMIKOM</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="mx-auto flex items-center justify-center w-16 h-16 bg-sky-100 rounded-full mb-6">
                    <svg class="w-8 h-8 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Selalu Update</h3>
                <p class="text-gray-600 text-sm">Dapatkan informasi terkini tentang acara-acara kampus secara real-time.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="mx-auto flex items-center justify-center w-16 h-16 bg-sky-100 rounded-full mb-6">
                    <svg class="w-8 h-8 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Mudah Diakses</h3>
                <p class="text-gray-600 text-sm">Navigasi yang simpel dan desain responsif di semua perangkat Anda.</p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="mx-auto flex items-center justify-center w-16 h-16 bg-sky-100 rounded-full mb-6">
                    <svg class="w-8 h-8 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z"></path></svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Info Event Lengkap</h3>
                <p class="text-gray-600 text-sm">Mulai dari seminar, workshop, hingga event akademik lainnya.</p>
            </div>
        </div>
    </section>

    <section>
        <div class="flex items-center justify-between mb-12">
            <h2 class="text-4xl font-bold text-gray-900">Acara Sorotan Bulan Ini</h2>
            <a href="/katalog" class="text-indigo-600 font-semibold hover:text-indigo-800 transition">Lihat Semua Acara →</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                <img src="https://images.unsplash.com/photo-1540317580384-e5d43616b9aa?q=80&w=600&auto=format&fit=crop" alt="Seminar AI" class="w-full h-56 object-cover">
                <div class="p-8">
                    <span class="inline-block px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-semibold mb-4">Seminar</span>
                    <h3 class="text-2xl font-bold text-gray-950 mb-3">Seminar AI di Era Digital</h3>
                    <p class="text-gray-600 text-sm mb-6">Membahas dampak dan peluang kecerdasan buatan bagi mahasiswa.</p>
                    <div class="text-xs text-gray-400 space-y-1">
                        <p>📅 25 Juni 2024</p>
                        <p>📍 Gedung Citra Lantai 2</p>
                    </div>
                    <a href="#" class="mt-6 inline-block w-full text-center px-6 py-3 bg-indigo-100 text-indigo-800 rounded-xl font-semibold hover:bg-indigo-200 transition duration-300">Detail Selengkapnya</a>
                </div>
            </div>
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?q=80&w=600&auto=format&fit=crop" alt="Workshop Laravel" class="w-full h-56 object-cover">
                <div class="p-8">
                    <span class="inline-block px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-semibold mb-4">Workshop</span>
                    <h3 class="text-2xl font-bold text-gray-950 mb-3">Laravel Fundamental untuk Pemula</h3>
                    <p class="text-gray-600 text-sm mb-6">Belajar membuat aplikasi web modern dari nol dengan Laravel.</p>
                    <div class="text-xs text-gray-400 space-y-1">
                        <p>📅 2-4 Juli 2024</p>
                        <p>📍 Lab Komputer S1 SI</p>
                    </div>
                    <a href="#" class="mt-6 inline-block w-full text-center px-6 py-3 bg-indigo-100 text-indigo-800 rounded-xl font-semibold hover:bg-indigo-200 transition duration-300">Detail Selengkapnya</a>
                </div>
            </div>
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                <img src="https://images.unsplash.com/photo-1588196749597-9ff075ee6b5b?q=80&w=600&auto=format&fit=crop" alt="Webinar UI/UX" class="w-full h-56 object-cover">
                <div class="p-8">
                    <span class="inline-block px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-xs font-semibold mb-4">Webinar</span>
                    <h3 class="text-2xl font-bold text-gray-950 mb-3">Trend UI/UX Terbaru</h3>
                    <p class="text-gray-600 text-sm mb-6">Strategi desain antarmuka pengguna yang menarik dan intuitif.</p>
                    <div class="text-xs text-gray-400 space-y-1">
                        <p>📅 10 Juli 2024</p>
                        <p>📍 Via Zoom Meeting</p>
                    </div>
                    <a href="#" class="mt-6 inline-block w-full text-center px-6 py-3 bg-indigo-100 text-indigo-800 rounded-xl font-semibold hover:bg-indigo-200 transition duration-300">Detail Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection