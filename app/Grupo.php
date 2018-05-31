<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DadosSelecoes;

class Grupo extends Model
{
    protected $fillable = [
        'id',
        'nome_grupo',
        'cam_img1',
        'cam_img2',
        'cam_img3',
        'cam_img4',
        'nome_selecao1',
        'nome_selecao2',
        'nome_selecao3',
        'nome_selecao4'
    ];

    public function dados(){
        return $this->hasMany('App\DadosSelecoes');
    }
}
