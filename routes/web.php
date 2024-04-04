<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[PageController::class, 'index']);

Route::get('/order',[OrderController::class, 'create'])->name('order.create');