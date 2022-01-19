<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\ProblemasController;
use \App\Models\User;
use \App\Models\Problema;


Route::get('/', function () {
    $problemas = Problema::all();

    return view('feed', ['problemas' => $problemas]);
})->name('feed');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login/load', function (Request $req) {
    $email = $req->post('email');
    $senha = $req->post('senha');

    return redirect()->route('feed', []);
})->name('login.load');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::post('/cadastro/load', function (Request $req) {
    $nome = $req->post('nome');
    $email = $req->post('email');
    $senha = $req->post('senha');
    $data = $req->post('data');
    $telefone = $req->post('telefone');

    return redirect()->route('feed', []);
})->name('cadastro.load');

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
