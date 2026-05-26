<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\EventController as EventAdminController;

// --- Rute User Area ---
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/event', [EventController::class, 'show'])->name('events.show');
Route::get('/checkout', [EventController::class, 'checkout'])->name('checkout');
Route::get('/my-ticket', [EventController::class, 'ticket'])->name('ticket');
Route::get('/katalog', [EventController::class, 'index'])->name('katalog');
Route::get('/tentang', function () { return view('about'); })->name('about');

// --- Rute Admin Area ---
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/transactions', function () {
        return view('admin.transactions');
    })->name('transactions');

    // Categories CRUD
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    // Partners CRUD
    Route::resource('partners', PartnerController::class);

    // Events CRUD
    Route::resource('events', EventAdminController::class);
});