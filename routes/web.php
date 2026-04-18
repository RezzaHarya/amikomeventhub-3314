<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController; // Alias agar tidak bentrok dengan nama controller user
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TransactionController;

// Rute User Area
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/event/1', [EventController::class, 'show'])->name('events.show');
Route::get('/checkout', [EventController::class, 'checkout'])->name('checkout');
Route::get('/my-ticket', [EventController::class, 'ticket'])->name('ticket');

// Rute Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

// Dashboard Admin (URL: http://127.0.0.1:8000/admin)
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
    // Kelola Event Admin (URL: http://127.0.0.1:8000/admin/events)
    Route::get('/events', [AdminEventController::class, 'indexAdmin'])->name('events.index');

    // Kelola Kategori (URL: http://127.0.0.1:8000/admin/categories)
    // Ini adalah hasil dari Latihan Pertemuan 3 yang kamu kerjakan di awal
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
});