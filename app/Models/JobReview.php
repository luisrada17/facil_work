<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobReview extends Model
{
    use HasFactory;

    // La propiedad $guarded indica qué atributos NO pueden ser asignados masivamente (mass assignable).
    protected $guarded = [];

    // Relación muchos a uno con el modelo JobRequest
    // Este método define la relación entre la reseña de trabajo y la solicitud de trabajo (JobRequest).
    // Una reseña de trabajo pertenece a una solicitud de trabajo.
    public function jobRequest()
    {
        return $this->belongsTo(JobRequest::class);
    }

    // Relación muchos a uno con el modelo User
    // Este método define la relación entre la reseña de trabajo y el usuario (User).
    // Una reseña de trabajo pertenece a un usuario.
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
