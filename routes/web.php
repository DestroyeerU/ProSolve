<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\ProblemasController;
use \App\Models\User;
use \App\Models\Problema;
use \App\Models\Notificacao;


Route::get('/', function () {
    $problemas = Problema::all();
    $notificacoes = Notificacao::all();

    return view('feed', ['problemas' => $problemas, 'notificacoes' => $notificacoes]);
})->name('feed');

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

Route::get('/problemaDetalhes/{id}', function ($id) {
    $problema = Problema::find($id);
    
    return view ('problemaDetalhes', ['problema' => $problema]);
})->name('problema.detalhes');

Route::get('/problema', [ProblemasController::class, 'create'])->name('problema');
Route::post('/problema/criar', [ProblemasController::class, 'store'])->name('problema.criar');

require __DIR__.'/auth.php';
