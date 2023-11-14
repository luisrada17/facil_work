<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;

    // La propiedad $fillable indica qué atributos pueden ser asignados masivamente (mass assignable).
    protected $fillable = ['user_id', 'category_id', 'expiration_date'];

    // Relación muchos a uno con el modelo User
    // Este método define la relación entre la certificación y el usuario (User).
    // Una certificación pertenece a un usuario.
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación muchos a uno con el modelo Category
    // Este método define la relación entre la certificación y la categoría (Category).
    // Una certificación pertenece a una categoría.
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
