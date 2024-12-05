<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseSummaryController;
use App\Http\Middleware\IsAdmin;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::controller(FoodController::class)->group(function () {
    Route::get('/foods', 'index')->name('foods.index');
});
Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(OrdersController::class)->group(function () {
        Route::get('/orders', 'index')->name('orders.index');
        Route::get('/orders/check', 'show')->name('orders.check');
        Route::get('/orders/create-order', 'store')->name('orders.store');
    });
});

Route::middleware('auth', IsAdmin::class)->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
