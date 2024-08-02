<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BotManController;


Route::get('/index', [PageController::class, 'index'])->name('index');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/help', [PageController::class, 'testimonial'])->name('help');
Route::get('/404', function () { return view('404'); });

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/register', [HomeController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [HomeController::class, 'register'])->name('register');
Route::get('/login', [HomeController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [HomeController::class, 'login'])->name('login');
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/botman', [BotManController::class, 'handle']);
Route::get('/chat', [BotManController::class, 'chatWithExpert']);

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/index'); // Redirect to the homepage or login page after logout
})->name('logout');