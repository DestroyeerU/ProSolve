<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('feed');
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

