<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    // La propiedad $fillable indica qué atributos pueden ser asignados masivamente (mass assignable).
    protected $fillable = [
        'category_id',
        'name'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}