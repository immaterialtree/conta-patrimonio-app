<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patrimonio extends Model
{
    use HasFactory, SoftDeletes;

    const CREATED_AT = 'criado_em';

    const UPDATED_AT = 'atualizado_em';

    const DELETED_AT = 'excluido_em';

    protected $fillable = [
        'codigo',
        'descricao',
        'departamento_id',
        'classificacao_id',
    ];

    // Relacionamento
    public function classificacao(): BelongsTo
    {
        return $this->belongsTo(Classificacao::class);
    }

    public function departamento(): BelongsTo
    {
        return $this->belongsTo(Departamento::class);
    }
}
