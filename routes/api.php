<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::apiResource('product', ProductController::class);
Route::apiResource('category', CategoryController::class);
