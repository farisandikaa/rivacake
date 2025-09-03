<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ShopItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Rute Publik (tidak perlu login)
|--------------------------------------------------------------------------
*/

// Home, About, Contact
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/class', 'class')->name('class');
Route::get('/checkout', [PaymentController::class, 'checkout'])->name('checkout');

// Galeri publik
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Shop publik
Route::get('/shop', [ShopController::class, 'index'])->name('shop');

// firewall register


/*
|--------------------------------------------------------------------------
| Rute Admin / Backend Shop (butuh login)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // CRUD Galeri
    Route::resource('posts', PostController::class);

    // CRUD Shop (admin backend)
    Route::resource('shop-items', ShopItemController::class);

    Route::resource('users', UserController::class)->except(['show']);
    // Profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';
