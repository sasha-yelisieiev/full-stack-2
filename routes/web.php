<?php

use App\Http\Controllers\AuthController; // Додати імпорт контролера автентифікації
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController; 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Маршрути для автентифікації
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Маршрути для користувачів
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', function () {
    return view('user.create'); // Повертає вигляд форми для створення нового користувача
})->name('users.create'); // Додаємо ім'я маршруту
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

// Захищений маршрут для панелі приладів
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Захищені маршрути для сторінок
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Додати захищені сторінки
    Route::get('/protected-page-1', [PageController::class, 'page1'])->name('protected.page1');
    Route::get('/protected-page-2', [PageController::class, 'page2'])->name('protected.page2');
});

Route::get('/page1', function () {
    return view('page1'); // сторінка 1
});

Route::get('/page2', function () {
    return view('page2'); // сторінка 2
});

require __DIR__.'/auth.php';
