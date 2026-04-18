<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    // Method untuk menampilkan halaman detail event
    public function show()
    {
        return view('event-detail'); 
    }

    // Method untuk menampilkan halaman checkout
    public function checkout()
    {
        return view('checkout');
    }

    // Method untuk menampilkan halaman tiket
    public function ticket()
    {
        return view('ticket');
    }
}
