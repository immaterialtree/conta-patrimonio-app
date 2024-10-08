<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ContagemPatrimonio extends Pivot
{
    public $incrementing = true;

    protected $fillable = [
        'contagem_id',
        'patrimonio_id',
        'usuario_id',
        'nova_classificacao_id',
        'foto',
        'nao_encontrado',
        'justificativa',
    ];

    protected $casts = [
        'nao_encontrado' => 'boolean',
    ];
}
