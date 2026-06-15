<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    
    // Haluan Dashboard Syarikat
    Route::get('/syarikat/dashboard', [DashboardController::class, 'syarikat'])
        ->middleware('role:syarikat')->name('syarikat.dashboard');

    // Haluan Dashboard JKDM
    Route::get('/jkdm/dashboard', [DashboardController::class, 'jkdm'])
        ->middleware('role:jkdm')->name('jkdm.dashboard');

    // Haluan Dashboard Admin
    Route::get('/admin/dashboard', [DashboardController::class, 'admin'])
        ->middleware('role:admin')->name('admin.dashboard');
});

require __DIR__.'/auth.php';
