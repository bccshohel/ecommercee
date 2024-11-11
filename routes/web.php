<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware(['auth','admin'])->group(function(){
    Route::name('category.')->group(function(){
        Route::get('/category', [CategoryController::class, 'index'])->name('index');
        Route::get('/category-list', [CategoryController::class, 'list']);
        Route::post('/category-store', [CategoryController::class, 'store']);
        Route::post('/category-byId', [CategoryController::class, 'byId']);
        Route::post('/category-update', [CategoryController::class, 'update']);
        Route::post('/category-delete', [CategoryController::class, 'delete']);
    });
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
