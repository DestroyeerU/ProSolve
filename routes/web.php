<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    $problema1 = (object)[
        "usuario" => "Usuário Teste",
        "data" => "2 January at 9:30",
        "endereco" => "Rua joaquim amaral",
        "titulo" => "Meu titulo",
        "descricao" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    ];

    $problema2 = (object)[
        "usuario" => "Usuário Teste",
        "data" => "2 de setembro, 2021",
        "endereco" => "Rua joaquim Lobo",
        "titulo" => "Rua sem asfalto",
        "descricao" => "Queremos sorvete com mel!",
    ];

    $problemas = [
        $problema1,
        $problema2,
    ];

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

Route::get('/problema', function () {
    return view('problema');
})->name('problema');

Route::post('/problema/criar', function (Request $req) {
    $titulo = $req->post('titulo');
    $endereco = $req->post('endereco');
    $data = $req->post('data');
    $descricao = $req->post('descricao');

    return redirect()->route('feed', []);
})->name('problema.criar');

