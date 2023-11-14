<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    // La propiedad $guarded indica qué atributos NO pueden ser asignados masivamente (mass assignable).
    protected $guarded = [];

    // Relación muchos a uno con el modelo JobRequest
    // Este método define la relación entre la cotización y la solicitud de trabajo (JobRequest).
    // Una cotización pertenece a una solicitud de trabajo.
    public function jobRequest()
    {
        return $this->belongsTo(JobRequest::class);
    }

    // Relación muchos a uno con el modelo User
    // Este método define la relación entre la cotización y el usuario (User) que realizó la cotización.
    // Una cotización pertenece a un usuario.
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
