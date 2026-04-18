<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Mengembalikan view bernama 'welcome'
    public function index()
    {
        return view('welcome');
    }
}
