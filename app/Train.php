<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        'stazione_partenza',
        'orario_partenza',
        'orario_arrivo',
        'codice_treno',
        'numero_carrozze'
    ];
}
