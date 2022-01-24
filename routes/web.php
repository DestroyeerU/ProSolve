<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\ProblemasController;
use \App\Models\User;
use \App\Models\Problema;
use \App\Models\Notificacao;



Route::post('/login/load', function (Request $req) {
    $email = $req->post('email');
    $senha = $req->post('senha');

    return redirect()->route('feed', []);
})->name('login.load');

Route::post('/cadastro/load', function (Request $req) {
    $nome = $req->post('nome');
    $email = $req->post('email');
    $senha = $req->post('senha');
    $data = $req->post('data');
    $telefone = $req->post('telefone');

    return redirect()->route('feed', []);
})->name('cadastro.load');

Route::get('/', [ProblemasController::class, 'index'])->name('feed');
Route::get('/problemaDetalhes/{id}',  [ProblemasController::class, 'show'])->name('problema.detalhes');
Route::get('/problema', [ProblemasController::class, 'create'])->name('problema');
Route::post('/problema/criar', [ProblemasController::class, 'store'])->name('problema.criar');

// Route::get('/problema/concluir/{id}', 'ProblemasController@concluir');

require __DIR__.'/auth.php';
