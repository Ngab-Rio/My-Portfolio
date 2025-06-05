<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowDataController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Str;

Route::get('/', [ShowDataController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');


