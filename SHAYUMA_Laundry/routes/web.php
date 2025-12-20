<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'));
Route::get('/login', fn() => view('login'));
Route::post('/login', [AuthController::class, 'login']);
Route::get('/order', [OrderController::class, 'index']);

