<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowDataController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;

Route::get('/', [ShowDataController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

