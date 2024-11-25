<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProductController;

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/products/{product}/decrease-stock', [ProductController::class, 'decreaseStock'])->name('products.decreaseStock');
Route::post('/products/{product}/increase-stock', [ProductController::class, 'increaseStock'])->name('products.increaseStock');

Route::get('/', function () {
    return auth()->check() ? redirect('/dashboard') : redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
