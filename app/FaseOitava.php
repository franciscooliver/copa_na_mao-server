<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaseOitava extends Model
{
    protected $fillable =
        [
            'id',
            'data',
            'horario',
            'url_img1',
            'url_img2',
            'nome_sel1',
            'nome_sel2'
        ];
}
