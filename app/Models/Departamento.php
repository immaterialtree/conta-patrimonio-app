<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departamento extends Model
{
    use HasFactory, SoftDeletes;

    const CREATED_AT = 'criado_em';
    const UPDATED_AT = 'atualizado_em';
    const DELETED_AT = 'excluido_em';

    protected $fillable = [
        'codigo',
        'titulo',
    ];

    // Relacionamentos
    public function patrimonios(): HasMany
    {
        return $this->hasMany(Patrimonio::class);
    }

    public function patrimoniosContados(): HasManyThrough
    {
        return $this->hasManyThrough(PatrimonioContado::class, Patrimonio::class);
    }
}
