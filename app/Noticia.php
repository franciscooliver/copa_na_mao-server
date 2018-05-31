<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = [
        'id',
        'url_img',
        'titulo_noticia',
        'conteudo_noticia'
    ];
}
