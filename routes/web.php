<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;


// The page containing your new registration form
Route::get('/register', [AuthController::class, 'showForm'])->name('register');

// The POST endpoint where the form submits its data
Route::post('/register', [AuthController::class, 'register'])->name('register.store');


// The page containing your new registration form
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// The POST endpoint where the form submits its data
Route::post('/login', [AuthController::class, 'login'])->name('login.store');

Route::resource('products', App\Http\Controllers\ProductController::class);

Route::post('/logout', function () {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');
    })->name('logout');



