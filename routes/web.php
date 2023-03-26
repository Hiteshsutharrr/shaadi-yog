<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserPageController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

// guest routes
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/admin/login', [AdminAuthController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');

// routes for user 
Route::middleware(['user'])->prefix('/')->name('user.')->group(function () {
    // navigation routes
    Route::get('/home', [UserPageController::class, 'index'])->name('home');
});

// routes for admin
Route::middleware(['admin'])->prefix('/admin')->name('admin.')->group(function () {
    // navigation routes
    Route::get('/dashboard', [AdminPageController::class, 'dashboard'])->name('dashboard');
});
