<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kontak', function () {
return view('contact');
});

Route::get('/profil', function () {
return view('profil');
});

Route::get('/katalog', function () {
return view('katalog');
});

Route::get('/bantuan', function () {
return view('bantuan');
});

//admin dashboard
Route::get('/dashboard', function () {
return view('admin.dashboard');
});

//admin event
Route::get('/event', function () {
return view('admin.event');
});