<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\View\View;

class TransactionController extends Controller
{
    /**
     * Menampilkan daftar transaksi.
     *
     * @return View
     */
    public function index(): View
    {
        // Mengambil transaksi terbaru dengan relasi event, 
        // menggunakan pagination 20 per halaman.
        $transactions = Transaction::with('event')
            ->latest()
            ->paginate(20);

        return view('admin.transactions.index', compact('transactions'));
    }
}