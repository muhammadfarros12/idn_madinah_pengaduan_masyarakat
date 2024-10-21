<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/testing', function () {
    // return view('welcome');
    // return view('front.form-pengaduan');
    // return view('dashboard.index');
    // return view('front.semua-pengaduan');
    return view('front.index');
    // return view('front.statistik');
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::get('register', [LoginController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [LoginController::class, 'register']);
});

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/users', [UsersController::class, 'index'])->name('admin.users.index');
    Route::post('/users/store', [UsersController::class, 'store'])->name('admin.users.store');
    Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('admin.users.edit');
    Route::put('/users/update/{id}', [UsersController::class, 'update'])->name('admin.users.update');
    Route::post('/users/destroy/{id}', [UsersController::class, 'destroy'])->name('admin.users.destroy');
});



require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
