<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class,'index']);

Route::get('/books', [BookController::class,'index']);
Route::get('/books/{id}', [BookController::class,'show']);

Route::get('/members', [MembersController::class,'index']);

Route::get('/categories', [CategoriesController::class,'index']);
