<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DadosSelecoes extends Model
{
    protected $fillable = [
        'id','pontos_sel1','pontos_sel2','pontos_sel3','pontos_sel4',
        'vitorias_sel1','vitorias_sel2','vitorias_sel3','vitorias_sel4',
        'empates_sel1','empates_sel2','empates_sel3','empates_sel4',
        'derrotas_sel1','derrotas_sel2','derrotas_sel3','derrotas_sel4',
        'fk_grupo'
    ];

    public function grupo(){
        return $this->belongsTo('App\Grupo');
    }
}
