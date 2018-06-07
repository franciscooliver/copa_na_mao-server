<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DadosFaseOne extends Model
{
    protected $fillable = [
        'id',
        'img_sel1',
        'img_sel2',
        'img_sel3',
        'img_sel4',
        'nome_sel1',
        'nome_sel2',
        'nome_sel3',
        'nome_sel4',
        'data_partida1',
        'data_partida2',
        'horario_partida1',
        'horario_partida2'
    ];
}
