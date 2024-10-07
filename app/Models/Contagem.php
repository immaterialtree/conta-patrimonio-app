<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contagem extends Model
{
    use HasFactory;

    protected $table = 'contagens';

    const CREATED_AT = 'criado_em';
    const UPDATED_AT = 'atualizado_em';
    // const DELETED_AT = 'finalizado_em';

    protected $fillable = [
        'status',
        'finalizado_em'
    ];
}
