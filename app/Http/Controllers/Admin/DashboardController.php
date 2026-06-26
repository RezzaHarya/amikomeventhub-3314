<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction; // Wajib tambahkan ini di atas agar Model dikenali

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil 5 transaksi paling baru beserta data event-nya
        $recent_transactions = Transaction::with('event')->latest()->take(5)->get();

        // Lempar data ke halaman dashboard
        // Pastikan nama view-nya sesuai dengan file blade Anda (biasanya 'admin.dashboard')
        return view('admin.dashboard', compact('recent_transactions'));
    }
}