<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminAgentController;
use App\Http\Controllers\Admin\AdminTypeController;
use App\Http\Controllers\Admin\AdminPropertyController;
use App\Http\Controllers\Admin\AdminCityController;
use App\Http\Controllers\Admin\AdminAmenityController;



Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/properties', [HomeController::class, 'properties'])->name('properties');
Route::get('/agents', [HomeController::class, 'agents'])->name('agents');
Route::get('/properties/{id}', [HomeController::class, 'viewProperty'])->name('property');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')
        ->name('login')->withoutMiddleware(['auth']);;
    Route::resources([
        'properties' => AdminPropertyController::class,
        'agents' => AdminAgentController::class,
        'cities' => AdminCityController::class,
        'types' => AdminTypeController::class,
        'amenities' => AdminAmenityController::class,
    ]);
});



