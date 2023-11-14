<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model
{
    use HasFactory;

    // La propiedad $guarded indica qué atributos NO pueden ser asignados masivamente (mass assignable).
    protected $guarded = [];

    // Relación muchos a uno con el modelo User
    // Este método define la relación entre la solicitud de trabajo y el usuario (User).
    // Una solicitud de trabajo pertenece a un usuario.
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación muchos a uno con el modelo Category
    // Este método define la relación entre la solicitud de trabajo y la categoría (Category).
    // Una solicitud de trabajo pertenece a una categoría.
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relación muchos a uno con el modelo Skill
    // Este método define la relación entre la solicitud de trabajo y la habilidad (Skill).
    // Una solicitud de trabajo pertenece a una habilidad.
    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    // Relación uno a muchos con el modelo Quotation
    // Este método define la relación entre la solicitud de trabajo y las cotizaciones (Quotation).
    // Una solicitud de trabajo puede tener varias cotizaciones.
    public function quotations()
    {
        return $this->hasMany(Quotation::class);
    }

    // Relación uno a muchos con el modelo Visit
    // Este método define la relación entre la solicitud de trabajo y las visitas (Visit).
    // Una solicitud de trabajo puede tener varias visitas.
    public function visits()
    {
        return $this->hasMany(Visit::class);
    }

    public function images()
    {
        return $this->hasMany(JobRequestImage::class);
    }
}
