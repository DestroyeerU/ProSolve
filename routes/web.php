<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProblemasController;
use \App\Models\User;
use \App\Models\Problema;


Route::get('/', function () {
    $problemas = Problema::all();

    return view('feed', ['problemas' => $problemas]);
})->name('feed');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/problemaDetalhes', function () {
    $problema = (object)array();
    $problema->data = "10/01/2022";
    $problema->endereco = "Rua Ronaldinho";
    $problema->titulo = "Buraco";
    $problema->descricao = "Descrição Massa";


    return view ('problemaDetalhes', ['problema' => $problema]);
})->name('problema.detalhes');

Route::get('/problema', [ProblemasController::class, 'create'])->name('problema');
Route::post('/problema/criar', [ProblemasController::class, 'store'])->name('problema.criar');

require __DIR__.'/auth.php';
