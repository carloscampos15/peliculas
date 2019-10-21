<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'id_video', 'id_usuario', 'descripcion',
    ];
}
