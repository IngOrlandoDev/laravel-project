<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolaController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', [HolaController::class, 'index']);

Route::get('/usuarios', [UsuarioController::class, 'index']);
