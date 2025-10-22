<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;

// Gunakan apiResource agar otomatis generate route CRUD
Route::apiResource('genres', GenreController::class);
Route::apiResource('authors', AuthorController::class);
