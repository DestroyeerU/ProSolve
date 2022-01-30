<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\ProblemasController;
use \App\Models\User;
use \App\Models\Problema;
use \App\Models\Notificacao;


Route::get('/', [ProblemasController::class, 'index'])->name('feed');
Route::get('/problemaDetalhes/{id}',  [ProblemasController::class, 'show'])->name('problema.detalhes');
Route::get('/problema', [ProblemasController::class, 'create'])->name('problema');
Route::post('/problema/criar', [ProblemasController::class, 'store'])->name('problema.criar');
Route::get('/problema/concluir/{id}', [ProblemasController::class, 'concluir']);

require __DIR__.'/auth.php';
