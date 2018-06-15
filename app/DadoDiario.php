<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DadoDiario extends Model
{
    protected $fillable = [
        'id',
        'url_img1',
        'url_img2',
        'text1',
        'text2',
        'hora_partida',
        'data'
    ];
}
