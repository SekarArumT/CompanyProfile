<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BrandController;



Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/about-us', function () {
    return view('aboutus');
});

Route::get('/brands', function () {
    return view('brands');
});

Route::get('/careers', function () {
    return view('careers');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/produk', function () {
        return view('admin.produk'); 
    })->name('admin.produk');

   Route::patch('/events/{event}/set-highlight', [EventController::class, 'setHighlight'])
    ->name('events.setHighlight');

        Route::get('/admin-brands', [BrandController::class, 'index'])->name('brands.index');
        Route::get('/admin/brands', [BrandController::class, 'index'])->name('admin.brands.index');
        Route::get('/admin/brands/create', [BrandController::class, 'create'])->name('admin.brands.create');
        Route::post('/admin/brands', [BrandController::class, 'store'])->name('admin.brands.store');
        Route::get('/admin/brands/{brand}/edit', [BrandController::class, 'edit'])->name('admin.brands.edit');
        Route::put('/admin/brands/{brand}', [BrandController::class, 'update'])->name('admin.brands.update');
        Route::delete('/admin/brands/{brand}', [BrandController::class, 'destroy'])->name('admin.brands.destroy');

});

Route::middleware('auth')->group(function () {
    Route::resource('products', ProductController::class);
    Route::resource('events', EventController::class);
});


