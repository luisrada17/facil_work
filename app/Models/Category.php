<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // La propiedad $guarded indica qué atributos NO pueden ser asignados masivamente (mass assignable).
    // En este caso, está vacía, lo que significa que todos los atributos pueden ser asignados masivamente.
    protected $fillable = [
        'name',
    ];

    
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}