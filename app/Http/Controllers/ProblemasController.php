<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Problema;

class ProblemasController extends Controller {
    public function create() {
        return view('problema');
    }

    public function store(Request $req) {
        $problema = Problema::create($req->all());

        return redirect()->route('feed', []);
    }
}
