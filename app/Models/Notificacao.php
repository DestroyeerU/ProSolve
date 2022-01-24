<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacao extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'usuario_destino_id',
        'problema_id',
        'mensagem',
        'data',
    ];

    protected $table = 'notificacoes';
}
