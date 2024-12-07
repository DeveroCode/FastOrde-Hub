<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseSummaryController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsUser;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::controller(FoodController::class)->group(function () {
    Route::get('/foods', 'index')->name('foods.index');
});

Route::controller(OrdersController::class)->group(function () {
    Route::get('/orders', 'index')->name('orders.index');
    Route::get('/orders/check', 'show')->name('orders.check');
    Route::get('/orders/create-order', 'store')->name('orders.store');
})->middleware(['auth', 'verified', IsUser::class]);


Route::middleware(['auth', 'verified', IsAdmin::class])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/administration/index', 'index')->name('dashboard.index');
        Route::get('/add-food', 'create')->name('dashboard.create');
    });

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });
});


require __DIR__ . '/auth.php';
