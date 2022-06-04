<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    use HasFactory;

    protected $table = "respuesta";
    // protected $fillable = ['titulo'];
    // protected $hidden = ['id'];

    public function obtenerRespuestasIdComentario($id)
    {
        return Respuestas::all()->where('id_comentario', $id);
    }
}
