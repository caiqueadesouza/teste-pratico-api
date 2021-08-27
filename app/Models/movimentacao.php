<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{

    protected $table = "movimentacaos";

    protected $fillable = [
        'tipo_movimentacao',
        'inicio',
        'fim',
        'container_id'
    ];

    public function container()
    {
        return $this->belongsTo(Container::class, 'container_id');
    }
}
