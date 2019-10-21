<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
     
    protected $fillable = [
        'nombre', 'duracion', 'descripcion', 'categoria_id','autor_id',
    ];
}
