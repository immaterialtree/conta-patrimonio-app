<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classificacao extends Model
{
    use HasFactory;

    protected $table = 'classificacoes';

    public $timestamps = false;

    protected $fillable = [
        'titulo',
    ];

    // Relacionamentos
    public function patrimonios()
    {
        return $this->hasMany(Patrimonio::class);
    }
}
