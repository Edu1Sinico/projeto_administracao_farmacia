<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Rota para exibir o formulário de login
Route::get('/login', [UserController::class, 'showLoginForm'])->name('usuarios.login');

// Rota para processar o login
Route::post('/login', [UserController::class, 'login'])->name('usuarios.login');

// Rota para exibir o formulário de registro
Route::get('/registro', [UserController::class, 'showRegistroForm'])->name('usuarios.registro');

// Rota para processar o registro
Route::post('/registro', [UserController::class, 'registro'])->name('usuarios.registro');

// Rota para logout
Route::post('/logout', [UserController::class, 'logout'])->name('usuario.logout');

