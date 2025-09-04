<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CareerController;



Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/about-us', function () {
    return view('aboutus');
});


Route::get('/careers', [CareerController::class, 'showCareers'])->name('careers');

Route::get('/event', [EventController::class, 'showEvent'])->name('event');
Route::get('/event/{id}', [EventController::class, 'showDetailEvent'])->name('event.detail');

Route::get('/brand', [BrandController::class, 'showBrands'])->name('brand');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/produk', function () {
        return view('admin.produk'); 
    })->name('admin.produk');

    Route::get('/admin/careers', [CareerController::class, 'index'])->name('careers.index');
Route::get('/admin/careers/create', [CareerController::class, 'create'])->name('admin.careers.create');
Route::post('/admin/careers', [CareerController::class, 'store'])->name('admin.careers.store');
Route::get('/admin/careers/{career}/edit', [CareerController::class, 'edit'])->name('admin.careers.edit');
Route::put('/admin/careers/{career}', [CareerController::class, 'update'])->name('admin.careers.update');
Route::delete('/admin/careers/{career}', [CareerController::class, 'destroy'])->name('admin.careers.destroy');

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


