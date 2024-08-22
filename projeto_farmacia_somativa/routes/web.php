<?php

use App\Http\Controllers\ListMedicamentosController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendaController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ListMedicamentoMiddleware;
use App\Http\Middleware\FuncionarioMiddleware;

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

// Rota para a lista de medicamentos
Route::get('/list', [ListMedicamentosController::class, 'index'])->name('list');

Route::resource('/medicamentos', MedicamentoController::class)->middleware(FuncionarioMiddleware::class)->except('show');

Route::get('medicamentos/{medicamento}', [MedicamentoController::class, 'show'])->name('medicamentos.show');

Route::post('venda/add/{medicamento}', [VendaController::class, 'add'])->name('venda.add');
