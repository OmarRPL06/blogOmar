<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['nombre','email','telefono','pass'];
    public $primaryKey = 'email';
    public $timesTamps =  false;
    public $updated_at = false;
    public $created_at = false;
}
