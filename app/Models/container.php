<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    protected $table = "containers";

    protected $fillable = [
        'cliente',
        'numero',
        'tipo',
        'status',
        'categoria',
    ];
}
