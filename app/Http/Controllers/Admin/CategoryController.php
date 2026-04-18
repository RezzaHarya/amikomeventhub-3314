<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // INI ADALAH FUNGSI INDEX YANG DICARI OLEH LARAVEL
    public function index()
    {
        // Menampilkan view index.blade.php yang ada di folder admin/categories
        return view('admin.categories'); 
    }
}