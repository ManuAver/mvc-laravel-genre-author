<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\TransactionController;

// --- ROUTE YANG TERBUKA UNTUK UMUM (TIDAK PERLU AUTENTIKASI) ---
Route::get('genres', [GenreController::class, 'index']);
Route::get('genres/{id}', [GenreController::class, 'show']);
Route::get('authors', [AuthorController::class, 'index']);
Route::get('authors/{id}', [AuthorController::class, 'show']);

// --- ROUTE YANG HANYA UNTUK ADMIN (HARUS LOGIN DAN ROLE ADMIN) ---
Route::middleware(['auth:api', 'admin'])->group(function () {
    // Genre
    Route::post('genres', [GenreController::class, 'store']);
    Route::put('genres/{id}', [GenreController::class, 'update']);
    Route::delete('genres/{id}', [GenreController::class, 'destroy']);

    // Author
    Route::post('authors', [AuthorController::class, 'store']);
    Route::put('authors/{id}', [AuthorController::class, 'update']);
    Route::delete('authors/{id}', [AuthorController::class, 'destroy']);

    // Transaction (Admin only)
    Route::get('transactions', [TransactionController::class, 'index']); // Read All
    Route::delete('transactions/{id}', [TransactionController::class, 'destroy']); // Destroy
});

// --- ROUTE YANG HANYA UNTUK CUSTOMER (HARUS LOGIN) ---
Route::middleware(['auth:api'])->group(function () {
    Route::post('transactions', [TransactionController::class, 'store']); // Create
    Route::put('transactions/{id}', [TransactionController::class, 'update']); // Update
    Route::get('transactions/{id}', [TransactionController::class, 'show']); // Show
});
