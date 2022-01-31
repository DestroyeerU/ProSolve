<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProblemasController;
use \App\Models\User;
use \App\Models\Problema;
use \App\Models\Notificacao;


Route::get('/cadastro', [UserController::class, 'create'])->name('cadastro');
Route::post('/cadastro/load', [UserController::class, 'store'])->name('cadastro.load');
Route::get('/login', [UserController::class, 'create1'])->name('login');
Route::post('/login/load', [UserController::class, 'authenticate'])->name('login.load');
Route::get('/', [ProblemasController::class, 'index'])->name('feed');
Route::get('/problemaDetalhes/{id}',  [ProblemasController::class, 'show'])->name('problema.detalhes');
Route::get('/problema', [ProblemasController::class, 'create'])->name('problema');
Route::post('/problema/criar', [ProblemasController::class, 'store'])->name('problema.criar');
Route::get('/problema/concluir/{id}', [ProblemasController::class, 'concluir']);

