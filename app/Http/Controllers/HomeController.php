<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // 1. Import Model Category
use App\Models\Partner;  // 2. Import Model Partner

class HomeController extends Controller
{
    public function index()
    {
        // 3. Ambil sekumpulan data Kategori dan Partner
        $categories = Category::all();
        $partners = Partner::all();

        // 4. Kirim data tersebut ke view homepage (welcome.blade.php)
        return view('welcome', compact('categories', 'partners'));
    }
}