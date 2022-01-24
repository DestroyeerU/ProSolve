<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Problema;
use App\Models\Notificacao;

class ProblemasController extends Controller {
    public function create() {
        return view('problema');
    }

    public function store(Request $request) {
        $problema = Problema::create($request->all());
        $notificacao_data = array(
            'problema_id' => $problema->id,
            'mensagem' => "Sua publicação foi postada",
        );
        $notificacao = Notificacao::create($notificacao_data);

        return redirect()->route('feed', []);
    }
}
