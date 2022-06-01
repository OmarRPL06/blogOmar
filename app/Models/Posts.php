<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $table = 'post';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    // protected $hidden = ['id'];
    protected $fillable = [
        'id', 'email_redactor', 'categoria', 'titulo', 'contenido','imagen','tags'
    ];

    public function obtenerPosts()
    {
        return Posts::all();
    }

    public function obtenerCategoriaPost($categoria)
    {
        return Posts::all()->where('categoria', $categoria);
    }

    public function obtenerPostId($id)
    {
        return Posts::all()->where('id', $id);
    }

    public function EliminarPost($id)
    {
        return Posts::delete()->where('id', $id);
    }
}
