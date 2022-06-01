<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    use HasFactory;

    protected $table = "comentario";
    // protected $fillable = ['titulo'];
    // protected $hidden = ['id'];

    public function obtenerComentariosIdPost($id)
    {
        return Comentarios::all()->where('id_post', $id);
    }

    public function obtenerComentariosId($id)
    {
        return Comentarios::all()->where('id', $id);
    }

}
