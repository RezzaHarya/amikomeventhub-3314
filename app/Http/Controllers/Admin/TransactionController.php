<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    // Fungsi untuk menampilkan halaman Laporan Transaksi
    public function index()
    {
        // Pastikan nama ini persis dengan nama file 'transaction.blade.php' di sidebar-mu
        return view('admin.transaction'); 
    }
}